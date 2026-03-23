<?php
$title = "O mně — Jiří Bláha | IT specialista Plzeň, 20+ let zkušeností";
$desc  = "Jiří Bláha — zkušený IT specialista a vývojář softwaru v Plzni. 20+ let praxe, osobní přístup, férové ceny. Opravy počítačů, správa serverů, vývoj software a webů.";
$canonical = "https://kidosoft.cz/o-mne.php";
$page = "omne";
$breadcrumb = '{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Domů","item":"https://kidosoft.cz/"},{"@type":"ListItem","position":2,"name":"O mně","item":"https://kidosoft.cz/o-mne.php"}]}';
include "header.php";
?>

<div style="padding-top:68px"></div>
<section style="padding:60px 0 40px;text-align:center;position:relative;overflow:hidden">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 50% 0%,rgba(13,148,136,.1),transparent 70%)"></div>
  <div class="container" style="position:relative;z-index:1">
    <span class="badge">O mně</span>
    <h1 class="section-title" style="margin-top:14px">Jiří Bláha</h1>
    <p class="section-sub">IT specialista, vývojář softwaru, správce serverů. Plzeň a okolí.</p>
  </div>
</section>

<section style="padding:48px 0 100px">
  <div class="container">
    <div class="about-grid">
      <div class="about-visual">
        <div class="about-card-main">
          <h3>👋 Dobrý den</h3>
          <p>Jmenuji se Jiří Bláha a v IT pracuji více než 20 let. Opravuji počítače, spravuji firemní IT a vyvíjím software. Zakládám si na osobním přístupu, rychlé komunikaci a férovém jednání.</p>

        </div>
      </div>

      <div class="about-text">
        <h2>Kdo jsem a co dělám</h2>
        <p>Jsem živnostník zaměřený na IT servis, správu serverů a vývoj softwaru. Pracuji jak pro domácnosti, tak pro firmy v Plzni a okolí.</p>
        <p>Vedle IT servisu vyvíjím vlastní software — nejznámější je <strong>FinSuite</strong>, fakturační aplikace pro Windows určená pro české živnostníky a malé firmy.</p>
        <ul class="about-list">
          <li>IT servis a opravy počítačů na místě</li>
          <li>Správa Windows Server, Active Directory, VPN</li>
          <li>Vývoj webů a desktopových aplikací (Python, PHP)</li>
          <li>Provoz účetního cloudu pro účetní kanceláře</li>
          <li>Instalace účetních systémů Pohoda, Money S3</li>
        </ul>
        <div style="display:flex;gap:12px;flex-wrap:wrap">
          <a href="/kontakt.php" class="btn btn-primary">Kontaktovat</a>
          <a href="/finsuite.php" class="btn btn-outline">FinSuite</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container">
    <h2 class="cta-title">Potřebujete pomoct s IT?</h2>
    <p class="cta-desc">Zavolejte nebo napište — odpovím rychle.</p>
    <div class="cta-actions">
      <a href="tel:+420605840362" class="btn btn-white btn-lg">📞 605 840 362</a>
      <a href="/kontakt.php" class="btn btn-lg" style="color:rgba(255,255,255,.85);border:2px solid rgba(255,255,255,.3)">Napsat zprávu</a>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
