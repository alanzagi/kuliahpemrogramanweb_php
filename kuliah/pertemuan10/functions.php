<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'kuliahpemrogramanweb');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;

    return $rows;
  }
}

function tambah($data)
{
  $conn = koneksi();

  // memecah data
  $fotoMobil = htmlspecialchars($data['foto_mobil']);
  $namaMobil = htmlspecialchars($data['nama_mobil']);
  $brandMobil = htmlspecialchars($data['brand_mobil']);
  $tahunMobil = htmlspecialchars($data['tahun_mobil']);


  $query = "INSERT INTO
              mobil
            VALUES
            (null, '$fotoMobil', '$namaMobil', '$brandMobil', '$tahunMobil')
            ";
  mysqli_query($conn, "$query");
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
