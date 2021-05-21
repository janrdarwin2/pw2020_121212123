<!DOCTYPE html>
<?php  

require "functions.php";

// tampung ke var mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; foreach($mahasiswa as $m) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" alt="img/<?= $m['gambar']; ?>" width="40"></td>
      <td><?= $m["nrp"]; ?></td>
      <td><?= $m["nama"]; ?></td>
      <td><?= $m["email"]; ?></td>
      <td><?= $m["jurusan"]; ?></td>
      <td>Ubah | Hapus</td>
    </tr>
    <?php $i++; endforeach; ?>
  </table>
</body>
</html>