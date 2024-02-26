<?php

class Product {
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLable() {
        return "$this->penulis, $this->penerbit";
    }
}

class PrintProductInfo {
    public function cetak($product) {
        $str = "{$product->judul} | {$product->getLable()}, {$product->harga}";
        return $str;
    }
}

// constructor dijalankan otomatis setiap objek dari class tersebut di instansiasi

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $product1->getLable();
echo "<br>";
echo "Game : " . $product2->getLable();

$product1Info = new PrintProductInfo();
echo $product1Info->cetak($product1);
