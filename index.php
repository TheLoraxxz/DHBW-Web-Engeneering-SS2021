<?php
$name = "";
$file_name="";
if(count($_GET)==0){
    $name ="Unsere Lieblingsspiele";
    $file_name="home";
}elseif ($_GET['g']=="overwatch") {
    $name ="Overwatch";
    $file_name="overwatch";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="./styles/navbar.css">
        <?php echo('<link rel="stylesheet" href="./styles/'.$file_name.'.css">')    ?>
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.jpg">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta lang="de">
        <title><?php echo($name); ?></title>
    </head>
    <body>
        <header>
            <nav class="header">
                <a href="index.php">Spiele</a>
                <a href="index.php"><img src="./assets/img/world-of-warcraft-logo.svg" alt="World of Warcraft"></a>
                <a href="index.php"><img src="./assets/img/skyrim-logo.png" alt="Skyrim"></a>
                <a id="kontakt" href="kontakt.html">Kontakt</a>
                <a >Subscribe</a>

            </nav>
        </header>
        <br><br><br>
        <?php
        include("./scripts/".$file_name.".php");
        ?>
        <!--Content yet to come -->
        <footer>
                <a>Impressum</a>
                <a>Datenschutz</a>
                <p>Die jeweiligen <a>Marken</a> gehören den jewiligen anbietern</p>
        </footer>
    </body>
</html>