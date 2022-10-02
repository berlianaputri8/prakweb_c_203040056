<?php
require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$sb = query("SELECT * FROM buku WHERE id_buku = $id");


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
          alert('data berhasil diubah!');
          document.location.href = 'index.php';    
          </script>";
  } else {
    echo  "<script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';    
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $sb['id_buku']; ?>">
    <ul>
      <li>
        <label>
          Judul Buku :
          <input type="text" name="judul_buku" autofocus required value="<?= $sb['judul_buku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Pengarang :
          <input type="text" name="pengarang" required value="<?= $sb['pengarang']; ?>">
        </label>
      </li>
      <li>
        <label>
          Harga :
          <input type="text" name="harga" required value="<?= $sb['harga']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $sb['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>