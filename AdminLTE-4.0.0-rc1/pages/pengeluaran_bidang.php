<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bidang Pengeluaran</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Bidang Pengeluaran" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="Siskeu Desa Baha"
    />

    <link href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  </head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    <?php include 'includes/header.php';?>
    <?php include 'includes/sidebar.php';?>
    <main class="app-main">
      <div class="app-content-header">  
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Bidang</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bidang</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-primary">
                <div class="inner">
                  <h2>Pemberdayaan Masyarakat</h2>
                  <p class="mb-1">Anggaran: <strong>Rp1.100.000.000,00</strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp750.000,00</strong></p>
                </div>
                <a href="pengeluaran_bidang_each.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-danger">
                <div class="inner">
                  <h2>Pembinaan kemasyarakatan</h2>
                  <p class="mb-1">Anggaran: <strong>Rp17.730.909.167,00</strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp5.000.000,00</strong></p>
                </div>
                <a href="pengeluaran_bidang_each.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h2>Pelaksanaan Pembangunan Desa</h2>
                  <p class="mb-1">Anggaran: <strong>Rp1.074.093.536,00</strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp500.000,00</strong></p>
                </div>
                <a href="pengeluaran_bidang_each.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-secondary">
                <div class="inner">
                  <h2>Penyelengaraan Permintahan Desa</h2>
                  <p class="mb-1">Anggaran: <strong>Rp100.800.000,00</strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp75.000.000,00</strong></p>
                </div>
                <a href="pengeluaran_bidang_each.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>  
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-info">
                <div class="inner">
                  <h2>Penanggulangan Bencana, Darurat, dan Mendadak Desa</h2>
                  <p class="mb-1">Anggaran: <strong>Rp75.000.000,00</strong></p>
                  <p class="mb-1">Penggunaan: <strong>Rp75.000.000,00</strong></p>
                </div>
                <a href="pengeluaran_bidang_each.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info
                  <i class="bi bi-link-45deg"></i>
                </a>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
      <?php include 'includes/footer.php';?>
  </main>

</div>
</body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./dist/js/adminlte.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>