<?php

class Student {
    public $name, $nim, $gpu;
    
    public function __construct ($name, $nim, $gpu) {
        $this->name = $name;
        $this->nim = $nim;
        $this->gpu = $gpu;
    }
}

$student1 = new Student("Johansen Sagala", 2081031, 3.83);

echo "<pre>";
var_dump($student1);
echo "</pre>";

?>