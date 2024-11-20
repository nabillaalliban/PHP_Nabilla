<?php 

$siswa = [
    [
        "Judul" => "Dilan 1991",
        "Penulis" => "Pidi Baik",
        "Tanggal Riris" => "20 Nov 2024",
        "Penerbit" => "Arilangga"
    ],
    [
        "Judul" => "Samuel",
        "Penulis" => "Itakrn",
        "Tanggal Riris" => "2 sep 2021",
        "Penerbit" => "Akad"
    ],
    [
        "Judul" => "Laskar Pelangi",
        "Penulis" => "Andrea",
        "Tanggal Riris" => "3 sep 2005",
        "Penerbit" => "Bentang"
    ],
    [
        "Judul" => "Bumi Manusia",
        "Penulis" => "Ananta",
        "Tanggal Riris" => "20 Nov 1980",
        "Penerbit" => "Hasta"
    ],
    [
        "Judul" => "Cantik Itu Luka",
        "Penulis" => "Eka",
        "Tanggal Riris" => "20 Nov 2002",
        "Penerbit" => "Gramedia",
    ],
];

foreach($siswa as $novel) {
    echo "Judul :".$novel["Judul"]."<br>";
    echo "Penulis :".$novel["Penulis"]."<br>";
    echo "Tanggal Rilis :".$novel["Tanggal Riris"]."<br>";
    echo "Penerbit :".$novel["Penerbit"]."<br>";
    echo "<hr>";
}
?>