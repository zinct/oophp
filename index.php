<?php 

interface LabelLengkap {
	public function getLabelLengkap();
}

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

class Apel extends Buah implements LabelLengkap{

	private $makan;

	public function setDiskon($diskon) {
		$this->diskon = $diskon;
	}

	public function getLabelBuah() {

		$str = "{$this->getLabel()} | $this->lokasi (Rp. $this->harga)";
		return $str;

	}


	public function __construct($rasa = "Rasa", $warna = "Warna", $harga = 0, $lokasi = "Lokasi", $makan = "Dimakan") {
		parent::__construct($rasa,$warna,$harga,$lokasi);
		$this->makan = $makan;

	}

	public function getLabelLengkap() {
		$str = "Apel : {$this->getLabelBuah()} $this->makan.";
		return $str;
	}

}

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

class InfoBuah {

	public $macamBuah = [];

	public function tambahBuah(Buah $buah) {
		$this->macamBuah[] = $buah;
	}

	public function getInfoLengkapBuah() {		

		$str = "<b>MACAM PRODUK : </b> <br>";

		foreach ($this->macamBuah as $macam) {
			$str .= "{$macam->getLabelLengkap()} <br>";
		}

		return $str;

	}

}

$buah1 = new Apel("Manis", "Merah", 25000, "Bandung", "Dikunyah");
$buah2 = new Jeruk("Asem", "Orange", 30000, "Medan", "Digigit");

$info = new InfoBuah();

$info->tambahBuah($buah1);
$info->tambahBuah($buah2);

echo $info->getInfoLengkapBuah();

echo "<hr>";