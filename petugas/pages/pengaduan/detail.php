<?php require('../../../config.php') ?>
<?php include_once('../../00-templates/main.php'); ?>
<?php include_once('../../00-templates/menu.php'); ?>
<?php include_once('../../00-templates/navbar.php'); ?>

<h4 class="fw-bold pt-3"><span class="text-muted fw-light">Master Data / Pengaduan / </span>Detail Pengaduan</h4>

<?php
  $data = showDetailData('vw_pengaduan', 'id_pengaduan', $_GET['id']);
?>

<div class="card">
  <div class="card-body">
      <h5 class="m-0">ID Pengaduan</h5>
      <p><?= $data['id_pengaduan'];?></p>

      <h5 class="m-0">Tanggal Pengaduan</h5>
      <p><?= $data['tgl_pengaduan'];?></p>

      <h5 class="m-0">NIK Masyarakat</h5>
      <p><?= $data['nik_masyarakat'];?></p>

      <h5 class="m-0">Nama Masyarakat</h5>
      <p><?= $data['nama_masyarakat'];?></p>

      <h5 class="m-0">Username Masyarakat</h5>
      <p><?= $data['username_masyarakat'];?></p>

      <h5 class="m-0">No Telepon Masyarakat</h5>
      <p><?= $data['tlp_masyarakat'];?></p>

      <h5 class="m-0">Laporan Pengaduan</h5>
      <p><?= $data['isi_laporan'];?></p>
      
      <h5 class="m-0">Status Pengaduan</h5>
      <p><?= $data['status'];?></p>
  </div>
</div>


<?php include_once('../../00-templates/footer.php'); ?>