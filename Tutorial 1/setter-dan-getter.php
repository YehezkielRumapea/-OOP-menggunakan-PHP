<?php

//Jualan komik & Game

class produk{
    private $judul;
    private $penulis;
    private $penerbit;
    private $harga;
    private $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    

    public function setjudul($judul) {
        $this->judul = $judul;
    }


    public function getjudul(){
        return $this->judul;
    }

    public function setpenulis($penulis) {
        $this->penulis = $penulis;
    }


    public function getpenulis(){
        return $this->penulis;
    }

    
    public function setpenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }


    public function getpenerbit(){
        return $this->penerbit;
    }


    public function setDIskon( $diskon) {
        $this->diskon = $diskon;
    }

    public function getdiskon(){
        return $this->diskon;
    }


    public function setharga($harga) {
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
echo "<hr>";
$produk1->setjudul("kiel");
echo $produk1->getjudul();