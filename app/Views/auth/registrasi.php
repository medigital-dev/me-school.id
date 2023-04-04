<?= $this->extend('template/auth'); ?>

<?= $this->section('content'); ?>

<main class="form-signin" style="max-width: 600px;">
    <a class="text-decoration-none" href="<?= base_url(); ?>"><i class="fa-solid fa-chevron-left fa-fw"></i>Homepage</a>
    <form class="mb-2 text-center" action="<?= base_url('auth/setRegistrasi'); ?>" method="POST" autocomplete="off" id="formRegistrasi">
        <?= csrf_field(); ?>
        <img class="mb-2 mt-2" src="<?= base_url('assets/brand/logo-icon.png'); ?>" height="100" alt="Logo CMS meSchool">
        <h1 class="h3 mb-3 fw-normal">Registrasi Akun</h1>
        <div class="form-floating mb-3">
            <input type="text" class="form-control <?= ($validation->hasError('namaSekolah')) ? 'is-invalid' : '';  ?>" id="namaSekolah" name="namaSekolah" placeholder="Nama instansi sekolah" value="<?= old('namaSekolah'); ?>">
            <label for="namaSekolah">Nama Sekolah</label>
            <div class="invalid-feedback text-start">
                <?= $validation->getError('namaSekolah'); ?>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '';  ?>" id="nama" name="nama" placeholder="Nama admin sekolah" value="<?= old('nama'); ?>">
            <label for="nama">Nama pengelola</label>
            <div class="invalid-feedback text-start">
                <?= $validation->getError('nama'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '';  ?>" id="username" name="username" placeholder="Username" value="<?= old('username'); ?>">
                    <label for="username">Nama Pengguna</label>
                    <div class="invalid-feedback text-start">
                        <?= $validation->getError('username'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '';  ?>" id="email" name="email" placeholder="name@example.com" value="<?= old('email'); ?>">
                    <label for="email">Email Aktif</label>
                    <div class="invalid-feedback text-start">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="password" class="form-control password <?= ($validation->hasError('password')) ? 'is-invalid' : '';  ?>" id="password" name="password" placeholder="password" value="<?= old('password'); ?>">
                    <label for="password">Kata Sandi</label>
                    <div class="invalid-feedback text-start">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="password" class="form-control password <?= ($validation->hasError('password2')) ? 'is-invalid' : '';  ?>" id="password2" name="password2" placeholder="password2" value="<?= old('password2'); ?>">
                    <label for="password2">Ulangi Kata Sandi</label>
                    <div class="invalid-feedback text-start">
                        <?= $validation->getError('password2'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-check form-switch text-start mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="tombolShowPassword">
            <label class="form-check-label text-muted" for="tombolShowPassword" id="labelShowPassword">Tampilkan kata sandi</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" id="tombolSubmit">Daftar</button>
    </form>
    <div class="text-center d-grid">
        <a href="<?= base_url('auth/lupapassword'); ?>" class="text-decoration-none text-danger mb-2">Lupa password</a>
        <a href="<?= base_url('auth'); ?>" class="text-decoration-none mb-2">Sign In</a>
    </div>
    <p class="mt-4 mb-3 text-muted text-center">&copy; 2022 me-Digital.net</p>
</main>

<?= $this->endSection(); ?>