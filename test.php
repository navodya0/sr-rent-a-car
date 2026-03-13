<?php
// Snippet: VehicleOffersList
// Shows vehicles as offer cards; filters by ?cat=...

$table = $modx->getOption('table', $scriptProperties, 'vehicles');
$tpl   = $modx->getOption('tpl', $scriptProperties, 'VehicleOfferTpl');
$limit = (int)$modx->getOption('limit', $scriptProperties, 12);

$cat = isset($_GET['cat']) ? trim((string)$_GET['cat']) : '';

$params = [];
$where = "1=1";

if ($cat !== '') {
  $where .= " AND car_category = :cat";
  $params[':cat'] = $cat;
}

$sql = "SELECT id, image, car_model, car_category, pax_count, luggage_count
        FROM {$table}
        WHERE {$where}
        ORDER BY id DESC
        LIMIT :limit";

$stmt = $modx->prepare($sql);
if (!$stmt) return '<p>Could not prepare offers query.</p>';

foreach ($params as $k => $v) $stmt->bindValue($k, $v, PDO::PARAM_STR);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);

if (!$stmt->execute()) return '<p>Could not load offers.</p>';

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!$rows) return '<p>No vehicles found for this category.</p>';

$out = '<div class="offersList">';

foreach ($rows as $row) {
  $out .= $modx->getChunk($tpl, [
    'id'            => $row['id'],
    'image'         => $row['image'],
    'car_model'  => $row['car_model'] ?? 'Vehicle',
    'car_category'  => $row['car_category'] ?? '',
    'pax_count'     => (int)($row['pax_count'] ?? 0),
    'luggage_count' => (int)($row['luggage_count'] ?? 0),
  ]);
}

$out .= '</div>';
return $out;