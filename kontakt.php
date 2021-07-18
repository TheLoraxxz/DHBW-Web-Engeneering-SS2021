<?php
if(count($_GET)==1) {
    echo '
    <div class="contact_content">
    <h1>Kontaktieren sie uns</h1>
    <form method="get" action="index.php?s=kontakt" id="form_contact">
    <input type="hidden" value="kontakt" name="s">
    <span>
        <label>Vorname:</label><input class="contact_input" type="text" placeholder="Vorname" required name="vorname">
     </span>
     <span>
     <label>Nachname:</label><input class="contact_input" type="text" placeholder="Nachname" required name="nachname">
     </span>
     <span>
        <label>Email-Adresse:</label><input class="contact_input" type="text" placeholder="Email-Adresse" required name="email">
     </span>
     <span>
     <label>Telefonnumer:</label><input class="contact_input" type="text" placeholder="Telefonnummer" required name="telefon"></span>
     <hr>
     <div class="contact_textarea">
        <textarea rows="15" id="anliegen_input" placeholder="Anliegen" required name="anliegen"></textarea>
    </div>
        <input type="submit" value="Absenden" >
        <button onclick="window.location.href=\'index.php\'">Abbrechen</button>
    </form>
    </div>';
} elseif (count($_GET)==6){
    $vorname = $_GET['vorname'];
    $nachname=$_GET['nachname'];
    $mail=$_GET['email'];
    $telefon= $_GET["telefon"];
    $anliegen= $_GET["anliegen"];

    echo('
        <div class="contact_content">
            <div class="contact_div">
            <h1>Vielen Dank für deine Nachricht!</h1>
            <p>Hallo <b>'.$vorname.' '.$nachname.'</b>,</p>
            <p>Wir haben folgende Nachricht von Dir erhalten: </br>
            <p class="kontakt_data"><b>'.$anliegen.'</b></p>
            </p>
            <p>In spätestens ein bis zwei Werktagen solltest du auf einer deiner angegebenen Kontaktadressen</br>
            <p class="kontakt_data"><b>'.$mail.'</br>'.$telefon.'</b></p>
            eine Antwort erhalten.</br>
            Bis dahin!
            </p>
            <button onclick="window.location.href=\'index.php\'">Homepage</button>
            </div>
        </div>
    ');
}
else {
    echo '
    <div class="content">
        Etwas ist schiefgelaufen, bitte versuchen Sie es später nochmals.
    </div>
    ';
}
?>


