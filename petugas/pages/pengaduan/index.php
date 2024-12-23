<?php require('../../../config.php') ?>
<?php include_once('../../00-templates/main.php'); ?>
<?php include_once('../../00-templates/menu.php'); ?>
<?php include_once('../../00-templates/navbar.php'); ?>

<h4 class="fw-bold pt-3"><span class="text-muted fw-light">Master Data /</span> Pengaduan</h4>

<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>ID Pengaduan</th>
          <th>Tgl Pengaduan</th>
          <th>Masyarakat</th>
          <th>Telepon</th>
          <th>Status</th>
          <th>&nbsp;</th>
        </tr>
      </thead>

      <tbody class="table-border-bottom-0">
        <?php
          $data = showAllData('vw_pengaduan');
          for( $i = 0; $i < count($data); $i++) {
        ?>

        <tr>
          <td><?= $i + 1; ?></td>
          <td><?= $data[$i]['id_pengaduan']; ?></td>
          <td><?= $data[$i]['tgl_pengaduan']; ?></td>
          <td><?= $data[$i]['nama_masyarakat']; ?></td>
          <td><?= $data[$i]['tlp_masyarakat']; ?></td>
          <td><?= $data[$i]['status']; ?></td>
          <td>
            <a href="detail.php?id=<?= $data[$i]['id_pengaduan']; ?>" class="btn btn-sm btn-primary"><i class='bx bx-show'></i></a>
            <a href="tangani.php?id_pengaduan=<?= $data[$i]['id_pengaduan']; ?>" class="btn btn-sm btn-info">Tangani <i class='bx bxs-hand-up'></i></a>
          </td>
        </tr>

        <?php } ?>
      </tbody>

    </table>
  </div>
</div>


<?php include_once('../../00-templates/footer.php'); ?>