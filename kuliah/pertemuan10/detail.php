<?php
require 'functions.php';
// Ambil id dari URL
$id = $_GET['id'];
// query mobil berdasarkan id
$m = query("SELECT * FROM mobil WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mobil</title>
</head>

<body>
  <h3>Detail Mobil</h3>
  <ul>
    <li><img src="img/<?= $m['foto_mobil']; ?>" alt="" width="90"></li>
    <li><?= $m['nama_mobil']; ?></li>
    <li><?= $m['brand_mobil']; ?></li>
    <li><?= $m['tahun_mobil']; ?></li>
    <li>
      <a href="">ubah</a> | <a href="">hapus</a>
    </li>
    <li><a href="latihan3.php">kembali ke daftar mobil</a></li>
  </ul>
</body>

</html>