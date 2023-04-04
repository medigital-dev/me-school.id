<?= $this->extend('template/home'); ?>

<?= $this->section('content'); ?>
<section id="banner">
    <div class="container col-xxl-12 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?= base_url('assets/brand/bootstrap-themes.png'); ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1">CMS meSchool</h1>
                <h3 class="fw-bold mb-3">Website Sekolah berbasis CMS</h3>
                <p class="lead">
                    meSchool adalah sebuah aplikasi website sekolah berbasis Content Management System (CMS). CMS adalah sistem perangkat lunak yang digunakan untuk mengatur dan membuat berbagai konten pada website. Sehingga pengguna bisa leluasa menambah ataupun mengurangi konten di meSchool.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Get Now</button>
                    <a href="#features" type="button" class="btn btn-outline-secondary btn-lg px-4">Explore</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features">
    <div class="container py-5 text-center">
        <h1 class="display-5 fw-bold">Features</h1>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon text-primary mb-3">
                    <i class="fa-solid fa-grip fa-8x"></i>
                </div>
                <h2>Simpel</h2>
                <p>
                    Simpel but awesome.
                </p>
            </div>
            <div class="feature col">
                <div class="feature-icon text-primary mb-3">
                    <i class="fa-solid fa-earth-asia fa-8x"></i>
                </div>
                <h2>Modern</h2>
                <p>Disain yang modern dan kekinian.</p>
            </div>
            <div class="feature col">
                <div class="feature-icon text-primary mb-3">
                    <i class="fa-solid fa-mobile-screen-button fa-8x"></i>
                </div>
                <h2>Responsive</h2>
                <p>Cocok untuk segala perangkat</p>
            </div>
        </div>
        <a href="#demo" type="button" class="btn btn-outline-secondary btn-lg px-4">Next</a>
    </div>
</section>

<section id="demo">
    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Demo</h1>
            <div class="col-lg-4 mx-auto">
                <p class="fs-5 mb-4">Penasaran dengan tampilan dan fitur-fiturnya? Klik saja Demo Page dan langsung bisa di coba</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Demo Pages</button>
                    <a href="#build" class="btn btn-outline-light btn-lg px-4">Next</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="build">
    <div class="container px-4 py-5" id="icon-grid">
        <h1 class="display-5 fw-bold text-center">Build With</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-center mb-3">
                <i class="fa-solid fa-fire-flame-curved fa-2x me-3 bi text-muted flex-shrink-0 fa-fw"></i>
                <div>
                    <h4 class="fw-bold mb-0">CodeIgniter 3</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center mb-3">
                <i class="fa-brands fa-bootstrap fa-2x me-3 bi text-muted flex-shrink-0 fa-fw"></i>
                <div>
                    <h4 class="fw-bold mb-0">Bootstrap 5</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center mb-3">
                <i class="fa-brands fa-font-awesome fa-2x me-3 bi text-muted flex-shrink-0 fa-fw"></i>
                <div>
                    <h4 class="fw-bold mb-0">Font Awesome 6</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center mb-3">
                <i class="fa-solid fa-table fa-2x me-3 bi text-muted flex-shrink-0 fa-fw"></i>
                <div>
                    <h4 class="fw-bold mb-0">Datatables 1.11.5</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center mb-3">
                <i class="fa-solid fa-keyboard fa-2x me-3 bi text-muted flex-shrink-0 fa-fw"></i>
                <div>
                    <h4 class="fw-bold mb-0">Summernote 0.8.18</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center mb-3">
                <i class="fa-solid fa-circle-check fa-2x me-3 bi text-muted flex-shrink-0 fa-fw"></i>
                <div>
                    <h4 class="fw-bold mb-0">Sweetalert2</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center mb-3">
                <i class="fa-solid fa-arrow-pointer fa-2x me-3 bi text-muted flex-shrink-0 fa-fw"></i>
                <div>
                    <h4 class="fw-bold mb-0">Select2</h4>
                </div>
            </div>
            <div class="col d-flex align-items-center mb-3">
                <i class="fa-solid fa-list-check fa-2x me-3 bi text-muted flex-shrink-0 fa-fw"></i>
                <div>
                    <h4 class="fw-bold mb-0">And Others</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>