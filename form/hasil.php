<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $potongan_lainnya = $_POST['potongan_lainnya'];


    if($lama_kerja >= 5) {
        $tunjangan = 1000000;
     } else {
        $tunjangan = 0;
     }
     if($status_kerja == "Tetap") {
        $bonus = 500000;
     } else {
        $bonus = 0;
     }
    

    if ($jabatan == "Guru") {
        $gaji_pokok = 5000000; 
    } elseif($jabatan == "Kepala Sekolah") {
        $gaji_pokok = 10000000;
    } elseif($jabatan == "Wakasek") {
        $gaji_pokok = 7500000;
    } elseif ($jabatan == "OB") {
        $gaji_pokok = 2500000;
    } else {
        $gaji_pokok = 0;
    }

     $total_gaji = $gaji_pokok + $bonus + $tunjangan;

     
    $total_potongan = $bpjs + $pinjaman + $tabungan + $potongan_lainnya;

    
    $gaji_bersih = $total_gaji - $total_potongan;

    
    
    echo "<h2>Slip Gaji Karyawan</h2>";
    echo "No: $no<br>";
    echo "Nama: $nama<br>";
    echo "Unit Pendidikan: $unit<br>";
    echo "Tanggal Gaji: $tanggal_gaji<br>";
    echo "Jabatan: $jabatan<br>";
    echo "Lama Kerja: $lama_kerja tahun<br>";
    echo "Status Kerja: $status_kerja<br>";
    echo "<h4>Rincian Gaji</h4>";
    echo "Gaji Pokok: Rp" . number_format($gaji_pokok, 0, ',', '.') . "<br>";
    echo "Tunjangan Lama Kerja: Rp" . number_format($tunjangan, 0, ',', '.') . "<br>";
    echo "Bonus : $bonus<br>";
    echo "Gaji Kotor: Rp" . number_format($total_gaji, 0, ',', '.') . "<br>";
    echo "<h4>Potongan</h4>";
    echo "BPJS: Rp" . number_format($bpjs, 0, ',', '.') . "<br>";
    echo "Pinjaman: Rp" . number_format($pinjaman, 0, ',', '.') . "<br>";
    echo "Tabungan: Rp" . number_format($tabungan, 0, ',', '.') . "<br>";
    echo "Potongan Lainnya: Rp" . number_format($potongan_lainnya, 0, ',', '.') . "<br>";
    echo "Total Potongan: Rp" . number_format($total_potongan, 0, ',', '.') . "<br>";
    echo "<h4>Gaji Bersih: Rp" . number_format($gaji_bersih, 0, ',', '.') . "</h4>";
    
}
?>