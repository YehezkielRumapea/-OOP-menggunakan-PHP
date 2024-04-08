<?php

//Jualan komik & Game

class produk{
    public $judul;
    public $penulis;
    public $penerbit;
    private $harga;
    private $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    



    public function getharga(){
        return $this->harga - ( $this->harga * $this->diskon / 100);
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
    public $jmlhalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0){
        
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlhalaman);

        $this->jmlhalaman = $jmlhalaman;

    }

    public function getinfoproduk(){
        $str = "komik : " . parent::getinfoproduk() . " - {$this->jmlhalaman} halaman.";
        return $str;
    }
}


class game extends produk {
    public $waktumain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktumain);

        $this->waktumain = $waktumain;
    }

    public function setDIskon( $diskon) {
        $this->diskon = $diskon;
    }


    public function getinfoproduk(){
        $str = "game : " . parent::getinfoproduk() . " - {$this->waktumain} jam.";
        return $str;
    }    
}


class cetakinfoproduk{  
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getlabel()} (RP. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("Vagabond", "Takehiko Inoue", "Shounen Jump", 300000, 100);
$produk2 = new game("BloodBorne", "FromSoftware", "Sony Computer", 499999, 50);
echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
echo "<hr>";
$produk2->setDIskon(50);
echo $produk2->getharga();

