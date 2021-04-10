<?php 

class Komik extends Produk implements GetLabelProduk {

	public $halaman;

	public function __construct($judul="judul",$penulis= "Penulis",$penerbit= "Penerbit",$harga= 0,$halaman=0) {

		parent::__construct($judul,$penulis,$penerbit,$harga);
		
		$this->halaman = $halaman;

	}

	public function getLabelLengkap() {

		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

		return $str;

	}	

	public function getLabelProduk() {

		$str = "Komik : ". $this->getLabelLengkap() ." - {$this->halaman} Halaman";

		return $str;

	}

}