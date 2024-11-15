<?php require('../../../config.php') ?>

<?php include_once('../../00-templates/main.php'); ?>
<?php include_once('../../00-templates/menu.php'); ?>
<?php include_once('../../00-templates/navbar.php'); ?>

<h4 class="fw-bold pt-3"><span class="text-muted fw-light">Master Data /</span> Masyarakat</h4>

<a href="tambah.php" class="btn btn-primary mb-4">Tambah Data</a>

<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Username</th>
          <th>Telepon</th>
          <th>&nbsp;</th>
        </tr>
      </thead>

      <tbody class="table-border-bottom-0">
        <?php
          $data = showAllData('tbl_masyarakat');
          for( $i = 0; $i < count($data); $i++) {
        ?>

        <tr>
          <td><?= $i + 1; ?></td>
          <td><?= $data[$i]['nik']; ?></td>
          <td><?= $data[$i]['nama']; ?></td>
          <td><?= $data[$i]['username']; ?></td>
          <td><?= $data[$i]['tlp']; ?></td>
          <td>
            <a href="edit.php?id=<?= $data[$i]['nik']; ?>" class="btn btn-sm btn-success"><i class='bx bx-pencil'></i></a>
            <a href="hapus.php?id=<?= $data[$i]['nik']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin akan dihapus?');"><i class='bx bx-trash' ></i></a>
          </td>
        </tr>

        <?php } ?>
      </tbody>

    </table>
  </div>
</div>






<?php include_once('../../00-templates/footer.php'); ?>