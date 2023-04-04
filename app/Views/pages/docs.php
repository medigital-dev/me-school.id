<?= $this->extend('template/home'); ?>
<?= $this->section('content'); ?>
<section id="content">
    <div class="pt-5 rounded-3">
        <div class="container">
            <h1 class="display-5 fw-bold text-center lh-lg">Panduan Penggunaan</h1>

            <div class="d-flex">
                <div class="main-content bg-white">
                    <div class="sidebar-doc">
                        <!-- <div class="d-flex sticky-top bg-white border-bottom">
                            <h5 class="sidebar-heading text-center fw-bold">Navigasi</h5>
                            <button class="btn btn-sm ms-auto" type="button" id="btn-fullscreen" title="Tombol Fullscreen"><i class="fa-solid fa-expand"></i></button>
                        </div> -->

                        <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch">
                            <div class="d-flex justify-content-between sticky-top bg-light border-bottom">
                                <a class="navbar-brand" href="#">Navigasi</a>
                                <button class="btn btn-sm ms-auto" type="button" id="btn-fullscreen" title="Tombol Fullscreen"><i class="fa-solid fa-expand"></i></button>
                            </div>
                            <!-- <nav class="nav nav-pills flex-column">
                                <a class="nav-link" href="#selamatDatang">Selamat Datang</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3" href="#selamatDatang">Selamat Datang</a>
                                    <a class="nav-link ms-3" href="#pengembang">Informasi Pengembang</a>
                                    <a class="nav-link ms-3" href="#minSpec">Minimal Spesifikasi</a>
                                    <a class="nav-link ms-3" href="#tos">Ketentuan Pengguna</a>
                                </nav>
                                <a class="nav-link" href="#item-2">Item 2</a>
                                <a class="nav-link" href="#item-3">Item 3</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3" href="#item-3-1">Item 3-1</a>
                                    <a class="nav-link ms-3" href="#item-3-2">Item 3-2</a>
                                </nav>
                            </nav> -->
                            <ul class="list-unstyled">
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                                        Selamat Datang
                                    </button>
                                    <div class="collapse show" id="home-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#selamatDatang" class="link-dark rounded">Selamat datang</a></li>
                                            <li><a href="#pengembang" class="link-dark rounded">Informasi Pengembang</a></li>
                                            <li><a href="#minSpec" class="link-dark rounded">Minimal spesifikasi</a></li>
                                            <li><a href="#tos" class="link-dark rounded">Ketentuan Penggunaan</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                        Dapatkan Aplikasi
                                    </button>
                                    <div class="collapse" id="dashboard-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#getNow" class="link-dark rounded">Cara Mendapatkan</a></li>
                                            <li><a href="#" class="link-dark rounded">Donasi</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#install" aria-expanded="false">
                                        Instalasi
                                    </button>
                                    <div class="collapse" id="install">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">Hosting</a></li>
                                            <li><a href="#" class="link-dark rounded">Localhost</a></li>
                                            <li><a href="#" class="link-dark rounded">Import Database</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                        CMS
                                    </button>
                                    <div class="collapse" id="orders-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">New</a></li>
                                            <li><a href="#" class="link-dark rounded">Processed</a></li>
                                            <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                            <li><a href="#" class="link-dark rounded">Returned</a></li>
                                            <li><a href="#" class="link-dark rounded">New</a></li>
                                            <li><a href="#" class="link-dark rounded">Processed</a></li>
                                            <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                            <li><a href="#" class="link-dark rounded">Returned</a></li>
                                            <li><a href="#" class="link-dark rounded">New</a></li>
                                            <li><a href="#" class="link-dark rounded">Processed</a></li>
                                            <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                            <li><a href="#" class="link-dark rounded">Returned</a></li>
                                            <li><a href="#" class="link-dark rounded">New</a></li>
                                            <li><a href="#" class="link-dark rounded">Processed</a></li>
                                            <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                            <li><a href="#" class="link-dark rounded">Returned</a></li>
                                            <li><a href="#" class="link-dark rounded">New</a></li>
                                            <li><a href="#" class="link-dark rounded">Processed</a></li>
                                            <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                            <li><a href="#" class="link-dark rounded">Returned</a></li>
                                            <li><a href="#" class="link-dark rounded">New</a></li>
                                            <li><a href="#" class="link-dark rounded">Processed</a></li>
                                            <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                            <li><a href="#" class="link-dark rounded">Returned</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-1">
                                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                        Akun
                                    </button>
                                    <div class="collapse" id="account-collapse">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li><a href="#" class="link-dark rounded">New...</a></li>
                                            <li><a href="#" class="link-dark rounded">Profile</a></li>
                                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                                            <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                            <li><a href="#" class="link-dark rounded">New...</a></li>
                                            <li><a href="#" class="link-dark rounded">Profile</a></li>
                                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                                            <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="content-doc">
                        <!-- <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0"> -->
                        <h2 class="fs-2 text-primary fw-bold" id="selamatDatang">Selamat Datang di meSchool.net</h2>
                        <p>
                            meSchool adalah sebuah aplikasi website sekolah yang berbasis Content Management System (CMS). CMS memungkinkan anda untuk menambah maupun mengurangi konten yang ada pada aplikasi ini. Aplikasi ini dibuat agar memudahkan dalam menyajikan informasi dari sekolah kepada masyarakat luas dan juga bisa digunakan oleh berbagai macam satuan pendidikan, mulai dari TK sampai dengan SLTA/SMK.
                        </p>
                        <hr>
                        <h2 class="fs-2 text-primary fw-bold" id="pengembang">Pengembang CMS meSchool</h2>

                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/brand/dev.png'); ?>" alt="Pengembang meSchool" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <p>
                                    CMS meSchool pertama kali dibuat pada bulan Oktober 2021 dan kemudian dirilis pada Desember 2021 hanya untuk kalangan sendiri. Setelah berbagaimacam pertimbangan, akhirnya pada Maret 2022 CMS meSchool ini dipublikasikan secara umum.
                                </p>
                                <p>
                                    Perkenalkan nama saya Muhammad Said Latif Ghofari pengembang dari aplikasi CMS meSchool. Saya bekerja sebagai karyawan dan juga freelancer pembuatan website. Selain CMS meSchool ini, sudah beberapa project yang saya buat antara lain <a href="httsp://emPresensi.net" class="text-decoration-none" target="_blank">emPresensi</a>, <a href="https://web-exam.net" class="text-decoration-none" target="_blank">Web-eXam - Web Based Exam System (Ujian Berbasis Web)</a>, <a href="https://radiuspanel.net" class="text-decoration-none" target="_blank">radiuspanel</a>
                                </p>
                                <p>
                                    Saya berdomisili di kota Wonosari, Kabupaten Gunungkidul, DI Yogyakarta. Ingin bekerjasama dengan saya? silahkan hubungi pada kontak dibawah ini.
                                <ul>
                                    <li>Telepon: <a href="tel:+62087839301572" class="text-decoration-none" target="_blank">087 839 301 572</a></li>
                                    <li>Whatsapp: <a href="https://wa.me/+62087839301572" target="_blank" class="text-decoration-none">087 839 301 572</a></li>
                                    <li>Email: <a href="mailto:mesaidlg@gmail.com" class="text-decoration-none" target="_blank">mesaidlg@gmail.com</a></li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <h2 class="fs-2 text-primary fw-bold" id="minSpec">Minimal Spesifikasi Server</h2>
                        <p>
                            CMS meSchool dibangun dengan menggunakan <a href="https://codeigniter.com" class="text-decoration-none" target="_blank">CodeIgniter 3</a>. Adapun spesifikasi untuk bisa menjalankan CodeIgniter 3 antara lain:
                        <ul>
                            <li>PHP versi 5.6 atau yang lebih baru</li>
                            <li>Database yang disupport:
                                <ul>
                                    <li>MySQL 5.1+</li>
                                    <li>Oracle via oci8 dan pdo drivers</li>
                                    <li>PosgreSQL via postgre dan pdo drivers</li>
                                </ul>
                            </li>
                        </ul>
                        </p>
                        <hr>
                        <h2 class="fs-2 text-primary fw-bold" id="tos">Ketentuan Penggunaan</h2>
                        <p>
                            Anda bisa membaca ketentuan penggunaan pada halaman <a href="<?= base_url('tos'); ?>" class="text-decoration-none" target="_blank">Term of Service</a>
                        </p>
                        <hr>
                        <h2 class="fs-2 text-primary fw-bold" id="getNow">Cara Mendapatkan CMS meSchool</h2>
                        <p>
                            CMS meSchool ini didapat dengan sistem donasi. Jumlah donasi tidak kami tentukan, silahkan mendonasikan sesuai kemampuan anda.
                        </p>
                        <p>
                            Untuk mendapatkan aplikasi CMS meSchool pertama anda harus mendaftar akun di <a href="https://meSchool.net" class="text-decoration-none">meSchool.net</a> caranya:
                        <ol>
                            <li>Anda bisa mengeklik tombol Unduh Sekarang bagian header atau tombol Sign In pada bagian footer.
                                <img src="<?= base_url('assets/brand/register1.png'); ?>" alt="Register Akun" class="img-fluid">
                                <img src="<?= base_url('assets/brand/register2.png'); ?>" alt="Register Akun" class="img-fluid">
                            </li>
                        </ol>
                        </p>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

<?= $this->endSection(); ?>