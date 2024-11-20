<!-- <?php

class bangun_datar{

    public $luas_persegi_panjang;
    public $persegi_aja;
    public $lingkaran;
    public $segitiga;
}

class luas extends bangun_datar{

    public function persegi_panjang($panjang, $lebar){
      echo "<h3>Persegi Panjang</h3>";
      echo "Panjang : $panjang<br>";
      echo "Lebar : $lebar<br>";
      $this->luas_persegi_panjang = $panjang * $lebar;
      echo "Hasilnya : $this->luas_persegi_panjang";
    }
    public function persegi_aja($sisi1, $sisi2){
        echo "<h3>Persegi</h3>";
        echo "Sisi1 : $sisi1<br>";
        echo "Sisi2 : $sisi2<br>";
        $this->persegi_aja = $sisi1 * $sisi2;
        echo "Hasilnya : $this->persegi_aja";
    }
    public function lingkaran($pi, $r){
        echo "<h3>Lingkaran</h3>";
        echo "Phi : $pi<br>";
        echo "Jari-jari : $r<br>";
        $this->lingkaran = $pi * $r * $r;
        echo "Hasilnya : $this->lingkaran";
    }
    public function segitiga($alas, $tinggi){
        echo "<h3>Segitiga</h3>";
        echo "Alas : $alas<br>";
        echo "Tinggi : $tinggi<br>";
        $this->segitiga = $alas * $tinggi / 2;
        echo "Hasilnya ; $this->segitiga";
    }

    
}



   



?> 