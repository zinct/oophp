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
		return "$this->judul $this->penerbit ";
	}

}

//Class Info Produk Berfungsi Untuk Menampilkan Info Produk
class InfoProduk {

	public function info(Produk $produk) {

		$label = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

		return $label;

	}

}

$game = new Produk("The Last Of Us","Neil Druckmann","Sony Playstation",563000);
$Komik = new Produk("Hulk","Deniel Henry","Marvel",80000);

$cetak = new InfoProduk();

echo $cetak->info($game);
echo "<br>";
echo $cetak->info($Komik);





