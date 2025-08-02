<div class="modal fade" id="pengeluaran_edit_form_<?= $row['id'] ?>" tabindex="-1" aria-labelledby="pengeluaran_edit_formLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?= base_url('pengeluaran/update/' . $row['id']) ?>" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="pengeluaran_edit_formLabel">Edit Pengeluaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <input type="date" class="form-control mb-3" name="tanggal" value="<?= esc($row['tanggal'] ?? '') ?>" required />
          <input type="text" class="form-control mb-3" name="nama" value="<?= esc($row['nama'] ?? '') ?>" required />
          <input type="text" class="form-control mb-3" name="sumber" value="<?= esc($row['sumber'] ?? '') ?>" required />
          <input type="text" class="form-control mb-3" name="kegiatan" value="<?= esc($row['kegiatan'] ?? '') ?>" required />
          <input type="text" class="form-control mb-3" name="bidang" value="<?= esc($row['bidang'] ?? '') ?>" required />
          <input type="text" class="form-control mb-3" name="sub_bidang" value="<?= esc($row['sub_bidang'] ?? '') ?>" required />

          <!-- Field jumlah_pengeluaran: ambil dari jumlah_transaksi -->
          <input type="number" class="form-control mb-3" name="jumlah_pengeluaran" 
            value="<?= esc($row['jumlah_pengeluaran'] ?? $row['jumlah_transaksi'] ?? '') ?>" required />

          <input type="file" class="form-control mb-3" name="nota" />
          <textarea class="form-control" name="catatan"><?= esc($row['catatan'] ?? '') ?></textarea>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
