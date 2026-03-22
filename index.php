<?php
$pageTitle = "Home | Oma's Kost";
include 'includes/header.php';
?>

<main>
 <section class="hero">
    <div class="container hero-grid">
        <div>
            <h1>Heerlijk Hollands Eten</h1>
            <p>Sinds 1985 in Rotterdam</p>
            <a href="reserveren.php" class="btn">Reserveer nu</a>
        </div>

        <img src="images/hero.jpg" alt="Traditioneel Hollands gerecht">
    </div>
</section>

    <section class="about section">
        <div class="container about-grid">
            <div class="about-image">
                <img src="images/gerecht-2.jpg" alt="Bord met gerecht geserveerd in restaurant Oma's Kost">
            </div>

            <div class="about-text">
                <h2>Over Oma's Kost</h2>
                <p>
                    Bij Oma's Kost serveren wij traditionele Hollandse gerechten met liefde bereid.
                    We combineren een warme sfeer met vertrouwde smaken.
                </p>
            </div>
        </div>
    </section>

    <section class="gallery section">
        <div class="container">
            <h2>Onze gerechten</h2>

            <div class="gallery-grid">
               <img src="images/gerecht-5.jpg" alt="Stamppot van Oma's Kost">
                <img src="images/gerecht-6.jpg" alt="Pannenkoek van Oma's Kost">
                <img src="images/gerecht-3.jpg" alt="Erwtensoep van Oma's Kost">
                <img src="images/gerecht-4.jpg" alt="Hollands gerecht">
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>