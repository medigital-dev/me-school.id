<?= $this->extend('template/auth.php'); ?>
<?= $this->section('content'); ?>
<main class="form-signin">
    <div id="pages" data-pagename="signin"></div>
    <a class="text-decoration-none" href="<?= base_url(); ?>"><i class="fa-solid fa-chevron-left fa-fw"></i>Homepage</a>
    <form class="mb-2 text-center" action="<?= base_url('auth/cLogin'); ?>" method="POST">
        <img class="mb-2 mt-2" src="<?= base_url('assets/brand/logo-icon.png'); ?>" height="100" alt="Logo CMS meSchool">
        <h1 class="h3 mb-3 fw-normal">Sign In</h1>

        <div class="form-floating mb-2">
            <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '';  ?>" id="username" name="username" placeholder="Username" autofocus value="<?= old('username'); ?>">
            <label for="username">Username</label>
            <div class="invalid-feedback text-start" id="usernameFeedback">
                <?= $validation->getError('username'); ?>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control password <?= ($validation->hasError('password')) ? 'is-invalid' : '';  ?>" id="password" name="password" placeholder="Password" value="<?= old('password'); ?>">
            <label for="password">Password</label>
            <div class="invalid-feedback text-start" id="passwordFeedback">
                <?= $validation->getError('password'); ?>
            </div>
        </div>
        <div class="form-check form-switch text-start mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="tombolShowPassword">
            <label class="form-check-label text-muted" for="tombolShowPassword" id="labelShowPassword">Tampilkan kata sandi</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" id="tombolSubmit">Sign in</button>
    </form>
    <div class="text-center d-grid">
        <a href="<?= base_url('auth/lupapassword'); ?>" class="text-decoration-none text-danger mb-2">Lupa password</a>
        <a href="<?= base_url('auth/registrasi'); ?>" class="text-decoration-none">Registrasi Akun</a>
    </div>
    <p class="mt-4 mb-3 text-muted text-center">&copy; 2022 me-Digital.net</p>
</main>
<?= $this->endSection(); ?>