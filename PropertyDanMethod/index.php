<?php

//Membuat template produk
//objeknya ada 2 yaitu : komik dan game
//dan method untuk label

class Produk {

	public $judul = "s",
		   $penulis = "Penulis",
		   $penerbit = "Penerbit",
		   $harga = 0;

	public function getLabel() {
		return "Judul = $this->judul " . "<br>" . " Penerbit = $this->penerbit ";
	}

}

$produk1 = new Produk();
$produk1->judul = "The Last Of Us";
$produk1->penulis = "Neil Druckmann";
$produk1->penerbit = "Sony Playstation";
$produk1->harga = 563.000;



$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckmann";
$produk2->penerbit = "Sony Playstation";
$produk2->harga = 463.000;

echo $produk1->getLabel();
