<div class="modal fade" id="cetaklaporan_sumber_each" tabindex="-1" aria-labelledby="cetaklaporan_sumber_eachLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
    
            <div class="modal-header">
                <h5 class="modal-title" id="cetaklaporan_sumber_eachLabel">Cetak Laporan Pengeluaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="format_sumber_each" class="form-label">Format Laporan</label>
                    <select class="form-select" id="format_sumber_each" required>
                        <option selected disabled>Pilih...</option>
                        <option value="PDF">PDF</option>
                        <option value="XLSX">XLSX</option>
                        <option value="CSV">CSV</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="period_sumber_each" class="form-label">Periode</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control" id="startDate_sumber_each" required>
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control" id="endDate_sumber_each" required>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="todayCheck_sumber_each" />
                        <label class="form-check-label" for="todayCheck_sumber_each">Sampai hari ini</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning">Cetak</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
  const dateInput_sumber_each = document.getElementById('endDate_sumber_each');
  const todayCheck_sumber_each = document.getElementById('todayCheck_sumber_each');

  todayCheck_sumber_each.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_sumber_each.value = today;
    }
  });
</script>