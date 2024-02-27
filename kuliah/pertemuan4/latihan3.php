<?php
function cetak_angka($k){
    for ($i = 1; $i <= $k; $i++) {
        for ($t = 1; $t <= $i; $t++) {
            echo "$t";
        }
    echo "<br>";
    }
}
cetak_angka(5);
echo "<hr>";
cetak_angka(10);

