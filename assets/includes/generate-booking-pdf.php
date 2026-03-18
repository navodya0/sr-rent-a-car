<?php
declare(strict_types=1);

use Dompdf\Dompdf;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

if (!function_exists('generateBookingPdfFile')) {
    function generateBookingPdfFile(array $bookingData): ?string
    {
        $bookingId = (int)($bookingData['booking_id'] ?? 0);
        if ($bookingId <= 0) {
            return null;
        }

        $root = dirname(__DIR__, 2);

        $pdfDirFs  = dirname(__DIR__) . '/uploads/booking-pdfs/';
        $pdfDirRel = 'assets/uploads/booking-pdfs/';

        if (!is_dir($pdfDirFs)) {
            mkdir($pdfDirFs, 0755, true);
        }

        $fileName   = 'booking_' . $bookingId . '.pdf';
        $pdfPathFs  = $pdfDirFs . $fileName;
        $pdfPathRel = $pdfDirRel . $fileName;

        $companyName    = 'SR Rent A Car';
        $companyLine1   = 'Seeduwa, Sri Lanka';
        $companyLine2   = 'Email: info@srilankarentacar.com';
        $companyWebsite = 'Web: https://srilankarentacar.com/';
        $currency       = 'EUR';

        $invoiceTitle = 'Booking Invoice';
        $invoiceDate  = date('Y-m-d H:i');
        $bookingRef   = 'BK-' . $bookingId;

        $vehicleName      = (string)($bookingData['car_model'] ?? '');
        $carCode          = (string)($bookingData['car_code'] ?? '');
        $pickupLocation   = (string)($bookingData['pickup_location'] ?? '');
        $dropoffLocation  = (string)($bookingData['dropoff_location'] ?? '');
        $pickupDatetime   = (string)($bookingData['pickup_datetime'] ?? '');
        $dropoffDatetime  = (string)($bookingData['dropoff_datetime'] ?? '');
        $days             = (int)($bookingData['days'] ?? 0);

        $coverageName     = (string)($bookingData['coverage_name'] ?? '');
        $coverageTotal    = (float)($bookingData['coverage_total'] ?? 0);
        $rentalAmount     = (float)($bookingData['rental_amount'] ?? 0);
        $extrasTotal      = (float)($bookingData['extras_total'] ?? 0);
        $grandTotal       = (float)($bookingData['grand_total'] ?? 0);
        $securityDeposit  = (float)($bookingData['security_deposit'] ?? 0);

        $customerName     = (string)($bookingData['full_name'] ?? '');
        $customerEmail    = (string)($bookingData['email'] ?? '');
        $customerWhatsapp = trim((string)($bookingData['whatsapp_country_code'] ?? '') . ' ' . (string)($bookingData['whatsapp_number'] ?? ''));
        $customerCountry  = (string)($bookingData['country_of_residence'] ?? '');
        $customerFlight   = (string)($bookingData['flight_number'] ?? '');
        $customerNotes    = (string)($bookingData['remarks'] ?? '');
        $paymentOption    = (string)($bookingData['payment_option'] ?? '');
        $needChauffeur    = (string)($bookingData['need_chauffeur'] ?? '');
        $needSlLicense    = (string)($bookingData['need_sl_license'] ?? '');

        $extras = json_decode((string)($bookingData['extras_json'] ?? ''), true);
        $extrasSummary = 'No additional extras';
        if (is_array($extras) && !empty($extras)) {
            $names = [];
            foreach ($extras as $extra) {
                $name = trim((string)($extra['name'] ?? ''));
                $qty  = (int)($extra['qty'] ?? 1);
                if ($name !== '') {
                    $names[] = $name . ' x ' . $qty;
                }
            }
            if (!empty($names)) {
                $extrasSummary = implode(', ', array_slice($names, 0, 3));
                if (count($names) > 3) {
                    $extrasSummary .= ', ...';
                }
            }
        }

        $logoFile = $root . '/assets/images/logo.png';
        $logoDataUri = '';
        if (is_file($logoFile)) {
            $type = pathinfo($logoFile, PATHINFO_EXTENSION);
            $data = file_get_contents($logoFile);
            if ($data !== false) {
                $logoDataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);
            }
        }

        $h = static function (?string $v): string {
            return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
        };

        $fmt = static function (float $amount) use ($currency): string {
            return $currency . ' ' . number_format($amount, 2, '.', ',');
        };

        $vehicleDisplay = trim($vehicleName);
        $paymentDisplay = ucwords(str_replace('_', ' ', $paymentOption));
        $chauffeurDisplay = $needChauffeur !== '' ? ucfirst($needChauffeur) : '-';
        $licenseDisplay   = $needSlLicense !== '' ? ucfirst($needSlLicense) : '-';

        $html = '
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
@page { margin: 24px 24px; }
body {
    font-family: DejaVu Sans, Arial, sans-serif;
    font-size: 11px;
    color: #1f2937;
}
.muted { color: #6b7280; }
.small { font-size: 9px; }
.title { font-size: 22px; font-weight: 700; letter-spacing: 0.2px; margin: 0; }
.subtitle { font-size: 11px; margin-top: 4px; }
.card {
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    padding: 12px;
}
.hr {
    height: 1px;
    background: #e5e7eb;
    margin: 12px 0;
}
table { width: 100%; border-collapse: collapse; }
.tmeta td { vertical-align: top; }
.tmeta .right { text-align: right; }
.pill {
    display: inline-block;
    padding: 4px 10px;
    border-radius: 999px;
    background: #f3f4f6;
    color: #111827;
    font-size: 10px;
    font-weight: 700;
}
.section-title {
    font-size: 11px;
    font-weight: 700;
    margin: 0 0 8px 0;
}
.kv td { padding: 4px 0; vertical-align: top; }
.kv .k { width: 42%; color: #6b7280; }
.kv .v { width: 58%; font-weight: 600; }

.items {
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    overflow: hidden;
}
.items th {
    background: #172338;
    color: #ffffff;
    padding: 10px;
    font-size: 10px;
    text-align: left;
}
.items td {
    padding: 10px;
    border-top: 1px solid #e5e7eb;
    vertical-align: top;
}
.items .num { text-align: right; }

.total-box {
    margin-top: 12px;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    padding: 12px;
}
.total-box table td { padding: 4px 0; }
.grand {
    font-size: 15px;
    font-weight: 800;
    text-align: right;
}
.footer {
    position: fixed;
    left: 24px;
    right: 24px;
    bottom: 8px;
    font-size: 8px;
    color: #6b7280;
    text-align: center;
}
</style>
</head>
<body>

<table class="tmeta">
    <tr>
        <td style="width: 55%;">
            ' . ($logoDataUri ? '<img src="' . $h($logoDataUri) . '" style="height:50px; margin-bottom:10px;">' : '') . '
            <div style="font-weight:800; font-size:14px;">' . $h($companyName) . '</div>
            <div class="muted">' . $h($companyLine1) . '</div>
            <div class="muted">' . $h($companyLine2) . '</div>
            <div class="muted">' . $h($companyWebsite) . '</div>
        </td>
        <td class="right" style="width: 45%;">
            <div class="title">' . $h($invoiceTitle) . '</div>
            <div class="subtitle muted">Booking Confirmation Invoice</div>
            <div class="hr"></div>
            <div><span class="pill">Booking Ref: ' . $h($bookingRef) . '</span></div>
            <div style="margin-top:6px;" class="muted">Issued: ' . $h($invoiceDate) . '</div>
        </td>
    </tr>
</table>

<div style="height:12px;"></div>

<table>
    <tr>
        <td style="width: 50%; padding-right: 6px;">
            <div class="card">
                <div class="section-title">Customer details</div>
                <table class="kv">
                    <tr><td class="k">Full name</td><td class="v">' . $h($customerName) . '</td></tr>
                    <tr><td class="k">Email</td><td class="v">' . $h($customerEmail) . '</td></tr>
                    <tr><td class="k">WhatsApp</td><td class="v">' . $h($customerWhatsapp) . '</td></tr>
                    <tr><td class="k">Country</td><td class="v">' . $h($customerCountry) . '</td></tr>
                    <tr><td class="k">Flight Number</td><td class="v">' . $h($customerFlight !== '' ? $customerFlight : '-') . '</td></tr>
                    <tr><td class="k">Payment</td><td class="v">' . $h($paymentDisplay) . '</td></tr>
                </table>
            </div>
        </td>
        <td style="width: 50%; padding-left: 6px;">
            <div class="card">
                <div class="section-title">Booking details</div>
                <table class="kv">
                    <tr><td class="k">Vehicle</td><td class="v">' . $h($vehicleDisplay) . '</td></tr>
                    <tr><td class="k">Pick-up</td><td class="v">' . $h($pickupLocation) . '</td></tr>
                    <tr><td class="k">Pick-up date/time</td><td class="v">' . $h($pickupDatetime) . '</td></tr>
                    <tr><td class="k">Drop-off</td><td class="v">' . $h($dropoffLocation) . '</td></tr>
                    <tr><td class="k">Drop-off date/time</td><td class="v">' . $h($dropoffDatetime) . '</td></tr>
                    <tr><td class="k">Coverage</td><td class="v">' . $h($coverageName) . '</td></tr>
                </table>
            </div>
        </td>
    </tr>
</table>

<div style="height:12px;"></div>

<div class="items">
    <table>
        <thead>
            <tr>
                <th style="width:40%;">Description</th>
                <th style="width:15%;" class="num">Days</th>
                <th style="width:15%;" class="num">Rate</th>
                <th style="width:20%;" class="num">Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div style="font-weight:800;">Vehicle Rental</div>
                    <div class="muted small">' . $h($vehicleDisplay) . '</div>
                </td>
                <td class="num">' . $h((string)$days) . '</td>
                <td class="num">' . $h($fmt($rentalAmount)) . '</td>
                <td class="num" style="font-weight:800;">' . $h($fmt($rentalAmount)) . '</td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight:800;">Coverage Plan</div>
                    <div class="muted small">' . $h($coverageName) . '</div>
                </td>
                <td class="num">-</td>
                <td class="num">' . $h($fmt($coverageTotal)) . '</td>
                <td class="num" style="font-weight:800;">' . $h($fmt($coverageTotal)) . '</td>
            </tr>
            <tr>
                <td>
                    <div style="font-weight:800;">Extras / Add-ons</div>
                    <div class="muted small">' . $h($extrasSummary) . '</div>
                </td>
                <td class="num">-</td>
                <td class="num">' . $h($fmt($extrasTotal)) . '</td>
                <td class="num" style="font-weight:800;">' . $h($fmt($extrasTotal)) . '</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="total-box">
    <table>
        <tr>
            <td class="muted">Rental amount</td>
            <td class="num" style="text-align:right; font-weight:700;">' . $h($fmt($rentalAmount)) . '</td>
        </tr>
        <tr>
            <td class="muted">Coverage</td>
            <td class="num" style="text-align:right; font-weight:700;">' . $h($fmt($coverageTotal)) . '</td>
        </tr>
        <tr>
            <td class="muted">Extras</td>
            <td class="num" style="text-align:right; font-weight:700;">' . $h($fmt($extrasTotal)) . '</td>
        </tr>
        <tr><td colspan="2"><div class="hr"></div></td></tr>
        <tr>
            <td style="font-weight:800;">Grand Total</td>
            <td class="grand">' . $h($fmt($grandTotal)) . '</td>
        </tr>
    </table>
</div>

<div style="height:12px;"></div>

<table>
    <tr>
        <td style="width:50%; padding-right:6px;">
            <div class="card">
                <div class="section-title">Additional details</div>
                <table class="kv">
                    <tr><td class="k">Chauffeur</td><td class="v">' . $h($chauffeurDisplay) . '</td></tr>
                    <tr><td class="k">Sri Lankan License</td><td class="v">' . $h($licenseDisplay) . '</td></tr>
                    <tr><td class="k">Security Deposit (Refundable*)</td><td class="v">' . $h($fmt($securityDeposit)) . '</td></tr>
                </table>
            </div>
        </td>
        <td style="width:50%; padding-left:6px;">
            <div class="card">
                <div class="section-title">Notes</div>
                <div class="muted">' . ($customerNotes !== '' ? nl2br($h($customerNotes)) : 'No additional notes provided.') . '</div>
                <div class="hr"></div>
                <div class="small muted">
                    This document confirms your booking request. Final confirmation may be subject to availability and operational checks.
                </div>
                <div class="small muted" style="margin-top:8px; color:#850000; font-weight:700;">
                    * The security deposit is fully refundable if the vehicle is returned without accident, damage, fines, or other additional charges. If an accident or chargeable incident occurs, deductions may apply.
                </div>
            </div>
        </td>
    </tr>
</table>

<div class="footer">
    ' . $h($companyName) . ' • ' . $h($companyWebsite) . ' • ' . $h($companyLine2) . '
</div>

</body>
</html>';

        $dompdf = new Dompdf([
            'isRemoteEnabled' => false,
            'defaultFont' => 'DejaVu Sans',
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        file_put_contents($pdfPathFs, $dompdf->output());

        return $pdfPathRel;
    }
}