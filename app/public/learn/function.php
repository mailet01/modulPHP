<?php
declare(strict_types = 1);
$title = "funktioner";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?></title>
<ul>
    <li>använd beskrivande funktionsnamn</li>
    <li>följ kodstandarden för språket</li>
    <li>validera parametrar som finns i funktionen</li>
    <li>använd flera funktioner - dela upp logik</li>
    <li>dokumentera funktionen. Vilka parametrar...</li>
</ul>
</head>
<body>
<!-- inkludera sidhuvud -->
<?php
// en funktion för att beräkna kostnad
/**
 * calculate_total
 *
 * @param  mixed $price
 * @param  mixed $amount
 * @return int
 */
function calculate_total(int $price, int $amount) :int
{
    return $price * $amount;

}
// använd funktionen, spara värdet i en ny variabel
$total = calculate_total(7, 4);
// presentera resultatet i ett html-element
echo "<div>kostnaden är $total </div>";
$total = calculate_total(8, 6);
echo "<div>kostnaden är $total </div>";
// skapa en funktion med namnet render_total
// funktionen ska använda calculate_total och därefter presentera resultatet
/**
 * render_total
 *
 * @param  mixed $price
 * @param  mixed $amount
 * @param  mixed $element
 * @return void
 */
function render_total(int $price, int $amount, string $element)
{
    // validerar inkommande argument. Exempelvis är det ok med negativa tal, bilka html-element ska kunna anges
    if($price < 0|| $amount < 0)     
{
        return ;
    }
// se till att endast följande HTML-element är giltiga
// en array med giltiga element
$elements = ["p", "div", "h4"];
if(!in_array($element, $elements))
 {
$element = "pre";
 }
    $total = calculate_total($price, $amount);
    echo "<$element> kostnad: $total</$element>";
}
render_total(9, 80, "h2");
?>





<?php

include "_includes/header.php";
?>
<h1><?= $title ?></h1>
<?php
?>
<?php
include "_includes/footer.php";
?>
</body>
</html>




