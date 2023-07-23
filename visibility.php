<?php

class Dosen {
    public $nama;
    private $sks; 
    protected $gaji;

    public function __construct($nama, $sks, $gaji) {
        $this->nama = $nama;
        $this->sks = $sks;
        $this->gaji = $gaji;
    }

    public function desc() {
        $str = "Info Dosen<br>
                Nama: $this->nama<br>
                Jumlah SKS: $this->sks<br>
                Gaji per bulan: Rp" . number_format($this->gaji, 0, ",", ".");

        return $str;
    }
}

class Dekan extends Dosen {
    // public function sks () {
    //     return "Jumlah SKS yang diajar $this->nama adalah $this->sks";
    // }

    public function gaji () {
        return "Gaji dari $this->nama adalah $this->gaji";
    }
}

class Kaprodi extends Dosen {
    // public function sks () {
    //     return "Jumlah SKS yang diajar $this->nama adalah $this->sks";
    // }

    public function gaji () {
        return "Gaji dari $this->nama adalah $this->gaji";
    }
}

class DosenBiasa extends Dosen {
    // public function sks () {
    //     return "Jumlah SKS yang diajar $this->nama adalah $this->sks";
    // }

    public function gaji () {
        return "Gaji dari $this->nama adalah $this->gaji";
    }
}

$dosen1 = new DosenBiasa ("Fergie Kaunang", 23, 5000000);
$dosen2 = new Dekan ("Andrew Pakpahan", 15, 10000000);
$dosen3 = new Kaprodi ("Jay Sihotang", 20, 7000000);

// $dosen1->gaji = 20000000; // akan error karena variabel protected tidak dapat diakses
// $dosen1->sks = 10; // akan error karena variabel private tidak dapat diakses
    
echo $dosen1->desc();
echo "<br><br>";
echo $dosen2->desc();
echo "<br><br>";
echo $dosen3->desc();
echo "<br><br>";
echo $dosen1->gaji();
echo "<br><br>";
// echo $dosen1->sks();

?>