<?php 

$provinsi = "Jawa Barat";
$kota = "Bandung";

if ($provinsi == "Jawa Barat"){
    echo "Ini Provinsi Jawa Barat<br>";
    if ($kota == "Cimahi"){
        echo "Selamat Datang Di Cimahi";
    }elseif ($kota == "Bogor"){
        echo "Selamat Datang Di Bogor";
    }elseif ($kota == "Bekasi"){
        echo "Selamat Datang Di Bekasi";
    }elseif ($kota == "Depok"){
        echo "Selamat Datang Di Depok";
    }elseif ($kota == "Bandung"){
        echo "Selamat Datang Di Bandung";
    }else {
        echo "kota tidak tersedia";
    }


}elseif ($provinsi == "Jawa Timur"){
    echo "Ini Provinsi Jawa Timur<br>";
    if ($kota == "Surabaya"){
        echo "Selamat Datang Di Surabaya";
    }elseif ($kota == "Malang"){
        echo "Selamat Datang Di Malang";
    }elseif ($kota == "Mojokerto"){
        echo "Selamat Datang Di Mojokerto";
    }elseif ($kota == "Pasuruan"){
        echo "Selamat Datang Di Pasuruan";
    }elseif ($kota == "Kediri"){
        echo "Selamat Datang Di Kediri";
    }else {
        echo "kota tidak tersedia";
    }
    

}elseif ($provinsi == "Jawa Tengah"){
    echo "Ini Provinsi Jawa Tengah<br>";
    if ($kota == "Semarang"){
        echo "Selamat Datang Di Semarang";
    }elseif ($kota == "Salatiga"){
        echo "Selamat Datang Di Salatiga";
    }elseif ($kota == "Pekalongan"){
        echo "Selamat Datang Di Pekalongan";
    }elseif ($kota == "Surakarta"){
        echo "Selamat Datang Di Surakarta";
    }elseif ($kota == "Magelang"){
        echo "Selamat Datang Di Magelang";
    }else {
        echo "kota tidak tersedia";
    }



}else {
    echo "provinsi tidak tersedia";
}


?>