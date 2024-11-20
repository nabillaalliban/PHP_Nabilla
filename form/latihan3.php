<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="POST">
        <img src="yayasan.png.PNG" alt="">
        <h2><b>Form Biodata Diri</b></h2>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" values=""></td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" values=""></td>
        </tr>
        
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" values=""></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
            <input type="radio" name="jns_klmn" value="perempuan">perempuan
            <input type="radio" name="jns_klmn" value="laki-laki">laki-laki
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td> <textarea name="alamat" id=""></textarea></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
                <select name="agama">
                    <option >Islam</option>
                    <option >Kristen</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td>
                <select name="pendidikan">
                    <option >SD</option>
                    <option >SMP</option>
                    <option >SMA</option>
                    <option >KULIAH</option>
                </select>
            </td>
            </tr>
            <tr>
            <td>Status</td>
            <td>:</td>
            <td>
                <select name="status">
                    <option >sudah menikah</option>
                    <option >belum menikah</option>
                </select>
            </td>
            </tr>
            <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
            <input type="radio" name="hobi" value="membaca">Membaca
            <input type="radio" name="hobi" value="menulis">Menulis
            <input type="radio" name="hobi" value="memasak">Memasak
            </td>
        </tr>
        <tr>
            <td>Cita-cita</td>
            <td>:</td>
            <td>
                <select name="cita">
                    <option >Programmer</option>
                    <option >Dokter</option>
                    <option >Tni AU</option>
                    <option >Bidan</option>
                </select>
            </td>
            </tr>
            <tr>
            <td>Kata-kata Bijak</td>
            <td>:</td>
            <td> <textarea name="bijak" id=""></textarea></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="Kirim" values="Simpan"></td>
        </tr>

    </table>
    </form>
    </center>
</body>
</html>

<?php 
if(isset($_POST['Kirim'])){
    $nama_lengkap2 = $_POST  ['nama_lengkap'];
    $tempat_lahir = $_POST ['tempat_lahir'];
    $tanggal_lahir = $_POST ['tanggal_lahir'];
    $jenis_kelamin = $_POST ['jns_klmn'];
    $alamat1 = $_POST ['alamat'];
    $agama = $_POST ['agama'];
    $pnddk = $_POST ['pendidikan'];
    $status1 = $_POST ['status'];
    $hobi1 = $_POST ['hobi'];
    $cita1  = $_POST ['cita'];
    $ktktbijak = $_POST ['bijak'];

    echo "Nama Lengkap : $nama_lengkap2 <br>";
    echo "Tempat Lahir : $tempat_lahir <br>";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "Jenis Kelamin: $jenis_kelamin <br> ";
    echo "Alamat : $alamat1 <br>";
    echo "Agama : $agama <br>";
    echo "Pendidikan Terakhir : $pnddk <br>";
    echo "Status : $status1<br>";
    echo "Hobi : $hobi1 <br>";
    echo "Cita cita : $cita1 <br>";
    echo "Kata-kata : $ktktbijak <br>";

}
?>