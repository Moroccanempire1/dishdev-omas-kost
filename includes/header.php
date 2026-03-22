<?php
if (!isset($pageTitle)) {
    $pageTitle = "Oma's Kost";
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anass Maliki">
    <meta name="description" content="Oma's Kost - Heerlijk Hollands eten in een warme sfeer.">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
       <a href="index.php" class="logo" aria-label="Ga naar homepagina van Oma's Kost">
    <img src="images/logo.png" alt="Oma's Kost logo">
</a>

        <button class="menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false">
            ☰
        </button>

        <nav class="site-nav" id="siteNav" aria-label="Hoofdnavigatie">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="lunch-diner.php">Lunch & Diner</a></li>
                <li><a href="openingstijden.php">Openingstijden</a></li>
                <li><a href="reserveren.php">Reserveren</a></li>
                <li><a href="vacatures.php">Vacatures</a></li>
            </ul>
        </nav>

        <div class="accessibility-tools">
            <button id="fontToggle" type="button">A+</button>
            <button id="themeToggle" type="button">🌙</button>
        </div>
    </div>
</header>