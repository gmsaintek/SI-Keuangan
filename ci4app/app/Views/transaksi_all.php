<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <title>Semua Transaksi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Semua Transaksi" />
  <meta name="author" content="ColorlibHQ" />
  <meta name="description" content="Siskeu Desa Baha"/>

  <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
  <?= view('includes/header') ?>
  <?= view('includes/sidebar') ?>
  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Semua Transaksi</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Semua Transaksi</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="app-content">
      <div class="container-fluid">
        <div class="row">
          <div class="d-flex gap-2">
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#all_input_form">
              <i class="bi bi-plus-lg"></i>
              <span>Transaksi</span>
            </button>
            <button type="button" class="btn btn-warning mb-2" data-bs-toggle="modal" data-bs-target="#cetaklaporan_alltransaksi">
              <i class="bi bi-printer"></i>
              <span>Cetak Laporan</span>
            </button>
            <div class="modal-container">
              <?= view('includes/forms/all_input_form') ?>
            </div>
            <div class="modal-container">
              <?= view('includes/forms/cetak_laporan/alltransaksi') ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table id="myTable" class="table table-striped">
              <thead>
                <tr class="align-middle">
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Sumber</th>
                  <th>Kegiatan</th>
                  <th>Bidang</th>
                  <th>Sub-bidang</th>
                  <th>Jumlah Transaksi (Rp)</th>
                  <th>Jenis Transaksi</th>
                  <th>Catatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($transaksi as $row): ?>
                  <tr>
                    <td><?= esc($row['tanggal']) ?></td>
                    <td><?= esc($row['nama']) ?></td>
                    <td><?= esc($row['sumber']) ?></td>
                    <td><?= esc($row['kegiatan'] ?: '-') ?></td>
                    <td><?= esc($row['bidang'] ?: '-') ?></td>
                    <td><?= esc($row['sub_bidang'] ?: '-') ?></td>
                    <td><?= number_format($row['jumlah_transaksi'], 0, ',', '.') ?></td>
                    <td>
                        <span class="badge <?= strtolower($row['jenis_transaksi']) == 'pengeluaran' ? 'bg-danger' : 'bg-success' ?>">
                            <?= ucfirst($row['jenis_transaksi']) ?>
                        </span>
                    </td>
                    <td><?= esc($row['catatan']) ?></td>
                    <td>
                      <!-- Tombol Edit -->
                      <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit_form_<?= strtolower($row['jenis_transaksi']) ?>_<?= $row['id'] ?>">
                        <i class="bi bi-pencil-square"></i>
                      </button>
                      <!-- Tombol Hapus -->
                      <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_<?= $row['id'] ?>">
                        <i class="bi bi-trash"></i>
                      </button>
                      <div class="modal-container">
                        <?php if (strtolower($row['jenis_transaksi']) == 'pengeluaran'): ?>
                          <?= view('includes/forms/edit_pengeluaran_form', ['row' => $row]) ?>
                        <?php else: ?>
                          <?= view('includes/forms/edit_pemasukan_form', ['row' => $row]) ?>
                        <?php endif; ?>
                      </div>
                      <div class="modal-container">
                        <?= view('includes/forms/konfirmasi/hapus', [
                          'row' => $row,
                          'actionUrl' => base_url('transaksi_all/delete/'.$row['id'])
                        ]) ?>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?= view('includes/footer') ?>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#myTable').DataTable({
      lengthMenu: [5, 10, 25, 50, 100],
      pageLength: 10
    });
  });
</script>
</body>
</html>
