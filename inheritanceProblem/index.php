<?php

//Membuat template produk
//objeknya ada 2 yaitu : komik dan game
//dan method untuk label

class Produk {

	public $judul = "judul",
		   $penulis = "Penulis",
		   $penerbit = "Penerbit",
		   $harga = 0,
		   $halaman = "halaman",
		   $jam = "jam",
		   $jenis = "Jenis";

		   //construct

	public function __construct($judul,$penulis,$penerbit,$harga, $halaman,$jam,$jenis) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->halaman = $halaman;
		$this->jam = $jam;
		$this->jenis = $jenis;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit ";
	}

	public function getLabelLengkap() {

		$str = "{$this->jenis} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

		if ($this->jenis == "Game") {
			$str .= "- $this->jam Jam.";
		}

		elseif ($this->jenis == "Komik") {
			$str .= "- $this->halaman Halaman";
		}

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

$game = new Produk("The Last Of Us","Neil Druckmann","Sony Playstation",563000, null, 50, "Game");


$Komik = new Produk("Hulk","Deniel Henry","Marvel",80000, 100, null, "Komik");


echo $game->getLabelLengkap();
echo "<br>";
echo $Komik->getLabelLengkap();

$cetak = new InfoProduk();







