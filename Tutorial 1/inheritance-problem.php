<?php

//Jualan komik & Game

class produk{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlhalaman;
    public $waktumain;
    public $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe = "") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }
    
    public function getlabel() {
        return "$this->judul, $this->harga";
    }

    public function getinfolengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (RP. {$this->harga})";
        if( $this->tipe == "Komik") {
            $str .= "- {$this->jmlhalaman} halaman.";
        } else if($this->tipe == "Game") {
            $str .= "- {$this->waktumain} jam.";
        }
        return $str;
    }

}

class cetakinfoproduk{  
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getlabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("Vagabond", "Takehiko Inoue", "Shounen Jump", 300000, 100, 0, "Komik");
$produk2 = new produk("BloodBorne", "FromSoftware", "Sony Computer", 499999, 0, 50, "Game");
echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();
