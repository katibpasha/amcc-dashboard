<!-- Header -->
<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body py-4">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Member</h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $data_member_all ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body py-4">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Divisi</h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $jmlh_devisi ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fas fa-th-large"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body py-4">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Member Tahun <script>
                                            document.write(`${new Date().getFullYear()-1} / ${new Date().getFullYear()}`)
                                        </script>
                                    </h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $data_member_year ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Heyy !</strong> <?= $this->session->flashdata('flash') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php unset($_SESSION['flash']);
    endif ?>
    <div class="row">
        <div class="col-xl-6">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data Member</h6>
                            <h5 class="h3 text-white mb-0">Mobile Programming</h5>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item" data-toggle="chart" data-target="#chart-divisi-mobile" data-update='{"data":{"datasets":[{"data":[<?php foreach ($presensi_mobile as $data) echo $data->presensi . ", " ?>]}]}}' data-prefix="$" data-suffix="k">
                                    <a href="<?= site_url('Dashboard/chart_details/3') ?>" class="nav-link py-2 px-3">
                                        <span class="d-none d-md-block">Lihat Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-mobile" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data Member</h6>
                            <h5 class="h3 text-white mb-0">Web Programming</h5>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item" data-toggle="chart" data-target="#chart-divisi-web" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                    <a href="<?= site_url('Dashboard/chart_details/1') ?>" class="nav-link py-2 px-3">
                                        <span class="d-none d-md-block">Lihat Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-web" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data Member</h6>
                            <h5 class="h3 text-white mb-0">Desktop Programming</h5>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item" data-toggle="chart" data-target="#chart-divisi-desktop" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                    <a href="<?= site_url('Dashboard/chart_details/2') ?>" class="nav-link py-2 px-3">
                                        <span class="d-none d-md-block">Lihat Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-dekstop" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data Member</h6>
                            <h5 class="h3 text-white mb-0">Hardware & Software</h5>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item" data-toggle="chart" data-target="#chart-divisi-hs" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                    <a href="<?= site_url('Dashboard/chart_details/5') ?>" class="nav-link py-2 px-3">
                                        <span class="d-none d-md-block">Lihat Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-hs" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data Member</h6>
                            <h5 class="h3 text-white mb-0">Computer Network</h5>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item" data-toggle="chart" data-target="#chart-divisi-network" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                    <a href="<?= site_url('Dashboard/chart_details/4') ?>" class="nav-link py-2 px-3">
                                        <span class="d-none d-md-block">Lihat Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-network" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $data_mobile = '';
    foreach ($presensi_mobile as $item) {
        $data_mobile = $data_mobile . '"' . $item->total_presensi . '",';
    }
    $data_mobile = trim($data_mobile, ",");

    $data_web = '';
    foreach ($presensi_web as $item) {
        $data_web = $data_web . '"' . $item->total_presensi . '",';
    }
    $data_web = trim($data_web, ",");

    $data_hs = '';
    foreach ($presensi_hs as $item) {
        $data_hs = $data_hs . '"' . $item->total_presensi . '",';
    }
    $data_hs = trim($data_hs, ",");

    $data_dekstop = '';
    foreach ($presensi_desktop as $item) {
        $data_dekstop = $data_dekstop . '"' . $item->total_presensi . '",';
    }
    $data_dekstop = trim($data_dekstop, ",");

    $data_network = '';
    foreach ($presensi_network as $item) {
        $data_network = $data_network . '"' . $item->total_presensi . '",';
    }
    $data_network = trim($data_network, ",");
    ?>


    <script>
        let mobile = document.getElementById('chart-mobile').getContext('2d');
        let chartMobile = new Chart(mobile, {
            type: 'bar',
            data: {
                labels: ['Pelatihan 1', 'Pelatihan 2', 'Pelatihan 3', 'Pelatihan 4', 'Pelatihan 5', 'Pelatihan 6', 'Pelatihan 7', 'Pelatihan 8', 'Pelatihan 9', 'Pelatihan 10', 'Pelatihan 11', 'Pelatihan 12'],
                datasets: [{
                    label: 'Jumlah Member',
                    data: [<?php echo $data_mobile ?>],
                }]

            }
        })

        let web = document.getElementById('chart-web').getContext('2d');
        let chartWeb = new Chart(web, {
            type: 'bar',
            data: {
                labels: ['Pelatihan 1', 'Pelatihan 2', 'Pelatihan 3', 'Pelatihan 4', 'Pelatihan 5', 'Pelatihan 6', 'Pelatihan 7', 'Pelatihan 8', 'Pelatihan 9', 'Pelatihan 10', 'Pelatihan 11', 'Pelatihan 12'],
                datasets: [{
                    label: 'Jumlah Member',
                    data: [<?php echo $data_web ?>],
                }]

            }
        })

        let hs = document.getElementById('chart-hs').getContext('2d');
        let chartHs = new Chart(hs, {
            type: 'bar',
            data: {
                labels: ['Pelatihan 1', 'Pelatihan 2', 'Pelatihan 3', 'Pelatihan 4', 'Pelatihan 5', 'Pelatihan 6', 'Pelatihan 7', 'Pelatihan 8', 'Pelatihan 9', 'Pelatihan 10', 'Pelatihan 11', 'Pelatihan 12'],
                datasets: [{
                    label: 'Jumlah Member',
                    data: [<?php echo $data_hs ?>],
                }]

            }
        })

        let dekstop = document.getElementById('chart-dekstop').getContext('2d');
        let chartDesktop = new Chart(dekstop, {
            type: 'bar',
            data: {
                labels: ['Pelatihan 1', 'Pelatihan 2', 'Pelatihan 3', 'Pelatihan 4', 'Pelatihan 5', 'Pelatihan 6', 'Pelatihan 7', 'Pelatihan 8', 'Pelatihan 9', 'Pelatihan 10', 'Pelatihan 11', 'Pelatihan 12'],
                datasets: [{
                    label: 'Jumlah Member',
                    data: [<?php echo $data_dekstop ?>],
                }]

            }
        })

        let network = document.getElementById('chart-network').getContext('2d');
        let chartNetwork = new Chart(network, {
            type: 'bar',
            data: {
                labels: ['Pelatihan 1', 'Pelatihan 2', 'Pelatihan 3', 'Pelatihan 4', 'Pelatihan 5', 'Pelatihan 6', 'Pelatihan 7', 'Pelatihan 8', 'Pelatihan 9', 'Pelatihan 10', 'Pelatihan 11', 'Pelatihan 12'],
                datasets: [{
                    label: 'Jumlah Member',
                    data: [<?php echo $data_network ?>],
                }]

            }
        })
    </script>