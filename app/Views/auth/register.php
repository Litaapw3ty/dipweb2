<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/auth.css') ?>">
</head>

<body>
<div class="register-container">

    <div class="left-panel">
        <div class="welcome-box">
            <h2 class="logo">Sturent</h2>
            <h1 class="welcome-title">Selamat <span>Datang!</span></h1>
            <p>
                Ciptakan Karya Hebat, Mulai dari Sini. <br>
                Daftar sekarang dan temukan berbagai peralatan terbaik untuk mendukung setiap karyamu.
            </p>
        </div>
    </div>

    <div class="form-box">
        <h2 class="form-title">Buat Akun</h2>

        <form>
            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
            <input type="text" class="form-control mt-3" placeholder="Masukkan Email/No. HP">
            <input type="password" class="form-control mt-3" placeholder="Buat Kata Sandi">
            <input type="password" class="form-control mt-3" placeholder="Konfirmasi Kata Sandi">

            <div class="form-check mt-3 mb-4">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Saya Setuju dengan <a href="#">Syarat & Ketentuan</a></label>
            </div>

            <button class="btn register-btn">Daftar</button>
        </form>

        <p class="login-text mt-3">Sudah punya akun? <a href="/login">Login di sini</a></p>
    </div>

</div>
</body>
</html>
