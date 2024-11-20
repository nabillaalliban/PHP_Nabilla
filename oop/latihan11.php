<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Rapot Siswa</h2>
        <form action="hasil11.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas"></td>
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
            </table>

            <table>
                <h2>Nilai Matematika</h2>

                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilai1"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="nilai2"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td></td>
                    <td><input type="number" name="nilai3"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td></td>
                    <td><input type="number" name="nilai4"></td>
                </tr>
            </table>

            <table>
                <h2>Nilai Indonesia</h2>

                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilai5"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="nilai6"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td></td>
                    <td><input type="number" name="nilai7"></td>
                <tr>
                    <td>Nilai UAS</td>
                    <td></td>
                    <td><input type="number" name="nilai8"></td>
                </tr>
                </tr>
            </table>

            <table>
                <h2>Nilai Inggris</h2>

                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilai9"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="nilai10"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td></td>
                    <td><input type="number" name="nilai11"></td>
                <tr>
                    <td>Nilai UAS</td>
                    <td></td>
                    <td><input type="number" name="nilai12"></td>
                </tr>
                </tr>
            </table>

            <table>
                <h2>Nilai Produktif</h2>


                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilai13"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="nilai14"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td></td>
                    <td><input type="number" name="nilai15"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td></td>
                    <td><input type="number" name="nilai16"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="submit" value="SUBMIT"></td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>