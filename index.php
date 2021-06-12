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
        <meta charset="UTF-8" lang="de">
        <link rel="stylesheet" href="styles/index.css">
        <?php echo('<link rel="stylesheet" href="./styles/'.$file_name.'.css">')    ?>
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.jpg">
        <title><?php echo($name); ?></title>
    </head>
    <body>
        <header>
            <nav class="header">
                <ul>
                    <li><a class="link" href="index.php">Spiele</a></li>
                    <li><a href="index.php"><img src="./assets/img/world-of-warcraft-logo.svg" alt="World of Warcraft"></a></li>
                    <li><a href="index.php"><img src="./assets/img/skyrim-logo.png" alt="Skyrim"></a></li>
                    <li class="left_link"><a class="link" href="kontakt.html">Kontakt</a></li>
                    <li class="left_link"><a class="link">Subscribe</a></li>
                </ul>


            </nav>
        </header>
        <main>
        <?php
        include("./scripts/".$file_name.".php");
        ?>
        </main>
        <hr>
        <!--Content yet to come -->
        <footer>
                <a>Impressum</a>
                <a>Datenschutz</a>
                <p>Die jeweiligen <a>Marken</a> gehören den jewiligen anbietern</p>
        </footer>
    </body>
</html>