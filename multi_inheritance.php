<?php

trait Greetings {
    public function sayHello() {
        echo "Hello! ";
    }
}

trait Farewells {
    public function sayGoodbye() {
        echo "Goodbye!";
    }
}

class Person {
    use Greetings, Farewells;
}

$person = new Person();
$person->sayHello(); // Output: Hello!
$person->sayGoodbye(); // Output: Goodbye!

?>