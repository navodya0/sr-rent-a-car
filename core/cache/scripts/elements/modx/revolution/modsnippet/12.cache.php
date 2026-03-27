<?php  return 'if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$bookingSuccess = $_SESSION[\'booking_success\'] ?? null;

if (empty($bookingSuccess) || empty($bookingSuccess[\'booking_id\'])) {
    return \'\';
}

$bookingId = (int)$bookingSuccess[\'booking_id\'];
$homeUrl   = $modx->makeUrl(1);

unset($_SESSION[\'booking_success\']);

$out = \'\';


$out .= \'<style>
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
    background:#000080;
    color:#fff;
}
.bookingSuccessModal__btn--secondary{
    background:#fff;
    color:#0284c7;
    border:1px solid #cbd5e1;
}
.downloadBookingPdfBtn{
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
    color:#fff;
    background:#023074;
}
.bookingPdfStatus{
    margin-top:12px;
    font-size:14px;
    color:#475569;
}
</style>\';

$out .= \'<div id="bookingSuccessModal" class="bookingSuccessModal">\';
$out .= \'  <div class="bookingSuccessModal__box">\';
$out .= \'      <div class="bookingSuccessModal__icon">✓</div>\';
$out .= \'      <h3 class="bookingSuccessModal__title">Booking Confirmed</h3>\';
$out .= \'      <p class="bookingSuccessModal__text">Your booking is confirmed and the vehicle is currently being allocated for your reservation.</p>\';
$out .= \'      <div class="bookingSuccessModal__meta"><strong>Booking ID:</strong> #\' . $bookingId . \'</div>\';
$out .= \'      <div id="bookingPdfStatus" class="bookingPdfStatus">Generating your invoice PDF...</div>\';
$out .= \'      <p class="bookingSuccessModal__note" style="margin-top:10px; font-size:13px; color:#6b7280;">A confirmation email with the invoice will be sent to the provided email address.</p>\';
$out .= \'      <div class="bookingSuccessModal__actions" id="bookingSuccessActions">\';
$out .= \'      </div>\';
$out .= \'  </div>\';
$out .= \'</div>\';

$out .= \'<script>
document.addEventListener("DOMContentLoaded", function () {
    var actions = document.getElementById("bookingSuccessActions");
    var statusBox = document.getElementById("bookingPdfStatus");
    var bookingId = \' . json_encode($bookingId) . \';
    var homeUrl = \' . json_encode($homeUrl) . \';
    var pdfAjaxUrl = \' . json_encode(MODX_SITE_URL . \'assets/includes/generate-booking-pdf-ajax.php\') . \';
    var emailAjaxUrl = \' . json_encode(MODX_SITE_URL . \'assets/includes/send-booking-pdf-email-ajax.php\') . \';

    if (!bookingId || !statusBox || !actions) {
        return;
    }

    var downloadBtn = document.createElement("button");
    downloadBtn.type = "button";
    downloadBtn.id = "downloadBookingPdfBtn";
    downloadBtn.className = "downloadBookingPdfBtn";
    downloadBtn.textContent = "Generate PDF";

    actions.appendChild(downloadBtn);
    statusBox.textContent = "Click the button below to generate your PDF.";

    downloadBtn.addEventListener("click", function () {
        downloadBtn.disabled = true;
        downloadBtn.textContent = "Generating...";
        statusBox.textContent = "Generating your PDF...";

        fetch(pdfAjaxUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "booking_id=" + encodeURIComponent(bookingId)
        })
        .then(function (response) {
            return response.text();
        })
        .then(function (text) {
            var data;

            try {
                data = JSON.parse(text);
            } catch (e) {
                statusBox.textContent = "Invalid PDF response: " + text;
                downloadBtn.disabled = false;
                downloadBtn.textContent = "Generate PDF";
                return;
            }

            if (data.success && data.pdf_url) {
                statusBox.textContent = "Your PDF is ready.";

                var linkBtn = document.createElement("a");
                linkBtn.href = data.pdf_url;
                linkBtn.id = "downloadBookingPdfBtn";
                linkBtn.className = "downloadBookingPdfBtn";
                linkBtn.setAttribute("download", "");
                linkBtn.textContent = "Download PDF";

                linkBtn.addEventListener("click", function () {
                    setTimeout(function () {
                        window.location.href = homeUrl;
                    }, 800);
                });

                downloadBtn.replaceWith(linkBtn);

                fetch(emailAjaxUrl, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "booking_id=" + encodeURIComponent(bookingId)
                })
                .then(function (response) {
                    return response.text();
                })
                .then(function (emailText) {
                    try {
                        var emailData = JSON.parse(emailText);
                        console.log(emailData.message || "Email request finished.");
                    } catch (e) {
                        console.log("Invalid email response:", emailText);
                    }
                })
                .catch(function (error) {
                    console.log("Email request failed:", error);
                });

            } else {
                statusBox.textContent = data.message ? data.message : "Could not generate PDF.";
                downloadBtn.disabled = false;
                downloadBtn.textContent = "Generate PDF";
            }
        })
        .catch(function (error) {
            statusBox.textContent = "Something went wrong while generating the PDF.";
            downloadBtn.disabled = false;
            downloadBtn.textContent = "Generate PDF";
            console.log(error);
        });
    });
});
</script>\';

return $out;
return;
';