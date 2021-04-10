<?php 

require 'App/init.php';

// $buah1 = new App\Buah\Apel("Manis", "Merah", 25000, "Bandung", "Dikunyah");
// $buah2 = new Jeruk("Asem", "Orange", 30000, "Medan", "Digigit");

// $info = new InfoBuah();

// $info->tambahBuah($buah1);
// $info->tambahBuah($buah2);

// echo $info->getInfoLengkapBuah();

// echo "<hr>";

use App\Buah\User as BuahUser;
use App\Service\User as ServiceUser;

new BuahUser;
echo "<br>";
new ServiceUser;