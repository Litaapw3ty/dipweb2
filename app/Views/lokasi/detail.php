<div class="container py-4">

    <a href="/lokasi" class="btn btn-light mb-3">← Kembali</a>

    <div class="row">
        <div class="col-md-6">
            <img src="<?= base_url('images/' . $item['sampul']) ?>" 
                 class="img-fluid rounded shadow" 
                 alt="<?= esc($item['nama']) ?>">
        </div>

        <div class="col-md-6">
            <h2 class="fw-bold"><?= esc($item['nama']) ?></h2>

            <p class="text-secondary">
                <i class="bi bi-geo-alt-fill"></i> <?= esc($item['alamat']) ?>
            </p>

            <p class="text-warning">
                ★ <?= esc($item['ulasan']) ?> (<?= esc($item['jumlah_ulasan']) ?> ulasan)
            </p>

            <h4 class="fw-bold text-primary">
                Rp <?= number_format($item['harga'], 0, ',', '.') ?>/hari
            </h4>

            <p class="mt-3"><?= esc($item['deskripsi']) ?></p>

            <button class="btn btn-primary w-100 mt-3">Sewa Sekarang</button>
        </div>
    </div>
</div>
