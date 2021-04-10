<?php 

// require 'App/Produk/GetLabelProduk.php';
// require 'App/Produk/Produk.php';
// require 'App/Produk/Game.php';
// require 'App/Produk/Komik.php';
// require 'App/Produk/InfoProduk.php';

// require 'App/Service/User.php';
// require 'App/Produk/User.php';




spl_autoload_register(function ($class) {
	//App\Produk\User;
	$class = explode("\\", $class);

	$class = end($class);
	require_once 'Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
	//App\Service\User;
	$class = explode("\\", $class);
	$class = end($class);
	require_once 'Service/' . $class . '.php';
});