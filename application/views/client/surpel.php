<!-- Header -->
<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-xl-12">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 text-white mb-0">Pemberitahuan</h5>
                            <p class="text-white my-2">
                                Sebelum melakukan presensi, yuk isi Survey pelatihan dulu ya agar bisa meningkatkan kualitas pelatihan berikutnya!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('Member/surpel_action') ?>" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="my-4">
                                    <p class="text-white">Pilih Sesi Pelatihan</p>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="pilih-sesi-1" name="radio-sesi" class="custom-control-input" value="SIANG">
                                        <label class="custom-control-label text-white" for="pilih-sesi-1">Sesi Siang</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="pilih-sesi-2" name="radio-sesi" class="custom-control-input" value="SORE">
                                        <label class="custom-control-label text-white" for="pilih-sesi-2">Sesi Sore</label>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <p class="text-white">Seberapa Efektif Pelatihan AMCC Hari ini?</p>
                                    <div class="row px-3">
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-efektifitas-1" name="radio-efektifitas" class="custom-control-input" value="1">
                                            <label class="custom-control-label text-white" for="pilih-efektifitas-1">1</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-efektifitas-2" name="radio-efektifitas" class="custom-control-input" value="2">
                                            <label class="custom-control-label text-white" for="pilih-efektifitas-2">2</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-efektifitas-3" name="radio-efektifitas" class="custom-control-input" value="3">
                                            <label class="custom-control-label text-white" for="pilih-efektifitas-3">3</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-efektifitas-4" name="radio-efektifitas" class="custom-control-input" value="4">
                                            <label class="custom-control-label text-white" for="pilih-efektifitas-4">4</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-efektifitas-5" name="radio-efektifitas" class="custom-control-input" value="5">
                                            <label class="custom-control-label text-white" for="pilih-efektifitas-5">5</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <p class="text-white">Ketika pengurus menyampaikan materi, seberapa mudah dipahami?</p>
                                    <div class="row px-3">
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-penyampaian-1" name="radio-penyampaian" class="custom-control-input" value="1">
                                            <label class="custom-control-label text-white" for="pilih-penyampaian-1">1</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-penyampaian-2" name="radio-penyampaian" class="custom-control-input" value="2">
                                            <label class="custom-control-label text-white" for="pilih-penyampaian-2">2</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-penyampaian-3" name="radio-penyampaian" class="custom-control-input" value="3">
                                            <label class="custom-control-label text-white" for="pilih-penyampaian-3">3</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-penyampaian-4" name="radio-penyampaian" class="custom-control-input" value="4">
                                            <label class="custom-control-label text-white" for="pilih-penyampaian-4">4</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-penyampaian-5" name="radio-penyampaian" class="custom-control-input" value="5">
                                            <label class="custom-control-label text-white" for="pilih-penyampaian-5">5</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <p class="text-white">Seberapa interaktif suasana kelas ketika pelatihan?</p>
                                    <div class="row px-3">
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-suasana-1" name="radio-suasana" class="custom-control-input" value="1">
                                            <label class="custom-control-label text-white" for="pilih-suasana-1">1</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-suasana-2" name="radio-suasana" class="custom-control-input" value="2">
                                            <label class="custom-control-label text-white" for="pilih-suasana-2">2</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-suasana-3" name="radio-suasana" class="custom-control-input" value="3">
                                            <label class="custom-control-label text-white" for="pilih-suasana-3">3</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-suasana-4" name="radio-suasana" class="custom-control-input" value="4">
                                            <label class="custom-control-label text-white" for="pilih-suasana-4">4</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-suasana-5" name="radio-suasana" class="custom-control-input" value="5">
                                            <label class="custom-control-label text-white" for="pilih-suasana-5">5</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <p class="text-white">Ketika bertanya hal yang belum paham, jawaban kakak pengurus seberapa membantumu dalam mendapatkan jawaban itu?</p>
                                    <div class="row px-3">
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-responsibilitas-1" name="radio-responsibilitas" class="custom-control-input" value="1">
                                            <label class="custom-control-label text-white" for="pilih-responsibilitas-1">1</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-responsibilitas-2" name="radio-responsibilitas" class="custom-control-input" value="2">
                                            <label class="custom-control-label text-white" for="pilih-responsibilitas-2">2</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-responsibilitas-3" name="radio-responsibilitas" class="custom-control-input" value="3">
                                            <label class="custom-control-label text-white" for="pilih-responsibilitas-3">3</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-responsibilitas-4" name="radio-responsibilitas" class="custom-control-input" value="4">
                                            <label class="custom-control-label text-white" for="pilih-responsibilitas-4">4</label>
                                        </div>
                                        <div class="col custom-control custom-radio">
                                            <input type="radio" id="pilih-responsibilitas-5" name="radio-responsibilitas" class="custom-control-input" value="5">
                                            <label class="custom-control-label text-white" for="pilih-responsibilitas-5">5</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <p class="text-white">Apa kendala kamu saat mengikuti pelatihan hari ini?</p>
                                    <textarea rows="5" class="form-control form-control-alternative" placeholder="Kendala selama pelatihan" name="kendala"></textarea>
                                </div>
                                <div class="my-4">
                                    <p class="text-white">Kritik dan saran buat pelatihan kedepannya lebih baik?</p>
                                    <textarea rows="5" class="form-control form-control-alternative" placeholder="Kritik & Saran" name="kritik"></textarea>
                                </div>
                                <button type="submit" class="btn btn-success my-4">
                                    <span class="btn-inner--icon"><i class="fas fa-clipboard-check"></i></span>
                                    <span class="btn-inner--text px-2">Submit Presensi</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>