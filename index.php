<?php
$pageTitle = "James Cedric | Welcome to My Grand Line";
require_once "data.php";
include "includes/header.php";
?>

<section class="hero section" id="home">
    <div class="hero-map-glow"></div>
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <p class="eyebrow">🏴‍☠️ WELCOME TO MY GRAND LINE</p>
            <h1>JAMES CEDRIC <span>M. PERALTA</span></h1>
            <p class="hero-subtitle">BSIT - WMAD STUDENT</p>
            <p class="hero-tagline">Setting Sail Into the World of Technology</p>
            <p class="hero-description">
                I am a 3rd-year BS Information Technology student specializing in Web and Mobile Application Development.
                I enjoy creating websites, applications, and learning new technologies while pursuing my dream of becoming
                a cybersecurity professional.
            </p>
            <div class="button-row">
                <a class="btn btn-gold" href="projects.php">VIEW MY PROJECTS <span>→</span></a>
                <a class="btn btn-outline" href="about.php">ABOUT ME <span>→</span></a>
            </div>
            <div class="hero-stats">
                <div><strong>03</strong><span>YEAR LEVEL</span></div>
                <div><strong>09+</strong><span>SKILLS</span></div>
                <div><strong>05</strong><span>ADVENTURES</span></div>
            </div>
        </div>

        <div class="wanted-poster reveal delay-1">
            <div class="wanted-tape">GRAND LINE FILE</div>
            <div class="wanted-inner">
                <p class="wanted-title">WANTED</p>
                <div class="wanted-photo">
                    <img src="images/profile.jpg" alt="Profile placeholder for James Cedric M. Peralta">
                </div>
                <h2>JAMES CEDRIC<br>M. PERALTA</h2>
                <p class="wanted-small">FOR EXPLORING THE WORLD OF TECHNOLOGY</p>
                <div class="bounty-label">BERRY BOUNTY</div>
                <div class="bounty">฿ 500,000,000</div>
                <p class="wanted-note">FICTIONAL • DECORATIVE ONLY</p>
            </div>
        </div>
    </div>
    <div class="wave-line wave-one"></div>
    <div class="wave-line wave-two"></div>
</section>

<section class="section parchment-section" id="quick-about">
    <div class="container two-column">
        <div class="section-heading reveal">
            <p class="eyebrow dark-text">🗺️ THE CAPTAIN'S LOG</p>
            <h2>A STUDENT VOYAGE</h2>
        </div>
        <div class="journal-card reveal delay-1">
            <p>
                Every project is another island, every bug is another storm, and every new skill is another piece
                of treasure. As a BSIT-WMAD student at NVSU, I am building my skills one adventure at a time.
            </p>
            <a class="text-link" href="about.php">Read my journey →</a>
        </div>
    </div>
</section>

<section class="section dark-section">
    <div class="container">
        <div class="section-heading center reveal">
            <p class="eyebrow">⚓ THE NEXT ISLAND</p>
            <h2>READY FOR ANOTHER ADVENTURE?</h2>
            <p>Explore my skills, projects, and education as I continue sailing toward a career in cybersecurity.</p>
        </div>
        <div class="island-row">
            <a class="island-card reveal" href="skills.php"><span>⚔</span><strong>MY CREW</strong><small>Skills & abilities</small></a>
            <a class="island-card reveal delay-1" href="projects.php"><span>💰</span><strong>MY ADVENTURES</strong><small>Projects & creations</small></a>
            <a class="island-card reveal delay-2" href="education.php"><span>🗺</span><strong>MY ORIGIN</strong><small>Education journey</small></a>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
