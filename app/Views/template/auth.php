<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle; ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/brand/logo-icon.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/sweetalert2/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/animate-style/animate.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('plugins/brand/auth.css'); ?>">
</head>

<body>
    <div id="notifikasi" data-flashdata="<?= session()->getFlashdata('notifikasi'); ?>"></div>
    <?= $this->renderSection('content'); ?>

    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jquery/jquery.slim.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/sweetalert2/dist/sweetalert2.js'); ?>"></script>

    <script src="<?= base_url('plugins/brand/auth.js'); ?>"></script>

    <script>
        $(document).ready(function() {
            const flashdata = $('#notifikasi').data('flashdata');
            if (flashdata) {
                const splittedFlashdata = flashdata.split('|');
                fireNotif(splittedFlashdata[0], splittedFlashdata[1]);
            }

            $('#tombolSubmit').click(function(e) {
                e.preventDefault();
                const is_signin = $('#pages').data('pagename');
                $(this).html('<div class="spinner-border spinner-border-sm text-light" role="status"><span class="visually-hidden">Loading...</span></div>').attr('disabled', 'true');

                if (is_signin == 'signin') {
                    const username = $('#username');
                    const password = $('#password');

                    if (username.val() == '' || password.val() == '') {
                        if (username.val() == '' && password.val() == '') {
                            $(this).text('Sign In').removeAttr('disabled');
                            $('.invalid-feedback').text('Harus diisi!')
                            fireNotif('error', 'Kesalahan input, silahkan cek keterangan pada masing-masing input.');
                            username.addClass('is-invalid');
                            password.addClass('is-invalid');
                        } else if (username.val() == '') {
                            $(this).text('Sign In').removeAttr('disabled');
                            $('#usernameFeedback').text('Harus diisi!')
                            fireNotif('error', 'Kesalahan input, silahkan cek keterangan pada masing-masing input.');
                            username.addClass('is-invalid');
                            password.addClass('is-valid').removeClass('is-invalid');
                        } else if (password.val() == '') {
                            username.addClass('is-valid').removeClass('is-invalid');
                            $(this).text('Sign In').removeAttr('disabled');
                            $('#passwordFeedback').text('Harus diisi!')
                            fireNotif('error', 'Kesalahan input, silahkan cek keterangan pada masing-masing input.');
                            password.addClass('is-invalid');
                        } else {
                            username.addClass('is-valid');
                            password.addClass('is-valid');
                        }
                    } else {
                        $.post("<?= base_url('auth/ajaxLogin'); ?>", {
                            username: username.val(),
                            password: password.val()
                        }, function(result) {
                            if (result.status == true) {
                                fireNotif('success', 'Login sukses. selamat datang ' + result.nama + ', anda akan diarahkan ke halaman dashboard');
                                setTimeout(function() {
                                    document.location.href = "<?= base_url('dashboard'); ?>";
                                }, 6000);
                            } else {
                                fireNotif('error', result.error);
                                $('#tombolSubmit').text('Sign In').removeAttr('disabled');
                            }
                        }, 'JSON');
                    }
                } else {
                    $('form').trigger('submit');
                }
            });

            $('#tombolShowPassword').click(function() {
                if ($(this).is(':checked')) {
                    $('.password').attr('type', 'text');
                    $('#labelShowPassword').removeClass('text-muted').addClass('text-primary');
                } else {
                    $('.password').attr('type', 'password');
                    $('#labelShowPassword').addClass('text-muted').removeClass('text-primary');
                }
            });
        })
    </script>
    <script>
        function fireNotif(icon, title) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: icon,
                title: title
            })
        }
    </script>
</body>

</html>