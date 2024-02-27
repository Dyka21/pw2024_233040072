<?php
// https://www.php.net/manual/en/datetime.format.php
echo date('j/n/Y');
echo "<br>";
echo date('l , j F Y');
echo "<br>";
time();
echo "<br>";
echo date("F" , time() + 24 * 60 * 60 * 100);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);
echo "<br>";
echo date("l", mktime(0 , 0, 0, 12, 21, 2005));


