<?php 

//Constant yaitu sebuah identifikasi / identiifier yang digunakan untuk menyimpan sebuah nilai yang bersifat tetap.
//Dua Syntax

//1. Define("NamaConstant", "Nilai");
//2. Const NamaConstant = "Nilai";

// Syntax Define tidak bisa digunakan pada oop php
// Syntax Const Bisa Digunakan pada oop php

class Constant {

	const NAMA = "Indra Mahesa";

	public function cetak() {
		return self::NAMA . " Umur 16";
	}
	

}

// Memanggilnya sama seperti Static || Tidak Menggunakan Objek

echo Constant::NAMA;
echo "<br>";
echo Constant::cetak();

echo "<hr>";

// Magic Constant
// __LINE__
// Di gunakan untuk mencetak nomor baris dalam kode. 

// __FILE__
// Digunakan untuk mencetak lokasi penyimpanan file yang di jalankan.

// __DIR__
// Di gunakan untuk melihat direktori penyimpanan file PHP.

// __FUNCTION_
// Di gunakan untuk mencetak nama sebuah fungsi.

// __CLASS_
// Di gunakan untuk melihat nama class yang di pakai.

// __METHOD__
// Di gunakan untuk melihat nama method.

// __NAMESPACE__
// Di gunakan untuk melihat namescape.
class Coba {

	public $magic;

	public function cetak() {
		return "Function : " .__FUNCTION__ . "<br> Class : " .__CLASS__ . "<br> Method : " . __METHOD__ ;
	}
}

$obj = new Coba;

echo $obj->cetak();
echo "<br>";
echo __NAMESPACE__;






