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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add-event">
                        <span class="btn-inner--icon"><i class="fas fa-clipboard-check"></i></span>
                        <span class="btn-inner--text px-2">Presensi</span>
                    </button>
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
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <th scope="row">
                                        Rekaman Pelatihan Layout <i class="mx-2 fas fa-link"></i>
                                    </th>
                                    <td>
                                        1
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Rekaman Membuat Halaman Home Bagian 1 <i class="mx-2 fas fa-link"></i>
                                    </th>
                                    <td>
                                        2
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>