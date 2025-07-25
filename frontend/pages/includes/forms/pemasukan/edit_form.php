<div class="modal fade" id="pemasukan_editform" tabindex="-1" aria-labelledby="pemasukan_editformLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pemasukan_editformLabel">Edit Pemasukan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_edit_in" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_edit_in" required />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck" />
            <label class="form-check-label" for="todayCheck">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source_edit_in" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source_edit_in" required>
            <option selected disabled>Pilih...</option>
              <option value="PBH">PBH</option>
              <option value="DD">Dana Desa</option>
              <option value="ADD">Alokasi Dana Desa</option>
              <option value="BKK">Bantuan Keuangan Khusus Provinsi</option>
              <option value="Bunga">Bunga Bank</option>
          </select>
        </div>
        <label for="basic-url" class="form-label">Jumlah</label>        
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah Pemasukan">
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="note_edit_in" class="form-label">Catatan</label>
          <textarea class="form-control" id="note_edit_in" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<script>
  const dateInput = document.getElementById('date');
  const todayCheck = document.getElementById('todayCheck');

  todayCheck.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput.value = today;
    }
  });
</script>