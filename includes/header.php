<?php
if (!isset($pageTitle)) {
    $pageTitle = "James Cedric M. Peralta | Grand Line Portfolio";
}
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="James Cedric M. Peralta - BSIT WMAD student portfolio.">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="ocean-particles" aria-hidden="true">
    <span></span><span></span><span></span><span></span><span></span>
    <span></span><span></span><span></span><span></span><span></span>
</div>

<header class="site-header">
    <nav class="navbar container">
        <a class="brand" href="index.php" aria-label="James Cedric home">
            <span class="brand-icon">☠</span>
            <span>JAMES CEDRIC</span>
        </a>

        <button class="menu-toggle" type="button" aria-label="Open navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <div class="nav-links">
            <?php
            $navItems = [
                "index.php" => "Home",
                "about.php" => "About",
                "skills.php" => "Skills",
                "projects.php" => "Projects",
                "education.php" => "Education",
                "contact.php" => "Contact"
            ];
            foreach ($navItems as $file => $label):
            ?>
                <a class="<?= $currentPage === $file ? 'active' : '' ?>" href="<?= $file ?>"><?= $label ?></a>
            <?php endforeach; ?>
        </div>
    </nav>
</header>

<main>
