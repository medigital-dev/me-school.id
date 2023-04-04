<?= $this->extend('template/auth'); ?>

<?= $this->section('content'); ?>

<main class="form-signin">
    <a class="text-decoration-none" href="<?= base_url(); ?>"><i class="fa-solid fa-chevron-left fa-fw"></i>Homepage</a>
    <form class="mb-2 text-center" action="<?= base_url('auth/setconfirmresetpassword'); ?>" method="POST">
        <input type="hidden" name="id_user_request" value="<?= $user_account['id_user_request']; ?>">
        <input type="hidden" name="kodeUnik" value="<?= $kodeUnik; ?>">
        <img class="mb-2 mt-2" src="<?= base_url('assets/brand/logo-icon.png'); ?>" height="100" alt="Logo CMS meSchool">
        <h1 class="h3 mb-3 fw-normal">Lupa Password</h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '';  ?>" id="email" name="email" placeholder="name@example.com" readonly value="<?= $user_account['email_user_request']; ?>">
            <label for="email">Email yang terdaftar</label>
            <div class="invalid-feedback text-start">
                <?= $validation->getError('email'); ?>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control password <?= ($validation->hasError('password')) ? 'is-invalid' : '';  ?>" id="password" name="password" placeholder="Kata sandi baru" value="<?= old('password'); ?>">
            <label for="password">Kata sandi baru</label>
            <div class="invalid-feedback text-start">
                <?= $validation->getError('password'); ?>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control password <?= ($validation->hasError('password2')) ? 'is-invalid' : '';  ?>" id="password2" name="password2" placeholder="Ulangi kata sandi" value="<?= old('password2'); ?>">
            <label for="password2">Ulangi kata sandi</label>
            <div class="invalid-feedback text-start">
                <?= $validation->getError('password2'); ?>
            </div>
        </div>
        <div class="form-check form-switch text-start mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="tombolShowPassword">
            <label class="form-check-label text-muted" for="tombolShowPassword" id="labelShowPassword">Tampilkan kata sandi</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" id="tombolSubmit">Ubah Password</button>
    </form>
    <div class="text-center d-grid">
        <a href="<?= base_url('auth/registrasi'); ?>" class="text-decoration-none mb-2">Registrasi Akun</a>
        <a href="<?= base_url('auth'); ?>" class="text-decoration-none mb-2">Sign In</a>
    </div>
    <p class="mt-4 mb-3 text-muted text-center">&copy; 2022 me-Digital.net</p>
</main>

<?= $this->endSection(); ?>