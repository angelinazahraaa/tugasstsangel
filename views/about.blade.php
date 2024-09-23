<?php
// Data Artikel
$artikel = [
    'judul' => 'Kenali Lebih Dekat: [Nama], Pribadi Inspiratif dari [Lokasi]',
    'deskripsi' => 'Saya dari kelas XII PPLG 1,Dalam hidup, ada individu yang tak hanya menjalani hari-harinya, namun juga memberi makna bagi setiap langkahnya. Salah satunya adalah [Nama], seseorang dengan semangat tak kenal lelah dalam menggapai mimpi dan memberikan dampak positif di sekitarnya.',
    'paragraf1' => '[Nama] lahir dan besar di [Lokasi], sebuah kota yang penuh dengan energi kreatif. Dari tempat inilah, ia mulai menggali minatnya dalam [Minat]. Tak hanya sekadar hobi, bagi [Nama], [Minat] adalah medium untuk mengekspresikan jati diri dan menghubungkan dirinya dengan dunia.',
    'paragraf2' => 'Selain itu, [Nama] juga dikenal sebagai pribadi yang [Sifat]. Sifat inilah yang membuatnya menonjol dalam berinteraksi dengan orang-orang di sekelilingnya. Tak heran jika ia menjadi inspirasi bagi banyak orang yang mengenalnya.',
    'paragraf3' => 'Satu hal yang selalu ia pegang teguh adalah keyakinan bahwa proses lebih penting dari hasil. Setiap langkah kecil dalam kehidupannya, dari pekerjaan hingga aktivitas sehari-hari, selalu ia lakukan dengan penuh dedikasi dan semangat.',
    'penutup' => 'Bagi [Nama], hidup adalah sebuah perjalanan penuh tantangan yang harus dilalui dengan keberanian. Ia percaya bahwa dengan keuletan, kerja keras, dan ketulusan, siapa pun bisa mencapai hal-hal besar dalam hidup.',
    'tanggal' => ('Angelina zahra afrilia')
];

// Fungsi untuk mengganti placeholder dengan data asli
function buatArtikel($data, $nama, $lokasi, $minat, $sifat) {
    foreach ($data as &$konten) {
        $konten = str_replace('[Nama]', $nama, $konten);
        $konten = str_replace('[Lokasi]', $lokasi, $konten);
        $konten = str_replace('[Minat]', $minat, $konten);
        $konten = str_replace('[Sifat]', $sifat, $konten);
    }
    return $data;
}

// Input data diri
$nama = "Angelina Zahra Afrilia"; // Nama kamu
$lokasi = "Bandung,03 APRIL 2007"; // Lokasi kamu
$minat = "Menjadi pramugari kereta"; // Minat kamu
$sifat = "BAIK"; // Sifat kamu

// Buat artikel dengan data input
$artikelFinal = buatArtikel($artikel, $nama, $lokasi, $minat, $sifat);

// Tampilkan artikel dengan styling HTML
echo "
<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Profil $nama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }
        header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
            font-size: 24px;
            letter-spacing: 2px;
        }
        .content {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content h2 {
            color: #333;
        }
        .content p {
            font-size: 18px;
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #333;
            color: #fff;
        }
        .footer small {
            font-size: 14px;
        }
    </style>
</head>
<body>

<header>
    <h1>" . $artikelFinal['judul'] . "</h1>
</header>

<div class='container'>
    <div class='content'>
        <h2>Profil Singkat</h2>
        <p>" . $artikelFinal['deskripsi'] . "</p>
        <p>" . $artikelFinal['paragraf1'] . "</p>
        <p>" . $artikelFinal['paragraf2'] . "</p>
        <p>" . $artikelFinal['paragraf3'] . "</p>
        <p><strong>" . $artikelFinal['penutup'] . "</strong></p>
    </div>
</div>

<div class='footer'>
    <small>Diterbitkan oleh: " . $artikelFinal['tanggal'] . "</small>
</div>


</body>
</html>
";
?>
