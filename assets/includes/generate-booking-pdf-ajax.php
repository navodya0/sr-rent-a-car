<?php
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);

require_once dirname(__DIR__, 2) . '/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

$modx = new modX();
$modx->initialize('web');

require_once __DIR__ . '/db_connect.php';
require_once __DIR__ . '/generate-booking-pdf.php';

header('Content-Type: application/json; charset=UTF-8');

try {
    $bookingId = (int)($_POST['booking_id'] ?? 0);

    if ($bookingId <= 0) {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid booking ID.'
        ]);
        exit;
    }

    $stmt = $modx->prepare("
        SELECT br.*, v.car_model
        FROM booking_reservations br
        LEFT JOIN vehicles v ON v.id = br.vehicle_id
        WHERE br.id = :id
        LIMIT 1
    ");

    if (!$stmt) {
        echo json_encode([
            'success' => false,
            'message' => 'Could not prepare booking query.'
        ]);
        exit;
    }

    $stmt->bindValue(':id', $bookingId, PDO::PARAM_INT);

    if (!$stmt->execute()) {
        $err = $stmt->errorInfo();
        echo json_encode([
            'success' => false,
            'message' => 'Could not load booking: ' . ($err[2] ?? 'Unknown DB error')
        ]);
        exit;
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        echo json_encode([
            'success' => false,
            'message' => 'Booking not found.'
        ]);
        exit;
    }

    if (!empty($row['confirmation_pdf'])) {
        echo json_encode([
            'success' => true,
            'pdf_url' => MODX_SITE_URL . ltrim($row['confirmation_pdf'], '/')
        ]);
        exit;
    }

    $pdfPath = generateBookingPdfFile([
        'booking_id'               => $row['id'],
        'car_model'                => $row['car_model'],
        'car_code'                 => $row['car_code'],
        'pickup_datetime'          => $row['pickup_datetime'],
        'dropoff_datetime'         => $row['dropoff_datetime'],
        'pickup_location'          => $row['pickup_location'],
        'dropoff_location'         => $row['dropoff_location'],
        'days'                     => $row['days'],
        'coverage_name'            => $row['coverage_name'],
        'coverage_total'           => $row['coverage_total'],
        'rental_amount'            => $row['rental_amount'],
        'extras_total'             => $row['extras_total'],
        'grand_total'              => $row['grand_total'],
        'security_deposit'         => $row['security_deposit'],
        'full_name'                => $row['full_name'],
        'email'                    => $row['email'],
        'whatsapp_country_code'    => $row['whatsapp_country_code'],
        'whatsapp_number'          => $row['whatsapp_number'],
        'country_of_residence'     => $row['country_of_residence'],
        'passengers'               => $row['passengers'],
        'flight_number'            => $row['flight_number'],
        'need_chauffeur'           => $row['need_chauffeur'],
        'need_sl_license'          => $row['need_sl_license'],
        'chauffeur_fee'            => $row['chauffeur_fee'],
        'license_fee'              => $row['license_fee'],
        'payment_option'           => $row['payment_option'],
        'remarks'                  => $row['remarks'],
        'extras_json'              => $row['extras_json'],
        'discount_raw'             => $row['discount_raw'],
        'discount_percent'         => $row['discount_percent'],
        'original_rental_amount'   => $row['original_rental_amount'],
        'discounted_rental_amount' => $row['discounted_rental_amount'],
    ]);

    if (!$pdfPath) {
        echo json_encode([
            'success' => false,
            'message' => 'PDF generation failed inside generateBookingPdfFile().'
        ]);
        exit;
    }

    $fullPdfFsPath = dirname(__DIR__) . '/uploads/booking-pdfs/booking_' . (int)$bookingId . '.pdf';

    if (!is_file($fullPdfFsPath)) {
        echo json_encode([
            'success' => false,
            'message' => 'PDF path returned but file not found on server: ' . $fullPdfFsPath
        ]);
        exit;
    }

    $updateStmt = $modx->prepare("
        UPDATE booking_reservations
        SET confirmation_pdf = :confirmation_pdf
        WHERE id = :id
        LIMIT 1
    ");

    if (!$updateStmt) {
        echo json_encode([
            'success' => false,
            'message' => 'PDF created, but DB update query failed.'
        ]);
        exit;
    }

    $updateStmt->bindValue(':confirmation_pdf', $pdfPath, PDO::PARAM_STR);
    $updateStmt->bindValue(':id', $bookingId, PDO::PARAM_INT);

    if (!$updateStmt->execute()) {
        $err = $updateStmt->errorInfo();
        echo json_encode([
            'success' => false,
            'message' => 'PDF created, but DB update failed: ' . ($err[2] ?? 'Unknown DB error')
        ]);
        exit;
    }

    echo json_encode([
        'success' => true,
        'pdf_url' => MODX_SITE_URL . ltrim($pdfPath, '/')
    ]);
    exit;

} catch (Throwable $e) {
    error_log('generate-booking-pdf-ajax.php error: ' . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => 'Server error: ' . $e->getMessage()
    ]);
    exit;
}