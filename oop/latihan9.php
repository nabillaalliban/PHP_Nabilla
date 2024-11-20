<?php

function segitiga($alas,$tinggi,$a){

    echo "Alas : $alas<br>";
    echo "Tinggi : $tinggi<br>";
    echo "Rumus : 1/2 (Alas x Tinggi)<br>";
    $hasil = $alas * $tinggi / 2;
    echo "Hasilnya ; $hasil";
}


function persegi($sisi1,$sisi2){

    echo "Sisi 1 : $sisi1<br>";
    echo "Sisi 2 : $sisi2<br>";
    $hasil = $sisi1 * $sisi2;
    echo "Hasilnya : $hasil";
}
function persegipanjang($panjang,$lebar){
    echo "Panjang : $panjang<br>";
    echo "Lebar : $lebar<br>";
    $hasil = $panjang * $lebar;
    echo "Hasilnya : $hasil";
}
function lingkaran($pi,$r){
    echo "Phi : $pi<br>";
    echo "Jari-jari : $r<br>";
    $hasil = $pi * $r * $r;
    echo "Hasilnya : $hasil";
}

segitiga(10,20,2);
echo "<hr>";
persegi(20,20);
echo "<hr>";
persegipanjang(20,3);
echo "<hr>";
lingkaran(2.15,5);
