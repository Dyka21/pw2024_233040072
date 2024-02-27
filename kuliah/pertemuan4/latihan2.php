<?php

function total_volume_dua_kubus ($a, $b){
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;

    return $total ;
}
echo "total volume kubus a & b =" . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "total volume kubus c & d =" . total_volume_dua_kubus(10, 15);


?>