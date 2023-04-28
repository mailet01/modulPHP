<?php 
$title = "repetition loopar";
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
<h1>repetition</h1>    
<?php
$twoDimArr = [
    [1,2,3],
    [4,5,6,7],
    [8,9],
];
        //echo "$1, $4, $7";
// använd funktionen var_dum för att skriva ut arrayn till domen
// skriv ut hela 2-dim arrayen med en forloop


$total = 0;

for ($i=0; $i < count($twoDimArr); $i++) { 
    $innerArrLength = count($twoDimArr[$i]);

for ($k=0; $k < $innerArrLength; $k++) { 
        $total += $twoDimArr[$i] [$k];
    }

}
echo "total: $total";


// itteration 1: i = 0 , k = 0
// itteration 2: i = 0 , k = 1
// itteration 3: i = 0 , k = 2
// itteration 4: i = 1 , k = 0
// itteration 5: i = 1 , k = 1
// itteration 6: i = 1 , k = 2
// itteration 7: i = 1 , k = 3
// itteration 8: i = 3 , k = 0
// itteration 9: i = 2 , k = 1
?>

<br>
<?php 
$mounths = ["januari, februari, mars, april,"];

for ($i=0; $i < count($mounths); $i++) { 
    echo $mounths [$i ];
}


?> 
<br>
<?php 
$days = ["måndag, tisdag, onsdag, torsdag, fredag, lördag, söndag"];
for ($i=0; $i < count($days); $i++) { 
    echo $days [$i];
}

?>
<br>
<?php 
$years = ["2001, 2002, 2003, 2004, 2005"];
for ($i=0; $i <count($years) ; $i++) { 
    echo $years [$i];
}

?>


</body>
</html>