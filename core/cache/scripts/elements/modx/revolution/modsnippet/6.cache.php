<?php  return 'require "assets/includes/db_connect.php";

$tpl        = $modx->getOption(\'tpl\', $scriptProperties, \'VehicleCategoryCardTpl\');
$tplItem    = $modx->getOption(\'tplItem\', $scriptProperties, \'VehicleListItemTpl\'); // NEW for list rows
$limit      = (int)$modx->getOption(\'limit\', $scriptProperties, 20);
$table      = $modx->getOption(\'table\', $scriptProperties, \'vehicles\');
$groupBy    = (int)$modx->getOption(\'groupByCategory\', $scriptProperties, 1);
$priceCol   = $modx->getOption(\'priceCol\', $scriptProperties, \'\'); // \'\' disables
$mode       = $modx->getOption(\'mode\', $scriptProperties, \'cards\'); // cards | list

$select = "id, image, car_category, pax_count, luggage_count";
$select .= ($priceCol !== \'\') ? ", {$priceCol} AS price" : ", \'\' AS price";

$currentCat = isset($_GET[\'cat\']) ? trim((string)$_GET[\'cat\']) : \'\';

/**
 * MODE 1: cards (scroller) - first vehicle per category
 */
if ($mode === \'cards\') {

  if ($groupBy) {
    $sql = "SELECT v1.*
            FROM {$table} v1
            INNER JOIN (
              SELECT car_category, MIN(id) AS first_id
              FROM {$table}
              GROUP BY car_category
            ) v2 ON v1.id = v2.first_id
            ORDER BY v1.car_category ASC
            LIMIT :limit";
  } else {
    $sql = "SELECT {$select}
            FROM {$table}
            ORDER BY id DESC
            LIMIT :limit";
  }

  $stmt = $modx->prepare($sql);
  if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';

  $stmt->bindValue(\':limit\', $limit, PDO::PARAM_INT);
  if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (!$rows) return \'<p>No vehicles found.</p>\';

  $uid = \'vehRow_\' . substr(md5(uniqid(\'\', true)), 0, 8);

  $out  = \'<div class="vehicleScroller" data-scroller="\'.$uid.\'">\';
  $out .= \'  <button class="vehicleScroller__btn vehicleScroller__btn--left" type="button" aria-label="Scroll left" data-dir="-1">‹</button>\';
  $out .= \'  <div class="vehicleRow mt-4 mt-lg-0" id="\'.$uid.\'">\';

  foreach ($rows as $row) {
    $cat = (string)($row[\'car_category\'] ?? \'\');

    $params = $_GET;
    $params[\'cat\'] = $cat;
    $link = $modx->makeUrl((int)$modx->resource->get(\'id\'), \'\', $params, \'full\');

    $ph = [
      \'image\'         => $row[\'image\'] ?? \'\',
      \'car_category\'  => $cat,
      \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
      \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
      \'price\'         => ($row[\'price\'] ?? \'\'),
      \'cat_link\'      => $link,
      \'is_active\'     => ($currentCat !== \'\' && strcasecmp($currentCat, $cat) === 0) ? 1 : 0,
    ];

    $out .= $modx->getChunk($tpl, $ph);
  }

  $out .= \'  </div>\';
  $out .= \'  <button class="vehicleScroller__btn vehicleScroller__btn--right" type="button" aria-label="Scroll right" data-dir="1">›</button>\';
  $out .= \'</div>\';

  return $out;
}

/**
 * MODE 2: list - show ALL vehicles, grouped by category, stacked
 */
$sql = "SELECT {$select}
        FROM {$table}
        ORDER BY car_category ASC, id ASC";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';
if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!$rows) return \'<p>No vehicles found.</p>\';

$out = \'\';
$lastCat = null;

foreach ($rows as $row) {
  $cat = (string)($row[\'car_category\'] ?? \'\');

  // If user selected a category (?cat=...), only show that category in the list
  if ($currentCat !== \'\' && strcasecmp($currentCat, $cat) !== 0) {
    continue;
  }

  // category heading
  if ($lastCat === null || strcasecmp($lastCat, $cat) !== 0) {
    if ($lastCat !== null) {
      $out .= \'</div>\'; // close previous category group
    }
    $out .= \'<div class="vehicleGroup">\';
    $lastCat = $cat;
  }

  $ph = [
    \'id\'            => (int)($row[\'id\'] ?? 0),
    \'image\'         => $row[\'image\'] ?? \'\',
    \'car_category\'  => $cat,
    \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
    \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
    \'price\'         => ($row[\'price\'] ?? \'\'),
  ];

  // each vehicle one under the other (your tplItem should be a vertical row/card)
  $out .= $modx->getChunk($tplItem, $ph);
}

if ($lastCat !== null) {
  $out .= \'</div>\'; // close last group
}

return $out;
return;
';