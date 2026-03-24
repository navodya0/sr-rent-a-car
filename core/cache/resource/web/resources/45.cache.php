<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 45,
    'type' => 'document',
    'pagetitle' => 'Payment',
    'longtitle' => '',
    'description' => '',
    'alias' => 'payment',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<style>
.paymentPage {
    background: #f4f7fb;
}

.paymentCard,
.paymentSummaryCard {
    background: #fff;
    border: 1px solid #e8eef5;
    border-radius: 20px;
    box-shadow: 0 10px 28px rgba(15, 23, 42, 0.06);
}

.paymentCard {
    padding: 28px;
}

.paymentSummaryCard {
    padding: 28px;
    position: sticky;
    top: 30px;
}

.paymentPageTitle {
    font-size: 28px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 8px;
}

.paymentPageSubtext {
    color: #000;
    font-size: 15px;
    margin-bottom: 0;
}

/* steps */
.bookingSteps {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 28px;
    flex-wrap: nowrap;
}

.bookingSteps__item {
    text-align: center;
    min-width: 90px;
}

.bookingSteps__num {
    width: 42px;
    height: 42px;
    border-radius: 999px;
    background: #e4e7ec;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    margin-bottom: 8px;
    color: #344054;
}

.bookingSteps__text {
    display: block;
    font-size: 13px;
    color: #000;
    line-height: 1.2;
}

.bookingSteps__item--done .bookingSteps__num {
    background: #12b76a;
    color: #fff;
}

.bookingSteps__item--active .bookingSteps__num {
    background: linear-gradient(135deg, #1d4ed8, #06b6d4);
    color: #fff;
    box-shadow: 0 8px 20px rgba(29, 78, 216, 0.25);
}

.bookingSteps__item--active .bookingSteps__text {
    color: #101828;
    font-weight: 600;
}

.bookingSteps__line {
    flex: 1;
    height: 4px;
    background: #eaecf0;
    border-radius: 999px;
}

.bookingSteps__line--active {
    background: linear-gradient(90deg, #1d4ed8, #06b6d4);
}

/* topbar */
.bookingStepTopbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 24px;
}

.bookingStepTopbar__back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    color: #344054;
    font-weight: 600;
}

.bookingStepTopbar__back:hover {
    color: #1d4ed8;
    text-decoration: none;
}

.bookingStepTopbar__next {
    color: #12b76a;
    font-weight: 700;
    font-size: 14px;
}

/* new payment layout */
.paymentLayout {
    display: grid;
    grid-template-columns: 140px 1fr;
    gap: 24px;
    align-items: start;
}

.paymentMethodCol {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.paymentMethodTitle {
    font-size: 13px;
    font-weight: 700;
    color: #000;
    letter-spacing: 0.7px;
    text-transform: uppercase;
    margin-bottom: 2px;
}

.paymentMethodItem {
    position: relative;
    border: 1.5px solid #edf2f7;
    border-radius: 0;
    padding: 18px 14px;
    min-height: 70px;
    background: #fff;
    cursor: pointer;
    transition: all 0.25s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.paymentMethodItem:hover {
    border-color: #b9d7f7;
    box-shadow: 0 8px 18px rgba(59, 130, 246, 0.08);
}

.paymentMethodItem.is-active {
    border-color: #7ee7f5;
    box-shadow: inset 0 0 0 1px #7ee7f5;
}

.paymentMethodItem input[type="radio"] {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.paymentMethodItem img {
    max-width: 92px;
    max-height: 34px;
    object-fit: contain;
}

.paymentMethodItem__text {
    font-size: 13px;
    font-weight: 700;
    color: #344054;
}

/* form panel */
.paymentFormPanel {
    background: #f8fbff;
    border: 1px solid #eef4fa;
    border-radius: 0;
    padding: 26px;
}

.paymentFormGrid .row {
    margin-left: -10px;
    margin-right: -10px;
}


.paymentField label {
    display: block;
    margin-bottom: 0;
    color: #000;
    font-weight: 600;
    font-size: 13px;
}

.paymentInput,
.paymentTextarea {
    width: 100%;
    border: 1px solid #edf2f7;
    background: #fff;
    border-radius: 8px;
    font-size: 15px;
    color: #101828;
    transition: all 0.2s ease;
    box-shadow: none;
}

.paymentInput {
    height: 48px;
    padding: 0 16px;
}

.paymentTextarea {
    min-height: 110px;
    padding: 14px 16px;
    resize: vertical;
}

.paymentInput:focus,
.paymentTextarea:focus {
    border-color: #7dd3fc;
    box-shadow: 0 0 0 4px rgba(125, 211, 252, 0.16);
    outline: none;
}

.paymentInput.is-valid {
    border-color: #dbeafe;
    background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'18\' height=\'18\' viewBox=\'0 0 20 20\' fill=\'none\'%3E%3Cpath d=\'M16.667 5L7.5 14.167 3.333 10\' stroke=\'%2322C55E\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 42px;
}

.paymentHint {
    font-size: 12px;
    color: #000;
    margin-top: 6px;
}

.paymentSecureNote {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    color: #334155;
    padding: 14px 16px;
    border-radius: 12px;
    font-size: 13px;
    margin-top: 20px;
}

/* hide old large preview */
.cardPreview {
    display: none;
}

/* bank info */
.bankBox {
    display: none;
    background: #f8fbff;
    border: 1px solid #dbeafe;
    border-radius: 16px;
    padding: 20px;
    margin-bottom: 24px;
}

.bankBox.is-active {
    display: block;
}

.bankBox__title {
    font-size: 17px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 8px;
}

.bankBox__desc {
    font-size: 14px;
    color: #000;
    margin-bottom: 16px;
}

.bankInfoRow {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    padding: 12px 0;
    border-bottom: 1px solid #e5efff;
    font-size: 14px;
}

.bankInfoRow:last-child {
    border-bottom: 0;
}

.bankInfoRow span {
    color: #000;
}

.bankInfoRow strong {
    color: #101828;
    text-align: right;
}

/* button */
.paymentAction {
    display: flex;
    justify-content: stretch;
    margin-top: 26px;
}

#payNowBtn {
    width: 100%;
    height: 54px;
    border: 0;
    border-radius: 8px;
    background: #62aef0;
    color: #fff;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.2px;
    box-shadow: 0 10px 22px rgba(98, 174, 240, 0.28);
    transition: all 0.25s ease;
}

#payNowBtn:hover {
    transform: translateY(-1px);
    box-shadow: 0 16px 28px rgba(98, 174, 240, 0.32);
}

#payNowBtn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}

/* summary */
.paymentSummaryCard__title {
    font-size: 24px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 22px;
}

.summaryVehicleBox {
    display: flex;
    gap: 14px;
    align-items: center;
    padding: 14px;
    background: #f8fafc;
    border-radius: 18px;
    margin-bottom: 20px;
}

.summaryVehicleBox__img {
    width: 84px;
    height: 64px;
    object-fit: cover;
    border-radius: 14px;
    background: #e5e7eb;
}

.summaryVehicleBox__name {
    font-size: 16px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 4px;
}

.summaryVehicleBox__meta {
    color: #000;
    font-size: 13px;
}

.summaryBlock {
    margin-bottom: 20px;
}

.summaryLabel {
    font-size: 12px;
    color: #000;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    margin-bottom: 4px;
}

.summaryValue {
    font-size: 15px;
    color: #101828;
    font-weight: 600;
}

.summaryDivider {
    border-top: 1px solid #eaecf0;
    margin: 18px 0;
}

.summaryPriceRow {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 14px;
    margin-bottom: 12px;
    font-size: 15px;
}

.summaryPriceRow span {
    color: #475467;
}

.summaryPriceRow strong {
    color: #101828;
    font-weight: 700;
}

.summaryTotalRow {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 4px;
}

.summaryTotalRow span {
    font-size: 15px;
    color: #101828;
    font-weight: 700;
}

.summaryTotalRow strong {
    font-size: 28px;
    color: #1d4ed8;
    font-weight: 800;
}

.paymentSecurityNote {
    margin-top: 20px;
    padding: 14px 16px;
    background: #ecfdf3;
    border: 1px solid #d1fadf;
    color: #027a48;
    border-radius: 14px;
    font-size: 13px;
    font-weight: 600;
}

.hero-wrap .bread {
    font-weight: 700;
}

@media (max-width: 991px) {
    .paymentSummaryCard {
        position: static;
        margin-top: 24px;
    }

    .bookingSteps {
        overflow-x: auto;
        padding-bottom: 6px;
    }

    .paymentLayout {
        grid-template-columns: 1fr;
    }

    .paymentMethodCol {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 767px) {
    .paymentCard,
    .paymentSummaryCard {
        padding: 20px;
        border-radius: 18px;
    }

    .bookingSteps {
        gap: 8px;
    }

    .bookingSteps__line {
        min-width: 30px;
    }

    .bookingSteps__text {
        font-size: 12px;
    }

    .paymentMethodCol {
        grid-template-columns: 1fr;
    }

    .paymentFormPanel {
        padding: 18px;
    }

    .summaryTotalRow strong {
        font-size: 24px;
    }
}
</style>

<section class="hero-wrap hero-wrap-2"
    style="background-image: url(\'assets/images/booking-bg.jpg\'); height: 36rem;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 36rem;">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Payment</h1>
                <p class="breadcrumbs" style="padding-bottom: 20px;">
                    <span class="mr-2">
                        <a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span>Payment <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bookingStepPage paymentPage py-5">
    <div class="container">

        <div class="bookingSteps mb-4">
            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">1</span>
                <span class="bookingSteps__text">Select vehicle</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">2</span>
                <span class="bookingSteps__text">Your deal</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">3</span>
                <span class="bookingSteps__text">Coverage</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">4</span>
                <span class="bookingSteps__text">Driver details</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--active">
                <span class="bookingSteps__num">5</span>
                <span class="bookingSteps__text">Payment</span>
            </div>
        </div>

        <div class="bookingStepTopbar">
            <a href="javascript:history.back()" class="bookingStepTopbar__back">
                ← Back to driver details
            </a>
            <div class="bookingStepTopbar__next">
                Secure payment
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="paymentCard">
                    <div class="mb-4">
                        <h3 class="paymentPageTitle">Complete your payment</h3>
                        <p class="paymentPageSubtext">
                            Choose a payment method and securely complete your booking.
                        </p>
                    </div>

                    <form action="assets/includes/process_payment.php" method="post" id="paymentForm">

                        <div class="paymentLayout">
                            <div class="paymentMethodCol">
                                <div class="paymentMethodTitle">Payment Method</div>

                                <label class="paymentMethodItem is-active" id="optionCard">
                                    <input type="radio" id="card_payment" name="payment_method" value="card" checked>
                                    <img src="assets/images/car_booking/visa_card.png" alt="Visa">
                                </label>

                                <label class="paymentMethodItem" id="optionPaypal">
                                    <input type="radio" id="paypal_payment" name="payment_method" value="mastercard">
                                    <img src="assets/images/car_booking/master_card.png" alt="Master Card">
                                </label>

                                <label class="paymentMethodItem" id="optionBank">
                                    <input type="radio" id="bank_payment" name="payment_method" value="bank">
                                    <span class="paymentMethodItem__text">BANK TRANSFER</span>
                                </label>
                            </div>

                            <div>
                                <div class="paymentFormPanel">
                                    <div id="cardArea">
                                        <div class="paymentFormGrid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="paymentField">
                                                        <label for="card_number">Card Number</label>
                                                        <input type="text" id="card_number" name="card_number" class="paymentInput" placeholder="7569 8859 8744 3244" maxlength="19">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="paymentField">
                                                        <label for="expiry_date">Expiration Date</label>
                                                        <input type="text" id="expiry_date" name="expiry_date" class="paymentInput" placeholder="MM/YY" maxlength="5">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="paymentField">
                                                        <label for="cvv">CVV</label>
                                                        <input type="password" id="cvv" name="cvv" class="paymentInput" placeholder="477" maxlength="4">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="paymentField mb-0">
                                                        <label for="cardholder_name">Card Holder Name</label>
                                                        <input type="text" id="cardholder_name" name="cardholder_name" class="paymentInput" placeholder="John Green">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bankBox" id="bankPaymentFields">
                                        <div class="bankBox__title">Bank transfer details</div>
                                        <div class="bankBox__desc">
                                            Use the below details to complete your transfer. After payment, send your receipt to our email or WhatsApp.
                                        </div>

                                        <div class="bankInfoRow">
                                            <span>Bank Name</span>
                                            <strong>Commercial Bank</strong>
                                        </div>
                                        <div class="bankInfoRow">
                                            <span>Account Name</span>
                                            <strong>SR Rent A Car</strong>
                                        </div>
                                        <div class="bankInfoRow">
                                            <span>Account Number</span>
                                            <strong>1234567890</strong>
                                        </div>
                                        <div class="bankInfoRow">
                                            <span>SWIFT Code</span>
                                            <strong>CCEYLKLX</strong>
                                        </div>
                                    </div>

                                    <input type="hidden" name="booking_id" value="[[!+booking_id]]">
                                    <input type="hidden" name="total_amount" value="250.00">

                                    <div class="paymentAction">
                                        <button type="submit" id="payNowBtn">Confirm Payment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- <div class="col-lg-4">
                <aside class="paymentSummaryCard">
                    <h4 class="paymentSummaryCard__title">Booking Summary</h4>

                    <div class="summaryVehicleBox">
                        <img src="assets/images/car-1.jpg" alt="Vehicle" class="summaryVehicleBox__img">
                        <div>
                            <div class="summaryVehicleBox__name">Toyota Prius</div>
                            <div class="summaryVehicleBox__meta">Automatic · 4 Passengers · 2 Bags</div>
                        </div>
                    </div>

                    <div class="summaryBlock">
                        <div class="summaryLabel">Pick-up</div>
                        <div class="summaryValue">25 Mar 2026, 10:00 AM</div>
                    </div>

                    <div class="summaryBlock">
                        <div class="summaryLabel">Drop-off</div>
                        <div class="summaryValue">28 Mar 2026, 10:00 AM</div>
                    </div>

                    <div class="summaryBlock">
                        <div class="summaryLabel">Coverage</div>
                        <div class="summaryValue">Full Coverage</div>
                    </div>

                    <div class="summaryDivider"></div>

                    <div class="summaryPriceRow">
                        <span>Rental Amount</span>
                        <strong>€ 200.00</strong>
                    </div>

                    <div class="summaryPriceRow">
                        <span>Coverage</span>
                        <strong>€ 30.00</strong>
                    </div>

                    <div class="summaryPriceRow">
                        <span>Extras</span>
                        <strong>€ 20.00</strong>
                    </div>

                    <div class="summaryPriceRow">
                        <span>Service Fee</span>
                        <strong>€ 0.00</strong>
                    </div>

                    <div class="summaryDivider"></div>

                    <div class="summaryTotalRow">
                        <span>Total</span>
                        <strong>€ 250.00</strong>
                    </div>

                    <div class="paymentSecurityNote">
                        SSL secured checkout
                    </div>
                </aside>
            </div> -->
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var cardPayment = document.getElementById("card_payment");
    var bankPayment = document.getElementById("bank_payment");
    var optionCard = document.getElementById("optionCard");
    var optionBank = document.getElementById("optionBank");
    var cardArea = document.getElementById("cardArea");
    var bankFields = document.getElementById("bankPaymentFields");
    var payNowBtn = document.getElementById("payNowBtn");

    var cardholderName = document.getElementById("cardholder_name");
    var cardNumber = document.getElementById("card_number");
    var expiryDate = document.getElementById("expiry_date");

    var previewCardName = document.getElementById("previewCardName");
    var previewCardNumber = document.getElementById("previewCardNumber");
    var previewExpiry = document.getElementById("previewExpiry");
    var cardBrand = document.getElementById("cardBrand");

    function detectBrand(number) {
        var cleaned = number.replace(/\\s+/g, "");
        if (/^4/.test(cleaned)) return "VISA";
        if (/^5[1-5]/.test(cleaned)) return "MASTERCARD";
        if (/^3[47]/.test(cleaned)) return "AMEX";
        return "CARD";
    }

    function formatCardNumber(value) {
        var cleaned = value.replace(/\\D/g, "").substring(0, 16);
        var groups = cleaned.match(/.{1,4}/g);
        return groups ? groups.join(" ") : "";
    }

    function formatExpiry(value) {
        var cleaned = value.replace(/\\D/g, "").substring(0, 4);
        if (cleaned.length >= 3) {
            return cleaned.substring(0, 2) + "/" + cleaned.substring(2);
        }
        return cleaned;
    }

    function togglePaymentFields() {
        if (cardPayment.checked) {
            optionCard.classList.add("is-active");
            optionBank.classList.remove("is-active");
            cardArea.style.display = "block";
            bankFields.classList.remove("is-active");
            payNowBtn.textContent = "Pay Now";
        } else {
            optionBank.classList.add("is-active");
            optionCard.classList.remove("is-active");
            cardArea.style.display = "none";
            bankFields.classList.add("is-active");
            payNowBtn.textContent = "Confirm Booking";
        }
    }

    if (cardNumber) {
        cardNumber.addEventListener("input", function () {
            this.value = formatCardNumber(this.value);
            previewCardNumber.textContent = this.value || "•••• •••• •••• ••••";
            cardBrand.textContent = detectBrand(this.value);
        });
    }

    if (cardholderName) {
        cardholderName.addEventListener("input", function () {
            previewCardName.textContent = this.value.trim() ? this.value.toUpperCase() : "YOUR NAME";
        });
    }

    if (expiryDate) {
        expiryDate.addEventListener("input", function () {
            this.value = formatExpiry(this.value);
            previewExpiry.textContent = this.value || "MM/YY";
        });
    }

    if (cardPayment) cardPayment.addEventListener("change", togglePaymentFields);
    if (bankPayment) bankPayment.addEventListener("change", togglePaymentFields);

    togglePaymentFields();
});
</script>',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 43,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1773818510,
    'editedby' => 1,
    'editedon' => 1774343088,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1773818520,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="index.php?id=1">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="index.php?id=1" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="index.php?id=39" class="nav-link">FLEET</a></li>
      <li class="nav-item"><a href="index.php?id=5" class="nav-link">BLOG</a></li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>
  <div class="dropdown-menu" aria-labelledby="offersDropdown">
    <a class="dropdown-item" href="index.php?id=40">Indian Travellers</a>
    <a class="dropdown-item" href="index.php?id=42">International Travellers</a>
  </div>
</li>
        <li class="nav-item"><a href="index.php?id=9" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="index.php?id=10" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="index.php?id=6" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>



<style>
.paymentPage {
    background: #f4f7fb;
}

.paymentCard,
.paymentSummaryCard {
    background: #fff;
    border: 1px solid #e8eef5;
    border-radius: 20px;
    box-shadow: 0 10px 28px rgba(15, 23, 42, 0.06);
}

.paymentCard {
    padding: 28px;
}

.paymentSummaryCard {
    padding: 28px;
    position: sticky;
    top: 30px;
}

.paymentPageTitle {
    font-size: 28px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 8px;
}

.paymentPageSubtext {
    color: #000;
    font-size: 15px;
    margin-bottom: 0;
}

/* steps */
.bookingSteps {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 28px;
    flex-wrap: nowrap;
}

.bookingSteps__item {
    text-align: center;
    min-width: 90px;
}

.bookingSteps__num {
    width: 42px;
    height: 42px;
    border-radius: 999px;
    background: #e4e7ec;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    margin-bottom: 8px;
    color: #344054;
}

.bookingSteps__text {
    display: block;
    font-size: 13px;
    color: #000;
    line-height: 1.2;
}

.bookingSteps__item--done .bookingSteps__num {
    background: #12b76a;
    color: #fff;
}

.bookingSteps__item--active .bookingSteps__num {
    background: linear-gradient(135deg, #1d4ed8, #06b6d4);
    color: #fff;
    box-shadow: 0 8px 20px rgba(29, 78, 216, 0.25);
}

.bookingSteps__item--active .bookingSteps__text {
    color: #101828;
    font-weight: 600;
}

.bookingSteps__line {
    flex: 1;
    height: 4px;
    background: #eaecf0;
    border-radius: 999px;
}

.bookingSteps__line--active {
    background: linear-gradient(90deg, #1d4ed8, #06b6d4);
}

/* topbar */
.bookingStepTopbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 24px;
}

.bookingStepTopbar__back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    color: #344054;
    font-weight: 600;
}

.bookingStepTopbar__back:hover {
    color: #1d4ed8;
    text-decoration: none;
}

.bookingStepTopbar__next {
    color: #12b76a;
    font-weight: 700;
    font-size: 14px;
}

/* new payment layout */
.paymentLayout {
    display: grid;
    grid-template-columns: 140px 1fr;
    gap: 24px;
    align-items: start;
}

.paymentMethodCol {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.paymentMethodTitle {
    font-size: 13px;
    font-weight: 700;
    color: #000;
    letter-spacing: 0.7px;
    text-transform: uppercase;
    margin-bottom: 2px;
}

.paymentMethodItem {
    position: relative;
    border: 1.5px solid #edf2f7;
    border-radius: 0;
    padding: 18px 14px;
    min-height: 70px;
    background: #fff;
    cursor: pointer;
    transition: all 0.25s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.paymentMethodItem:hover {
    border-color: #b9d7f7;
    box-shadow: 0 8px 18px rgba(59, 130, 246, 0.08);
}

.paymentMethodItem.is-active {
    border-color: #7ee7f5;
    box-shadow: inset 0 0 0 1px #7ee7f5;
}

.paymentMethodItem input[type="radio"] {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.paymentMethodItem img {
    max-width: 92px;
    max-height: 34px;
    object-fit: contain;
}

.paymentMethodItem__text {
    font-size: 13px;
    font-weight: 700;
    color: #344054;
}

/* form panel */
.paymentFormPanel {
    background: #f8fbff;
    border: 1px solid #eef4fa;
    border-radius: 0;
    padding: 26px;
}

.paymentFormGrid .row {
    margin-left: -10px;
    margin-right: -10px;
}


.paymentField label {
    display: block;
    margin-bottom: 0;
    color: #000;
    font-weight: 600;
    font-size: 13px;
}

.paymentInput,
.paymentTextarea {
    width: 100%;
    border: 1px solid #edf2f7;
    background: #fff;
    border-radius: 8px;
    font-size: 15px;
    color: #101828;
    transition: all 0.2s ease;
    box-shadow: none;
}

.paymentInput {
    height: 48px;
    padding: 0 16px;
}

.paymentTextarea {
    min-height: 110px;
    padding: 14px 16px;
    resize: vertical;
}

.paymentInput:focus,
.paymentTextarea:focus {
    border-color: #7dd3fc;
    box-shadow: 0 0 0 4px rgba(125, 211, 252, 0.16);
    outline: none;
}

.paymentInput.is-valid {
    border-color: #dbeafe;
    background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'18\' height=\'18\' viewBox=\'0 0 20 20\' fill=\'none\'%3E%3Cpath d=\'M16.667 5L7.5 14.167 3.333 10\' stroke=\'%2322C55E\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 42px;
}

.paymentHint {
    font-size: 12px;
    color: #000;
    margin-top: 6px;
}

.paymentSecureNote {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    color: #334155;
    padding: 14px 16px;
    border-radius: 12px;
    font-size: 13px;
    margin-top: 20px;
}

/* hide old large preview */
.cardPreview {
    display: none;
}

/* bank info */
.bankBox {
    display: none;
    background: #f8fbff;
    border: 1px solid #dbeafe;
    border-radius: 16px;
    padding: 20px;
    margin-bottom: 24px;
}

.bankBox.is-active {
    display: block;
}

.bankBox__title {
    font-size: 17px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 8px;
}

.bankBox__desc {
    font-size: 14px;
    color: #000;
    margin-bottom: 16px;
}

.bankInfoRow {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    padding: 12px 0;
    border-bottom: 1px solid #e5efff;
    font-size: 14px;
}

.bankInfoRow:last-child {
    border-bottom: 0;
}

.bankInfoRow span {
    color: #000;
}

.bankInfoRow strong {
    color: #101828;
    text-align: right;
}

/* button */
.paymentAction {
    display: flex;
    justify-content: stretch;
    margin-top: 26px;
}

#payNowBtn {
    width: 100%;
    height: 54px;
    border: 0;
    border-radius: 8px;
    background: #62aef0;
    color: #fff;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.2px;
    box-shadow: 0 10px 22px rgba(98, 174, 240, 0.28);
    transition: all 0.25s ease;
}

#payNowBtn:hover {
    transform: translateY(-1px);
    box-shadow: 0 16px 28px rgba(98, 174, 240, 0.32);
}

#payNowBtn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}

/* summary */
.paymentSummaryCard__title {
    font-size: 24px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 22px;
}

.summaryVehicleBox {
    display: flex;
    gap: 14px;
    align-items: center;
    padding: 14px;
    background: #f8fafc;
    border-radius: 18px;
    margin-bottom: 20px;
}

.summaryVehicleBox__img {
    width: 84px;
    height: 64px;
    object-fit: cover;
    border-radius: 14px;
    background: #e5e7eb;
}

.summaryVehicleBox__name {
    font-size: 16px;
    font-weight: 700;
    color: #101828;
    margin-bottom: 4px;
}

.summaryVehicleBox__meta {
    color: #000;
    font-size: 13px;
}

.summaryBlock {
    margin-bottom: 20px;
}

.summaryLabel {
    font-size: 12px;
    color: #000;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    margin-bottom: 4px;
}

.summaryValue {
    font-size: 15px;
    color: #101828;
    font-weight: 600;
}

.summaryDivider {
    border-top: 1px solid #eaecf0;
    margin: 18px 0;
}

.summaryPriceRow {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 14px;
    margin-bottom: 12px;
    font-size: 15px;
}

.summaryPriceRow span {
    color: #475467;
}

.summaryPriceRow strong {
    color: #101828;
    font-weight: 700;
}

.summaryTotalRow {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 4px;
}

.summaryTotalRow span {
    font-size: 15px;
    color: #101828;
    font-weight: 700;
}

.summaryTotalRow strong {
    font-size: 28px;
    color: #1d4ed8;
    font-weight: 800;
}

.paymentSecurityNote {
    margin-top: 20px;
    padding: 14px 16px;
    background: #ecfdf3;
    border: 1px solid #d1fadf;
    color: #027a48;
    border-radius: 14px;
    font-size: 13px;
    font-weight: 600;
}

.hero-wrap .bread {
    font-weight: 700;
}

@media (max-width: 991px) {
    .paymentSummaryCard {
        position: static;
        margin-top: 24px;
    }

    .bookingSteps {
        overflow-x: auto;
        padding-bottom: 6px;
    }

    .paymentLayout {
        grid-template-columns: 1fr;
    }

    .paymentMethodCol {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 767px) {
    .paymentCard,
    .paymentSummaryCard {
        padding: 20px;
        border-radius: 18px;
    }

    .bookingSteps {
        gap: 8px;
    }

    .bookingSteps__line {
        min-width: 30px;
    }

    .bookingSteps__text {
        font-size: 12px;
    }

    .paymentMethodCol {
        grid-template-columns: 1fr;
    }

    .paymentFormPanel {
        padding: 18px;
    }

    .summaryTotalRow strong {
        font-size: 24px;
    }
}
</style>

<section class="hero-wrap hero-wrap-2"
    style="background-image: url(\'assets/images/booking-bg.jpg\'); height: 36rem;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 36rem;">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Payment</h1>
                <p class="breadcrumbs" style="padding-bottom: 20px;">
                    <span class="mr-2">
                        <a href="index.php?id=1">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span>Payment <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bookingStepPage paymentPage py-5">
    <div class="container">

        <div class="bookingSteps mb-4">
            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">1</span>
                <span class="bookingSteps__text">Select vehicle</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">2</span>
                <span class="bookingSteps__text">Your deal</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">3</span>
                <span class="bookingSteps__text">Coverage</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--done">
                <span class="bookingSteps__num">4</span>
                <span class="bookingSteps__text">Driver details</span>
            </div>

            <div class="bookingSteps__line bookingSteps__line--active"></div>

            <div class="bookingSteps__item bookingSteps__item--active">
                <span class="bookingSteps__num">5</span>
                <span class="bookingSteps__text">Payment</span>
            </div>
        </div>

        <div class="bookingStepTopbar">
            <a href="javascript:history.back()" class="bookingStepTopbar__back">
                ← Back to driver details
            </a>
            <div class="bookingStepTopbar__next">
                Secure payment
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="paymentCard">
                    <div class="mb-4">
                        <h3 class="paymentPageTitle">Complete your payment</h3>
                        <p class="paymentPageSubtext">
                            Choose a payment method and securely complete your booking.
                        </p>
                    </div>

                    <form action="assets/includes/process_payment.php" method="post" id="paymentForm">

                        <div class="paymentLayout">
                            <div class="paymentMethodCol">
                                <div class="paymentMethodTitle">Payment Method</div>

                                <label class="paymentMethodItem is-active" id="optionCard">
                                    <input type="radio" id="card_payment" name="payment_method" value="card" checked>
                                    <img src="assets/images/car_booking/visa_card.png" alt="Visa">
                                </label>

                                <label class="paymentMethodItem" id="optionPaypal">
                                    <input type="radio" id="paypal_payment" name="payment_method" value="mastercard">
                                    <img src="assets/images/car_booking/master_card.png" alt="Master Card">
                                </label>

                                <label class="paymentMethodItem" id="optionBank">
                                    <input type="radio" id="bank_payment" name="payment_method" value="bank">
                                    <span class="paymentMethodItem__text">BANK TRANSFER</span>
                                </label>
                            </div>

                            <div>
                                <div class="paymentFormPanel">
                                    <div id="cardArea">
                                        <div class="paymentFormGrid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="paymentField">
                                                        <label for="card_number">Card Number</label>
                                                        <input type="text" id="card_number" name="card_number" class="paymentInput" placeholder="7569 8859 8744 3244" maxlength="19">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="paymentField">
                                                        <label for="expiry_date">Expiration Date</label>
                                                        <input type="text" id="expiry_date" name="expiry_date" class="paymentInput" placeholder="MM/YY" maxlength="5">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="paymentField">
                                                        <label for="cvv">CVV</label>
                                                        <input type="password" id="cvv" name="cvv" class="paymentInput" placeholder="477" maxlength="4">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="paymentField mb-0">
                                                        <label for="cardholder_name">Card Holder Name</label>
                                                        <input type="text" id="cardholder_name" name="cardholder_name" class="paymentInput" placeholder="John Green">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bankBox" id="bankPaymentFields">
                                        <div class="bankBox__title">Bank transfer details</div>
                                        <div class="bankBox__desc">
                                            Use the below details to complete your transfer. After payment, send your receipt to our email or WhatsApp.
                                        </div>

                                        <div class="bankInfoRow">
                                            <span>Bank Name</span>
                                            <strong>Commercial Bank</strong>
                                        </div>
                                        <div class="bankInfoRow">
                                            <span>Account Name</span>
                                            <strong>SR Rent A Car</strong>
                                        </div>
                                        <div class="bankInfoRow">
                                            <span>Account Number</span>
                                            <strong>1234567890</strong>
                                        </div>
                                        <div class="bankInfoRow">
                                            <span>SWIFT Code</span>
                                            <strong>CCEYLKLX</strong>
                                        </div>
                                    </div>

                                    <input type="hidden" name="booking_id" value="[[!+booking_id]]">
                                    <input type="hidden" name="total_amount" value="250.00">

                                    <div class="paymentAction">
                                        <button type="submit" id="payNowBtn">Confirm Payment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- <div class="col-lg-4">
                <aside class="paymentSummaryCard">
                    <h4 class="paymentSummaryCard__title">Booking Summary</h4>

                    <div class="summaryVehicleBox">
                        <img src="assets/images/car-1.jpg" alt="Vehicle" class="summaryVehicleBox__img">
                        <div>
                            <div class="summaryVehicleBox__name">Toyota Prius</div>
                            <div class="summaryVehicleBox__meta">Automatic · 4 Passengers · 2 Bags</div>
                        </div>
                    </div>

                    <div class="summaryBlock">
                        <div class="summaryLabel">Pick-up</div>
                        <div class="summaryValue">25 Mar 2026, 10:00 AM</div>
                    </div>

                    <div class="summaryBlock">
                        <div class="summaryLabel">Drop-off</div>
                        <div class="summaryValue">28 Mar 2026, 10:00 AM</div>
                    </div>

                    <div class="summaryBlock">
                        <div class="summaryLabel">Coverage</div>
                        <div class="summaryValue">Full Coverage</div>
                    </div>

                    <div class="summaryDivider"></div>

                    <div class="summaryPriceRow">
                        <span>Rental Amount</span>
                        <strong>€ 200.00</strong>
                    </div>

                    <div class="summaryPriceRow">
                        <span>Coverage</span>
                        <strong>€ 30.00</strong>
                    </div>

                    <div class="summaryPriceRow">
                        <span>Extras</span>
                        <strong>€ 20.00</strong>
                    </div>

                    <div class="summaryPriceRow">
                        <span>Service Fee</span>
                        <strong>€ 0.00</strong>
                    </div>

                    <div class="summaryDivider"></div>

                    <div class="summaryTotalRow">
                        <span>Total</span>
                        <strong>€ 250.00</strong>
                    </div>

                    <div class="paymentSecurityNote">
                        SSL secured checkout
                    </div>
                </aside>
            </div> -->
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var cardPayment = document.getElementById("card_payment");
    var bankPayment = document.getElementById("bank_payment");
    var optionCard = document.getElementById("optionCard");
    var optionBank = document.getElementById("optionBank");
    var cardArea = document.getElementById("cardArea");
    var bankFields = document.getElementById("bankPaymentFields");
    var payNowBtn = document.getElementById("payNowBtn");

    var cardholderName = document.getElementById("cardholder_name");
    var cardNumber = document.getElementById("card_number");
    var expiryDate = document.getElementById("expiry_date");

    var previewCardName = document.getElementById("previewCardName");
    var previewCardNumber = document.getElementById("previewCardNumber");
    var previewExpiry = document.getElementById("previewExpiry");
    var cardBrand = document.getElementById("cardBrand");

    function detectBrand(number) {
        var cleaned = number.replace(/\\s+/g, "");
        if (/^4/.test(cleaned)) return "VISA";
        if (/^5[1-5]/.test(cleaned)) return "MASTERCARD";
        if (/^3[47]/.test(cleaned)) return "AMEX";
        return "CARD";
    }

    function formatCardNumber(value) {
        var cleaned = value.replace(/\\D/g, "").substring(0, 16);
        var groups = cleaned.match(/.{1,4}/g);
        return groups ? groups.join(" ") : "";
    }

    function formatExpiry(value) {
        var cleaned = value.replace(/\\D/g, "").substring(0, 4);
        if (cleaned.length >= 3) {
            return cleaned.substring(0, 2) + "/" + cleaned.substring(2);
        }
        return cleaned;
    }

    function togglePaymentFields() {
        if (cardPayment.checked) {
            optionCard.classList.add("is-active");
            optionBank.classList.remove("is-active");
            cardArea.style.display = "block";
            bankFields.classList.remove("is-active");
            payNowBtn.textContent = "Pay Now";
        } else {
            optionBank.classList.add("is-active");
            optionCard.classList.remove("is-active");
            cardArea.style.display = "none";
            bankFields.classList.add("is-active");
            payNowBtn.textContent = "Confirm Booking";
        }
    }

    if (cardNumber) {
        cardNumber.addEventListener("input", function () {
            this.value = formatCardNumber(this.value);
            previewCardNumber.textContent = this.value || "•••• •••• •••• ••••";
            cardBrand.textContent = detectBrand(this.value);
        });
    }

    if (cardholderName) {
        cardholderName.addEventListener("input", function () {
            previewCardName.textContent = this.value.trim() ? this.value.toUpperCase() : "YOUR NAME";
        });
    }

    if (expiryDate) {
        expiryDate.addEventListener("input", function () {
            this.value = formatExpiry(this.value);
            previewExpiry.textContent = this.value || "MM/YY";
        });
    }

    if (cardPayment) cardPayment.addEventListener("change", togglePaymentFields);
    if (bankPayment) bankPayment.addEventListener("change", togglePaymentFields);

    togglePaymentFields();
});
</script>
<!-- ✅ Global Top-Right Logo (visible on all pages) -->
<div class="global-logo">
  <img src="assets/images/award.png" alt="Sri Lanka Rent A Car">
</div>
<footer class="footer-section footer-style-v2" style="background-image: url(\'assets/images/footer-bg.jpg\');">
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-overlay"></div>

    <div class="container footer-inner">
        <div class="row align-items-start gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <div class="footer-logo mb-3">
                        <a href="index.php?id=1">
                            <img src="assets/images/logo_white.png" alt="SR Rent A Car" class="img-fluid footer-logo-img">
                        </a>
                    </div>

                    <p class="footer-desc">
                        As a leading Sri Lanka car rental service provider, SR Rent A Car offers practical and reliable car rental solutions for tourists, business travelers, and locals exploring the Pearl of the Indian Ocean.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="index.php?id=1">Home</a></li>
                        <li><a href="index.php?id=39">Our Fleet</a></li>
                        <li><a href="index.php?id=9">About Us</a></li>
                        <li><a href="index.php?id=10">FAQ</a></li>
                        <li><a href="index.php?id=6">Contact</a></li>
                        <li><a href="index.php?id=5">Blogs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-lg-center">
                <div class="footer-widget">
                    <h3 class="footer-title">Other Services</h3>
                    <ul class="footer-links footer-services">
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\2.png" alt="Explore Vacations (Sri Lanka)"> Explore Vacations (Sri Lanka)
                            </a>
                        </li>
                        <li>
                            <a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets\\images\\useful\\1.png" alt="Airport Transfers"> Airport Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://srilankatransfer.lk/" target="_blank">
                                <img src="assets\\images\\useful\\6.png" alt="SR Transfers"> SR Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets\\images\\useful\\4.png" alt="9 Trees Boutique Villa"> 9 Trees Boutique Villa
                            </a>
                        </li>
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\5.png" alt="9 Trees Boutique Villa">  Euro Motors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-contact-row">
            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <a href="https://maps.app.goo.gl/zspCn37GW4SyfEuF8" target="_blank">
                    371/5, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94777780729">
                    +94 77 778 0729
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <a href="mailto:info@srilankarentacar.com">
                    info@srilankarentacar.com
                </a>
            </div>

            <div class="footer-social">
                <a href="https://www.facebook.com/srrentacar" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <img src="assets/images/payment.png" alt="Payment Methods" class="footer-payment-img">
            </div>

            <div class="footer-bottom-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    All Rights Reserved -
                    <a href="index.php?id=1">SR Rent A Car</a>
                </p>
            </div>

            <div class="footer-bottom-right">
                <img src="assets/images/raca.png" alt="SR Rent A Car" class="footer-raca-img">
            </div>
        </div>
    </div>
</footer>
  
<!-- WhatsApp Chat Popup starts -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <div id="whatsapp-chat-btn" class="wa-button">
        <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px" alt="Whatsapp icon">
    </div>

    <!-- Scroll to top -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>

<script>
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'icon' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[~1]]' => 'index.php?id=1',
    '[[~39]]' => 'index.php?id=39',
    '[[~5]]' => 'index.php?id=5',
    '[[~40]]' => 'index.php?id=40',
    '[[~42]]' => 'index.php?id=42',
    '[[~9]]' => 'index.php?id=9',
    '[[~10]]' => 'index.php?id=10',
    '[[~6]]' => 'index.php?id=6',
    '[[$header?]]' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="index.php?id=1">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="index.php?id=1" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="index.php?id=39" class="nav-link">FLEET</a></li>
      <li class="nav-item"><a href="index.php?id=5" class="nav-link">BLOG</a></li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>
  <div class="dropdown-menu" aria-labelledby="offersDropdown">
    <a class="dropdown-item" href="index.php?id=40">Indian Travellers</a>
    <a class="dropdown-item" href="index.php?id=42">International Travellers</a>
  </div>
</li>
        <li class="nav-item"><a href="index.php?id=9" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="index.php?id=10" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="index.php?id=6" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
    '[[$footer?]]' => '<footer class="footer-section footer-style-v2" style="background-image: url(\'assets/images/footer-bg.jpg\');">
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-overlay"></div>

    <div class="container footer-inner">
        <div class="row align-items-start gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <div class="footer-logo mb-3">
                        <a href="index.php?id=1">
                            <img src="assets/images/logo_white.png" alt="SR Rent A Car" class="img-fluid footer-logo-img">
                        </a>
                    </div>

                    <p class="footer-desc">
                        As a leading Sri Lanka car rental service provider, SR Rent A Car offers practical and reliable car rental solutions for tourists, business travelers, and locals exploring the Pearl of the Indian Ocean.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="index.php?id=1">Home</a></li>
                        <li><a href="index.php?id=39">Our Fleet</a></li>
                        <li><a href="index.php?id=9">About Us</a></li>
                        <li><a href="index.php?id=10">FAQ</a></li>
                        <li><a href="index.php?id=6">Contact</a></li>
                        <li><a href="index.php?id=5">Blogs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-lg-center">
                <div class="footer-widget">
                    <h3 class="footer-title">Other Services</h3>
                    <ul class="footer-links footer-services">
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\2.png" alt="Explore Vacations (Sri Lanka)"> Explore Vacations (Sri Lanka)
                            </a>
                        </li>
                        <li>
                            <a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets\\images\\useful\\1.png" alt="Airport Transfers"> Airport Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://srilankatransfer.lk/" target="_blank">
                                <img src="assets\\images\\useful\\6.png" alt="SR Transfers"> SR Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets\\images\\useful\\4.png" alt="9 Trees Boutique Villa"> 9 Trees Boutique Villa
                            </a>
                        </li>
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\5.png" alt="9 Trees Boutique Villa">  Euro Motors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-contact-row">
            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <a href="https://maps.app.goo.gl/zspCn37GW4SyfEuF8" target="_blank">
                    371/5, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94777780729">
                    +94 77 778 0729
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <a href="mailto:info@srilankarentacar.com">
                    info@srilankarentacar.com
                </a>
            </div>

            <div class="footer-social">
                <a href="https://www.facebook.com/srrentacar" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <img src="assets/images/payment.png" alt="Payment Methods" class="footer-payment-img">
            </div>

            <div class="footer-bottom-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    All Rights Reserved -
                    <a href="index.php?id=1">SR Rent A Car</a>
                </p>
            </div>

            <div class="footer-bottom-right">
                <img src="assets/images/raca.png" alt="SR Rent A Car" class="footer-raca-img">
            </div>
        </div>
    </div>
</footer>
  
<!-- WhatsApp Chat Popup starts -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <div id="whatsapp-chat-btn" class="wa-button">
        <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px" alt="Whatsapp icon">
    </div>

    <!-- Scroll to top -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>

<script>
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->',
  ),
  'sourceCache' => 
  array (
    'MODX\\Revolution\\modChunk' => 
    array (
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="[[~1]]">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="[[~1]]" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="[[~39]]" class="nav-link">FLEET</a></li>
      <li class="nav-item"><a href="[[~5]]" class="nav-link">BLOG</a></li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>
  <div class="dropdown-menu" aria-labelledby="offersDropdown">
    <a class="dropdown-item" href="[[~40]]">Indian Travellers</a>
    <a class="dropdown-item" href="[[~42]]">International Travellers</a>
  </div>
</li>
        <li class="nav-item"><a href="[[~9]]" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="[[~10]]" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="[[~6]]" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<html lang="en">
<head>
    <title>SR Rent A Car (Pvt) Ltd.</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="description" content="SR Rent A Car offers affordable, reliable car rental services in Sri Lanka, including self-drive rentals, airport transfers, luxury cars, and wedding vehicles.">
    <meta name="keywords" content="Sri Lanka car rental, rent a car Sri Lanka, car hire Sri Lanka, car rental Sri Lanka with driver, self-drive car rental Sri Lanka, long-term car rental Sri Lanka, monthly car rental Sri Lanka, cheap car hire Sri Lanka, affordable car rental Sri Lanka, car rental Colombo, car hire Colombo airport, car rental Negombo, rent a car Kandy, car rental Galle, car hire Sri Lanka airport, self-drive rental Sri Lanka, airport transfer Sri Lanka, wedding car rental Sri Lanka, chauffeur service Sri Lanka, luxury car rental Colombo, SUV rental Sri Lanka, van rental Sri Lanka, car rental for tourists Sri Lanka, premium car hire Sri Lanka, corporate car rental Sri Lanka, economy car rental Sri Lanka, SUV hire Sri Lanka, luxury car rental Sri Lanka, 4x4 rental Sri Lanka, convertible rental Sri Lanka, car rental near me Sri Lanka, rent a car online Sri Lanka, hire a car in Sri Lanka for a week, holiday car rental Sri Lanka, best car rental company Sri Lanka, Sri Lanka car rental deals, Sri Lanka car rental reviews, SR Rent A Car">
    <meta name="author" content="SR Rent A Car (Pvt) Ltd.">


<!-- LightGallery JS -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>

<!-- Plugins -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Add Bootstrap JS and CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css" integrity="sha512-6f7HT84a/AplPkpSRSKWqbseRTG4aRrhadjZezYQ0oVk/B+nm/US5KzQkyyOyh0Mn9cyDdChRdS9qaxJRHayww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/css/lightgallery-bundle.min.css">

    <script>
        // Disable text selection
        document.addEventListener("selectstart", function(event) {
            event.preventDefault();
        });

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
            new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
            \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,\'script\',\'dataLayer\',\'GTM-TCHJ37KT\');

            </script>

        <script>
            document.addEventListener(\'contextmenu\', function (e) {
                e.preventDefault();
            });
        </script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNJ5VKC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="google_translate_element" style="float: right;"></div>

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHJ37KT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <div class="py-1 bg-black top">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex">
            <div class="col-md-4 pr-6 d-flex topper align-items-lg-start">
              <span class="tptext"><a href="https://srilankarentacar.lk/">SR Rent A Car (Pvt.) Ltd.</a></span>
            </div>
            <div class="col-md-4 pr-3 d-flex topper justify-content-center">
                <span class="tptext">
                <a href="mailto:bookings@srilankarentacar.com">bookings@srilankarentacar.com</a>
                </span>            
                </div>
                <div class="col-md-4 pr-3 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link">
                    <span class="tptext">
                        <a href="tel:+94777780729">+94 77 778 0729</a>
                    </span>
                </p>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <!-- Left-side Logo -->
    <a class="navbar-brand" href="[[~1]]">
      <img id="dynamic-image" src="assets/images/logo_white.png" alt="Sri Lanka Rent A Car">
    </a>
    
    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active"><a href="[[~1]]" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="[[~39]]" class="nav-link">FLEET</a></li>
      <li class="nav-item"><a href="[[~5]]" class="nav-link">BLOG</a></li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="offersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    OFFERS
  </a>
  <div class="dropdown-menu" aria-labelledby="offersDropdown">
    <a class="dropdown-item" href="[[~40]]">Indian Travellers</a>
    <a class="dropdown-item" href="[[~42]]">International Travellers</a>
  </div>
</li>
        <li class="nav-item"><a href="[[~9]]" class="nav-link">RENT A CAR</a></li>
        <li class="nav-item"><a href="[[~10]]" class="nav-link">FAQ</a></li>
        <li class="nav-item"><a href="[[~6]]" class="nav-link">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- END nav -->

  <!-- Go to Top Button -->
  <!-- <button id="goTop" class="btn btn-outline-primary" style="display:none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
      <i class="fas fa-chevron-up"></i>
  </button> -->

  <!-- JavaScript files should be loaded at the end -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/map.js"></script>


<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

</body>
</html>
',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer class="footer-section footer-style-v2" style="background-image: url(\'assets/images/footer-bg.jpg\');">
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-overlay"></div>

    <div class="container footer-inner">
        <div class="row align-items-start gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <div class="footer-logo mb-3">
                        <a href="[[~1]]">
                            <img src="assets/images/logo_white.png" alt="SR Rent A Car" class="img-fluid footer-logo-img">
                        </a>
                    </div>

                    <p class="footer-desc">
                        As a leading Sri Lanka car rental service provider, SR Rent A Car offers practical and reliable car rental solutions for tourists, business travelers, and locals exploring the Pearl of the Indian Ocean.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="[[~1]]">Home</a></li>
                        <li><a href="[[~39]]">Our Fleet</a></li>
                        <li><a href="[[~9]]">About Us</a></li>
                        <li><a href="[[~10]]">FAQ</a></li>
                        <li><a href="[[~6]]">Contact</a></li>
                        <li><a href="[[~5]]">Blogs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-lg-center">
                <div class="footer-widget">
                    <h3 class="footer-title">Other Services</h3>
                    <ul class="footer-links footer-services">
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\2.png" alt="Explore Vacations (Sri Lanka)"> Explore Vacations (Sri Lanka)
                            </a>
                        </li>
                        <li>
                            <a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets\\images\\useful\\1.png" alt="Airport Transfers"> Airport Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://srilankatransfer.lk/" target="_blank">
                                <img src="assets\\images\\useful\\6.png" alt="SR Transfers"> SR Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets\\images\\useful\\4.png" alt="9 Trees Boutique Villa"> 9 Trees Boutique Villa
                            </a>
                        </li>
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\5.png" alt="9 Trees Boutique Villa">  Euro Motors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-contact-row">
            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <a href="https://maps.app.goo.gl/zspCn37GW4SyfEuF8" target="_blank">
                    371/5, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94777780729">
                    +94 77 778 0729
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <a href="mailto:info@srilankarentacar.com">
                    info@srilankarentacar.com
                </a>
            </div>

            <div class="footer-social">
                <a href="https://www.facebook.com/srrentacar" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <img src="assets/images/payment.png" alt="Payment Methods" class="footer-payment-img">
            </div>

            <div class="footer-bottom-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    All Rights Reserved -
                    <a href="[[~1]]">SR Rent A Car</a>
                </p>
            </div>

            <div class="footer-bottom-right">
                <img src="assets/images/raca.png" alt="SR Rent A Car" class="footer-raca-img">
            </div>
        </div>
    </div>
</footer>
  
<!-- WhatsApp Chat Popup starts -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <div id="whatsapp-chat-btn" class="wa-button">
        <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px" alt="Whatsapp icon">
    </div>

    <!-- Scroll to top -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>

<script>
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer class="footer-section footer-style-v2" style="background-image: url(\'assets/images/footer-bg.jpg\');">
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-overlay"></div>

    <div class="container footer-inner">
        <div class="row align-items-start gy-4">

            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <div class="footer-logo mb-3">
                        <a href="[[~1]]">
                            <img src="assets/images/logo_white.png" alt="SR Rent A Car" class="img-fluid footer-logo-img">
                        </a>
                    </div>

                    <p class="footer-desc">
                        As a leading Sri Lanka car rental service provider, SR Rent A Car offers practical and reliable car rental solutions for tourists, business travelers, and locals exploring the Pearl of the Indian Ocean.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex justify-content-lg-center">
                <div class="footer-widget footer-widget--links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="[[~1]]">Home</a></li>
                        <li><a href="[[~39]]">Our Fleet</a></li>
                        <li><a href="[[~9]]">About Us</a></li>
                        <li><a href="[[~10]]">FAQ</a></li>
                        <li><a href="[[~6]]">Contact</a></li>
                        <li><a href="[[~5]]">Blogs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex flex-column justify-content-lg-center">
                <div class="footer-widget">
                    <h3 class="footer-title">Other Services</h3>
                    <ul class="footer-links footer-services">
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\2.png" alt="Explore Vacations (Sri Lanka)"> Explore Vacations (Sri Lanka)
                            </a>
                        </li>
                        <li>
                            <a href="https://www.airportparking.lk/" target="_blank">
                                <img src="assets\\images\\useful\\1.png" alt="Airport Transfers"> Airport Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://srilankatransfer.lk/" target="_blank">
                                <img src="assets\\images\\useful\\6.png" alt="SR Transfers"> SR Transfers
                            </a>
                        </li>
                        <li>
                            <a href="https://www.agoda.com/the-9-trees-boutique-villa/hotel/negombo-lk.html?cid=1844104&ds=t1RWms%2FkDEEwRXdr" target="_blank">
                                <img src="assets\\images\\useful\\4.png" alt="9 Trees Boutique Villa"> 9 Trees Boutique Villa
                            </a>
                        </li>
                        <li>
                            <a href="https://explore.vacations/" target="_blank">
                                <img src="assets\\images\\useful\\5.png" alt="9 Trees Boutique Villa">  Euro Motors
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="footer-contact-row">
            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <a href="https://maps.app.goo.gl/zspCn37GW4SyfEuF8" target="_blank">
                    371/5, Negombo Road, Seeduwa, Sri Lanka
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="fas fa-phone-alt"></i>
                </span>
                <a href="tel:+94777780729">
                    +94 77 778 0729
                </a>
            </div>

            <div class="footer-contact-item">
                <span class="footer-contact-icon">
                    <i class="far fa-envelope"></i>
                </span>
                <a href="mailto:info@srilankarentacar.com">
                    info@srilankarentacar.com
                </a>
            </div>

            <div class="footer-social">
                <a href="https://www.facebook.com/srrentacar" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/srrentacarsrilanka/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/company/31174684/admin/dashboard/" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <img src="assets/images/payment.png" alt="Payment Methods" class="footer-payment-img">
            </div>

            <div class="footer-bottom-center">
                <p>
                    Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                    All Rights Reserved -
                    <a href="[[~1]]">SR Rent A Car</a>
                </p>
            </div>

            <div class="footer-bottom-right">
                <img src="assets/images/raca.png" alt="SR Rent A Car" class="footer-raca-img">
            </div>
        </div>
    </div>
</footer>
  
<!-- WhatsApp Chat Popup starts -->
<div class="floating-buttons">
    <!-- WhatsApp -->
    <div id="whatsapp-chat-btn" class="wa-button">
        <img src="assets/whatsapp-icon.png" class="img-fluid" style="width:30px" alt="Whatsapp icon">
    </div>

    <!-- Scroll to top -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>

<div id="whatsapp-chat-popup" class="wa-popup hidden">
    <div class="wa-header">
        <i class="bi bi-whatsapp"></i> Chat With Us
        <span id="close-chat">×</span>
    </div>

    <div class="wa-body">
        <p style="font-size:14px;">Hey! 👋Looking to rent a car? We\'re here to help!</p>
        <textarea id="wa-chat-input" placeholder="Type your message..." sty></textarea>
        <button id="wa-send-btn">Send</button>
    </div>
</div>

<script>
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBtn = document.getElementById("whatsapp-chat-btn");
        const chatPopup = document.getElementById("whatsapp-chat-popup");
        const closeChat = document.getElementById("close-chat");
        const sendBtn = document.getElementById("wa-send-btn");
        const messageBox = document.getElementById("wa-chat-input");
        const phone = "94763603666";

        // Open popup
        chatBtn.addEventListener("click", () => {
            chatPopup.classList.remove("hidden");
        });

        // Close popup
        closeChat.addEventListener("click", () => {
            chatPopup.classList.add("hidden");
        });

        // Send message
        sendBtn.addEventListener("click", () => {
            let msg = messageBox.value.trim();
            if (!msg) msg = "Hello! I need more information 😊";

            const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            window.open(url, "_blank");

            messageBox.value = "";
            chatPopup.classList.add("hidden");
        });
    });
</script>
<!-- WhatsApp Chat Popup ends -->',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);