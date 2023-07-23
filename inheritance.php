<?php

// class parent
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

// Kelas child

// Kelas basis data
class BasisData extends Matkul {
    public $materi = ["Normalisasi", "Membuat tabel", "Analisis Data dalam Query"];

    public function __construct($jlhsks, $dosen)
    {
        $this->nama = "Basis Data";
        $this->jlhsks = $jlhsks;
        $this->dosen = $dosen;
    }

    public function cetak () {
        $str = "Mata Kuliah: Basis Data<br>
            Jumlah SKS: $this->jlhsks<br>
            Dosen: $this->dosen<br>
            Materi: <br>";

        foreach($this->materi as $materi){
            $str .= "- $materi <br>";
        }

        return $str;
    } 
}

// Kelas pemrograman web
class PemrogramanWeb extends Matkul {
    public $materi = ["Internet", "Front End Web", "Back End Web"];

    public function __construct($jlhsks, $dosen)
    {
        $this->nama = "Pemrograman Web";
        $this->jlhsks = $jlhsks;
        $this->dosen = $dosen;
    }

    public function cetak () {
        $str = "Mata Kuliah: Pemrograman Web<br>
            Jumlah SKS: $this->jlhsks<br>
            Dosen: $this->dosen<br>
            Materi: <br>";

        foreach($this->materi as $materi){
            $str .= "- $materi <br>";
        }

        return $str;
    } 
}

// Kelas struktur data
class StrukturData extends Matkul {
    public $materi = ["Sorting", "Searching", "Indexing"];

    public function __construct($jlhsks, $dosen)
    {
        $this->nama = "Struktur Data";
        $this->jlhsks = $jlhsks;
        $this->dosen = $dosen;
    }

    public function cetak () {
        $str = "Mata Kuliah: Struktur Data<br>
            Jumlah SKS: $this->jlhsks<br>
            Dosen: $this->dosen<br>
            Materi: <br>";

        foreach($this->materi as $materi){
            $str .= "- $materi <br>";
        }

        return $str;
    } 
}

$basisdata1 = new BasisData(3, "Fergie Kaunang");
$web1 = new PemrogramanWeb(3, "Andrew Pakpahan");
$strukturdata = new BasisData(3, "Jay Sihotang");

// echo "<pre>";
// var_dump($test);
// echo "</pre>";

echo $basisdata1->cetak();
echo "<br>";
echo $web1->cetak();
echo "<br>";
echo $strukturdata->cetak();

?>