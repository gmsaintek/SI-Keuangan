<div class="modal fade" id="cetaklaporan_alltransaksi" tabindex="-1" aria-labelledby="cetakLaporanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cetakLaporanLabel">Cetak Laporan Semua Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <form id="formFilterCetak">
          <div class="mb-3">
            <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
            <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal">
          </div>
          <div class="mb-3">
            <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
            <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">
          </div>
          <div class="mb-3">
            <label for="jenis_transaksi" class="form-label">Jenis Transaksi</label>
            <select class="form-select" id="jenis_transaksi" name="jenis_transaksi">
              <option value="">Semua</option>
              <option value="pemasukan">Pemasukan Saja</option>
              <option value="pengeluaran">Pengeluaran Saja</option>
            </select>
          </div>
        </form>
        <div class="d-grid gap-2 mt-2">
          <a id="btnCetakLangsung" href="<?= base_url('transaksi_all/cetak?format=print') ?>" target="_blank" class="btn btn-primary">Cetak Langsung</a>
          <a id="btnExportPDF" href="<?= base_url('transaksi_all/cetak?format=pdf') ?>" class="btn btn-danger">Export PDF</a>
          <a id="btnExportExcel" href="<?= base_url('transaksi_all/cetak?format=excel') ?>" class="btn btn-success">Export Excel</a>
          <a id="btnExportCSV" href="<?= base_url('transaksi_all/cetak?format=csv') ?>" class="btn btn-secondary">Export CSV</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function updateExportLinks() {
  // Get filter values
  let tglAwal = document.getElementById('tanggal_awal').value;
  let tglAkhir = document.getElementById('tanggal_akhir').value;
  let jenis = document.getElementById('jenis_transaksi').value;

  // Generate query string
  let params = [];
  if (tglAwal) params.push('tanggal_awal=' + encodeURIComponent(tglAwal));
  if (tglAkhir) params.push('tanggal_akhir=' + encodeURIComponent(tglAkhir));
  if (jenis) params.push('jenis_transaksi=' + encodeURIComponent(jenis));
  let qs = params.length ? '&' + params.join('&') : '';

  // Update all export links
  document.getElementById('btnCetakLangsung').href = "<?= base_url('transaksi_all/cetak?format=print') ?>" + qs;
  document.getElementById('btnExportPDF').href     = "<?= base_url('transaksi_all/cetak?format=pdf') ?>" + qs;
  document.getElementById('btnExportExcel').href   = "<?= base_url('transaksi_all/cetak?format=excel') ?>" + qs;
  document.getElementById('btnExportCSV').href     = "<?= base_url('transaksi_all/cetak?format=csv') ?>" + qs;
}

// Update links every time filter changes
document.getElementById('tanggal_awal').addEventListener('change', updateExportLinks);
document.getElementById('tanggal_akhir').addEventListener('change', updateExportLinks);
document.getElementById('jenis_transaksi').addEventListener('change', updateExportLinks);
</script>
