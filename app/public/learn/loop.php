<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loopar</title>
</head>
<body>
    <h1>loopar</h1>
<?php
for ($i = 1; $i <11; $i++) {
    echo $i .",";
}

?>

<?php
$a=20;
// while ($a <= 20) {
// if ($a % 2 == 0) {
    // echo $a . PHP_EOL;

// } $a++
?>
<?php
$num = 0;
// $randomNumber = -1;
do {
    $randomNumber = rand(0,10);
echo "Number is: " . $num . "<br>";
} while ($num !== 5);
?>
<?php
$person = ["name" => "Bob", "age" => 25, "hobby" => "cooking", "hasDrivingLicence" => true];
foreach($person as $key => $val) {

    echo "element: " . $key . " => " . $val . "<br>" . PHP_EOL;
}

?>
<?php

for ($i=1; $i <= 10; $i++) {
    echo "$i: ";
        for ($k = 1; $k <= 10; $k++) {
        echo $i * $k . " ";
    }
echo "<br>";
    }


?>

<?php
echo "<table>";
for ($row =0; $row < $nrows; $row += 1) {
    echo "<tr>";
    for ($col=0; $col < $ncols; $col+= 1) {
        echo "<td>class=black</td>";
    }
}

?>
<?php

$numbers = [2,4,6,8];
$total = 0;

foreach ($numbers as $num) {
    $total += $num;
}
echo "Total: $total" . PHP_EOL;
?>
<?php
// repetition
// skapa 2 arrayer med samma storlek av siffror
// gör en forloop som skriver ut summorna av elementet
$numbers = [1,2,3];
for ($numbers=1; $numbers <3 ; $numbers1++) { 
echo $numbers [$numbers]. " ";
}
$numbers1 = [2,4,6,8];
for ($numbers1=2; $numbers1 <8 ; $numbers1++) { 
echo $numbers1 [$numbers1]. " ";
}


?>

<?php
// skapa en array med strängar som tillsammans blir en mening
// använd en forloop för att skriva ut hela meningen
$words = ["hej, jag, mår, bra, idag,"];

    // echo $words[0];
for ($i=0; $i < count($words); $i++) { 
    echo $words [$i]. " ";
}


?>

<?php
// använd en forloop för att skriva ut siffrorna 1 till 10

for ($i=1; $i <= 10; $i++) { 
    echo $i ." ";
    # code...
}


?>
<?php
[
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
        echo "$1, $4, $7";

?>
</body>
</html>




