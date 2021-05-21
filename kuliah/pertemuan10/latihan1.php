<!DOCTYPE html>
<?php  
// koneksi ke db & pilih db2_autocommit
$conn = mysqli_connect("localhost", "root", "", "pw2020_121212123");

// query isi tabel Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
};

// tampung ke var mahasiswa
$mahasiswa = $rows;

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