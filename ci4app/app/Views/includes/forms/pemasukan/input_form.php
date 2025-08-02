<?php helper('url'); ?>
<div class="modal fade" id="pemasukan_inputform" tabindex="-1" aria-labelledby="pemasukan_inputformLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pemasukan_inputformLabel">Input Pemasukan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="<?= base_url('/pemasukan/store') ?>">
        <?= csrf_field() ?>
        <div class="modal-body">
          <div class="mb-3">
            <label for="date_in_input" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date_in_input" name="tanggal" required />
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" id="todayCheck_in_input" onclick="document.getElementById('date_in_input').value = new Date().toISOString().split('T')[0]">
              <label class="form-check-label" for="todayCheck_in_input">Hari ini</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="source_in_input" class="form-label">Sumber Dana</label>
            <select class="form-select" id="source_in_input" name="sumber_dana" required>
              <option selected disabled>Pilih...</option>
              <option value="PBH">PBH</option>
              <option value="DD">Dana Desa</option>
              <option value="ADD">Alokasi Dana Desa</option>
              <option value="BKK">Bantuan Keuangan Khusus Provinsi</option>
              <option value="Bunga">Bunga Bank</option>
            </select>
          </div>
          <label for="basic-url_in_input" class="form-label">Jumlah</label>        
          <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="number" class="form-control" name="jumlah" required>
            <span class="input-group-text">.00</span>
          </div>
          <div class="mb-3">
            <label for="note" class="form-label">Catatan</label>
            <textarea class="form-control" id="note" name="catatan" rows="3"></textarea>
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
