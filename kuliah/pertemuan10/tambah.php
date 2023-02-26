<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
$berhasilDitambahkan = 0;
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > $berhasilDitambahkan) {
    echo "<script>
             alert('data berhasil ditambahkan!');
             document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mobil</title>
</head>

<body>
  <h3>Form Tambah Data Mobil</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          Nama Mobil:
          <input type="text" name="nama_mobil" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Brand Mobil:
          <input type="text" name="brand_mobil" required>
        </label>
      </li>
      <li>
        <label>
          Tahun Mobil:
          <input type="text" name="tahun_mobil" required>
        </label>
      </li>
      <li>
        <label>
          Foto Mobil:
          <input type="text" name="foto_mobil">
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>