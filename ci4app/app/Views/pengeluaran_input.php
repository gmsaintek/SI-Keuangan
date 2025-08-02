<?php helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Pengeluaran</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Pengeluaran" />
  <meta name="author" content="ColorlibHQ" />
  <meta name="description" content="Siskeu Desa Baha"/>

  <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>

<body class="dark-mode layout-fixed sidebar-mini">

<div class="app-wrapper">
  <?= $this->include('includes/header') ?>
  <?= $this->include('includes/sidebar') ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"><h1>Pengeluaran</h1></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Pengeluaran</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="d-flex gap-2 mb-3">
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#pengeluaran_input_form">
            <i class="bi bi-plus-lg"></i> <span>Pengeluaran</span>
          </button>
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#cetaklaporan_pengeluaran">
            <i class="bi bi-printer"></i> <span>Cetak Laporan</span>
          </button>
        </div>

        <?= view('includes/forms/pengeluaran/input_form') ?>
        <?= view('includes/forms/cetak_laporan/pengeluaran') ?>

        <table id="myTable" class="table table-striped">
          <thead>
            <tr class="align-middle">
              <th>Tanggal</th>
              <th>Nama</th>
              <th>Sumber</th>
              <th>Kegiatan</th>
              <th>Bidang</th>
              <th>Sub-bidang</th>
              <th>Jumlah Pengeluaran (Rp)</th>
              <th>Nota</th>
              <th>Catatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pengeluaran as $row): ?>
            <tr>
              <td><?= esc($row['tanggal']) ?></td>
              <td><?= esc($row['nama']) ?></td>
              <td><?= esc($row['sumber']) ?></td>
              <td><?= esc($row['kegiatan']) ?></td>
              <td><?= esc($row['bidang']) ?></td>
              <td><?= esc($row['sub_bidang']) ?></td>
              <td><?= number_format($row['jumlah_pengeluaran'], 2, ',', '.') ?></td>
              <td>
                <?php if ($row['nota']): ?>
                  <a href="<?= base_url('uploads/nota/' . $row['nota']) ?>" target="_blank">Nota</a>
                <?php else: ?>
                  <em>-</em>
                <?php endif; ?>
              </td>
              <td><?= esc($row['catatan']) ?></td>
              <td>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#pengeluaran_edit_form_<?= $row['id'] ?>">
                      <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_<?= $row['id'] ?>">
                      <i class="bi bi-trash"></i>
                    </button>
                    <!-- Modal edit form tetap -->
                    <?= view('includes/forms/pengeluaran/edit_form', ['row' => $row]) ?>
                    <!-- Modal hapus REUSABLE -->
                    <?= view('includes/forms/konfirmasi/hapus', [
                          'row' => $row,
                          'actionUrl' => base_url('pengeluaran/delete/'.$row['id'])
                        ]) ?>
                  </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <?= $this->include('includes/footer') ?>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>

</body>
</html>
