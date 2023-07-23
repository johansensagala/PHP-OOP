<?php

interface Shape {
    public function getArea();
    public function getPerimeter();
}

class Rectangle implements Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2 * ($this->length + $this->width);
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Menggunakan objek dengan tipe interface
$rectangle = new Rectangle(4, 5);
$circle = new Circle(3);

echo "Luas rectangle: " . $rectangle->getArea() . "<br>";
echo "Keliling rectangle: " . $rectangle->getPerimeter() . "<br>";

echo "Luas circle: " . $circle->getArea() . "<br>";
echo "Keliling circle: " . $circle->getPerimeter() . "<br>";

?>