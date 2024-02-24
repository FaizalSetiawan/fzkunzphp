<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Diri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <center>
    <h2> Form Biodata Diri </h2>
    <!--form-->
    <form method="POST" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type='text' name='umur'></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type='date' name='tanggal_lahir'></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type='radio' name='jenis_kelamin' value='Laki - Laki'>Laki - Laki
                    <input type='radio' name='jenis_kelamin' value='Perempuan'>Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name='alamat' cols= "30" rows= "5"></textarea>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                        <option value=""></option>
                        <optiom value="null">null</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Katolik">Katolik</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikan">
                        <option value=""></option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMK">SMK</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
             </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><select name="status">
                       <option value=""></option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Pekerja">Pekerja</option>
            </select>
            </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type='text' name='hobi'></td>
            </tr>
            <tr>
                <td>Cita - Cita</td>
                <td>:</td>
                <td><input type='text' name='cita'></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value='KIRIM'></td>
            </tr>
        </table>
    </form>
  </center>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];

    echo "<center>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "======= BIODATA DIRI ======<br>";
    echo "===========================<br>";
    echo "Nama = $nama <br>";
    echo "Umur = $umur <br>";
    echo "Tanggal Lahir = $tanggal_lahir <br>";
    echo "Jenis Kelamin = $jenis_kelamin <br>";
    echo "Alamat = $alamat <br>";
    echo "Agama = $agama <br>";
    echo "Pendidikan Terakhir = $pendidikan <br>";
    echo "Status = $status <br>";
    echo "Hobi = $hobi <br>";
    echo "Cita - Cita = $cita <br>";
    echo "</center>";
}
?>
