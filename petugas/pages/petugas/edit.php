<?php require('../../../config.php') ?>

<?php
  $id = $_GET['id'];
  $data = showDetailData('tbl_petugas', 'id_petugas', $id);

  if( isset($_POST['submit']) ){
    if( editPetugas($_POST['nama_petugas'], $_POST['username'], $_POST['password'], $_POST['tlp'], $_POST['level'], $id ) ){
    echo "
      <script>
        alert('Data Petugas berhasil diubah.');
        document.location.href = 'index.php';
      </script>
    "; exit();
    }else{
      echo "
      <script>
        alert('Data Petugas gagal diubah.');
      </script>
    ";
    }
  }
?>

<?php include_once('../../00-templates/main.php'); ?>
<?php include_once('../../00-templates/menu.php'); ?>
<?php include_once('../../00-templates/navbar.php'); ?>

<h4 class="fw-bold pt-3"><span class="text-muted fw-light">Master Data / Petugas / </span> Ubah Petugas</h4>

<div class="card">
  <div class="card-body">
    <form action="" method="POST">
      <div>
        <label for="nama" class="form-label">nama petugas</label>
        <input type="text" class="form-control" id="nama" placeholder="Isi nama" name="nama_petugas" value="<?= $data['nama_petugas']; ?>"/>
      </div>
      <div>
        <label for="username" class="form-label">username</label>
        <input type="text" class="form-control" id="username" placeholder="Isi username" name="username" value="<?= $data['username']; ?>"/>
      </div>
      <div>
        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control" id="password" placeholder="Isi password" name="password" value="<?= $data['password']; ?>"/>
      </div>
      <div>
        <label for="tlp" class="form-label">No. Telepon</label>
        <input type="text" class="form-control" id="tlp" placeholder="Isi No. Telepon" name="tlp" value="<?= $data['tlp']; ?>"/>
      </div>
      <div>
        <label for="level">Level Petugas</label>
        <select class="form-select" id="level" name="level">
          <option value="admin" <?= $data['level'] == 'admin' ? 'selected' : '' ?>>Admin</option>
          <option value="petugas" <?= $data['level'] == 'petugas' ? 'selected' : '' ?>>Petugas</option>
        </select>
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </form>
  </div>
</div>




<?php include_once('../../00-templates/footer.php'); ?>