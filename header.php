<!DOCTYPE html>
<html lang="cs" itemscope itemtype="https://schema.org/LocalBusiness">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=yes">

  <title><?= htmlspecialchars($title ?? 'KidoSoft — IT servis, vývoj software, Plzeň') ?></title>
  <meta name="description" content="<?= htmlspecialchars($desc ?? 'IT servis, opravy počítačů, správa serverů, vývoj software a webů v Plzni. KidoSoft — Jiří Bláha, 20+ let zkušeností. Férové ceny, osobní přístup.') ?>">
  <meta name="keywords" content="IT servis Plzeň, oprava počítače Plzeň, správa serverů Plzeň, vývoj software Plzeň, webové stránky Plzeň, Windows Server Plzeň, IT podpora firmy Plzeň, KidoSoft, Jiří Bláha">
  <meta name="author" content="Jiří Bláha — KidoSoft">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="canonical" href="<?= htmlspecialchars($canonical ?? 'https://kidosoft.cz/') ?>">

  <!-- GEO metadata -->
  <meta name="geo.region" content="CZ-PL">
  <meta name="geo.placename" content="Plzeň">
  <meta name="geo.position" content="49.7384;13.3736">
  <meta name="ICBM" content="49.7384, 13.3736">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="cs_CZ">
  <meta property="og:site_name" content="KidoSoft — Jiří Bláha">
  <meta property="og:title" content="<?= htmlspecialchars($title ?? 'KidoSoft — IT servis Plzeň') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc ?? 'IT servis, opravy počítačů, správa serverů, vývoj software v Plzni.') ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical ?? 'https://kidosoft.cz/') ?>">
  <meta property="og:image" content="https://kidosoft.cz/assets/img/og-blahova.webp">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="KidoSoft — IT servis a vývoj software Plzeň">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($title ?? 'KidoSoft — IT servis Plzeň') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($desc ?? 'IT servis, opravy počítačů, správa serverů, vývoj software v Plzni.') ?>">
  <meta name="twitter:image" content="https://kidosoft.cz/assets/img/og-blahova.webp">

  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "ProfessionalService"],
    "@id": "https://kidosoft.cz/#business",
    "name": "KidoSoft — Jiří Bláha",
    "alternateName": "KidoSoft IT servis Plzeň",
    "description": "IT servis, opravy počítačů, správa serverů, vývoj software a webových stránek v Plzni. 20+ let zkušeností, osobní přístup, férové ceny.",
    "url": "https://kidosoft.cz",
    "telephone": "+420605840362",
    "email": "info@kidosoft.cz",
    "priceRange": "Individuální",
    "currenciesAccepted": "CZK",
    "openingHours": "Mo-Fr 08:00-18:00",
    "image": "https://kidosoft.cz/assets/img/og-blahova.webp",
    "logo": "https://kidosoft.cz/assets/img/logo.webp",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Plzeň",
      "addressCountry": "CZ",
      "addressRegion": "Plzeňský kraj"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 49.7384,
      "longitude": 13.3736
    },
    "areaServed": [
      {"@type": "City", "name": "Plzeň"},
      {"@type": "AdministrativeArea", "name": "Plzeňský kraj"}
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "IT služby",
      "itemListElement": [
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "IT servis a opravy počítačů"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Správa serverů a sítí"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Vývoj software a webů"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "IT podpora pro firmy"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Záchrana dat"}}
      ]
    },
    "knowsAbout": [
      "IT servis", "Opravy počítačů", "Windows Server",
      "Active Directory", "VPN", "Python", "PHP",
      "Vývoj webových stránek", "FinSuite"
    ],
    "founder": {
      "@type": "Person",
      "name": "Jiří Bláha",
      "jobTitle": "IT specialista a vývojář softwaru"
    }
  }
  </script>

  <?php if (isset($breadcrumb)): ?>
  <script type="application/ld+json"><?= $breadcrumb ?></script>
  <?php endif; ?>

  <link rel="icon" href="/assets/img/favicon.ico">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<nav class="navbar" id="navbar">
  <div class="container">
    <a href="/" class="navbar-brand">
      <div class="logo-mark">K</div>
      <span class="logo-text">Kido<span>Soft</span></span>
    </a>
    <ul class="navbar-nav">
      <li><a href="/" class="<?= ($page??'')==='home'?'active':'' ?>">Domů</a></li>
      <li><a href="/sluzby.php" class="<?= ($page??'')==='sluzby'?'active':'' ?>">Služby</a></li>
      <li><a href="/o-mne.php" class="<?= ($page??'')==='omne'?'active':'' ?>">O mně</a></li>
      <li><a href="/finsuite.php" class="<?= ($page??'')==='finsuite'?'active':'' ?>">FinSuite</a></li>
      <li><a href="/kontakt.php" class="<?= ($page??'')==='kontakt'?'active':'' ?>">Kontakt</a></li>
    </ul>
    <div class="navbar-cta">
      <a href="tel:+420605840362" class="btn btn-outline">📞 605 840 362</a>
      <a href="/kontakt.php" class="btn btn-primary">Nezávazná poptávka</a>
    </div>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<a href="tel:+420605840362" class="sticky-phone" title="Zavolat KidoSoft">📞</a>
