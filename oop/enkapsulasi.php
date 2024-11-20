<?php 

//contoh public
   class contoh{

    public $nama = "Nabilla";

    public function perkenalan(){
        echo "Assalamualikum<br>";
    }
   }
    
   $cetak = new contoh();

   echo $cetak->perkenalan();
   echo $cetak->nama;

?>