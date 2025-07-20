<div class="modal fade" id="in_subbidang_input_form" tabindex="-1" aria-labelledby="in_subbidang_input_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="in_subbidang_input_formLabel">Input pengeluaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="date_subbidang_input" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="date_subbidang_input"  required />
          <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="todayCheck_subbidang_input" />
            <label class="form-check-label" for="todayCheck_subbidang_input">Hari ini</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="source_subbidang_input" class="form-label">Sumber Dana</label>
          <select class="form-select" id="source_subbidang_input" required>
            <option selected disabled>Pilih...</option>
            <option value="1">PBH</option>
            <option value="2">Dana Desa</option>
            <option value="3">Alokasi Dana Desa</option>
            <option value="4">Bantuan Keuangan Khusus Provinsi</option>
            <option value="5">Bunga Bank</option>
          </select>
        </div>
               <div class="mb-3">
          <label for="activity_subbidang_input" class="form-label">Kegiatan</label>
          <select class="form-select" id="activity_subbidang_input">
            <option selected>Pilih...</option>
            <option value="1">Pengelolaan Perpustakaan SD</option>
            <option value="2">...</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="cat_bidang_input" class="form-label">Bidang Pengeluaran</label>
          <select class="form-select" id="cat_bidang_input" required>
            <option selected disabled>Pilih...</option>
            <option value="1">Pemberdayaan Masyarakat</option>
            <option value="2">Penanggulangan Bencana, Darurat, dan Mendesak Desa</option>
            <option value="3">Pembinaan Kemasyarakatan</option>
            <option value="4">Pelaksanaan Pembangunan Desa</option>
            <option value="5">Penyelenggaraan Pemerintahan Desa</option>
          </select>
        </div>
        <label for="basic-url_subbidang_input" class="form-label">Jumlah pengeluaran</label>
        <div class="input-group mb-3">
          <span class="input-group-text">Rp</span>
          <input type="number" class="form-control" aria-label="Jumlah pengeluaran" required>
          <span class="input-group-text">.00</span>
        </div>
        <div class="mb-3">
          <label for="formFile_subbidang_input" class="form-label">Nota</label>
          <input class="form-control" type="file" id="formFile_subbidang_input" required>
        </div>          
        <div class="mb-3">
          <label for="note_subbidang_input" class="form-label">Catatan</label>
          <textarea class="form-control" id="note_subbidang_input" rows="3"></textarea>
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
  const dateInput_subbidang_input = document.getElementById('date_subbidang_input');
  const todayCheck_subbidang_input = document.getElementById('todayCheck_subbidang_input');

  todayCheck_subbidang_input.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_subbidang_input.value = today;
    }
  });
</script>