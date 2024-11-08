<?php
# koneksi database dulu
$connection = mysqli_connect('localhost', 'root', '', 'db_pengaduan');

# function buat tampilin data dari tabel tertentu
function showAllData($table) {
  global $connection;
  $data = [];
  $query = "SELECT * FROM $table";
  $result = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }
  return $data;
}

# function buat tampilin detail data dari tabel tertentu
function showDetailData($table, $column, $value) {
  global $connection;
  $data = [];
  $query = "SELECT * FROM $table WHERE $column = $value";
  $result = mysqli_query($connection, $query);
  if ($row = mysqli_fetch_assoc($result)) {
    $data = $row;
  }
  return $data;
}

# function buat hapus data dari tabel tertentu
function deleteData($table, $column, $value) {
  global $connection;
  $query = "DELETE FROM $table WHERE $column = $value";
  return mysqli_query($connection, $query);
}


// function buat tambah data dari tabel masyarakat
function addMasyarakat($nik, $nama, $username, $password, $tlp) {
  global $connection;
  $query = "INSERT INTO tbl_masyarakat (nik, nama, username, password, tlp) VALUES ('$nik', '$nama', '$username', '$password', '$tlp')";
  return mysqli_query($connection, $query);
}

// function buat tambah data dari tabel petugas
function addPetugas($nama_petugas, $username, $password, $tlp, $level) {
  global $connection;
  $query = "INSERT INTO tbl_petugas (nama_petugas, username, password, tlp, level) VALUES ('$nama_petugas', '$username', '$password', '$tlp', '$level')";
  return mysqli_query($connection, $query);
}

