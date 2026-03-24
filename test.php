<div class="dealCard">
  <div class="dealCard__imageCol">
    <img src="[[+image]]" alt="[[+car_model:htmlent]]" class="dealCard__image">
  </div>

  <div class="dealCard__content">
    <h3 class="dealCard__title">[[+car_model:htmlent]]</h3>

    <div class="dealCard__specs">
      <span>Pax: [[+pax_count]]</span>
      <span>Luggage: [[+luggage_count]]</span>
      <span>Air Conditioning</span>
    </div>

    [[+discount_percent:gt=`0`:then=`
      <div class="dealCard__offerNote">
        <span class="dealCard__offerBadge">Discount Applied</span>
        <p class="dealCard__offerText">
          Select dates and pickup details to see your discounted total.
        </p>
      </div>
    `]]
  </div>

  <div class="dealCard__priceCol">
    <div class="dealCard__priceLabel">
      [[+days:gt=`0`:then=`Total for [[+days]] [[+days:is=`1`:then=`day`:else=`days`]]`:else=`Select dates to see total`]]
    </div>

    <div class="dealCard__priceValue">
      [[+price:is=``:then=`
        [[+discount_percent:gt=`0`:then=`
          <span class="dealCard__suitable">Suitable offer available</span>
        `:else=`
          <span class="dealCard__selectInfo">Select dates and locations</span>
        `]]
      `:else=`
        [[+discount_percent:gt=`0`:then=`
          <span class="dealCard__oldPrice">$ [[+original_price]]</span>
          <span class="dealCard__newPrice">$ [[+price]]</span>
        `:else=`
          $ [[+price]]
        `]]
      `]]
    </div>

    <form action="[[+form_action]]" method="post" class="dealCard__form">
      <input type="hidden" name="id" value="41">
      <input type="hidden" name="vehicle_id" value="[[+vehicle_id]]">
      <input type="hidden" name="car_code" value="[[+car_code]]">
      <input type="hidden" name="search_source" value="[[+discount_percent:gt=`0`:then=`offer`:else=`home`]]">
      <input type="hidden" name="discount" value="[[+discount_raw]]">
      <button type="submit" class="dealCard__btn">View deal</button>
    </form>
  </div>
</div>