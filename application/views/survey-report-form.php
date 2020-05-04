<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box ml-3">
            <h4 class="page-title">Form Survey Report</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Table</a></li>
                <li class="breadcrumb-item active">Survey Report</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary font-size gradient ml-3 mr-3" role="alert">
            <div class="ml-4 mr-4 mt-3 mb-3">
                <h5 class="alert-heading"><i class="fas fa-info-circle"></i> Hati - hati dalam
                    menginput data</h5>
                <p>Dilarang memalsukan data dan menginput data - data yang bukan milik konsumen.
                    Data ini akan disimpan sebagai <b>Leads Prospect</b> dan akan dilanjutkan dengan
                    mengisi <b>Form verifikasi dan Survey.</b> Data ini akan diteruskan ke head di
                    cabang kemudian diassign ke CMS diisi datanya dengan lengkap.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="ml-3 mr-3 mt-1">
            <h5 class="ml-5"><b>Yang harus Diisi</b></h5>

            <div class="ml-5">
                <p class="mt-3 mb-0 " style="font-size: 16px;">Personal Data</p>
                <p class="mt-1 personal-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <p class="mt-1 personal-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p>

                <p class="mt-3 mb-0 " style="font-size: 16px;">Data Analisa</p>
                <p class="mt-1 detail-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <p class="mt-1 detail-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p>

                <p class="mt-3 mb-0 " style="font-size: 16px;">Struktur Pembiayaan</p>
                <p class="mt-1 product-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <p class="mt-1 product-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p>

                <p class="mt-3 mb-0 " style="font-size: 16px;">Data Religi</p>
                <p class="mt-1 branch-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <p class="mt-1 branch-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p>

                <p class="mt-3 mb-0 " style="font-size: 16px;">Hasil Analisa</p>
                <p class="mt-1 branch-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <p class="mt-1 branch-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p>

                <p class="mt-3 mb-0 " style="font-size: 16px;">Lampiran Data</p>
                <p class="mt-1 branch-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <p class="mt-1 branch-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p>

                <h5 class="mt-4"><b>Documents</b></h5>

                <p class="mt-3"></p><i class="far fa-file-archive"></i>&nbsp;&nbsp;&nbsp;Kartu
                Tanda Penduduk</p>
                <p class="mt-1"><i class="far fa-file-archive"></i>&nbsp;&nbsp;&nbsp;Kartu
                    Keluarga</p>
                <p class="mt-1"><i class="far fa-file-archive"></i>&nbsp;&nbsp;&nbsp;buntu
                    Penghasilan</p>

            </div>


        </div>
    </div>

    <div class="col-md-9">
        <form action="#">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Data Konsumen
                                <a class="float-right konsumen-down" onclick="konsumendownFunction()" data-toggle="collapse" href="#konsumen" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control text-size number-only" name="nama_konsumen" id="nama_konsumen" required placeholder="Kamea Dahayu Aditya" />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Nomor KTP</label>
                                                <input type="phone" class="form-control text-size placement number-only" name="no_ktp" id="no_ktp" required placeholder="0000 0000 0000 0000" minlength="16" maxlength="16" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Nomor Handphone</label>
                                                <input type="text" class="form-control text-size placement number-only" name="telepon" id="telepon" required placeholder="0896 5533 985" maxlength="15" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div id="hide" class="form-group ml-3 mr-3">
                                                <label>Pilih Cabang Tujuan</label>
                                                <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                                    <option selected disabled value="">Pilih Cabang
                                                    </option>
                                                    <?php foreach ($branches->result() as $branch) { ?>
                                                        <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                        <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>">
                                                            <?= $branch->nama_cabang ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Jenis Konsumen</label>
                                                <select class="form-control text-size" name="status_konsumen" id="status_konsumen" required>
                                                    <option selected value="">Pilih Jenis Konsumen
                                                    </option>
                                                    <option value="New Customer">New Customer
                                                    </option>
                                                    <option value="RO Expire">RO Expire</option>
                                                    <option value="RO Active">RO Active</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Asal Aplikasi</label>
                                                <select class="form-control text-size" name="soa" id="soa" required>
                                                    <option selected value="">Pilih Asal Aplikasi>
                                                    </option>
                                                    <option value="Direct Selling">Direct Selling
                                                    </option>
                                                    <option value="Tour & travel">Tour & travel
                                                    </option>
                                                    <option value="Penyedia Jasa">Penyedia Jasa
                                                    </option>
                                                    <option value="Agent BA">Agent BA</option>
                                                    <option value="EGC">EGC</option>
                                                    <option value="CGC">CGC</option>
                                                    <option value="Digital Marketing">Digital
                                                        Marketing
                                                    </option>
                                                    <option value="Website BFI Syariah">Website BFI
                                                        Syariah</option>
                                                    <option value="RO">RO</option>
                                                    <option value="Walk In">Walk In</option>
                                                    <option value="Event Promotion">Event Promotion
                                                    </option>
                                                    <option value="Tele Marketing">Tele Marketing
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="konsumen">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control text-size" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Pendidikan</label>
                                                    <select class="form-control text-size" name="pendidikan" id="pendidikan" required>
                                                        <option selected value="">Pilih Pendidikan
                                                        </option>
                                                        <option value="SD">SD</option>
                                                        <option value="SLTP">SLTP</option>
                                                        <option value="SMU">SMU</option>
                                                        <option value="SLTA">SLTA</option>
                                                        <option value="STM">STM</option>
                                                        <option value="SMEA">SMEA</option>
                                                        <option value="D1">D1</option>
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" class="form-control text-size" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Status Pernikahan</label>
                                                    <select class="form-control text-size" name="status_pernikahan" id="status_pernikahan" required>
                                                        <option selected value="">Pilih Status
                                                            Pernikahan</option>
                                                        <option value="Sudah Menikah">Sudah Menikah
                                                        </option>
                                                        <option value="Belum Menikah">Belum Menikah
                                                        </option>
                                                        <option value="Janda / Duda - Meninggal">
                                                            Janda / Duda - Meninggal</option>
                                                        <option value="Janda / Duda - Cerai">Janda /
                                                            Duda - Cerai</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row pasangan">
                                            <div class="col-md-12">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Nama Pasangan</label>
                                                    <input type="text" class="form-control text-size" name="nama_pasangan" id="nama_pasangan" placeholder="Nama Pasangan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group text-size ml-4 mr-4">
                                                    <label>Pekerjaan Konsumen</label><br>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="jenis_rumah" id="jenis_rumah" required value="Karyawan">
                                                        <label class="form-check-label">
                                                            Karyawan
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="jenis_rumah" id="jenis_rumah" required value="Wiraswasta">
                                                        <label class="form-check-label">
                                                            Wiraswasta
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Lokasi Rumah</label>
                                                    <select class="form-control text-size" name="lokasi_rumah" id="lokasi_rumah" required>
                                                        <option selected value="">Pilih Kategori
                                                            Lokasi Rumah</option>
                                                        <option value="Non Perumahan - Tidak bisa Lewat Mobil">
                                                            Non Perumahan - Tidak bisa Lewat Mobil
                                                        </option>
                                                        <option value="Non Perumahan - Jalan Satu Mobil">
                                                            Non Perumahan - Jalan Satu Mobil
                                                        </option>
                                                        <option value="Non Perumahan - Jalan Dua Mobil">
                                                            Non Perumahan - Jalan Dua Mobil</option>
                                                        <option value="Perumahan - Tidak Bisa Lewat Mobil">
                                                            Perumahan - Tidak Bisa Lewat Mobil
                                                        </option>
                                                        <option value="Perumahan - Jalan Satu Mobil">
                                                            Perumahan - Jalan Satu Mobil</option>
                                                        <option value="Perumahan - Jalan Dua Mobil">
                                                            Perumahan - Jalan Dua Mobil</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Jenis Bangunan Rumah</label>
                                                    <select class="form-control text-size" name="jenis_bangunan" id="jenis_bangunan" required>
                                                        <option selected value="">Pilih Kategori
                                                            Jenis Bangunan Rumah</option>
                                                        <option value="Permanent">Permanent</option>
                                                        <option value="Semi Permanent">Semi
                                                            Permanent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Luas Bangunan Rumah</label>
                                                    <select class="form-control text-size" name="luas_bangunan" id="luas_bangunan" required>
                                                        <option selected value="">Pilih Kategori
                                                            Luas Bangunan Rumah</option>
                                                        <option value="< 60 M2">
                                                            < 60 M2</option> <option value="60 - 100 M2">60 - 100 M2
                                                        </option>
                                                        <option value="100 - 150 M2">100 - 150 M2
                                                        </option>
                                                        <option value="> 150 M2">> 150 M2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 event">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Nama Event</label>
                                                    <input type="text" class="form-control text-size" name="nama_event" id="nama_event" value="<?= set_value('nama_event') ?>" placeholder="Input Nama Event">
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-agent mb-3">
                                                <div class="ml-3 mr-3">
                                                    <label class="gent">Pilih Data Agent</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control text-size" name="data_agent" id="data_agent" value="<?= set_value('data_agent') ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-light btn-data btn-cari text-size" type="button" id="btn-data-agent" data-toggle="modal" data-target="">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form mb-3">
                                                <div class="ml-3 mr-3">
                                                    <label class="travel">Pilih Data Travel</label>
                                                    <label class="jasa">Pilih Data Penyedia
                                                        Jasa</label>
                                                    <label class="vendor">Pilih Data Partner</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control text-size" name="data_partner" id="data_partner" value="<?= set_value('data_partner') ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-light btn-data btn-cari text-size" type="button" id="btn-data" data-toggle="modal" data-target="">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 nik">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>NIK</label>
                                                    <input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= set_value('nik_egc') ?>" placeholder="072104" minlength="6" maxlength="7" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 posisi">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Posisi</label>
                                                    <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= set_value('posisi_egc') ?>" placeholder="Input Posisi">
                                                </div>
                                            </div>
                                            <div class="col-md-12 cabang">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Cabang</label>
                                                    <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= set_value('cabang_egc') ?>" placeholder="Input Cabang">
                                                </div>
                                            </div>
                                            <div class="col-md-6 kontrak-ro">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Nomor Kontrak</label>
                                                    <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= set_value('nomor_kontrak') ?>" placeholder="087883774" minlength="10" maxlength="10" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 konsumen-ro">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Nama Konsumen</label>
                                                    <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= set_value('referral_konsumen') ?>" placeholder="Input Nama konsumen">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Activity Marketing</label>
                                                    <select class="form-control text-size" name="activity" id="activity" required>
                                                        <option selected disabled value="">Pilih
                                                            Kategori Activity Marketing</option>
                                                        <optionm value="Direct Selling">Direct
                                                            Selling</optionm>
                                                        <option value="Tele call">Tele call</option>
                                                        <option value="Digital Marketing">Digital
                                                            Marketing</option>
                                                        <option value="Sosial Media">Sosial Media
                                                        </option>
                                                        <option value="Website">Website</option>
                                                        <option value="Event Promotion">Event
                                                            Promotion</option>
                                                        <option value="Walk In Branch">Walk In
                                                            Branch</option>
                                                        <option value="Surat Penawaran">Surat
                                                            Penawaran</option>
                                                        <option value="Blast WA / SMS">Blast WA /
                                                            SMS</option>
                                                        <option value="Email Marketing">Email
                                                            Marketing</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group text-size ml-3 mr-3">
                                                    <label>Konsumen Cross Branch?</label><br>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" required value="Ya">
                                                        <label class="form-check-label">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" required value="Tidak">
                                                        <label class="form-check-label">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 konsumen-up">
                                <center>
                                    <h4>
                                        <a onclick="konsumenupFunction()" data-toggle="collapse" href="#konsumen" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tujuan Pembiayaan -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Tujuan Pembiayaan
                                <a class="float-right pembiayaan-down" onclick="pembiayaandownFunction()" data-toggle="collapse" href="#pembiayaan" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <p class="ml-3"> <b>Informasi Pembiayaan</b> </p>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Jenis Barang / Jasa</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih jenis Barang dan
                                                Jasa
                                            </option>
                                            <option selected value="Pernikahan">Pernikahan</option>
                                            <option selected value="Barang Elektronik">Barang
                                                Elektronik</option>
                                            <option selected value="Sparepart Otomotif">Sparepart
                                                Otomotif</option>
                                            <option selected value="Pertukangan">Pertukangan
                                            </option>
                                            <option selected value="Home & Living">Home & Living
                                            </option>
                                            <option selected value="Olahraga & Aktivitas">Olahraga &
                                                Aktivitas</option>
                                            <option selected value="Alat Kesehatan">Alat Kesehatan
                                            </option>
                                            <option selected value="Strok Barang Dagang">Strok
                                                Barang Dagang</option>
                                            <option selected value="Umroh">Umroh</option>
                                            <option selected value="Pendidikan">Pendidikan</option>
                                            <option selected value="Wisata Halal">Wisata Halal
                                            </option>
                                            <option selected value="Mobil">Mobil</option>
                                            <option selected value="Motor">Motor</option>
                                            <option selected value="Pertanian / Perkebunan">
                                                Pertanian / Perkebunan</option>
                                            <option selected value="Mesin">Mesin</option>
                                            <option selected value="Hewan Ternak">Hewan Ternak
                                            </option>
                                            <option selected value="Bahan Bangunan">Bahan Bangunan
                                            </option>
                                            <option selected value="Jasa Tukang">Jasa Tukang
                                            </option>
                                            <option selected value="Renovasi">Renovasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Tujuan Penggunaaan</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih Tujuan
                                                Penggunaan
                                            </option>
                                            <option value="Produktif">Produktif</option>
                                            <option value="Konsumtif">Konsumtif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group ml-3 mr-3">
                                        <label>kategori Produk</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih Produk
                                            </option>
                                            <option value="My Ihram">My Ihram</option>
                                            <option value="My Safar">My Safar</option>
                                            <option value="My Hajat">My Hajat</option>
                                            <option value="My Talim">My Talim</option>
                                            <option value="My Cars">My Cars</option>
                                            <option value="My Faedah">My Faedah</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Detail Barang / Jasa</label>
                                        <input type="text" class="form-control text-size" name="" id="" required placeholder="Paket umroh quad" />
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="pembiayaan">
                                <p class="ml-3 mt-4 mb-3"> <b>Informasi Pembiayaan</b> </p>

                                <div class="form-row ml-3 mr-3">
                                    <div class="col-md-12">
                                        <p>Jumlah Tanggungan</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Harga Beli Ke
                                                                merchant</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Harga Beli ke Merchat" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Harga
                                                                Jual ke Konsumen</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Harga Jual ke Konsumen" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Uang
                                                                Muka</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Uang Muka" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Biaya
                                                                Administrasi</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Biaya Administrasi" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Asuransi
                                                                Jiwa</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Asuransi Jiwa" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Asuransi
                                                                kendaraan</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Asuransi Kendaraan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Total
                                                                Uang Muka</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Total Uang Muka" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Lama
                                                                Angsuran</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Lama Angsuran" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Asngsuran
                                                                Per Bulan</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Asngsuran
																					Per Bulan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Total Jumlah
                                                                Tanggungan</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" data-type="currency" required placeholder="Total Jumlah Tanggungan" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <p class="mt-3">Informasikan Pendapatan Periodik</p>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <label>Nama
                                                                Merchant / Toko</label>
                                                        </th>
                                                        <th>
                                                            <label>Harga</label>
                                                        </th>
                                                        <th>
                                                            <label>Alamat / Telepon</label>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-400" name="" id="" placeholder="Nama Merchat / Toko 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-220" name="" id="" placeholder="Harga 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-300" name="" id="" placeholder="Alamat / Telepon 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="" id="" placeholder="Nama Merchat / Toko 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="" id="" placeholder="Harga 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="" id="" placeholder="Alamat / Telepon 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="" id="" placeholder="Nama Merchat / Toko 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="" id="" placeholder="Harga 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="" id="" placeholder="Alamat / Telepon 3" />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 pembiayaan-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="pembiayaanupFunction()" data-toggle="collapse" href="#pembiayaan" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tujuan Pembiayaan -->

                <!-- kondisi konsumen jika karyawan -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Kondisi Konsumen (jika karyawan)
                                <a class="float-right kondisi-down" onclick="kondisidownFunction()" data-toggle="collapse" href="#kondisi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Pekerjaan konsumen</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih Pekerjaan
                                            </option>
                                            <option value="Karyawan Swasta - Tetap">
                                                Karyawan Swasta - Tetap</option>
                                            <option value="Karyawan Swasta - Kontrak">
                                                Karyawan Swasta - Kontrak</option>
                                            <option value="PNS / ASN - Tetap">PNS / ASN -
                                                Tetap</option>
                                            <option value="PNS / ASN - Honorer < 5th">PNS /
                                                ASN - Honorer < 5th</option> <option value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                    Honorer > 5th</option>
                                            <option value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option value="Wiraswasta > 2th">
                                                    Wiraswasta > 2th
                                            </option>
                                            <option value="Profesi Beresiko">Profesi
                                                Beresiko</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Perusahaan Bekerja</label>
                                        <input type="text" class="form-control text-size" name="" id="" placeholder="PT BFI Finance Indonesia" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Penjelasan Profesi Beresiko</label>
                                        <input type="text" class="form-control text-size" name="" id="" placeholder="Penjelasan Profesi Beresiko" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Pekerjaan Pasangan</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih Pekerjaan
                                            </option>
                                            <option value="Tidak Bekerja">Tidak Bekerja
                                            </option>
                                            <option value="Karyawan Swasta - Tetap">
                                                Karyawan Swasta - Tetap</option>
                                            <option value="Karyawan Swasta - Kontrak">
                                                Karyawan Swasta - Kontrak</option>
                                            <option value="PNS / ASN - Tetap">PNS / ASN -
                                                Tetap</option>
                                            <option value="PNS / ASN - Honorer < 5th">PNS /
                                                ASN - Honorer < 5th</option> <option value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                    Honorer > 5th</option>
                                            <option value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option value="Wiraswasta > 2th">
                                                    Wiraswasta > 2th
                                            </option>
                                            <option value="Profesi Beresiko">Profesi
                                                Beresiko [freetext]</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Tempat Kerja / Usaha pasangan</label>
                                        <input type="text" class="form-control text-size" name="" id="" placeholder="Tempat Kerja / Usaha pasangan" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Penjelasan Profesi Beresiko</label>
                                        <input type="text" class="form-control text-size" name="" id="" placeholder="Penjelasan Profesi Beresiko" />
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="kondisi">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Bidang Usaha</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Bidang Usaha
                                                </option>
                                                <option value="Transportasi">Transportasi
                                                </option>
                                                <option value="Industri / Manufacturing">Industri /
                                                    Manufacturing
                                                </option>
                                                <option value="Pertambangan">Pertambangan
                                                </option>
                                                <option value="Perhutanan">Perhutanan
                                                </option>
                                                <option value="peternakan & Perikanan">peternakan &
                                                    Perikanan
                                                </option>
                                                <option value="Konstruksi">Konstruksi
                                                </option>
                                                <option value="Jasa">Jasa
                                                </option>
                                                <option value="Pertanian & Perkebunan">Pertanian &
                                                    Perkebunan
                                                </option>
                                                <option value="Perdagangan Besar">Perdagangan Besar
                                                </option>
                                                <option value="Pergagangan Eceran">Pergagangan
                                                    Eceran
                                                </option>
                                                <option value="Perdagangan Ekspor-Impor">Perdagangan
                                                    Ekspor-Impor
                                                </option>
                                                <option value="Makanan / Minuman">Makanan / Minuman
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Jabatan</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Jabatan
                                                </option>
                                                <option value="Staff">Staff
                                                </option>
                                                <option value="Supervisor">Supervisor
                                                </option>
                                                <option value="Manager">Manager
                                                </option>
                                                <option value="Senior Manager">Senior Manager
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Lama Bekerja</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Lama Bekerja
                                                </option>
                                                <option value="0 Tahun - < 3 Tahun">0 Tahun - < 3 Tahun </option> <option value="> 3 Tahun - < 5 Tahun">> 3 Tahun - < 5 Tahun </option> <option value="> 5 Tahun">> 5 Tahun
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row ml-3 mr-3 mt-3">
                                    <div class="col-md-12">
                                        <p>Jumlah Tanggungan</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Orang
                                                                Tua</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" required placeholder="Orang Tua" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Pasangan</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" required placeholder="Pasangan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Anak Usia
                                                                Belum Sekolah</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" required placeholder="Anak Usia Belum Sekolah" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Anak Usia TK
                                                                - SMA</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" required placeholder="Anak Usia TK - SMA" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Anak Usia
                                                                Perguruan Tinggi</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" required placeholder="Anak Usia Perguruan Tinggi" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Saudara /
                                                                Keluarga Lainnya</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" required placeholder="Saudara / Keluarga Lainnya" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Total Jumlah
                                                                Tanggungan</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="" id="" required placeholder="Total Jumlah Tanggungan" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Pembayaran Gaji Via</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Metode
                                                </option>
                                                <option value="Tunai">Tunai</option>
                                                <option value="Tranfer">Transfer</option>
                                                <option value="Lainnya">Lainnya [transfer]</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Total Karyawan</label>
                                            <input type="number" class="form-control text-size number-only" name="" id="" placeholder="5000" required />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Tahun Berdiri</label>
                                            <input type="text" class="form-control text-size number-only placement" name="" id="" placeholder="2020" minlength="4" maxlength="4" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 kondisi-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="kondisiupFunction()" data-toggle="collapse" href="#kondisi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- kondisi konsumen jika karyawan -->

                <!-- kondisi konsumen jika wiraswasta -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Kondisi Konsumen (jika wiraswasta)
                                <a class="float-right kondisi-down" onclick="kondisidownFunction()" data-toggle="collapse" href="#kondisi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Pekerjaan konsumen</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih Pekerjaan
                                            </option>
                                            <option value="Karyawan Swasta - Tetap">
                                                Karyawan Swasta - Tetap</option>
                                            <option value="Karyawan Swasta - Kontrak">
                                                Karyawan Swasta - Kontrak</option>
                                            <option value="PNS / ASN - Tetap">PNS / ASN -
                                                Tetap</option>
                                            <option value="PNS / ASN - Honorer < 5th">PNS /
                                                ASN - Honorer < 5th</option> <option value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                    Honorer > 5th</option>
                                            <option value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option value="Wiraswasta > 2th">
                                                    Wiraswasta > 2th
                                            </option>
                                            <option value="Profesi Beresiko">Profesi
                                                Beresiko</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Penjelasan Profesi Beresiko</label>
                                        <input type="text" class="form-control text-size" name="" id="" placeholder="Penjelasan Profesi Beresiko" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Tempat Kerja / Usaha pasangan</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih Pekerjaan
                                            </option>
                                            <option value="Karyawan Swasta - Tetap">
                                                Karyawan Swasta - Tetap</option>
                                            <option value="Karyawan Swasta - Kontrak">
                                                Karyawan Swasta - Kontrak</option>
                                            <option value="PNS / ASN - Tetap">PNS / ASN -
                                                Tetap</option>
                                            <option value="PNS / ASN - Honorer < 5th">PNS /
                                                ASN - Honorer < 5th</option> <option value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                    Honorer > 5th</option>
                                            <option value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option value="Wiraswasta > 2th">
                                                    Wiraswasta > 2th
                                            </option>
                                            <option value="Profesi Beresiko">Profesi
                                                Beresiko</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Tempat Kerja / Usaha pasangan</label>
                                        <input type="text" class="form-control text-size" name="" id="" placeholder="Tempat Kerja / Usaha pasangan" />
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="kondisi">
                                <div class="form-row ml-3 mr-3 mt-3">
                                    <div class="col-md-12">
                                        <p>Jumlah Tanggungan</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Orang
                                                                Tua</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-rigt-220" name="orangtua_tanggungan" id="orangtua_tanggungan" required placeholder="Orang Tua" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Pasangan</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-rigt-220" name="pasangan_tanggungan" id="pasangan_tanggungan" required placeholder="Pasangan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Anak Usia
                                                                Belum Sekolah</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="anak_belum_sekolah" id="anak_belum_sekolah" required placeholder="Anak Usia
																					Belum Sekolah" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Anak Usia TK
                                                                - SMA</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="anak_sudah_sekolah" id="anak_sudah_sekolah" required placeholder="Anak Usia TK
																					- SMA" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Anak Usia
                                                                Perguruan Tinggi</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="anak_perguruan_tinggi" id="anak_perguruan_tinggi" required placeholder="Anak Usia
																					Perguruan Tinggi" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Saudara /
                                                                Keluarga Lainnya</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="saudara_lainnya" id="saudara_lainnya" required placeholder="Saudara / Keluarga Lainnya" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Total Jumlah
                                                                Tanggungan</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size number-only table-rigt-220" name="saudara_lainnya" id="saudara_lainnya" required placeholder="Total Jumlah Tanggungan" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Nama Usaha</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" placeholder="PT BFI Syariah indonesia" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Bidang Usaha</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Bidang Usaha
                                                </option>
                                                <option value="Transportasi">Transportasi
                                                </option>
                                                <option value="Industri / Manufacturing">Industri /
                                                    Manufacturing
                                                </option>
                                                <option value="Pertambangan">Pertambangan
                                                </option>
                                                <option value="Perhutanan">Perhutanan
                                                </option>
                                                <option value="peternakan & Perikanan">peternakan &
                                                    Perikanan
                                                </option>
                                                <option value="Konstruksi">Konstruksi
                                                </option>
                                                <option value="Jasa">Jasa
                                                </option>
                                                <option value="Pertanian & Perkebunan">Pertanian &
                                                    Perkebunan
                                                </option>
                                                <option value="Perdagangan Besar">Perdagangan Besar
                                                </option>
                                                <option value="Pergagangan Eceran">Pergagangan
                                                    Eceran
                                                </option>
                                                <option value="Perdagangan Ekspor-Impor">Perdagangan
                                                    Ekspor-Impor
                                                </option>
                                                <option value="Makanan / Minuman">Makanan / Minuman
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Tahun Berdiri</label>
                                            <input type="text" class="form-control text-size number-only placement" name="" id="" placeholder="2020" minlength="4" maxlength="4" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group ml-3 mr-3">
                                            <label>jumlah Karyawan</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Kategori Jenis
                                                    Bangunan
                                                </option>
                                                <option value=" 1 - 4"> 1 - 4
                                                </option>
                                                <option value="5 - 19">5 - 19
                                                </option>
                                                <option value="20 -99">20 -99
                                                </option>
                                                <option value="100 - 499">100 - 499
                                                </option>
                                                <option value="> 500">> 500
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Jenis Bangunan Usaha</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option value="">Pilih Kategori Jenis
                                                    Bangunan
                                                </option>
                                                <option value="Bangungan Permanen">
                                                    Bangungan Permanen
                                                </option>
                                                <option value="Bangunan Sementara">Bangunan
                                                    Sementara
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Pemilik tempat usaha</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Pemilik
                                                </option>
                                                <option value="Milik Sendiri - Lunas">Milik
                                                    Sendiri - Lunas
                                                </option>
                                                <option value="Milik Sendiri - Kredit">
                                                    Milik Sendiri - Kredit
                                                </option>
                                                <option value="Milik Keluarga - Lunas">
                                                    Milik Keluarga - Lunas
                                                </option>
                                                <option value="Milik Keluarga - Kredit">
                                                    Milik Keluarga - Kredit
                                                </option>
                                                <option value="Kontrak / Sewa">Kontrak /
                                                    Sewa
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Kepemilikan Usaha</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Pemilik
                                                </option>
                                                <option value="Milik Sendiri">Milik Sendiri
                                                </option>
                                                <option value="Kongsi / Kerjasama">Kongsi /
                                                    Kerjasama
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Bentuk Usaha</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Bentuk Usaha
                                                </option>
                                                <option value="PT">PT
                                                </option>
                                                <option value="CV">CV
                                                </option>
                                                <option value="UD">UD
                                                </option>
                                                <option value="Perorangan">Perorangan
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Metode Pembayaran</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Metode Pembayaran
                                                </option>
                                                <option value="Tunai">Tunai</option>
                                                <option value="Transfer">Transfer</option>
                                                <option value="Lainnya [Transfer]">Lainnya
                                                    [Transfer]</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Kondisi Usaha</label>
                                            <textarea class="form-control text-size" name="" id="" cols="30" rows="10" placeholder="Jel;askan Kondisi Usaha Saat ini" style="height:110px;"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 kondisi-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="kondisiupFunction()" data-toggle="collapse" href="#kondisi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- kondisi konsumen jika wiraswasta -->

                <!-- Kapasitas konsumen jika karyawan -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Kapasitas Konsumen (jika karyawan)
                                <a class="float-right kapasitas-down" onclick="kapasitasdownFunction()" data-toggle="collapse" href="#kapasitas" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>

                            <p class="ml-3 mt-5"> <b>Pendapatan</b> </p>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Pendapatan Berupa (Gaji)</label>
                                        <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Take Home Pay</label>
                                        <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Apakah Ada Bonus Periodik ?</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input renovasi" type="radio" name="" id="" value="Ya">
                                            <label class="form-check-label">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input renovasi" type="radio" name="" id="" value="Tidak">
                                            <label class="form-check-label">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row ml-3 mr-3 mt-3 ">
                                <div class="col-md-12">
                                    <p>Informasi Pendapatan Periodik</p>
                                    <div class="table-responsive">
                                        <table class="table table-">
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <label>Deskripsi</label>
                                                    </th>
                                                    <th>
                                                        <label>Periode
                                                            Bulan</label>
                                                    </th>
                                                    <th>
                                                        <label>Nominal</label>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control text-size table-form-400" name="" id="" required placeholder="Deskripsi 1" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size table-form-300" name="" id="" required placeholder="Periode 1" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 1" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control text-size table-form-400" name="" id="" required placeholder="Deskripsi 2" />
                                                    </td>
                                                    <td><input type="text" class="form-control text-size table-form-300" name="" id="" required placeholder="Periode 2" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control text-size table-form-400" name="" id="" required placeholder="Deskripsi 3" />
                                                    </td>
                                                    <td><input type="text" class="form-control text-size table-form-300" name="" id="" required placeholder="Periode 3" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 3" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>Total Pendapatan Periodik</label>
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Pendapatan Periodik" readonly />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="kapasitas">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Apakah ada Pendapatan lainnya ?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasi pendapatan</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Deskripsi</label>
                                                        </th>
                                                        <th>
                                                            <label class=" table-lable">Nominal</label>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Total Pendapatan</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Saldo Rekening Saat ini</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Pendapatan Pasangan</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Total Pendapatan</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                </div>

                                <p class="ml-3 mt-5"> <b>Pengeluaran</b> </p>

                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasikan pengeluaran</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                pendidikan</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																					pendidikan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Rumah
                                                                Tangga</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya Rumah
																					Tangga" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Internet / Pulsa / Listrik</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya Lain
                                                                - Lain</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya Lain - Lain" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total
                                                                Pengeluaran</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Pengeluaran" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Apakah ada Hutang
                                                ditempat lain ?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasikan hutang lainnya</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Deskripsi</label>
                                                        </th>
                                                        <th>
                                                            <label class=" table-lable">Nominal</label>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 3" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Total Hutang</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Hutang" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Total Pengeluaran</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Kelebihan Pendapatan</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 kapasitas-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="kapasitasupFunction()" data-toggle="collapse" href="#kapasitas" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- kapasitas konsumen jika karyawan -->

                <!-- Kapasitas konsumen jika Wiraswasta -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Kapasitas Konsumen (jika Wiraswasta)
                                <a class="float-right kapasitas-down" onclick="kapasitasdownFunction()" data-toggle="collapse" href="#kapasitas" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>

                            <p class="ml-3 mt-5"> <b>Pendapatan</b> </p>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Pilih sumber data yang akan diisi</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input renovasi" type="radio" name="" id="" value="Nota">
                                            <label class="form-check-label">
                                                Nota
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input renovasi" type="radio" name="" id="" value="Rekening Tabungan">
                                            <label class="form-check-label">
                                                Rekening Tabungan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row ml-3 mr-3 mt-3 ">
                                <div class="col-md-12">
                                    <p>Informasikan Kredit Rekening (jika kredit rekening)</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Mutasi Keredit
                                                            Bulan Pertama</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Bulan Pertama" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Mutasi Keredit
                                                            Bulan Kedua</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Bulan Kedua" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Mutasi Keredit
                                                            Bulan Ketiga</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Bulan Ketiga" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Average
                                                            Kredit</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Average Kredit" readonly />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <p>Informasikan Total Nilai Nota (jika Nota)</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Total Nota
                                                            Bulan Pertama</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Bulan Pertama" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Total Nota
                                                            Bulan Kedua</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Bulan Kedua" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Total Nota
                                                            Bulan Ketiga</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Bulan Ketiga" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Average
                                                            Kredit</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Average Kredit" readonly />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <div class="form-row ml-3 mr-3 mt-3 ">
                                <div class="col-md-12">
                                    <p>Biaya Operasional</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Biaya Sewa
                                                            (Jika sewa)</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																				Sewa" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Gaji Karyawan
                                                            Perbulan</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Gaji Karyawan
																				Perbulan" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Biaya
                                                            Internet / Pulsa / Listrik</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																				Internet / Pulsa / Listrik" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Biaya
                                                            lainnya</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya lainny" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Presentase
                                                            Profit Margin</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Presentase
																				Profit Margin" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Total Biaya
                                                            Operasional</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Biaya Operasional" readonly />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Total
                                                            Pendapatan Omset</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Pendapatan Omset" readonly />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="table-form-500">Total Nett
                                                            Profit</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Nett Profit" readonly />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="kapasitas">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Apakah ada Pendapatan lainnya ?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasi pendapatan Lainnya</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Deskripsi</label>
                                                        </th>
                                                        <th>
                                                            <label class=" table-lable">Nominal
                                                                (Nett)</label>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Total Pendapatan</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Saldo Rekening Saat ini</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Pendapatan Pasangan</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Total Pendapatan</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                </div>

                                <p class="ml-3 mt-5"> <b>Pengeluaran</b> </p>

                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasikan pengeluaran</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                pendidikan</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																					pendidikan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Rumah
                                                                Tangga</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya Rumah
																					Tangga" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Internet / Pulsa / Listrik</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya Lain
                                                                - Lain</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya Lain - Lain" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total
                                                                Pengeluaran</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Pengeluaran" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Apakah ada Hutang
                                                ditempat lain ?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasikan hutang lainnya</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Deskripsi</label>
                                                        </th>
                                                        <th>
                                                            <label class=" table-lable">Nominal</label>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 3" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Total hutang</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total hutang" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Total Pengeluaran</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Kelebihan Pendapatan</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Apakah ada analisa kapasitaskonsumen dari omset
                                                penjualan ?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasi omset</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Omset
                                                                Perhari</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Omset
																					Perhari" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Jumlah
                                                                Hari Buka Usaha</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" required placeholder="Jumlah
																					Hari Buka Usaha" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Omset per
                                                                bulan</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Omset per
																					bulan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total
                                                                Omset</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total
																					Omset" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <hr>Biaya Operasinal & Pengeluaran get data dari atas
                                <hr>

                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Biaya Operasional</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya Sewa
                                                                (Jika sewa)</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																					Sewa" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Gaji
                                                                Karyawan
                                                                Perbulan</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Gaji Karyawan
																					Perbulan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Internet / Pulsa / Listrik</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                lainnya</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya lainny" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Presentase
                                                                Profit Margin</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Presentase
																					Profit Margin" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total
                                                                Biaya
                                                                Operasional</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Biaya Operasional" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total
                                                                Pendapatan Omset</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Pendapatan Omset" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total Nett
                                                                Profit</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Nett Profit" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <p class="ml-3 mt-5"> <b>Pengeluaran</b> </p>

                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasikan pengeluaran</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                pendidikan</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																					pendidikan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Rumah
                                                                Tangga</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya Rumah
																					Tangga" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Internet / Pulsa / Listrik</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya Lain
                                                                - Lain</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Biaya Lain - Lain" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total
                                                                Pengeluaran</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Pengeluaran" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Apakah ada Hutang ditempat lain ?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="" id="" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasikan hutang lainnya</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Deskripsi</label>
                                                        </th>
                                                        <th>
                                                            <label class=" table-lable">Nominal</label>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-500" name="" id="" required placeholder="Deskripsi 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 3" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Total Hutang</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Total Hutang" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Total Pengeluaran</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Kelebihan Pendapatan</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 kapasitas-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="kapasitasupFunction()" data-toggle="collapse" href="#kapasitas" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- kapasitas konsumen jika Wiraswasta -->

                <!-- Aset Konsumen -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Aset Konsumen
                                <a class="float-right aset-down" onclick="asetdownFunction()" data-toggle="collapse" href="#aset" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Kepemilikan Tempat tinggal Saat ini</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih jenis Barang dan
                                                Jasa
                                            </option>
                                            <option value="Milik Sendiri - Lunas">Milik Sendiri -
                                                Lunas</option>
                                            <option value="Milik Sendiri - Kredit">Milik Sendiri -
                                                Kredit</option>
                                            <option value="Milik Keluarga - Lunas">Milik Keluarga -
                                                Lunas</option>
                                            <option value="Milik Keluarga - Kredit">Milik Keluarga -
                                                Kredit</option>
                                            <option value="Kontrak / Sewa">Kontrak / Sewa</option>
                                            <option value="Dinas">Dinas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Apakah ada hutang ditempat lain ?</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input renovasi" type="radio" name="" id="" value="Ya">
                                            <label class="form-check-label">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input renovasi" type="radio" name="" id="" value="Tidak">
                                            <label class="form-check-label">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Informasi Alamat BKR</label>
                                        <input type="text" class="form-control text-size" name="" id="" required placeholder="Informasi Alamat Lengkap" />
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="aset">

                                <div class="form-row ml-3 mr-3 mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasikan Lima Aset Berharga Yang Dimiliki</p>
                                        <div class="table-responsive">
                                            <table class="table table-">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label>Nama Barang</label>
                                                        </th>
                                                        <th>
                                                            <label>Nominal</label>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size text-size table-form-400" name="" id="" required placeholder="Nama Barang 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-400" name="" id="" required placeholder="Nama Barang 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-400" name="" id="" required placeholder="Nama Barang 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 3" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-400" name="" id="" required placeholder="Nama Barang 4" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 4" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size table-form-400" name="" id="" required placeholder="Nama Barang5" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  table-form-220" name="" id="" data-type="currency" required placeholder="Nominal 5" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Total Nilai Aset</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  table-form-220" name="" id="" data-type="currency" required placeholder="Total Nilai Aset" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 aset-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="asetupFunction()" data-toggle="collapse" href="#aset" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Aset Konsumen -->

                <!-- konfirmasi karakter -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Konfirmasi Karakter
                                <a class="float-right konfirmasi-down" onclick="konfirmasidownFunction()" data-toggle="collapse" href="#konfirmasi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <p>Informasikan nama</p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label>Nama</label>
                                                </th>
                                                <th>
                                                    <label>nomor Telepon</label>
                                                </th>
                                                <th>
                                                    <label>Hubungan</label>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control text-size table-form-400" name="" id="" placeholder="Nama 1" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-size number-only table-form-220" name="" id="" placeholder="Nomor Telepon 1" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-size table-form-300" name="" id="" placeholder="Hubungan 1" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control text-size table-form-400" name="" id="" placeholder="Nama 2" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-size number-only table-form-220" name="" id="" placeholder="Nomor Telepon 2" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-size table-form-300" name="" id="" placeholder="Hubungan 2" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control text-size table-form-220" name="" id="" placeholder="Nama 3" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-size number-only table-form-300" name="" id="" placeholder="Nomor Telepon 3" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control text-size table-form-300" name="" id="" placeholder="Hubungan 3" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="collapse" id="konfirmasi">
                                <div class="form-group ml-3 mr-3">
                                    <label>Informasikan Hasil kredit Checking</label>
                                    <textarea class="form-control text-size" name="" id="
															cols=" 30" rows="10" placeholder="Informasikan Hasil kredit Checking" style="height:110px;"></textarea>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>hasil kredit Checking media lainnya</label>
                                    <textarea class="form-control text-size" name="" id="
															cols=" 30" rows="10" placeholder="Haisl Keterangan Dari media Lain" style="height:110px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 konfirmasi-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="konfirmasiupFunction()" data-toggle="collapse" href="#konfirmasi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- konfirmasi karakter -->

                <!-- Jaminan Kendaraan -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Jaminan Kendaraan
                                <a class="float-right jaminan-down" onclick="jaminandownFunction()" data-toggle="collapse" href="#jaminan" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Merk Kendaraan</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih Merk Mobil
                                                Jasa
                                            </option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Daihatsua">Daihatsua</option>
                                            <option value="Honda">Honda</option>
                                            <option value="Suzuki">Suzuki</option>
                                            <option value="Mitsubishi">Mitsubishi</option>
                                            <option value="Nissan	">Nissan </option>
                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                            <option value="Mazda">Mazda</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Hyundai">Hyundai</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Volkswagen">Volkswagen</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Ford">Ford</option>
                                            <option value="Datsun">Datsun</option>
                                            <option value="Isuzu">Isuzu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Jenis Kendaraan</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih jenis Kendaraan
                                            </option>
                                            <option value="PU ">PU </option>
                                            <option value="Truck ">Truck </option>
                                            <option value="SJMB ">SJMB </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3">
                                        <label>model kendaraan</label>
                                        <input type="text" class="form-control text-size" name="" id="" required placeholder="Civic / lancer / Skyline" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>tahun Mobil</label>
                                        <input type="text" class="form-control text-size" name="" id="" required placeholder="Min 2005" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Astan nama BPKB</label>
                                        <select class="form-control text-size" name="" id="" required>
                                            <option selected value="">Pilih Pemilik BPKB
                                            </option>
                                            <option value="Orang Lain">Orang Lain</option>
                                            <option value="Konsumen-Pasangan">Konsumen-Pasangan
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="jaminan">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>lama Memiliki mobil</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Data
                                                </option>
                                                <option value="< 1 Tahun ">
                                                    < 1 Tahun </option> <option value="1 - 2 Tahun">
                                                        1 - 2 Tahun
                                                </option>
                                                <option value="2 - 3 Tahun">2 - 3 Tahun</option>
                                                <option value="> 4 Tahun">> 4 Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Penggunaan Mobil</label>
                                            <select class="form-control text-size" name="" id="" required>
                                                <option selected value="">Pilih Fungsi Mobil
                                                </option>
                                                <option value="Usaha / Operasional">Usaha /
                                                    Operasional</option>
                                                <option value="Pribadi">Pribadi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Harga BFI Finance</label>
                                            <input type="text" class="form-control text-size number-only" name="" id="" data-type="currency" required placeholder="Rp. 000 000 000" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 jaminan-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="jaminanupFunction()" data-toggle="collapse" href="#jaminan" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Jaminan Kendaraan -->

                <!-- Data Religi -->
                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Data Religi
                                <a class="float-right religi-down" onclick="religidownFunction()" data-toggle="collapse" href="#religi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-group ml-3 mr-3">
                                <label>Berapa Banyak Shalat Wajib yang dilaksanakan oleh
                                    konsumen setiap harinya ?</label>
                                <select class="form-control text-size" name="" id="" required>
                                    <option selected value="">Pilih Jawaban
                                    </option>
                                    <option value="1 - 2 Shalat Wajib">1 - 2 Shalat Wajib</option>
                                    <option value="3-4 Shalat Wajib">3-4 Shalat Wajib</option>
                                    <option value="5 Shalat Wajib">5 Shalat Wajib</option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Berapa banyak frekuensi puasa yang dilakukan oleh
                                    konsumen dalam 1 bulan ramadhan ?</label>
                                <select class="form-control text-size" name="" id="" required>
                                    <option selected value="">Pilih Jawaban
                                    </option>
                                    <option value="< 22 Hari">
                                        < 22 Hari</option> <option value="23 - 29 Hari (Asumsi Puasa 30 Hari)">23 - 29 Hari
                                            (Asumsi Puasa 30 Hari)
                                    </option>
                                    <option value="100% Puasa (Kecuali Ada Udzur Syari)">100% Puasa
                                        (Kecuali Ada Udzur Syari)</option>
                                </select>
                            </div>

                            <div class="collapse" id="religi">
                                <div class="form-group ml-3 mr-3">
                                    <label>Apakah pernah melakukan zakat mal (bukan zakat fitrah)
                                        ?</label>
                                    <select class="form-control text-size" name="" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <60 Juta, Dan Belum Pernah Berzakat">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <60 Juta, Dan Belum Pernah Berzakat</option> <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Tapi Belum Pernah Zakat">
                                                Jumlah Harta (Tabungan + Emas + Stok Barang Dagang)
                                                >60 Juta, Tapi Belum Pernah Zakat</option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Tapi Tidak Konsisten Berzakat">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60
                                            Juta, Tapi Tidak Konsisten Berzakat</option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Dan Selalu Berzakat">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60
                                            Juta, Dan Selalu Berzakat</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Apakah pernah menjalankan Ibadah Haji
                                        ?</label>
                                    <select class="form-control text-size" name="" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <100 Juta, Dan Belum Pernah Berhaji / Belum Pernah Mendaftar Haji">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <100 Juta, Dan Belum Pernah Berhaji / Belum Pernah Mendaftar Haji</option> <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100 Juta, Dan Belum Pernah Berhaji / Belum Pernah Mendaftar Haji">
                                                Jumlah Harta (Tabungan + Emas + Stok Barang Dagang)
                                                >100 Juta, Dan Belum Pernah Berhaji / Belum Pernah
                                                Mendaftar Haji</option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100 Juta, Sudah Pernah Berhaji / Sudah Pernah Mendaftar Haji">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100
                                            Juta, Sudah Pernah Berhaji / Sudah Pernah Mendaftar Haji
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Apakah pernah menjalankan Ibadah Umroh
                                        ?</label>
                                    <select class="form-control text-size" name="" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <60 Juta, Dan Belum Pernah Umroh">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <60 Juta, Dan Belum Pernah Umroh</option> <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Dan Belum Pernah Umroh">
                                                Jumlah Harta (Tabungan + Emas + Stok Barang Dagang)
                                                >60 Juta, Dan Belum Pernah Umroh</option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Sudah Pernah Umroh">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60
                                            Juta, Sudah Pernah Umroh</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Apakah pernah menjalankan kurban pada Idul Adha
                                        ?</label>
                                    <select class="form-control text-size" name="" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <20 Juta, Dan Belum Pernah Berkurban">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <20 Juta, Dan Belum Pernah Berkurban</option> <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Tapi Belum Pernah Berkurban">
                                                Jumlah Harta (Tabungan + Emas + Stok Barang Dagang)
                                                >20 Juta, Tapi Belum Pernah Berkurban</option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Tapi Tidak Konsisten Berkurban">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20
                                            Juta, Tapi Tidak Konsisten Berkurban</option>
                                        <option value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Sudah Pernah Berkurban">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20
                                            Juta, Sudah Pernah Berkurban</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Apakah pernah berhubungan dengan lembaga keuangan syariah
                                        terkait dengan pinajaman, tabungan, investasi dan sebagainya
                                        ?</label>
                                    <select class="form-control text-size" name="" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option value="Belum Pernah">Belum Pernah</option>
                                        <option value="Sudah Pernah">Sudah Pernah</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Apakah Konsumen memiliki pengetahuan yang cukup tentang
                                        ekonomi syariah dan riba
                                        ?</label>
                                    <select class="form-control text-size" name="" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option value="Tidak Mengetahui">Tidak Mengetahui</option>
                                        <option value="Cukup Mengetahui">Cukup Mengetahui</option>
                                        <option value="Sangat Mengetahui">Sangat Mengetahui</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Apakah konsumen tahu tentang dosa tidak membayar hutang
                                        di akhirat
                                        ?</label>
                                    <select class="form-control text-size" name="" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option value="Tidak Terlalu Memahami">Tidak Terlalu
                                            Memahami</option>
                                        <option value="Sangat Memahami">Sangat Memahami</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Alasan konsumen memilih lembaga keuangan syariah</label>
                                    <select class="form-control text-size" name="" id="" required>
                                        <option selected value="">Pilih Jawaban</option>
                                        <option value="Menghindari Riba">Menghindari Riba</option>
                                        <option value="Referensi Kerabat">Referensi Kerabat</option>
                                        <option value="jasa pembiayaan sesuai dengan kebutuhan">jasa
                                            pembiayaan sesuai dengan kebutuhan</option>
                                        <option value="Mendapatkan penawaran">Mendapatkan penawaran
                                        </option>
                                        <option value="Tidak ada pilihan lain">Tidak ada pilihan
                                            lain</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-12 religi-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="religiupFunction()" data-toggle="collapse" href="#religi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data Religi -->

                <div class="col-md-12">
                    <div class="card ml-3 mr-3">
                        <div class="card-body text-size">
                            <h4 class="ml-3 mb-4">Hasil Analisamen
                                <!-- <a class="float-right konfirmasi-down"
														onclick="konfirmasidownFunction()" data-toggle="collapse"
														href="#konfirmasi" role="button" aria-expanded="false"
														aria-controls="collapseExample">
														<i class="fas fa-chevron-circle-down"></i>
													</a> -->
                            </h4>

                            <div class="form-group ml-3 mr-3">
                                <label>Strength</label>
                                <textarea class="form-control text-size" name="" id="
														cols=" 30" rows="10" placeholder="" style="height:110px;"></textarea>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Weakness</label>
                                <textarea class="form-control text-size" name="" id="
														cols=" 30" rows="10" placeholder="" style="height:110px;"></textarea>
                            </div>

                            <div class="collapse" id="konfirmasi">

                            </div>
                            <!-- <div class="col-md-12 konfirmasi-up">
													<center>
														<h4 class="ml-3">
															<a onclick="konfirmasiupFunction()" data-toggle="collapse"
																href="#konfirmasi" role="button" aria-expanded="false"
																aria-controls="collapseExample">
																<i class="fas fa-chevron-circle-up"></i>
															</a>
														</h4>
													</center>
												</div> -->
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<div class="form-row">
    <div class="col-md-12">
        <div class="form-group float-right mr-3">
            <button class=" btn btn-light waves-effect waves-light text-size btn-cari" id="draft" name="draft" class="btn" type="submit">Simpan</button>
            <button class="btn btn-primary waves-effect waves-light submit text-size ml-1" type="submit" name="process">Score</button>
        </div>
    </div>
</div>

<!-- Modal partner -->
<div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Partner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Usaha</th>
                            <th>Kategori Produk</th>
                            <th>Telepon</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $partner->nama_usaha ?></td>
                            <td><?= $partner->kategori_produk ?></td>
                            <td><?= $partner->telepon ?></td>
                            <td>
                                <?php if ($partner->status == 'draft') { ?>
                                    <span class="badge badge-secondary">Draft</span>
                                <?php } ?>
                                <?php if ($partner->status == '') { ?>
                                    <span class="badge badge-secondary">Mapping</span>
                                <?php } ?>
                                <?php if ($partner->status == 'lengkap') { ?>
                                    <span class="badge badge-success">Lengkap</span>
                                <?php } ?>
                            </td>
                            <td>
                                <center><button class="btn btn-primary pilih-partner" data-partner="<?= $partner->id_mapping_partner ?>" data-vendor="<?= $partner->nama_usaha ?>">Pilih</button></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal partner -->

<!-- Modal agent -->
<div class="modal fade" id="modal-agent" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Agent</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $agent->nama_lengkap ?></td>
                            <td><?= $agent->telepon ?></td>
                            <td>
                                <center><button class="btn btn-primary pilih-agent" data-agent="<?= $agent->id_agent ?>" data-namaagent="<?= $agent->nama_lengkap ?>">Pilih</button></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal agent -->

<script>
    $('.personal-sudah, .detail-sudah, .product-sudah, .branch-sudah').hide();

    $(".konsumen").on("keypress keydown keyup", function() {
        var empty = [];
        $(".konsumen").each(function() {
            empty.push($(this).val());
        })
        console.log(empty)
        //
        if (!empty.includes('')) {
            $('.personal-belum').hide();
            $('.personal-sudah').show();
        } else {
            $('.personal-belum').show();
            $('.personal-sudah').hide();
        }
    });
</script>

<script>
    $('.travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor')
        .hide();
    source_leads();
    $('#soa').change(function() {
        source_leads();
        $('#id_partner').val("");
        $('#id_agent').val("");
        $('#nama_vendor').val("").removeAttr("required");
        $('#nama_event').val("");
        $('#data_partner').val("");
        $('#data_agent').val("");
        $('#nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak').val("");
    })

    function source_leads() {
        if ($('#soa').val() == 'Direct Selling') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Tour & travel') {
            $('.travel, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Travel')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Penyedia Jasa') {
            $('.jasa, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Penyedia Jasa')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Agent BA') {
            $('.vendor, .agent, .form, .agent-form, .btn-data, .form-agent').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_agent').attr('placeholder', 'Pilih Nama Agent')
            $('#btn-data-agent').attr('data-target', '#modal-agent')
            // $('#data_partner, #data_agent').attr('required', 'required');
            $('#nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr(
                'required', 'required');
            $('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'EGC') {
            $('.nik, .posisi, .cabang, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#nik_egc, #cabang_egc, #posisi_egc').attr('required', 'required');
            $('#data_agent, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'RO') {
            $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent').hide();
            $('#status_konsumen').val('RO Active');
        } else if ($('#soa').val() == 'CGC') {
            $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent').hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Digital Marketing') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Website BFI Syariah') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Walk In') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Event Promotion') {
            $('.event, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_event').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak').removeAttr(
                'required', 'required');
            $('.travel, .agent, .jasa, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Tele Marketing') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else {
            $('.jasa, .travel, .agent, .form, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#data_partner, #data_agent').removeAttr('required', 'required');
        }
    }

    $(".readonly").keydown(function(e) {
        e.preventDefault();
    });
</script>

<script>
    $('.kontrak, .pasangan').hide();

    $('#status_konsumen').change(function() {
        if ($('#status_konsumen').val() == "RO Active") {
            $('#soa').val('RO')
            $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', '');
        } else {}

    })

    $('#status_pernikahan').change(function() {
        if ($('#status_pernikahan').val() == "Sudah Menikah") {
            $('.pasangan').show();
            $('#nama_pasangan').attr('required', 'required');
        } else {
            $('.pasangan').hide();
            $('#nama_pasangan').removeAttr('required', ' ');
        }

    })
</script>

<!-- btn -->
<script>
    $('.konsumen-up, .pembiayaan-up, .kondisi-up, .kapasitas-up, .aset-up, .konfirmasi-up, .jaminan-up, .religi-up')
        .hide();

    function konsumendownFunction() {
        $('.konsumen-down').hide();
        $('.konsumen-up').show();
    }

    function konsumenupFunction() {
        $('.konsumen-up').hide();
        $('.konsumen-down').show();
    }

    function pembiayaandownFunction() {
        $('.pembiayaan-down').hide();
        $('.pembiayaan-up').show();
    }

    function pembiayaanupFunction() {
        $('.pembiayaan-up').hide();
        $('.pembiayaan-down').show();
    }

    function kondisidownFunction() {
        $('.kondisi-down').hide();
        $('.kondisi-up').show();
    }

    function kondisiupFunction() {
        $('.kondisi-up').hide();
        $('.kondisi-down').show();
    }

    function kapasitasdownFunction() {
        $('.kapasitas-down').hide();
        $('.kapasitas-up').show();
    }

    function kapasitasupFunction() {
        $('.kapasitas-up').hide();
        $('.kapasitas-down').show();
    }

    function asetdownFunction() {
        $('.aset-down').hide();
        $('.aset-up').show();
    }

    function asetupFunction() {
        $('.aset-up').hide();
        $('.aset-down').show();
    }

    function konfirmasidownFunction() {
        $('.konfirmasi-down').hide();
        $('.konfirmasi-up').show();
    }

    function konfirmasiupFunction() {
        $('.konfirmasi-up').hide();
        $('.konfirmasi-down').show();
    }

    function jaminandownFunction() {
        $('.jaminan-down').hide();
        $('.jaminan-up').show();
    }

    function jaminanupFunction() {
        $('.jaminan-up').hide();
        $('.jaminan-down').show();
    }

    function religidownFunction() {
        $('.religi-down').hide();
        $('.religi-up').show();
    }

    function religiupFunction() {
        $('.religi-up').hide();
        $('.religi-down').show();
    }
</script>
<!-- btn -->