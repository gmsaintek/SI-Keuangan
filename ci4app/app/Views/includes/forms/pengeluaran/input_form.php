<!-- Modal Input Pengeluaran -->
<div class="modal fade" id="pengeluaran_input_form" tabindex="-1" aria-labelledby="pengeluaran_input_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?= base_url('pengeluaran/store') ?>" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="pengeluaran_input_formLabel">Input Pengeluaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="date_out_input" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date_out_input" name="tanggal" required />
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="todayCheck" />
              <label class="form-check-label" for="todayCheck">Hari ini</label>
            </div>
          </div>

          <div class="mb-3">
            <label for="nama_out_input" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_out_input" name="nama" required />
          </div>

          <div class="mb-3">
            <label for="source_out_input" class="form-label">Sumber Dana</label>
            <select class="form-select" id="source_out_input" name="sumber" required>
              <option selected disabled>Pilih...</option>
              <option value="PBH">PBH</option>
              <option value="DD">Dana Desa</option>
              <option value="ADD">Alokasi Dana Desa</option>
              <option value="BKK">Bantuan Keuangan Khusus Provinsi</option>
              <option value="Bunga">Bunga Bank</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="activity_out_input" class="form-label">Kegiatan</label>
            <input type="text" class="form-control" id="activity_out_input" name="kegiatan" required />
          </div>

          <div class="mb-3">
            <label for="cat_out_input" class="form-label">Bidang Pengeluaran</label>
            <select class="form-select" id="cat_out_input" name="bidang" required>
              <option selected disabled>Pilih...</option>
              <option value="Pemberdayaan">Pemberdayaan Masyarakat</option>
              <option value="Bencana">Penanggulangan Bencana</option>
              <option value="Pembinaan">Pembinaan Kemasyarakatan</option>
              <option value="Pembangunan">Pelaksanaan Pembangunan Desa</option>
              <option value="Pemerintahan">Penyelenggaraan Pemerintahan Desa</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="sub-cat_out_input" class="form-label">Sub-bidang</label>
            <select class="form-select" id="sub-cat_out_input" name="sub_bidang" required>
              <option selected disabled>Pilih...</option>
              <option value="Pendidikan">Pendidikan</option>
              <option value="Pembangunan">Pembangunan</option>
              <option value="...">...</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Pengeluaran</label>
            <div class="input-group">
              <span class="input-group-text">Rp</span>
              <input type="number" class="form-control" name="jumlah_pengeluaran" required />
              <span class="input-group-text">.00</span>
            </div>
          </div>

          <div class="mb-3">
            <label for="nota" class="form-label">Nota (upload)</label>
            <input class="form-control" type="file" id="nota" name="nota" />
          </div>

          <div class="mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const dateInput = document.getElementById('date_out_input');
  const todayCheck = document.getElementById('todayCheck');
  todayCheck.addEventListener('change', function () {
    dateInput.value = this.checked ? new Date().toISOString().split('T')[0] : '';
  });
</script>
