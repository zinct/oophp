<?php 

class Jeruk extends Buah implements LabelLengkap{

	private $makan;

	public function __construct($rasa = "Rasa", $warna = "Warna", $harga = 0, $lokasi = "Lokasi", $makan = "Dimakan") {
		parent::__construct($rasa,$warna,$harga,$lokasi);
		$this->makan = $makan;

	}

	public function getLabelBuah() {

		$str = "{$this->getLabel()} | $this->lokasi (Rp. $this->harga)";
		return $str;

	}

	public function getLabelLengkap() {
		$str = "Jeruk : {$this->getLabelBuah()} $this->makan.";
		return $str;
	}

}