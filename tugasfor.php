<!-- M. Imam Pratama -->
<?php
$angka = 10;
$kali = 8;
$bagi = 4;
$kurang = 6;
$tambah = 2;
echo "Aku adalah angka $angka.<br>";
$angka *= $kali;
echo "jika aku dikali $kali, jumlahku sekarang $angka.<br>";
$angka /= $bagi;
echo "jika aku dibagi $bagi, jumlahku sekarang $angka.<br>";
$angka -= $kurang;
echo "jika aku dikurang $kurang, jumlahku sekarang $angka.<br>";
$angka += $tambah;
echo "jika aku ditambah $tambah, jumlahku sekarang $angka.<br>";

function isPrima($a) {
    for ($i = 2; $i < $a/2; $i++)
        if ($a%$i == 0)
            return false;
    return true;
}

for ($i=1; $i < 16; $i++) { 
    echo "angka $i adalah bilangan ";
    if ($i % 2 == 0)
        echo "ganjil";
    else
        echo "genap";
    if (isPrima($i) && $i > 1)
        echo " dan bil prima";
    echo "<br>";
}

$n = 8;

for ($i=1; $i <= $n; $i++) { 
    $k = $i;
    for ($j=1; $j <= $i; $j++) { 
        echo "$k\t";
        $k += $n-$j;
    }
    echo "<br>";
}


?>
