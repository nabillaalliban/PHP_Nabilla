<?php 


class bangun_datar{

    public $luassegi;
    public $luasper;
    public $luasjang;
    public $luaskaran;
        
function segitiga($alas,$tinggi,$a){

    echo "Alas : $alas<br>";
    echo "Tinggi : $tinggi<br>";
    echo "Rumus : 1/2 (Alas x Tinggi)<br>";
    
    $this->luassegi = $alas * $tinggi;
    echo "Luas : $this->luassegi";
}

function persegi($sisi1,$sisi2){

    echo "Sisi 1 : $sisi1<br>";
    echo "Sisi 2 : $sisi2<br>";
    echo "Rumus : Sisi x Sisi<br>";
    
    $this->luasper = $sisi1 * $sisi2;
    echo "Luas : $this->luasper";
}
function persegipanjang($panjang,$lebar){
    echo "Panjang : $panjang<br>";
    echo "Lebar : $lebar<br>";
    echo "Rumus : P x L<br>";
   
    $this->luasjang = $panjang * $lebar;
    echo "Luas : $this->luasjang";
}
function lingkaran($pi,$r){
    echo "Phi : $pi<br>";
    echo "Jari-jari : $r<br>";
    echo "Rumus : Phi x R<br>";
    
    $this->luaskaran = $pi * $r;
    echo "Luas : $this->luaskaran";
}


}

$cetak = new  bangun_datar();

echo "<b>Segitiga</b><br>";
echo $cetak->segitiga(10,20,2);
echo "<hr>";
echo "<b>Persegi</b><br>";
echo $cetak->persegi(20,20);
echo "<hr>";
echo "<b>Persegi Panjang</b><br>";
echo $cetak->persegipanjang(20,3);
echo "<hr>";
echo "<b>Lingkaran</b><br>";
echo $cetak->lingkaran(2.15,5);


?>