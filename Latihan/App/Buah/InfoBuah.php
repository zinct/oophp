<?php 

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