<?php
$title = "strängar - string";
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
<!-- inkludera sidhuvud -->
<?php
include "_includes/header.php";
?>
<h1><?= $title ?></h1>
<?php
// en variabel deklareras med inledande dollartecken
$name = "Emil Näslund";
echo $name;
// variablers namn skrivs som snake_case i php: små bokstäver a till z _ mellan orddelar. kebabCase pascalCase

// ett förnamn
$first_name = "Emil";
$fname = "Johan";
// efternamn
$last_name = "Näslund";

// kontrollera vilken datatyp som en variabel har
// gettype
echo "<br>";

echo gettype($first_name);
echo "<br>";
// strängar slås ihop med .
echo "variabel med namnet last_name: <b>$last_name,</b> har datatypen:".gettype($last_name);

// en variabel med namnet comment
$comment = "php är ju kul";
echo "<br>";
// hur många tecken har variabeln - strlen
$number_of_characters = strlen ($comment);

echo "kommentaren <i>$comment</i> har $number_of_characters tecken";
// för att validera en variabel kan olika strängmetoder användas.
// gör något vättigt med följande metoder
// ta bort eventuella inledande mellanslag med trim
// räkna ord med str_word_count
// repetera en sträng med str_repeat
// ersätt ett ord i en mening med str_replace
// testa exempelvis olika ordspråk
$proverb = "  allt är inte guld som glimmrar    ";

$number_before = strlen($proverb);
$proverb = trim($proverb);
$number_after = strlen($proverb);
echo "ordspråket $proverb hade innan trim $number_before tecken, och efter trim $number_after tecken.";
echo "<br>";

$promise = "jag lovar att lära mig stava till programmering";
$result = str_repeat($promise, 100);
echo $result;
// fixa små tecken till stora tecken
$message = "ALLT ÄR BARA EN STOR KONSPIRRATION";
echo strtolower($message);
echo "<br>";


// en sträng i PHP kan skapas med enkelfnuttar eller dubbelfnuttar
$test = 'som man bäddar får man ligga';
// uppgift: skapa ett html-element och ange style-attributet för att ändra bakgrundsfärgen
// innehållet i elementet ska vara text
echo "<p style='background-color:green'>$test</p>";
echo '<p style="background-color:green">$test</p>';

echo '<p style="background-color:green">' . $test . '</p>';
// ett allternativ är att esckapetecknet \ innan tecknet som ska vara gällande
echo "<p style=\"background-color: yellow\">$test</p>";
?>
    

<?php
include "_includes/footer.php";
?>
</body>
</html>




