<?php
//buat class
class manusia{
    
        public $nama = "Bintang";
        public $nama2 = "Fajar";
        public $nama3 = "Faizal";
        public $jenis_kelamin;

        //buat method /function
        public function makan(){
            echo "$this->nama suka makan ayam";
        }
        public function minum(){
            echo"$this->nama2 suka minum power f";
        }
        public function mandi(){
            echo"$this->nama3 suka mandi pake sabun Life Boy";
        }
    

}
//buat cetak
$cetak = new manusia();
echo $cetak ->makan();
echo "<br>";
echo $cetak ->minum();
echo"<br>";
echo $cetak ->mandi();
?>