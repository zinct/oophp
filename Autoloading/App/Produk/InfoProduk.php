<?php 

//Class Info Produk Berfungsi Untuk Menampilkan Info Produk
class InfoProduk {

	public $daftarProduk = [];

	public function tambahProduk(Produk $produk) {

		$this->daftarProduk[] = $produk;

	}

	public function infoLengkapProduk() {

		$str = "<b>DAFTAR PRODUK : </b> <br>";

		foreach($this->daftarProduk as $produk) {

			$str .= "{$produk->getLabelProduk()} <br>";			

		}

		$s = count($this->daftarProduk);

		$str .= "<hr>";

		$str .= "Total = {$s} Produk.";


		return $str;

	}

}