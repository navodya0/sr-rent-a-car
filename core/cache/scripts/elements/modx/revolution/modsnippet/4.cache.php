<?php  return 'require "assets/includes/db_connect.php";


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
  if ($o[\'layout\'] === \'promo50\') $promo50[] = $o;
  if ($o[\'layout\'] === \'mini\') $mini[] = $o;
  if ($o[\'layout\'] === \'featured\') $featured[] = $o;
}

$featuredOne = $featured[0] ?? null;
?>

<!-- ================= PROMO50 (2 banners) ================= -->
<?php if (!empty($promo50)): ?>

<section class="promo50-section">
  <div class="container">
    <div class="promo50-grid">

      <?php foreach ($promo50 as $p): ?>
        <article class="promo50-card">
          <img class="promo50-bg" src="<?= htmlspecialchars($p[\'image_path\']) ?>" alt="<?= htmlspecialchars($p[\'title\']) ?>">

          <div class="promo50-overlay">
            <div class="promo50-content">
              <div class="promo50-title">
                <?= nl2br(htmlspecialchars(str_replace(\' \', "\\n", $p[\'discount_text\'] ?? \'\'))) ?>
              </div>
              <div class="promo50-sub"><?= htmlspecialchars($p[\'subtitle\'] ?? \'\') ?></div>
              <a href="<?= htmlspecialchars($p[\'cta_link\'] ?? \'#\') ?>" class="promo50-btn">
                <?= htmlspecialchars($p[\'cta_text\'] ?? \'Book Now\') ?>
              </a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php endif; ?>

<!-- ================= MINI OFFERS (4 cards) ================= -->
<?php if (!empty($mini)): ?>

<section class="offers-grid-section">
  <div class="container">
    <div class="offers-grid-2">

      <?php foreach ($mini as $m): ?>
        <div class="offer-mini-card">
          <div class="offer-mini-top">
            <span class="offer-tag <?= htmlspecialchars($m[\'badge_color\'] ?? \'\') ?>">
              <?= htmlspecialchars($m[\'badge_text\'] ?? \'\') ?>
            </span>
          </div>

          <h4><?= htmlspecialchars($m[\'title\']) ?></h4>
          <p><?= htmlspecialchars($m[\'description\']) ?></p>

          <a href="<?= htmlspecialchars($m[\'cta_link\'] ?? \'#\') ?>" class="offer-mini-btn">
            <?= htmlspecialchars($m[\'cta_text\'] ?? \'View Details\') ?>
          </a>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<?php endif; ?>

<!-- ================= FEATURED OFFER (1) ================= -->
<?php if ($featuredOne): ?>

<section class="featured-offer-section pt-0">
  <div class="container">
    <div class="featured-offer-box"
         style="background:url(\'<?= htmlspecialchars($featuredOne[\'image_path\']) ?>\') center/cover no-repeat;">

      <div class="featured-overlay"></div>

      <div class="featured-left">
        <span class="featured-badge">
          <?= htmlspecialchars($featuredOne[\'badge_text\'] ?? \'EXCLUSIVE OFFER\') ?>
        </span>

        <h2><?= htmlspecialchars($featuredOne[\'title\']) ?></h2>
        <p><?= htmlspecialchars($featuredOne[\'subtitle\'] ?? \'\') ?></p>
      </div>

      <div class="featured-right">
        <div class="featured-price">
          <span><?= htmlspecialchars(explode(\' \', $featuredOne[\'discount_text\'])[0] ?? \'Save\') ?></span>
          <strong><?= htmlspecialchars(preg_replace(\'/[^0-9%]/\', \'\', $featuredOne[\'discount_text\'] ?? \'\')) ?></strong>
        </div>

        <a href="<?= htmlspecialchars($featuredOne[\'cta_link\'] ?? \'#\') ?>" class="featured-btn">
          <?= htmlspecialchars($featuredOne[\'cta_text\'] ?? \'Reserve Now →\') ?>
        </a>
      </div>

    </div>
  </div>
</section>

<?php endif;
return;
';