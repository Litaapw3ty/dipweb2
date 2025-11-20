<!-- HEADER MENU -->
 <link rel="stylesheet" href="<?= base_url('css/lokasi.css') ?>">
<nav class="navbar">
    <div class="nav-left">
        <a href="<?= base_url('/') ?>" class="logo">Sturent</a>
        <a href="<?= base_url('/') ?>">Beranda</a>
        <a href="#">Kategori</a>
        <a href="#">Koleksi</a>

        <!-- MENU LOKASI (dropdown) -->
        <div class="dropdown">
            <a class="dropdown-toggle">Lokasi ▾</a>
            <div class="dropdown-menu">
                <a href="<?= base_url('lokasi/Cilacap') ?>">Cilacap</a>
                <a href="<?= base_url('lokasi/Banyumas') ?>">Banyumas</a>
                <a href="<?= base_url('lokasi/Purbalingga') ?>">Purbalingga</a>
                <a href="<?= base_url('lokasi/Kebumen') ?>">Kebumen</a>
            </div>
        </div>
    </div>
</nav>
