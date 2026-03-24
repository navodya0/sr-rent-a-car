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
    padding: 5px;
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
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 20 20' fill='none'%3E%3Cpath d='M16.667 5L7.5 14.167 3.333 10' stroke='%2322C55E' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
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
    justify-content: center;
}

#payNowBtn {
    width: 50%;
    height: 44px;
    border: 0;
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
    style="background-image: url('assets/images/booking-bg.jpg'); height: 36rem;"
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

                    <form action="#" method="post" id="paymentForm">

                        <div class="paymentLayout">
                            <div class="paymentMethodCol">
                                <div class="paymentMethodTitle">Payment Method</div>

                                <label class="paymentMethodItem is-active" id="optionCard">
                                    <input type="radio" id="card_payment" name="payment_method" value="card" checked>
                                    <img src="assets/images/car_booking/visa_card.png" alt="Visa">
                                </label>

                                <label class="paymentMethodItem" id="mastercard">
                                    <input type="radio" id="mastercard" name="payment_method" value="mastercard">
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
                                                <div class="col-md-12 pt-0">
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
        var cleaned = number.replace(/\s+/g, "");
        if (/^4/.test(cleaned)) return "VISA";
        if (/^5[1-5]/.test(cleaned)) return "MASTERCARD";
        if (/^3[47]/.test(cleaned)) return "AMEX";
        return "CARD";
    }

    function formatCardNumber(value) {
        var cleaned = value.replace(/\D/g, "").substring(0, 16);
        var groups = cleaned.match(/.{1,4}/g);
        return groups ? groups.join(" ") : "";
    }

    function formatExpiry(value) {
        var cleaned = value.replace(/\D/g, "").substring(0, 4);
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