<?php
$name = "";
$file_name="";
if(count($_GET)==0){
    $name ="Unsere Lieblingsspiele";
    $file_name="home";
}elseif ($_GET['s']=="kontakt") {
    $name="Kontaktformular";
    $file_name=$_GET['s'];
} elseif ($_GET['s']=="subscribe") {
    $name="Subscribe NOW!";
    $file_name="subscribe";
}elseif ($_GET['s']=="Impressum") {
    $name ="Impressum";
    $file_name="impressum";
} elseif ($_GET['s']=="datsec") {
    $name ="Datenschutz";
    $file_name="datenschutz";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" lang="de">
        <link rel="stylesheet" href="styles/index.css">
        <?php echo('<link rel="stylesheet" href="./styles/'.$file_name.'.css">')    ?>
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.jpg">
        <script src="https://kit.fontawesome.com/9fbe62eb9f.js" crossorigin="anonymous"></script>
        <title><?php echo($name); ?></title>
    </head>
    <body>
        <div class="container">
            <header>
                <nav class="header">
                    <ul>
                        <li><a class="link" href="index.php">Spiele</a></li>
                        <li><a href="index.php"><img src="./assets/img/world-of-warcraft-logo.svg" alt="World of Warcraft"></a></li>
                        <li><a href="index.php"><img src="./assets/img/skyrim-logo.png" alt="Skyrim"></a></li>
                        <li class="left_link"><a class="link" href="index.php?s=kontakt">Kontakt</a></li>
                        <li class="left_link"><a class="link" href="index.php?s=subscribe">Subscribe</a></li>
                    </ul>


                </nav>
            </header>
            <main>
            <?php
            if ($file_name=="impressum" or $file_name=="datenschutz") {
                include("./".$file_name.".html");
            } elseif ( $file_name=="kontakt"){
                include("./kontakt.php");
            }else {
                include("./scripts/" . $file_name . ".php");
            }
            ?>
            </main>
            <footer>
                <hr>
                <div class="footer">
                <span>
                    <a href="index.php?s=Impressum">Impressum</a>
                    <a href="index.php?s=datsec">Datenschutz</a>
                </span>
                <p>Die jeweiligen&nbsp;<a>Marken</a>&nbsp;gehören den jeweiligen Firmen</p>
                </div>
            </footer>
        </div>
    </body>
</html>