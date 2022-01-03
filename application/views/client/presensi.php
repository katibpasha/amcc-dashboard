<!-- Header -->
<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-xl-12">
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Yeayyy !</strong> <?= $this->session->flashdata('flash') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['flash']);
            endif ?>
            <?php if ($this->session->flashdata('flash-gagal')) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Yahhhh :(</strong> <?= $this->session->flashdata('flash-gagal') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['flash-gagal']);
            endif ?>
            <?php if ($presensi['status'] == 'on') : ?>
                <div class="card bg-default">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="h3 text-white mb-0">Pemberitahuan</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-white">Halo, hari ini ada pelatihan Divisi <?= $this->session->userdata('division_name') ?> </p>
                        <a href="<?= site_url('Member/surpel') ?>" class="btn btn-success">
                            <span class="btn-inner--icon"><i class="fas fa-clipboard-check"></i></span>
                            <span class="btn-inner--text px-2">Presensi</span>
                        </a>
                    </div>
                </div>
            <?php endif ?>
            <?php if ($presensi['status'] == 'off') : ?>
                <div class="card bg-default">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="h3 text-white mb-0">Pemberitahuan</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-white">Halo, hari ini tidak ada pelatihan Divisi <?= $this->session->userdata('division_name') ?> </p>
                    </div>
                </div>
            <?php endif ?>
        </div>
        <div class="col-xl-12">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 text-white mb-0">Riwayat Presensi</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Kegiatan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Waktu Presensi</th>
                                    <th scope="col">Tahun</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php $x = 0;
                                foreach ($riwayat_presensi as $item) : ?>
                                    <tr>
                                        <th scope="row">
                                            <?= ++$x ?>
                                        </th>
                                        <th scope="row">
                                            <?= $item->event_name ?>
                                        </th>
                                        <td>
                                            <?= date('d-M-Y', strtotime($item->date_presence)) ?>
                                        </td>
                                        <td>
                                            <?= date('h:i:s', strtotime($item->date_presence)) ?>
                                        </td>
                                        <td>
                                            <?= date('Y', strtotime($item->date_presence)) ?>
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