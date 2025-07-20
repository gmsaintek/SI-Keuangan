<div class="modal fade" id="pemasukan_inputform" tabindex="-1" aria-labelledby="pemasukan_inputformLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pemasukan_inputformLabel">Input Pemasukan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_in_input" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_in_input" />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck_in_input" />
            <label class="form-check-label" for="todayCheck_in_input">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source_in_input" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source_in_input" required>
            <option selected>Pilih Sumber Dana</option>
            <option value="1">PBH</option>
            <option value="2">Dana Desa</option>
            <option value="3">Alokasi Dana Desa</option>
            <option value="4">Bantuan Keuangan Khusus Provinsi</option>
            <option value="5">Bunga Bank</option>
          </select>
        </div>
        <label for="basic-url_in_input" class="form-label">Jumlah</label>        
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
  const dateInput_in_input = document.getElementById('date_in_input');
  const todayCheck_in_input = document.getElementById('todayCheck_in_input');

  todayCheck_in_input.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_in_input.value = today;
    }
  });
</script>