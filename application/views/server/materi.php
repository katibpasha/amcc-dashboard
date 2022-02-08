<!-- Header -->
<!-- Header -->
<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <h6 class="h2 text-white d-inline-block mb-4">Modul dan Rekaman Pelatihan</h6>
            <div class="row">
                <div class="px-2 mb-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-material">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Tambah Materi</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->

<div class="container-fluid mt--6">
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
                        <table id="my-datables-modul" class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Modul</th>
                                    <th scope="col">Pelatihan Ke-</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Pembuat</th>
                                    <th scope="col">Dibuat Pada</th>
                                    <th scope="col">Diperbaharui Pada</th>
                                    <th scope="col" style="text-align: center;">Aksi</th>
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
                                            <?= $item->division_name ?>
                                        </td>
                                        <td>
                                            <?= $item->user ?>
                                        </td>
                                        <td>
                                            <?= date('d-m-Y', strtotime($item->created_at)) ?>
                                        </td>
                                        </td>
                                        <td>
                                            <?= date('d-m-Y', strtotime($item->updated_at)) ?>
                                        </td>
                                        <td align="center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-pengurus" id="btnMateri" data-modul="<?= $item->modul ?>" data-link="<?= $item->link ?>" data-id="<?= $item->id ?>">Edit</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-pengurus" id="btnHapusMateri" data-id="<?= $item->id ?>">Hapus</button>
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
                        <table id="my-datables-rekaman" class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Rekaman</th>
                                    <th scope="col">Pelatihan Ke-</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Pengupload</th>
                                    <th scope="col">Dibuat Pada</th>
                                    <th scope="col">Diperbaharui Pada</th>
                                    <th scope="col" style="text-align: center;">Aksi</th>
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
                                        <td>
                                            <?= $item->division_name ?>
                                        </td>
                                        <td>
                                            <?= $item->user ?>
                                        </td>
                                        <td>
                                            <?= date('d-m-Y', strtotime($item->created_at)) ?>
                                        </td>
                                        <td>
                                            <?= date('d-m-Y', strtotime($item->updated_at)) ?>
                                        </td>
                                        <td align="center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-pengurus" id="btnMateri" data-modul="<?= $item->modul ?>" data-link="<?= $item->link ?>" data-id="<?= $item->id ?>">Edit</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-pengurus" id="btnHapusMateri" data-id="<?= $item->id ?>">Hapus</button>
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
    <!-- 1. modal tambah pengurus -->
    <div class="modal fade" id="modal-add-material" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Tambah Materi</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form role="form" action="<?= site_url('Dashboard/material_action') ?>" method="POST">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-app"></i></span>
                                </div>
                                <input class="form-control" placeholder="Judul Materi" type="text" name="judul" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1" name="training" required>
                                <option>Pilih Pelatihan</option>
                                <option value="Pelatihan Ke-1">Pelatihan Ke-1</option>
                                <option value="Pelatihan Ke-2">Pelatihan Ke-2</option>
                                <option value="Pelatihan Ke-3">Pelatihan Ke-3</option>
                                <option value="Pelatihan Ke-4">Pelatihan Ke-4</option>
                                <option value="Pelatihan Ke-5">Pelatihan Ke-5</option>
                                <option value="Pelatihan Ke-6">Pelatihan Ke-6</option>
                                <option value="Pelatihan Ke-7">Pelatihan Ke-7</option>
                                <option value="Pelatihan Ke-8">Pelatihan Ke-8</option>
                                <option value="Pelatihan Ke-9">Pelatihan Ke-9</option>
                                <option value="Pelatihan Ke-10">Pelatihan Ke-10</option>
                                <option value="Pelatihan Ke-11">Pelatihan Ke-11</option>
                                <option value="Pelatihan Ke-12">Pelatihan Ke-12</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1" name="divisi" required>
                                <option>Pilih Divisi</option>
                                <?php foreach ($devisi as $item) : ?>
                                    <option value="<?= $item->division_id ?>"><?= $item->division_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1" name="kategori" required>
                                <option>Pilih Kategori</option>
                                <option>Modul</option>
                                <option>Record</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                                </div>
                                <input class="form-control" placeholder="Link Materi (Modul/Rekaman)" type="text" name="link" required>
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

    <!-- 2. modal edit -->
    <div class="modal fade" id="modal-edit-pengurus" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Edit Data Materi</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= site_url('Dashboard/materi_edit') ?>" method="POST">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-app"></i></span>
                                </div>
                                <input class="form-control" type="hidden" id="idMateri" name="id">
                                <input class="form-control" placeholder="Judul Materi" type="text" id="namaMateri" name="judul">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                                </div>
                                <input class="form-control" placeholder="Link Materi" type="text" id="linkMateri" name="link">
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


    <!-- 3. modal confirmation -->
    <div class="modal fade" id="modal-delete-pengurus" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <a class="btn btn-danger text-white" id="btnMateriHapus">Yakin</a>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
                </div>

            </div>
        </div>
    </div>