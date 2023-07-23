<?php

class Matkul {
    public $nama, $jlhsks, $dosen;

    public function __construct($nama, $jlhsks, $dosen)
    {
        $this->nama = $nama;
        $this->jlhsks = $jlhsks;
        $this->dosen = $dosen;
    }

    public function intro() {
        $str = "Mata Kuliah: $this->nama<br>
                Jumlah SKS: $this->jlhsks<br>
                Dosen: $this->dosen";

        return $str;
    }

    public static function description() {
        return "Ini adalah mata kuliah yang diajarkan di FTI UNAI";
    }
}

$matkul1 = new Matkul("Administrasi Basis Data", 3, "Fergie Kaunang");

// echo "<pre>";
// var_dump($matkul1);
// echo "</pre>";

echo $matkul1->intro() . "<hr>"; // pemanggilan dengan menggunakan object

echo Matkul::description();// pemanggilan dengan menggunakan class

?>