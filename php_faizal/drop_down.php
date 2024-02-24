<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown dengan PHP</title>
</head>
<body>
    <form action="proses.php" method="post">
        <label for="pilihan">Pilih sesuatu:</label>
        <select name="pilihan" id="pilihan">
            <?php
            // Contoh data yang bisa Anda ganti sesuai kebutuhan
            $options = array("Pilihan 1", "Pilihan 2", "Pilihan 3");

            // Loop melalui array untuk menambahkan opsi dropdown
            foreach ($options as $option) {
                echo "<option value=\"$option\">$option</option>";
            }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
