<?php
function urutan_angka ($ang)
{
    $h = 1;
    for ($i = 1; $i <= $ang; $i++) {
        for ($j = 1; $j <= $i; $j++);{
            echo $h++ . " ";
        }
        echo "<br>";
    }
}

echo urutan_angka(5);