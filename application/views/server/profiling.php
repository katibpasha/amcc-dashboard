<style>
    .ph-item {
        background-color: transparent !important;
        border: none;
        border-color: none !important;
    }
</style>
<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <h6 class="h2 text-white d-inline-block mb-4">Assessment Keahlian Pengurus AMCC</h6>
            <div class="row">
                <div class="px-3 mb-4">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-profiling">
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                        <span class="btn-inner--text">Tambah Profiling</span>
                    </button>
                </div>
                <?php if ($this->session->userdata('role_user') == "SA") : ?>
                    <div class="mb-4">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-add-profiling">
                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            <span class="btn-inner--text">Tambah Skills</span>
                        </button>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">

    <div class="row">
        <?php foreach ($pengurus_card as $item) : ?>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card bg-default">
                    <div class="card-header bg-transparent">
                        <div class="col">
                            <img src="<?= base_url('assets/') ?>img/pengurus/<?= $item->photo ?>" width="100%" style="border-radius: 50%" alt="...">
                        </div>
                        <div class="card-body" align="center">
                            <div class="row align-items-center">
                                <div class="col justify-content-center">
                                    <h5 class="h3 text-white"><?= $item->alias ?></h5>
                                    <h6 class="text-light text-uppercase justify-content-center"><?= $item->prodi ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col" align="center">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-detail-skill" name="btnDetail" id="btnDetail" data-nim="<?= $item->nim ?>" data-nama="<?= $item->name ?>" data-prodi="<?= $item->prodi ?>">
                                        Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <!-- Modal -->

    <div class="modal fade" id="modal-detail-skill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Keahlian Pengurus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col" style="text-align: left;">
                                <span>Nama</span><br>
                                <span>NIM</span><br>
                                <span>Program Studi</span><br>
                            </div>
                            <div class="col-8" style="text-align: left;">
                                <span id="namaProfile"></span><br>
                                <span id="nimProfile"></span><br>
                                <span id="prodiProfile"></span><br>
                            </div>
                        </div>
                        <h3 style="text-align: left;">Keahlian</h3>
                        <div class="row mb-4">
                            <div class="col" style="text-align: left;" id="mySkeleton">
                                <table>
                                    <tbody id="targetModal">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h3 style="text-align: left;">Protofolio <a href=""><i class="mx-2 fas fa-link"></i></a></h3>
                        <div class="modal-body" style="min-height: 150px; background: #f3f3f3; text-align: left;">
                            <ol id="portfolioProfile" class="px-5">

                            </ol>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-add-profiling" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Tambah Data Pengurus</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="<?= site_url('user/edit/pengurus') ?>" method="POST">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fab fa-glide-g"></i></span>
                                </div>
                                <input class="form-control" placeholder="NIM" type="text" id="nim-field" name="nim" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Pengurus" type="text" id="name-field" name="nama">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-th-large"></i></span>
                                </div>
                                <select name="divisi" class="form-control">
                                    <option value="">-- Pilih Divisi --</option>
                                    <?php foreach ($divisi as $item) : ?>
                                        <option value="<?= $item->division_id ?>"><?= $item->division_name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email" id="email-field" name="email">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nomor HP" type="number" id="phone-field" name="phone">
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
    <script>
        $(document).ready(function() {

            $(document).on('click', '#btnDetail', function() {
                $('#mySkeleton').html(makeSkeleton());
                $('#portfolioProfile').html(makeSkeleton());

                setTimeout(function() {
                    load_content();
                }, 3000);

                function makeSkeleton() {
                    var output = '';
                    output += '<div class="ph-item">';

                    output += '<div>';
                    output += '<div class="ph-row">';
                    output += '<div class="ph-col-12 big"></div>';
                    output += '<div class="ph-col-12"></div>';
                    output += '<div class="ph-col-12"></div>';
                    output += '<div class="ph-col-12"></div>';
                    output += '<div class="ph-col-12"></div>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';

                    return output;
                }
                let nim = $(this).data('nim');
                let name = $(this).data('nama');
                let prodi = $(this).data('prodi');

                function load_content() {
                    $.ajax({
                        type: 'POST',
                        url: "<?= site_url() . '/pengurus/assesment/' ?>" + nim,
                        dataType: 'json',
                        success: function(data) {
                            let myTable = ''
                            let baris = ''
                            let baris2 = ''
                            for (let i = 0; i < data.length; i++) {
                                baris += '<tr>' +
                                    '<td>' + '<img src="<?= base_url('assets/') ?>img/icons/keahlian/user-check.svg" width="24px" alt="user-check"> ' + data[i].skill_name + '</td>'
                                '</tr>'
                            }
                            myTable = '<table><tbody>' + baris + '</tbody></table>'
                            $('#mySkeleton').html(myTable);

                        }

                    })
                    $.ajax({
                        type: 'POST',
                        url: "<?= site_url() . '/pengurus/portfolio/' ?>" + nim,
                        dataType: 'json',
                        success: function(data) {

                            let port = ''

                            for (let i = 0; i < data.length; i++) {
                                port += '<li>' + data[i].port_desc + '</li>'
                            }
                            port +=
                                $('#portfolioProfile').html(port);

                        }

                    })
                }
                $('#namaProfile').html(': ' + name)
                $('#nimProfile').html(': ' + nim)
                $('#prodiProfile').html(': ' + prodi)
            });
        });
    </script>