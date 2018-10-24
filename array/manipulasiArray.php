<?php

$hari = ["Senin", "Selasa", "Rabu"];

echo "aray awal : ";
print_r($hari);
echo "<hr>";

echo "array setelah di pop : ";
$hasil = array_pop($hari); // menghapus atau mengambil elemen terakhir dari array
print_r($hari);
echo "<br>elemen yang di pop : $hasil <hr>";

echo "array setelah di push : ";

?>