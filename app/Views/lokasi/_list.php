<?php foreach ($produk as $item): ?>
  <div class="col">
    <div class="card h-100 shadow-sm border-0" style="border-radius: 15px;">
      <div class="p-3">
        <img src="<?= base_url('images/' . $item['sampul']) ?>"
             class="card-img-top"
             alt="<?= esc($item['nama']) ?>"
             style="border-radius: 10px; height: 200px; object-fit: cover;">
      </div>

      <div class="card-body pt-0">
        <h5 class="fw-bold"><?= esc($item['nama']) ?></h5>

        <p class="text-secondary mb-1">
          <i class="bi bi-geo-alt-fill"></i> <?= esc($item['alamat']) ?>
        </p>

        <p class="text-warning mb-1">
          ★ <?= esc($item['ulasan']) ?> (<?= esc($item['jumlah_ulasan']) ?> ulasan)
        </p>

        <p class="fw-bold">Rp <?= number_format($item['harga'], 0, ',', '.') ?>/hari</p>

        <a href="/lokasi/detail/<?= $item['id']; ?>" class="btn btn-primary w-100 mt-2">
          Lihat Detail
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
