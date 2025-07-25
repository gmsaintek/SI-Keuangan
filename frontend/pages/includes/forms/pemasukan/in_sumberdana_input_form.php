<div class="modal fade" id="in_sumberdana_inputform" tabindex="-1" aria-labelledby="in_sumberdana_inputformLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="in_sumberdana_inputformLabel">Input Sumber dana</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_sumber_input" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_sumber_input" required />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck_sumber_input" />
            <label class="form-check-label" for="todayCheck_sumber_input">Hari ini</label>
          </div>
        </div>
        <label for="basic-url_sumber_input" class="form-label">Jumlah</label>        
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah Pemasukan" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="note" class="form-label">Catatan</label>
          <textarea class="form-control" id="note" rows="3"></textarea>
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
  const dateInput_sumber_input = document.getElementById('date_sumber_input');
  const todayCheck_sumber_input = document.getElementById('todayCheck_sumber_input');

  todayCheck_sumber_input.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_sumber_input.value = today;
    }
  });
</script>