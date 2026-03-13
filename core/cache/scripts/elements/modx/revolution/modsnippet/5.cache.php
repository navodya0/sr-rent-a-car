<?php  return '/**
 * Snippet: RentSearchSummary (editable widget)
 * - Google Places on pickup/dropoff
 * - Flatpickr on pickup/dropoff datetime
 * - Toggle drop-off field when "same location" unchecked
 * - Submits to results page with GET params
 */

$g = function(string $key, string $default = \'\') {
  return isset($_GET[$key]) ? trim((string)$_GET[$key]) : $default;
};
$h = function($v) { return htmlspecialchars((string)$v, ENT_QUOTES, \'UTF-8\'); };

$pickup  = $g(\'pickup_location\');
$dropoff = $g(\'dropoff_location\');
$pickDT  = $g(\'pickup_datetime\');
$dropDT  = $g(\'dropoff_datetime\');

// If dropoff empty => assume same location
$same = ($dropoff === \'\' || $dropoff === null);

// IMPORTANT: change these defaults if needed
$resultsPageId = (int)$modx->getOption(\'resultsPageId\', $scriptProperties, 39);

// Build action URL (always includes id)
$action = $modx->makeUrl($resultsPageId);

// Output
$out  = \'<div class="rentWidget">\';
$out .= \'  <form class="rentWidgetForm" action="\'.$h($action).\'" method="get">\';
$out .= \'    <input type="hidden" name="id" value="\'.$resultsPageId.\'">\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Pick-up location</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-places" type="text" name="pickup_location" value="\'.$h($pickup).\'" placeholder="e.g., Colombo" required>\';
$out .= \'        <button type="button" class="rentWidget__clear" aria-label="Clear pickup">✕</button>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <label class="rentWidget__check mb-0">\';
$out .= \'      <input type="checkbox" class="js-sameLocation" \'.($same ? \'checked\' : \'\').\'>\';
$out .= \'      <span class="text-white">Return car in same location</span>\';
$out .= \'    </label>\';

$out .= \'    <div class="rentWidget__row mt-0 js-dropoffRow" \'.($same ? \'style="display:none;"\' : \'\').\'>\';
$out .= \'      <div class="rentWidget__label">Drop-off location</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-places" type="text" name="dropoff_location" value="\'.$h($dropoff).\'" placeholder="e.g., Kandy">\';
$out .= \'        <button type="button" class="rentWidget__clear" aria-label="Clear dropoff">✕</button>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Pick-up date & time</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-datetime" type="text" name="pickup_datetime" value="\'.$h($pickDT).\'" placeholder="YYYY-MM-DD HH:MM" required>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="rentWidget__row">\';
$out .= \'      <div class="rentWidget__label">Drop-off date & time</div>\';
$out .= \'      <div class="rentWidget__box">\';
$out .= \'        <input class="rentWidget__input js-datetime" type="text" name="dropoff_datetime" value="\'.$h($dropDT).\'" placeholder="YYYY-MM-DD HH:MM" required>\';
$out .= \'      </div>\';
$out .= \'    </div>\';
$out .= \'    <hr style="border-top: 1px solid rgb(255 255 255);">\';

$out .= \'    <button class="rentWidget__btn" type="submit">Search now</button>\';
$out .= \'  </form>\';
$out .= \'</div>\';

return $out;
return;
';