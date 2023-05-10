<?php
$title = "klasser";
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
    <h1>playerclass</h1>
    <?php
    class player
    {
        private string $name;
        private int $strengthLevel;
        public function _construct($name, $strengthLevel)
        {
            $this->name = $name;
            $this->strengthLevel = $strengthLevel;
        }
    }



    ?>
    <?php
    class Person
    {
        protected string $name;
        protected int $age;
        protected string $gender;
        public function __construct($name, $age, $gender)
        {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function introduce(): void
        {
            echo "<p>Hello my name is {$this->name} and I am {$this->age} and also a {$this->gender}</p>";
        }
    }
    class Student extends Person
    {
        private float $gradeLevel;
        public function __construct($name, $age, $gender, $gradeLevel)
        {
            parent::__construct($name, $age, $gender);
            $this->gradeLevel = $gradeLevel;
        }
        public function introduce(): void
        {
            echo "<p>Hello my name is {$this->name} and I am {$this->age} and also a {$this->gender}. I am a student with {$this->gradeLevel} average grade.</p>";
        }
    }
    class Teacher extends Person
    {
        private array $subjects;
        private int $yearsOfExperience;
        public function __construct($name, $age, $gender, $subjects, $yearsOfExperience)
        {
            parent::__construct($name, $age, $gender);
            $this->subjects = $subjects;
            $this->yearsOfExperience = $yearsOfExperience;
        }
        public function introduce(): void
        {
            echo "<p>Hello my name is {$this->name} and I am {$this->age} and also a {$this->gender}. I am a teacher with {$this->yearsOfExperience} years of experience. My subjects are " . implode(', ', $this->subjects) . ".</p>";
        }
    }
    $person = new Person("Julia", 30, "W");
    $person->introduce();

    $student = new Student("Tim", 31, "M", 3.4);
    $student->introduce();

    $teacher = new Teacher("Emelie", 32, "W", ["Math", "English"], 4);
    $teacher->introduce();

    ?>
    <?php
    interface Animal {
        public function eat();
        public function move();
    }
class Dog implements Animal {            
        public function Eat() {
    
            echo "dog is eating" . PHP_EOL;
        }
        public function move() {
            echo "dog is moving" . PHP_EOL;
        }
        public function bark() {
            echo "dog is barking" . PHP_EOL;
        }
        public function fetch() {
            echo "dog is fetching". PHP_EOL;
        }
    }
    class Bird implements Animal {
        public function eat() {
            echo "bird is eating" . PHP_EOL;
        }
        public function move() {
            echo "bird is moving" . PHP_EOL;
        }
        public function fly() {
            echo "bird is flying" . PHP_EOL;
        }
        public function chirp() {
            echo "bird is chirping" ;
        }
    }
    




// Create a new instance of the Dog class

$myDog = new Dog();


// Call the eat method on the $myDog instance

$myDog->eat();
$myDog->move();
$myDog->bark();
$myDog->fetch();
$myBird = new Bird();
$myBird->eat();
$myBird->move();
$myBird->fly();
$myBird->chirp();
?>
<?php 
interface Vehicle {
public function start();
public function stop();
}
class Car implements Vehicle {
private $started = false;
public function start() {
    if (!$this->started) {
echo "starting the car.. \n";
$this->started = true;
    }
}
public function stop() {
if (!$this->started) {
    echo "stopping the car... \n";
    $this->started = false;
}
}
public function drive() {
    if (!$this->started) {
        echo "driving the car... \n";
    } else {
        echo "cannot drive, the car is not starting. \n";
    }
}
public function park() {
    if (!$this->started) {
        echo "parking the car... \n";
    } else {
        echo "cannot park, the car is still running.\n";
    }
}
}
class Motorcycle implements Vehicle {
private $started = false;
public function start() {
    if (!$this->started) {
        echo "starting the motorcycle... \n";
        $this->started = true;
    }
}
public function stop() {
    if (!$this->started) {
echo "stopping the motorcycle... \n";
    }
}
public function ride() {
    if (!$this->started) {
        echo "riding the motorcycle...\n";
    } else {
echo "cannot ride, the motorcycle is not starting.\n";
    }
}
public function stunt() {
    if (!$this->started) {
echo "performing a stunt on the motorcycle.\n";
    } else {
echo "cannot perform a stunt, the motorcycle is still running.\n";
    }
}
}
$car = new Car();
$car->start();
$car->stop();
$car->drive();
$car->park();
$motorcycle = new Motorcycle();
$motorcycle->start();
$motorcycle->stop();
$motorcycle->ride();
$motorcycle->stunt();
?>
<?php 
class Product {
    protected $name;
protected $price;
protected $category;
public function __construct($name, $price, $category) {
$this->name = $name;
$this->price = $price;
$this->category = $category;
}
public function calculateTax() {
switch ($this->category) {
    case 'book':
return $this->price * 0.05;
case 'clothing':
    return $this->price * 0.1;
    case 'elektronics':
        return $this->price * 0.15;
default:
return 0;
}
}
public function getName() {
    return $this->name;
}
public function getPrice() {
    return $this->price;
}
public function getCategory() {
    return $this->category;
}
}
class Book extends Product {
protected $author;
protected $publisher;
public function __construct($name, $price, $category, $author, $publisher) {
parent::__construct($name, $price, $category);
$this->author = $author;
$this->publisher = $publisher;
}
public function getAuthor() {
return $this->author;
}
public function getPublisher() {
    return $this->publisher;
}
}
class Clothing extends Product {
protected $size;
protected $material;
public function __construct($name, $price, $category, $size, $material) {
parent::__construct($name, $price, $category);
$this->size = $size;
$this->material = $material;
}
public function getSize() {
    return $this->size;
}
public function getMaterial() {
return $this->material;
}
}
class Electronics extends Product {
protected $brand;
protected $warranty; 
public function __construct($name, $price, $category, $brand, $warranty) {
parent::__construct($name, $price, $category);
$this->brand = $brand;
$this->warranty = $warranty;
}
public function getBrand() {
return $this->brand;
}
public function getWarranty() {
return $this->warranty;
}
}
?>
</body>
</html>