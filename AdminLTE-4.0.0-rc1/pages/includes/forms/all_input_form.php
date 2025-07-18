<div class="modal fade" id="all_input_form" tabindex="-1" aria-labelledby="all_input_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="all_input_formLabel">Tambah Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3">
          <label for="inputType_all" class="form-label">Jenis Transaksi</label>
          <select class="form-select" id="inputType_all">
            <option selected disabled>Pilih...</option>
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
          </select>
        </div>

        <div id="pemasukanForm_all" class="d-none">
          <label for="basic-url_all" class="form-label">Jumlah Pemasukan</label>
          <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control" aria-label="Jumlah Pemasukan">
            <span class="input-group-text">.00</span>
          </div>
          <div class="mb-3">
            <label for="source_all" class="form-label">Sumber Dana</label>
            <select class="form-select" id="source_all">
              <option selected>Pilih Sumber Dana</option>
              <option value="1">PBH</option>
              <option value="2">Sumbangan</option>
              <option value="3">BUMDes</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="date_all" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date_all" />
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="todayCheck_all" />
              <label class="form-check-label" for="todayCheck_all">Hari ini</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="note_all" class="form-label">Catatan</label>
            <textarea class="form-control" id="note_all" rows="3"></textarea>
          </div>
        </div>

        <div id="pengeluaranForm_all" class="d-none">
          <label for="basic-url_all" class="form-label">Jumlah pengeluaran</label>
          <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control" aria-label="Jumlah pengeluaran" required>
            <span class="input-group-text">.00</span>
          </div>
          <div class="mb-3">
            <label for="source_all" class="form-label">Sumber Dana</label>
            <select class="form-select" id="source_all">
              <option selected>Pilih Sumber Dana</option>
              <option value="1">PBH</option>
              <option value="2">Sumbangan</option>
              <option value="3">BUMDes</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="activity_all" class="form-label">Kegiatan</label>
            <select class="form-select" id="activity_all">
              <option selected>Pilih Kegiatan</option>
              <option value="1">PBH</option>
              <option value="2">Sumbangan</option>
              <option value="3">BUMDes</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="cat_all" class="form-label">Bidang Pengeluaran</label>
            <select class="form-select" id="cat_all">
              <option selected>Pilih Bidang pengeluaran</option>
              <option value="1">Pajak</option>
              <option value="2">Sosial</option>
              <option value="3">Usaha</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="sub-cat_all" class="form-label">Sub-bidang Pengeluaran</label>
            <select class="form-select" id="sub-cat_all">
              <option selected>Pilih Sub-bidang pengeluaran</option>
              <option value="1">Pajak</option>
              <option value="2">Sosial</option>
              <option value="3">Usaha</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="date_all" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date_all"  required />
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="todayCheck_all" />
              <label class="form-check-label" for="todayCheck_all">Hari ini</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="note_all" class="form-label">Catatan</label>
            <textarea class="form-control" id="note_all" rows="3"></textarea>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary">Simpan</button>
      </div>

    </div>
  </div>
</div>

<script>
  const inputType_all = document.getElementById('inputType_all');
  const pemasukanForm_all = document.getElementById('pemasukanForm_all');
  const pengeluaranForm_all = document.getElementById('pengeluaranForm_all');

  inputType_all.addEventListener('change', function () {
    const type = this.value;
    pemasukanForm_all.classList.add('d-none');
    pengeluaranForm_all.classList.add('d-none');

    if (type === 'pemasukan') {
      pemasukanForm_all.classList.remove('d-none');
    } else if (type === 'pengeluaran') {
      pengeluaranForm_all.classList.remove('d-none');
    }
  });
</script>

<script>
  const dateInput_all = document.getElementById('date_all');
  const todayCheck_all = document.getElementById('todayCheck_all');

  todayCheck_all.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_all.value = today;
    }
  });
</script>