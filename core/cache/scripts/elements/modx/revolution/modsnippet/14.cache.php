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
ORDER BY sort_order ASC, id DESC
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
<?php
    $promoCount = count($promo50);

    switch ($promoCount) {
        case 1:
            $promoCol = \'col-lg-8 col-md-10 col-12\';
            break;
        case 2:
            $promoCol = \'col-lg-6 col-md-6 col-12\';
            break;
        case 3:
            $promoCol = \'col-lg-4 col-md-6 col-12\';
            break;
        default:
            $promoCol = \'col-lg-4 col-md-6 col-12\';
            break;
    }
?>
<section class="offer-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="priority-badge">Special Offers</h2>
                <p class="fleet-heading mt-0">Grab the best deals for your ride</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php foreach ($promo50 as $p): ?>
                <?php
                $ctaLink = trim($p[\'cta_link\'] ?? \'\');

                if ($ctaLink === \'\') {
                    $ctaLink = \'index.php?id=39\';
                }

                if (preg_match(\'/\\[\\[\\~(\\d+)\\]\\]/\', $ctaLink, $matches)) {
                    $pageId = (int)$matches[1];
                    $ctaLink = $modx->getOption(\'site_url\') . \'index.php?id=\' . $pageId;
                } elseif (preg_match(\'~(?:^|/)(\\d+)$~\', rtrim($ctaLink, \'/\'), $matches)) {
                    $pageId = (int)$matches[1];
                    $ctaLink = $modx->getOption(\'site_url\') . \'index.php?id=\' . $pageId;
                } elseif (strpos($ctaLink, \'index.php?id=\') !== false) {
                    // leave as is
                }

                $offerLink = rtrim($ctaLink, \'?&\')
                    . (strpos($ctaLink, \'?\') !== false ? \'&\' : \'?\')
                    . \'discount=\' . rawurlencode($p[\'discount_text\'] ?? \'\')
                    . \'&car_category=\' . rawurlencode($p[\'car_category\'] ?? \'\');

                $startDate = !empty($p[\'offer_start_date\']) ? date(\'d M Y\', strtotime($p[\'offer_start_date\'])) : \'\';
                $endDate   = !empty($p[\'offer_end_date\']) ? date(\'d M Y\', strtotime($p[\'offer_end_date\'])) : \'\';
                $dateRange = ($startDate && $endDate) ? $startDate . \' - \' . $endDate : \'\';
                ?>
                
                <div class="<?= $promoCol ?> mb-4">
                    <article class="offer-card-modern">
                        <div class="offer-card-modern__content">
                            <?php if (!empty($p[\'discount_text\'])): ?>
                                <div class="offer-card-modern__badge">
                                    <?= htmlspecialchars($p[\'discount_text\'], ENT_QUOTES, \'UTF-8\') ?>
                                </div>
                            <?php endif; ?>

                            <h3 class="offer-card-modern__title">
                                <?= htmlspecialchars($p[\'title\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>
                            </h3>

                            <div class="offer-card-modern__meta">
                                <?php if (!empty($p[\'car_category\'])): ?>
                                    <span class="offer-chip">
                                        <?= htmlspecialchars($p[\'car_category\'], ENT_QUOTES, \'UTF-8\') ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ($dateRange !== \'\'): ?>
                                    <span class="offer-chip offer-chip--light">
                                        Valid : <?= htmlspecialchars($dateRange, ENT_QUOTES, \'UTF-8\') ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <form action="<?= htmlspecialchars($offerLink, ENT_QUOTES, \'UTF-8\') ?>" method="post" class="offer-card-modern__form">
                                <input type="hidden" name="pickup_location" value="<?= htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="dropoff_location" value="<?= htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="pickup_datetime" value="<?= htmlspecialchars($pickupDatetime, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="dropoff_datetime" value="<?= htmlspecialchars($dropoffDatetime, ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="discount" value="<?= htmlspecialchars($p[\'discount_text\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
                                <input type="hidden" name="car_category" value="<?= htmlspecialchars($p[\'car_category\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
<input type="hidden" name="search_source" value="offer">
<input type="hidden" name="offer_start_date" value="<?= htmlspecialchars($p[\'offer_start_date\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
<input type="hidden" name="offer_end_date" value="<?= htmlspecialchars($p[\'offer_end_date\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>">
                                <button type="submit" class="offer-card-modern__btn">
                                    <?= htmlspecialchars($p[\'cta_text\'] ?? \'Shop Now\', ENT_QUOTES, \'UTF-8\') ?>
                                </button>
                            </form>
                        </div>

                        <div class="offer-card-modern__image-wrap">
                            <?php if (!empty($p[\'image_path\'])): ?>
                                <img
                                    class="offer-card-modern__image"
                                    src="<?= htmlspecialchars($p[\'image_path\'], ENT_QUOTES, \'UTF-8\') ?>"
                                    alt="<?= htmlspecialchars($p[\'title\'] ?? \'\', ENT_QUOTES, \'UTF-8\') ?>"
                                >
                            <?php endif; ?>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif;
return;
';