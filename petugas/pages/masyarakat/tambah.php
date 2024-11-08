<?php require('../../../config.php') ?>

<?php
  if( isset($_POST['submit']) ){
    if( addMasyarakat( $_POST['nik'], $_POST['nama'], $_POST['username'], $_POST['password'], $_POST['tlp'] ) ){
    echo "
      <script>
        alert('Data masyarakat berhasil ditambah.');
        document.location.href = 'index.php';
      </script>
    "; exit();
    }else{
      echo "
      <script>
        alert('Data masyarakat gagal ditambah.');
      </script>
    ";
    }
  }
?>

<?php include_once('../../00-templates/main.php'); ?>
<?php include_once('../../00-templates/menu.php'); ?>
<?php include_once('../../00-templates/navbar.php'); ?>

<h4 class="fw-bold pt-3"><span class="text-muted fw-light">Master Data / Masyarakat / </span> Tambah Masyarakat</h4>

<div class="card">
  <div class="card-body">
    <form action="" method="POST">
      <div>
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" id="nik" placeholder="Isi NIK" name="nik"/>
      </div>
      <div>
        <label for="nama" class="form-label">nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Isi nama" name="nama"/>
      </div>
      <div>
        <label for="username" class="form-label">username</label>
        <input type="text" class="form-control" id="username" placeholder="Isi username" name="username"/>
      </div>
      <div>
        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control" id="password" placeholder="Isi password" name="password"/>
      </div>
      <div>
        <label for="tlp" class="form-label">No. Telepon</label>
        <input type="text" class="form-control" id="tlp" placeholder="Isi No. Telepon" name="tlp"/>
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </form>
  </div>
</div>




<?php include_once('../../00-templates/footer.php'); ?>