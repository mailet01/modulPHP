<?php


// en variabel i php inleds med dollartecken
$title = "en webbsida med php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> </title>
</head>
<body>
    
<h1><?php echo "hello world"; ?></h1>
<a href="/learn">lär dig PHP</a>

</body>
</html>