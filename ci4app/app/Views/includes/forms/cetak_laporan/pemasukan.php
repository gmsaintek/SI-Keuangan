<div class="modal fade" id="cetaklaporan_pemasukan" tabindex="-1" aria-labelledby="cetaklaporan_pemasukanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="<?= base_url('pemasukan/cetak') ?>" method="post" target="_blank">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Cetak Laporan Pemasukan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <!-- Format -->
          <div class="mb-3">
            <label class="form-label">Format Laporan</label>
            <select class="form-select" name="format" required>
              <option disabled selected>Pilih format</option>
              <option value="HTML">Langsung Cetak</option>
              <option value="PDF">PDF</option>
              <option value="XLSX">Excel (XLSX)</option>
              <option value="CSV">CSV</option>
            </select>
          </div>

          <!-- Periode -->
          <div class="mb-3">
            <label class="form-label">Periode Tanggal</label>
            <div class="input-group">
              <span class="input-group-text">Dari</span>
              <input type="date" name="start" class="form-control" required>
              <span class="input-group-text">Sampai</span>
              <input type="date" name="end" class="form-control" id="endDate_pemasukan_cetak" required>
            </div>
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="todayCheck_pemasukan_cetak">
              <label class="form-check-label" for="todayCheck_pemasukan_cetak">Sampai hari ini</label>
            </div>
          </div>

          <!-- Sumber Dana -->
          <div class="mb-3">
            <label class="form-label">Sumber Dana</label>
            <select class="form-select" name="sumber" required>
              <option disabled selected>Pilih salah satu</option>
              <option value="Semua">Semua</option>
              <option value="PBH">PBH</option>
              <option value="DD">Dana Desa</option>
              <option value="ADD">Alokasi Dana Desa</option>
              <option value="BKK">Bantuan Keuangan Khusus</option>
              <option value="Bunga">Bunga Bank</option>
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">Cetak</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>

      </div>
    </form>
  </div>
</div>

<script>
  document.getElementById('todayCheck_pemasukan_cetak').addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      document.getElementById('endDate_pemasukan_cetak').value = today;
    }
  });
</script>
