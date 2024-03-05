<?php
// 1. membuat array
$hari = array ( "senin", "selasa", "rabu",);
$bulan = ["januari", "feb", "mar"];
$mhs = ["dyka", 3.2, false];
// 2. mencetak array (1)
// cetak 1 nilai menggunakan index
echo $hari [0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";
// cetak seluruh isi array
// var-dump () atau print_r()
// digunaka untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
// 3. manipulasi array
// menambah isi array
// di alhir array : [] atau array_push ()
$hari[] = "kamis";
print_r($hari);
echo "<br>";
array_push($bulan, "april");
print_r($bulan);
echo "<br>";
//  diawal array pakai array_unshift()
array_unshift($mhs, "233040072");
print_r($mhs);
echo "<hr>";
// meghapus isi array
// di belakang : array_pop
// di depan : array_shift
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);



// 4. mencetak array (2)