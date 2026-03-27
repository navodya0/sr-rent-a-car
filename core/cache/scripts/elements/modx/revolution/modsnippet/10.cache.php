<?php  return 'require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$discountRaw = trim($_SESSION[\'rent_discount\'] ?? \'\');
$offerCategory = trim($_SESSION[\'rent_offer_category\'] ?? \'\');
$discountPercent = 0;

if ($discountRaw !== \'\') {
    $discountPercent = (int)preg_replace(\'/[^0-9]/\', \'\', $discountRaw);
}

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

$_SESSION[\'booking_step3\'] = [
    \'vehicle_id\'              => $vehicleId,
    \'car_code\'                => $carCode,
    \'pickup_datetime\'         => $pickupDateTime,
    \'dropoff_datetime\'        => $dropoffDateTime,
    \'pickup_location\'         => $pickupLocation,
    \'dropoff_location\'        => $dropoffLocation,
    \'days\'                    => $days,
    \'rental_amount\'           => $baseRental,
    \'security_deposit\'        => $securityDeposit,
    \'extras_total\'            => $extrasTotal,
    \'grand_total\'             => $grandTotal,
    \'extras\'                  => $selectedExtras,
    \'discount_raw\'            => $discountAppliesToThisVehicle ? $discountRaw : \'\',
    \'discount_percent\'        => $discountAppliesToThisVehicle ? $discountPercent : 0,
    \'original_rental_amount\'  => $baseRentalOriginal
];

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
                FROM car_rental
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
            $duration = (int)($r[\'duration\'] ?? 0);
            $rate     = (float)($r[\'rate\'] ?? 0);

            if ($duration > 0) {
                $rates[$duration] = $rate;
            }
        }

        if (!$rates) return \'\';

        ksort($rates);

        $maxDuration = max(array_keys($rates));
        $lastRate    = (float)$rates[$maxDuration];
        $total       = 0.0;

        for ($d = 1; $d <= $days; $d++) {
            if (isset($rates[$d])) {
                $total += (float)$rates[$d];
            } elseif ($d > $maxDuration) {
                $total += $lastRate;
            } else {
                return \'\';
            }
        }

        return (float)number_format($total, 2, \'.\', \'\');
    }
}

$baseRentalOriginal = step3CalculatePrice($modx, $row[\'car_code\'], $pickupDate, $dropoffDate);
$baseRentalOriginal = $baseRentalOriginal !== \'\' ? (float)$baseRentalOriginal : 0;

$baseRental = $baseRentalOriginal;

$vehicleCategory = trim((string)($row[\'car_category\'] ?? \'\'));

$discountAppliesToThisVehicle = (
    $discountPercent > 0 &&
    $baseRentalOriginal > 0 &&
    $offerCategory !== \'\' &&
    strcasecmp($vehicleCategory, $offerCategory) === 0
);

if ($discountAppliesToThisVehicle) {
    $baseRental = $baseRentalOriginal - (($baseRentalOriginal * $discountPercent) / 100);
}

$coveragePackages = [];

/* load coverage packages from DB */
$coverageStmt = $modx->prepare("
    SELECT id, title, description, percentage, features
    FROM coverage_packages
    ORDER BY id ASC
");

if ($coverageStmt && $coverageStmt->execute()) {
    $dbPackages = $coverageStmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($dbPackages as $index => $pkg) {
        $percentage = isset($pkg[\'percentage\']) && $pkg[\'percentage\'] !== null
            ? (float)$pkg[\'percentage\']
            : null;

        $periodTotal = 0;
        $pricePerDay = 0;

        if ($percentage !== null && $percentage > 0 && $baseRental > 0) {
            $periodTotal = ($baseRental * $percentage) / 100;
            $pricePerDay = $days > 0 ? ($periodTotal / $days) : 0;
        }

        $features = [];
        if (!empty($pkg[\'features\'])) {
            $decodedFeatures = json_decode($pkg[\'features\'], true);
            if (is_array($decodedFeatures)) {
                $features = $decodedFeatures;
            }
        }

        $title = trim((string)($pkg[\'title\'] ?? \'Coverage\'));
        $theme = strtolower(preg_replace(\'/[^a-z0-9]+/\', \'-\', $title));
        $button = \'Choose \' . $title;
        $cardType = \'normal\';

        if (stripos($title, \'premium plus\') !== false) {
            $button = \'Book with \' . $title;
            $theme = \'full\';
        } elseif (stripos($title, \'premium\') !== false) {
            $theme = \'premium\';
        } elseif (stripos($title, \'plus\') !== false) {
            $theme = \'standard\';
        } elseif ($index === 0) {
            $theme = \'risk\';
            $button = "No, I\'ll take the risk";
            $cardType = \'risk\';
            $title = \'Without Full Coverage\';

            $pkg[\'description\'] = "If there’s damage or theft, the rental company will charge you for the items not covered.";
        }

        $coveragePackages[] = [
            \'id\' => \'db_\' . (int)$pkg[\'id\'],
            \'db_id\' => (int)$pkg[\'id\'],
            \'title\' => $title,
            \'subtitle\' => $pkg[\'description\'] ?? \'\',
            \'price_per_day\' => $pricePerDay,
            \'period_total\' => $periodTotal,
            \'button\' => $button,
            \'theme\' => $theme,
            \'type\' => $cardType,
            \'items\' => $features
        ];
    }
}

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
        $out .= \'              <strong>€ \' . number_format($extraTotal, 2, \'.\', \'\') . \'</strong>\';
        $out .= \'            </li>\';
    }
    $out .= \'          </ul>\';
    $out .= \'        </div>\';
}

$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="coverageHeroSummary__amount">\';
$out .= \'      <span>Base rental</span>\';

if ($discountAppliesToThisVehicle && $baseRentalOriginal > 0) {
    $out .= \'      <strong>\';
    $out .= \'        <span style="display:block; text-decoration:line-through; color:#999; font-size:14px;">€ \' . number_format($baseRentalOriginal, 2, \'.\', \'\') . \'</span>\';
    $out .= \'        <span style="display:block; color:#d62828; font-size:22px; font-weight:700;">€ \' . number_format($baseRental, 2, \'.\', \'\') . \'</span>\';
    $out .= \'      </strong>\';
    $out .= \'      <span class="coverageHeroSummary__amountSub">\' . htmlspecialchars($discountRaw, ENT_QUOTES, \'UTF-8\') . \' applied</span>\';
} else {
    $out .= \'      <strong>€ \' . number_format($baseRentalOriginal, 2, \'.\', \'\') . \'</strong>\';
}

if ($extrasTotal > 0) {
    $out .= \'      <span class="coverageHeroSummary__amountSub">Extras: € \' . number_format($extrasTotal, 2, \'.\', \'\') . \'</span>\';
}


$out .= \'    </div>\';
$out .= \'  </div>\';

$out .= \'  <div class="coverageGrid">\';

foreach ($coveragePackages as $pkg) {
    $themeClass = \'coverageCard--\' . $pkg[\'theme\'];
    $pricePerDay = (float)($pkg[\'price_per_day\'] ?? 0);
    $periodTotal = (float)($pkg[\'period_total\'] ?? 0);

    $step4Action = html_entity_decode($modx->makeUrl(44), ENT_QUOTES, \'UTF-8\');

    $out .= \'<div class="coverageCard \' . $themeClass . \'">\';

    $out .= \'  <div class="coverageCard__top">\';
    $out .= \'    <div class="coverageCard__intro">\';
    $out .= \'      <h3 class="coverageCard__title">\' . htmlspecialchars($pkg[\'title\']) . \'</h3>\';

    if (($pkg[\'type\'] ?? \'\') === \'risk\') {
        $riskDesc = trim((string)($pkg[\'subtitle\'] ?? \'\'));
        if ($riskDesc === \'\') {
            $riskDesc = "If there’s damage or theft, the rental company will charge you for the items not covered.";
        }

        $riskDescHtml = htmlspecialchars($riskDesc, ENT_QUOTES, \'UTF-8\');
        $riskDescHtml = str_replace(
            \'will charge you\',
            \'<span class="coverageCard__descHighlight">will charge you</span>\',
            $riskDescHtml
        );

        $out .= \'      <p class="coverageCard__desc coverageCard__desc--risk">\' . $riskDescHtml . \'</p>\';
    } else {
        $out .= \'      <p class="coverageCard__desc">\' . htmlspecialchars($pkg[\'subtitle\']) . \'</p>\';
    }

    $out .= \'    </div>\';
    $out .= \'    <div class="coverageCard__imageWrap">\';

    if (($pkg[\'type\'] ?? \'\') === \'risk\') {
        $out .= \'      <span class="coverageCard__warningBadge">!</span>\';
    }

    $out .= \'      <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="coverageCard__image">\';
    $out .= \'    </div>\';
    $out .= \'  </div>\';

    $out .= \'  <div class="coverageCard__priceBox">\';

    if (($pkg[\'type\'] ?? \'\') === \'risk\') {
        $out .= \'    <div class="coverageCard__price coverageCard__price--risk">\';
        $out .= \'      <strong>Included</strong>\';
        $out .= \'      <span>Basic protection included in your booking</span>\';
        $out .= \'    </div>\';
    } elseif ($pricePerDay > 0) {
        $out .= \'    <div class="coverageCard__price">\';
        $out .= \'      <strong>€ \' . number_format($pricePerDay, 2, \'.\', \'\') . \'/day</strong>\';
        $out .= \'      <span>€ \' . number_format($periodTotal, 2, \'.\', \'\') . \' for rental period</span>\';
        $out .= \'    </div>\';
    } else {
        $out .= \'    <div class="coverageCard__price">\';
        $out .= \'      <strong>Included</strong>\';
        $out .= \'      <span>Basic protection included in your booking</span>\';
        $out .= \'    </div>\';
    }

$out .= \'    <form action="\' . htmlspecialchars($step4Action, ENT_QUOTES, \'UTF-8\') . \'" method="post" class="coverageCard__form">\';
$out .= \'      <input type="hidden" name="coverage_id" value="\' . htmlspecialchars($pkg[\'id\'], ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'      <input type="hidden" name="coverage_db_id" value="\' . (isset($pkg[\'db_id\']) ? (int)$pkg[\'db_id\'] : 0) . \'">\';
$out .= \'      <input type="hidden" name="coverage_name" value="\' . htmlspecialchars($pkg[\'title\'], ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'      <input type="hidden" name="coverage_day_price" value="\' . number_format($pricePerDay, 2, \'.\', \'\') . \'">\';
$out .= \'      <input type="hidden" name="coverage_total" value="\' . number_format($periodTotal, 2, \'.\', \'\') . \'">\';
$out .= \'      <button type="submit" class="coverageCard__btn">\' . htmlspecialchars($pkg[\'button\']) . \'</button>\';
$out .= \'    </form>\';
    $out .= \'  </div>\';

    $out .= \'  <div class="coverageCard__features">\';
    $out .= \'    <h4>\' . (($pkg[\'type\'] ?? \'\') === \'risk\' ? \'Not covered\' : \'What\\\'s covered?\') . \'</h4>\';

    $out .= \'    <ul class="\' . (($pkg[\'type\'] ?? \'\') === \'risk\' ? \'coverageCard__list coverageCard__list--risk\' : \'coverageCard__list\') . \'">\';
    foreach ($pkg[\'items\'] as $item) {
        $out .= \'<li>\' . htmlspecialchars($item) . \'</li>\';
    }
    $out .= \'    </ul>\';
    $out .= \'  </div>\';

    if ($pkg[\'theme\'] === \'full\') {
        $out .= \'  <div class="coverageCard__footer coverageCard__footer--success">\';
        $out .= \'    Cancel anytime before pick-up!\';
        $out .= \'  </div>\';
    } elseif (($pkg[\'type\'] ?? \'\') === \'risk\') {
        $out .= \'  <div class="coverageCard__footer coverageCard__footer--warning">\';
        $out .= \'    Don\\\'t overpay at the desk. Our coverage is often 3x cheaper.\';
        $out .= \'  </div>\';
    }

    $out .= \'</div>\';
}

$out .= \'  </div>\';
$out .= \'</div>\';

return $out;
return;
';