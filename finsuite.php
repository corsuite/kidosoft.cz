<?php
$title = "FinSuite — Fakturační software pro Windows | KidoSoft";
$desc  = "FinSuite je desktopový fakturační software pro Windows. Klienti, faktury, QR platby, export Money S3. Jednorázová platba, bez předplatného, 100% offline.";
$canonical = "https://kidosoft.cz/finsuite.php";
$page = "finsuite";
$breadcrumb = '{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Domů","item":"https://kidosoft.cz/"},{"@type":"ListItem","position":2,"name":"FinSuite","item":"https://kidosoft.cz/finsuite.php"}]}';
include "header.php";
?>

<div style="padding-top:68px"></div>

<!-- HERO -->
<section style="padding:80px 0 60px;position:relative;overflow:hidden">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 80% 60% at 65% -10%,rgba(13,148,136,.13),transparent 70%)"></div>
  <div class="container" style="position:relative;z-index:1;text-align:center">
    <span class="badge">Vlastní produkt</span>
    <h1 style="font-family:var(--fh);font-size:clamp(36px,5vw,58px);font-weight:800;line-height:1.1;margin:16px 0 20px">
      Fin<span style="color:var(--teal)">Suite</span> Desktop
    </h1>
    <p style="font-size:18px;color:var(--muted);line-height:1.7;max-width:620px;margin:0 auto 36px">
      Fakturační software pro Windows navržený pro české živnostníky a malé firmy.
      Funguje <strong>100% offline</strong>, jednorázová platba — žádné předplatné.
    </p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
      <a href="https://corsuite.cz/stahnout/" class="btn btn-primary btn-lg" target="_blank">⬇ Stáhnout zdarma (30 dní)</a>
      <a href="https://corsuite.cz" class="btn btn-outline btn-lg" target="_blank">corsuite.cz →</a>
    </div>
    <p style="font-size:13px;color:var(--muted);margin-top:14px">Trial verze — 30 dní plná funkčnost, bez platební karty</p>
  </div>
</section>

<!-- CO FINSUITE DĚLÁ -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="badge">O aplikaci</span>
      <h2 class="section-title">Co FinSuite umí</h2>
      <p class="section-sub">Vše co potřebujete pro každodenní fakturaci — v jedné aplikaci.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">📄</div>
        <h3 class="service-title">Faktury s QR kódem</h3>
        <p class="service-desc">Vystavujte faktury s automatickým QR kódem pro okamžitou platbu. Export do PDF, HTML, Money S3 a ISDoc.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">👥</div>
        <h3 class="service-title">Správa klientů</h3>
        <p class="service-desc">Adresář klientů s automatickým dohledáním z ARES podle IČO. Kompletní historie faktur pro každého klienta.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">🏢</div>
        <h3 class="service-title">Více firem</h3>
        <p class="service-desc">Spravujte více firem z jedné aplikace. Oddělená data, nastavení a číslování faktur pro každou firmu.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">📧</div>
        <h3 class="service-title">Odeslání emailem</h3>
        <p class="service-desc">Odesílejte faktury přímo z aplikace přes vlastní SMTP. Kopie odesílateli, šablony zpráv.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">📅</div>
        <h3 class="service-title">Daňový kalendář</h3>
        <p class="service-desc">Přehledný kalendář s daňovými termíny, vlastními termíny a poznámkami přímo na dashboardu.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">🔒</div>
        <h3 class="service-title">100% offline</h3>
        <p class="service-desc">Vaše data jsou pouze na vašem počítači. Žádný cloud, žádné předplatné, žádný přístup třetích stran.</p>
      </div>
    </div>
  </div>
</section>

<!-- CENÍK -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="badge">Ceník</span>
      <h2 class="section-title">Jednorázová platba, doživotní licence</h2>
      <p class="section-sub">Zaplaťte jednou a používejte navždy. Rozdíl je pouze v počtu firem.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:22px;max-width:900px;margin:0 auto">
      <div class="service-card" style="text-align:center;padding:32px 24px">
        <div style="font-family:var(--fh);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--teal);margin-bottom:8px">Basic</div>
        <div style="font-family:var(--fh);font-size:40px;font-weight:800;line-height:1">2 990 Kč</div>
        <div style="font-size:13px;color:var(--muted);margin:6px 0 16px">jednorázově · 1 firma · časově neomezené</div>
        <a href="https://corsuite.cz/registrace/?plan=basic" class="btn btn-outline btn-full" target="_blank">Objednat</a>
      </div>
      <div class="service-card" style="text-align:center;padding:32px 24px;border-color:var(--teal);box-shadow:0 0 0 4px rgba(13,148,136,.08)">
        <div style="font-size:12px;font-weight:600;background:var(--teal);color:#fff;padding:3px 14px;border-radius:50px;display:inline-block;margin-bottom:10px">Nejoblíbenější</div>
        <div style="font-family:var(--fh);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--teal);margin-bottom:8px">Pro</div>
        <div style="font-family:var(--fh);font-size:40px;font-weight:800;line-height:1">4 490 Kč</div>
        <div style="font-size:13px;color:var(--muted);margin:6px 0 16px">jednorázově · 10 firem · časově neomezené</div>
        <a href="https://corsuite.cz/registrace/?plan=pro" class="btn btn-primary btn-full" target="_blank">Objednat</a>
      </div>
      <div class="service-card" style="text-align:center;padding:32px 24px">
        <div style="font-family:var(--fh);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--teal);margin-bottom:8px">Business</div>
        <div style="font-family:var(--fh);font-size:40px;font-weight:800;line-height:1">7 990 Kč</div>
        <div style="font-size:13px;color:var(--muted);margin:6px 0 16px">jednorázově · neomezeno · časově neomezené</div>
        <a href="https://corsuite.cz/registrace/?plan=business" class="btn btn-outline btn-full" target="_blank">Objednat</a>
      </div>
    </div>
    <p style="text-align:center;margin-top:24px;font-size:14px;color:var(--muted)">
      Více informací, screenshoty a stažení na <a href="https://corsuite.cz" style="color:var(--teal);font-weight:600" target="_blank">corsuite.cz</a>
    </p>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="cta-title">Vyzkoušejte FinSuite zdarma</h2>
    <p class="cta-desc">30 dní trial — bez platební karty, bez závazků.</p>
    <div class="cta-actions">
      <a href="https://corsuite.cz/stahnout/" class="btn btn-white btn-lg" target="_blank">⬇ Stáhnout trial</a>
      <a href="https://corsuite.cz" class="btn btn-lg" style="color:rgba(255,255,255,.85);border:2px solid rgba(255,255,255,.3)" target="_blank">Více na corsuite.cz</a>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
