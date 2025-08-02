<div class="modal fade" id="all_input_form" tabindex="-1" aria-labelledby="all_input_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?= base_url('transaksi_all/store') ?>">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="all_input_formLabel">Tambah Transaksi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Jenis Transaksi -->
          <div class="mb-3">
            <label for="inputType_all" class="form-label">Jenis Transaksi</label>
            <select class="form-select" id="inputType_all" name="jenis_transaksi" required>
              <option selected disabled value="">Pilih...</option>
              <option value="pemasukan">Pemasukan</option>
              <option value="pengeluaran">Pengeluaran</option>
            </select>
          </div>
          <!-- Tanggal -->
          <div class="mb-3">
            <label for="date_all" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date_all" name="tanggal" required />
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="todayCheck_all" />
              <label class="form-check-label" for="todayCheck_all">Hari ini</label>
            </div>
          </div>
          <!-- Nama -->
          <div class="mb-3">
            <label for="nama_all" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_all" name="nama" required />
          </div>
          <!-- Sumber Dana -->
          <div class="mb-3">
            <label for="source_all" class="form-label">Sumber Dana</label>
            <select class="form-select" id="source_all" name="sumber" required>
              <option selected disabled value="">Pilih...</option>
              <option value="PBH">PBH</option>
              <option value="DD">Dana Desa</option>
              <option value="ADD">Alokasi Dana Desa</option>
              <option value="BKK">Bantuan Keuangan Khusus Provinsi</option>
              <option value="Bunga">Bunga Bank</option>
            </select>
          </div>
          <!-- Form Pemasukan -->
          <div id="pemasukanForm_all" class="d-none">
            <label for="jumlah_pemasukan_all" class="form-label">Jumlah Pemasukan</label>
            <div class="input-group mb-3">
              <span class="input-group-text">Rp</span>
              <input type="number" class="form-control" name="jumlah_pemasukan" id="jumlah_pemasukan_all" aria-label="Jumlah Pemasukan">
              <span class="input-group-text">.00</span>
            </div>
            <div class="mb-3">
              <label for="note_all_in" class="form-label">Catatan</label>
              <textarea class="form-control" name="catatan" id="note_all_in" rows="3"></textarea>
            </div>
          </div>
          <!-- Form Pengeluaran -->
          <div id="pengeluaranForm_all" class="d-none">
            <label for="jumlah_pengeluaran_all" class="form-label">Jumlah Pengeluaran</label>
            <div class="input-group mb-3">
              <span class="input-group-text">Rp</span>
              <input type="number" class="form-control" name="jumlah_pengeluaran" id="jumlah_pengeluaran_all" aria-label="Jumlah Pengeluaran">
              <span class="input-group-text">.00</span>
            </div>
            <div class="mb-3">
              <label for="kegiatan_all" class="form-label">Kegiatan</label>
              <input type="text" class="form-control" id="kegiatan_all" name="kegiatan" />
            </div>
            <div class="mb-3">
              <label for="cat_all" class="form-label">Bidang Pengeluaran</label>
              <select class="form-select" id="cat_all" name="bidang">
                <option selected disabled value="">Pilih...</option>
                <option value="Semua">Semua</option>
                <option value="Pemberdayaan">Pemberdayaan Masyarakat</option>
                <option value="Bencana">Penanggulangan Bencana, Darurat, dan Mendesak Desa</option>
                <option value="Pembinaan">Pembinaan Kemasyarakatan</option>
                <option value="Pembangunan">Pelaksanaan Pembangunan Desa</option>
                <option value="Pemerintahan">Penyelenggaraan Pemerintahan Desa</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="sub-cat_all" class="form-label">Sub-bidang Pengeluaran</label>
              <select class="form-select" id="sub-cat_all" name="sub_bidang">
                <option selected disabled value="">Pilih...</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Pembangunan">Pembangunan</option>
                <option value="...">...</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="note_all_out" class="form-label">Catatan</label>
              <textarea class="form-control" name="catatan" id="note_all_out" rows="3"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Simpan</button>
          <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const inputType_all = document.getElementById('inputType_all');
  const pemasukanForm_all = document.getElementById('pemasukanForm_all');
  const pengeluaranForm_all = document.getElementById('pengeluaranForm_all');

  inputType_all.addEventListener('change', function () {
    pemasukanForm_all.classList.add('d-none');
    pengeluaranForm_all.classList.add('d-none');
    if (this.value === 'pemasukan') {
      pemasukanForm_all.classList.remove('d-none');
    } else if (this.value === 'pengeluaran') {
      pengeluaranForm_all.classList.remove('d-none');
    }
  });

  // Set tanggal otomatis jika checkbox dicentang
  const dateInput_all = document.getElementById('date_all');
  const todayCheck_all = document.getElementById('todayCheck_all');
  todayCheck_all.addEventListener('change', function () {
    if (this.checked) {
      const today = new Date().toISOString().split('T')[0];
      dateInput_all.value = today;
    }
  });
</script>
