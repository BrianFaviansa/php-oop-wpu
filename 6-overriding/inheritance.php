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

    public function getProductInfo() {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Product {
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getProductInfo() {
        $str = "Komik : " . parent::getProductInfo() . " - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Product{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getProductInfo()
    {
        $str = "Game : " . parent::getProductInfo() . " ~ {$this->waktuMain} Jam";
        return $str;        
    }
}

class PrintProductInfo {
    public function print(Product $product) {
        $str = "{$product->judul} | {$product->getLable()} (Rp. {$product->harga})";
    }
}
// constructor dijalankan otomatis setiap objek dari class tersebut di instansiasi

$product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $product1->getProductInfo();
echo "<br>";
echo $product2->getProductInfo();
