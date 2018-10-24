<!-- M. Imam Pratama 09021281722063 -->

<?php
$idkarcis = $_POST['idkarcis'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$nokursi = $_POST['nokursi'];
$nokursi = $_POST['nokursi'];
$kelas = $_POST['kelas'];
$kelas = $_POST['kelas'];
$tujuan = $_POST['tujuan'];
$waktu = $_POST['waktu'];
$jumlahtiket = $_POST['jumlahtiket'];

$harga = tentukanHarga($kelas, $tujuan);

function tentukanHarga($kelas, $tujuan){
    $arrayTiket = [
        [160000, 180000, 155000, 150000, 140000],
        [125000, 135000, 130000, 125000, 110000],
        [45000, 50000, 45000, 40000, 30000],
    ];

    if ($kelas == "Eksekutif") $i = 0;
    if ($kelas == "Bisnis") $i = 1;
    if ($kelas == "Ekonomi") $i = 2;
    if ($tujuan == "Palembang") $j = 0;
    if ($tujuan == "Lampung") $j = 1;
    if ($tujuan == "Lubuk Linggau") $j = 2;
    if ($tujuan == "Lahat") $j = 3;
    if ($tujuan == "Prabumulih") $j = 4;
    return $arrayTiket[$i][$j];
}

$totalHarga = $jumlahtiket * $harga;

$pajak = $totalHarga/10;
$totalBayar = $totalHarga + $pajak;

?>

<!DOCTYPE html>
<html>
<head>
    <title>latihan1</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        table {
            margin: auto;
            /* table-layout: fixed; */
        }
        .center {
            text-align: center;
        }
        td {
            word-wrap:break-word;
            max-width: 200px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td colspan="3" class="center">DATA PEMBELIAN KARCIS</td>
        </tr>
        <tr>
            <td>ID Karcis</td>
            <td>:</td>
            <td><?echo $idkarcis ?></td>
        </tr>
        <tr>
            <td>Tanggal Keberangkatan</td>
            <td>:</td>
            <td>
                <?echo "$tgl-$bln-$thn"; ?>
            </td>
        </tr>
        <tr>
            <td>No Kursi</td>
            <td>:</td>
            <td>
                <?echo $nokursi ?>
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                <?echo $kelas ?>
            </td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td>:</td>
            <td>
                <?echo $tujuan ?>
            </td>
        </tr>
        <tr>
            <td>Waktu</td>
            <td>:</td>
            <td>
                <?echo $waktu ?>
            </td>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td>:</td>
            <td>
                <?echo $jumlahtiket ?>
            </td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td>
                <?echo $totalHarga ?>
            </td>
        </tr>
        <tr>
            <td>Pajak</td>
            <td>:</td>
            <td>
                <?echo $pajak ?>
            </td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td>
                <?echo $totalBayar ?>
            </td>
        </tr>
    </table>
</body>
</html>

<!-- M. Imam Pratama 09021281722063 -->
