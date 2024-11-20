<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jurusan = $_POST['jurusan'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $provinsi = $_POST['provinsi'];
    $kab_kota = $_POST['kab_kota'];
    $kecamatan = $_POST['kecamatan'];
    $desa_kelurahan = $_POST['desa_kelurahan'];
    $alamat = $_POST['alamat'];
    $kode_pos = $_POST['kode_pos'];
    $nama_asal_sekolah = $_POST['nama_asal_sekolah'];
    $alamat_asal_sekolah = $_POST['alamat_asal_sekolah'];
    $nama_orangtua = $_POST['nama_orangtua'];
    $pekerjaan = $_POST['pekerjaan'];
    $no_hp_orangtua = $_POST['no_hp_orangtua'];
    $alamat_orangtua = $_POST['alamat_orangtua'];

    
    echo "<h2>Data Siswa Baru</h2>";
    echo "Jurusan: $jurusan<br>";
    echo "Nama Lengkap: $nama_lengkap<br>";
    echo "Jenis Kelamin: $jenis_kelamin<br>";
    echo "Tempat Lahir: $tempat_lahir<br>";
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "No hp: $no_hp<br>";
    echo "Email : $email<br>";
    echo "Provinsi: $provinsi<br>";
    echo "Kab Kota : $kab_kota<br>";
    echo "Kecamatan: $kecamatan<br>";
    echo "Desa or Kelurahan : $desa_kelurahan<br>";
    echo "Alamat: $alamat<br>";
    echo "Kode Pos : $kode_pos<br>";
    echo "Nama Asal Sekolah : $nama_asal_sekolah<br>";
    echo "Alamat Asal Sekolah: $alamat_asal_sekolah<br>";
    echo "Nama Orang Tua : $nama_orangtua<br>";
    echo "Pekerjaan: $pekerjaan<br>";
    echo "No Hp Orangtua: $no_hp_orangtua<br>";
    echo "Alamat Orangtua: $alamat_orangtua<br>";
}
