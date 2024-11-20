<?php

$jurusan = "RPL";
$kelas = "10 TKRO";


if($jurusan == "RPL"){
    
    if($kelas == "10 RPL"){
        echo "ini kelas 10 RPL";
    }elseif ($kelas == "11 RPL"){
        echo "ini kelas 11 RPL";
    }elseif ($kelas == "12 RPL"){
        echo "ini kelas 12 RPL";
    }else {
        echo "kelas tidak tersedia";
    }

}elseif ($jurusan == "TKRO"){
    if($kelas == "10 TKRO"){
        echo "ini kelas 10 TKRO";
    }elseif ($kelas == "11 TKRO"){
        echo "ini kelas 11 TKRO";
    }elseif ($kelas == "12 TKRO"){
        echo "ini kelas 12 TKRO";
    }else {
        echo "kelas tidak tersedia";
    }


}elseif ($jurusan == "TBSM"){
    echo "ini jurusan TBSM";
}else{
    echo "jurusan tidak tersedia";
}

    

?>