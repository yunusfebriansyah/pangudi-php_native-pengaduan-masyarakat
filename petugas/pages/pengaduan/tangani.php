<?php require('../../../config.php') ?>
<?php include_once('../../00-templates/main.php'); ?>
<?php include_once('../../00-templates/menu.php'); ?>
<?php include_once('../../00-templates/navbar.php'); ?>

<?php
  if( isset($_POST['submit']) ){
    if( responsePengaduan($_POST['tanggapan'], $_GET['id_pengaduan']) ){
    echo "
      <script>
        alert('Data tanggapan berhasil ditambah.');
        document.location.href = '../tanggapan/index.php';
      </script>
    "; exit();
    }else{
      echo "
      <script>
        alert('Data tanggapan gagal ditambah.');
      </script>
    ";
    }
  }
?>

<h4 class="fw-bold pt-3"><span class="text-muted fw-light">Master Data / Pengaduan / </span>Tangani</h4>

<?php
  $data = showDetailData('vw_pengaduan', 'id_pengaduan', $_GET['id_pengaduan']);
?>

<div class="card">
  <div class="card-body">

    <h5 class="m-0">Nama Masyarakat</h5>
    <p><?= $data['nama_masyarakat'];?></p>

    <h5 class="m-0">Laporan Pengaduan</h5>
    <p><?= $data['isi_laporan'];?></p>

    <hr>

    <form action="" method="post">

      <div class="mb-3">
        <label for="tanggapan">Tanggapan Petugas</label>
        <input type="text" name="tanggapan" id="tanggapan" class="form-control" placeholder="Isi tanggapan pengaduan">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>

    </form>
  </div>
</div>


<?php include_once('../../00-templates/footer.php'); ?>