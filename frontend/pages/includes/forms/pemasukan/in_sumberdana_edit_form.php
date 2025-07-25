<div class="modal fade" id="in_sumberdana_editform" tabindex="-1" aria-labelledby="in_sumberdana_editformLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="in_sumberdana_editformLabel">Edit Sumber dana</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_sumber_edit" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_sumber_edit" />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck_sumber_edit" />
            <label class="form-check-label" for="todayCheck_sumber_edit">Hari ini</label>
          </div>
        </div>
        <label for="basic-url_sumber_edit" class="form-label">Jumlah</label>        
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah Pemasukan" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="note_sumber_edit" class="form-label">Catatan</label>
          <textarea class="form-control" id="note_sumber_edit" rows="3"></textarea>
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
  const dateInput_sumber_edit = document.getElementById('date_sumber_edit');
  const todayCheck_sumber_edit = document.getElementById('todayCheck_sumber_edit');

  todayCheck_sumber_edit.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_sumber_edit.value = today;
    }
  });
</script>