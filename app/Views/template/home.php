<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="shortcut icon" href="<?= base_url('assets/brand/logo-icon.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/brand/style.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/brand/nav-logo.png'); ?>" alt="Logo me-school.net" class="header-img">
            </a>
            <a href="<?= base_url('admin'); ?>" class="btn btn-primary" title="Download CMS Website Sekolah">Unduh Sekarang</a>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <div class="container">
        <footer class="">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="<?= base_url(); ?>" class="nav-link px-2 text-muted">Homepage</a></li>
                <li class="nav-item"><a href="<?= base_url('about'); ?>" class="nav-link px-2 text-muted">About</a></li>
                <li class="nav-item"><a href="<?= base_url('privacy'); ?>" class="nav-link px-2 text-muted">Privacy Policies</a></li>
                <li class="nav-item"><a href="<?= base_url('tos'); ?>" class="nav-link px-2 text-muted">Term of Service</a></li>
                <li class="nav-item"><a href="<?= base_url('user_guide'); ?>" class="nav-link px-2 text-muted">Docs</a></li>
                <li class="nav-item"><a href="https://demo.meschool.id" target="_blank" class="nav-link px-2 text-muted">Demo</a></li>
                <li class="nav-item"><a href="<?= base_url('admin'); ?>" class="nav-link px-2">Sign In</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2022 <a href="<?= base_url(); ?>" class="text-muted text-decoration-none">CMS meSchool</a></p>
        </footer>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jquery/jquery.slim.min.js'); ?>"></script>

    <script src="<?= base_url('plugins/brand/script.js'); ?>"></script>

    <script>
        $(document).ready(function() {
            $('#btn-fullscreen').click(function() {
                $('.main-content').toggleClass('fullscreen');

                const icon = $('#btn-fullscreen i').hasClass('fa-expand');
                if (icon == true) {
                    $(this).attr('title', 'Tombol Minimize');
                    $('#btn-fullscreen i').addClass('fa-compress').removeClass('fa-expand');
                } else {
                    $(this).attr('title', 'Tombol Fullscreen');
                    $('#btn-fullscreen i').addClass('fa-expand').removeClass('fa-compress');
                }
            })
        })
    </script>

</body>

</html>