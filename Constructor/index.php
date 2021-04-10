<?php

//Membuat template produk
//objeknya ada 2 yaitu : komik dan game
//dan method untuk label

class Produk {

	public $judul = "judul",
		   $penulis = "Penulis",
		   $penerbit = "Penerbit",
		   $harga = 0;

		   //construct

	public function __construct($judul,$penulis,$penerbit,$harga) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "Judul = $this->judul " . "<br>" . " Penerbit = $this->penerbit ";
	}

}

$produk1 = new Produk("The Last Of Us","Neil Druckmann","Sony Playstation",563000);
$produk2 = new Produk("Uncharted","Neil Druckmann","Sony Playstation",463000);

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();



