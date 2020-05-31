<?php

// Deklarasi Fungsi
function GetQuranJuz() {
    $juz = Flight::request()->data->juz; // Deklarasi Variable
    $curl = curl_init(); // Deklarasi Variable 
    
    // Mulai Hit API Juz
    curl_setopt_array($curl, array(
  	CURLOPT_URL => "http://api.alquran.cloud/v1/juz/{$juz}/en.asad",
        CURLOPT_RETURNTRANSFER => true,
  	CURLOPT_ENCODING => "",
  	CURLOPT_MAXREDIRS => 10,
  	CURLOPT_TIMEOUT => 0,
  	CURLOPT_FOLLOWLOCATION => true,
  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  	CURLOPT_CUSTOMREQUEST => "GET",
    ));

    // Simpan Response
    $response = curl_exec($curl);

    // Close Connection
    curl_close($curl);
    
    // Balikin ke yang Manggil Fungsi Ini
    Flight::json(array(
        "served by"=>"API Localhost Kita",
        "data"=>json_decode($response)
    ));
}

?>
