<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <center>
        <form method="post" action="">
            <div>
                <label>Nama</label> <br>
                <input name="nama" type="text" placeholder="Masukkan nama">
            </div>
            <div>
                <label>Alamat</label> <br>
                <input name="alamat" type="text" placeholder="Masukkan alamat">
            </div>
            <div>
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </center>
    <?php
    echo "<center>"; // Add a semicolon at the end of this line

    $nama = @$_POST["nama"];
    $alamat = @$_POST["alamat"];
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    if ($nama) {
        echo "<strong>Nama:</strong> {$nama} <br>";
    }

    if ($alamat) {
        echo "<strong>Alamat:</strong> {$alamat} <br>";
    }

    echo "</center>"; // Add a semicolon at the end of this line
    ?>
</body>
</html>
