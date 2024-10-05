<?php
// Variabel yang berisi data JSON
$json_string = '{"nama":"Aminuddin", "umur":22, "hobi":["coding","membaca","bermain game"], "alamat":{"kota":"Jepara", "provinsi":"Jawa Tengah"}}';

// Decode JSON menjadi PHP object
$obj = json_decode($json_string);

// Decode JSON menjadi PHP array
$arr = json_decode($json_string, true);

// Akses nilai menggunakan PHP object
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi pertama: " . $obj->hobi[1] . "<br>";
echo "Kota: " . $obj->alamat->kota . "<br>";
