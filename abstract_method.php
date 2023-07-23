<?php

abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Membuat objek Dog dan Cat
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

// Memanggil metode makeSound dari objek Dog dan Cat
echo $dog->makeSound() . "<br>";
echo $cat->makeSound();

?>