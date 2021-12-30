<!-- Header -->
<!-- Header -->
<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <h6 class="h2 text-white d-inline-block mb-4">Member AMCC</h6>
            <div class="row">
                <div class="px-2 mb-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-event">
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
    <div class="row">
        <div class="col-xl-12">
            <div class="card bg-default shadow">
                <div class="card-header border-0 bg-default">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-1">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>5</option>
                                <option>15</option>
                                <option>25</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control form-control-alternative" placeholder="Cari member">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="my-datables" class="table align-items-center table-dark table-flush display">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Email</th>
                                <th scope="col">No. Hp</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Tahun</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    Ivan Nur Ilham Syah
                                </th>
                                <td>
                                    19.11.2742
                                </td>
                                <td>
                                    ivan.syah@students.amikom.ac.id
                                </td>
                                <td>
                                    081247484949
                                </td>
                                <td>
                                    Mobile Programming
                                </td>
                                <td>
                                    2019
                                </td>
                                <td class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-member">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-member">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Ivan Nur Ilham Syah
                                </th>
                                <td>
                                    19.11.2742
                                </td>
                                <td>
                                    ivan.syah@students.amikom.ac.id
                                </td>
                                <td>
                                    081247484949
                                </td>
                                <td>
                                    Mobile Programming
                                </td>
                                <td>
                                    2019
                                </td>
                                <td class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-member">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-member">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Ivan Nur Ilham Syah
                                </th>
                                <td>
                                    19.11.2742
                                </td>
                                <td>
                                    ivan.syah@students.amikom.ac.id
                                </td>
                                <td>
                                    081247484949
                                </td>
                                <td>
                                    Mobile Programming
                                </td>
                                <td>
                                    2019
                                </td>
                                <td class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-member">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-member">Hapus</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <!-- 1. Modal Tambah Member -->

    <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Tambah Member</h6>
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
                                    <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                                </div>
                                <input class="form-control" placeholder="NIM" type="text">
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
                                    <span class="input-group-text"><i class="fas fa-th-large"></i></span>
                                </div>
                                <input class="form-control" placeholder="Divisi" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control" placeholder="Tahun" type="text">
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