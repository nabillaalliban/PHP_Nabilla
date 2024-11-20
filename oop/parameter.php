<?php

function biodata($nama,$tmp,$tgl,$jk,$agama,$almt,$hobi){
    
    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $tmp<br>";
    echo "Tanggal Lahir : $tgl<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Agama : $agama<br>";
    echo "Alamat : $almt<br>";
    echo "Hobi : $hobi<br>";
}

biodata("Nabilla","Bandung","07","Perempuan","Islam","Sekeawi","Memasak");


function menghitung($angka1,$angka2){

    echo "Bilangan ke 1 : $angka1<br>";
    echo "Bilangan ke 2 : $angka2<br>";
    $hasil = $angka1 + $angka2;
    echo "Hasilnya : $hasil";
}

menghitung(10,20);

?>