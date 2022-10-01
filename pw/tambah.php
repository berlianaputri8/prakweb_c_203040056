<?php
require 'function.php';

// cek apakah tobol tambah sudah di tekan 
if (isset($_POST['submit'])) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }else {
        echo "data gagal ditambahkan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Daftar Buku</title>
</head>
<body>
<h3>Form Tambah Daftar Buku</h3>

<form action="" method="POST">
    <ul>
        <li>
            <label for="judul_buku">
                Judul Buku :                 
            </label>
            <input type="text" name="judul_buku" id="judul_buku" required>
        </li>
        <li>
            <label for="pengarang">
                Pengarang :                
            </label>
            <input type="text" name="pengarang" id="pengarang" required>
        </li>
        <li>
            <label for="gambar">
                Gambar :                 
            </label>
            <input type="file" name="gambar" id="gambar" required>
        </li>
        <li>
            <label for="harga">
                Harga :                 
            </label>
            <input type="text" name="harga" id="harga" required>
        </li>
        
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>
    </ul>
</form>
    
</body>
</html>