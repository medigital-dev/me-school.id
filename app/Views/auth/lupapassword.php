<?= $this->extend('template/auth'); ?>

<?= $this->section('content'); ?>

<main class="form-signin">
    <a class="text-decoration-none" href="<?= base_url(); ?>"><i class="fa-solid fa-chevron-left fa-fw"></i>Homepage</a>
    <form class="mb-2 text-center" action="<?= base_url('auth/setLupapassword'); ?>" method="POST">
        <img class="mb-2 mt-2" src="<?= base_url('assets/brand/logo-icon.png'); ?>" height="100" alt="Logo CMS meSchool">
        <h1 class="h3 mb-3 fw-normal">Lupa Password</h1>

        <div class="form-floating mb-3">
            <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '';  ?>" id="email" name="email" placeholder="name@example.com" value="<?= old('email'); ?>">
            <label for="email">Email yang didaftarkan</label>
            <div class="invalid-feedback text-start">
                <?= $validation->getError('email'); ?>
            </div>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" id="tombolSubmit">Reset Password</button>
    </form>
    <div class="text-center d-grid">
        <a href="<?= base_url('auth/registrasi'); ?>" class="text-decoration-none mb-2">Registrasi Akun</a>
        <a href="<?= base_url('auth'); ?>" class="text-decoration-none mb-2">Sign In</a>
    </div>
    <p class="mt-4 mb-3 text-muted text-center">&copy; 2022 me-Digital.net</p>
</main>

<?= $this->endSection(); ?>