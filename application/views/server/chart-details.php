<style>
    td {
        height: 50px;
        font-size: .8125 !important;
    }

    th {
        font-size: .8125 !important;
    }
</style>
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
                                    <span class="h2 font-weight-bold mb-0"><?= $data_member ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
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
    <div class="row">
        <div class="col-xl-12">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data Member</h6>
                            <h5 class="h3 text-white mb-0">Divisi <?= substr($divisi->event_name, 10) ?></h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($pie as $key => $item) : ?>
            <div class="col-xl-3">
                <div class="card bg-default">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data</h6>
                                <h5 class="h3 text-white mb-0">
                                    <?php switch ($key) {
                                        case "materi":
                                            echo "Tingkat Kesulitan Materi";
                                            break;
                                        case "penyampaian":
                                            echo "Tingkat Penyampaian Materi";
                                            break;
                                        case "kelas":
                                            echo "Suasana Kelas";
                                            break;
                                        default:
                                            echo "Tingkat Kepuasan Jawaban";
                                            break;
                                    }
                                    ?>
                                </h5>
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
        <div class="col-xl-12">
            <div class="card bg-default shadow">
                <div class="card-header border-0 bg-default">

                </div>
                <div class="table-responsive">
                    <table id="my-survey" class="table align-items-center table-dark table-flush" style="width: 100%;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Pertemuan</th>
                                <th scope="col">Kendala</th>
                                <th scope="col">Kritik & Saran</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php foreach ($surpel as $item) : ?>
                                <tr>
                                    <th scope="row" class="col-auto">
                                        <?= date('d-M-Y', strtotime($item->date_presence)) ?>
                                    </th>
                                    <td class="text-wrap">
                                        <?= $item->trouble ?>
                                    </td>
                                    <td class="text-wrap">
                                        <?= $item->critic_suggest ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    $data = '';
    foreach ($presensi as $item) {
        $data = $data . '"' . $item->total_presensi . '",';
    }
    $data = trim($data, ",");

    ?>

    <script>
        $(document).ready(function() {
            $('#my-survey').DataTable({
                "sorting": false,
                language: {
                    searchPlaceholder: "Cari Survey",
                    search: ""
                },
                "info": false,
                "bInfo": false
            });
        });
        let chart = document.getElementById('chart').getContext('2d');
        let chartJs = new Chart(chart, {
            type: 'bar',
            data: {
                labels: ['Pelatihan 1', 'Pelatihan 2', 'Pelatihan 3', 'Pelatihan 4', 'Pelatihan 5', 'Pelatihan 6', 'Pelatihan 7', 'Pelatihan 8', 'Pelatihan 9', 'Pelatihan 10', 'Pelatihan 11', 'Pelatihan 12'],
                datasets: [{
                    label: 'Jumlah Member',
                    data: [<?php echo $data ?>],
                }]

            }
        })

        <?php $dataMateri = [["0", "0", "0", "0", "0"], ["0", "0", "0", "0", "0"], ["0", "0", "0", "0", "0"], ["0", "0", "0", "0", "0"]];
        $x = 0;
        $z = 0;
        foreach ($pie as $key => $item) : ?>

            <?php switch ($key) {
                case "materi":
                    $labels =  "'sangat sulit', 'sulit', 'medium', 'mudah', 'sangat mudah'";
                    break;
                case "penyampaian":
                    $labels =  "'sangat sulit', 'sulit', 'medium', 'mudah', 'sangat mudah'";
                    break;
                case "kelas":
                    $labels =  "'B AJA', 'Biasa Aja', 'Biasa', 'Seru', 'Sangat Seru'";
                    break;
                default:
                    $labels =  "'sangat tidak puas', 'tidak puas', 'medium', 'puas', 'sangat puas'";
                    break;
            }
            ?>

            <?php
            foreach ($item as $data) {
                $dataMateri[$z][$data->indeks - 1] = $data->materi;
            }
            $z++;
            ?>

            let chart<?= $key ?> = document.getElementById('chart-<?= $key ?>').getContext('2d');
            let <?= $key ?> = new Chart(chart<?= $key ?>, {
                type: 'pie',
                data: {
                    labels: [<?= $labels ?>],
                    datasets: [{
                        label: 'Jumlah Member',
                        data: <?php echo json_encode($dataMateri[$x]) ?>,
                        backgroundColor: [
                            '#d70e17', // sangat sulit
                            '#e46828', // sulit
                            '#f0be39', // medium
                            '#359d73', // sangat mudah
                            '#237f5d' // mudah
                        ],
                        borderWidth: 1.5,
                    }]

                }
            })

        <?php $x++;
        endforeach ?>
    </script>