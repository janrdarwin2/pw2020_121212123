<?php  

function koneksi() {
  // koneksi ke db & pilih
  return mysqli_connect("localhost", "root", "", "pw2020_121212123");
}

function query($query) {
  // query isi tabel Mahasiswa
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika datanya 1 row
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // ubah data ke dalam array
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  };
  return $rows;
}

function tambah($data) {
  $conn = koneksi();
  $nama = htmlspecialchars($data["nama"]);
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);
  $query = "INSERT INTO mahasiswa VALUES (NULL, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

?>