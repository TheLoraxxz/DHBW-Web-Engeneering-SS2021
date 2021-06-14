<?php
if(count($_GET)==1) {
    echo('
        <div class="chos_content">
            <h1>Warum Subscriben?</h1>
            <article>
            <p>Jetzt Pro-mitglied werden von <em>lovedgames.de</em><br>
            Ab 0,99€ / Monat</p>
            </article>
            <h2>Vorteile</h2>
            <article>
                <span>
                    <h3>Unterstützung unseres Projektes</h3>
                    <p>Mit Premium Mitgliedschaft können Sie nur für 99ct uns unterstützen<br>
                    Wir finanzieren damit unsere Server und das Entwicklungsteam</p>
                </span>
                <span>
                    <h3>Extra Premiumkontent erhalten</h3>
                    <p>Wenn sie sich eine Premium-Mitgliedschaft sichern, dann gibt es viele weitere Kostenlose Inhalte<br>
                    Es gibt einmal wöchentlich für Sie einen extra langen Artikel den Sie durchlesen können.<br>
                    Wenn Sie 4,99€ bezahlen bekommen Sie noch aktuelle News aus und insiderwissen aus der Gamingbranche</p>
                </span>
                <span>
                    <h3>endlich Werbefrei</h3>
                    <p>Keine Werbung mehr!<br> Keine Werbung im Hintergrund!<br>
                    Keine Werbung mehr in Artikeln!<br> komplett Werbefreie Berichterstattung!</p>
                </span>
            </article>
            <h2>Abo-Modell wählen</h2>
            <article>
                <span>
                    <h3>Premium light</h3>
                    <p></p>
                    <button>Auswählen!</button>
                </span>
                <span>
                    <h3>Premium pro</h3>
                    <p></p>
                    <button>Auswählen!</button>
                </span>
            </article>
        </div>    
    ');
} elseif($_GET["sub"]=="cos"){
    echo('<h1>Bitte Daten eingeben</h1>
    ');
} elseif ($_GET["sub"]=="fin"){
    echo('
        <h1>Vielen Dank für die Subscription</h1>
    ');
}
?>

