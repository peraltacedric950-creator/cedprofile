<?php
$pageTitle = "Projects | My Adventures";
require_once "data.php";
include "includes/header.php";
?>

<section class="page-hero">
    <div class="container reveal">
        <p class="eyebrow">💰 MY ADVENTURES</p>
        <h1>MY ADVENTURES</h1>
        <p>Projects from my journey through web, mobile, and software development.</p>
    </div>
</section>

<section class="section parchment-section">
    <div class="container">
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <article class="project-poster reveal">
                    <div class="poster-top">
                        <span>WANTED • ADVENTURE <?= htmlspecialchars($project["number"]) ?></span>
                        <span><?= htmlspecialchars($project["bounty"]) ?></span>
                    </div>
                    <div class="project-image">
                        <img src="<?= htmlspecialchars($project["image"]) ?>" alt="<?= htmlspecialchars($project["title"]) ?> project image">
                        <div class="image-placeholder">PROJECT IMAGE</div>
                    </div>
                    <div class="poster-body">
                        <p class="poster-label">PROJECT BOUNTY</p>
                        <h2><?= htmlspecialchars($project["title"]) ?></h2>
                        <p><?= htmlspecialchars($project["description"]) ?></p>
                        <div class="tech-tags">
                            <?php foreach (explode(", ", $project["technology"]) as $tech): ?>
                                <span><?= htmlspecialchars($tech) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="poster-footer">
                            <strong><?= htmlspecialchars($project["bounty"]) ?></strong>
                            <a href="contact.php" class="mini-btn">VIEW PROJECT →</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <p class="decorative-note">All bounty amounts are fictional and decorative. Project descriptions represent student portfolio work/concepts.</p>
    </div>
</section>

<?php include "includes/footer.php"; ?>
