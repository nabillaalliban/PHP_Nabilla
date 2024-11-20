<?php

$siswa = [
    [
        "nis" => 1002,
        "nama" => "Nabilla",
        "kelas" => "XI RPL 1",
        "eskul" => [
            "nama_eskul" => "Tari", "Karawitan", "Futsal"
        ]
    
    ],
    [
        "nis" => 1003,
        "nama" => "Hana",
        "kelas" => "XI RPL 1",
        "eskul" => [
            "nama_eskul" => "Ec"
        ]
    ],
    
];

foreach($siswa as $murid) {
    echo "NIS :".$murid["nis"]."<br>";
    echo "Nama :".$murid["nama"]."<br>";
    echo "Kelas :".$murid["kelas"]."<br>";
    echo "Eskstrakulikuler : <br>";
    echo "<ul>";
    foreach($murid['eskul'] as $data){
        echo "<li>$data</li>";
    }
    echo "</ul>";
}
?>

