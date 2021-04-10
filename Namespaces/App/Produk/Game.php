<?php 

class Game extends Produk implements GetLabelProduk {

	public $jam;

	public function __construct($judul="judul",$penulis= "Penulis",$penerbit= "Penerbit",$harga= 0,$jam=0) {

		parent::__construct($judul,$penulis,$penerbit,$harga);

		$this->jam = $jam;

	}

	public function getLabelLengkap() {

		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";

		return $str;

	}	

	public function getLabelProduk() {

		$str = "Game : ". $this->getLabelLengkap() ." ~ {$this->jam} Jam";

		return $str;

	}

	//Set Diskon
	public function setDiskon($diskon) {
		$this->diskon = $diskon;
	}

}