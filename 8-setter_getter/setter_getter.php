<?php

class Product {
    private $judul, $penulis, $penerbit, $harga, $diskon = 0;

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

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }
    public function getPenulis() {
        return $this->penulis;
    }
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    public function getDiskon() {
        return $this->diskon;
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
echo "<hr>";

$product2->setDiskon(50);
echo $product2->getHarga();

echo "<hr>";

echo $product1->getJudul();


