<?php
function luasPersegi(){
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Rumus Sisi X Sisi<br>";
    
    // Tentukan nilai sisi
    $sisi = 5;

    // Hitung luas persegi
    $hasil_persegi = $sisi * $sisi;

    echo "Sisi: $sisi<br>";
    echo "Luasnya: $hasil_persegi<br>";
}

function luasPersegiPanjang() {
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Rumus: Panjang X Lebar<br>";

    // Tentukan nilai panjang dan lebar
    $panjang = 5;
    $lebar = 6;
    
    // Hitung luas persegi panjang
    $hasil_luas_persegi_panjang = $panjang * $lebar;

    echo "Panjang: $panjang <br>";
    echo "Lebar: $lebar <br>";
    echo "Luasnya: $hasil_luas_persegi_panjang <br>";
}
function lingkaran(){
    echo"<h3>Menghitung Luas Lingkaran";
    echo"Rumus: Jari
}

// Panggil fungsi luasPersegi dan luasPersegiPanjang
luasPersegi();
echo "<hr>";
luasPersegiPanjang();

?>
