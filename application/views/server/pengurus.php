<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <h6 class="h2 text-white d-inline-block mb-4">Pengurus AMCC</h6>
            <div class="row">
                <div class="px-2 mb-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-pengurus">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Tambah Pengurus Baru</span>
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
            <strong>Yahhh :( !</strong> Password Antum Tidak sama Borr !!
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
            <strong> <?= $this->session->flashdata('flash-gagal') ?></strong>
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
                                    <th scope="col">Nomor HP</th>
                                    <th scope="col">Dibuat Pada</th>
                                    <th scope="col">Diperbaharui Pada</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php foreach ($pengurus as $item) : ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $item->nim ?>
                                        </th>
                                        <th>
                                            <?= $item->name ?>
                                        </th>
                                        <td>
                                            <?= $item->email ?>
                                        </td>
                                        <td>
                                            <?= $item->phone ?>
                                        </td>
                                        <td>
                                            <?= date('d-m-Y', strtotime($item->created_at)) ?>
                                        </td>
                                        <td>
                                            <?= date('d-m-Y', strtotime($item->mdd)) ?>
                                        </td>
                                        <td class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-pengurus" id="editBtn" data-name="<?= $item->name ?>" data-email="<?= $item->email ?>" data-phone="<?= $item->phone ?>" data-nim="<?= $item->nim ?>">Edit</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-pengurus" id="hapusBtn" data-nim="<?= $item->nim ?>">Hapus</button>
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
    <div class="modal fade" id="modal-add-pengurus" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Tambah Pengurus</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form role="form" action="<?= site_url('Dashboard/pengurus_action') ?>" method="POST">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-glide-g"></i></span>
                                </div>
                                <input class="form-control" placeholder="NIM Pengurus" type="text" name="nim" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Pengurus" type="text" name="nama" required>
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
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nomor HP" type="number" name="phone" required>
                            </div>
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

    <!-- 2. modal edit -->

    <div class="modal fade" id="modal-edit-pengurus" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Edit Data Pengurus</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= site_url('Dashboard/user_edit') ?>" method="POST">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-glide-g"></i></span>
                                </div>
                                <input class="form-control" placeholder="NIM" type="text" id="nimPengurus" name="nim" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Pengurus" type="text" id="namaPengurus" name="nama">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email" id="emailPengurus" name="email">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nomor HP" type="number" id="phonePengurus" name="phone">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                </div>
                                <input class="form-control" placeholder="Password" type="password" name="pass1">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                </div>
                                <input class="form-control" placeholder="Konfirmasi Password" type="password" name="pass2">
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
                    <a class="btn btn-danger text-white" id="btnHapus">Yakin!</a>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
                </div>

            </div>
        </div>
    </div>