<?php
require('../../../config.php');
$id = $_GET['id'];

if( deleteData('tbl_petugas', 'id_petugas', $id) ){
  echo "
    <script>
      alert('Data petugas berhasil dihapus.');
      document.location.href = 'index.php';
    </script>
  "; exit();
  }else{
    echo "
    <script>
      alert('Data petugas gagal dihapus.');
    </script>
  ";
}