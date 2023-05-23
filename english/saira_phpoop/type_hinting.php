<?php

// class test type hinting
class Animal {
    public function eat() {
        echo "Animal is eating.";
    }
}

class Dog extends Animal {
    public function bark() {
        echo "Dog is barking.";
    }
}

class Cat extends Animal {
    public function meow() {
        echo "Cat is meowing.";
    }
}

function animalAction(Animal $animal) {
    $animal->eat();
}

$dog = new Dog();
$cat = new Cat();

animalAction($dog); // Dog sınıfı Animal sınıfından türediği için geçerli
animalAction($cat);

echo "<br><br><br>";
?>


<?php
//interface typ hinting

interface Flyable {
    public function fly();
}

class Bird implements Flyable {
    public function fly() {
        echo "Bird is flying.";
    }
}

class Airplane implements Flyable {
    public function fly() {
        echo "Airplane is flying.";
    }
}

function performFly(Flyable $flyable) {
    $flyable->fly();
}

$bird = new Bird();
$airplane = new Airplane();

performFly($bird); // Bird sınıfı Flyable arabirimini uyguladığı için geçerli
performFly($airplane); // Airplane sınıfı Flyable arabirimini uyguladığı için geçerli

echo "<br><br><br>";
?>


<?php

//self type hinting
class Vehicle {
    public function startEngine() {
        echo "Engine started.";
    }

    public function stopEngine() {
        echo "Engine stopped.";
    }

    public function move() {
        echo "Vehicle is moving.";
    }
}

class Car extends Vehicle {
    public function move() {
        echo "Car is moving.";
    }

    public function accelerate() {
        echo "Car is accelerating.";
    }
}

class Motorcycle extends Vehicle {
    public function move() {
        echo "Motorcycle is moving.";
    }

    public function wheelie() {
        echo "Motorcycle is doing a wheelie.";
    }
}

function testVehicle(Vehicle $vehicle) {
    $vehicle->startEngine();
    $vehicle->move();
    $vehicle->stopEngine();
}

$car = new Car();
$motorcycle = new Motorcycle();

testVehicle($car); // Car sınıfı Vehicle sınıfından türediği için geçerli
testVehicle($motorcycle); // Motorcycle sınıfı Vehicle sınıfından türediği için geçerli



echo "<br><br><br>";
?>


<?php
// callable type hinting


function calculate(int $num1, int $num2, callable $operation) {
    $result = $operation($num1, $num2);
    echo "Result: " . $result;
}

$addition = function($a, $b) {
    return $a + $b;
};

$subtraction = function($a, $b) {
    return $a - $b;
};

$multiplication = function($a, $b) {
    return $a * $b;
};

calculate(5, 3, $addition); // 5 + 3 = 8, Result: 8
calculate(5, 3, $subtraction); // 5 - 3 = 2, Result: 2
calculate(5, 3, $multiplication); // 5 * 3 = 15, Result: 15


echo "<br><br><br>";
?>



<?php
//scalar type hinting (bool)

function addNumbers(int $num1, int $num2): int {
    return $num1 + $num2;
}

function concatenateStrings(string $str1, string $str2): string {
    return $str1 . $str2;
}

function isEvenNumber(int $num): bool {
    return $num % 2 === 0;
}

$sum = addNumbers(5, 3); // 5 + 3 = 8
echo "Sum: " . $sum; // Output: Sum: 8

$concatenation = concatenateStrings("Hello", "World");
echo "Concatenation: " . $concatenation; // Output: Concatenation: HelloWorld

$isEven = isEvenNumber(7); // false
echo "Is Even: " . var_export($isEven, true); // Output: Is Even: false



?>