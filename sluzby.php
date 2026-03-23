<?php
$title = "IT služby Plzeň — Opravy počítačů, správa serverů, vývoj webu | KidoSoft";
$desc  = "Kompletní IT služby v Plzni: opravy počítačů a notebooků, správa Windows Server, Active Directory, VPN, zálohy, tvorba webů a vývoj softwaru. KidoSoft — Jiří Bláha, 20+ let praxe.";
$canonical = "https://kidosoft.cz/sluzby.php";
$page = "sluzby";
$breadcrumb = '{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Domů","item":"https://kidosoft.cz/"},{"@type":"ListItem","position":2,"name":"Služby","item":"https://kidosoft.cz/sluzby.php"}]}';
include "header.php";
?>

<div style="padding-top:68px"></div>
<section style="padding:60px 0 40px; text-align:center; position:relative; overflow:hidden;">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 50% 0%,rgba(13,148,136,.1),transparent 70%)"></div>
  <div class="container" style="position:relative;z-index:1">
    <span class="badge">Služby</span>
    <h1 class="section-title" style="margin-top:14px">Kompletní IT služby v Plzni</h1>
    <p class="section-sub">Od opravy domácího počítače po správu firemního serveru.</p>
  </div>
</section>

<!-- Domácnosti -->
<section class="section" id="domacnosti">
  <div class="container">
    <div class="section-header">
      <span class="badge">Pro domácnosti</span>
      <h2 class="section-title">IT servis pro domácnosti</h2>
      <p class="section-sub">Přijedu přímo k vám domů do Plzně a okolí. Bez příplatků za cestu.</p>
    </div>
    <div class="services-grid">
      <div class="service-card"><div class="service-icon">🖥️</div><h3 class="service-title">Opravy počítačů</h3><p class="service-desc">Diagnostika, výměna komponent, čištění, zrychlení systému a řešení poruch.</p></div>
      <div class="service-card"><div class="service-icon">💻</div><h3 class="service-title">Opravy notebooků</h3><p class="service-desc">Výměna displeje, klávesnice, baterie, čištění chlazení.</p></div>
      <div class="service-card"><div class="service-icon">⚙️</div><h3 class="service-title">Instalace Windows</h3><p class="service-desc">Čistá instalace, ovladače, programy, antivirus, optimalizace.</p></div>
      <div class="service-card"><div class="service-icon">📡</div><h3 class="service-title">Sítě a Wi-Fi</h3><p class="service-desc">Nastavení domácí sítě, routeru, Wi-Fi, zabezpečení.</p></div>
      <div class="service-card"><div class="service-icon">💾</div><h3 class="service-title">Záchrana dat</h3><p class="service-desc">Obnova smazaných nebo poškozených dat z disků a karet.</p></div>
      <div class="service-card"><div class="service-icon">🖨️</div><h3 class="service-title">Tiskárny a periférie</h3><p class="service-desc">Instalace a nastavení tiskáren, skenerů a dalšího příslušenství.</p></div>
    </div>
  </div>
</section>

<!-- Firmy -->
<section class="section section-alt" id="firmy">
  <div class="container">
    <div class="section-header">
      <span class="badge">Pro firmy</span>
      <h2 class="section-title">IT služby pro firmy</h2>
      <p class="section-sub">Dlouhodobá spolupráce, monitoring a rychlé zásahy pro malé a střední firmy.</p>
    </div>
    <div class="services-grid">
      <div class="service-card"><div class="service-icon">🖥️</div><h3 class="service-title">Správa počítačů</h3><p class="service-desc">Instalace, aktualizace, antivirová ochrana a monitoring firemních počítačů.</p></div>
      <div class="service-card"><div class="service-icon">🔒</div><h3 class="service-title">Zabezpečení</h3><p class="service-desc">Firewall, VPN, šifrování, zálohování a ochrana firemních dat.</p></div>
      <div class="service-card"><div class="service-icon">📧</div><h3 class="service-title">Firemní email</h3><p class="service-desc">Nastavení firemní emailové schránky, Office 365, Exchange.</p></div>
      <div class="service-card"><div class="service-icon">💡</div><h3 class="service-title">IT poradenství</h3><p class="service-desc">Pomoc s výběrem hardware a software, plánování IT infrastruktury.</p></div>
      <div class="service-card"><div class="service-icon">🚀</div><h3 class="service-title">Rychlé zásahy</h3><p class="service-desc">Vzdálená podpora nebo výjezd do firmy v co nejkratším čase.</p></div>
      <div class="service-card"><div class="service-icon">📊</div><h3 class="service-title">Účetní systémy</h3><p class="service-desc">Instalace a správa Pohody, Money S3 a dalších účetních systémů.</p></div>
    </div>
  </div>
</section>

<!-- Servery -->
<section class="section" id="servery">
  <div class="container">
    <div class="about-grid">
      <div>
        <span class="badge">Servery</span>
        <h2 style="font-family:var(--fh);font-size:clamp(26px,3vw,36px);font-weight:700;line-height:1.2;margin:14px 0 16px">Windows Server a správa infrastruktury</h2>
        <p style="font-size:15px;color:var(--muted);line-height:1.75;margin-bottom:16px">Instaluji a spravuji Windows Server 2019/2022. Active Directory, uživatelské účty, Group Policy, RDP přístup a vzdálená správa.</p>
        <ul class="about-list">
          <li>Windows Server 2016/2019/2022 Datacenter</li>
          <li>Active Directory, RDP, uživatelské účty</li>
          <li>Firemní sítě, VPN, routery, Wi-Fi</li>
          <li>Zálohování, RAID, NAS</li>
          <li>Monitoring a zabezpečení</li>
          <li>Instalace účetních systémů (Pohoda, Money S3)</li>
        </ul>
        <a href="/kontakt.php" class="btn btn-primary" style="margin-top:8px">Konzultace zdarma</a>
      </div>
      <div>
        <div class="about-card-main">
          <h3>☁️ Účetní cloud</h3>
          <p>Pro účetní kanceláře provozuji bezpečný účetní cloud s přístupem přes zabezpečené RDP. Vaše účetní programy běží na vlastním serveru s denními zálohami.</p>
          <p style="margin-top:16px;font-size:13px;opacity:.8">Pohoda, Money S3, Premier · Oddělené uživatelské účty · Od 1 800 Kč/měs.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Vývoj -->
<section class="section section-alt" id="vyvoj">
  <div class="container">
    <div class="section-header">
      <span class="badge">Vývoj</span>
      <h2 class="section-title">Vývoj webů a software</h2>
      <p class="section-sub">Moderní weby a aplikace na míru. Od jednoduché prezentace po firemní software.</p>
    </div>
    <div class="services-grid">
      <div class="service-card"><div class="service-icon">🌐</div><h3 class="service-title">Webové stránky</h3><p class="service-desc">Moderní weby v PHP, HTML/CSS/JS. Rychlé, mobilní, SEO optimalizované.</p></div>
      <div class="service-card"><div class="service-icon">🐍</div><h3 class="service-title">Python aplikace</h3><p class="service-desc">Desktopové aplikace, automatizace procesů, skripty a integrace API.</p></div>
      <div class="service-card"><div class="service-icon">📊</div><h3 class="service-title">FinSuite</h3><p class="service-desc">Vlastní fakturační software pro Windows. Jednorázová platba, bez předplatného.</p></div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="cta-title">Připraveni začít?</h2>
    <p class="cta-desc">Zavolejte nebo napište — odpovím rychle a bez závazků.</p>
    <div class="cta-actions">
      <a href="tel:+420605840362" class="btn btn-white btn-lg">📞 605 840 362</a>
      <a href="/kontakt.php" class="btn btn-lg" style="color:rgba(255,255,255,.85);border:2px solid rgba(255,255,255,.3)">Napsat zprávu</a>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
