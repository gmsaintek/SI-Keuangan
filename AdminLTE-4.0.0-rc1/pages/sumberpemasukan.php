<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Siskeu Dashboard</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Siskeu Dashboard" />
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
              <h3 class="mb-0">Sumber Dana</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sumber Dana</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="app-content">
        <div class="container-fluid">
          <div class="row">
            <!-- Periode -->
          </div>
          <div class="row">
            <h4 class="mb-3">Total Sumber Dana</h4>
          </div>
          <div class="row">
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-success">
                <div class="inner">
                  <h3>Rp19.804.701.703,00</h3>
                  <p>Total Sumber Dana</p>
                </div>
              </div>
            </div>
          </div> 
          <div class="row">
            <h4 class="mb-3">Sumber Dana</h4>
          </div>
          <div class="row">
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-primary">
                <div class="inner">
                  <h3>Rp924.898.000,00</h3>
                  <p>Dana Desa</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-danger">
                <div class="inner">
                  <h3>Rp17.730.909.167,00</h3>
                  <p>PBH</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h3>Rp1.074.093.536,00</h3>
                  <p>Alokasi Dana Desa</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-secondary">
                <div class="inner">
                  <h3>Rp100.800.000,00</h3>
                  <p>Bantuan Keuangan Khusus</p>
                </div>
              </div>
            </div>  
            <div class="col-lg-4 col-6">
              <div class="small-box text-bg-info">
                <div class="inner">
                  <h3>Rp75.000.000,00</h3>
                    <p>Bunga Bank</p>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </main>
  <?php include 'includes/footer.php';?>
</div>
</body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./dist/js/adminlte.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>