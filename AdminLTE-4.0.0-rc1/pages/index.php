<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Siskeu Dashboard</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Siskeu Dashboard" />
    <meta name="author" content="Gantari Mengwi" />
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
            <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item active" aria-current="page">Periode (Month / Year)</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-6">
                <div class="small-box text-bg-success">
                  <div class="inner">
                    <h3>Rp19.915.500.703,00</h3>
                    <p>Pemasukan total</p>
                  </div>
                  <a href="pemasukan_input.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info
                    <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="small-box text-bg-danger">
                  <div class="inner">
                    <h3>Rp23.069.719.525,46</h3>
                    <p>Pengeluaran total</p>
                  </div>
                  <a href="pengeluaran_input.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info
                    <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-6">
                <div class="small-box text-bg-warning">
                  <div class="inner">
                    <h3>Rp3.154.018.822,46</h3>
                    <p>Surplus/<strong>defisit</strong> Anggaran</p>
                  </div>
                  <a href="transaksi_all.php" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info
                    <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 connectedSortable">
                <div class="card mb-3">
                  <div class="card-header">
                    <h3 class="card-title">Proporsi Pemasukan dan Pengeluaran</h3>
                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-end">
                        <li class="page-item" id="btnPemasukan"><a class="page-link" href="#">Pemasukan</a></li>
                        <li class="page-item" id="btnPengeluaran"><a class="page-link" href="#">Pengeluaran</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas id="pie-canvas" style="min-height: 250px; height: 250px; max-height: 300px; width: 100%;"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 connectedSortable">
                <div class="card mb-3">
                  <div class="card-header">
                    <h3 class="card-title">Line chart Pengeluaran dan Pemasukan</h3>
                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-end">
                        <li class="page-item" id="btnLineHari"><a class="page-link" href="#">Hari</a></li>
                        <li class="page-item" id="btnLineBulan"><a class="page-link" href="#">Bulan</a></li>
                        <li class="page-item" id="btnLineTahun"><a class="page-link" href="#">Tahun</a></li>
                        <li class="page-item" id="btnLine5Y"><a class="page-link" href="#">5 Tahun</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas id="line-canvas" style="min-height: 250px; height: 250px; max-height: 300px; width: 100%;"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          <?php include 'includes/footer.php';?>
    </main>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./dist/js/adminlte.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    let chartInstance;
    const ctx = document.getElementById('pie-canvas').getContext('2d');

    const pemasukanPie = {
      labels: ['Dana Desa', 'PBH', 'ADD', 'BKK Provinsi', 'Bunga Bank'],
      datasets: [{
        data: [934898000.00, 17730909167.00, 1074093536.00, 100800000.00, 75000000.00],
        backgroundColor: ['#007bff', '#28a745', '#ffc107', '#ab1099', '#ff99ff'],
      }]
    };

    const pengeluaranPie = {
      labels: ['Pelaksanaan Pembangunan Desa', 'Pembinaan Kemasyarakatan', 'Penyelengaraan Pemerintahan Desa', 'Pemberdayaan Masyarakat', 'Penanggulangan Bencana'],
      datasets: [{
        data: [9101487012.00, 7245209600.00, 5210459331.05, 1179125000.00, 333438582.41],
        backgroundColor: ['#007bff', '#28a745', '#ffc107', '#ab1099', '#ff99ff'],
      }]
    };

    function renderChart(type, data) {
      if (chartInstance) {
        chartInstance.destroy();
      }
      chartInstance = new Chart(ctx, {
        type: type,
        data: data,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              position: type === 'pie' ? 'bottom' : 'top'
            }
          },
          scales: type === 'line' ? {
            y: {
              beginAtZero: true
            }
          } : {}
        }
      });
    }

    renderChart('pie', pemasukanPie);
    // Pie button listeners
    document.getElementById('btnPemasukan').addEventListener('click', () => {
      renderChart('pie', pemasukanPie);
    });

    document.getElementById('btnPengeluaran').addEventListener('click', () => {
      renderChart('pie', pengeluaranPie);
    });

    // ==== LINE CHART SECTION ====
    let lineChartInstance;
    const ctxLine = document.getElementById('line-canvas').getContext('2d');

    const lineChartDataHari = {
      labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
      datasets: [
        {
          label: 'Pemasukan',
          data: [12500000, 9800000, 14500000, 12200000, 15800000, 13400000, 12000000],
          borderColor: '#28a745',
          backgroundColor: 'rgba(40, 167, 69, 0.2)',
          tension: 0.3,
          fill: true
        },
        {
          label: 'Pengeluaran',
          data: [11000000, 11200000, 13000000, 10000000, 15000000, 12800000, 9500000],
          borderColor: '#dc3545',
          backgroundColor: 'rgba(220, 53, 69, 0.2)',
          tension: 0.3,
          fill: true
        }
      ]
    };

    const lineChartDataBulan = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
      datasets: [
        {
          label: 'Pemasukan',
          data: [2000000000, 1800000000, 2200000000, 2100000000, 2500000000, 2400000000, 2300000000, 2600000000, 2700000000, 2800000000, 2900000000, 3000000000],
          borderColor: '#28a745',
          backgroundColor: 'rgba(40, 167, 69, 0.2)',
          tension: 0.3,
          fill: true
        },
        {
          label: 'Pengeluaran',
          data: [1900000000, 1700000000, 2100000000, 2000000000, 2400000000, 2300000000, 2200000000, 2500000000, 2600000000, 2700000000, 2800000000, 2950000000],
          borderColor: '#dc3545',
          backgroundColor: 'rgba(220, 53, 69, 0.2)',
          tension: 0.3,
          fill: true
        }
      ]
    };

    const lineChartDataTahun = {
      labels: ['2022', '2023', '2024'],
      datasets: [
        {
          label: 'Pemasukan',
          data: [15000000000, 17000000000, 19915500703],
          borderColor: '#28a745',
          backgroundColor: 'rgba(40, 167, 69, 0.2)',
          tension: 0.3,
          fill: true
        },
        {
          label: 'Pengeluaran',
          data: [16000000000, 20000000000, 23069719525.46],
          borderColor: '#dc3545',
          backgroundColor: 'rgba(220, 53, 69, 0.2)',
          tension: 0.3,
          fill: true
        }
      ]
    };

    const lineChartData5Y = {
      labels: ['2020', '2021', '2022', '2023', '2024'],
      datasets: [
        {
          label: 'Pemasukan',
          data: [8000000000, 10000000000, 15000000000, 17000000000, 19915500703],
          borderColor: '#28a745',
          backgroundColor: 'rgba(40, 167, 69, 0.2)',
          tension: 0.3,
          fill: true
        },
        {
          label: 'Pengeluaran',
          data: [7000000000, 9000000000, 16000000000, 20000000000, 23069719525.46],
          borderColor: '#dc3545',
          backgroundColor: 'rgba(220, 53, 69, 0.2)',
          tension: 0.3,
          fill: true
        }
      ]
    };

    function updateLineChart(data) {
      if (lineChartInstance) {
        lineChartInstance.destroy();
      }
      lineChartInstance = new Chart(ctxLine, {
        type: 'line',
        data: data,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { position: 'top' }
          },
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }

    // Default view
    updateLineChart(lineChartDataHari);

    // Line chart button listeners
    document.getElementById('btnLineHari').addEventListener('click', () => updateLineChart(lineChartDataHari));
    document.getElementById('btnLineBulan').addEventListener('click', () => updateLineChart(lineChartDataBulan));
    document.getElementById('btnLineTahun').addEventListener('click', () => updateLineChart(lineChartDataTahun));
    document.getElementById('btnLine5Y').addEventListener('click', () => updateLineChart(lineChartData5Y));
  });
</script>
</body>
</html>