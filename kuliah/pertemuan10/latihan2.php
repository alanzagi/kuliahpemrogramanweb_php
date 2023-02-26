<?php
require 'functions.php';
$mobil = query("SELECT * FROM mobil");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mobil</title>
</head>

<body>
  <h3>Daftar Mobil</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>$</th>
      <th>Foto Mobil</th>
      <th>Nama Mobil</th>
      <th>Brand Mobil</th>
      <th>Tahun Rilis</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mobil as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['foto_mobil']; ?>" alt="" width="90"></td>
        <td><?= $m['nama_mobil']; ?></td>
        <td><?= $m['brand_mobil']; ?></td>
        <td><?= $m['tahun_mobil']; ?></td>
        <td>
          <a href="">Ubah | </a>
          <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>