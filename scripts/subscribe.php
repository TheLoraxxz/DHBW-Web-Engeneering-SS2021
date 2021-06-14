<?php
if(count($_GET)==1) {
    echo('
        <div class="chos_content">
            <h1>Warum Subscriben?</h1>
            <article id="chos_subs">
            <p>Jetzt Pro-mitglied werden von <em>lovedgames.de</em><br>
            Ab 0,99€ / Monat</p>
            </article>
            <h2>Vorteile</h2>
            <article class="vorteile">
                <span>
                    <h3>Unterstützung unseres Projektes</h3>
                    <img src="./assets/img/subs_support.svg">
                    <p>Mit Premium Mitgliedschaft können Sie nur für 99ct uns unterstützen<br>
                    Wir finanzieren damit unsere Server und das Entwicklungsteam</p>
                </span>
                <span>
                    <h3>Extra Premiumkontent erhalten</h3>
                    <i class="fas fa-plus fa-7x"></i>
                    <p>Wenn sie sich eine Premiummitgliedschaft sichern, dann gibt es viele weitere Kostenlose Inhalte<br>
                    Es gibt einmal wöchentlich für Sie einen extra langen Artikel den Sie durchlesen können.<br>
                    Wenn Sie 4,99€ bezahlen bekommen Sie noch aktuelle News aus und insiderwissen aus der Gamingbranche</p>
                </span>
                <span>
                    <h3>endlich Werbefrei</h3>
                    <img src="./assets/img/subs_no_add.svg" alt="No ADS">
                    <p>Keine Werbung mehr!<br> Keine Werbung im Hintergrund!<br>
                    Keine Werbung mehr in Artikeln!<br> komplett Werbefreie Berichterstattung!</p>
                </span>
            </article>
            <h2>Abo-Modell wählen</h2>
            <article id="chos_choose">
                <span>
                    <h3>Premium light</h3>
                    <p>0,99 €/Monat </p>
                    <hr>
                    <button onclick="window.location.href=\'index.php?s=subscribe&sub=cos&type=light\'">Auswählen !</button>
                </span>
                <span>
                    <h3>Premium pro</h3>
                    <p>4,99 €/Monat</p>
                    <hr>
                    <button onclick="window.location.href=\'index.php?s=subscribe&sub=cos&type=pro\'">Auswählen!</button>
                </span>
            </article>
        </div>    
    ');
} elseif($_GET["sub"]=="cos"){
    $type = $_GET["type"];
    echo('
        <div class="in_content">
            <h1>Bitte Daten eingeben</h1>
            <h3>Allgemeine Daten</h3>
            <form method="get" action="index.php" id="form">
                <span id="hidden">
                    <input type="text" name="s" value="subscribe">
                    <input type="text" name="sub" value="fin">
                </span>
                <span>
                    <label>Vorname:</label><input type="text" placeholder="Max" required name="surname">
                    <label>Nachname:</label><input type="text" placeholder="Mustermann" name="name" required>
                </span>
                <span>
                    <label>E-Mail:</label><input type="text" placeholder="max.mustermann@example.com" name="email" required>
                </span>
                <hr>
                <span id="card">
                    <h3>Visa-Kartendetails</h3>
                    <input type="text" placeholder="Kartennummer" required name="card_number" pattern="[0-9]*">
                    <input type="text" placeholder="Ablaufdatum" required name="abl" pattern="[0-9]*">
                    <input type="text" placeholder="Sicherheitscode" required name="code" pattern="[0-9]*">
                </span>
                <span>
                    <input type="checkbox" required><label>Ich habe die <a href="./index.php?s=datsec">AGB</a> gelesen und akzeptiert</label>
                </span>
                <input type="submit" >
            </form>
                <button onclick="window.location.href=\'index.php?s=subscribe\'">Abbrechen</button>
        </div>
    ');
} elseif ($_GET["sub"]=="fin"){
    echo('
        <h1>Vielen Dank für die Subscription</h1>
    ');
}
?>

