<?php  

function koneksi() {
  // koneksi ke db & pilih db2_autocommit
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



?>