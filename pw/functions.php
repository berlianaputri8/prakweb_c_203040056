<?php
// komeksi ke databse
$conn = mysqli_connect("localhost", "root", "", "prakweb_2022_b_203040087");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $rows =mysqli_fetch_assoc($result) ) {
        $rows[] = $rows;
    }
    return $rows;
}

// functions TAMBAH
function tambah($data) {
    global $conn;

    $kode_buku = htmlspecialchars($data["kode_buku"]);
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $penulis_buku = htmlspecialchars($data["penulis_buku"]);
    $penerbit_buku = htmlspecialchars($data["penerbit_buku"]);
    $tahun_penerbit = htmlspecialchars($data["tahun_penerbit"]);
    $stok = htmlspecialchars($data["stok"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO buku 
                VALUES
            ('', '$kode_buku', '$judul_buku', '$penulis_buku', '$penerbit_buku',
            '$tahun_penerbit', '$stok', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// functions HAPUS
function hapus($id_buku) {
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id_buku");

    return mysqli_affected_rows($conn);
}



?>