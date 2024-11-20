<?php
$buah = [
    [
        "nama" => "Hana",
        "buah" => [
            [
                "favbuah" => "Mangga",
                "jenis" => [
                    "jenis1" => "Mangga Kaweni",
                    "jenis2" => "Mangga Harum Manis"
                ]
            ]
        ]
    ],
    [
        "nama" => "Nabilla",
        "buah" => [
            [
                "favbuah" => "Alpukat",
                "jenis" => [
                    "jenis1" => "Alpukat Mentega",
                    "jenis2" =>  "Alpukat Biasa"
                ]
            ],
            [
                "favbuah" => "Apel",
                "jenis" => [
                    "jenis1" => "Apel Merah",
                    "jenis2" => "Apel Hijau"
                ]
            ]
        ]
    ]

];

foreach ($buah as $sehat) {
    echo "Nama Pemilik : " . $sehat["nama"] . "<br>";
    echo "Daftar Buah Kesukaan : <br>";
    echo "<ul>";
    foreach ($sehat["buah"] as $enak) {
        echo "<li>" . $enak['favbuah'] . "</li>";
        foreach ($enak["jenis"] as $lezat) {
            echo "<ol>-$lezat</ol>";
        }
    }
    echo "</ul>";            
}
