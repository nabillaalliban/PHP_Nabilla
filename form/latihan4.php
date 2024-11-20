<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2><b>Nilai Ujian Nasional</b></h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value=""></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><h4><b>Nilai Ujian </b></h4></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="indo" value=""></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="ingg" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="pro" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>


<?php 
if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nilai1 = $_POST['indo'];
    $nilai2 = $_POST['ingg'];
    $nilai3 = $_POST['mtk'];
    $nilai4 = $_POST['pro'];
    $rata = ($nilai1 + $nilai2 + $nilai3 + $nilai4) / 4;
    if($rata > 75) {
        $status = "Tuntas";
    } else {
        $status = "Belum Tuntas";
    }

    ?>

<table>
    <tr>
        <td>Nama</td>
        <td>: <?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>: <?php echo $kelas; ?></td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>: <?php echo $jurusan; ?></td>
    </tr>
    <tr>
        <td>Nilai B. Indonesia</td>
        <td>: <?php echo $nilai1; ?></td>
    </tr>
    <tr>
        <td>Nilai B.Inggris</td>
        <td>: <?php echo $nilai2; ?></td>
    </tr>
    <tr>
        <td>Nilai Matematika</td>
        <td>: <?php echo $nilai3; ?></td>
    </tr>
    <tr>
        <td>Nilai Produktif</td>
        <td>: <?php echo $nilai4; ?></td>
    </tr>
    <tr>
        <td>Rata-rata</td>
        <td>: <?php echo $rata; ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>: <?php echo $status; ?></td>
    </tr>
</table>
 <?php   
}
?>