<?php

class Product {
    public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLable() {
        return "$this->penulis, $this->penerbit";
    }

    public function getDetailedInfo() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        if($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman";
        } else if ($this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam";            
        }

        return $str;
    }
}

class PrintProductInfo {
    public function print(Product $product) {
        $str = "{$product->judul} | {$product->getLable()} (Rp. {$product->harga})";
        return $str;
    }
}

// constructor dijalankan otomatis setiap objek dari class tersebut di instansiasi

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $product1->getDetailedInfo();
echo "<br>";
echo $product2->getDetailedInfo();
