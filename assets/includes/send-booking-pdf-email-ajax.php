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

    if (empty($row['confirmation_pdf'])) {
        echo json_encode([
            'success' => false,
            'message' => 'PDF not found for this booking.'
        ]);
        exit;
    }

    $pdfPathFs = dirname(__DIR__, 2) . '/' . ltrim($row['confirmation_pdf'], '/');

    if (!is_file($pdfPathFs)) {
        echo json_encode([
            'success' => false,
            'message' => 'PDF file does not exist on server.'
        ]);
        exit;
    }

    $sent = sendBookingPdfToCustomer([
        'booking_id' => $row['id'],
        'full_name'  => $row['full_name'],
        'email'      => $row['email'],
    ], $pdfPathFs);

    echo json_encode([
        'success' => $sent,
        'message' => $sent ? 'Email sent successfully.' : 'Email sending failed.'
    ]);
    exit;

} catch (Throwable $e) {
    error_log('send-booking-pdf-email-ajax.php error: ' . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => 'Server error: ' . $e->getMessage()
    ]);
    exit;
}