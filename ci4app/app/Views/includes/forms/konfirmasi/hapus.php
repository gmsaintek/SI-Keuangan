<div class="modal fade" id="hapus_<?= esc($row['id']) ?>" tabindex="-1" aria-labelledby="hapusLabel<?= esc($row['id']) ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= esc($actionUrl) ?>" method="post">
        <?= csrf_field() ?>
        <div class="modal-header">
          <h5 class="modal-title" id="hapusLabel<?= esc($row['id']) ?>">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <p>
            Yakin ingin menghapus data
            <strong>
              <?php
                // Cek urutan label universal, tambah field yang umum dipakai semua modul
                $label = $row['nama_bidang']   // untuk pengeluaran_subbidang dan modul lain yang pakai
                      ?? $row['nama']         
                      ?? $row['judul']        
                      ?? $row['kegiatan']     
                      ?? $row['bidang']       
                      ?? $row['subbidang']    
                      ?? $row['sumber']       
                      ?? $row['deskripsi']    
                      ?? $row['id']           
                      ?? '[Data Tidak Diketahui]';
                echo esc($label);
              ?>
            </strong>
            <?php if (!empty($row['tanggal'])): ?>
              pada tanggal <strong><?= esc($row['tanggal']) ?></strong>
            <?php endif; ?>
            <?php if (!empty($row['jumlah_transaksi'])): ?>
              sebesar <strong>Rp<?= number_format($row['jumlah_transaksi'], 0, ',', '.') ?></strong>
            <?php elseif (!empty($row['jumlah'])): ?>
              sebesar <strong>Rp<?= number_format($row['jumlah'], 0, ',', '.') ?></strong>
            <?php elseif (!empty($row['nominal'])): ?>
              sebesar <strong>Rp<?= number_format($row['nominal'], 0, ',', '.') ?></strong>
            <?php endif; ?>
          </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
