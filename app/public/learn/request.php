<?php 
declare(strict_types=1);

include "_includes/global-functions.php";

$title = "GET och POST Request";



// kontrollera postrequest
print_r2($_POST);

// deklarera variabler som kan visa ett värde i olika formulärfält
$first_name = "";

$country = "";
$message = "";
$email = "";
$condition = "";
$date = "";
// om en post request har gjorts ändra variablers värden
if ($_SERVER['REQUEST_METHOD'] === "POST") {
// kolla first_name
$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "";

// se till att inga blanksteg finns i strängen
$first_name = trim($first_name);
// kolla country
$country = isset($_POST['country']) ? $_POST['country'] : "";
// kolla message
$message = isset($_POST['message']) ? $_POST['message'] : "";
print_r2("Textarea innan htmlspecialchars... ");
print_r2($message);
// eventuella html element kan förhindras med den inbyggda php funktionen htmlspecialchars
// https://www.php.net/manual/en/function.htmlspecialchars.php
// funktionen ser till att följande tecken kodas om som html entity: &"'<>
$message = htmlspecialchars($message);
print_r2($message);
print_r2("Textarea efter htmlspecialchars... ");
// kolla email
$email = isset($_POST['email']) ? $_POST['email'] : "";
// kolla condition
$condition = isset($_POST['condition']) ? $_POST['condition'] : "";
// kolla date
$date = isset($_POST['date']) ? $_POST['date'] : "";
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $title?></title>
</head>
<body>
<?php 
include "_includes/header.php";

?>    
<!-- visa title i ett h1 element -->

<h1><?= $title?></h1>
<a href="<?= $_SERVER['PHP_SELF']?>">läs in sidan igen</a>
<!-- ett formulär med olika fält -->
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<p>
    förnamn:
    <input type="text" name="first_name" id="" value="<?= $first_name ?>">
    
    </p>
    <p>
    Land:<br>
    <select name="country" id="">
    <option value="sweden">Sverige</option>
    <option value="norway"></option>
    <option value="denmark" <?= $country === "denmark" ? "selected" : "" ?>>Danmark</option>
    </select>

</p>

<p>
    dina tankar om programmering: <br>
    <textarea name="message" id="" cols="30" rows="10"></textarea>
</p>
<p>
e-post: <br>
<input type="email" name="email" id="" value="<?= $email ?>">

</p>
<p>
<input type="checkbox" name="condition" id="" value="1" <?= $condition === "1" ? "checked" : "" ?>> Jag vill inte bli kontaktad igen... 


</p>
<p>
ditt datum:
<input type="date" name="date" id="" value="<?= $date ?>">


</p>


<p>


<input type="submit" value="skicka">
</p>
<p>
<input type="email" name="e-post" id="">


</p>





</form>

<?php 
// phpinfo();
// print_r($_SERVER);
?>

<?php 
include "_includes/footer.php";

?>



?>


</body>
</html>