<?php
// luas //
$r = 10;
echo "<h4>Menghitung Luas Lingkaran</h4>";

function menghitungluaslingkaran($r) 
{
    return 3.24 * $r * $r;
}
echo "Jari-Jari=" . $r . "cm.";
echo "<br>";
echo "Luas Lingkaran=" . menghitungluaslingkaran($r) . "cm2";

echo "<hr>";



// keliling//
$r =20;

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function menghitungkelilinglingkaran ($r)
{
    return 3.14 * 2 * $r;
}
echo "Jari-Jari=" . $r . "cm.";
echo "<br>";
echo "Keliling Lingkaran=" . menghitungkelilinglingkaran($r) . 'cm2';

echo "<hr>";





?>