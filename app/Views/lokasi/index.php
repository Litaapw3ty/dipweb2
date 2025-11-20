<?php /** @var array $produk */ ?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Penyewaan Area <?= esc($area) ?></title>

<style>
/* RESET & LAYOUT */
:root{
    --bg:#f3f6fb;
    --card:#ffffff;
    --accent:#3b82f6;
    --muted:#6b7280;
}
*{box-sizing:border-box}
body{margin:0;font-family:Inter,system-ui,Arial, sans-serif;background:var(--bg);color:#111}

/* banner full */
.lokasi-banner{
    position:relative;
    width:100%;
    height:260px;
    overflow:hidden;
}
.lokasi-banner img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    filter: brightness(0.65);
}

/* overlay gradient putih lembut di bawah banner */
.fade-white{
    height:60px;
    background: linear-gradient(180deg, rgba(243,246,251,0) 0%, rgba(243,246,251,1) 100%);
    margin-top:-60px; /* tarik ke atas agar menyatu dengan banner */
}

/* container pusat */
.container{ max-width:1100px; margin:-40px auto 60px; padding:0 18px; }

/* judul */
.lokasi-title{
    font-size:24px;
    font-weight:700;
    color:#0f172a;
    margin:18px 0 16px;
}

/* grid produk */
.produk-grid{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap:18px;
}

/* card */
.produk-card{
    background: linear-gradient(180deg, rgba(236,249,255,0.9) 0%, rgba(251,254,255,0.9) 100%);
    border-radius:12px;
    padding:12px;
    box-shadow: 0 6px 18px rgba(16,24,40,0.06);
    display:flex;
    flex-direction:column;
    height:100%;
    transition: transform .18s ease, box-shadow .18s ease;
}
.produk-card:hover{ transform: translateY(-6px); box-shadow: 0 10px 28px rgba(16,24,40,0.12); }

/* image area: background putih bulat seperti figma */
.produk-card .img-wrap{
    background: #fff;
    border-radius:10px;
    height:150px;
    display:flex;
    align-items:center;
    justify-content:center;
    overflow:hidden;
    padding:8px;
}
.produk-card img{ width:100%; height:100%; object-fit:contain }

/* info bawah */
.produk-card .info{ padding-top:10px; display:flex; flex-direction:column; gap:6px; margin-top:auto; }
.produk-card h3{ margin:0; font-size:15px; font-weight:600; color:#0f172a; }
.produk-card .lokasi, .produk-card .rating{ font-size:12px; color:var(--muted); margin:0; display:flex; gap:8px; align-items:center; }
.produk-card .harga{ margin:6px 0 0; font-weight:800; color:#0ea5a0; font-size:16px; }

/* footer ruang bawah */
.page-footer{ background:#0f172a; color:#fff; padding:28px 18px; text-align:center; margin-top:36px; border-top-left-radius:12px; border-top-right-radius:12px; }
@media (max-width:600px){
    .lokasi-banner{height:180px}
}
</style>
</head>
<body>

<!-- BANNER (pakai file yang kamu upload, path lokal) -->
<div class="banner-lokasi" style="background-image:url('<?= base_url('images/auth.jpg') ?>')"></div>

<div class="lokasi-container">
    <h2 class="lokasi-title">Penyewaan Area <?= esc($area) ?></h2>

    <div class="list-produk">
        <?php if(empty($produk)): ?>
            <div style="grid-column:1/-1; background:#fff; padding:18px; border-radius:10px; text-align:center;">
                Belum ada produk pada lokasi ini.
            </div>
        <?php else: ?>
            <?php foreach($produk as $p): ?>
                <div class="card-produk">
                    
                    <img src="<?= base_url('images/'.$p['gambar']) ?>" 
                         alt="<?= esc($p['nama']) ?>">

                    <div class="info">
                        <h3><?= esc($p['nama']) ?></h3>
                        <p class="lokasi">📍 <?= esc($p['lokasii']) ?></p>
                        <p class="rating">⭐ <?= esc($p['rating']) ?> (<?= esc($p['ulasan']) ?> ulasan)</p>

                        <p class="harga">
                          Rp <?= number_format((int) ($p['harga'] ?? 0), 0, ',', '.') ?>/hari
                        </p>
                    </div>

                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
