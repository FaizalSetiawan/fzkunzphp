<pre>
<?php

$nama = @$_REQUEST['nama'];
$email = @$_REQUEST['email'];
$usia = @$_REQUEST['usia'];
$tanggal_lahir = @$_REQUEST['tanggal_lahir'];
$jenis_kelamin = @$_REQUEST['jenis_kelamin'];
$status = @$_REQUEST['status'];
$hobi = @$_REQUEST['hobi'];

echo "<<h1>Form Pendaftaran</h1>";
echo "Nama : $nama<br>";
echo "Email : $email<br>";
echo "Usia : $usia<br>";
echo "Tanggal_lahir : $tanggal_lahir<br>";
echo "Jenis Kelamin : $jenis_kelamin<br>";
echo "status : $status<br>";
echo "hobi : $hobi<br>";

?>
</pre>