<div class="modal fade" id="mixedForm" tabindex="-1" aria-labelledby="mixedFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="mixedFormLabel">Tambah Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="mb-3">
          <label for="inputType" class="form-label">Jenis Transaksi</label>
          <select class="form-select" id="inputType">
            <option selected disabled>Pilih...</option>
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
          </select>
        </div>

        <div id="pemasukanForm" class="d-none">
          <label for="basic-url" class="form-label">Jumlah Pemasukan</label>
          <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control" aria-label="Jumlah Pemasukan">
            <span class="input-group-text">.00</span>
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
          <div class="mb-3">
            <label for="source" class="form-label">Kategori Pemasukan</label>
            <select class="form-select" id="cat">
              <option selected>Pilih Kategori Pemasukan</option>
              <option value="1">Pajak</option>
              <option value="2">Sosial</option>
              <option value="3">Usaha</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date" />
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="todayCheck" />
              <label class="form-check-label" for="todayCheck">Hari ini</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="note" class="form-label">Catatan</label>
            <textarea class="form-control" id="note" rows="3"></textarea>
          </div>
        </div>

        <div id="pengeluaranForm" class="d-none">
          <label for="basic-url" class="form-label">Jumlah pengeluaran</label>
          <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control" aria-label="Jumlah pengeluaran" required>
            <span class="input-group-text">.00</span>
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
          <div class="mb-3">
            <label for="source" class="form-label">Kegiatan</label>
            <select class="form-select" id="source">
              <option selected>Pilih Kegiatan</option>
              <option value="1">PBH</option>
              <option value="2">Sumbangan</option>
              <option value="3">BUMDes</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="source" class="form-label">Kategori Pengeluaran</label>
            <select class="form-select" id="cat">
              <option selected>Pilih Kategori pengeluaran</option>
              <option value="1">Pajak</option>
              <option value="2">Sosial</option>
              <option value="3">Usaha</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date"  required />
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="todayCheck" />
              <label class="form-check-label" for="todayCheck">Hari ini</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="note" class="form-label">Catatan</label>
            <textarea class="form-control" id="note" rows="3"></textarea>
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
  const inputType = document.getElementById('inputType');
  const pemasukanForm = document.getElementById('pemasukanForm');
  const pengeluaranForm = document.getElementById('pengeluaranForm');

  inputType.addEventListener('change', function () {
    const type = this.value;
    pemasukanForm.classList.add('d-none');
    pengeluaranForm.classList.add('d-none');

    if (type === 'pemasukan') {
      pemasukanForm.classList.remove('d-none');
    } else if (type === 'pengeluaran') {
      pengeluaranForm.classList.remove('d-none');
    }
  });
</script>
