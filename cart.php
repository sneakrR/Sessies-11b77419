<?php
   session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form action="" method="post" target="_blank">
        <input type="cookie" name="fname"><br>
        <input type="submit" value="Submit">
        </form>

        <?php
           $_SESSION["Skateboard"] = "#1";
           $_SESSION["Basketbal"] = "#2";
           $_SESSION["Skeelers"] = "#3";
        ?>

        <?php
           if(isset($_SESSION["Skateboard"])) {
            echo "Gekozen item: " . $_SESSION["Skateboard"];
           } elseif(isset($_SESSION["Basketbal"])) {
            echo "Gekozen item: " . $_SESSION["Basketbal"];
           } elseif(isset($_SESSION["Skeelers"])) {
            echo "Gekozen item: " . $_SESSION["Skeelers"];
           } else {
               echo "Geen waarde aangegeven!";
           }
        ?>
    </body>
</html>