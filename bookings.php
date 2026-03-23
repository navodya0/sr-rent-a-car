<?php
session_start();

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/assets/includes/db_connect.php';

function normalizeUploadPath($path) {
    $path = trim((string)$path);

    if ($path === '') {
        return '';
    }

    $path = str_replace('\\', '/', $path);

    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }

    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

    if ($basePath === '/' || $basePath === '\\') {
        $basePath = '';
    }

    if (strpos($path, '/assets/uploads/') !== false) {
        return $scheme . '://' . $host . $basePath . substr($path, strpos($path, '/assets/uploads/'));
    }

    if (strpos($path, 'assets/uploads/') === 0) {
        return $scheme . '://' . $host . $basePath . '/' . ltrim($path, '/');
    }

    if (strpos($path, '/uploads/') !== false) {
        return $scheme . '://' . $host . $basePath . substr($path, strpos($path, '/uploads/'));
    }

    if (strpos($path, 'uploads/') === 0) {
        return $scheme . '://' . $host . $basePath . '/' . ltrim($path, '/');
    }

    return $scheme . '://' . $host . $basePath . '/' . ltrim($path, '/');
}

function buildReservationPdfUrl($pdfCode) {
    $pdfCode = trim((string)$pdfCode);

    if ($pdfCode === '') {
        return '';
    }

    return 'https://srilankarentacar.com/bill.php?token=' . rawurlencode($pdfCode);
}

$bookingReservations = [];
$reservations = [];
$dbError = '';

try {
    $stmt = $pdo->query("
        SELECT
            id,
            days,
            grand_total,
            full_name,
            email,
            country_of_residence,
            confirmation_pdf,
            pickup_datetime,
            dropoff_datetime,
            passport_image,
            idp_image,
            applicant_photo
        FROM booking_reservations
        ORDER BY id DESC
    ");
    $bookingReservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $dbError = 'Could not load booking_reservations.';
}

try {
    $stmt = $pdo->query("
        SELECT
            id,
            name,
            email,
            country_code,
            contact_number,
            service_type,
            pickup_location,
            pickup_datetime,
            dropoff_location,
            dropoff_datetime,
            millage,
            chauffeur_needed,
            license_needed,
            passport_copy,
            idp_copy,
            applicant_photo,
            requirements,
            car_code,
            extras,
            passenger_adults,
            passenger_children,
            passenger_infants,
            return_transfer,
            extras_charge,
            total_rate,
            total_charge,
            pdf_code,
            passengers,
            created_at,
            flight_number
        FROM reservations
        ORDER BY id DESC
    ");
    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $dbError .= ($dbError ? ' ' : '') . 'Could not load reservations.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bookings | SR Rent A Car</title>
<link rel="icon" type="image/png" href="assets/images/favicon.ico">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<style>
    body {
        margin: 0;
        background: #f4f7fb;
        font-family: Cambria, serif;
        color: #1b2f4a;
        font-size:12px;
    }

    .main-content {
        margin-left: 240px;
        min-height: 100vh;
        padding: 28px;
    }

    .page-card {
        background: #fff;
        border-radius: 14px;
        padding: 22px;
        box-shadow: 0 10px 24px rgba(10, 40, 90, 0.08);
        margin-bottom: 24px;
    }

    .page-title {
        margin: 0;
        font-size: 28px;
        color: #0b2c5f;
    }

    .page-subtitle {
        margin: 6px 0 0;
        color: #6b7a90;
        font-size: 14px;
    }

    .nav-tabs .nav-link {
        color: #031c45;
        font-weight: 700;
    }

    .nav-tabs .nav-link.active {
        background: #031c45;
        color: #fff;
        border-color: #031c45;
    }

    .table {
        font-size: 12px !important;
        vertical-align: middle;
    }

    .table th,
    .table td {
        font-size: 12px !important;
        white-space: nowrap;
        vertical-align: middle;
    }

    .price-badge {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 999px;
        background: #edf4ff;
        color: #0b4f9c;
        font-weight: 700;
    }

    .doc-btn,
    .pdf-link {
        display: inline-block;
        padding: 6px 10px;
        border-radius: 6px;
        font-size: 12px;
        text-decoration: none;
        border: none;
        cursor: pointer;
    }

    .doc-btn {
        background: #370707;
        color: #fff;
    }

    .pdf-link {
        background: #031c45;
        color: #fff;
    }

    .doc-btn:hover,
    .pdf-link:hover {
        opacity: 0.92;
        color: #fff;
    }

    .modal-doc-img {
        width: 100%;
        height: 220px;
        object-fit: contain;
        border: 1px solid #ddd;
        border-radius: 8px;
        background: #f8f9fa;
    }

    .doc-empty {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 220px;
        border: 1px dashed #ccc;
        border-radius: 8px;
        background: #fafafa;
        color: #6c757d;
        font-size: 12px;
    }

    .dataTables_wrapper .dataTables_filter input,
    .dataTables_wrapper .dataTables_length select {
        font-size: 12px;
    }

    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate {
        font-size: 12px;
    }

    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
            padding: 18px;
        }
    }

    .modal-doc-pdf {
        width: 100%;
        height: 220px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background: #f8f9fa;
    }
</style>
</head>
<body>

<?php include 'assets/includes/sidebar.php'; ?>

<div class="main-content">
    <div class="page-card">
        <h1 class="page-title fw-bold">Bookings</h1>
        <p class="page-subtitle">View and manage reservation records.</p>
    </div>

    <div class="page-card">
        <?php if (!empty($dbError)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($dbError, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>

        <ul class="nav nav-tabs mb-3" id="bookingTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="booking-reservations-tab" data-bs-toggle="tab" data-bs-target="#booking-reservations-pane" type="button" role="tab">
                    Booking Reservations
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reservations-tab" data-bs-toggle="tab" data-bs-target="#reservations-pane" type="button" role="tab">
                    Old Reservations
                </button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="booking-reservations-pane" role="tabpanel">
                <div class="table-responsive">
                    <table id="bookingReservationsTable" class="table table-bordered table-striped align-middle w-100">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Pickup</th>
                                <th>Dropoff</th>
                                <th>Days</th>
                                <th>Grand Total</th>
                                <th>Documents</th>
                                <th>Confirmation PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bookingReservations as $row): ?>
                                <tr>
                                    <td><?php echo 'SR/RENT - ' . str_pad((int)$row['id'], 3, '0', STR_PAD_LEFT); ?></td>
                                    <td><?php echo htmlspecialchars($row['full_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($row['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($row['country_of_residence'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo !empty($row['pickup_datetime']) ? date('d M Y, H:i', strtotime($row['pickup_datetime'])) : '-'; ?></td>
                                    <td><?php echo !empty($row['dropoff_datetime']) ? date('d M Y, H:i', strtotime($row['dropoff_datetime'])) : '-'; ?></td>
                                    <td><?php echo (int)($row['days'] ?? 0); ?></td>
                                    <td><span class="price-badge">€ <?php echo number_format((float)$row['grand_total'], 2, '.', ','); ?></span></td>
                                    <td>
                                        <button class="doc-btn"
                                            type="button"
                                            onclick='openDocsModal(
                                                <?php echo json_encode(normalizeUploadPath($row["passport_image"] ?? "")); ?>,
                                                <?php echo json_encode(normalizeUploadPath($row["idp_image"] ?? "")); ?>,
                                                <?php echo json_encode(normalizeUploadPath($row["applicant_photo"] ?? "")); ?>
                                            )'>
                                            View Docs
                                        </button>
                                    </td>
                                    <td>
                                        <?php if (!empty($row['confirmation_pdf'])): ?>
                                            <a class="pdf-link" href="<?php echo htmlspecialchars(normalizeUploadPath($row['confirmation_pdf']), ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
                                                View PDF
                                            </a>
                                        <?php else: ?>
                                            <span class="text-muted">Not available</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="reservations-pane" role="tabpanel">
                <div class="table-responsive">
                    <table id="reservationsTable" class="table table-bordered table-striped align-middle w-100">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Dates</th>
                                <th>Total Charge</th>
                                <th>Flight No</th>
                                <th>PDF</th>
                                <th>Documents</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($reservations as $row): ?>
                                <?php
                                    $passportPath = normalizeUploadPath($row['passport_copy'] ?? '');
                                    $idpPath = normalizeUploadPath($row['idp_copy'] ?? '');
                                    $photoPath = normalizeUploadPath($row['applicant_photo'] ?? '');
                                    $reservationPdfUrl = buildReservationPdfUrl($row['pdf_code'] ?? '');
                                ?>
                                <tr>
                                    <td><?php echo 'SR/RENT-' . str_pad((int)$row['id'], 3, '0', STR_PAD_LEFT); ?></td>
                                    <td><?php echo htmlspecialchars($row['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($row['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars(trim(($row['country_code'] ?? '') . ' ' . ($row['contact_number'] ?? '')), ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td>
                                        <?php echo !empty($row['pickup_datetime']) ? date('d M Y, H:i', strtotime($row['pickup_datetime'])) : '-'; ?> : <?php echo !empty($row['dropoff_datetime']) ? date('d M Y, H:i', strtotime($row['dropoff_datetime'])) : '-'; ?>
                                    </td>
                                    <td><span class="price-badge">€ <?php echo number_format((float)$row['total_charge'], 2, '.', ','); ?></span></td>
                                    <td><?php echo htmlspecialchars($row['flight_number'] ?? '-', ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td>
                                        <?php if ($reservationPdfUrl !== ''): ?>
                                            <a class="pdf-link" href="<?php echo htmlspecialchars($reservationPdfUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
                                                View PDF
                                            </a>
                                        <?php else: ?>
                                            <span class="text-muted">Not available</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button class="doc-btn"
                                            type="button"
                                            onclick='openDocsModal(
                                                <?php echo json_encode($passportPath); ?>,
                                                <?php echo json_encode($idpPath); ?>,
                                                <?php echo json_encode($photoPath); ?>
                                            )'>
                                            View Docs
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="docsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Documents</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <p class="fw-bold mb-2">Passport</p>
                        <img id="passportImg" class="modal-doc-img" src="" alt="Passport" style="display:none;">
                        <embed id="passportPdf" class="modal-doc-pdf" src="" type="application/pdf" style="display:none;">
                        <div class="mt-2">
                            <a id="passportLink" class="pdf-link" href="#" target="_blank" style="display:none;">Open PDF</a>
                        </div>
                        <div id="passportEmpty" class="doc-empty">No passport file</div>
                    </div>

                    <div class="col-md-4">
                        <p class="fw-bold mb-2">IDP</p>
                        <img id="idpImg" class="modal-doc-img" src="" alt="IDP" style="display:none;">
                        <embed id="idpPdf" class="modal-doc-pdf" src="" type="application/pdf" style="display:none;">
                        <div class="mt-2">
                            <a id="idpLink" class="pdf-link" href="#" target="_blank" style="display:none;">Open PDF</a>
                        </div>
                        <div id="idpEmpty" class="doc-empty">No IDP file</div>
                    </div>

                    <div class="col-md-4">
                        <p class="fw-bold mb-2">Photo</p>
                        <img id="photoImg" class="modal-doc-img" src="" alt="Photo" style="display:none;">
                        <embed id="photoPdf" class="modal-doc-pdf" src="" type="application/pdf" style="display:none;">
                        <div class="mt-2">
                            <a id="photoLink" class="pdf-link" href="#" target="_blank" style="display:none;">Open PDF</a>
                        </div>
                        <div id="photoEmpty" class="doc-empty">No applicant file</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#bookingReservationsTable').DataTable({
            pageLength: 10,
            lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
            ordering: false
        });

        $('#reservationsTable').DataTable({
            pageLength: 10,
            lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
            ordering: false
        });

        $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function () {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
        });
    });


    function resetDocument(imgId, pdfId, linkId, emptyId) {
        $(imgId).hide().attr('src', '');
        $(pdfId).hide().attr('src', '');
        $(linkId).hide().attr('href', '#');
        $(emptyId).css('display', 'flex');
    }

    function showDocument(path, imgId, pdfId, linkId, emptyId) {
        resetDocument(imgId, pdfId, linkId, emptyId);

        if (!path || path.trim() === '') {
            return;
        }

        const cleanPath = path.split('?')[0].split('#')[0];
        const ext = cleanPath.split('.').pop().toLowerCase();

        if (ext === 'pdf') {
            $(pdfId).attr('src', path).show();
            $(linkId).attr('href', path).show();
            $(emptyId).hide();
        } else {
            $(imgId)
                .attr('src', path)
                .show()
                .off('error')
                .on('error', function () {
                    resetDocument(imgId, pdfId, linkId, emptyId);
                });

            $(emptyId).hide();
        }
    }

    function openDocsModal(passport, idp, photo) {
        showDocument(passport, '#passportImg', '#passportPdf', '#passportLink', '#passportEmpty');
        showDocument(idp, '#idpImg', '#idpPdf', '#idpLink', '#idpEmpty');
        showDocument(photo, '#photoImg', '#photoPdf', '#photoLink', '#photoEmpty');

        var modal = new bootstrap.Modal(document.getElementById('docsModal'));
        modal.show();
    }

    function setDocImage(imgId, emptyId, src) {
        var img = document.getElementById(imgId);
        var empty = document.getElementById(emptyId);

        if (src && src.trim() !== '') {
            img.src = src;
            img.style.display = 'block';
            empty.style.display = 'none';

            img.onerror = function () {
                img.style.display = 'none';
                empty.style.display = 'flex';
            };
        } else {
            img.removeAttribute('src');
            img.style.display = 'none';
            empty.style.display = 'flex';
        }
    }
</script>

</body>
</html>