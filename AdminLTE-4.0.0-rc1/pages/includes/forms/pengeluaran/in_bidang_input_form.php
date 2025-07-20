<div class="modal fade" id="in_bidang_input_form" tabindex="-1" aria-labelledby="in_bidang_input_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="in_bidang_input_formLabel">Input pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_bidang_input" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_bidang_input"  required />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck" />
            <label class="form-check-label" for="todayCheck">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source_bidang_input" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source_bidang_input" required>
            <option selected disabled>Pilih...</option>
            <option value="1">PBH</option>
            <option value="2">Dana Desa</option>
            <option value="3">Alokasi Dana Desa</option>
            <option value="4">Bantuan Keuangan Khusus Provinsi</option>
            <option value="5">Bunga Bank</option>
          </select>
        </div>
        
        <div class="mb-3">
          <label for="sub-cat_bidang_input" class="form-label">Sub-bidang Pengeluaran</label>
          <select class="form-select" id="sub-cat_bidang_input" required>
            <option selected disabled>Pilih...</option>
            <option value="1">Pendidikan</option>
            <option value="2">Pembangunan</option>
            <option value="3">...</option>
          </select>
        </div>
        <label for="basic-url_bidang_input" class="form-label">Jumlah pengeluaran</label>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah pengeluaran" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="formFile_bidang_input" class="form-label">Nota</label>
          <input class="form-control" type="file" id="formFile_bidang_input" required>
        </div>          
        <div class="mb-3">
          <label for="note_bidang_input" class="form-label">Catatan</label>
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
  const dateInput_bidang_input = document.getElementById('date_bidang_input');
  const todayCheck_bidang_input = document.getElementById('todayCheck_bidang_input');

  todayCheck_bidang_input.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_bidang_input.value = today;
    }
  });
</script>