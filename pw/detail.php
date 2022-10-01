<?php
require 'function.php';

// ambil id dari URL
$id = $_GET['id'];

// query pegawai berdasarkan id
$b = query("SELECT * FROM buku WHERE id_buku = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
</head>
<body>

    <h3>Detail Buku</h3>
    <ul>
        <li><img src="img/<?= $b["gambar"]; ?>" width="100"></li>
        <li>Judul Buku : <?= $b["judul_buku"]; ?></li>
        <li>Pengarang : <?= $b["pengarang"]; ?></li>
        <li>Harga : <?= $b["harga"]; ?></li>
        <li><a href="hapus.php?id=<?= $b['id_buku']; ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a></li>
        <li><a href="index.php">Kembali ke daftar Buku</a></li>
    </ul>
    
</body>
</html>