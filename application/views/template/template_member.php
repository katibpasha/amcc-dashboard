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
    <meta name="description" content="Dashboard untuk Member & Pengurus UKM AMCC">
    <meta name="author" content="Creative Tim">
    <title><?= $title ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/argon') ?>/assets/img/brand/amcc-logo.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/argon') ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/argon') ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/argon') ?>/assets/css/argon.css?v=1.2.0" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/argon') ?>/assets/css/custom-styles.css" type="text/css">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url('assets/argon') ?>/assets/vendor/datatables.net-bs4/css/dataTables.boostrap4.min.css" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header align-items-center mb-5">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="<?= base_url('assets/argon') ?>/assets/img/brand/amcc-logo.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a <?= $this->uri->segment(1) == 'dashboard' && $this->uri->segment(2) == 'member' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('dashboard/member') ?>">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text active">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a <?= $this->uri->segment(1) == 'presensi' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('presensi') ?>">
                                <i class="ni ni-calendar-grid-58 text-yellow"></i>
                                <span class="nav-link-text">Presensi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a <?= $this->uri->segment(1) == 'profile' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('profile') ?>">
                                <i class="fas fa-user-friends text-info"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-blue-amcc border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <div class="media-body mx-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><?= $this->session->userdata('name') ?></span>
                                    </div>
                                    <span>
                                        <img class="rounded-circle" width="32" alt="Image placeholder" src="https://ui-avatars.com/api/?name=<?= $this->session->userdata('name') ?>&background=random&color=fff">
                                    </span>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <a href="<?= site_url('Login/logout') ?>" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?= $contents ?>

        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                        &copy; <script>document.write(new Date().getFullYear())</script> Dept. IT AMCC 2021/2022
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script>
        $(function() {
            $("#my-datables").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script src="<?= base_url('assets/argon') ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/argon') ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/argon') ?>/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url('assets/argon') ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url('assets/argon') ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="<?= base_url('assets/argon') ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url('assets/argon') ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url('assets/argon') ?>/assets/js/argon.js?v=1.2.0"></script>
    <script src="<?= base_url('assets/argon') ?>/assets/js/main.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url('assets/argon') ?>/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
</body>

</html>