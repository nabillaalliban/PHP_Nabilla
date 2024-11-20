<?php

class kucing{

    var $warna;
    var $jenis;
 
    public function makan(){

        echo "Kucing suka makan whiskas";
    }
    public function minum(){

        echo "Kucing suka minum air";
    }
}

$cetak = new kucing();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";

echo $cetak->warna = " Warna Oren";
echo "<br>";
echo $cetak->jenis = " Jenis Anggora";
echo "<br>";

?>