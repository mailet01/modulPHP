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
class player {
    private string $name;
    private int $strengthLevel;
    public function _construct($name, $strengthLevel) {
        $this->name = $name;
        $this->strengthLevel = $strengthLevel;
    }
}



?>
<?php 
class Person {
protected string $name;
protected int $age;
protected string $gender;
public function __construct($name, $age, $gender) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
}

    public function introduce() : void {
            echo "<p>Hello my name is {$this->name} and I am {$this->age} and also a {$this->gender}</p>";
    }
}
class Student extends Person {
    private float $gradeLevel;
    public function __construct($name, $age, $gender, $gradeLevel) {
    parent::__construct($name,$age,$gender);
    $this->gradeLevel = $gradeLevel;

    }
     public function introduce(): void
     {
    echo "<p>Hello my name is {$this->name} and I am {$this->age} and also a {$this->gender}. I am a student with {$this->gradeLevel} average grade.</p>";        
     }   
    }
    class Teacher extends Person {
        private array $subjects;
        private int $yearsOfExperience;
        public function __construct($name, $age, $gender, $subjects, $yearsOfExperience) {
            parent::__construct($name, $age, $gender);
            $this->subjects = $subjects;
            $this->yearsOfExperience = $yearsOfExperience;
        }
        public function introduce() : void {
           echo "<p>Hello my name is {$this->name} and I am {$this->age} and also a {$this->gender}. I am a teacher with {$this->yearsOfExperience} years of experience. My subjects are ". implode(', ', $this->subjects) . ".</p>";
        }
    }
$person = new Person("Julia", 30, "W");
$person->introduce();

$student = new Student("Tim", 31, "M", 3.4);
$student->introduce();

$teacher = new Teacher("Emelie", 32, "W", ["Math", "English"], 4);
$teacher->introduce();

interface Animal {
    public function eath();
    public function move();
}
class Dog implements Animal {
public function eath() {
    echo "dog is eating" . PHP_EOL;
}
public function move() {
    echo "dog is moving" . PHP_EOL;
}
public function bark() {
echo "dog is barking" . PHP_EOL;
}
public function fetch() {
    echo "dog is fetching" . PHP_EOL;
}
}
class Bird implements Animal {
public function eath() {
    echo "bird is eating" . PHP_EOL;
}
public function move() {
    echo "bird is moving" . PHP_EOL;
}
    public function fly() {
    echo "bird is flying" . PHP_EOL;
}
    public function chirp() {
    echo "bird is chirping" . PHP_EOL;
}
}
?>
</body>
</html>