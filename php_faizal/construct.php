<?php

class contoh{
    public function __construct(){
        echo"Assalamualaikum Uhkti <br>";
    }
    public function perkenalan(){
        echo "Nama Saya Fakhri<br>";
    }
    public function __destruct(){
        echo "Halo Tatan";
    }
}
$cetak = new contoh();
echo $cetak->perkenalan();




?>