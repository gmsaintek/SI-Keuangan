<?php helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Pemasukan</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Pemasukan" />
  <meta name="author" content="ColorlibHQ" />
  <meta name="description" content="Siskeu Desa Baha"/>

  <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <?= view('includes/header'); ?>
    <?= view('includes/sidebar'); ?>
    <main class="app-main">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Pemasukan</h3></div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pemasukan</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="container-fluid">
          <div class="row">
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#pemasukan_inputform">
                <i class="bi bi-plus-lg"></i>
                <span>Pemasukan</span>
              </button>
              <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#cetaklaporan_pemasukan">
                <i class="bi bi-printer"></i>
                <span>Cetak Laporan</span>
              </button>
              <div class="modal-container">
                <?= view('includes/forms/pemasukan/input_form'); ?>
              </div>
              <div class="modal-container">
                <?= view('includes/forms/cetak_laporan/pemasukan'); ?>
              </div>
            </div>
          </div>

          <!-- Tabel dinamis dari controller -->
          <div class="row">
            <div class="col-md-12">
              <table id="tablePemasukan" class="table table-bordered mt-3">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Sumber Dana</th>
                    <th>Jumlah</th>
                    <th>Catatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($pemasukan)): ?>
                    <?php foreach ($pemasukan as $row): ?>
                      <tr>
                        <td><?= esc($row['tanggal']) ?></td>
                        <td><?= esc($row['sumber_dana']) ?></td>
                        <td>Rp<?= number_format($row['jumlah'], 0, ',', '.') ?></td>
                        <td><?= esc($row['catatan']) ?></td>
                        <td>
                          <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#pemasukan_editform<?= $row['id'] ?>">
                            <i class="bi bi-pencil-square"></i>
                          </button>
                          <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_<?= $row['id'] ?>">
                            <i class="bi bi-trash"></i>
                          </button>
                          <!-- Modal Edit -->
                          <?= view('includes/forms/pemasukan/edit_form', ['row' => $row]) ?>
                          <!-- Modal Hapus Universal -->
                          <?= view('includes/forms/konfirmasi/hapus', [
                            'row' => $row,
                            'actionUrl' => base_url('pemasukan/delete/' . $row['id'])
                          ]) ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr><td colspan="5" class="text-center">Belum ada data.</td></tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?= view('includes/footer'); ?>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    $(document).ready(function () {
      $('#tablePemasukan').DataTable({
        lengthMenu: [5, 10, 25, 50, 100],
        pageLength: 10
      });
    });
  </script>
</body>
</html>
