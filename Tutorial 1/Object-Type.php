<?php

//Jualan komik & Game

class produk{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getlabel() {
        return "$this->judul, $this->harga";
    }
}

class cetakinfoproduk{  
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getlabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("Vagabond", "Takehiko Inoue", "Shounen Jump", 300.000);
echo "komik : " . $produk1->getlabel();

echo "<br>";

$produk2 = new produk("BloodBorne", "FromSoftware", "Sony Computer", 499.999);
echo "Game : " . $produk2->getlabel();

echo "<br>";

$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($produk1);