<?php

//Jualan komik & Game

class produk{
    public $judul = 'judul';
    public $penulis = 'penulis';
    public $penerbit = 'penerbit';
    public $harga = 0 ;
}

$produk1 = new produk();
$produk1-> judul ="Vagabond";
$produk1-> penulis = "Takehiko Inoue";
$produk1-> penerbit = "Shounen Jump";
$produk1-> harga = "300.000";
echo "Komik : $produk1->judul, $produk1->harga";
$produk2 = new produk();