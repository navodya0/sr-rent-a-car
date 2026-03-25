<?php
require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$tpl      = $modx->getOption('tpl', $scriptProperties, 'VehicleCategoryCardTpl');
$tplItem  = $modx->getOption('tplItem', $scriptProperties, 'VehicleListItemTpl');
$limit    = (int)$modx->getOption('limit', $scriptProperties, 20);
$table    = $modx->getOption('table', $scriptProperties, 'vehicles');
$groupBy  = (int)$modx->getOption('groupByCategory', $scriptProperties, 1);
$mode     = $modx->getOption('mode', $scriptProperties, 'cards');
$step2PageId = (int)$modx->getOption('step2PageId', $scriptProperties, 41);

/*
|--------------------------------------------------------------------------
| Handle incoming search source
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchSource = trim($_POST['search_source'] ?? '');

    $_SESSION['rent_search'] = [
        'pickup_location'  => trim($_POST['pickup_location'] ?? ''),
        'dropoff_location' => trim($_POST['dropoff_location'] ?? ''),
        'pickup_datetime'  => trim($_POST['pickup_datetime'] ?? ''),
        'dropoff_datetime' => trim($_POST['dropoff_datetime'] ?? ''),
    ];

    // Coming from home search => remove old offer discount + vehicle
    if ($searchSource === 'home') {
        unset($_SESSION['rent_discount'], $_SESSION['rent_offer_vehicle_id']);
    }

    // Coming from offer => store discount + selected vehicle
    if ($searchSource === 'offer') {
        if (isset($_POST['discount']) && trim($_POST['discount']) !== '') {
            $_SESSION['rent_discount'] = trim($_POST['discount']);
        }

        if (isset($_POST['vehicle_id']) && (int)$_POST['vehicle_id'] > 0) {
            $_SESSION['rent_offer_vehicle_id'] = (int)$_POST['vehicle_id'];
        }
    }

    // Explicit remove
    if (isset($_POST['clear_discount']) && $_POST['clear_discount'] === '1') {
        unset($_SESSION['rent_discount'], $_SESSION['rent_offer_vehicle_id']);
    }
}

$discountRaw = '';

if (isset($_GET['discount']) && trim($_GET['discount']) !== '') {
    $discountRaw = trim($_GET['discount']);
    $_SESSION['rent_discount'] = $discountRaw;
} else {
    $discountRaw = trim($_SESSION['rent_discount'] ?? '');
}

$discountPercent = 0;
if ($discountRaw !== '') {
    $discountPercent = (int)preg_replace('/[^0-9]/', '', $discountRaw);
}

$search = $_SESSION['rent_search'] ?? [];

$discountRaw = trim($_SESSION['rent_discount'] ?? '');
$discountPercent = 0;

if ($discountRaw !== '') {
    $discountPercent = (int)preg_replace('/[^0-9]/', '', $discountRaw);
}

$pickupRaw  = trim($search['pickup_datetime'] ?? '');
$dropoffRaw = trim($search['dropoff_datetime'] ?? '');
$currentCat = isset($_REQUEST['cat']) ? trim((string)$_REQUEST['cat']) : '';

$pickupLocation  = trim($search['pickup_location'] ?? '');
$dropoffLocation = trim($search['dropoff_location'] ?? '');

$pickupDate  = ($pickupRaw !== '' && strtotime($pickupRaw)) ? date('Y-m-d', strtotime($pickupRaw)) : '';
$dropoffDate = ($dropoffRaw !== '' && strtotime($dropoffRaw)) ? date('Y-m-d', strtotime($dropoffRaw)) : '';

if (!function_exists('getRentalDays')) {
    function getRentalDays($pickupDate, $dropoffDate) {
        if (!$pickupDate || !$dropoffDate) return 0;

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);

        if (!$start || !$end || $end < $start) return 0;

        return max(1, (int)(($end - $start) / 86400) + 1);
    }
}

if (!function_exists('calculateRentalPrice')) {
    function calculateRentalPrice($modx, $carCode, $pickupDate, $dropoffDate) {
        $days = getRentalDays($pickupDate, $dropoffDate);
        if ($days <= 0 || $carCode === '') return '';

        $sql = "SELECT duration, rate
                FROM car_rental
                WHERE car_code = :car_code
                  AND :pickup_date >= DATE(start_date)
                  AND :dropoff_date <= DATE(end_date)
                ORDER BY duration ASC";

        $stmt = $modx->prepare($sql);
        if (!$stmt) return '';

        $stmt->bindValue(':car_code', $carCode, PDO::PARAM_STR);
        $stmt->bindValue(':pickup_date', $pickupDate, PDO::PARAM_STR);
        $stmt->bindValue(':dropoff_date', $dropoffDate, PDO::PARAM_STR);

        if (!$stmt->execute()) return '';

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$rows) return '';

        $rates = [];
        foreach ($rows as $row) {
            $duration = (int)($row['duration'] ?? 0);
            $rate     = (float)($row['rate'] ?? 0);

            if ($duration > 0) {
                $rates[$duration] = $rate;
            }
        }

        if (!$rates) return '';

        ksort($rates);

        $maxDuration = max(array_keys($rates));
        $lastRate    = (float)$rates[$maxDuration];
        $total       = 0;

        for ($d = 1; $d <= $days; $d++) {
            if (isset($rates[$d])) {
                $total += (float)$rates[$d];
            } elseif ($d > $maxDuration) {
                $total += $lastRate;
            } else {
                return '';
            }
        }

        return number_format($total, 2, '.', '');
    }
}

$days = getRentalDays($pickupDate, $dropoffDate);

/**
 * MODE 1: category cards
 */
if ($mode === 'cards') {
    if ($groupBy) {
        $sql = "SELECT
                    v1.id,
                    v1.image,
                    v1.car_category,
                    v1.car_model,
                    v1.car_code,
                    v1.pax_count,
                    v1.luggage_count
                FROM {$table} v1
                INNER JOIN (
                    SELECT car_category, MIN(id) AS first_id
                    FROM {$table}
                    GROUP BY car_category
                ) v2 ON v1.id = v2.first_id
                ORDER BY v1.car_category ASC
                LIMIT :limit";
    } else {
        $sql = "SELECT
                    v.id,
                    v.image,
                    v.car_category,
                    v.car_model,
                    v.car_code,
                    v.pax_count,
                    v.luggage_count
                FROM {$table} v
                ORDER BY v.id DESC
                LIMIT :limit";
    }

    $stmt = $modx->prepare($sql);
    if (!$stmt) return '<p>Could not prepare vehicles query.</p>';

    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    if (!$stmt->execute()) return '<p>Could not load vehicles.</p>';

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!$rows) return '<p>No vehicles found.</p>';

    $uid = 'vehRow_' . substr(md5(uniqid('', true)), 0, 8);

    $out  = '<div class="vehicleScroller" data-scroller="' . $uid . '">';
    $out .= '<button class="vehicleScroller__btn vehicleScroller__btn--left" type="button" aria-label="Scroll left" data-dir="-1">‹</button>';
    $out .= '<div class="vehicleRow mt-4 mt-lg-0" id="' . $uid . '">';

    foreach ($rows as $row) {
        $cat = (string)($row['car_category'] ?? '');



$formAction = $modx->makeUrl($step2PageId);

$ph = [
    'image'         => $row['image'] ?? '',
    'car_category'  => $cat,
    'car_model'     => $row['car_model'] ?? '',
    'car_code'      => $row['car_code'] ?? '',
    'pax_count'     => (int)($row['pax_count'] ?? 0),
    'luggage_count' => (int)($row['luggage_count'] ?? 0),
    'price'         => calculateRentalPrice($modx, $row['car_code'] ?? '', $pickupDate, $dropoffDate),
    'days'          => $days,
    'deal_link'     => '',
    'form_action'   => $formAction,
    'vehicle_id'    => (int)$row['id'],
    'is_active'     => ($currentCat !== '' && strcasecmp($currentCat, $cat) === 0) ? 1 : 0,
];

        $out .= $modx->getChunk($tpl, $ph);
    }

    $out .= '</div>';
    $out .= '<button class="vehicleScroller__btn vehicleScroller__btn--right" type="button" aria-label="Scroll right" data-dir="1">›</button>';
    $out .= '</div>';

    return $out;
}

/**
 * MODE 2: vehicle list
 */
$sql = "SELECT
            v.id,
            v.image,
            v.car_category,
            v.car_model,
            v.car_code,
            v.transmission_type,
            v.pax_count,
            v.luggage_count
        FROM {$table} v";

$params = [];
if ($currentCat !== '') {
    $sql .= " WHERE v.car_category = :current_cat";
    $params[':current_cat'] = $currentCat;
}

$sql .= " ORDER BY v.car_category ASC, v.id ASC";

$stmt = $modx->prepare($sql);
if (!$stmt) return '<p>Could not prepare vehicles query.</p>';

foreach ($params as $key => $val) {
    $stmt->bindValue($key, $val, PDO::PARAM_STR);
}

if (!$stmt->execute()) return '<p>Could not load vehicles.</p>';

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!$rows) return '<p>No vehicles found.</p>';

$grouped = [];
foreach ($rows as $row) {
    $cat = trim((string)($row['car_category'] ?? 'Uncategorized'));
    if (!isset($grouped[$cat])) $grouped[$cat] = [];

$originalPrice = (float) calculateRentalPrice(
    $modx,
    $row['car_code'] ?? '',
    $pickupDate,
    $dropoffDate
);

$discountedPrice = $originalPrice;

if ($discountPercent > 0 && $originalPrice > 0) {
    $discountedPrice = $originalPrice - (($originalPrice * $discountPercent) / 100);
}

$row['calculated_price'] = $discountedPrice > 0 ? number_format($discountedPrice, 2, '.', '') : '';
$row['original_price'] = $originalPrice > 0 ? number_format($originalPrice, 2, '.', '') : '';
$row['discount_percent'] = $discountPercent;

$row['form_action'] = $modx->makeUrl($step2PageId);
$row['vehicle_id']  = (int)$row['id'];

    $grouped[$cat][] = $row;
}

$out = '<div id="vehicleGroups">';

foreach ($grouped as $cat => $items) {
    $safeCat = htmlspecialchars($cat, ENT_QUOTES, 'UTF-8');
    $out .= '<div class="vehicleGroup" data-category="' . $safeCat . '">';
    foreach ($items as $index => $row) {
$ph = [
    'id'               => (int)($row['id'] ?? 0),
    'image'            => $row['image'] ?? '',
    'car_model'        => $row['car_model'] ?? '',
    'car_category'     => $cat,
    'car_code'         => $row['car_code'] ?? '',
    'pax_count'        => (int)($row['pax_count'] ?? 0),
    'luggage_count'    => (int)($row['luggage_count'] ?? 0),
    'transmission_type'         => $row['transmission_type'] ?? '',
    'price'            => $row['calculated_price'] ?? '',
    'original_price'   => $row['original_price'] ?? '',
    'discount_percent' => $row['discount_percent'] ?? 0,
    'discount_raw'     => $discountRaw,
    'days'             => $days,
    'form_action'      => $row['form_action'] ?? '',
    'vehicle_id'       => $row['vehicle_id'] ?? 0,
    'is_first'         => $index === 0 ? 1 : 0,
];

        $out .= '<div class="vehicleItem" data-first="' . ($index === 0 ? '1' : '0') . '">';
        $out .= $modx->getChunk($tplItem, $ph);
        $out .= '</div>';
    }

    $out .= '</div>';
}

$out .= '</div>';

return $out;