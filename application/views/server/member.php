<style>
    td {
        height: 50px;
        font-size: .8125 !important;
    }

    th {
        font-size: .8125 !important;
    }
</style>
<!-- Header -->
<!-- Header -->
<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <h6 class="h2 text-white d-inline-block mb-4">Member AMCC</h6>
            <div class="row">
                <div class="px-2 mb-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-member">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Tambah Member Baru</span>
                    </button>
                </div>
                <div class="px-2 mb-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-import">
                        <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                        <span class="btn-inner--text">Import Data</span>
                    </button>
                </div>
                <div class="px-2 mb-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-export">
                        <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                        <span class="btn-inner--text">Export Data</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <?php if (form_error('pass1') || form_error('pass2')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Yahhh :( !</strong> Password Anda Tidak sama!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
    <?php if (form_error('nim')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Yahhh :( !</strong> NIM kamu sudah digunakan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
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
    <div class="row">
        <div class="col-xl-12">
            <div class="card bg-default shadow">
                <div class="card-header border-0 bg-default">
                </div>
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table id="my-datables" class="table align-items-center table-dark table-flush display">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Tahun</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php foreach ($member as $item) : ?>
                                    <tr>
                                        <td scope="row">
                                            <?= $item->nim ?>
                                        </td>
                                        <td>
                                            <?= $item->name ?>
                                        </td>
                                        <td>
                                            <?= $item->email ?>
                                        </td>
                                        <td>
                                            <?= $item->division_name ?>
                                        </td>
                                        <td>
                                            <?= $item->year ?>
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

    <!-- modal -->
    <!-- 1. Modal Tambah Member -->

    <div class="modal fade" id="modal-add-member" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Tambah Member</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form role="form" action="<?= site_url('Dashboard/member_action') ?>" method="POST">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Member" type="text" name="nama" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                                </div>
                                <input class="form-control" placeholder="NIM" type="text" name="nim" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-th-large"></i></span>
                                </div>
                                <select name="divisi" class="form-control">
                                    <option value="null">Pilih Divisi</option>
                                    <?php foreach ($division as $item) : ?>
                                        <option value="<?= $item->division_id ?>"><?= $item->division_name ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control" placeholder="Tahun" type="text" name="tahun" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                </div>
                                <input class="form-control" placeholder="Password" type="password" name="pass1" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                </div>
                                <input class="form-control" placeholder="Konfirmasi Password" type="password" name="pass2" required>
                            </div>
                        </div>
                        <div class="modal-footer px-0">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <!-- 2. Modal Import data -->
    <div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Import Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="file" class="filepond" name="filepond" data-max-file-size="5MB" id="import-data">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button">Import Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Modal export data -->

    <div class="modal fade" id="modal-export" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Export Data</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="input-group mb-3">
                        <form action="">
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" id="export-csv" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="export-csv">Export to CSV</label>
                            </div>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio" id="export-excel" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="export-excel">Export to Excel</label>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Export Data</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. modal edit -->
    <div class="modal fade" id="modal-edit-member" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Edit Data Member</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form role="form">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Member" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                </div>
                                <input class="form-control" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                </div>
                                <input class="form-control" placeholder="Konfirmasi Password" type="password">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>

    <!-- 5. modal confirmation -->
    <div class="modal fade" id="modal-delete-member" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Hapus Data Pengurus</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Apakah kamu yakin ingin menghapus data?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">YBL YBL YBL!</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Ga!</button>
                </div>

            </div>
        </div>
    </div>