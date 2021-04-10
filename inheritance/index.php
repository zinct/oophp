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

	public function __construct($judul,$penulis,$penerbit,$harga, $halaman,$jam) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->halaman = $halaman;
		$this->jam = $jam;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit ";
	}

	public function getLabelProduk() {

		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

		return $str;

	}

}

class Game extends Produk {

	public $jam = null;

	public function getLabelProduk() {

		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} - {$this->jam} Jam";

		return $str;

	}

}

class Komik extends Produk {

	public $halaman = null;

	public function getLabelProduk() {

		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman";

		return $str;

	}

}

//Class Info Produk Berfungsi Untuk Menampilkan Info Produk
class InfoProduk {

	public function info(Produk $produk) {

		$label = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $label;

	}

}

$produk1 = new Game("The Last Of Us","Neil Druckmann","Sony Playstation",563000, null, 50);
$produk2 = new Komik("Hulk","Deniel Henry","Marvel",80000, 100, null);


echo $produk1->getLabelProduk();
echo "<br>";
echo $produk2->getLabelProduk();








