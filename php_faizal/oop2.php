<?php
class BangunDatar {
    // Buat property/atribut
    public $sisi = 7;
    public $panjang = 20;
    public $lebar = 10;
    public $alas = 6;
    public $tinggi = 8;
    public $jari_jari = 4;
    public $phi = 3.14;

    // Buat method/function
    public function luasPersegi() {
        echo "<h3> Menghitung Luas Persegi </h3>";
        echo "Rumus: Sisi X Sisi<br>";
        $hasil_persegi = $this->sisi * $this->sisi;
        echo "Sisi: " . $this->sisi . "<br>";
        echo "Luasnya: " . $hasil_persegi . "<br>"; 
    }

    public function luasPersegiPanjang() {
        echo "<h3> Menghitung Luas Persegi Panjang </h3>";
        echo "Rumus: Panjang X Lebar<br>";
        $hasil_persegi_panjang = $this->panjang * $this->lebar;
        echo "Panjang: " . $this->panjang . "<br>";
        echo "Lebar : " . $this->lebar . "<br>";
        echo "Luasnya: " . $hasil_persegi_panjang . "<br>"; 
    }
    
    public function luasSegitiga(){
        echo "<h3> Menghitung Luas Segitiga </h3>";
        echo "Rumus: L = 1/2 x a x t <br>";
        $hasil_segitiga = 0.5 * $this->alas * $this->tinggi;
        echo "Alas: " . $this->alas . "<br>";
        echo "Tinggi: " . $this->tinggi . "<br>";
        echo "Luasnya: " . $hasil_segitiga . "<br>"; 
    }
    
    public function luasLingkaran(){
        echo "<h3>Menghitung Luas Lingkaran</h3>";
        echo "Rumus: π x r x r <br>";
        $hasil_luas_lingkaran = $this->phi * $this->jari_jari * $this->jari_jari;
        echo "Jari:" . $this->jari_jari . "<br>";
        echo "Phi:". $this->phi . "<br>";
        echo "luasnya:". $hasil_luas_lingkaran . "<br>";
    }
}

// Buat objek
$cetak = new BangunDatar();

// Panggil metode untuk menghitung luas persegi, persegi panjang, segitiga, dan lingkaran
$cetak->luasPersegi();
$cetak->luasPersegiPanjang();
$cetak->luasSegitiga();
$cetak->luasLingkaran();
?>
