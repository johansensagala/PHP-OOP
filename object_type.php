<?php

class StudentUnai {
    public $name, $nim, $major, $gpu;

    public function __construct ($name, $nim, $major, $gpu){
        $this->name = $name;
        $this->nim = $nim;
        $this->major = $major;
        $this->gpu = $gpu;
    }
}

class StudentPolmed {
    public $name, $nim, $major, $gpu;

    public function __construct ($name, $nim, $major, $gpu){
        $this->name = $name;
        $this->nim = $nim;
        $this->major = $major;
        $this->gpu = $gpu;
    }
}

class IntroUnai {
    public function intro (StudentUnai $student){
        $str = "$student->name ($student->nim) is a $student->major student with GPU: $student->gpu";

        return $str;
    }
}


$student1 = new StudentUnai("Johansen", 2081031, "Informatics Engineering", 3.83);
$student2 = new StudentPolmed("Irpan", 1905021009, "Civil Engineering", 3.9);

echo "<pre>";
var_dump($student1);
var_dump($student2);
echo "</pre><br>";

$student1intro = new IntroUnai();
$student2intro = new IntroUnai();

echo $student1intro->intro($student1);
echo "<br>";
// echo $student2intro->intro($student2); // akan error

?>