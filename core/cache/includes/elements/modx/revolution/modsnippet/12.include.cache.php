<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$bookingSuccess = $_SESSION['booking_success'] ?? null;

if (empty($bookingSuccess)) {
    return '';
}

unset($_SESSION['booking_success']);

$bookingId = (int)($bookingSuccess['booking_id'] ?? 0);
$pdfUrl    = trim((string)($bookingSuccess['pdf_url'] ?? ''));
$homeUrl   = $modx->makeUrl(1); // home page resource id

$out = '';

$out .= '<style>
.bookingSuccessModal{
    position:fixed;
    inset:0;
    background:rgba(15,23,42,.55);
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:99999;
    padding:20px;
}
.bookingSuccessModal__box{
    width:100%;
    max-width:520px;
    background:#fff;
    border-radius:20px;
    padding:32px 24px;
    text-align:center;
    box-shadow:0 20px 50px rgba(0,0,0,.18);
}
.bookingSuccessModal__icon{
    width:72px;
    height:72px;
    border-radius:50%;
    background:#dcfce7;
    color:#16a34a;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 auto 16px;
    font-size:34px;
    font-weight:700;
}
.bookingSuccessModal__title{
    margin:0 0 10px;
    font-size:28px;
    font-weight:700;
    color:#166534;
}
.bookingSuccessModal__text{
    margin:0 0 8px;
    color:#475569;
    line-height:1.6;
}
.bookingSuccessModal__meta{
    margin-top:14px;
    padding:14px 16px;
    border-radius:14px;
    background:#f8fafc;
    border:1px solid #e2e8f0;
    font-size:15px;
    color:#334155;
}
.bookingSuccessModal__actions{
    display:flex;
    gap:12px;
    justify-content:center;
    flex-wrap:wrap;
    margin-top:22px;
}
.bookingSuccessModal__btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    min-height:48px;
    padding:0 20px;
    border-radius:12px;
    text-decoration:none;
    font-weight:700;
    cursor:pointer;
    border:none;
}
.bookingSuccessModal__btn--primary{
    background:linear-gradient(135deg,#0ea5e9 0%,#0284c7 100%);
    color:#fff;
}
.bookingSuccessModal__btn--secondary{
    background:#fff;
    color:#0284c7;
    border:1px solid #cbd5e1;
}
</style>';

$out .= '<div id="bookingSuccessModal" class="bookingSuccessModal">';
$out .= '  <div class="bookingSuccessModal__box">';
$out .= '      <div class="bookingSuccessModal__icon">✓</div>';
$out .= '      <h3 class="bookingSuccessModal__title">Reservation Successful</h3>';
$out .= '      <p class="bookingSuccessModal__text">Your reservation has been created successfully.</p>';
$out .= '      <div class="bookingSuccessModal__meta"><strong>Booking ID:</strong> #' . $bookingId . '</div>';
$out .= '      <div class="bookingSuccessModal__actions">';

if ($pdfUrl !== '') {
    $out .= '  <a href="' . htmlspecialchars($pdfUrl, ENT_QUOTES, 'UTF-8') . '" class="bookingSuccessModal__btn bookingSuccessModal__btn--primary" id="downloadBookingPdfBtn" download>Download PDF</a>';
}

$out .= '          <button type="button" class="bookingSuccessModal__btn bookingSuccessModal__btn--secondary" id="closeBookingSuccessModal">Close</button>';
$out .= '      </div>';
$out .= '  </div>';
$out .= '</div>';

$out .= '<script>
document.addEventListener("DOMContentLoaded", function () {
    var modal = document.getElementById("bookingSuccessModal");
    var closeBtn = document.getElementById("closeBookingSuccessModal");
    var downloadBtn = document.getElementById("downloadBookingPdfBtn");
    var homeUrl = ' . json_encode($homeUrl) . ';

    if (closeBtn && modal) {
        closeBtn.addEventListener("click", function () {
            modal.style.display = "none";
        });
    }

    if (downloadBtn) {
        downloadBtn.addEventListener("click", function () {
            setTimeout(function () {
                window.location.href = homeUrl;
            }, 800);
        });
    }
});
</script>';

return $out;
return;
