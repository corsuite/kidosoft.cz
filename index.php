<?php
$title = "KidoSoft — IT servis Plzeň | Opravy počítačů, správa serverů, vývoj software";
$desc  = "Hledáte spolehlivý IT servis v Plzni? KidoSoft — Jiří Bláha nabízí opravy počítačů, správu serverů, vývoj software a webů. 20+ let zkušeností, férové ceny, dojíždím k vám.";
$canonical = "https://kidosoft.cz/";
$page = "home";
include "header.php";
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="container">
    <div class="hero-grid">
      <div>
        <div class="hero-eyebrow"><span class="badge">✦ Plzeň a okolí</span></div>
        <h1 class="hero-title">IT servis a vývoj<br><span class="accent">software na míru</span></h1>
        <p class="hero-desc">Opravuji počítače, spravuji firemní IT a vyvíjím software. Více než 20 let v oboru, osobní přístup a férové ceny. Dojíždím přímo k vám.</p>
        <div class="hero-actions">
          <a href="/kontakt.php" class="btn btn-primary btn-lg">Nezávazná poptávka</a>
          <a href="/sluzby.php" class="btn btn-outline btn-lg">Naše služby</a>
        </div>
        <a href="tel:+420605840362" class="hero-phone">
          <div class="hero-phone-icon">📞</div>
          <div>
            <div class="hero-phone-label">Volejte přímo</div>
            <div class="hero-phone-num">+420 605 840 362</div>
          </div>
        </a>
      </div>
      <div class="hero-visual">
        <div class="hero-cards">
          <div class="hero-card anim">
            <div class="hero-card-icon">🖥️</div>
            <div class="hero-card-title">IT servis</div>
            <div class="hero-card-desc">Opravy počítačů, notebooků, instalace, sítě</div>
          </div>
          <div class="hero-card accent-card anim">
            <div class="hero-card-icon">⚙️</div>
            <div class="hero-card-title">Správa serverů</div>
            <div class="hero-card-desc">Windows Server, AD, VPN, zálohy</div>
          </div>
          <div class="hero-card anim">
            <div class="hero-card-icon">💻</div>
            <div class="hero-card-title">Vývoj software</div>
            <div class="hero-card-desc">Weby, aplikace, automatizace v Pythonu</div>
          </div>
          <div class="hero-card anim">
            <div class="hero-card-icon">📊</div>
            <div class="hero-card-title">FinSuite</div>
            <div class="hero-card-desc">Fakturace a správa firmy pro každého</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SLUŽBY -->
<section class="section section-alt" id="sluzby">
  <div class="container">
    <div class="section-header">
      <span class="badge">Služby</span>
      <h2 class="section-title">Co pro vás mohu udělat</h2>
      <p class="section-sub">Od opravy počítače až po vývoj firemního softwaru — vše pod jednou střechou.</p>
    </div>
    <div class="services-grid">
      <div class="service-card anim">
        <div class="service-icon">🖥️</div>
        <h3 class="service-title">Opravy počítačů a notebooků</h3>
        <p class="service-desc">Diagnostika, výměna komponent, čištění, zrychlení systému. Oprava displejů, klávesnic, baterií. Přijedu přímo k vám.</p>
      </div>
      <div class="service-card anim">
        <div class="service-icon">📡</div>
        <h3 class="service-title">Sítě a Wi-Fi</h3>
        <p class="service-desc">Nastavení domácích a firemních sítí, routerů, Wi-Fi a zabezpečení. VPN, vzdálený přístup, firewall.</p>
      </div>
      <div class="service-card anim">
        <div class="service-icon">🖥️</div>
        <h3 class="service-title">Windows Server a Active Directory</h3>
        <p class="service-desc">Instalace a správa Windows Server 2019/2022, Active Directory, RDP, uživatelské účty, Group Policy.</p>
      </div>
      <div class="service-card anim">
        <div class="service-icon">💾</div>
        <h3 class="service-title">Zálohy a záchrana dat</h3>
        <p class="service-desc">Obnova smazaných dat z disků, USB a karet. Nastavení automatických záloh, RAID, NAS.</p>
      </div>
      <div class="service-card anim">
        <div class="service-icon">🌐</div>
        <h3 class="service-title">Tvorba webů</h3>
        <p class="service-desc">Moderní webové stránky na míru. Rychlé, přehledné, mobilní. PHP, HTML/CSS/JS, WordPress.</p>
      </div>
      <div class="service-card anim">
        <div class="service-icon">🐍</div>
        <h3 class="service-title">Vývoj aplikací v Pythonu</h3>
        <p class="service-desc">Desktopové aplikace, automatizace, skripty, integrace API. Autor FinSuite — fakturační software.</p>
      </div>
    </div>
    <div style="text-align:center; margin-top:40px">
      <a href="/sluzby.php" class="btn btn-primary">Všechny služby</a>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section class="section" id="portfolio">
  <div class="container">
    <div class="section-header">
      <span class="badge">Portfolio</span>
      <h2 class="section-title">Ukázka mé práce</h2>
      <p class="section-sub">Projekty které jsem vytvořil nebo spravuji.</p>
    </div>
    <div class="portfolio-grid">
      <div class="portfolio-card anim">
        <div class="portfolio-img" style="background:linear-gradient(135deg,#134e4a,#0d9488)">📊</div>
        <div class="portfolio-body">
          <div class="portfolio-tag">Desktopová aplikace</div>
          <div class="portfolio-title">FinSuite Desktop</div>
          <p class="portfolio-desc">Fakturační software pro Windows. Python, PySide6, SQLite. Offline licence, multi-company, export Money S3.</p>
          <a href="/finsuite.php" class="portfolio-link">Více o FinSuite →</a>
        </div>
      </div>
      <div class="portfolio-card anim">
        <div class="portfolio-img" style="background:linear-gradient(135deg,#1e3a5f,#2563eb)">🌐</div>
        <div class="portfolio-body">
          <div class="portfolio-tag">Webové stránky</div>
          <div class="portfolio-title">corsuite.cz</div>
          <p class="portfolio-desc">Prezentační web pro FinSuite. Django, Python, moderní design. Objednávkový systém s emailovými notifikacemi.</p>
          <a href="https://corsuite.cz" class="portfolio-link" target="_blank">Navštívit →</a>
        </div>
      </div>
      <div class="portfolio-card anim">
        <div class="portfolio-img" style="background:linear-gradient(135deg,#1a1a2e,#16213e)">☁️</div>
        <div class="portfolio-body">
          <div class="portfolio-tag">Serverová infrastruktura</div>
          <div class="portfolio-title">Účetní cloud</div>
          <p class="portfolio-desc">Windows Server 2022 Datacenter s RDP přístupem pro účetní kanceláře. Pohoda, Money S3, denní zálohy.</p>
          <a href="/sluzby.php#cloud" class="portfolio-link">Více o cloudu →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- O MNĚ zkratka -->
<section class="section section-alt">
  <div class="container">
    <div class="about-grid">
      <div class="about-visual">
        <div class="about-card-main">
          <h3>Jiří Bláha</h3>
          <p>V IT pracuji více než 20 let. Opravuji počítače, spravuji firemní IT a vyvíjím software. Zakládám si na osobním přístupu a férové komunikaci.</p>
          <div class="about-stats">
            <div class="about-stat"><div class="about-stat-num">20+</div><div class="about-stat-lbl">let v IT</div></div>
            <div class="about-stat"><div class="about-stat-num">100+</div><div class="about-stat-lbl">spokojených zákazníků</div></div>
          </div>
        </div>
      </div>
      <div class="about-text">
        <h2>Proč si vybrat KidoSoft?</h2>
        <p>Jsem živnostník s osobním přístupem — neztrácíte se v zákaznické podpoře velké firmy. Dojíždím přímo k vám, řeším problémy rychle a srozumitelně.</p>
        <ul class="about-list">
          <li>Rychlá diagnostika — většinou do 24 hodin</li>
          <li>Férové a transparentní ceny, žádné skryté poplatky</li>
          <li>Dojíždím do Plzně a okolí</li>
          <li>Dlouhodobá spolupráce s firmami</li>
          <li>20+ let zkušeností v IT oboru</li>
        </ul>
        <a href="/o-mne.php" class="btn btn-outline">Více o mně</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="cta-title">Potřebujete pomoct s IT?</h2>
    <p class="cta-desc">Zavolejte nebo napište — odpovím rychle a bez závazků.</p>
    <div class="cta-actions">
      <a href="tel:+420605840362" class="btn btn-white btn-lg">📞 605 840 362</a>
      <a href="/kontakt.php" class="btn btn-lg" style="color:rgba(255,255,255,.85);border:2px solid rgba(255,255,255,.3)">Napsat zprávu</a>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
