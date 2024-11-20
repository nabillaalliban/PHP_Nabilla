<?php

$nama = "Nabilla Wardani";
$kelas = "Xi Rpl 1";


$nilai1 = 80;
$nilai2 = 70;
$nilai3 = 80;
$nilai4 = 90;
$rata2 = $nilai1 + $nilai2 + $nilai3 + $nilai4;
$rata2 /= 4;

echo "Nama : $nama<br>";
echo "Kelas: $kelas<br>";
echo "Nilai B indo : $nilai1<br>";
echo "Nilai B inggris : $nilai2<br>";
echo "Matematika : $nilai1 <br>";
echo "Produktif : $nilai4 <br>";
echo "Rata-rata : $rata2";
echo "<hr>";
if($rata2 > 75){
    echo " Status Anda lulus";
}else {
    echo "Status Anda Tidak Lulus";         
}



    ?>

