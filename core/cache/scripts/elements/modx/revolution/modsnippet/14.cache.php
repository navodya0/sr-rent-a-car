<?php  return 'require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$search = $_SESSION[\'rent_search\'] ?? [];

$pickupLocation  = trim($search[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($search[\'dropoff_location\'] ?? \'\');
$pickupDatetime  = trim($search[\'pickup_datetime\'] ?? \'\');
$dropoffDatetime = trim($search[\'dropoff_datetime\'] ?? \'\');

$sql = "
SELECT *
FROM offers
WHERE is_active = 1
  AND (start_date IS NULL OR start_date <= NOW())
  AND (end_date IS NULL OR end_date >= NOW())
ORDER BY layout, sort_order ASC
";
$offers = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$promo50 = [];
$mini = [];
$featured = [];

foreach ($offers as $o) {
    if ($o[\'layout\'] === \'promo50\') {
        $promo50[] = $o;
    }
    if ($o[\'layout\'] === \'mini\') {
        $mini[] = $o;
    }
    if ($o[\'layout\'] === \'featured\') {
        $featured[] = $o;
    }
}

$featuredOne = $featured[0] ?? null;
?>

<?php if (!empty($promo50)): ?>
<section class="promo50-section">
    <div class="container">
        <div class="promo50-grid">

            <?php foreach ($promo50 as $p): ?>
                <?php
                $ctaLink = trim($p[\'cta_link\'] ?? \'\');

                if ($ctaLink === \'\') {
                    $ctaLink = \'index.php?id=39\';
                }

                // Case 1: [[~39]]
                if (preg_match(\'/\\[\\[\\~(\\d+)\\]\\]/\', $ctaLink, $matches)) {
                    $pageId = (int)$matches[1];
                    $ctaLink = $modx->getOption(\'site_url\') . \'index.php?id=\' . $pageId;
                }
                // Case 2: /39 or 39 or full URL ending with /39
                elseif (preg_match(\'~(?:^|/)(\\d+)$~\', rtrim($ctaLink, \'/\'), $matches)) {
                    $pageId = (int)$matches[1];
                    $ctaLink = $modx->getOption(\'site_url\') . \'index.php?id=\' . $pageId;
                }
                // Case 3: already index.php?id=...
                elseif (strpos($ctaLink, \'index.php?id=\') !== false) {
                    // leave as is
                }

                // add discount in URL too, if needed
                $offerLink = rtrim($ctaLink, \'?&\')
                    . (strpos($ctaLink, \'?\') !== false ? \'&\' : \'?\')
                    . \'discount=\' . rawurlencode($p[\'discount_text\'] ?? \'\');
                ?>
                <article class="promo50-card">
                    <img
                        class="promo50-bg"
                        src="<?= htmlspecialchars($p[\'image_path\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>"
                        alt="<?= htmlspecialchars($p[\'title\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>"
                    >

                    <div class="promo50-overlay">
                        <div class="promo50-content">
                            <div class="promo50-title">
                                <?= nl2br(htmlspecialchars(str_replace(\' \', "\\n", $p[\'discount_text\'] ?? \'\'), ENT_QUOTES, \'UTF-8\')) ?>
                            </div>

                            <div class="promo50-sub">
                                <?= htmlspecialchars($p[\'subtitle\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>
                            </div>

                            <form action="<?= htmlspecialchars($offerLink, ENT_QUOTES, \'UTF-8\') ?>" method="post" class="promo50-form">
                                <input type="hidden" name="pickup_location" value="<?= htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="dropoff_location" value="<?= htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="pickup_datetime" value="<?= htmlspecialchars($pickupDatetime, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="dropoff_datetime" value="<?= htmlspecialchars($dropoffDatetime, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="discount" value="<?= htmlspecialchars($p[\'discount_text\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">

                                <button type="submit" class="promo50-btn">
                                    <?= htmlspecialchars($p[\'cta_text\'] ?? \'Book Now\', ENT_QUOTES, \'UTF-8\') ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php endif;
return;
';