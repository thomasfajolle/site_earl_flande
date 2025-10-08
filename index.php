<?php
$pageTitle = 'Accueil - EARL FLANDE';
include __DIR__.'/includes/header.php';

// Petite fonction utilitaire pour lister les images de la galerie
function earl_gallery_images(string $dir): array {
  $abs = __DIR__ . '/' . $dir;
  if (!is_dir($abs)) return [];
  $files = scandir($abs);
  $out = [];
  foreach ($files as $f) {
    if ($f === '.' || $f === '..') continue;
    $ext = strtolower(pathinfo($f, PATHINFO_EXTENSION));
    if (in_array($ext, ['jpg','jpeg','png','webp'])) {
      $out[] = $dir . '/' . $f;
    }
  }
  // Tri par nom pour stabilité
  sort($out, SORT_NATURAL | SORT_FLAG_CASE);
  return $out;
}

$galleryDir = 'assets/img/galerie';
$images = earl_gallery_images($galleryDir);
?>

<section class="hero">
  <div>
    <h1>EARL FLANDE</h1>
    <p class="muted">
      Exploitation agricole familiale. Vente directe à la ferme de produits frais et de saison.
      Accès privé via QR code.
    </p>
    <div style="margin-top:12px;display:flex;gap:8px;flex-wrap:wrap">
      <a class="cta" href="/produits.php">Voir produits & horaires</a>
      <a class="cta" style="background:var(--brand-2);color:#11310f" href="/cultures.php">Découvrir nos cultures</a>
    </div>
  </div>
  <div class="card">
    <h2 style="margin-top:0">Infos pratiques</h2>
    <ul style="margin:8px 0 0 18px">
      <li>Produits: framboises et asperges</li>
      <li>Vente directe sur place (voir horaires)</li>
      <li>Merci de conserver ce lien/QR code en privé</li>
    </ul>
  </div>
  
</section>

<section class="section">
  <h2>Galerie</h2>
  <p class="muted">Aperçu de la ferme et de nos produits. Les images sont chargées progressivement pour plus de rapidité.</p>
  <div class="gallery" aria-label="Galerie photos de la ferme">
    <?php if (count($images) === 0): ?>
      <div class="card">
        <p>Aucune image pour le moment. Ajoutez vos photos dans <code><?= htmlspecialchars($galleryDir) ?></code>.</p>
      </div>
    <?php else: ?>
      <?php foreach ($images as $img): 
        $name = pathinfo($img, PATHINFO_FILENAME);
      ?>
        <figure>
          <img loading="lazy" src="/<?= htmlspecialchars($img) ?>" alt="Photo: <?= htmlspecialchars($name) ?>" />
          <figcaption><?= htmlspecialchars(str_replace('-', ' ', $name)) ?></figcaption>
        </figure>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

<?php include __DIR__.'/includes/footer.php'; ?>
