<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="navbar-brand" style="margin-bottom:12px">
          <div class="logo-mark">K</div>
          <span class="logo-text">Kido<span>Soft</span></span>
        </div>
        <p>IT servis, správa serverů, vývoj software a webů v Plzni a okolí. Osobní přístup, férové ceny, 20+ let zkušeností.</p>
        <p style="margin-top:10px">IČO: 73440469 · info@kidosoft.cz</p>
      </div>
      <div class="footer-col">
        <h4>Služby</h4>
        <ul>
          <li><a href="/sluzby.php#domacnosti">IT servis domácnosti</a></li>
          <li><a href="/sluzby.php#firmy">IT pro firmy</a></li>
          <li><a href="/sluzby.php#servery">Správa serverů</a></li>
          <li><a href="/sluzby.php#vyvoj">Vývoj software</a></li>
          <li><a href="/finsuite.php">FinSuite</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Kontakt</h4>
        <ul>
          <li><a href="tel:+420605840362">+420 605 840 362</a></li>
          <li><a href="mailto:info@kidosoft.cz">info@kidosoft.cz</a></li>
          <li><a href="/kontakt.php">Napište nám</a></li>
          <li><a href="/o-mne.php">O mně</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <?= date('Y') ?> KidoSoft — Jiří Bláha. Všechna práva vyhrazena.</span>
      <span><a href="/gdpr.php" style="color:inherit">Ochrana osobních údajů</a></span>
    </div>
  </div>
</footer>

<script>
// Hamburger menu
document.getElementById('hamburger').addEventListener('click', function() {
  const nav = document.querySelector('.navbar-nav');
  const cta = document.querySelector('.navbar-cta');
  const open = nav.style.display === 'flex';
  if (!open) {
    nav.style.cssText = 'display:flex;flex-direction:column;position:absolute;top:68px;left:0;right:0;background:rgba(240,253,249,.97);padding:16px 24px;border-bottom:1px solid #ccfbf1;gap:4px;';
    cta.style.cssText = 'display:flex;flex-direction:column;position:absolute;top:calc(68px + ' + nav.scrollHeight + 'px);left:0;right:0;background:rgba(240,253,249,.97);padding:12px 24px 16px;border-bottom:1px solid #ccfbf1;';
  } else {
    nav.style.display = 'none';
    cta.style.display = 'none';
  }
});

// Scroll animations
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.style.opacity = '1'; } });
}, { threshold: 0.1 });
document.querySelectorAll('.anim').forEach(el => observer.observe(el));
</script>
</body>
</html>
