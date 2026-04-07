<?php
$pageTitle = "Lunch & Diner | Oma's Kost";
include 'includes/header.php';
?>

<main class="page-content">
    <section class="page-hero">
        <div class="container">
            <span class="page-eyebrow">Praktische informatie</span>
            <h1>Openingstijden & Locatie</h1>
            <p class="page-intro">
                Hier vindt u onze actuele openingstijden en locatiegegevens. Wij heten u graag welkom
                voor een gezellige lunch, een uitgebreid diner of een ontspannen kop koffie.
            </p>
        </div>
    </section>

    <section class="info-section">
        <div class="container">
            <div class="info-grid">
                <article class="info-card">
                    <span class="info-label">Openingstijden</span>
                    <h2>Wanneer zijn wij geopend?</h2>

                    <div class="hours-list">
                        <div class="hours-row">
                            <span>Maandag</span>
                            <strong>11:00 – 21:00</strong>
                        </div>
                        <div class="hours-row">
                            <span>Dinsdag</span>
                            <strong>11:00 – 21:00</strong>
                        </div>
                        <div class="hours-row">
                            <span>Woensdag</span>
                            <strong>11:00 – 21:00</strong>
                        </div>
                        <div class="hours-row">
                            <span>Donderdag</span>
                            <strong>11:00 – 21:00</strong>
                        </div>
                        <div class="hours-row">
                            <span>Vrijdag</span>
                            <strong>11:00 – 22:00</strong>
                        </div>
                        <div class="hours-row">
                            <span>Zaterdag</span>
                            <strong>12:00 – 22:00</strong>
                        </div>
                        <div class="hours-row">
                            <span>Zondag</span>
                            <strong>12:00 – 20:00</strong>
                        </div>
                    </div>

                    <p class="info-note">
                        Keuken gesloten 30 minuten voor sluitingstijd.
                    </p>
                </article>

                <article class="info-card">
                    <span class="info-label">Locatie</span>
                    <h2>Waar vindt u Oma’s Kost?</h2>

                    <div class="location-block">
                        <p><strong>Oma’s Kost</strong></p>
                        <p>Stationsstraat 12</p>
                        <p>Rotterdam</p>
                    </div>

                    <div class="location-details">
                        <div class="detail-item">
                            <h3>Bereikbaarheid</h3>
                            <p>
                                Onze locatie is goed bereikbaar met zowel de auto als het openbaar vervoer.
                            </p>
                        </div>

                        <div class="detail-item">
                            <h3>Parkeren</h3>
                            <p>
                                In de omgeving zijn meerdere parkeermogelijkheden beschikbaar.
                            </p>
                        </div>

                        <div class="detail-item">
                            <h3>Contact</h3>
                            <p>
                                Neem gerust contact met ons op voor vragen over reserveringen of beschikbaarheid.
                            </p>
                        </div>
                    </div>

                    <a href="reserveren.php" class="btn btn-primary">Reserveer een tafel</a>
                </article>
            </div>
        </div>
    </section>

    <section class="visit-section">
        <div class="container">
            <div class="section-heading">
                <h2>Plan uw bezoek</h2>
                <p>
                    Wij adviseren om vooraf te reserveren tijdens drukke dagen en avonden, zodat u zeker
                    bent van een fijne plek in ons restaurant.
                </p>
            </div>

            <div class="visit-grid">
                <article class="visit-card">
                    <h3>Gezellige sfeer</h3>
                    <p>
                        Een warme en huiselijke omgeving waar u rustig kunt genieten van traditionele gerechten.
                    </p>
                </article>

                <article class="visit-card">
                    <h3>Geschikt voor lunch & diner</h3>
                    <p>
                        Van een korte middagpauze tot een uitgebreid avondbezoek, wij ontvangen u graag.
                    </p>
                </article>

                <article class="visit-card">
                    <h3>Eenvoudig reserveren</h3>
                    <p>
                        Via onze reserveringspagina kunt u snel en gemakkelijk een tafel aanvragen.
                    </p>
                </article>
            </div>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
