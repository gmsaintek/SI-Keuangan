<!-- Modal Tambah Data -->
<div class="modal fade" id="kegiatan_input_form" tabindex="-1" aria-labelledby="kegiatan_input_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="<?= base_url('pengeluaran_kegiatan/store') ?>" class="modal-content text-white bg-dark">
      <?= csrf_field() ?>
      <div class="modal-header">
        <h5 class="modal-title" id="kegiatan_input_formLabel">Input Kegiatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3"><label class="form-label text-white">Kegiatan</label><input type="text" class="form-control" name="kegiatan" required></div>
        <div class="mb-3"><label class="form-label text-white">Tanggal Mulai</label><input type="date" class="form-control" name="tanggal_mulai" required></div>
        <div class="mb-3"><label class="form-label text-white">Tanggal Selesai</label><input type="date" class="form-control" name="tanggal_selesai" required></div>
        <div class="mb-3"><label class="form-label text-white">Bidang</label><input type="text" class="form-control" name="bidang" required></div>
        <div class="mb-3"><label class="form-label text-white">Anggaran</label><input type="number" class="form-control" name="anggaran" required></div>
        <div class="mb-3"><label class="form-label text-white">Pengeluaran</label><input type="number" class="form-control" name="pengeluaran" required></div>
        <div class="mb-3"><label class="form-label text-white">Kemajuan (%)</label><input type="number" class="form-control" name="kemajuan" required></div>
        <div class="mb-3"><label class="form-label text-white">Catatan</label><textarea class="form-control" name="catatan" rows="3"></textarea></div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      </div>
    </form>
  </div>
</div>
