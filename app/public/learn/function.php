<?php

declare(strict_types=1);
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
    function calculate_total(int $price, int $amount): int
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
     * @param mixed $in_stock
     * @param  mixed $element
     * @return void
     */
    function render_total(int $price, int $amount, int $in_stock, string  $element)
    {
        // validerar inkommande argument. Exempelvis är det ok med negativa tal, vilka html-element ska kunna anges
        if ($price < 0 || $amount < 0) {
            return;
        }
        // ny kontroll av $amount- värde mellan ett intervall_is_orderable(())
        if (!is_orderable($amount, 20)) {
            return;
        }




        // se till att endast följande HTML-element är giltiga
        // en array med giltiga element
        $elements = ["p", "div", "h4"];
        if (!in_array($element, $elements)) {
            $element = "pre";
        }
        $total = calculate_total($price, $amount);
        echo "<$element> kostnad: $total</$element>";
    }
    render_total(9, 30, 40, "h2");

    ?>





    <?php

    // skapa en funktion som kontrollerar att ett värde finns mellan min och max
    // med ett inledande ! så är logiken omvänd
        
    /**
     * is_orderable
     *
     * @param  int $x
     * @param  int $max default 100, används om parametern ej används
     * @return void
     */
    function is_orderable(int $x, int $max = 100)
    {
        if ($x > 0 && $x < $max) {
            return true;
        } else {
            return false;
        }
        // som enrads alternativ return
        return ($x > 0 && $x < $max);
    }
    // anropa funktionen med de argument som ska gälla
// skapa en funktion som presenterar en persons namn och ålder.
// ex
// flisa hedenhös, 5 år
// funktionen ska ha tre parametrar förnamn, efternamn och ålder
// funktionen ska rendera resultatet som HTML
function render_result($first_name, $last_name, $age)
{
echo "<p> Mitt namn är $first_name, $last_name och jag är $age år gammal</p>";
}
render_result("Flisa", "Hedenhös", 5);
// ett exempel på hur man backend kan hantera olika språk för formulärfält

// skapa en array med standard språk
$english = ["wellcome" => "hello, wellcome to this app",
 "name" => "please enter name", 
 "reset" => "reset",
 "save" => "save",];

 $swedish = [
    "wellcome" => " hej, vällkommen till denna applikation ",
    "name" => "skriv in tditt namn", 
    "reset" => "börja om",
    "save" => "spara",
   
 ];
 $german = [
    "wellcome" => " Hi, willkommen zu dieser anwendung ",
    "name" => "schribe deinen namen", 
    "reset" => "zurücksetzen",
    "save" => "speichern",
 ];
//  skapa en array med giltiga språk
$languages = [
    "en" => $english,
    "sv" => $swedish,
    "ge" => $german, 
];
// en variabel för aktivt språk
// skulle kunna sparas i en session, eller om man i applikationen först fått möjlighet att välja...
// men nu bestämt så här...
$language = "ge";

    include "_includes/header.php";
    ?>
    <form action="#" method="post">
<p> välkommen till applikationen

</p>
    <input type="text" name="first_name" id="" placeholder="ditt förnamn">
<input type="reset" value="nollställ">
<button>spara</button>

    </form>
    <hr> <form action="#" method="post">
<p> 
<?= $languages[$language]["wellcome"]?>
</p>
    <input type="text" name="first_name" id="" placeholder=" <?= $languages[$language]["name"]?>">
<input type="reset" value="<?= $languages[$language]["reset"] ?>">
<button><?= $languages[$language]["save"] ?></button>

    </form>
    <hr> <form action="#" method="post">
<p> 

</p>
    <input type="text" name="first_name" id="" placeholder="ditt förnamn">
<input type="reset" value="nollställ">
<button>spara</button>

    </form>
    
    <h1><?= $title ?></h1>
    <?php
    include "_includes/footer.php";
    ?>
</body>

</html>