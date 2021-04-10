<?php 

require 'App/init.php';

$produk1 = new Game("The Last Of Us","Neil Druckmann","Sony Playstation",563000, 50);
$produk2 = new Komik("Hulk","Deniel Henry","Marvel",80000, 100);

$cetakProduk = new InfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->infoLengkapProduk();
