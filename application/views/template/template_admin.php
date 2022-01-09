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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <style>
        table.dataTable.stripe tbody tr.odd,
        table.dataTable.display tbody tr.odd {
            background-color: #172b4d;
        }

        table.dataTable.stripe tbody tr.odd,
        table.dataTable.display tbody tr.odd {
            background-color: #172b4d;
        }

        table.dataTable tbody tr {
            background-color: #172b4d;
        }

        table.dataTable.row-border tbody th,
        table.dataTable.row-border tbody td,
        table.dataTable.display tbody th,
        table.dataTable.display tbody td {
            border-top: none;
        }

        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #172b4d;
        }

        .dataTables_wrapper .dataTables_length select {
            border-radius: 3px;
            padding: 10px 30px 10px 5px;
            background-color: white;
            color: #848785;
            margin-bottom: 10px;
        }

        label {
            color: white;
        }

        .dataTables_wrapper .dataTables_filter input {
            border-radius: 3px;
            padding: 10px 30px 10px 10px;
            background-color: white;
            margin-left: 3px;
            width: auto;
            display: flex;
            justify-content: center;
        }

        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter,
        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_processing,
        .dataTables_wrapper .dataTables_paginate {
            color: #fff;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: #000 !important;
            background: white !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #172b4d !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: white !important;
        }

        .dataTables_wrapper .dataTables_paginate {
            margin-bottom: 20px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
            cursor: default;
            color: #fff !important;
            border: 1px solid transparent;
            background: transparent;
            box-shadow: none;
        }
    </style>
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
                            <a <?= $this->uri->segment(1) == 'Dashboard' && $this->uri->segment(2) == ''  ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('Dashboard') ?>">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a <?= $this->uri->segment(2) == 'events' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('Dashboard/events') ?>">
                                <i class="ni ni-calendar-grid-58 text-yellow"></i>
                                <span class="nav-link-text">Event</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a <?= $this->uri->segment(2) == 'material' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('Dashboard/material') ?>">
                                <i class="ni ni-app text-brown"></i>
                                <span class="nav-link-text">Materi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a <?= $this->uri->segment(2) == 'member' ? 'class="nav-link active"' : 'class="nav-link"' ?>href="<?= site_url('Dashboard/member') ?>">
                                <i class="fas fa-user-friends text-info"></i>
                                <span class="nav-link-text">Member</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a <?= $this->uri->segment(2) == 'pengurus' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= site_url('Dashboard/pengurus') ?>">
                                <i class="fas fa-user-friends text-orange"></i>
                                <span class="nav-link-text">Pengurus</span>
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
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span>
                                        <!-- <img alt="Image placeholder" src="<?= base_url('assets/argon') ?>/assets/img/brand/ninja.png"> -->
                                        ❤️
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><?= $this->session->userdata('name') ?></span>
                                    </div>
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
                        &copy; 2020 - Dept. IT AMCC 2021/2022
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#my-datables').DataTable({
                "sorting": false,
                language: {
                    searchPlaceholder: "Cari Member",
                    search: ""
                },
                "info": false,
                "bInfo": false
            });
        });
        $(document).ready(function() {
            $(document).on('click', '#editBtn', function() {
                var nim = $(this).data('nim');
                var nama = $(this).data('name');
                var email = $(this).data('email');

                $('#nimPengurus').val(nim);
                $('#namaPengurus').val(nama);
                $('#emailPengurus').val(email);

            });
        });

        $(document).ready(function() {
            $(document).on('click', '#hapusBtn', function() {
                var nim = $(this).data('nim');
                $('#btnHapus').attr('href', '<?= site_url() ?>/Dashboard/hapus_pengurus/' + nim);
            });
        });
    </script>
</body>

</html>