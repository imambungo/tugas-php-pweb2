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
$tujuan = $_POST['tujuan'];
$waktu = $_POST['waktu'];
$waktu = $_POST['waktu'];
$jumlahtiket = $_POST['jumlahtiket'];
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
        .buttonHolder {
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
            <td colspan="3">Selamat datang <?echo $nama; ?></td>
        </tr>
        <tr>
            <td valign="top">Alamat</td>
            <td valign="top">:</td>
            <td><?echo $alamat ?></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td>
                <?
                if (isset($_POST['jk'])) {
                    echo $_POST['jk'];
                }
                ?>

                <!-- <?echo $jk; ?> -->
            </td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td>
                <?echo "$tgl-$bln-$thn"; ?>
            </td>
        </tr>
        <tr>
            <td valign="top">Hobi</td>
            <td valign="top">:</td>
            <td>
            <?php
            if (isset($_POST['submit'])) { //to run PHP script on submit
                if (!empty($_POST['hobi'])) {
                    // Loop to store and display values of individual checked checkbox.
                    foreach ($_POST['hobi'] as $selected) {
                        echo "- $selected</br>";
                    }
                } else {
                    echo "Tidak ada";
                }
            }
            ?>
            </td>
        </tr>
    </table>
</body>
</html>