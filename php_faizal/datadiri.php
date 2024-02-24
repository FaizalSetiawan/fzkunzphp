<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <center>
        <h1>Daftar SMK</h1>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input name="nama" type="text" placeholder="Masukkan nama"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input name="tanggal_lahir" type="date"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki_Laki" required> Laki - Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Biaya Register</td>
                    <td>:</td>
                    <td><input type="number" name="biaya" required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" required>
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="DAFTAR"</td>
                </tr>
            </table>
        </form>
</center>
    </div>
</body>
</html>
<?php 
if(isset($_POST['simpan'])) {
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$biaya = $_POST["biaya"];
$jurusan = $_POST["jurusan"];

$biayajurusan = 0;

if($jurusan == "RPL") {
    $biayajurusan = 2500000;
} else if ($jurusan == "TKRO") {
    $biayajurusan = 3000000;
} else if ($jurusan == "TBSM") {
    $biayajurusan = 3500000;
}

$total = $biaya + $biayajurusan;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo"<center>";
echo "=======STRUK REGISTER========<br>";
echo "=============================<br>";
echo "Nama : $nama <br>";
echo "Tanggal Lahir : $tanggal_lahir <br>";
echo "Jenis Kelamin : $jenis_kelamin <br>";
echo "Biaya : $biaya <br>";
echo "Jurusan : $jurusan <br>";
echo "Biaya Jurusan : $biayajurusan <br>";
echo "Total : $total <br>";
echo "</echo";
}
?>
