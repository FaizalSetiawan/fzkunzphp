<?php

class manusia{
    public $nama = "Balmond Cakeup";

    private function tampilkam_nama(){
        echo "Namasaya malasngoding <br/>";
    }
    public function keluarkan(){
        $this->tampilkam_nama();
    }
}

$cetak = new manusia();

echo $cetak->keluarkan();

echo $cetak->nama;