<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Snippet: RentSearchSummary
 * Uses SESSION instead of GET so details do not appear in URL
 */

$h = function($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); };

$search = $_SESSION['rent_search'] ?? [];

$pickup  = trim($search['pickup_location'] ?? '');
$dropoff = trim($search['dropoff_location'] ?? '');
$pickDT  = trim($search['pickup_datetime'] ?? '');
$dropDT  = trim($search['dropoff_datetime'] ?? '');

$same = ($dropoff === '');

$resultsPageId = (int)$modx->getOption('resultsPageId', $scriptProperties, 39);
$action = $modx->makeUrl($resultsPageId);

$out = '<div class="rentWidget">'; 
$out .= '  <form class="rentWidgetForm" action="'.$h($action).'" method="post">';
$out .= '    <input type="hidden" name="id" value="'.$resultsPageId.'">';

$out .= ' <div class="rentWidget__row">'; 
$out .= '      <div class="rentWidget__label">Pick-up location</div>';
$out .= '      <div class="rentWidget__box">';
$out .= '        <input class="rentWidget__input js-places" type="text" name="pickup_location" value="'.$h($pickup).'" placeholder="e.g., Colombo" required>';
$out .= '        <button type="button" class="rentWidget__clear" aria-label="Clear pickup">✕</button>';
$out .= '      </div>';
$out .= '    </div>';

$out .= '    <label class="rentWidget__check mb-0">';
$out .= '      <input type="checkbox" class="js-sameLocation" '.($same ? 'checked' : '').'>';
$out .= '      <span class="text-white">Return car in same location</span>';
$out .= '    </label>';

$out .= ' <div class="rentWidget__row mt-0 js-dropoffRow" '.($same ? 'style="display:none;"' : '').'>';
$out .= '      <div class="rentWidget__label">Drop-off location</div>';
$out .= '      <div class="rentWidget__box">';
$out .= '        <input class="rentWidget__input js-places" type="text" name="dropoff_location" value="'.$h($dropoff).'" placeholder="e.g., Kandy">';
$out .= '        <button type="button" class="rentWidget__clear" aria-label="Clear dropoff">✕</button>';
$out .= '      </div>';
$out .= '    </div>';

$out .= '    <div class="rentWidget__row">';
$out .= '      <div class="rentWidget__label">Pick-up date & time</div>';
$out .= '      <div class="rentWidget__box">';
$out .= '        <input class="rentWidget__input js-datetime" type="text" name="pickup_datetime" value="'.$h($pickDT).'" placeholder="YYYY-MM-DD HH:MM" required>';
$out .= '      </div>';
$out .= '    </div>';

$out .= '    <div class="rentWidget__row">';
$out .= '      <div class="rentWidget__label">Drop-off date & time</div>';
$out .= '      <div class="rentWidget__box">';
$out .= '        <input class="rentWidget__input js-datetime" type="text" name="dropoff_datetime" value="'.$h($dropDT).'" placeholder="YYYY-MM-DD HH:MM" required>';
$out .= '      </div>';
$out .= '    </div>';

$out .= '    <hr style="border-top: 1px solid rgb(255 255 255);">';
$out .= '    <button class="rentWidget__btn" type="submit">Search now</button>';
$out .= '  </form>';
$out .= '</div>';

return $out;
return;
