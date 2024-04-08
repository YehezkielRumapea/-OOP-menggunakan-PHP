<?php

//Jualan komik & Game

class produk{
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlhalaman;
    public $waktumain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
    }
    
    public function getlabel() {
        return "$this->judul, $this->harga";
    }

    public function getinfoproduk() {
        $str = " : {$this->judul} | {$this->getlabel()} (RP. {$this->harga})";
        return $str;
    }

}


class komik extends produk {
    public function getinfoproduk(){
        $str = "komik : {$this->judul} | {$this->getlabel()} (RP. {$this->harga}) - {$this->jmlhalaman} halaman.";
        return $str;
    }
}


class game extends produk {
    public function getinfoproduk(){
        $str = "game : {$this->judul} | {$this->getlabel()} (RP. {$this->harga}) - {$this->waktumain} jam.";
        return $str;
    }    
}


class cetakinfoproduk{  
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getlabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("Vagabond", "Takehiko Inoue", "Shounen Jump", 300000, 100, 0);
$produk2 = new game("BloodBorne", "FromSoftware", "Sony Computer", 499999, 0, 50);
echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
