<?php
$pageTitle = "Contact | Send a Message";
include "includes/header.php";
$success = isset($_GET["success"]) && $_GET["success"] === "1";
$error = isset($_GET["error"]) ? $_GET["error"] : "";
?>

<section class="page-hero">
    <div class="container reveal">
        <p class="eyebrow">🐌 DEN DEN MUSHI</p>
        <h1>SEND A MESSAGE</h1>
        <p>Have a question, project idea, or just want to say hello? Send a message through the Grand Line.</p>
    </div>
</section>

<section class="section dark-section">
    <div class="container contact-grid">
        <div class="contact-log reveal">
            <p class="eyebrow">TRANSMISSION LOG</p>
            <h2>CONTACT THE CAPTAIN</h2>
            <p>
                This form is a beginner-friendly PHP demonstration. It validates your input and shows a success
                message without requiring MySQL.
            </p>
            <div class="contact-facts">
                <div><span>🎓</span><strong>BSIT - WMAD</strong><small>3rd Year Student</small></div>
                <div><span>🎨</span><strong>Portrait Drawing</strong><small>Favorite hobby</small></div>
                <div><span>🔐</span><strong>Cybersecurity</strong><small>Dream career</small></div>
            </div>
        </div>

        <div class="contact-shell reveal delay-1">
            <?php if ($success): ?>
                <div class="alert success">Your message has reached the Grand Line! 🏴‍☠️</div>
            <?php endif; ?>

            <?php if ($error): ?>
                <div class="alert error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form action="submit_contact.php" method="POST" class="contact-form">
                <label for="name">NAME</label>
                <input type="text" id="name" name="name" maxlength="100" required placeholder="Enter your name">

                <label for="email">EMAIL</label>
                <input type="email" id="email" name="email" maxlength="150" required placeholder="you@example.com">

                <label for="message">MESSAGE</label>
                <textarea id="message" name="message" rows="7" maxlength="2000" required placeholder="Write your message..."></textarea>

                <button class="btn btn-gold full-width" type="submit">SEND MESSAGE ⚓</button>
                <p class="form-note">Your browser and localhost are enough for this demo. No database is required.</p>
            </form>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
