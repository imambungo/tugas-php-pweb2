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
    </style>
</head>
<body>
    <form method="POST" action="kirim.php">
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
                <input type="radio" name="waktukeberangkatan" value="Pagi">Pagi
                <input type="radio" name="waktukeberangkatan" value="Siang">Siang
                <input type="radio" name="waktukeberangkatan" value="Malam">Malam
            </td>
        </tr>
        


        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Masukkan nama"></td>
        </tr>
        <tr>
            <td valign="top">Alamat</td>
            <td valign="top">:</td>
            <td><textarea name="alamat" id="" cols="30" rows="5" placeholder="Masukkan alamat"></textarea></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jk" value="pria">pria
                <input type="radio" name="jk" value="wanita">wanita
            </td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
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
                    for ($i=1980; $i < 2018; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td valign="top">Hobi</td>
            <td valign="top">:</td>
            <td>
                <input type="checkbox" name="hobi[]" value="Ngoding">Ngoding<br>
                <input type="checkbox" name="hobi[]" value="Main voli">Main voli<br>
                <input type="checkbox" name="hobi[]" value="Berenang">Berenang<br>
            </td>
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
    </form>
    <?php
    
    ?>
</body>
</html>