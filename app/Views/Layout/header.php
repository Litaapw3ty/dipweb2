<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sturent Studio</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/home.css') ?>">
    </head>
    <body>
        <nav class="navbar">
            <div class="nav-left">
                <div class="brand-logo">
                    <img src="<?= base_url('img/brand-logo-black.jpg') ?>" alt="Logo" width="40" height="40">
                </div>
                <div class="brand-name">
                    <h2>Sturent</h2>
                </div>
            </div>
            <div class="nav-center">
                <ul class="nav-menu">
                    <li class=""><a href="#">Beranda</a></li>
                    <li class=""><a href="#">Kategori</a></li>
                    <li class=""><a href="#">Koleksi</a></li>
                    <li class=""><a href="#">Lokasi</a></li>
                </ul>
            </div>
            <div class="nav-right">
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <span>🔍</span>
                </div>
                <div class="user-icon">
                    <a href="#"><span>👤</span></a>
                </div>
            </div>
        <!-- <div class="container-fluid">
            <a class="navbar-brand" href="#">Sturent</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/pages">Beranda</a>
                <a class="nav-link" href="/buku">Kategori</a>
                <a class="nav-link" href="#">Koleksi</a>
                <a class="nav-link" href="#">Lokasi</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </div>
            </div>
        </div> -->
        </nav>
        
        <div >
            <?= $this->rendersection('content'); ?>
        </div>