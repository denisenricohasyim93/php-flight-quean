<?php

// import library atau file
require 'flight/Flight.php';
require 'api.php';

Flight::route('POST /GetQuranJuz', 'GetQuranJuz'); // POST Endpoint URI , Fungsi ada di api.php

Flight::start();

?>
