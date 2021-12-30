<!-- Header -->
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
                                    <span class="h2 font-weight-bold mb-0">456</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body py-4">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Divisi</h5>
                                    <span class="h2 font-weight-bold mb-0">5</span>
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
                            <h5 class="h3 text-white mb-0">Mobile Programming</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-divisi-mobile" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data</h6>
                            <h5 class="h3 text-white mb-0">Tingkat Kesulitan Materi</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-materi" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data</h6>
                            <h5 class="h3 text-white mb-0">Penyampaian Materi</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-penyampaian" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Visualisasi Data</h6>
                            <h5 class="h3 text-white mb-0">Suasana Kelas</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-kelas" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
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
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Tingat Kesulitan Materi</th>
                                <th scope="col">Penyampaian Materi</th>
                                <th scope="col">Suasana Kelas</th>
                                <th scope="col">Kendala</th>
                                <th scope="col">Kritik & Saran</th>
                                <th scope="col">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    Ivan Nur Ilham Syah
                                </th>
                                <td>
                                    Mobile Programming
                                </td>
                                <td>
                                    Sangat Mudah
                                </td>
                                <td>
                                    Mudah Dipahami
                                </td>
                                <td>
                                    Seru
                                </td>
                                <td>
                                    Ga ada
                                </td>
                                <td>
                                    Semangat kakak!
                                </td>
                                <td>
                                    2022/01/08
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Lutfi Asmara
                                </th>
                                <td>
                                    Mobile Programming
                                </td>
                                <td>
                                    Sangat Mudah
                                </td>
                                <td>
                                    Mudah Dipahami
                                </td>
                                <td>
                                    SBL SBL SBL!
                                </td>
                                <td>
                                    Ez pz, Ga ada
                                </td>
                                <td>
                                    Semangat kakak!
                                </td>
                                <td>
                                    2022/01/08
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Taufiq Alfianto
                                </th>
                                <td>
                                    Mobile Programming
                                </td>
                                <td>
                                    Mudah
                                </td>
                                <td>
                                    Lumayan
                                </td>
                                <td>
                                    Agak Garing ya!
                                </td>
                                <td>
                                    Laptopnya ngehang
                                </td>
                                <td>
                                    Semangat aja!
                                </td>
                                <td>
                                    2022/01/08
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>