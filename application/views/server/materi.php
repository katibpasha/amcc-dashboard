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
                                <tr>
                                    <th scope="row">
                                        Modul Layout (Column, Row, Stack) <i class="mx-2 fas fa-link"></i>
                                    </th>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Taufiq Alfianto
                                    </td>
                                    <td>
                                        2022/01/08
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Modul Container, Image, Padding <i class="mx-2 fas fa-link"></i>
                                    </th>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Dewi Setyawati
                                    </td>
                                    <td>
                                        2022/01/15
                                    </td>
                                </tr>
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
                                    <th scope="col">Pengupload</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <th scope="row">
                                        Rekaman Pelatihan Layouting <i class="mx-2 fas fa-link"></i>
                                    </th>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Ivan Nur Ilham Syah
                                    </td>
                                    <td>
                                        2020/01/10
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Rekaman Membuat Halaman Home Bagian 1 <i class="mx-2 fas fa-link"></i>
                                    </th>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        Ivan Nur Ilham Syah
                                    </td>
                                    <td>
                                        2020/01/10
                                    </td>
                                </tr>
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
                    <form role="form">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-app"></i></span>
                                </div>
                                <input class="form-control" placeholder="Judul Materi" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1">
                                <option>Pilih Pelatihan</option>
                                <option>Pelatihan Ke-1</option>
                                <option>Pelatihan Ke-2</option>
                                <option>Pelatihan Ke-3</option>
                                <option>Pelatihan Ke-4</option>
                                <option>Pelatihan Ke-5</option>
                                <option>Pelatihan Ke-6</option>
                                <option>Pelatihan Ke-7</option>
                                <option>Pelatihan Ke-8</option>
                                <option>Pelatihan Ke-9</option>
                                <option>Pelatihan Ke-10</option>
                                <option>Pelatihan Ke-11</option>
                                <option>Pelatihan Ke-12</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1">
                                <option>Pilih Divisi</option>
                                <option>Divisi Mobile Programming</option>
                                <option>Divisi Web Programming</option>
                                <option>Divisi Desktop Programming</option>
                                <option>Divisi Hardware & Software</option>
                                <option>Divisi Computer Network</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1">
                                <option>Pilih Kategori</option>
                                <option>Modul</option>
                                <option>Rekaman</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                                </div>
                                <input class="form-control" placeholder="Link Materi (Modul/Rekaman)" type="text">
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

    <!-- 2. modal edit -->

    <div class="modal fade" id="modal-edit-material" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Edit Data Pengurus</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form role="form">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-app"></i></span>
                                </div>
                                <input class="form-control" placeholder="Judul Materi" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1">
                                <option>Pilih Pelatihan</option>
                                <option>Pelatihan Ke-1</option>
                                <option>Pelatihan Ke-2</option>
                                <option>Pelatihan Ke-3</option>
                                <option>Pelatihan Ke-4</option>
                                <option>Pelatihan Ke-5</option>
                                <option>Pelatihan Ke-6</option>
                                <option>Pelatihan Ke-7</option>
                                <option>Pelatihan Ke-8</option>
                                <option>Pelatihan Ke-9</option>
                                <option>Pelatihan Ke-10</option>
                                <option>Pelatihan Ke-11</option>
                                <option>Pelatihan Ke-12</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1">
                                <option>Pilih Divisi</option>
                                <option>Divisi Mobile Programming</option>
                                <option>Divisi Web Programming</option>
                                <option>Divisi Desktop Programming</option>
                                <option>Divisi Hardware & Software</option>
                                <option>Divisi Computer Network</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-control input-group input-group-merge input-group-alternative" id="exampleFormControlSelect1">
                                <option>Pilih Kategori</option>
                                <option>Modul</option>
                                <option>Rekaman</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                                </div>
                                <input class="form-control" placeholder="Link Materi (Modul/Rekaman)" type="text">
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

    <!-- 3. modal confirmation -->

    <div class="modal fade" id="modal-delete-material" tabindex="-1" role="dialog" aria-hidden="true">
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