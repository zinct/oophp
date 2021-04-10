<?php 

// require 'Buah/LabelLengkap.php';
// require 'Buah/Buah.php';
// require 'Buah/Apel.php';
// require 'Buah/Jeruk.php';
// require 'Buah/InfoBuah.php';

// require 'Buah/User.php';
// require_once 'Service/User.php';


spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	require_once 'Buah/' . $class . '.php';
});

spl_autoload_register(function ($class) {
	$class = explode("\\", $class);
	$class = end($class);
	require_once 'Service/' . $class . '.php';
});

