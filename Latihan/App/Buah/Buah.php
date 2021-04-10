	<?php 

abstract class Buah {

	protected $rasa,$warna,$harga,$lokasi;

	protected $diskon = 0;

	public function __construct($rasa = "Rasa", $warna = "Warna", $harga = 0, $lokasi = "Lokasi") {

		$this->rasa = $rasa;
		$this->warna = $warna;
		$this->harga = $harga;
		$this->lokasi = $lokasi;

	}

	public function setHarga($harga) {
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon) / 100;
	}

	public function setWarna($warna) {
		$this->warna = $warna;
	}

	public function getWarna() {
		return $this->warna;
	}

	public function setLokasi($lokasi) {
		$this->lokasi = $lokasi;
	}

	public function getLokasi() {
		return $this->lokasi;
	}

	public function setRasa($rasa) {
		$this->rasa = $rasa;
	}

	public function getRasa() {
		return $this->rasa;
	}

	public function getLabel() {
		$str = "{$this->warna}, {$this->rasa}";
		return $str;
	}
	
	abstract public function getLabelBuah();
	
}