<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $olahraga = $_POST["olahraga"];
    $kelas = isset($_POST["kelas"]) ? $_POST["kelas"] : [];
    $kemampuan_fisik = $_POST["fisik"];
    $pembayaran = $_POST["pembayaran"];

    // Inisialisasi harga
    $harga = 0;

    // Perhitungan harga berdasarkan kategori olahraga dan kelas
    if ($olahraga == "Sepak Bola") {
        $harga += ($kelas == "Pemula") ? 200000 : (($kelas == "Menengah") ? 250000 : 300000);
    } elseif ($olahraga == "Bulu Tangkis") {
        $harga += ($kelas == "Pemula") ? 150000 : (($kelas == "Menengah") ? 200000 : 250000);
    } elseif ($olahraga == "Renang") {
        $harga += ($kelas == "Pemula") ? 180000 : (($kelas == "Menengah") ? 220000 : 270000);
    }

    // Diskon untuk peserta wanita yang memilih bulu tangkis
    if ($jenis_kelamin == "Wanita" && $olahraga == "Bulu Tangkis") {
        $diskon = 0.1 * $harga;
        $harga -= $diskon;
    } else {
        $diskon = 0;
    }

    // Total harga
    $total_harga = $harga;

    // Keputusan: tambahan merchandise gratis jika total harga melebihi Rp 500.000
    $merchandise_gratis = ($total_harga > 500000) ? "Anda mendapatkan merchandise gratis!" : "";

    // Tampilkan hasil
    echo "<center>";
    echo "<h1> Form Pendaftaran </h1>";
    echo "Nama Lengkap : $nama <br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "Pilihan Kategori Olahraga : $olahraga <br>";
    echo "Pilihan Kelas : " . implode(", ", $kelas) . "<br>";
    echo "Kemampuan Fisik : $kemampuan_fisik <br>";
    echo "Pembayaran : $pembayaran <br>";
    echo "Harga : Rp " . number_format($harga) . "<br>";
    echo "Diskon : Rp " . number_format($diskon) . "<br>";
    echo "Total Harga : Rp " . number_format($total_harga) . "<br>";
    echo "$merchandise_gratis <br>";
    echo "</center>";
}
?>

<!-- formulir_pendaftaran.php -->
<form action="" method="POST">
    <!-- (Bagian formulir di sini sesuai dengan spesifikasi yang diberikan) -->
</form>
