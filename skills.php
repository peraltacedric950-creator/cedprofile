<?php
$pageTitle = "Skills | My Skill Crew";
require_once "data.php";
include "includes/header.php";
?>

<section class="page-hero">
    <div class="container reveal">
        <p class="eyebrow">⚔️ MY CREW</p>
        <h1>MY SKILL CREW</h1>
        <p>Student-level skills gathered from classes, practice, and projects.</p>
    </div>
</section>

<section class="section dark-section">
    <div class="container">
        <div class="crew-intro reveal">
            <div>
                <p class="eyebrow">THE CREW IS STILL GROWING</p>
                <h2>SKILLS ARE TREASURE</h2>
            </div>
            <p>These percentages are personal learning estimates, not professional certifications or expert ratings.</p>
        </div>

        <div class="skills-grid">
            <?php foreach ($skills as $index => $skill): ?>
                <article class="skill-card reveal" style="--delay: <?= ($index % 5) * 0.08 ?>s;">
                    <div class="crew-badge"><?= str_pad((string)($index + 1), 2, "0", STR_PAD_LEFT) ?></div>
                    <div class="skill-content">
                        <div class="skill-title-row">
                            <h3><?= htmlspecialchars($skill["name"]) ?></h3>
                            <strong><?= (int)$skill["level"] ?>%</strong>
                        </div>
                        <p><?= htmlspecialchars($skill["description"]) ?></p>
                        <div class="progress-track">
                            <div class="progress-bar" data-progress="<?= (int)$skill["level"] ?>"></div>
                        </div>
                        <span class="student-level">STUDENT LEVEL</span>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section parchment-section">
    <div class="container learning-banner reveal">
        <span>🏴‍☠️</span>
        <div>
            <p class="eyebrow dark-text">CAPTAIN'S RULE</p>
            <h2>KEEP LEARNING. KEEP PRACTICING.</h2>
            <p>Technology changes constantly, so the real skill is staying curious and continuing to learn.</p>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
