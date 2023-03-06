<?php
$hari = array ("senin", "selasa", "rabu");
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];
//menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
