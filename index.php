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
        <meta charset="UTF-8">
        <title><?php echo($name); ?></title>
    </head>
    <body>
        <header>
            <nav>
                <a href="./index.php">Unsere Spiele</a>
                <a href="./index.php?g=overwatch">Overwatch</a>
                <a href="">Spiel 2</a>
                <a href="">Spiel 3</a>
            </nav>
        </header>
        <?php
        include("./scripts/".$file_name.".php");
        ?>
        <!--Content yet to come -->
        <footer></footer>
    </body>
</html>
