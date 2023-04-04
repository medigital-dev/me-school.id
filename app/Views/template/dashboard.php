<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $pageTitle; ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/brand/logo-icon.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/sweetalert2/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/animate-style/animate.min.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/brand/nav-logo-white.png'); ?>" alt="Navigasi Logo" height="30">
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown"> -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user"></i> mesaidlg
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= base_url('signout'); ?>">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
            <!-- </div> -->
        </div>
    </nav>



    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jquery/jquery.slim.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/sweetalert2/dist/sweetalert2.js'); ?>"></script>
</body>

</html>