<?php 

// Tanpa Static

class TanpaStatic {

	public $angka = 1;

	public function cetak() {
		return "Ini Angka ". $this->angka++ . " Kali. <br>";
	}

}

$obj1 = new TanpaStatic;
$obj2 = new TanpaStatic;

echo $obj1->cetak();
echo $obj1->cetak();
echo $obj1->cetak();

echo $obj2->cetak();
echo $obj2->cetak();
echo $obj2->cetak();


echo "<hr>";

//Menggunakan Static

class DenganStatic {

	public static $angka = 1;

	public function cetak() {
		return "Ini Angka " . self::$angka++ ." Kali. <br>";
	}

}

echo DenganStatic::cetak();
echo DenganStatic::cetak();
echo DenganStatic::cetak();

echo DenganStatic::cetak();
echo DenganStatic::cetak();
echo DenganStatic::cetak();