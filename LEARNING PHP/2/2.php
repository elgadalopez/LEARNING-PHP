<?php

class Produk {
    public $judul = "judul",
           $penyanyi = "penulis",
           $penulis = "penerbit",
           $judul = 0,
}


$produk1 = new Produk();
$produk1->judul = "Afgan";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Afgan";
$produk2->Tampil = "GBK";
var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Ku dengganya kau dengan dia";
$produk3->penyanyi = "Afgan";
$produk3->penulis = "Anggara Yogha Prakasa";
