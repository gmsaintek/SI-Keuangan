<!-- Modal Cetak Laporan Bidang (REUSABLE) -->
<div class="modal fade" id="<?= esc($modalId ?? 'cetaklaporan_bidang_each') ?>"
     tabindex="-1" aria-labelledby="<?= esc(($modalId ?? 'cetaklaporan_bidang_each') . 'Label') ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="<?= esc(($modalId ?? 'cetaklaporan_bidang_each') . 'Label') ?>">
          <?= esc($modalTitle ?? 'Cetak Laporan Bidang') ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Pilih format cetak laporan:</p>
        <div class="d-flex flex-column gap-2">
          <a href="<?= base_url(($actionUrl ?? '') . '?format=print') ?>" target="_blank" class="btn btn-primary">
            <i class="bi bi-printer"></i> Cetak Langsung
          </a>
          <a href="<?= base_url(($actionUrl ?? '') . '?format=pdf') ?>" class="btn btn-danger">
            <i class="bi bi-file-earmark-pdf"></i> Ekspor PDF
          </a>
          <a href="<?= base_url(($actionUrl ?? '') . '?format=excel') ?>" class="btn btn-success">
            <i class="bi bi-file-earmark-excel"></i> Ekspor Excel
          </a>
          <a href="<?= base_url(($actionUrl ?? '') . '?format=csv') ?>" class="btn btn-warning">
            <i class="bi bi-file-earmark-spreadsheet"></i> Ekspor CSV
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
