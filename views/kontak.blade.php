<?php
// Fungsi untuk menangani pengiriman pesan melalui form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    
    // Validasi sederhana
    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        // Siapkan email (sesuaikan dengan email kamu)
        $to = "emailkamu@example.com";  // Ganti dengan alamat email kamu
        $subject = "Pesan Baru dari " . $nama;
        $body = "Nama: " . $nama . "\nEmail: " . $email . "\n\nPesan:\n" . $pesan;
        $headers = "From: " . $email;
        
        // Kirim email (ini akan berjalan di server yang mendukung fungsi mail)
        if (mail($to, $subject, $body, $headers)) {
            $status = "Pesan kamu telah berhasil dikirim.";
        } else {
            $status = "Maaf, terjadi kesalahan saat mengirim pesan. Coba lagi.";
        }
    } else {
        $status = "Semua field harus diisi!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #555;
        }
        input, textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        textarea {
            resize: none;
            height: 150px;
        }
        button {
            padding: 10px;
            background-color: #77aaff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #5599ee;
        }
        .status {
            font-size: 16px;
            color: green;
            text-align: center;
            margin-top: 20px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Hubungi Saya</h1>
    
    <!-- Tampilkan pesan status jika ada -->
    <?php if (isset($status)) { ?>
        <p class="status <?php echo !empty($nama) && !empty($email) && !empty($pesan) ? '' : 'error'; ?>">
            <?php echo $status; ?>
        </p>
    <?php } ?>
    
    <!-- Form kontak -->
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Nama lengkap Anda" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Alamat email Anda" required>
        
        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda" required></textarea>
        
        <button type="submit">Kirim Pesan</button>
    </form>
</div>

</body>
</html>
