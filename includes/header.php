<?php
// En-tête HTML commun
// Utilise $pageTitle si défini par la page, sinon valeur par défaut
$title = isset($pageTitle) ? $pageTitle : 'EARL FLANDE';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="noindex, nofollow" />
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/styles.css" />
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="/index.php" aria-label="Retour à l’accueil">
        <span class="brand-mark" aria-hidden="true">🌱</span>
        <span class="brand-text">EARL FLANDE</span>
      </a>
      <nav class="site-nav" aria-label="Navigation principale">
        <a href="/index.php">Accueil</a>
        <a href="/produits.php">Produits & horaires</a>
        <a href="/cultures.php">Cultures</a>
      </nav>
    </div>
  </header>
  <main class="site-main container">
