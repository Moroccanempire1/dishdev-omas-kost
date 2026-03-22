<?php
$pageTitle = "Reserveren | Oma's Kost";
include 'includes/header.php';
?>

<main class="section">
    <div class="container">
        <h1>Reserveer een tafel</h1>
        <p class="page-intro">Vul het formulier in en wij nemen contact met je op.</p>

        <form class="reservation-form" action="#" method="post">
            <div class="form-grid">
                <div>
                    <label for="naam">Naam</label>
                    <input type="text" id="naam" name="naam" required>
                </div>

                <div>
                    <label for="telefoon">Telefoonnummer</label>
                    <input type="tel" id="telefoon" name="telefoon" required>
                </div>

                <div>
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div>
                    <label for="personen">Aantal personen</label>
                    <input type="number" id="personen" name="personen" min="1" required>
                </div>

                <div>
                    <label for="datum">Datum</label>
                    <input type="date" id="datum" name="datum" required>
                </div>

                <div>
                    <label for="tijd">Tijd</label>
                    <input type="time" id="tijd" name="tijd" required>
                </div>

                <div>
                    <label for="type">Type reservering</label>
                    <select id="type" name="type">
                        <option>Diner</option>
                        <option>Lunch</option>
                        <option>Zakelijk</option>
                        <option>Familie</option>
                    </select>
                </div>

                <div class="full-width">
                    <label for="opmerking">Allergieën / opmerkingen</label>
                    <textarea id="opmerking" name="opmerking" rows="5"></textarea>
                </div>
            </div>

            <button type="submit" class="btn">Reservering versturen</button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>