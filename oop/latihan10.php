<?php

echo "<h2> Penggajihan Karyawan </h2><br>";
     
     class penggajihan {

        public $gaji; 
        public $tunjangan;
        public $tongan;
    


      public function gajipokok($nama,$jb){

        if ($jb == "Guru") {
            $this -> gaji = 5000000;
        } elseif ($jb == "Kepala Sekolah") {
            $this->gaji = 10000000;
        } elseif ($jb == "Wakasek") {
            $this->gaji = 7500000;
        } elseif ($jb    == "OB") {
            $this->gaji = 2500000;
        } else {
            $this->gaji = 0;
        }

            echo "Nama Karyawan : $nama<br>";
            echo "Jabatan : $jb  <br>" ;
            echo "Gaji Pokok : $this->gaji <br>" ;   
        }
       
        public function tunjangan($pnk,$tun){

            if ($pnk == "SD"){
                $this -> tunjangan = 500000;
            } elseif ($pnk == "SMP"){
                $this -> tunjangan = 1000000;
            } elseif ($pnk == "SMK") {
            $this->tunjangan = 1500000;
            }

            echo "Pendidikan : $pnk<br>";
            echo "Tunjangan Pendidikan : $this->tunjangan<br>";
        }

        public function potongan($tab,$pin){

            echo "Tabungan : $tab<br>";
            echo "Pinjaman : $pin<br> ";
        
            $this->tongan = $tab + $pin;
            echo "Total Potongan Gaji : $this->tongan"; 
        } 

        public function gajibersih (){

           $totalgaji = $this->gaji + $this->tunjangan - $this->tongan;
            echo "Total Gaji Bersih : $totalgaji";

        }

     }

$cetak = new  penggajihan();

echo "<b>Gaji Pokok</b><br>";
echo $cetak->gajipokok("Nabilla","Guru");
echo "<hr>";
echo "<b>Tunjangan</b><br>";
echo $cetak->tunjangan("SMK", "1500000");
echo "<hr>";
echo "<b>Potongan</b><br>";
echo $cetak->potongan("300000","50000");
echo "<hr>";
echo "<b> Total Gaji Bersih </b><br>";
echo $cetak->gajibersih("300000", "50000");
echo "<hr>";



?>