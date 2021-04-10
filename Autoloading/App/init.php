<?php 

// require 'App/Produk/GetLabelProduk.php';
// require 'App/Produk/Produk.php';
// require 'App/Produk/Game.php';
// require 'App/Produk/Komik.php';
// require 'App/Produk/InfoProduk.php';




spl_autoload_register(function ($class) {
	require 'Produk/' . $class . '.php';
});
