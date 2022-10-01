<?php

//require 'function.php';

$conn = mysqli_connect("localhost", "root", "", "prakweb_c_203040056_pw");

$result = mysqli_query($conn,"SELECT * FROM buku");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

$buku = $row;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <br>

  <div class="mx-auto max-w-7xl">
    <h3 class="text-5xl text-center mb-5 font-semibold">Daftar Buku</h3>
    <a href="tambah.php">Tambah Data Mahasiswa</a><br><br>

    <table class="table-auto min-w-max w-full">
      <thead class="bg-gray-200 text-gray-600 uppercase text--sm Leading-normal">
        <tr class="mt-2">
          <th class="py-3 px-6 text-left">No</th>
          <th class="py-3 px-6 text-left">Judul buku</th>
          <th class="py-3 px-6 text-left">Pengarang</th>
          <th class="py-3 px-6 text-left">Harga</th>
          <th class="py-3 px-6 text-left">Gambar</th>
          <th class="py-3 px-6 text-left">Detail</th>
        </tr>
      </thead>
      <tbody class="text-gray-600 text-sm border border-green-300">
        <?php $i = 1; foreach ($buku as $row) :?>
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6 text-left"><?= $i++; ?></td>
            <td class="py-3 px-6 text-left"><?= $row['judul_buku']; ?></td>
            <td class="py-3 px-6 text-left"><?= $row['pengarang']; ?></td>
            <td class="py-3 px-6 text-left"><?= $row['harga']; ?></td>
            <td class="py-3 px-6 text-left"><img src="img/<?= $row['gambar']; ?>" width="60"></td>
            <td>
              <a href="detail.php?id=<?= $row["id_buku"]; ?>">Lihat detail</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>

    </table>
  </div>

</body>

</html>