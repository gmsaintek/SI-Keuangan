<?php helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Pelaksanaan Pembangunan Desa</title>
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

<body class="layout-fixed sidebar-mini">

<div class="app-wrapper">
    <?= $this->include('includes/header') ?>
    <?= $this->include('includes/sidebar') ?>
    <main class="app-main">
        <div class="app-content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Pelaksanaan Pembangunan Desa</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="<?= base_url('index') ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pengeluaran_bidang') ?>">Bidang</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pelaksanaan Pembangunan Desa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="d-flex gap-2 mb-3">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#inputBidangModal">
                                <i class="bi bi-plus-lg"></i> <span>Pengeluaran</span>
                            </button>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#cetaklaporan_bidang_each2">
                                <i class="bi bi-printer"></i> <span>Cetak Laporan</span>
                            </button>
                        </div>
                    </div>

                    <?= view('includes/forms/pengeluaran/in_bidang_input_form', [
                        'actionUrlStore' => base_url('pengeluaran_bidang_each2/store')
                    ]) ?>
                    <?= view('includes/forms/cetak_laporan/bidang_each', [
                        'actionUrl' => 'pengeluaran_bidang_each2/cetak',
                        'modalTitle' => 'Cetak Laporan Pelaksanaan Pembangunan Desa',
                        'modalId'    => 'cetaklaporan_bidang_each2'
                    ]) ?>

                    <div class="row">
                        <div class="col-md-12">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr class="align-middle">
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Sumber</th>
                                        <th>Kegiatan</th>
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
                                        <td><?= esc($row['subbidang']) ?></td>
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
                                            <!-- Modal edit dan hapus HARUS di dalam foreach! -->
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#pengeluaran_edit_form_<?= $row['id'] ?>">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi_hapus_<?= $row['id'] ?>">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                            <?= view('includes/forms/pengeluaran/in_bidang_edit_form', [
                                                'row' => $row,
                                                'actionUrlUpdate' => base_url('pengeluaran_bidang_each2/update/'.$row['id'])
                                            ]) ?>
                                            <?= view('includes/forms/konfirmasi/hapus', [
                                                'row' => $row,
                                                'actionUrl' => base_url('pengeluaran_bidang_each2/delete/' . $row['id'])
                                            ]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('includes/footer') ?>
    </main>
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
