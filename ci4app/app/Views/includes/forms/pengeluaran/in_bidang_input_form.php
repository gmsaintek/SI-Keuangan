<!-- Modal Input Pengeluaran Bidang -->
<div class="modal fade" id="inputBidangModal" tabindex="-1" aria-labelledby="inputBidangModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= isset($actionUrlStore) ? $actionUrlStore : '' ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="inputBidangModalLabel">Tambah Pengeluaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <div class="d-flex align-items-center gap-2">
              <input type="date" class="form-control" id="tanggal" name="tanggal" required>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="hariIniCheckbox" onclick="isiTanggalHariIni()">
                <label class="form-check-label" for="hariIniCheckbox" style="font-size: 13px;">Hari ini</label>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="sumber" class="form-label">Sumber</label>
            <input type="text" class="form-control" id="sumber" name="sumber" required>
          </div>
          <div class="mb-3">
            <label for="kegiatan" class="form-label">Kegiatan</label>
            <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
          </div>
          <div class="mb-3">
            <label for="subbidang" class="form-label">Sub-bidang</label>
            <input type="text" class="form-control" id="subbidang" name="subbidang" required>
          </div>
          <div class="mb-3">
            <label for="jumlah_pengeluaran" class="form-label">Jumlah Pengeluaran (Rp)</label>
            <input type="number" class="form-control" id="jumlah_pengeluaran" name="jumlah_pengeluaran" required>
          </div>
          <div class="mb-3">
            <label for="nota" class="form-label">Nota (Upload Foto/Scan)</label>
            <input type="file" class="form-control" id="nota" name="nota" accept="image/*,application/pdf">
          </div>
          <div class="mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <input type="text" class="form-control" id="catatan" name="catatan">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
function isiTanggalHariIni() {
    const checkbox = document.getElementById('hariIniCheckbox');
    const tanggalInput = document.getElementById('tanggal');
    if (checkbox.checked) {
        const now = new Date();
        const bulan = String(now.getMonth() + 1).padStart(2, '0');
        const hari = String(now.getDate()).padStart(2, '0');
        const tanggal = now.getFullYear() + '-' + bulan + '-' + hari;
        tanggalInput.value = tanggal;
    }
}
</script>
