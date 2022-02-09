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
        <?php foreach ($presensi as $key => $item) : ?>
            <div <?php echo $key == "hs" ? 'class="col-xl-12"' : 'class="col-xl-6"' ?>">
                <div class="card bg-default">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data Member</h6>
                                <h5 class="h3 text-white mb-0">
                                    <?php switch ($key) {
                                        case "web":
                                            echo "Web Programming";
                                            $id = 1;
                                            break;
                                        case "desktop":
                                            echo "Desktop Programming";
                                            $id = 2;
                                            break;
                                        case "mobile":
                                            echo "Mobile Programming";
                                            $id = 3;
                                            break;
                                        case "network":
                                            echo "Network Programming";
                                            $id = 4;
                                            break;
                                        default:
                                            echo "Hardware - Software";
                                            $id = 5;
                                            break;
                                    }
                                    ?>
                                </h5>
                            </div>
                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <li class="nav-item">
                                        <a href="<?= site_url('Dashboard/chart_details/' . $id) ?>" class="nav-link py-2 px-3">
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
                            <canvas id="chart-<?= $key ?>" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

    <script>
        <?php $data = [];
        $x = 0;

        foreach ($presensi as $key => $item) : ?>
            <?php
            $z = 0;
            foreach ($item as $dataPresensi) {
                $data[$x][$z] = $dataPresensi->total_presensi;
                $z++;
            }

            ?>

            let <?= $key ?> = document.getElementById('chart-<?= $key ?>').getContext('2d');
            let chart<?= $key ?> = new Chart(<?= $key ?>, {
                type: 'bar',
                data: {
                    labels: ['Pelatihan 1', 'Pelatihan 2', 'Pelatihan 3', 'Pelatihan 4', 'Pelatihan 5', 'Pelatihan 6', 'Pelatihan 7', 'Pelatihan 8', 'Pelatihan 9', 'Pelatihan 10', 'Pelatihan 11', 'Pelatihan 12'],
                    datasets: [{
                        label: 'Jumlah Member',
                        data: <?php echo json_encode($data[$x]) ?>,
                    }]

                }
            })
        <?php $x++;
        endforeach ?>
    </script>