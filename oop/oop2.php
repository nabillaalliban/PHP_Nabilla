<?php

class ppdb{

    public function biodata($nama,$jurusan,$jk,$tanggall,$tempatlh){

        echo "Nama Lengkap : $nama";
        echo "Jurusan : $jurusan";
        echo "Jenis Kelamin : $jk";
        echo "Tempat Lahir : $tempatlh";
        echo "Tanggal Lahir : $tanggall";
    }

    public function calon($prov,$kota,$kec,$desa,$alamat,$kode){

        echo "Provinsi : $prov";
        echo "Kab / Kota : $kota";
        echo "Kecamatanm : $kec";
        echo "Desa : $desa";
        echo "Alamat : $alamat";
        echo "Kode pos : $kode";
    }
    
    public function asal($namaskl,$almtskl){
        echo "Asal Sekolah : $namaskl";
        echo "Alamat Sekolah : $almtskl";
    }
    
    public function ortu($namaortu,$pkrjaortu,$no,$alamat){
        echo "Nama Ayah/ Ibu/ Wali : $namaortu";
        echo "Perkerjaan Ortu : $pkrjaortu";
        echo "No Yang Bisa Di Hub : $no";
        echo "Alamat : $alamat";
    }

}

$cetak = new ppdb();
echo "<b>Data Diri Calon</b><br><br>";
echo $cetak->biodata("Nabilla<br>","Rpl<br>","Permpuan<br>","7<br>","Bandung<br>");
echo "<hr>";
echo "<b>Alamat Calon</b><br><br>";
echo $cetak->calon("Jawa Barat<br>","Bandung<br>","Margahayu<br>","Sayati<br>","Komplek Permata Kopo<br>","40228<br>");
echo "<hr>";
echo "<b>Data Asal Sekolah</b><br><br>";
echo $cetak->asal("Mts Nurul Iman<br>","Cibaduyut<br>");
echo "<hr>";
echo "<b>Data Orang Tua</b><br><br>";
echo $cetak->ortu("Astri<br>","Ibu Rumah Tangga<br>","082216623288<br>","Komplek Mutiara<br>");

?>