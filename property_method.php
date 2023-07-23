<?php

class Product {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel () {
        return "Buku ini berjudul $this->judul dan ditulis oleh $this->penulis";
    }
}
echo "<pre>";
// $product1 = new Product();
// $product1->judul = "Naruto";
// var_dump($product1);

// $product2 = new Product();
// $product2->judul = "Uncharted";
// $product2->tambahProperty = "hahaha";
// var_dump($product2);

$product2 = new Product();
$product2->judul = "Desires of Ages";
$product2->penulis = "Ellen G White";
$product2->penerbit = "Gramedia";
$product2->harga = 50000;
var_dump($product2);
echo "</pre>";

echo $product2->getLabel(); 
?>