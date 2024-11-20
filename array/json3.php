<?php 
     //data Json 

     $dataJSON = '[
          {
     "nama" : "Jefri Nichol",
     "alamat" : "Jakarta"
},
 {
     "nama" : "Maudy Ayunda",
     "alamat" : "Jakarta"
}
     
     ]' ;

     //dikonversikan ke JSON 
     $list = json_decode($dataJSON);

     //tampilan data
     foreach($list as $mahasiswa){
        echo "Nama : {$mahasiswa->nama} <br>";
        echo "Alamat : {$mahasiswa->alamat} <br>";
        echo "<hr>";
     }
     ?>