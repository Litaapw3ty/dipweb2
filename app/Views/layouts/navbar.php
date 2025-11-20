<?php $listLokasi = $listLokasi ?? []; ?>
<?php $lokasi = $lokasi ?? ''; ?>

<nav class="navbar navbar-expand-lg navbar-white bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= base_url() ?>">Sturent</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Beranda</a></li>
        <li class="nav-item"><a href="<?= base_url('kategori') ?>" class="nav-link">Kategori</a></li>
        <li class="nav-item"><a href="<?= base_url('koleksi') ?>" class="nav-link">Koleksi</a></li>

        <!-- Lokasi dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">Lokasi</a>
          <ul class="dropdown-menu bg-dark text-white">
            <li class="dropdown-header text-white">BarLingMasCaKeb</li>
            <?php foreach ($listLokasi as $lok): ?>
              <li><a class="dropdown-item <?= ($lokasi === $lok) ? 'text-primary' : 'text-white' ?>" href="<?= base_url('lokasi/' . strtolower($lok)) ?>">> <?= $lok ?></a></li>
            <?php endforeach ?>
          </ul>
        </li>
      </ul>

      <form class="d-flex" role="search" method="GET" action="<?= base_url('search') ?>">
        <input class="form-control me-2" type="search" placeholder="Cari..." name="q" aria-label="Search" />
        <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
      </form>

      <a href="#" class="ms-3 text-dark"><i class="bi bi-person-circle fs-4"></i></a>
    </div>
  </div>
</nav>
