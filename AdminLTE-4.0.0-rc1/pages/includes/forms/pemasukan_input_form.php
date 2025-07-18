<div class="modal fade" id="pemasukan_inputform" tabindex="-1" aria-labelledby="pemasukan_inputformLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pemasukan_inputformLabel">Input Pemasukan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="basic-url" class="form-label">Jumlah Pemasukan</label>
        <div class="mb-3">
          <label for="date" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date" />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck" />
            <label class="form-check-label" for="todayCheck">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source">
            <option selected>Pilih Sumber Dana</option>
            <option value="1">PBH</option>
            <option value="2">Sumbangan</option>
            <option value="3">BUMDes</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah Pemasukan">
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="note" class="form-label">Catatan</label>
          <textarea class="form-control" id="note" rows="3"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan</button>
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