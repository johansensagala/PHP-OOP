<?php

class Circle {
    const PI = 3.14159;
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return self::PI * $this->radius * $this->radius;
    }
}

// Membuat objek Circle
$circle = new Circle(5);

// Mengakses konstanta PI
echo "Nilai PI: " . Circle::PI . "<br>";

// Menghitung luas lingkaran
echo "Luas lingkaran: " . $circle->calculateArea();

?>