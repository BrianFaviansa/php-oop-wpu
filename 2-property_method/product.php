<?php

class Product {
    public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

    public function getLable() {
        return "$this->penulis, $this->penerbit";
    }
}

$product3 = new Product();
$product3->judul = "Naruto";
$product3->penulis = "Masashi Kishimoto";
$product3->penerbit = "Shonen Jump";
$product3->harga = 30000;

$product4 = new Product();
$product4->judul = "Uncharted";
$product4->penulis = "Neil Druckmann";
$product4->penerbit = "Sony Computer";
$product4->harga = 250000;

echo "Komik : " . $product3->getLable();
echo "<br>";
echo "Game : " . $product4->getLable();
