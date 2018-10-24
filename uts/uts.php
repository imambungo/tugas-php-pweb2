<!-- M. Imam Pratama 09021281722063 -->

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
        }
        .buttonHolder {
            text-align: center;
        }
        th {
            padding-left: 15px;
            padding-right: 15px;
        }
        .data {
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST" action="output.php">
    <table>
        <tr>
            <td colspan="3" style="text-align: center">Form Pembelian Tiket Kereta Api</td>
        </tr>
        <tr>
            <td>Id Karcis</td>
            <td>:</td>
            <td>
                <select name="idkarcis">
                    <?php
                    $idkarcis = ["001", "002", "003", "004", "005", "006", "007"];
                    foreach ($idkarcis as $id) {
                        echo "<option value='$id'>$id</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Keberangkatan</td>
            <td>:</td>
            <td>
                <select name="tgl">
                    <?php
                    for ($i=1; $i <= 31; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
                    -
                <select name="bln">
                    <?php
                    for ($i=1; $i <= 12; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
                -
                <select name="thn">
                    <?php
                    for ($i=2017; $i <= 2018; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nomor Kursi</td>
            <td>:</td>
            <td>
                <select name="nokursi">
                    <?php
                    $nokursi = ["A1", "A2", "A3", "A4", "B1", "B2", "B3", "B4"];
                    foreach ($nokursi as $no) {
                        echo "<option value='$no'>$no</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                <select name="kelas">
                    <?php
                    $kelas = ["Eksekutif", "Bisnis", "Ekonomi"];
                    foreach ($kelas as $id) {
                        echo "<option value='$id'>$id</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td>:</td>
            <td>
                <input type="radio" name="tujuan" value="Palembang">Palembang <br>
                <input type="radio" name="tujuan" value="Lampung">Lampung <br>
                <input type="radio" name="tujuan" value="Lubuk Linggau">Lubuk Linggau <br>
                <input type="radio" name="tujuan" value="Lahat">Lahat <br>
                <input type="radio" name="tujuan" value="Prabumulih">Prabumulih
            </td>
        </tr>
        <tr>
            <td>Waktu Keberangkatan</td>
            <td>:</td>
            <td>
                <input type="radio" name="waktu" value="Pagi">Pagi
                <input type="radio" name="waktu" value="Siang">Siang
                <input type="radio" name="waktu" value="Malam">Malam
            </td>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td>:</td>
            <td><input type="text" name="jumlahtiket" placeholder="Masukkan jumlah tiket"></td>
        </tr>

        <!-- submit button -->
        <tr>
            <td colspan="3">
                <div class="buttonHolder">
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" value="Reset">
                </div>
            </td>
        </tr>
    </table>

    <br>
    <br>

    <table>
    <?php
    $arrayTiket = [
        [160000, 180000, 155000, 150000, 140000],
        [125000, 135000, 130000, 125000, 110000],
        [45000, 50000, 45000, 40000, 30000]
    ];
    ?>
        <tr>
            <th colspan="4">Harga Tiket</th>
        </tr>
        <tr>
            <th></th>
            <th>Eksekutif</th>
            <th>Bisnis</th>
            <th>Ekonomi</th>
        </tr>
        <tr>
            <th>Palembang</th>
            <?php
                for ($i = 0; $i < count($arrayTiket); $i++) {
                    echo"<td class='data'>";
                    echo $arrayTiket[$i][0];
                    echo"</td>";
                }
            ?>
        </tr>
        <tr>
            <th>Lampung</th>
            <?php
                for ($i = 0; $i < count($arrayTiket); $i++) {
                    echo"<td class='data'>";
                    echo $arrayTiket[$i][1];
                    echo"</td>";
                }
            ?>
        </tr>
        <tr>
            <th>Lubuk Linggau</th>
            <?php
                for ($i = 0; $i < count($arrayTiket); $i++) {
                    echo"<td class='data'>";
                    echo $arrayTiket[$i][2];
                    echo"</td>";
                }
            ?>
        </tr>
        <tr>
            <th>Lahat</th>
            <?php
                for ($i = 0; $i < count($arrayTiket); $i++) {
                    echo"<td class='data'>";
                    echo $arrayTiket[$i][3];
                    echo"</td>";
                }
            ?>
        </tr>
        <tr>
            <th>Prabumulih</th>
            <?php
                for ($i = 0; $i < count($arrayTiket); $i++) {
                    echo"<td class='data'>";
                    echo $arrayTiket[$i][4];
                    echo"</td>";
                }
            ?>
        </tr>
        <tr>
            <th colspan="4">UTS M. Imam Pratama</th>
        </tr>
    </table>
    </form>
</body>
</html>

<!-- M. Imam Pratama 09021281722063 -->
