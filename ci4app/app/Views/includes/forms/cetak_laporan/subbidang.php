<div class="modal fade" id="cetaklaporan_subbidang_all" tabindex="-1" aria-labelledby="cetakLaporanSubbidangLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form-cetak" action="<?= base_url('pengeluaran_subbidang/cetak') ?>" method="get" target="_blank">
        <div class="modal-header">
          <h5 class="modal-title" id="cetakLaporanSubbidangLabel">Cetak Laporan Sub-bidang</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
          </div>
          <div class="mb-3">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" value="1" id="sampai_hari_ini" name="sampai_hari_ini" checked>
              <label class="form-check-label" for="sampai_hari_ini">Sampai Hari Ini</label>
            </div>
          </div>
            <div class="mb-3">
              <label class="form-label">Pilih format cetak laporan:</label>
              <div class="d-grid gap-2">
                <button type="submit" name="format" value="print" class="btn btn-primary" formtarget="_blank">
                  <i class="bi bi-printer me-2"></i> Cetak Langsung
                </button>
                <button type="submit" name="format" value="pdf" class="btn btn-danger" formtarget="_blank">
                  <i class="bi bi-file-earmark-pdf me-2"></i> Ekspor PDF
                </button>
                <button type="submit" name="format" value="excel" class="btn btn-success" formtarget="_blank">
                  <i class="bi bi-file-earmark-excel me-2"></i> Ekspor Excel
                </button>
                <button type="submit" name="format" value="csv" class="btn btn-warning text-dark" style="border: none;" formtarget="_blank">
                  <i class="bi bi-file-earmark-spreadsheet me-2"></i> Ekspor CSV
                </button>
              </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const selesai = document.getElementById('tanggal_selesai');
    const check = document.getElementById('sampai_hari_ini');
    function setToday() {
      if(check.checked){
        const today = new Date().toISOString().split('T')[0];
        selesai.value = today;
        selesai.readOnly = true;
      } else {
        selesai.readOnly = false;
      }
    }
    check.addEventListener('change', setToday);
    setToday();
  });
</script>
