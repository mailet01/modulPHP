<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>loopar</h1>
<?php
for ($i = 1; $i <11; $i++) {
    echo $i .",";
}

?>

<?php
while ($a <= 20) {
if ($a % 2 == 0) {
    echo $a . PHP_EOL;

} $a++
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
}

?>

<?php
echo "<table>";
for ($row =0; $row < $nrows; $row += 1) {
    echo "<tr>";
    for ($col=0; $col < $ncols; $col+= 1) {
        echo "<td> class="black"" 
        # code...
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
</body>
</html>




