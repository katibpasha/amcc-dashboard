<div class="header bg-blue-amcc pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <h6 class="h2 text-white d-inline-block mb-4">Assessment Keahlian Pengurus AMCC</h6>
            <div class="row">
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <?php foreach ($pengurus_card as $item) : ?>
            <div class="col-3">
                <div class="card bg-default">
                    <div class="card-header bg-transparent">
                        <div class="col">
                            <img src="<?= base_url('assets/argon') ?>/assets/img/pengurus/<?= $item->photo ?>" width="100%" style="border-radius: 50%" alt="...">
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
                            <div class="col" style="text-align: left;">
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
    <script>
        $(document).ready(function() {
            $(document).on('click', '#btnDetail', function() {
                let nim = $(this).data('nim');
                let name = $(this).data('nama');
                let prodi = $(this).data('prodi');
                $.ajax({
                    type: 'ajax',
                    url: "<?= site_url() . '/Dashboard/get_assesment/' ?>" + nim,
                    dataType: 'json',
                    success: function(data) {
                        let baris = ''
                        let baris2 = ''
                        for (let i = 0; i < data.length; i++) {
                            baris += '<tr>' +
                                '<td>' + '<img src="<?= base_url('assets/argon') ?>/assets/img/icons/keahlian/user-check.svg" width="24px" alt="user-check"> ' + data[i].skill_name + '</td>'
                            '</tr>'
                        }
                        $('#targetModal').html(baris);

                    }

                })
                $.ajax({
                    type: 'ajax',
                    url: "<?= site_url() . '/Dashboard/get_portfolio/' ?>" + nim,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data)
                        let port = ''

                        for (let i = 0; i < data.length; i++) {
                            port += '<li>' + data[i].port_desc + '</li>'
                        }

                        $('#portfolioProfile').html(port);

                    }

                })
                $('#namaProfile').html(': ' + name)
                $('#nimProfile').html(': ' + nim)
                $('#prodiProfile').html(': ' + prodi)
            });
        });
    </script>