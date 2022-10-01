<?php
require 'function.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan!');
          document.location.href = 'index.php';    
          </script>";
  } else {
    echo  "<script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';    
          </script>";
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
            <label>
                Judul Buku :               
                <input type="text" name="judul_buku" autofocus required>  
            </label>            
        </li>
        <li>
            <label>
                Pengarang :  
                <input type="text" name="pengarang" required>              
            </label>    
        </li>
        <li>
            <label>
                Harga :      
                <input type="text" name="harga" required>           
            </label>           
        </li>
        <li>
            <label>
                Gambar :   
                <input type="text" name="file" >              
            </label>    
        </li>
        <li>
            <button type="submit" name="tambah">Tambah Data!</button>
        </li>
    </ul>
</form>
    
</body>
</html>