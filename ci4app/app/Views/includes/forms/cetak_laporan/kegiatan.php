<!-- Modal Cetak Laporan -->
<div class="modal fade" id="cetaklaporan_kegiatan_all" tabindex="-1" aria-labelledby="cetaklaporan_kegiatan_allLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" id="cetakForm_kegiatan_all" action="<?= base_url('pengeluaran_kegiatan/cetak') ?>" class="modal-content">
      <?= csrf_field() ?>

      <div class="modal-header">
        <h5 class="modal-title" id="cetaklaporan_kegiatan_allLabel">Cetak Laporan Pengeluaran Kegiatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3">
          <label for="format_kegiatan_all" class="form-label">Format Laporan</label>
          <select class="form-select" name="format" id="format_kegiatan_all" required>
            <option selected disabled>Pilih Format</option>
            <option value="print">Cetak Langsung</option>
            <option value="PDF">PDF</option>
            <option value="XLSX">Excel</option>
            <option value="CSV">CSV</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Periode</label>
          <div class="input-group">
            <span class="input-group-text">Dari</span>
            <input type="date" class="form-control" name="start_date" id="startDate_kegiatan_all" required>
            <span class="input-group-text">Sampai</span>
            <input type="date" class="form-control" name="end_date" id="endDate_kegiatan_all" required>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck_kegiatan_all">
            <label class="form-check-label" for="todayCheck_kegiatan_all">Sampai hari ini</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="cat_kegiatan_all" class="form-label">Bidang</label>
          <select class="form-select" name="bidang" id="cat_kegiatan_all" required>
            <option selected disabled>Pilih Bidang</option>
            <option value="Semua">Semua</option>
            <option value="Pemberdayaan">Pemberdayaan Masyarakat</option>
            <option value="Bencana">Penanggulangan Bencana, Darurat, dan Mendesak Desa</option>
            <option value="Pembinaan">Pembinaan Kemasyarakatan</option>
            <option value="Pembangunan">Pelaksanaan Pembangunan Desa</option>
            <option value="Pemerintahan">Penyelenggaraan Pemerintahan Desa</option>
          </select>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Cetak</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </form>
  </div>
</div>

<script>
  // Format = print → target = "_blank", lainnya tidak
  const form_kegiatan = document.getElementById('cetakForm_kegiatan_all');
  const formatSelect_kegiatan = document.getElementById('format_kegiatan_all');

  formatSelect_kegiatan.addEventListener('change', function () {
    if (this.value === 'print') {
      form_kegiatan.setAttribute('target', '_blank');
    } else {
      form_kegiatan.removeAttribute('target');
    }
  });

  // Checkbox "sampai hari ini"
  document.getElementById('todayCheck_kegiatan_all').addEventListener('change', function () {
    const today = new Date().toISOString().split('T')[0];
    if (this.checked) {
      document.getElementById('endDate_kegiatan_all').value = today;
    }
  });
</script>
