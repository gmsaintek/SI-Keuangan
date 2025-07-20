<div class="modal fade" id="cetaklaporan_subbidang_all" tabindex="-1" aria-labelledby="cetaklaporan_subbidang_allLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_subbidang_allLabel">Cetak Laporan Pengeluaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_subbidang_all" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_subbidang_all" required>
                        <option selected>Pilih Format</option>
                        <option value="1">PDF</option>
                        <option value="2">XLSX</option>
                        <option value="3">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period_subbidang_all" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate_subbidang_all" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate_subbidang_all" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_subbidang_all" />
                        <label class="form-check-label" for="todayCheck_subbidang_all">Sampai hari ini</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary">Cetak</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
  const dateInput_subbidang_all = document.getElementById('endDate_subbidang_all');
  const todayCheck_subbidang_all = document.getElementById('todayCheck_subbidang_all');

  todayCheck_subbidang_all.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_subbidang_all.value = today;
    }
  });
</script>