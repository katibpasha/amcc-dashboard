<!-- Header -->
<!-- Header -->
<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <h6 class="h2 text-white d-inline-block mb-4">Event Pelatihan & Presensi</h6>
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-event">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Buat Event Pelatihan</span>
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
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nama Event</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Partisipan</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    Pelatihan Divisi Mobile Programming
                                </th>
                                <td>
                                    Pelatihan tes
                                </td>
                                <td>
                                    Google Meet
                                </td>
                                <td>
                                    12.30 - 17.00
                                </td>
                                <td>
                                    52
                                </td>
                                <td class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-event">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-event">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Pelatihan Divisi Web Programming
                                </th>
                                <td>
                                    Pelatihan tes
                                </td>
                                <td>
                                    Google Meet
                                </td>
                                <td>
                                    12.30 - 17.00
                                </td>
                                <td>
                                    52
                                </td>
                                <td class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-event">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-event">Hapus</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Pelatihan Divisi Desktop Programming
                                </th>
                                <td>
                                    Pelatihan tes
                                </td>
                                <td>
                                    Google Meet
                                </td>
                                <td>
                                    12.30 - 17.00
                                </td>
                                <td>
                                    52
                                </td>
                                <td class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit-event">Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-event">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- 1. Modal tambah event -->

    <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Event Pelatihan</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form role="form">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-tag"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Event" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" placeholder="Waktu Mulai" type="time">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" placeholder="Waktu Akhir" type="time">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Lokasi" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <textarea class="form-control" placeholder="Deskripsi" rows="5"></textarea>
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

    <!-- 2. Modal Edit Event -->

    <div class="modal fade" id="modal-edit-event" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default" data-toggle="modal" data-target="#modal-edit-event">Edit Event Pelatihan</h6>
                    <button type="button" class="close" data-dismiss="modal" aria data-toggle="modal" data-target="#modal-delete-event" -label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form role="form">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-tag"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Event" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" placeholder="Waktu Mulai" type="time">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-time-alarm"></i></span>
                                </div>
                                <input class="form-control" placeholder="Waktu Akhir" type="time">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Lokasi" type="text">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <textarea class="form-control" placeholder="Deskripsi" rows="5"></textarea>
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

    <!-- 3. Modal confirmation -->
    <!-- 5. modal confirmation -->
    <div class="modal fade" id="modal-delete-event" tabindex="-1" role="dialog" aria-hidden="true">
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