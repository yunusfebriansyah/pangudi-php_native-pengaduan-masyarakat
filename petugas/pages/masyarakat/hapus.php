<?php
require('../../../config.php');
$nik = $_GET['id'];

if( deleteData('tbl_masyarakat', 'nik', $nik) ){
  echo "
    <script>
      alert('Data masyarakat berhasil dihapus.');
      document.location.href = 'index.php';
    </script>
  "; exit();
  }else{
    echo "
    <script>
      alert('Data masyarakat gagal dihapus.');
    </script>
  ";
}