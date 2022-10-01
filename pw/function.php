<?php

$conn = mysqli_connect("localhost", "root", "", "prakweb_c_203040056_pw");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $rows =mysqli_fetch_assoc($result) ) {
      $rows[] = $rows;
  }
  return $rows;
}


// function query($query) {
//     $conn = koneksi();
    
//     $result = mysqli_query($conn, $query);

//     // jika hasilnya hanya 1 data
//     if (mysqli_num_rows($result) == 1) {
//         return mysqli_fetch_assoc($result);
//     }

//     $rows = [];
//     while ( $row = mysqli_fetch_assoc($result) ) {
//     $rows[] = $row;
//     }
//     return $rows;
// }

function tambah($data) 
{
  global $conn;
    //$conn = koneksi();
    
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $pengarang = htmlspecialchars($data['pengarang']);
    $gambar = htmlspecialchars($data['gambar']);
    $harga = htmlspecialchars($data['harga']);
    

    $query = "INSERT INTO
                buku
                VALUES 
                (null,  '$judul_buku', '$pengarang','$gambar', '$harga');
            ";
    mysqli_query($conn, $query);
    //echo mysqli_errno($conn);
    return mysqli_affected_rows($conn);
}

function hapus ($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id") or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
?>

