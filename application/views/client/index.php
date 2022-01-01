<!-- Header -->
<!-- Header -->
<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body py-4">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Divisi</h5>
                                    <span class="h2 font-weight-bold mb-0"><?= $this->session->userdata('division_name') ?></span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Presensi</h5>
                                    <span class="h2 font-weight-bold mb-0">5</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-calendar-grid-58"></i>
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
                            <h5 class="h3 text-white mb-0">Pemberitahuan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-white">Halo, hari ini ada pelatihan ke 5 Divisi Mobile Programming lho. Jangan lupa join
                        pelatihan dan presensi </p>
                    <a href="<?= site_url('Member/surpel') ?>" class="btn btn-success">
                        <span class="btn-inner--icon"><i class="fas fa-clipboard-check"></i></span>
                        <span class="btn-inner--text px-2">Presensi</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 text-white mb-0">Modul Pelatihan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Modul</th>
                                    <th scope="col">Pelatihan Ke-</th>
                                    <th scope="col">Pembuat</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php foreach ($modul_pelatihan as $item) : ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $item->modul ?> <a href="<?= $item->link ?>" target="_BLANK"><i class="mx-2 fas fa-link"></i></a>
                                        </th>
                                        <td>
                                            <?= $item->training_to ?>
                                        </td>
                                        <td>
                                            <?= $item->user ?>
                                        </td>
                                        <td>
                                            <?= date('d-m-Y', strtotime($item->created_at)) ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 text-white mb-0">Rekaman Pelatihan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Rekaman</th>
                                    <th scope="col">Pelatihan Ke-</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php foreach ($modul_rekaman as $item) : ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $item->modul ?> <a href="<?= $item->link ?>" target="_BLANK"><i class="mx-2 fas fa-link"></i></a>
                                        </th>
                                        <td>
                                            <?= $item->training_to ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>