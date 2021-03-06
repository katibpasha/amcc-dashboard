<!--
=========================================================
* Dept IT - AMCC 2021/2022
=========================================================

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?= $title ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/') ?>img/brand/amcc-logo.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/argon.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/custom-styles.css">
</head>

<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-blue-amcc py-5">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Presensi Amikom Computer Club</h1>
                            <p class="text-lead text-white">Learning by Doing, Learning by Teaching!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent py-4 d-block text-center">
                            <img src="<?= base_url('assets/') ?>img/brand/amcc-logo.png" alt="" class="img-fluid login-logo">
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <?php if ($this->session->flashdata('flash')) : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Maaf !</strong> <?= $this->session->flashdata('flash') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php unset($_SESSION['flash']);
                            endif ?>
                            <form role="form" method="POST" action="<?= site_url('Login/login_action') ?>">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="#" class="text-light"><small>Forgot password?</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="mt-8" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6 py-2">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="https://amcc.or.id" class="font-weight-bold ml-1" target="_blank">Dept IT AMCC</a>
                    </div>
                </div>
                <div class="col-xl-6 py-2 social-media-list">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://instagram.com/amccamikom" class="nav-link" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://web.facebook.com/amcc.code.official" class="nav-link" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.youtube.com/channel/UCiuvFkBxovej77tvrwRKv4g" class="nav-link" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/amcc_amikom" class="nav-link" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url('assets/') ?>vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url('assets/') ?>js/argon.js?v=1.2.0"></script>
</body>

</html>