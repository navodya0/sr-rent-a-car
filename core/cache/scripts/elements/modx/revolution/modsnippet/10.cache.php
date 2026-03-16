<?php  return 'require "assets/includes/db_connect.php";

$vehicleId       = isset($_POST[\'vehicle_id\']) ? (int)$_POST[\'vehicle_id\'] : 0;
$carCode         = isset($_POST[\'car_code\']) ? trim($_POST[\'car_code\']) : \'\';
$pickupDateTime  = isset($_POST[\'pickup_datetime\']) ? trim($_POST[\'pickup_datetime\']) : \'\';
$dropoffDateTime = isset($_POST[\'dropoff_datetime\']) ? trim($_POST[\'dropoff_datetime\']) : \'\';
$pickupLocation  = isset($_POST[\'pickup_location\']) ? trim($_POST[\'pickup_location\']) : \'\';
$dropoffLocation = isset($_POST[\'dropoff_location\']) ? trim($_POST[\'dropoff_location\']) : \'\';
$days            = isset($_POST[\'days\']) ? (int)$_POST[\'days\'] : 0;

$rentalAmount    = isset($_POST[\'rental_amount\']) ? (float)$_POST[\'rental_amount\'] : 0;
$securityDeposit = isset($_POST[\'security_deposit\']) ? (float)$_POST[\'security_deposit\'] : 0;
$extrasTotal     = isset($_POST[\'extras_total\']) ? (float)$_POST[\'extras_total\'] : 0;
$grandTotal      = isset($_POST[\'grand_total\']) ? (float)$_POST[\'grand_total\'] : 0;

$selectedExtras = [];
if (!empty($_POST[\'extras\'])) {
    $decoded = json_decode($_POST[\'extras\'], true);
    if (is_array($decoded)) {
        $selectedExtras = $decoded;
    }
}

if ($vehicleId <= 0 && $carCode === \'\') {
    return \'<p>Vehicle not selected.</p>\';
}

$pickupDate  = ($pickupDateTime && strtotime($pickupDateTime)) ? date(\'Y-m-d\', strtotime($pickupDateTime)) : \'\';
$dropoffDate = ($dropoffDateTime && strtotime($dropoffDateTime)) ? date(\'Y-m-d\', strtotime($dropoffDateTime)) : \'\';

if ($days <= 0 && $pickupDate && $dropoffDate) {
    $start = strtotime($pickupDate);
    $end   = strtotime($dropoffDate);
    if ($start && $end && $end >= $start) {
        $days = max(1, (int)(($end - $start) / 86400) + 1);
    }
}

$where = [];
$params = [];

if ($vehicleId > 0) {
    $where[] = "v.id = :vehicle_id";
    $params[\':vehicle_id\'] = $vehicleId;
} elseif ($carCode !== \'\') {
    $where[] = "v.car_code = :car_code";
    $params[\':car_code\'] = $carCode;
}

$sql = "SELECT
          v.id,
          v.image,
          v.car_model,
          v.car_category,
          v.car_code,
          v.pax_count,
          v.luggage_count,
          v.transmission_type,
          v.deposit_amount
        FROM vehicles v
        WHERE " . implode(\' AND \', $where) . "
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare coverage query.</p>\';

foreach ($params as $key => $value) {
    if ($key === \':vehicle_id\') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return \'<p>Could not load vehicle: \' . htmlspecialchars($error[2]) . \'</p>\';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return \'<p>Vehicle not found.</p>\';

if (!function_exists(\'step3CalculatePrice\')) {
    function step3CalculatePrice($modx, $carCode, $pickupDate, $dropoffDate) {
        if (!$carCode || !$pickupDate || !$dropoffDate) return \'\';

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);
        if (!$start || !$end || $end < $start) return \'\';

        $days = max(1, (int)(($end - $start) / 86400) + 1);

        $sql = "SELECT duration, rate
                FROM car_rental3
                WHERE car_code = :car_code
                  AND :pickup_date >= DATE(start_date)
                  AND :dropoff_date <= DATE(end_date)
                ORDER BY duration ASC";

        $stmt = $modx->prepare($sql);
        if (!$stmt) return \'\';

        $stmt->bindValue(\':car_code\', $carCode, PDO::PARAM_STR);
        $stmt->bindValue(\':pickup_date\', $pickupDate, PDO::PARAM_STR);
        $stmt->bindValue(\':dropoff_date\', $dropoffDate, PDO::PARAM_STR);

        if (!$stmt->execute()) return \'\';

        $rates = [];
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
            $duration = (int)$r[\'duration\'];
            $rate = (float)$r[\'rate\'];
            if ($duration > 0) $rates[$duration] = $rate;
        }

        if (!$rates) return \'\';

        $maxDuration = max(array_keys($rates));
        $remaining = $days;
        $total = 0;

        while ($remaining > 0) {
            $chunk = min($remaining, $maxDuration);

            if (isset($rates[$chunk])) {
                $total += $rates[$chunk];
                $remaining -= $chunk;
                continue;
            }

            $found = false;
            for ($d = $chunk; $d >= 1; $d--) {
                if (isset($rates[$d])) {
                    $total += $rates[$d];
                    $remaining -= $d;
                    $found = true;
                    break;
                }
            }

            if (!$found) return \'\';
        }

        return (float)number_format($total, 2, \'.\', \'\');
    }
}

$baseRental = step3CalculatePrice($modx, $row[\'car_code\'], $pickupDate, $dropoffDate);
$baseRental = $baseRental !== \'\' ? (float)$baseRental : 0;

$coveragePackages = [
    [
        \'id\' => \'risk\',
        \'title\' => \'Without Full Coverage\',
        \'subtitle\' => \'If there’s damage or theft, the rental company will charge you for the items not covered.\',
        \'price_per_day\' => 0,
        \'period_total\' => 0,
        \'button\' => "No, I’ll take the risk",
        \'theme\' => \'risk\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\',
            \'Administrative fees related to the damage\',
            \'No drivers covered\'
        ]
    ],
    [
        \'id\' => \'basic\',
        \'title\' => \'Basic Coverage\',
        \'subtitle\' => \'A light extra protection option for essential incidents.\',
        \'price_per_day\' => 3.90,
        \'period_total\' => 3.90 * $days,
        \'button\' => \'Choose Basic\',
        \'theme\' => \'basic\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Roadside assistance\',
            \'Lost keys and lockout fees\'
        ]
    ],
    [
        \'id\' => \'standard\',
        \'title\' => \'Standard Coverage\',
        \'subtitle\' => \'Popular choice for broader protection during your rental.\',
        \'price_per_day\' => 5.40,
        \'period_total\' => 5.40 * $days,
        \'button\' => \'Choose Standard\',
        \'theme\' => \'standard\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\'
        ]
    ],
    [
        \'id\' => \'premium\',
        \'title\' => \'Premium Coverage\',
        \'subtitle\' => \'Extra peace of mind with strong reimbursement protection.\',
        \'price_per_day\' => 6.60,
        \'period_total\' => 6.60 * $days,
        \'button\' => \'Choose Premium\',
        \'theme\' => \'premium\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\'
        ]
    ],
    [
        \'id\' => \'full\',
        \'title\' => \'Full Coverage\',
        \'subtitle\' => \'We reimburse eligible charges for damage, theft and related fees.\',
        \'price_per_day\' => 7.84,
        \'period_total\' => 7.84 * $days,
        \'button\' => \'Book with coverage\',
        \'theme\' => \'full\',
        \'items\' => [
            \'Damage, theft, vandalism, hit-and-run\',
            \'Windows, mirrors, lamps, wheels, tires\',
            \'Bodywork, underbody, roof, mechanical damage\',
            \'Roadside assistance, towing, and taxi expenses\',
            \'Lost keys and lockout fees\',
            \'Misfuelling-related costs\',
            \'Administrative fees related to the damage\',
            \'All drivers covered\'
        ]
    ]
];

$step4BaseParams = [
    \'vehicle_id\'       => $vehicleId,
    \'car_code\'         => $carCode,
    \'pickup_datetime\'  => $pickupDateTime,
    \'dropoff_datetime\' => $dropoffDateTime,
    \'pickup_location\'  => $pickupLocation,
    \'dropoff_location\' => $dropoffLocation,
    \'days\'             => $days
];

$out = \'\';
$out .= \'<div class="coveragePage">\';

$out .= \'  <div class="coveragePage__header">\';
$out .= \'    <h2 class="coveragePage__title">Upgrade to Full Coverage and relax...</h2>\';
$out .= \'    <p class="coveragePage__subtitle">Choose the protection package that suits your trip.</p>\';
$out .= \'  </div>\';

$out .= \'  <div class="coverageHeroSummary">\';
$out .= \'    <div class="coverageHeroSummary__vehicle">\';
$out .= \'      <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="coverageHeroSummary__image">\';
$out .= \'      <div class="coverageHeroSummary__info">\';
$out .= \'        <h3 class="coverageHeroSummary__name">\' . htmlspecialchars($row[\'car_model\']) . \'</h3>\';
$out .= \'        <div class="coverageHeroSummary__meta">\' . htmlspecialchars($row[\'transmission_type\'] ?: \'Manual\') . \' • \' . (int)$row[\'pax_count\'] . \' seats • \' . (int)$row[\'luggage_count\'] . \' luggage • \' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</div>\';

if (!empty($selectedExtras)) {
    $out .= \'        <div class="coverageHeroSummary__extras">\';
    $out .= \'          <div class="coverageHeroSummary__extrasTitle">Selected extras</div>\';
    $out .= \'          <ul class="coverageHeroSummary__extrasList">\';
    foreach ($selectedExtras as $extra) {
        $extraName = htmlspecialchars($extra[\'name\'] ?? \'\');
        $extraQty = (int)($extra[\'qty\'] ?? 1);
        $extraTotal = isset($extra[\'total\']) ? (float)$extra[\'total\'] : 0;
        $out .= \'            <li>\';
        $out .= \'              <span>\' . $extraName . \' × \' . $extraQty . \'</span>\';
        $out .= \'              <strong>€\' . number_format($extraTotal, 2, \'.\', \'\') . \'</strong>\';
        $out .= \'            </li>\';
    }
    $out .= \'          </ul>\';
    $out .= \'        </div>\';
}

$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="coverageHeroSummary__amount">\';
$out .= \'      <span>Base rental</span>\';
$out .= \'      <strong>€\' . number_format($baseRental, 2, \'.\', \'\') . \'</strong>\';

if ($extrasTotal > 0) {
    $out .= \'      <span class="coverageHeroSummary__amountSub">Extras: €\' . number_format($extrasTotal, 2, \'.\', \'\') . \'</span>\';
}
if ($grandTotal > 0) {
    $out .= \'      <span class="coverageHeroSummary__amountSub coverageHeroSummary__amountSub--total">Current total: €\' . number_format($grandTotal, 2, \'.\', \'\') . \'</span>\';
}

$out .= \'    </div>\';
$out .= \'  </div>\';

$out .= \'  <div class="coverageGrid">\';

foreach ($coveragePackages as $pkg) {
    $step4Link = $modx->makeUrl(42, \'\', array_merge($step4BaseParams, [
        \'coverage_id\' => $pkg[\'id\'],
        \'coverage_name\' => $pkg[\'title\'],
        \'coverage_day_price\' => number_format((float)$pkg[\'price_per_day\'], 2, \'.\', \'\'),
        \'coverage_total\' => number_format((float)$pkg[\'period_total\'], 2, \'.\', \'\')
    ]));

    $themeClass = \'coverageCard--\' . $pkg[\'theme\'];
    $pricePerDay = (float)$pkg[\'price_per_day\'];
    $periodTotal = (float)$pkg[\'period_total\'];

    $out .= \'<div class="coverageCard \' . $themeClass . \'">\';

    $out .= \'  <div class="coverageCard__top">\';
    $out .= \'    <div class="coverageCard__intro">\';
    $out .= \'      <h3 class="coverageCard__title">\' . htmlspecialchars($pkg[\'title\']) . \'</h3>\';
    $out .= \'      <p class="coverageCard__desc">\' . htmlspecialchars($pkg[\'subtitle\']) . \'</p>\';
    $out .= \'    </div>\';
    $out .= \'    <div class="coverageCard__imageWrap">\';
    $out .= \'      <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="coverageCard__image">\';
    $out .= \'    </div>\';
    $out .= \'  </div>\';

    $out .= \'  <div class="coverageCard__priceBox">\';
    if ($pricePerDay > 0) {
        $out .= \'    <div class="coverageCard__price">\';
        $out .= \'      <strong>€\' . number_format($pricePerDay, 2, \'.\', \'\') . \'/day</strong>\';
        $out .= \'      <span>€\' . number_format($periodTotal, 2, \'.\', \'\') . \' for rental period</span>\';
        $out .= \'    </div>\';
    } else {
        $out .= \'    <div class="coverageCard__price">\';
        $out .= \'      <strong>Included</strong>\';
        $out .= \'      <span>No additional protection selected</span>\';
        $out .= \'    </div>\';
    }
    $out .= \'    <a href="\' . htmlspecialchars($step4Link) . \'" class="coverageCard__btn">\' . htmlspecialchars($pkg[\'button\']) . \'</a>\';
    $out .= \'  </div>\';

    $out .= \'  <div class="coverageCard__features">\';
    $out .= \'    <h4>\' . ($pkg[\'id\'] === \'risk\' ? \'Not covered\' : "What\\\'s covered?") . \'</h4>\';
    $out .= \'    <ul>\';
    foreach ($pkg[\'items\'] as $item) {
        $out .= \'<li>\' . htmlspecialchars($item) . \'</li>\';
    }
    $out .= \'    </ul>\';
    $out .= \'  </div>\';

    if ($pkg[\'id\'] === \'full\') {
        $out .= \'  <div class="coverageCard__footer coverageCard__footer--success">\';
        $out .= \'    Cancel anytime before pick-up!\';
        $out .= \'  </div>\';
    } elseif ($pkg[\'id\'] === \'risk\') {
        $out .= \'  <div class="coverageCard__footer coverageCard__footer--warning">\';
        $out .= \'    You may be charged directly by the supplier if something happens.\';
        $out .= \'  </div>\';
    }

    $out .= \'</div>\';
}

$out .= \'  </div>\';
$out .= \'</div>\';

return $out;
return;
';