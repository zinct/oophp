<?php

//Membuat template produk
//objeknya ada 2 yaitu : komik dan game
//dan method untuk label

class Produk {

	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

		   //construct

	public function __construct($judul="judul",$penulis= "Penulis",$penerbit= "Penerbit",$harga= 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
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

	public $jam;

	public function __construct($judul="judul",$penulis= "Penulis",$penerbit= "Penerbit",$harga= 0,$jam=0) {

		parent::__construct($judul,$penulis,$penerbit,$harga);

		$this->jam = $jam;

	}

	public function getLabelProduk() {

		$str = "Game : ". parent::getLabelProduk() ." ~ {$this->jam} Jam";

		return $str;

	}

}

class Komik extends Produk {

	public $halaman;

	public function __construct($judul="judul",$penulis= "Penulis",$penerbit= "Penerbit",$harga= 0,$halaman=0) {

		parent::__construct($judul,$penulis,$penerbit,$harga);
		
		$this->halaman = $halaman;

	}

	public function getLabelProduk() {

		$str = "Komik : ". parent::getLabelProduk() ." - {$this->halaman} Halaman";

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

$produk1 = new Game("The Last Of Us","Neil Druckmann","Sony Playstation",563000, 50);
$produk2 = new Komik("Hulk","Deniel Henry","Marvel",80000, 100, 50);


echo $produk1->getLabelProduk();
echo "<br>";
echo $produk2->getLabelProduk();








