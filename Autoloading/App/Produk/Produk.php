<?php 

abstract class Produk {

	//Public : Dapat Diakses Pada Smua class
	//Protected : Hanya Bisa Diakses Oleh Parent Dan Child Class
	//Private : Hanya Bisa Diakses Oleh Parent Class

	private $penulis,
		    $penerbit;

	protected $harga,
			  $judul;

	protected $diskon = 0;

	//construct
	public function __construct($judul="judul",$penulis= "Penulis",$penerbit= "Penerbit",$harga= 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}



	abstract public function getLabelLengkap(); 

	public function setJudul($judul) {
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setPenulis($penulis) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function setPenerbit($penerbit) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setHarga($harga) {
		$this->harga = $harga;
	}

	public function getHarga() {

		return $this->harga - ($this->diskon * $this->harga / 100);

	}

}