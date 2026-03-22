<?php
require_once __DIR__ . '/src/Exception.php';
require_once __DIR__ . '/src/PHPMailer.php';
require_once __DIR__ . '/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$title     = "Kontakt — KidoSoft | Jiří Bláha Plzeň | Tel: +420 605 840 362";
$desc      = "Kontaktujte KidoSoft — Jiří Bláha. IT servis v Plzni, tel: +420 605 840 362, email: info@kidosoft.cz. Odpovídám zpravidla do 24 hodin.";
$canonical = "https://kidosoft.cz/kontakt.php";
$page      = "kontakt";

$msg_ok = $msg_err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim(strip_tags($_POST['name']    ?? ''));
    $email    = trim(strip_tags($_POST['email']   ?? ''));
    $phone    = trim(strip_tags($_POST['phone']   ?? ''));
    $subject  = trim(strip_tags($_POST['subject'] ?? 'Dotaz'));
    $message  = trim(strip_tags($_POST['message'] ?? ''));
    $gdpr     = isset($_POST['gdpr']);
    $honeypot = $_POST['website'] ?? '';

    if ($name && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $message && $gdpr && empty($honeypot)) {

        $smtp_host = 'smtp.active24.cz';  // Active24 SMTP
        $smtp_port = 465;
        $smtp_user = 'info@kidosoft.cz';
        $smtp_pass = 'DOPLNIT_HESLO';    // ← doplň heslo
        $admin_to  = 'info@kidosoft.cz';

        try {
            // Email provozovateli
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host       = $smtp_host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $smtp_user;
            $mail->Password   = $smtp_pass;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = $smtp_port;
            $mail->CharSet    = 'UTF-8';
            $mail->setFrom($smtp_user, 'KidoSoft web');
            $mail->addAddress($admin_to);
            $mail->addReplyTo($email, $name);
            $mail->isHTML(true);
            $mail->Subject = "[KidoSoft] $subject — $name";
            $mail->Body    = "
<html><body style='font-family:Arial,sans-serif;color:#0f172a'>
<h2 style='color:#0d9488'>Nová zpráva z webu KidoSoft</h2>
<table style='width:100%;border-collapse:collapse'>
  <tr><td style='padding:8px;font-weight:bold;width:120px'>Jméno:</td><td style='padding:8px'>" . htmlspecialchars($name) . "</td></tr>
  <tr style='background:#f0fdf9'><td style='padding:8px;font-weight:bold'>Email:</td><td style='padding:8px'><a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></td></tr>
  <tr><td style='padding:8px;font-weight:bold'>Telefon:</td><td style='padding:8px'>" . htmlspecialchars($phone ?: '—') . "</td></tr>
  <tr style='background:#f0fdf9'><td style='padding:8px;font-weight:bold'>Předmět:</td><td style='padding:8px'>" . htmlspecialchars($subject) . "</td></tr>
</table>
<div style='margin-top:16px;padding:16px;background:#f0fdf9;border-left:4px solid #0d9488'>
  <strong>Zpráva:</strong><br><br>" . nl2br(htmlspecialchars($message)) . "
</div>
</body></html>";
            $mail->AltBody = "Jméno: $name\nEmail: $email\nTelefon: $phone\nPředmět: $subject\n\n$message";
            $mail->send();

            // Autoreply
            $auto = new PHPMailer(true);
            $auto->isSMTP();
            $auto->Host       = $smtp_host;
            $auto->SMTPAuth   = true;
            $auto->Username   = $smtp_user;
            $auto->Password   = $smtp_pass;
            $auto->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $auto->Port       = $smtp_port;
            $auto->CharSet    = 'UTF-8';
            $auto->setFrom($smtp_user, 'KidoSoft — Jiří Bláha');
            $auto->addAddress($email, $name);
            $auto->isHTML(true);
            $auto->Subject = "Vaše zpráva byla přijata — KidoSoft";
            $auto->Body    = "
<html><body style='font-family:Arial,sans-serif;color:#0f172a;max-width:560px;margin:0 auto'>
<div style='background:#134e4a;padding:28px 32px;border-radius:12px 12px 0 0'>
  <h2 style='color:#14b8a6;margin:0'>Zpráva přijata</h2>
</div>
<div style='padding:28px 32px;background:#fff;border:1px solid #ccfbf1;border-top:none;border-radius:0 0 12px 12px'>
  <p>Dobrý den, <strong>" . htmlspecialchars($name) . "</strong>,</p>
  <p>Vaše zpráva byla přijata. Odpovím co nejdříve, zpravidla do 24 hodin v pracovní dny.</p>
  <p style='margin-top:20px'>S pozdravem,<br>
  <strong>Jiří Bláha — KidoSoft</strong><br>
  <a href='tel:+420605840362' style='color:#0d9488'>+420 605 840 362</a><br>
  <a href='mailto:info@kidosoft.cz' style='color:#0d9488'>info@kidosoft.cz</a></p>
</div>
</body></html>";
            $auto->AltBody = "Dobrý den, $name,\n\nVaše zpráva byla přijata. Odpovím co nejdříve.\n\nJiří Bláha — KidoSoft\n+420 605 840 362";
            $auto->send();

            $msg_ok = "✅ Zpráva odeslána! Odpovím co nejdříve.";

        } catch (Exception $e) {
            $msg_err = "Chyba při odesílání. Zavolejte prosím na +420 605 840 362.";
        }

    } elseif (!empty($honeypot)) {
        $msg_ok = "✅ Zpráva odeslána!";
    } else {
        $msg_err = "Vyplňte všechna povinná pole a potvrďte souhlas.";
    }
}

$breadcrumb = '{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Domů","item":"https://kidosoft.cz/"},{"@type":"ListItem","position":2,"name":"Kontakt","item":"https://kidosoft.cz/kontakt.php"}]}';
include "header.php";
?>

<div style="padding-top:68px"></div>
<section style="padding:60px 0 40px;text-align:center;position:relative;overflow:hidden">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 50% 0%,rgba(13,148,136,.1),transparent 70%)"></div>
  <div class="container" style="position:relative;z-index:1">
    <span class="badge">Kontakt</span>
    <h1 class="section-title" style="margin-top:14px">Pojďme si promluvit</h1>
    <p class="section-sub">Zavolejte nebo napište — odpovím rychle a bez závazků.</p>
  </div>
</section>

<section style="padding:48px 0 100px">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info">
        <h3>KidoSoft — Jiří Bláha</h3>
        <p>Jsem k dispozici pro domácnosti i firmy v Plzni a okolí. Na dotazy odpovídám zpravidla do několika hodin.</p>
        <div class="contact-items">
          <div class="contact-item">
            <div class="contact-icon">📞</div>
            <div>
              <div class="contact-lbl">Telefon</div>
              <div class="contact-val"><a href="tel:+420605840362">+420 605 840 362</a></div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">📧</div>
            <div>
              <div class="contact-lbl">Email</div>
              <div class="contact-val"><a href="mailto:info@kidosoft.cz">info@kidosoft.cz</a></div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">📍</div>
            <div>
              <div class="contact-lbl">Oblast působení</div>
              <div class="contact-val">Plzeň a okolí</div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">🕐</div>
            <div>
              <div class="contact-lbl">Dostupnost</div>
              <div class="contact-val">Po–Pá 8:00–18:00<br>Havarijní servis 24/7</div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">🏢</div>
            <div>
              <div class="contact-lbl">IČO</div>
              <div class="contact-val">73440469</div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-card">
        <h3>Napište nám</h3>
        <?php if ($msg_ok): ?>
          <div class="form-msg success" style="display:flex"><?= htmlspecialchars($msg_ok) ?></div>
        <?php elseif ($msg_err): ?>
          <div class="form-msg error" style="display:block"><?= htmlspecialchars($msg_err) ?></div>
        <?php endif; ?>

        <form method="post" action="kontakt.php">
          <div style="display:none"><input type="text" name="website" tabindex="-1" autocomplete="off"></div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label">Jméno <span class="req">*</span></label>
              <input type="text" name="name" class="form-control" placeholder="Jan Novák" required>
            </div>
            <div class="form-group">
              <label class="form-label">Email <span class="req">*</span></label>
              <input type="email" name="email" class="form-control" placeholder="jan@firma.cz" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">Telefon</label>
              <input type="text" name="phone" class="form-control" placeholder="+420 777 123 456">
            </div>
            <div class="form-group">
              <label class="form-label">Předmět</label>
              <select name="subject" class="form-control">
                <option>IT servis / oprava</option>
                <option>Správa serveru / sítě</option>
                <option>Vývoj webu nebo aplikace</option>
                <option>FinSuite</option>
                <option>Jiné</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Zpráva <span class="req">*</span></label>
            <textarea name="message" class="form-control" placeholder="Popište váš požadavek..." required></textarea>
          </div>
          <div class="form-group">
            <label class="form-check">
              <input type="checkbox" name="gdpr" required>
              Souhlasím se <a href="/gdpr.php">zpracováním osobních údajů</a>. <span class="req">*</span>
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-full btn-lg">Odeslat zprávu</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>
