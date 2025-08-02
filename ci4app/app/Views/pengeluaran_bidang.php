<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bidang Pengeluaran</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Bidang Pengeluaran" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description" content="Siskeu Desa Baha" />

    <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.css') ?>" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <?= view('includes/header'); ?>
    <?= view('includes/sidebar'); ?>

    <main class="app-main">
      <div class="app-content-header">  
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Bidang</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bidang</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="app-content">
        <div class="container-fluid">
          <div class="row">

            <!-- Pemberdayaan Masyarakat -->
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-primary">
                <div class="inner">
                  <h2>Pemberdayaan Masyarakat</h2>
                  <p class="mb-1">Anggaran: <strong>Rp<?= number_format($anggaran['each'], 2, ',', '.') ?></strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp<?= number_format($total_penggunaan['each'], 2, ',', '.') ?></strong></p>
                </div>
                <a href="<?= base_url('pengeluaran_bidang_each') ?>" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>

            <!-- Pembinaan kemasyarakatan -->
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-danger">
                <div class="inner">
                  <h2>Pembinaan Kemasyarakatan</h2>
                  <p class="mb-1">Anggaran: <strong>Rp<?= number_format($anggaran['each1'], 2, ',', '.') ?></strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp<?= number_format($total_penggunaan['each1'], 2, ',', '.') ?></strong></p>
                </div>
                <a href="<?= base_url('pengeluaran_bidang_each1') ?>" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>

            <!-- Pelaksanaan Pembangunan Desa -->
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h2>Pelaksanaan Pembangunan Desa</h2>
                  <p class="mb-1">Anggaran: <strong>Rp<?= number_format($anggaran['each2'], 2, ',', '.') ?></strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp<?= number_format($total_penggunaan['each2'], 2, ',', '.') ?></strong></p>
                </div>
                <a href="<?= base_url('pengeluaran_bidang_each2') ?>" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>

            <!-- Penyelengaraan Pemerintahan Desa -->
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-secondary">
                <div class="inner">
                  <h2>Penyelengaraan Pemerintahan Desa</h2>
                  <p class="mb-1">Anggaran: <strong>Rp<?= number_format($anggaran['each3'], 2, ',', '.') ?></strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp<?= number_format($total_penggunaan['each3'], 2, ',', '.') ?></strong></p>
                </div>
                <a href="<?= base_url('pengeluaran_bidang_each3') ?>" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>  

            <!-- Penanggulangan Bencana, Darurat, dan Mendadak Desa -->
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-info">
                <div class="inner">
                  <h2>Penanggulangan Bencana, Darurat, dan Mendadak Desa</h2>
                  <p class="mb-1">Anggaran: <strong>Rp<?= number_format($anggaran['each4'], 2, ',', '.') ?></strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp<?= number_format($total_penggunaan['each4'], 2, ',', '.') ?></strong></p>
                </div>
                <a href="<?= base_url('pengeluaran_bidang_each4') ?>" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </main>

    <?= view('includes/footer'); ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
