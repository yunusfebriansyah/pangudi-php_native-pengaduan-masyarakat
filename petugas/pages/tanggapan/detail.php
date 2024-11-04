<?php require('../../../config.php') ?>
<?php include_once('../../00-templates/main.php'); ?>
<?php include_once('../../00-templates/menu.php'); ?>
<?php include_once('../../00-templates/navbar.php'); ?>

<h4 class="fw-bold pt-3"><span class="text-muted fw-light">Master Data / Tanggapan / </span>Detail Tanggapan</h4>

<?php
  $data = showDetailData('vw_tanggapan', 'id_tanggapan', $_GET['id']);
?>

<div class="card">
  <div class="card-body">

      <h4>Pengaduan</h4>
      <h5 class="m-0">ID Pengaduan</h5>
      <p><?= $data['id_pengaduan'];?></p>

      <h5 class="m-0">NIK Masyarakat</h5>
      <p><?= $data['nik_masyarakat'];?></p>

      <h5 class="m-0">Nama Masyarakat</h5>
      <p><?= $data['nama_masyarakat'];?></p>

      <h5 class="m-0">Username Masyarakat</h5>
      <p><?= $data['username_masyarakat'];?></p>

      <h5 class="m-0">No Telepon Masyarakat</h5>
      <p><?= $data['tlp_masyarakat'];?></p>

      <h5 class="m-0">Laporan Pengaduan</h5>
      <p><?= $data['isi_laporan_pengaduan'];?></p>
      
      <h5 class="m-0">Status Pengaduan</h5>
      <p><?= $data['status_pengaduan'];?></p>

      <hr>

      <h4>Tanggapan</h4>
      <h5 class="m-0">ID Tanggapan</h5>
      <p><?= $data['id_tanggapan'];?></p>
      
      <h5 class="m-0">Tanggal Tanggapan</h5>
      <p><?= $data['tgl_tanggapan'];?></p>
      
      <h5 class="m-0">Isi Tanggapan</h5>
      <p><?= $data['tanggapan'];?></p>

      <hr>

      <h4>Petugas</h4>
      <h5 class="m-0">ID Petugas</h5>
      <p><?= $data['id_petugas'];?></p>
      
      <h5 class="m-0">Nama Petugas</h5>
      <p><?= $data['nama_petugas'];?></p>
      
      <h5 class="m-0">Username Petugas</h5>
      <p><?= $data['username_petugas'];?></p>
      
      <h5 class="m-0">No Telepon Petugas</h5>
      <p><?= $data['tlp_petugas'];?></p>
      
      <h5 class="m-0">Level Petugas</h5>
      <p><?= $data['level_petugas'];?></p>


  </div>
</div>


<?php include_once('../../00-templates/footer.php'); ?>