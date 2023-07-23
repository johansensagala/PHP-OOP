<?php

class Mahasiswa {
    public $nama, $nim, $ipk;

    public function __construct($nama, $nim, $ipk) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->ipk = $ipk;
    }

    public function desc () {
        return "Ini adalah mahasiswa UNAI";
    }
}

class MahasiswaLulus extends Mahasiswa {
    public function desc () {
        return parent::desc() . " yang sudah lulus";
    }
}

class MahasiswaTidakLulus extends Mahasiswa {
    public function desc () {
        return parent::desc() . " yang belum lulus";
    }
}

$mahasiswa1 = new Mahasiswa("Johansen Sagala", 2081031, 3,83);
$mahasiswa2 = new MahasiswaLulus("Irpan Buri Siburian", 2081032, 3,90);
$mahasiswa3 = new MahasiswaTidakLulus("Jonatan Situmorang", 2081033, 3,87);



echo "<pre>";
var_dump($mahasiswa1);
var_dump($mahasiswa2);
var_dump($mahasiswa3);
echo "</pre>";

echo $mahasiswa1->desc();
echo "<br>";
echo $mahasiswa2->desc();
echo "<br>";
echo $mahasiswa3->desc();

?>