<?php

class Person {
    private $name;
    private $age;

    // Setter untuk properti "name"
    public function setName($name) {
        $this->name = $name;
    }

    // Getter untuk properti "name"
    public function getName() {
        return $this->name;
    }

    // Setter untuk properti "age"
    public function setAge($age) {
        $this->age = $age;
    }

    // Getter untuk properti "age"
    public function getAge() {
        return $this->age;
    }
}

// Membuat objek Person
$person = new Person();

// Menggunakan setter untuk mengubah nilai properti "name"
$person->setName("Johansen Sagala");

// Menggunakan setter untuk mengubah nilai properti "age"
$person->setAge(21);

// Menggunakan getter untuk mengambil nilai properti "name" dan "age"
echo "Nama: " . $person->getName() . "<br>";
echo "Umur: " . $person->getAge();

?>