<section class="hero-wrap hero-wrap-2" 
    style="background-image: url('assets/images/booking-bg.jpg'); height: 36rem;" 
    data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row no-gutters slider-text align-items-end justify-content-center" style="height: 36rem;">
			<div class="col-md-9 ftco-animate text-center mb-4">
			  <h1 class="mb-2 bread">Manage Booking</h1>
			  <p class="breadcrumbs" style="padding-bottom: 20px;"><span class="mr-2"><a href="[[~1]]">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Manage Booking<i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		  </div>
		</div>
</section>

<section id="rentResults" class="rentResults py-5 bg-whitee">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        [[!VehiclesCategoryList? &table=`vehicles`]]
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-4">
        [[!RentSearchSummary? &searchPageId=`1`]]
      </div>
      <div class="col-lg-8">
        <h2>All vehicles</h2>
        [[!VehiclesCategoryList? &table=`vehicles` &mode=`list` &tplItem=`VehicleListItemTpl`]]
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.rentWidgetForm').forEach((form) => {
      const same = form.querySelector('.js-sameLocation');
      const dropRow = form.querySelector('.js-dropoffRow');
      const dropInput = form.querySelector('input[name="dropoff_location"]');

      const sync = () => {
        const checked = same && same.checked;
        if (dropRow) dropRow.style.display = checked ? 'none' : '';
        // If same location checked, clear dropoff so server treats it as same
        if (checked && dropInput) dropInput.value = '';
      };

      if (same) same.addEventListener('change', sync);
      sync();

      // Clear buttons
      form.querySelectorAll('.rentWidget__clear').forEach((btn) => {
        btn.addEventListener('click', () => {
          const input = btn.parentElement.querySelector('input');
          if (input) input.value = '';
          input && input.focus();
        });
      });
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    if (window.flatpickr) {
      flatpickr('.js-datetime', {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true
      });
    }
  });
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU&libraries=places"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    if (!window.google || !google.maps || !google.maps.places) return;

    document.querySelectorAll('.js-places').forEach((input) => {
      const ac = new google.maps.places.Autocomplete(input, {
        fields: ["formatted_address", "geometry", "name"],
        // optional: componentRestrictions: { country: "lk" }
      });

      ac.addListener("place_changed", () => {
        const place = ac.getPlace();
        // if user picks a place name, prefer formatted_address if available
        if (place && place.formatted_address) input.value = place.formatted_address;
      });
    });
  });
</script>


<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.vehicleScroller').forEach(scroller => {
      const rowId = scroller.getAttribute('data-scroller');
      const row = document.getElementById(rowId);
      if (!row) return;

      const scrollByCards = (dir) => {
        const card = row.querySelector('.vehicleCard');
        const cardW = card ? (card.getBoundingClientRect().width + 12) : 200;
        row.scrollBy({ left: dir * (cardW * 3), behavior: 'smooth' }); // scroll ~3 cards
      };

      scroller.querySelectorAll('.vehicleScroller__btn').forEach(btn => {
        btn.addEventListener('click', () => {
          const dir = parseInt(btn.getAttribute('data-dir'), 10) || 1;
          scrollByCards(dir);
        });
      });
    });
  });
</script>