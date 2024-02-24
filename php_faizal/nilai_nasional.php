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
        <h2>Nilai Ujian Nasional</h2>
        <!--form-->
        <form method="POST" action="">
            <table>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><input type='text' name='nisn'></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type='text' name='kelas'></td>
                </tr>
            </table>

            <h2>Nilai Ujian</h2>

            <table>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>:</td>
                    <td><input type='text' name='indonesia'></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>:</td>
                    <td><input type='text' name='inggris'></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>:</td>
                    <td><input type='text' name='matematika'></td>
                </tr>
                <tr>
                    <td>Produktif</td>
                    <td>:</td>
                    <td><input type='text' name='produktif'></td>
                </tr>
            </table>

            <input type="submit" name="simpan" value='KIRIM'>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $indonesia = $_POST['indonesia'];
    $inggris = $_POST['inggris'];
    $matematika = $_POST['matematika'];
    $produktif = $_POST['produktif'];

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
    echo "======= NILAI UJIAN NASIONAL ======<br>";
    echo "===========================<br>";
    echo "NISN = $nisn <br>";
    echo "Nama = $nama <br>";
    echo "Kelas = $kelas <br>";
    echo "<h2>Nilai Ujian</h2>";
    echo "Bahasa Indonesia = $indonesia <br>";
    echo "Bahasa Inggris = $inggris <br>";
    echo "Matematika = $matematika <br>";
    echo "Produktif = $produktif <br>";
    echo "</center>";
}
?>
