<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Sumber Dana</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Sumber Dana" />
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
              <h3 class="mb-0">Sumber Dana</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sumber Dana</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="app-content">
        <div class="container-fluid">



          

          <!-- Display some information and data -->
          <div class="row mt-4">
            <h4 class="mb-3">Total Sumber Dana</h4>
          </div>

          <div class="row">
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-success">
                <div class="inner">
                  <h2>Total Sumber Dana</h2>
                  <p class="mb-1">Anggaran: <strong>Rp100.800.000,00</strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp75.000.000,00</strong></p>
                </div>
                <a href="<?= base_url('pemasukan_input') ?>" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="row">
            <h4 class="mb-3">Sumber Dana</h4>
          </div>

          <?php for ($i = 0; $i < 5; $i++): ?>
          <div class="col-lg-4 col-6">
            <div class="small-box text-bg-<?= ['primary','danger','warning','secondary','info'][$i] ?>">
              <div class="inner">
                <h2>Penyelengaraan Pemerintahan Desa</h2>
                <p class="mb-1">Anggaran: <strong>Rp100.800.000,00</strong></p>
                <p class="mb-1">Penggunaan: <strong>Rp75.000.000,00</strong></p>
              </div>
              <a href="<?= base_url('pemasukan_sumberdana_each') ?>" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
          <?php endfor; ?>

        </div>
      </div>
    </main>

    <?= view('includes/footer'); ?>
  </div>

  <!-- JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
