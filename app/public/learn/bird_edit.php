<?php

declare(strict_types=1);

include "_includes/global-functions.php";
include "_includes/database-connection.php";
$title = "Fågelskådning - redigera namn";

// förbered varaibler som används i formuläret
$bird_name = "";
$row = null;

// hantera postrequest
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    print_r2("Metoden post används...");

    // gloabal array $_POST innehåller olika fält som finns i formuläret
    print_r2($_POST);

    $bird_name = trim($_POST['bird_name']);
    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    // kontrolera att minst 2 tecken finns i fältet för birdname
    if (strlen($bird_name) >= 2) {
        // spara till databasen
        $sql = "UPDATE `bird` SET `bird_name` = '$bird_name' WHERE `bird`.`id` = $id";

        print_r2($sql);

        // använd databaskopplingen för att spara till tabellen i databasen
        $result = $pdo->exec($sql);

        // om posten upddateras visas sidan bird.php
        if ($result) {
            header('Location: bird.php');
            exit;
        }
    }
}

// för att redigera en fågel används en getrequest där id framgår exempelvis id=2
if ($_SERVER['REQUEST_METHOD'] === "GET") {

    $id = isset($_GET['id']) ? $_GET['id'] : 0;

    // visa eventuella fåglar som finns i tabellen
    $sql = "SELECT * FROM bird WHERE id=$id";

    // använd databaskopplingen för att hämta innehållet
    $result = $pdo->prepare($sql);
    $result->execute();
    // om det finns ett resultat från datanropet sparas i variabeln $row

    $row = $result->fetch();

    // kontrollera att det finns en post som gav resultat
    if ($row) {
        print_r2($row);
        $bird_name = $row['bird_name'];
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <?php
    include "_includes/header.php";
    ?>
    <h1><?= $title ?></h1>

    <!-- visa formulär om det finns ett fågelnamn som ska redigeras -->

    <?php
    if ($row) {
    ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

            <p>
                <label for="bird_name">Fågel:</label>
                <input type="text" name="bird_name" id="bird_name" value="<?= $bird_name ?>" required minlength="2" maxlength="25">
                <!-- skicka med fågelns id som finns sparad i databasen. Använd ett dolt inputfält -->
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
            </p>
            <p>
                <input type="submit" value="uppdatera">
                <input type="reset" value="Nollställ">
            </p>
        </form>
    <?php
    }
    ?>

    <?php
    include "_includes/footer.php";
    ?>
</body>

</html>