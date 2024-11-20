<?php

 

$datanovel = '[ 
    { "no" : "1", "judul" : "Laskar Pelangi", "genre" : "Drama", "penulis" : "Andre Hitara", "penerbit" : "Bentang Pusaka", "tahun" : "2005" },
    { "no" : "2", "judul" : "5cm", "genre" : "Petualangan", "penulis" : "Donny", "penerbit" : "Grasindo", "tahun" : "2005" },
    { "no" : "3", "judul" : "Perahu Kertas", "genre" : "Romansa", "penulis" : "Dee Lestari", "penerbit" : "Bentang Pusaka", "tahun" : "2009" },
    { "no" : "4", "judul" : "Dilan", "genre" : "Romansa", "penulis" : "Pidi Baiq", "penerbit" : "Pastel Books", "tahun" : "2014" },
    { "no" : "5", "judul" : "Ayat-ayat Cinta", "genre" : "Romansa Regili", "penulis" : "Habiburrahman El Shirazy", "penerbit" : "Republika", "tahun" : "2004" },
    { "no" : "6", "judul" : "Supernova", "genre" : "Fiks Ilmiah", "penulis" : "Dee Lestari", "penerbit" : "Truedee", "tahun" : "1980" },
    { "no" : "7", "judul" : "Bumi Manusia", "genre" : "Sejarah", "penulis" : "Pramoedya Ananta Toer", "penerbit" : "Hasta Mitra", "tahun" : "2009" },
    { "no" : "8", "judul" : "Negri 5 Menara", "genre" : "Inspiratif", "penulis" : "Ahmad Faudi", "penerbit" : "Gramedia", "tahun" : "2009" },
    { "no" : "9", "judul" : "Ketika Cinta Bertasbih", "genre" : "Romansa Religi", "penulis" : "Habiburrahman El Shirazy", "penerbit" : "Republika", "tahun" : "2007" },
    { "no" : "10", "judul" : "Ronggeng Dukuh Paruk", "genre" : "Sejarah", "penulis" : "Ahmad Tohari", "penerbit" : "Gramedia", "tahun" : "1982" },
    { "no" : "11", "judul" : "Saman", "genre" : "Sastra", "penulis" : "Ayu Utami", "penerbit" : "Gramedia", "tahun" : "1998" },
    { "no" : "12", "judul" : "Bumi", "genre" : "Fantasi", "penulis" : "Tere Liye", "penerbit" : "Gramedia", "tahun" : "2014" },
    { "no" : "13", "judul" : "Pulang", "genre" : "Drama", "penulis" : "Leila S Chudori", "penerbit" : "Gramedia", "tahun" : "2012" },
    { "no" : "14", "judul" : "Sabtu Bersama Bapak", "genre" : "Drama", "penulis" : "Adhitya Mulya", "penerbit" : "GagasMedia", "tahun" : "2014" },
    { "no" : "15", "judul" : "Hujan", "genre" : "Ilmiah", "penulis" : "Tere Liya", "penerbit" : "Gramedia", "tahun" : "2016" },
    { "no" : "16", "judul" : "Rectoverso", "genre" : "Drama", "penulis" : "Dee Lestari", "penerbit" : "Goodfaith Production", "tahun" : "2008" },
    { "no" : "17", "judul" : "Garis Waktu", "genre" : "Puisi Drama", "penulis" : "Fiera Besari", "penerbit" : "Media Kita", "tahun" : "2016" },
    { "no" : "18", "judul" : "Marmut Merah Jambu", "genre" : "Komedi Romansa", "penulis" : "Raditya Dika", "penerbit" : "GagaMedia", "tahun" : "2010" },
    { "no" : "19", "judul" : "Sunst Bersama Rosie", "genre" : "Romansa", "penulis" : "Tere Liye", "penerbit" : "Republika", "tahun" : "2008" },
    { "no" : "20", "judul" : "The Architecture of Love", "genre" : "Romansa", "penulis" : "Ika Natassa", "penerbit" : "Gramedia", "tahun" : "2005" }
]';

$baris = json_decode($datanovel);

// Tampilkan dalam format tabel
echo '<table border="1" align="center">';
echo '<tr>
        <th>No</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Rilis</th>
      </tr>';

foreach ($baris as $buku) {
    echo '<tr?>';
    echo "<td>{$buku->no}</td>";
    echo "<td>{$buku->judul}</td>";
    echo "<td>{$buku->genre}</td>";
    echo "<td>{$buku->penulis}</td>";
    echo "<td>{$buku->penerbit}</td>";
    echo "<td>{$buku->tahun}</td>";
    echo "</tr>";
}

echo '</table>';