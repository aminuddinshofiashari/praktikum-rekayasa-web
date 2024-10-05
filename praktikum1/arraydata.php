<?php    
$arrayData = [
        "nama" => "Aminuddin",
        "usia" => 22,
        "pekerjaan" => "mahasiswa",
        "hobi" => ["Membaca", "Bersepeda", "Coding"]
    ];
    //encode array ke format json
    $jsonData = json_encode($arrayData);
    echo "Data dalam format JSON:" .$jsonData;

?>