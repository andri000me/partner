<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4><b>Form Survey Report</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Daftar Data Survey</a></li>
                <li class="breadcrumb-item active">Survey Report</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary font-size gradient card-margin-5 mb-5" role="alert">
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
    <div class="col-md-3 web">
        <div class="card-margin-left" id="leftcaption" style="width: 100%;">
            <div class="mt-1">
                <h5 class="ml-5"><b>Yang harus Diisi</b></h5>

                <div class="ml-5">
                    <h6 class="mt-4 mb-0 ">Personal Data</h6>
                    <p class="mt-1 personal-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                        Lengkap</p>
                    <p class="mt-1 personal-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                        Belum
                        Lengkap</p>

                    <h6 class="mt-3 mb-0 ">Data Analisa</h6>
                    <p class="mt-1 detail-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                        Lengkap</p>
                    <p class="mt-1 detail-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                        Belum
                        Lengkap</p>

                    <h6 class="mt-3 mb-0 ">Struktur Pembiayaan</h6>
                    <p class="mt-1 product-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                        Lengkap</p>
                    <p class="mt-1 product-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                        Belum
                        Lengkap</p>

                    <h6 class="mt-3 mb-0 ">Data Religi</h6>
                    <p class="mt-1 branch-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                        Lengkap</p>
                    <p class="mt-1 branch-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                        Belum
                        Lengkap</p>

                    <h6 class="mt-3 mb-0 ">Hasil Analisa</h6>
                    <p class="mt-1 branch-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                        Lengkap</p>
                    <p class="mt-1 branch-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                        Belum
                        Lengkap</p>

                    <h6 class="mt-2 mb-0 ">Lampiran Data</h6>
                    <p class="mt-1 branch-sudah" style="color: #7f8c8d;"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                        Lengkap</p>
                    <p class="mt-1 branch-belum" style="color: #7f8c8d;"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                        Belum
                        Lengkap</p>

                    <h5 class="mt-4"><b>Documents</b></h5>

                    <p class="mt-4"></p><i class="far fa-file-archive"></i>&nbsp;&nbsp;&nbsp;Kartu
                    Tanda Penduduk</p>
                    <p class="mt-1"><i class="far fa-file-archive"></i>&nbsp;&nbsp;&nbsp;Kartu
                        Keluarga</p>
                    <p class="mt-1"><i class="far fa-file-archive"></i>&nbsp;&nbsp;&nbsp;Bukti
                        Penghasilan</p>

                </div>
            </div>

        </div>

    </div>

    <div class="col-md-9">
        <form id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>">
            <!-- ID Leads -->
            <input type="hidden" id="id_leads" name="id_leads" value="<?= $leads->id_leads ?>">
            <!-- Level -->
            <input type="hidden" id="level" value="<?= $this->fungsi->user_login()->level ?>">
            <div class="row">
                <!-- Data Konsumen -->
                <div class="col-md-12">
                    <div class="card card-margin-survey">
                        <div class="card-body text-size">
                            <h4 class="form-margin"><b>Data Konsumen</b>
                                <a class="float-right konsumen-down" onclick="konsumendownFunction()" data-toggle="collapse" href="#konsumen" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-margin">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control text-size" value="<?= $leads->nama_konsumen ?>" name="nama_konsumen" id="nama_konsumen" readonly placeholder="Kamea Dahayu Aditya" />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Nomor Handphone</label>
                                                <input type="text" class="form-control text-size placement number-only" value="<?= $leads->telepon ?>" readonly name="telepon" id="telepon" placeholder="0896 5533 985" maxlength="15" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Nomor WA</label>
                                                <input type="text" class="form-control text-size placement number-only" value="" readonly name="" id="" placeholder="0896 5533 985" maxlength="15" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Nomor KTP</label>
                                                <input type="phone" class="form-control text-size placement number-only" value="<?= $leads->no_ktp ?>" readonly name="no_ktp" id="no_ktp" placeholder="0000 0000 0000 0000" minlength="16" maxlength="16" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Email</label>
                                                <input type="email" class="form-control text-size" name="email" value="<?= $leads->email ?>" readonly id="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Jenis Konsumen</label>
                                                <select class="form-control text-size" name="status_konsumen" readonly id="status_konsumen">
                                                    <option selected value="">Pilih Jenis Konsumen
                                                    </option>
                                                    <option <?= $leads->status_konsumen == 'New Customer' ? 'selected' : '' ?> value="New Customer">New Customer
                                                    </option>
                                                    <option <?= $leads->status_konsumen == 'RO Expire' ? 'selected' : '' ?> value="RO Expire">RO Expire</option>
                                                    <option <?= $leads->status_konsumen == 'RO Active' ? 'selected' : '' ?> value="RO Active">RO Active</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Asal Aplikasi</label>
                                                <select class="form-control text-size" name="soa" id="soa" readonly>
                                                    <option selected value="">Pilih Asal Aplikasi>
                                                    </option>
                                                    <option <?= $leads->soa == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling
                                                    </option>
                                                    <option <?= $leads->soa == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel
                                                    </option>
                                                    <option <?= $leads->soa == 'Penyedia Jasa' ? 'selected' : '' ?> value="Penyedia Jasa">Penyedia Jasa
                                                    </option>
                                                    <option <?= $leads->soa == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
                                                    <option <?= $leads->soa == 'EGC' ? 'selected' : '' ?> value="EGC">EGC
                                                    </option>
                                                    <option <?= $leads->soa == 'CGC' ? 'selected' : '' ?> value="CGC">CGC
                                                    </option>
                                                    <option <?= $leads->soa == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital
                                                        Marketing
                                                    </option>
                                                    <option <?= $leads->soa == 'Website BFI Syariah' ? 'selected' : '' ?> value="Website BFI Syariah">Website BFI
                                                        Syariah</option>
                                                    <option <?= $leads->soa == 'RO' ? 'selected' : '' ?> value="RO">RO
                                                    </option>
                                                    <option <?= $leads->soa == 'Walk In' ? 'selected' : '' ?> value="Walk In">Walk In</option>
                                                    <option <?= $leads->soa == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion
                                                    </option>
                                                    <option <?= $leads->soa == 'Tele Marketing' ? 'selected' : '' ?> value="Tele Marketing">Tele Marketing
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
                                                <div class="form-group form-left">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" class="form-control text-size" name="tanggal_lahir" id="tanggal_lahir" value="<?= $leads->tanggal_lahir ?>" readonly placeholder="Tanggal lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-right">
                                                    <label>Pendidikan</label>
                                                    <select class="form-control text-size" name="pendidikan" id="pendidikan" readonly>
                                                        <option selected value="">Pilih Pendidikan
                                                        </option>
                                                        <option <?= $leads->pendidikan == 'SD' ? 'selected' : '' ?> value="SD">SD</option>
                                                        <option <?= $leads->pendidikan == 'SLTP' ? 'selected' : '' ?> value="SLTP">SLTP</option>
                                                        <option <?= $leads->pendidikan == 'SMU' ? 'selected' : '' ?> value="SMU">SMU</option>
                                                        <option <?= $leads->pendidikan == 'SLTA' ? 'selected' : '' ?> value="SLTA">SLTA</option>
                                                        <option <?= $leads->pendidikan == 'STM' ? 'selected' : '' ?> value="STM">STM</option>
                                                        <option <?= $leads->pendidikan == 'SMEA' ? 'selected' : '' ?> value="SMEA">SMEA</option>
                                                        <option <?= $leads->pendidikan == 'D1' ? 'selected' : '' ?> value="D1">D1</option>
                                                        <option <?= $leads->pendidikan == 'D2' ? 'selected' : '' ?> value="D2">D2</option>
                                                        <option <?= $leads->pendidikan == 'D3' ? 'selected' : '' ?> value="D3">D3</option>
                                                        <option <?= $leads->pendidikan == 'S1' ? 'selected' : '' ?> value="S1">S1</option>
                                                        <option <?= $leads->pendidikan == 'S2' ? 'selected' : '' ?> value="S2">S2</option>
                                                        <option <?= $leads->pendidikan == 'S3' ? 'selected' : '' ?> value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group text-size form-left">
                                                    <label>Pekerjaan Konsumen</label><br>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="pekerjaan_konsumen" disabled <?= $leads->pekerjaan_konsumen == 'Karyawan' ? 'checked' : '' ?> id="pekerjaan_konsumen" value="Karyawan">
                                                        <label class="form-check-label">
                                                            Karyawan
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="pekerjaan_konsumen" disabled <?= $leads->pekerjaan_konsumen == 'Wiraswasta' ? 'checked' : '' ?> id="pekerjaan_konsumen" value="Wiraswasta">
                                                        <label class="form-check-label">
                                                            Wiraswasta
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-right">
                                                    <label>Status Pernikahan</label>
                                                    <select class="form-control text-size" name="status_pernikahan" readonly id="status_pernikahan">
                                                        <option selected value="">Pilih Status
                                                            Pernikahan</option>
                                                        <option <?= $leads->status_pernikahan == 'Sudah Menikah' ? 'selected' : '' ?> value="Sudah Menikah">Sudah Menikah
                                                        </option>
                                                        <option <?= $leads->status_pernikahan == 'Belum Menikah' ? 'selected' : '' ?> value="Belum Menikah">Belum Menikah
                                                        </option>
                                                        <option <?= $leads->status_pernikahan == 'Janda/Duda - Meninggal' ? 'selected' : '' ?> value="Janda/Duda - Meninggal">
                                                            Janda/Duda - Meninggal</option>
                                                        <option <?= $leads->status_pernikahan == 'Janda/Duda - Cerai' ? 'selected' : '' ?> value="Janda/Duda - Cerai">Janda/Duda - Cerai</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row pasangan">
                                            <div class="col-md-12">
                                                <div class="form-group form-margin">
                                                    <label>Nama Pasangan</label>
                                                    <input type="text" class="form-control text-size" name="nama_pasangan" id="nama_pasangan" value="<?= $leads->nama_konsumen ?>" readonly placeholder="Nama Pasangan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group form-margin">
                                                    <label>Lokasi Rumah</label>
                                                    <select class="form-control text-size" name="lokasi_rumah" id="lokasi_rumah" readonly>
                                                        <option selected value="">Pilih Kategori
                                                            Lokasi Rumah</option>
                                                        <option <?= $leads->lokasi_rumah == 'Non Perumahan - Tidak bisa Lewat Mobil' ? 'selected' : '' ?> value="Non Perumahan - Tidak bisa Lewat Mobil">
                                                            Non Perumahan - Tidak bisa Lewat Mobil
                                                        </option>
                                                        <option <?= $leads->lokasi_rumah == 'Non Perumahan - Jalan Satu Mobil' ? 'selected' : '' ?> value="Non Perumahan - Jalan Satu Mobil">
                                                            Non Perumahan - Jalan Satu Mobil
                                                        </option>
                                                        <option <?= $leads->lokasi_rumah == 'Non Perumahan - Jalan Dua Mobi' ? 'selected' : '' ?> value="Non Perumahan - Jalan Dua Mobil">
                                                            Non Perumahan - Jalan Dua Mobil</option>
                                                        <option <?= $leads->lokasi_rumah == 'Perumahan - Tidak Bisa Lewat Mobil' ? 'selected' : '' ?> value="Perumahan - Tidak Bisa Lewat Mobil">
                                                            Perumahan - Tidak Bisa Lewat Mobil
                                                        </option>
                                                        <option <?= $leads->lokasi_rumah == 'Perumahan - Jalan Satu Mobil' ? 'selected' : '' ?> value="Perumahan - Jalan Satu Mobil">
                                                            Perumahan - Jalan Satu Mobil</option>
                                                        <option <?= $leads->lokasi_rumah == 'Perumahan - Jalan Dua Mobil' ? 'selected' : '' ?> value="Perumahan - Jalan Dua Mobil">
                                                            Perumahan - Jalan Dua Mobil</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group form-left">
                                                    <label>Jenis Bangunan Rumah</label>
                                                    <select class=" form-control text-size" name="jenis_rumah" id="jenis_rumah" readonly>
                                                        <option selected value="">Pilih Kategori
                                                            Jenis Bangunan Rumah</option>
                                                        <option <?= $leads->jenis_rumah == 'Permanent' ? 'selected' : '' ?> value="Permanent">Permanent</option>
                                                        <option <?= $leads->jenis_rumah == 'Semi Permanent' ? 'selected' : '' ?> value="Semi Permanent">Semi
                                                            Permanent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-right">
                                                    <label>Luas Bangunan Rumah</label>
                                                    <select class=" form-control text-size" name="luas_rumah" id="luas_rumah" readonly>
                                                        <option selected value="">Pilih Kategori
                                                            Luas Bangunan Rumah</option>
                                                        <option <?= $leads->luas_rumah == '< 60 M2' ? 'selected' : '' ?> value="< 60 M2">
                                                            < 60 M2</option> <option <?= $leads->luas_rumah == '60 - 100 M' ? 'selected' : '' ?> value="60 - 100 M2">60 - 100 M2
                                                        </option>
                                                        <option <?= $leads->luas_rumah == '100 - 150 M2' ? 'selected' : '' ?> value="100 - 150 M2">100 - 150 M2
                                                        </option>
                                                        <option <?= $leads->luas_rumah == '> 150 M2' ? 'selected' : '' ?> value="> 150 M2">> 150 M2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="col-md-12 event">
                                                <div class="form-group form-margin">
                                                    <label>Nama Event</label>
                                                    <input type="text" class="form-control text-size" name="nama_event" id="nama_event" value="<?= $leads->nama_event ?>" placeholder="Input Nama Event">
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-agent">
                                                <div class="form-margin">
                                                    <label class="gent">Pilih Data Agent</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control text-size" name="nama_agent" id="nama_agent" value="<?= $leads->nama_agent ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary btn-data btn-cari text-size" type="button" id="btn-data-agent" data-toggle="modal" disabled data-target=""><b>Cari</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form">
                                                <div class="form-margin">
                                                    <label class="travel">Pilih Data Travel</label>
                                                    <label class="jasa">Pilih Data Penyedia
                                                        Jasa</label>
                                                    <label class="vendor">Pilih Data Partner</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control text-size" name="nama_partner" id="nama_partner" value="<?= $leads->nama_partner ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary btn-data btn-cari text-size" type="button" id="btn-data" data-toggle="modal" disabled data-target=""><b>Cari</b></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 nik">
                                                <div class="form-group form-left">
                                                    <label>NIK</label>
                                                    <input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= $leads->nik_egc ?>" readonly placeholder="072104" minlength="6" maxlength="7" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 posisi">
                                                <div class="form-group form-right">
                                                    <label>Posisi</label>
                                                    <input type="text" class="form-control text-size" name="posisi_egc" readonly id="posisi_egc" value="<?= $leads->posisi_egc ?>" placeholder="Input Posisi">
                                                </div>
                                            </div>
                                            <div class="col-md-12 cabang">
                                                <div class="form-group form-margin">
                                                    <label>Cabang</label>
                                                    <input type="text" class="form-control text-size" name="cabang_egc" readonly id="cabang_egc" value="<?= $leads->cabang_egc ?>" placeholder="Input Cabang">
                                                </div>
                                            </div>
                                            <div class="col-md-6 kontrak-ro">
                                                <div class="form-group form-left">
                                                    <label>Nomor Kontrak</label>
                                                    <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= $leads->nomor_kontrak ?>" placeholder="087883774" readonly minlength="10" maxlength="10" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 konsumen-ro">
                                                <div class="form-group form-right">
                                                    <label>Nama Konsumen</label>
                                                    <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= $leads->referral_konsumen ?>" readonly placeholder="Input Nama konsumen">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group form-margin">
                                                    <label>Activity Marketing</label>
                                                    <select class="form-control text-size" name="activity" readonly id="activity">
                                                        <option selected disabled value="">Pilih
                                                            Kategori Activity Marketing</option>
                                                        <option <?= $leads->activity_marketing == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct
                                                            Selling</option>
                                                        <option <?= $leads->activity_marketing == 'Tele call' ? 'selected' : '' ?> value="Tele call">Tele call</option>
                                                        <option <?= $leads->activity_marketing == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital
                                                            Marketing</option>
                                                        <option <?= $leads->activity_marketing == 'Sosial Media' ? 'selected' : '' ?> value="Sosial Media">Sosial Media
                                                        </option>
                                                        <option <?= $leads->activity_marketing == 'Website' ? 'selected' : '' ?> value="Website">Website</option>
                                                        <option <?= $leads->activity_marketing == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event
                                                            Promotion</option>
                                                        <option <?= $leads->activity_marketing == 'Walk In Branch' ? 'selected' : '' ?> value="Walk In Branch">Walk In
                                                            Branch</option>
                                                        <option <?= $leads->activity_marketing == 'Surat Penawaran' ? 'selected' : '' ?> value="Surat Penawaran">Surat
                                                            Penawaran</option>
                                                        <option <?= $leads->activity_marketing == 'Blast WA / SMS' ? 'selected' : '' ?> value="Blast WA / SMS">Blast WA /
                                                            SMS</option>
                                                        <option <?= $leads->activity_marketing == 'Email Marketing' ? 'selected' : '' ?> value="Email Marketing">Email
                                                            Marketing</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group text-size form-left">
                                                    <label>Konsumen Cross Branch?</label><br>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= $leads->cross_branch == 'Ya' ? 'checked' : '' ?> disabled value="Ya">
                                                        <label class="form-check-label">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= $leads->cross_branch == 'Tidak' ? 'checked' : '' ?> disabled value="Tidak">
                                                        <label class="form-check-label">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="hide" class="form-group form-right">
                                                    <label>Pilih Cabang Tujuan</label>
                                                    <select class="form-control text-size" name="cabang_cross" readonly id="cabang_cross">
                                                        <option selected disabled value="">Pilih Cabang
                                                        </option>
                                                        <?php foreach ($branches->result() as $branch) { ?>
                                                            <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                            <option <?= $leads->cabang_cross == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>">
                                                                <?= $branch->nama_cabang ?></option>
                                                        <?php } ?>
                                                    </select>
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

                <!-- Tujuan Pembixayaan -->
                <div class="col-md-12">
                    <div class="card card-margin-survey">
                        <div class="card-body text-size">
                            <h4 class="form-margin"><b>Tujuan Pembiayaan</b>
                                <a class="float-right pembiayaan-down" onclick="pembiayaandownFunction()" data-toggle="collapse" href="#pembiayaan" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>

                            <p class="form-left"> <b>Informasi Pembiayaan</b> </p>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-margin">
                                        <label>Jenis Barang / Jasa</label>
                                        <select class="form-control text-size" name="purpose_jenis_barang" id="" required>
                                            <option selected value="">Pilih jenis Barang dan
                                                Jasa
                                            </option>
                                            <option <?= $data->purpose_jenis_barang == 'Pernikahan' ? 'selected' : '' ?> value="Pernikahan">Pernikahan</option>
                                            <option <?= $data->purpose_jenis_barang == 'Barang Elektronik' ? 'selected' : '' ?> value="Barang Elektronik">Barang
                                                Elektronik</option>
                                            <option <?= $data->purpose_jenis_barang == 'Sparepart Otomotif' ? 'selected' : '' ?> value="Sparepart Otomotif">Sparepart
                                                Otomotif</option>
                                            <option <?= $data->purpose_jenis_barang == 'Pertukangan' ? 'selected' : '' ?> value="Pertukangan">Pertukangan
                                            </option>
                                            <option <?= $data->purpose_jenis_barang == 'Home & Living' ? 'selected' : '' ?> value="Home & Living">Home & Living
                                            </option>
                                            <option <?= $data->purpose_jenis_barang == 'Olahraga & Aktivitas' ? 'selected' : '' ?> value="Olahraga & Aktivitas">Olahraga &
                                                Aktivitas</option>
                                            <option <?= $data->purpose_jenis_barang == 'Alat Kesehatan' ? 'selected' : '' ?> value="Alat Kesehatan">Alat Kesehatan
                                            </option>
                                            <option <?= $data->purpose_jenis_barang == 'Strok Barang Dagang' ? 'selected' : '' ?> value="Strok Barang Dagang">Strok
                                                Barang Dagang</option>
                                            <option <?= $data->purpose_jenis_barang == 'Umroh' ? 'selected' : '' ?> value="Umroh">Umroh</option>
                                            <option <?= $data->purpose_jenis_barang == 'Pendidikan' ? 'selected' : '' ?> value="Pendidikan">Pendidikan</option>
                                            <option <?= $data->purpose_jenis_barang == 'Wisata Halal' ? 'selected' : '' ?> value="Wisata Halal">Wisata Halal
                                            </option>
                                            <option <?= $data->purpose_jenis_barang == 'Mobil' ? 'selected' : '' ?> value="Mobil">Mobil</option>
                                            <option <?= $data->purpose_jenis_barang == 'Motor' ? 'selected' : '' ?> value="Motor">Motor</option>
                                            <option <?= $data->purpose_jenis_barang == 'Pertanian / Perkebunan' ? 'selected' : '' ?> value="Pertanian / Perkebunan">
                                                Pertanian / Perkebunan</option>
                                            <option <?= $data->purpose_jenis_barang == 'Mesin' ? 'selected' : '' ?> value="Mesin">Mesin</option>
                                            <option <?= $data->purpose_jenis_barang == 'Hewan Ternak' ? 'selected' : '' ?> value="Hewan Ternak">Hewan Ternak
                                            </option>
                                            <option <?= $data->purpose_jenis_barang == 'Bahan Bangunan' ? 'selected' : '' ?> value="Bahan Bangunan">Bahan Bangunan
                                            </option>
                                            <option <?= $data->purpose_jenis_barang == 'Jasa Tukang' ? 'selected' : '' ?> value="Jasa Tukang">Jasa Tukang
                                            </option>
                                            <option <?= $data->purpose_jenis_barang == 'Renovasi' ? 'selected' : '' ?> value="Renovasi">Renovasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-left">
                                        <label>Tujuan Penggunaaan</label>
                                        <select class="form-control text-size" name="purpose_tujuan_penggunaan" id="" required>
                                            <option selected value="">Pilih Tujuan
                                                Penggunaan
                                            </option>
                                            <option <?= $data->purpose_tujuan_penggunaan == 'Produktif' ? 'selected' : '' ?> value="Produktif">Produktif</option>
                                            <option <?= $data->purpose_tujuan_penggunaan == 'Konsumtif' ? 'selected' : '' ?> value="Konsumtif">Konsumtif</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-right">
                                        <label>Kategori Produk</label>
                                        <select class="form-control text-size" name="purpose_kategori_produk" id="" required>
                                            <option selected value="">Pilih Produk
                                            </option>
                                            <option <?= $data->purpose_kategori_produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                            <option <?= $data->purpose_kategori_produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                            <option <?= $data->purpose_kategori_produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                            <option <?= $data->purpose_kategori_produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                            <option <?= $data->purpose_kategori_produk == 'My Cars' ? 'selected' : '' ?> value="My Cars">My Cars</option>
                                            <option <?= $data->purpose_kategori_produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group form-margin">
                                        <label>Detail Barang / Jasa</label>
                                        <input type="text" class="form-control text-size" name="purpose_detail_barang_jasa" id="" value="<?= $data->purpose_detail_barang_jasa ?>" required placeholder="Paket umroh quad" />
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="pembiayaan">
                                <p class="form-left mt-3 mb-4"> <b>Informasi Pembiayaan</b> </p>

                                <div class="form-row form-margin">
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
                                                            <input type="text" class="form-control text-size form-border number-only" name="purpose_harga_beli_ke_merchant" value="<?= $data->purpose_harga_beli_ke_merchant ?>" id="" data-type="currency" required placeholder="Harga Beli ke Merchant" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Harga
                                                                Jual ke Konsumen</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border number-only" name="purpose_harga_jual_ke_konsumen" value="<?= $data->purpose_harga_jual_ke_konsumen ?>" id="" data-type="currency" required placeholder="Harga Jual ke Konsumen" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Uang
                                                                Muka</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_uang_muka" value="<?= $data->purpose_uang_muka ?>" id="" data-type="currency" required placeholder="Uang Muka" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Biaya
                                                                Administrasi</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_biaya_administrasi" value="<?= $data->purpose_biaya_administrasi ?>" id="" data-type="currency" required placeholder="Biaya Administrasi" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Asuransi
                                                                Jiwa</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_asuransi_jiwa" value="<?= $data->purpose_asuransi_jiwa ?>" id="" data-type="currency" required placeholder="Asuransi Jiwa" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Asuransi
                                                                kendaraan</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_asuransi_kendaraan" value="<?= $data->purpose_asuransi_kendaraan ?>" id="" data-type="currency" required placeholder="Asuransi Kendaraan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Total
                                                                Uang Muka</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_total_uang_muka" value="<?= $data->purpose_total_uang_muka ?>" id="" data-type="currency" required placeholder="Total Uang Muka" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">NTF Murni</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="" id="" data-type="currency" required placeholder="Harga Beli - Uang Muka" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Lama
                                                                Angsuran</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_lama_angsuran" value="<?= $data->purpose_lama_angsuran ?>" id="" data-type="currency" required placeholder="Lama Angsuran" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Angsuran Per Bulan</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border number-only" name="purpose_angsuran_per_bulan" value="<?= $data->purpose_angsuran_per_bulan ?>" id="" data-type="currency" required placeholder="Angsuran Per Bulan" />
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <th><label class="table-lable">Total Jumlah
                                                                Tanggungan</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border number-only" name="purpose_total_jumlah_tanggungan" value="<?= $data->purpose_total_jumlah_tanggungan ?>" id="" data-type="currency" required placeholder="Total Jumlah Tanggungan" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <p class="mt-5">Informasikan Pendapatan Periodik</p>

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
                                                            <input type="text" class="form-control text-size form-border table-form-400" name="purpose_nama_merchant_1" value="<?= $data->purpose_nama_merchant_1 ?>" id="" placeholder="Nama Merchant / Toko 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-220" name="purpose_harga_1" value="<?= $data->purpose_harga_1 ?>" id="" placeholder="Harga 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-300" name="purpose_alamat_telepon_1" value="<?= $data->purpose_alamat_telepon_1 ?>" id="" placeholder="Alamat / Telepon 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-400" name="purpose_nama_merchant_2" value="<?= $data->purpose_nama_merchant_2 ?>" id="" placeholder="Nama Merchant / Toko 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-220" name="purpose_harga_2" value="<?= $data->purpose_harga_2 ?>" id="" placeholder="Harga 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-300" name="purpose_alamat_telepon_2" value="<?= $data->purpose_alamat_telepon_2 ?>" id="" placeholder="Alamat / Telepon 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-400" name="purpose_nama_merchant_3" value="<?= $data->purpose_nama_merchant_3 ?>" id="" placeholder="Nama Merchant / Toko 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-220" name="purpose_harga_3" value="<?= $data->purpose_harga_3 ?>" id="" placeholder="Harga 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-300" name="purpose_alamat_telepon_3" value="<?= $data->purpose_alamat_telepon_3 ?>" id="" placeholder="Alamat / Telepon 3" />
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

                <?php if ($leads->pekerjaan_konsumen == 'Karyawan') { ?>
                    <!-- kondisi konsumen jika karyawan -->
                    <div class="col-md-12">
                        <div class="card card-margin-survey">
                            <div class="card-body text-size">
                                <h4 class="form-margin"><b>Kondisi Konsumen</b>
                                    <a class="float-right kondisi-down" onclick="kondisidownFunction()" data-toggle="collapse" href="#kondisi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="fas fa-chevron-circle-down"></i>
                                    </a>
                                </h4>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Pekerjaan konsumen</label>
                                            <select class="form-control text-size" name="condition_karyawan_pekerjaan" id="karyawan_pekerjaan" required>
                                                <option selected value="">Pilih Pekerjaan
                                                </option>
                                                <option <?= $data->condition_karyawan_pekerjaan == 'Karyawan Swasta - Tetap' ? 'selected' : '' ?> value="Karyawan Swasta - Tetap">
                                                    Karyawan Swasta - Tetap</option>
                                                <option <?= $data->condition_karyawan_pekerjaan == 'Karyawan Swasta - Kontrak' ? 'selected' : '' ?> value="Karyawan Swasta - Kontrak">
                                                    Karyawan Swasta - Kontrak</option>
                                                <option <?= $data->condition_karyawan_pekerjaan == 'PNS / ASN - Tetap' ? 'selected' : '' ?> value="PNS / ASN - Tetap">PNS / ASN -
                                                    Tetap</option>
                                                <option <?= $data->condition_karyawan_pekerjaan == 'PNS / ASN - Honorer < 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer < 5th">PNS /
                                                    ASN - Honorer < 5th</option> <option <?= $data->condition_karyawan_pekerjaan == 'PNS / ASN - Honorer > 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                        Honorer > 5th</option>
                                                <option <?= $data->condition_karyawan_pekerjaan == 'Wiraswasta < 2th' ? 'selected' : '' ?> value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option <?= $data->condition_karyawan_pekerjaan == 'Wiraswasta > 2th' ? 'selected' : '' ?> value="Wiraswasta > 2th">
                                                        Wiraswasta > 2th
                                                </option>
                                                <option <?= $data->condition_karyawan_pekerjaan == '' ? 'selected' : '' ?> value="Profesi Beresiko">Profesi
                                                    Beresiko</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Nama Perusahaan Bekerja</label>
                                            <input type="text" class="form-control text-size" name="condition_karyawan_tempat_kerja" value="<?= $data->condition_karyawan_tempat_kerja ?>" id="karyawan_tempat_kerja" placeholder="PT BFI Finance Indonesia" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group form-margin">
                                            <label>Penjelasan Profesi Beresiko</label>
                                            <input type="text" class="form-control text-size" name="condition_karyawan_profesi_beresiko" value="<?= $data->condition_karyawan_profesi_beresiko ?>" id="" placeholder="Penjelasan Profesi Beresiko" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Pekerjaan Pasangan</label>
                                            <select class="form-control text-size" name="condition_karyawan_pekerjaan_pasangan" id="" required>
                                                <option selected value="">Pilih Pekerjaan
                                                </option>
                                                <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Tidak Bekerja' ? 'selected' : '' ?> value="Tidak Bekerja">Tidak Bekerja
                                                </option>
                                                <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Karyawan Swasta - Tetap' ? 'selected' : '' ?> value="Karyawan Swasta - Tetap">
                                                    Karyawan Swasta - Tetap</option>
                                                <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Karyawan Swasta - Kontrak' ? 'selected' : '' ?> value="Karyawan Swasta - Kontrak">
                                                    Karyawan Swasta - Kontrak</option>
                                                <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'PNS / ASN - Tetap' ? 'selected' : '' ?> value="PNS / ASN - Tetap">PNS / ASN -
                                                    Tetap</option>
                                                <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'PNS / ASN - Honorer < 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer < 5th">PNS /
                                                    ASN - Honorer < 5th</option> <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'PNS / ASN - Honorer > 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                        Honorer > 5th</option>
                                                <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Wiraswasta < 2th' ? 'selected' : '' ?> value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Wiraswasta > 2th' ? 'selected' : '' ?> value="Wiraswasta > 2th">
                                                        Wiraswasta > 2th
                                                </option>
                                                <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Profesi Beresiko' ? 'selected' : '' ?> value="Profesi Beresiko">Profesi
                                                    Beresiko [freetext]</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Tempat Kerja / Usaha pasangan</label>
                                            <input type="text" class="form-control text-size" name="condition_karyawan_tempat_kerja_pasangan" value="<?= $data->condition_karyawan_tempat_kerja_pasangan ?>" id="" placeholder="Tempat Kerja / Usaha pasangan" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group form-margin">
                                            <label>Penjelasan Profesi Beresiko</label>
                                            <input type="text" class="form-control text-size" name="condition_karyawan_profesi_beresiko_pasangan" value="<?= $data->condition_karyawan_profesi_beresiko_pasangan ?>" id="" placeholder="Penjelasan Profesi Beresiko" />
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="kondisi">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Bidang Usaha</label>
                                                <select class="form-control text-size" name="condition_karyawan_bidang_usaha" id="" required>
                                                    <option selected value="">Pilih Bidang Usaha
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Transportasi' ? 'selected' : '' ?> value="Transportasi">Transportasi
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Industri / Manufacturing' ? 'selected' : '' ?> value="Industri / Manufacturing">Industri /
                                                        Manufacturing
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Pertambangan' ? 'selected' : '' ?> value="Pertambangan">Pertambangan
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Perhutanan' ? 'selected' : '' ?> value="Perhutanan">Perhutanan
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Peternakan & Perikana' ? 'selected' : '' ?> value="Peternakan & Perikanan">Peternakan &
                                                        Perikanan
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Konstruksi' ? 'selected' : '' ?> value="Konstruksi">Konstruksi
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Jasa' ? 'selected' : '' ?> value="Jasa">Jasa
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Pertanian & Perkebunan' ? 'selected' : '' ?> value="Pertanian & Perkebunan">Pertanian &
                                                        Perkebunan
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Perdagangan Besar' ? 'selected' : '' ?> value="Perdagangan Besar">Perdagangan Besar
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Perdagangan Eceran' ? 'selected' : '' ?> value="Perdagangan Eceran">Perdagangan
                                                        Eceran
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Perdagangan Ekspor-Impor' ? 'selected' : '' ?> value="Perdagangan Ekspor-Impor">Perdagangan
                                                        Ekspor-Impor
                                                    </option>
                                                    <option <?= $data->condition_karyawan_bidang_usaha == 'Makanan / Minuman' ? 'selected' : '' ?> value="Makanan / Minuman">Makanan / Minuman
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-left">
                                                <label>Jabatan</label>
                                                <select class="form-control text-size" name="condition_karyawan_jabatan" id="" required>
                                                    <option selected value="">Pilih Jabatan
                                                    </option>
                                                    <option <?= $data->condition_karyawan_jabatan == 'Staff' ? 'selected' : '' ?> value="Staff">Staff
                                                    </option>
                                                    <option <?= $data->condition_karyawan_jabatan == 'Supervisor' ? 'selected' : '' ?> value="Supervisor">Supervisor
                                                    </option>
                                                    <option <?= $data->condition_karyawan_jabatan == 'Manager' ? 'selected' : '' ?> value="Manager">Manager
                                                    </option>
                                                    <option <?= $data->condition_karyawan_jabatan == 'Senior Manager' ? 'selected' : '' ?> value="Senior Manager">Senior Manager
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-right">
                                                <label>Lama Bekerja</label>
                                                <select class="form-control text-size" name="condition_karyawan_lama_bekerja" id="" required>
                                                    <option selected value="">Pilih Lama Bekerja
                                                    </option>
                                                    <option <?= $data->condition_karyawan_lama_bekerja == '0 Tahun - < 3 Tahun' ? 'selected' : '' ?> value="0 Tahun - < 3 Tahun">0 Tahun - < 3 Tahun </option> <option <?= $data->condition_karyawan_lama_bekerja == '> 3 Tahun - < 5 Tahun' ? 'selected' : '' ?> value="> 3 Tahun - < 5 Tahun">> 3 Tahun - < 5 Tahun </option> <option <?= $data->condition_karyawan_lama_bekerja == '> 5 Tahun' ? 'selected' : '' ?> value="> 5 Tahun">> 5 Tahun
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row form-margin mt-3">
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
                                                                <input type="number" class="form-control text-size number-only form-border tanggungan-karyawan" name="condition_karyawan_tanggungan_orangtua" value="<?= $data->condition_karyawan_tanggungan_orangtua ? $data->condition_karyawan_tanggungan_orangtua : '0' ?>" id="condition_karyawan_tanggungan_orangtua" required placeholder="Orang Tua" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label class="table-lable">Pasangan</label>
                                                            </th>
                                                            <td>
                                                                <input type="number" class="form-control text-size number-only form-border tanggungan-karyawan" name="condition_karyawan_tanggungan_pasangan" value="<?= $data->condition_karyawan_tanggungan_pasangan ? $data->condition_karyawan_tanggungan_pasangan : '0' ?>" id="condition_karyawan_tanggungan_pasangan" required placeholder="Pasangan" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="table-lable">Anak Usia
                                                                    Belum Sekolah</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border tanggungan-karyawan" name="condition_karyawan_tanggungan_anak1" value="<?= $data->condition_karyawan_tanggungan_anak1 ? $data->condition_karyawan_tanggungan_anak1 : '0' ?>" id="condition_karyawan_tanggungan_anak1" required placeholder="Anak Usia Belum Sekolah" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="table-lable">Anak Usia TK
                                                                    - SMA</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border tanggungan-karyawan" name="condition_karyawan_tanggungan_anak2" value="<?= $data->condition_karyawan_tanggungan_anak2 ? $data->condition_karyawan_tanggungan_anak2 : '0' ?>" id="condition_karyawan_tanggungan_anak2" required placeholder="Anak Usia TK - SMA" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="table-lable">Anak Usia
                                                                    Perguruan Tinggi</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border tanggungan-karyawan" name="condition_karyawan_tanggungan_anak3" value="<?= $data->condition_karyawan_tanggungan_anak3 ? $data->condition_karyawan_tanggungan_anak3 : '0' ?>" id="condition_karyawan_tanggungan_anak3" required placeholder="Anak Usia Perguruan Tinggi" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="table-lable">Saudara /
                                                                    Keluarga Lainnya</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border tanggungan-karyawan" name="condition_karyawan_tanggungan_saudara" value="<?= $data->condition_karyawan_tanggungan_saudara ? $data->condition_karyawan_tanggungan_saudara : '0' ?>" id="condition_karyawan_tanggungan_saudara" required placeholder="Saudara / Keluarga Lainnya" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <th><label class="table-lable">Total Jumlah
                                                                    Tanggungan</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border" name="condition_karyawan_tanggungan_total" value="<?= $data->condition_karyawan_tanggungan_total ?>" id="condition_karyawan_tanggungan_total" required placeholder="Total Jumlah Tanggungan" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Pembayaran Gaji Via</label>
                                                <select class="form-control text-size" name="condition_karyawan_cara_gajian" id="" required>
                                                    <option selected value="">Pilih Metode
                                                    </option>
                                                    <option <?= $data->condition_karyawan_cara_gajian == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                                    <option <?= $data->condition_karyawan_cara_gajian == 'Tranfer' ? 'selected' : '' ?> value="Tranfer">Transfer</option>
                                                    <option <?= $data->condition_karyawan_cara_gajian == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya [transfer]</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-left">
                                                <label>Total Karyawan</label>
                                                <input type="number" class="form-control text-size number-only" name="condition_karyawan_jumlah_karyawan" value="<?= $data->condition_karyawan_jumlah_karyawan ?>" id="" placeholder="5000" required />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-right">
                                                <label>Tahun Berdiri</label>
                                                <input type="text" class="form-control text-size number-only placement" name="condition_karyawan_tahun_berdiri" value="<?= $data->condition_karyawan_tahun_berdiri ?>" id="" placeholder="2020" minlength="4" maxlength="4" />
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
                <?php } ?>

                <?php if ($leads->pekerjaan_konsumen == 'Wiraswasta') { ?>
                    <!-- kondisi konsumen jika wiraswasta -->
                    <div class="col-md-12">
                        <div class="card card-margin-survey">
                            <div class="card-body text-size">
                                <h4 class="form-margin"><b>Kondisi Konsumen</b>
                                    <a class="float-right kondisi-down" onclick="kondisidownFunction()" data-toggle="collapse" href="#kondisi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="fas fa-chevron-circle-down"></i>
                                    </a>
                                </h4>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Pekerjaan konsumen</label>
                                            <select class="form-control text-size" name="condition_wir_pekerjaan" id="" required>
                                                <option selected value="">Pilih Pekerjaan
                                                </option>
                                                <option <?= $data->condition_wir_pekerjaan == 'Karyawan Swasta - Tetap' ? 'selected' : '' ?> value="Karyawan Swasta - Tetap">
                                                    Karyawan Swasta - Tetap</option>
                                                <option <?= $data->condition_wir_pekerjaan == 'Karyawan Swasta - Kontrak' ? 'selected' : '' ?> value="Karyawan Swasta - Kontrak">
                                                    Karyawan Swasta - Kontrak</option>
                                                <option <?= $data->condition_wir_pekerjaan == 'PNS / ASN - Tetap' ? 'selected' : '' ?> value="PNS / ASN - Tetap">PNS / ASN -
                                                    Tetap</option>
                                                <option <?= $data->condition_wir_pekerjaan == 'PNS / ASN - Honorer < 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer < 5th">PNS /
                                                    ASN - Honorer < 5th</option> <option <?= $data->condition_wir_pekerjaan == 'PNS / ASN - Honorer > 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                        Honorer > 5th</option>
                                                <option <?= $data->condition_wir_pekerjaan == 'Wiraswasta < 2th' ? 'selected' : '' ?> value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option <?= $data->condition_wir_pekerjaan == 'Wiraswasta > 2th' ? 'selected' : '' ?> value="Wiraswasta > 2th">
                                                        Wiraswasta > 2th
                                                </option>
                                                <option <?= $data->condition_wir_pekerjaan == 'Profesi Beresiko' ? 'selected' : '' ?> value="Profesi Beresiko">Profesi
                                                    Beresiko</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Penjelasan Profesi Beresiko</label>
                                            <input type="text" class="form-control text-size" name="condition_wir_profesi_beresiko" value="<?= $data->condition_wir_profesi_beresiko ?>" id="" placeholder="Penjelasan Profesi Beresiko" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Tempat Kerja / Usaha pasangan</label>
                                            <select class="form-control text-size" name="condition_wir_tempat_kerja_pasangan" id="" required>
                                                <option selected value="">Pilih Pekerjaan
                                                </option>
                                                <option <?= $data->condition_wir_tempat_kerja_pasangan == 'Karyawan Swasta - Tetap' ? 'selected' : '' ?> value="Karyawan Swasta - Tetap">
                                                    Karyawan Swasta - Tetap</option>
                                                <option <?= $data->condition_wir_tempat_kerja_pasangan == 'Karyawan Swasta - Kontrak' ? 'selected' : '' ?> value="Karyawan Swasta - Kontrak">
                                                    Karyawan Swasta - Kontrak</option>
                                                <option <?= $data->condition_wir_tempat_kerja_pasangan == 'PNS / ASN - Tetap' ? 'selected' : '' ?> value="PNS / ASN - Tetap">PNS / ASN -
                                                    Tetap</option>
                                                <option <?= $data->condition_wir_tempat_kerja_pasangan == 'PNS / ASN - Honorer < 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer < 5th">PNS /
                                                    ASN - Honorer < 5th</option> <option <?= $data->condition_wir_tempat_kerja_pasangan == 'PNS / ASN - Honorer > 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                        Honorer > 5th</option>
                                                <option <?= $data->condition_wir_tempat_kerja_pasangan == 'Wiraswasta < 2th' ? 'selected' : '' ?> value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option <?= $data->condition_wir_tempat_kerja_pasangan == 'Wiraswasta > 2th' ? 'selected' : '' ?> value="Wiraswasta > 2th">
                                                        Wiraswasta > 2th
                                                </option>
                                                <option <?= $data->condition_wir_tempat_kerja_pasangan == 'Profesi Beresiko' ? 'selected' : '' ?> value="Profesi Beresiko">Profesi
                                                    Beresiko</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                    <div class="form-group form-margin">
                                        <label>Tempat Kerja / Usaha pasangan</label>
                                        <input type="text" class="form-control text-size" name="condition_" id=""
                                            placeholder="Tempat Kerja / Usaha pasangan" />
                                    </div>
                                </div> -->
                                </div>

                                <div class="collapse" id="kondisi">
                                    <div class="form-row form-margin mt-3">
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
                                                                <input type="number" class="form-control text-size number-only form-border tanggungan-wiraswasta" name="condition_wir_tanggungan_orangtua" value="<?= $data->condition_wir_tanggungan_orangtua ? $data->condition_wir_tanggungan_orangtua : '0' ?>" id="orangtua_tanggungan" required placeholder="Orang Tua" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <label class="table-lable">Pasangan</label>
                                                            </th>
                                                            <td>
                                                                <input type="number" class="form-control text-size number-only form-border tanggungan-wiraswasta" name="condition_wir_tanggungan_pasangan" value="<?= $data->condition_wir_tanggungan_pasangan ? $data->condition_wir_tanggungan_pasangan : '0' ?>" id="pasangan_tanggungan" required placeholder="Pasangan" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="table-lable">Anak Usia
                                                                    Belum Sekolah</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border tanggungan-wiraswasta" name="condition_wir_tanggungan_anak1" value="<?= $data->condition_wir_tanggungan_anak1 ? $data->condition_wir_tanggungan_anak1 : '0' ?>" id="anak_belum_sekolah" required placeholder="Anak Usia
																					Belum Sekolah" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="table-lable">Anak Usia TK
                                                                    - SMA</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border tanggungan-wiraswasta" name="condition_wir_tanggungan_anak2" value="<?= $data->condition_wir_tanggungan_anak2 ? $data->condition_wir_tanggungan_anak2 : '0' ?>" id="anak_sudah_sekolah" required placeholder="Anak Usia TK
																					- SMA" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="table-lable">Anak Usia
                                                                    Perguruan Tinggi</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border tanggungan-wiraswasta" name="condition_wir_tanggungan_anak3" value="<?= $data->condition_wir_tanggungan_anak3 ? $data->condition_wir_tanggungan_anak3 : '0' ?>" id="anak_perguruan_tinggi" required placeholder="Anak Usia
																					Perguruan Tinggi" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label class="table-lable">Saudara /
                                                                    Keluarga Lainnya</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border tanggungan-wiraswasta" name="condition_wir_tanggungan_saudara" value="<?= $data->condition_wir_tanggungan_saudara ? $data->condition_wir_tanggungan_saudara : '0' ?>" id="condition_wir_tanggungan_saudara" required placeholder="Saudara / Keluarga Lainnya" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <th><label class="table-lable">Total Jumlah
                                                                    Tanggungan</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border" name="condition_wir_tanggungan_total" value="<?= $data->condition_wir_tanggungan_total ?>" id="condition_wir_tanggungan_total" required placeholder="Total Jumlah Tanggungan" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Nama Usaha</label>
                                                <input type=" text" class="form-control text-size" name="condition_wir_nama_usaha" value="<?= $data->condition_wir_nama_usaha ?>" id="" placeholder="PT BFI Syariah indonesia" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Bidang Usaha</label>
                                                <select class=" form-control text-size" name="condition_wir_bidang_usaha" id="" required>
                                                    <option selected value="">Pilih Bidang Usaha
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Transportasi' ? 'selected' : '' ?> value="Transportasi">Transportasi
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Industri / Manufacturing' ? 'selected' : '' ?> value="Industri / Manufacturing">Industri /
                                                        Manufacturing
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Pertambangan' ? 'selected' : '' ?> value="Pertambangan">Pertambangan
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Perhutanan' ? 'selected' : '' ?> value="Perhutanan">Perhutanan
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Peternakan & Perikanan' ? 'selected' : '' ?> value="Peternakan & Perikanan">Peternakan &
                                                        Perikanan
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Konstruksi' ? 'selected' : '' ?> value="Konstruksi">Konstruksi
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Jasa' ? 'selected' : '' ?> value="Jasa">Jasa
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Pertanian & Perkebunan' ? 'selected' : '' ?> value="Pertanian & Perkebunan">Pertanian &
                                                        Perkebunan
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Perdagangan Besar' ? 'selected' : '' ?> value="Perdagangan Besar">Perdagangan Besar
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Perdagangan Eceran' ? 'selected' : '' ?> value="Perdagangan Eceran">Perdagangan
                                                        Eceran
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Perdagangan Ekspor-Impor' ? 'selected' : '' ?> value="Perdagangan Ekspor-Impor">Perdagangan
                                                        Ekspor-Impor
                                                    </option>
                                                    <option <?= $data->condition_wir_bidang_usaha == 'Makanan / Minuman' ? 'selected' : '' ?> value="Makanan / Minuman">Makanan / Minuman
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <div class="form-group form-left">
                                                <label>Tahun Berdiri</label>
                                                <input type="text" class="form-control text-size number-only placement" name="condition_wir_tahun_berdiri" value="<?= $data->condition_wir_tahun_berdiri ?>" id="" placeholder="2020" minlength="4" maxlength="4" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-right">
                                                <label>Jumlah Karyawan</label>
                                                <select class="form-control text-size" name="condition_wir_jumlah_karyawan" id="" required>
                                                    <option selected value="">Pilih Kategori Jenis
                                                        Bangunan
                                                    </option>
                                                    <option <?= $data->condition_wir_jumlah_karyawan ?> value=" 1 - 4"> 1 -
                                                        4
                                                    </option>
                                                    <option <?= $data->condition_wir_jumlah_karyawan ?> value="5 - 19">5 -
                                                        19
                                                    </option>
                                                    <option <?= $data->condition_wir_jumlah_karyawan ?> value="20 -99">20
                                                        -99
                                                    </option>
                                                    <option <?= $data->condition_wir_jumlah_karyawan ?> value="100 - 499">
                                                        100 - 499
                                                    </option>
                                                    <option <?= $data->condition_wir_jumlah_karyawan ?> value="> 500">> 500
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Jenis Bangunan Usaha</label>
                                                <select class="form-control text-size" name="condition_wir_jenis_bangunan_usaha" id="" required>
                                                    <option value="">Pilih Kategori Jenis
                                                        Bangunan
                                                    </option>
                                                    <option <?= $data->condition_wir_jenis_bangunan_usaha == 'Bangungan Permanen' ? 'selected' : '' ?> value="Bangungan Permanen">
                                                        Bangungan Permanen
                                                    </option>
                                                    <option <?= $data->condition_wir_jenis_bangunan_usaha == 'Bangunan Sementara' ? 'selected' : '' ?> value="Bangunan Sementara">Bangunan
                                                        Sementara
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Pemilik tempat usaha</label>
                                                <select class="form-control text-size" name="condition_wir_pemilik_tempat_usaha" id="" required>
                                                    <option selected value="">Pilih Pemilik
                                                    </option>
                                                    <option <?= $data->condition_wir_pemilik_tempat_usaha == 'Milik Sendiri - Lunas' ? 'selected' : '' ?> value="Milik Sendiri - Lunas">Milik
                                                        Sendiri - Lunas
                                                    </option>
                                                    <option <?= $data->condition_wir_pemilik_tempat_usaha == 'Milik Sendiri - Kredit' ? 'selected' : '' ?> value="Milik Sendiri - Kredit">
                                                        Milik Sendiri - Kredit
                                                    </option>
                                                    <option <?= $data->condition_wir_pemilik_tempat_usaha == 'Milik Keluarga - Lunas' ? 'selected' : '' ?> value="Milik Keluarga - Lunas">
                                                        Milik Keluarga - Lunas
                                                    </option>
                                                    <option <?= $data->condition_wir_pemilik_tempat_usaha == 'Milik Keluarga - Kredit' ? 'selected' : '' ?> value="Milik Keluarga - Kredit">
                                                        Milik Keluarga - Kredit
                                                    </option>
                                                    <option <?= $data->condition_wir_pemilik_tempat_usaha == 'Kontrak / Sewa' ? 'selected' : '' ?> value="Kontrak / Sewa">Kontrak /
                                                        Sewa
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Kepemilikan Usaha</label>
                                                <select class="form-control text-size" name="condition_wir_kepemilikan_usaha" id="" required>
                                                    <option selected value="">Pilih Pemilik
                                                    </option>
                                                    <option <?= $data->condition_wir_kepemilikan_usaha == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri
                                                    </option>
                                                    <option <?= $data->condition_wir_kepemilikan_usaha == 'Kongsi / Kerjasama' ? 'selected' : '' ?> value="Kongsi / Kerjasama">Kongsi /
                                                        Kerjasama
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Bentuk Usaha</label>
                                                <select class="form-control text-size" name="condition_wir_bentuk_usaha" id="" required>
                                                    <option selected value="">Pilih Bentuk Usaha
                                                    </option>
                                                    <option <?= $data->condition_wir_bentuk_usaha == 'PT' ? 'selected' : '' ?> value="PT">PT
                                                    </option>
                                                    <option <?= $data->condition_wir_bentuk_usaha == 'CV' ? 'selected' : '' ?> value="CV">CV
                                                    </option>
                                                    <option <?= $data->condition_wir_bentuk_usaha == 'UD' ? 'selected' : '' ?> value="UD">UD
                                                    </option>
                                                    <option <?= $data->condition_wir_bentuk_usaha == 'Perorangan' ? 'selected' : '' ?> value="Perorangan">Perorangan
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Metode Pembayaran</label>
                                                <select class="form-control text-size" name="condition_wir_cara_bayar" id="" required>
                                                    <option selected value="">Pilih Metode Pembayaran
                                                    </option>
                                                    <option <?= $data->condition_wir_cara_bayar == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                                    <option <?= $data->condition_wir_cara_bayar == 'Transfer' ? 'selected' : '' ?> value="Transfer">Transfer</option>
                                                    <option <?= $data->condition_wir_cara_bayar == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya
                                                        [Transfer]</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
                                                <label>Kondisi Usaha</label>
                                                <textarea class="form-control text-size" name="condition_wir_kondisi_usaha" value="<?= $data->condition_wir_kondisi_usaha ?>" id="" cols="30" rows="10" placeholder="Jelaskan Kondisi Usaha Saat ini" style="height:110px;"></textarea>
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
                <?php } ?>

                <?php if ($leads->pekerjaan_konsumen == 'Karyawan') { ?>
                    <!-- Kapasitas konsumen jika karyawan -->
                    <div class="col-md-12">
                        <div class="card card-margin-survey">
                            <div class="card-body text-size">
                                <h4 class="form-margin"><b>Kapasitas Konsumen</b>
                                    <a class="float-right kapasitas-down" onclick="kapasitasdownFunction()" data-toggle="collapse" href="#kapasitas" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="fas fa-chevron-circle-down"></i>
                                    </a>
                                </h4>

                                <p class="form-margin"> <b>Pendapatan</b> </p>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Pendapatan Berupa (Gaji)</label>
                                            <input type="text" class="form-control text-size number-only pendapatan-karyawan" name="capacity_karyawan_income_bruto" value="<?= $data->capacity_karyawan_income_bruto ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Take Home Pay</label>
                                            <input type="text" class="form-control text-size number-only pendapatan-karyawan" name="capacity_karyawan_income_thp" value="<?= $data->capacity_karyawan_income_thp ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Apakah Ada Bonus Periodik ?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input renovasi" type="radio" name="capacity_karyawan_ada_bonus_periodik" <?= $data->capacity_karyawan_ada_bonus_periodik == 'Ya' ? 'checked' : '' ?> id="" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="capacity_karyawan_ada_bonus_periodik" <?= $data->capacity_karyawan_ada_bonus_periodik == 'Tidak' ? 'checked' : '' ?> id="" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row form-margin mt-3">
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
                                                            <input type="text" class="form-control text-size form-border" name="capacity_karyawan_bonus1" value="<?= $data->capacity_karyawan_bonus1 ?>" id="" required placeholder="Deskripsi 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capacity_karyawan_periode1" value="<?= $data->capacity_karyawan_periode1 ?>" id="" required placeholder="Periode 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border pendapatan-karyawan pendapatan-periodik-karyawan" name="capacity_karyawan_nilai1" value="<?= $data->capacity_karyawan_nilai1 ?>" id="" data-type="currency" required placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capacity_karyawan_bonus2" value="<?= $data->capacity_karyawan_bonus2 ?>" id="" required placeholder="Deskripsi 2" />
                                                        </td>
                                                        <td><input type="text" class="form-control text-size form-border" name="capacity_karyawan_periode2" value="<?= $data->capacity_karyawan_periode2 ?>" id="" required placeholder="Periode 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border pendapatan-karyawan pendapatan-periodik-karyawan" name="capacity_karyawan_nilai2" value="<?= $data->capacity_karyawan_nilai2 ?>" id="" data-type="currency" required placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capacity_karyawan_bonus3" value="<?= $data->capacity_karyawan_bonus3 ?>" id="" required placeholder="Deskripsi 3" />
                                                        </td>
                                                        <td><input type="text" class="form-control text-size form-border" name="capacity_karyawan_periode3" value="<?= $data->capacity_karyawan_periode3 ?>" id="" required placeholder="Periode 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border pendapatan-karyawan pendapatan-periodik-karyawan" name="capacity_karyawan_nilai3" value="<?= $data->capacity_karyawan_nilai3 ?>" id="" data-type="currency" required placeholder="Nominal 3" />
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <td>
                                                            <label>Total Pendapatan Periodik</label>
                                                        </td>
                                                        <td></td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_karyawan_total_bonus" value="<?= $data->capacity_karyawan_total_bonus ?>" id="capacity_karyawan_total_bonus" data-type="currency" required placeholder="Total Pendapatan Periodik" readonly />
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
                                            <div class="form-group form-margin">
                                                <label>Apakah ada Pendapatan lainnya ?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_karyawan_ada_income_lainnya" <?= $data->capacity_karyawan_ada_income_lainnya == 'Ya' ? 'checked' : '' ?> id="" value="Ya">
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_karyawan_ada_income_lainnya" <?= $data->capacity_karyawan_ada_income_lainnya == 'Tidak' ? 'checked' : '' ?> id="" value="Tidak">
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row form-margin mt-3 ">
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
                                                                <input type="text" class="form-control text-size form-border" name="capacity_karyawan_income_lainnya1" value="<?= $data->capacity_karyawan_income_lainnya1 ?>" id="" required placeholder="Deskripsi 1" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan-karyawan pendapatan-karyawan-lainnya" name="capacity_karyawan_nilai_lain1" value="<?= $data->capacity_karyawan_nilai_lain1 ?>" id="" data-type="currency" required placeholder="Nominal 1" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border" name="capacity_karyawan_income_lainnya2" value="<?= $data->capacity_karyawan_income_lainnya2 ?>" id="" required placeholder="Deskripsi 2" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan-karyawan pendapatan-karyawan-lainnya" name="capacity_karyawan_nilai_lain2" value="<?= $data->capacity_karyawan_nilai_lain2 ?>" id="" data-type="currency" required placeholder="Nominal 2" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total Pendapatan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_karyawan_total_income_lainnya" value="<?= $data->capacity_karyawan_total_income_lainnya ?>" id="capacity_karyawan_total_income_lainnya" data-type="currency" required placeholder="Nominal 2" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-margin">
                                                <label>Saldo Rekening Saat ini</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_karyawan_saldo_rekening" value="<?= $data->capacity_karyawan_saldo_rekening ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-margin">
                                                <label>Pendapatan Pasangan</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_karyawan_income_pasangan" value="<?= $data->capacity_karyawan_income_pasangan ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-margin">
                                                <label>Total Pendapatan</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_karyawan_total_net_income" value="<?= $data->capacity_karyawan_total_net_income ?>" id="capacity_karyawan_total_net_income" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                    </div>

                                    <p class="form-margin mt-3"> <b>Pengeluaran</b> </p>

                                    <div class="form-row form-margin mt-3 ">
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
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-karyawan" name="capacity_karyawan_outcome_pendidikan" value="<?= $data->capacity_karyawan_outcome_pendidikan ?>" id="" data-type="currency" required placeholder="Biaya
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
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-karyawan" name="capacity_karyawan_outcome_rumah" value="<?= $data->capacity_karyawan_outcome_rumah ?>" id="" data-type="currency" required placeholder="Biaya Rumah
																					Tangga" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-500">Biaya
                                                                    Internet / Pulsa / Listrik</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-karyawan" name="capacity_karyawan_outcome_listrik" value="<?= $data->capacity_karyawan_outcome_listrik ?>" id="" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-500">Biaya Lain
                                                                    - Lain</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-karyawan" name="capacity_karyawan_outcome_lainnya" value="<?= $data->capacity_karyawan_outcome_lainnya ?>" id="" data-type="currency" required placeholder="Biaya Lain - Lain" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label class="table-form-500">Total
                                                                    Pengeluaran</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_karyawan_total_outcome" value="<?= $data->capacity_karyawan_total_biaya_outcome ?>" id="capacity_karyawan_total_biaya_outcome" data-type="currency" required placeholder="Total Pengeluaran" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Apakah ada Hutang
                                                    ditempat lain ?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_karyawan_ada_hutang" <?= $data->capacity_karyawan_ada_hutang == 'Ya' ? 'checked' : '' ?> id="" value="Ya">
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_karyawan_ada_hutang" <?= $data->capacity_karyawan_ada_hutang == 'Tidak' ? 'checked' : '' ?> id="" value="Tidak">
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row form-margin mt-3 ">
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
                                                                <input type="text" class="form-control text-size form-border" name="capacity_karyawan_hutang1" value="<?= $data->capacity_karyawan_hutang1 ?>" id="" required placeholder="Deskripsi 1" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang-karyawan" name="capacity_karyawan_nilai_hutang1" value="<?= $data->capacity_karyawan_nilai_hutang1 ?>" id="" data-type="currency" required placeholder="Nominal 1" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border" name="capacity_karyawan_hutang2" value="<?= $data->capacity_karyawan_hutang2 ?>" id="" required placeholder="Deskripsi 2" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang-karyawan" name="capacity_karyawan_nilai_hutang2" value="<?= $data->capacity_karyawan_nilai_hutang2 ?>" id="" data-type="currency" required placeholder="Nominal 2" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border" name="capacity_karyawan_hutang3" value="<?= $data->capacity_karyawan_hutang3 ?>" id="" required placeholder="Deskripsi 3" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang-karyawan" name="capacity_karyawan_nilai_hutang3" value="<?= $data->capacity_karyawan_nilai_hutang3 ?>" id="" data-type="currency" required placeholder="Nominal 3" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total Hutang</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_karyawan_total_hutang" value="<?= $data->capacity_karyawan_total_hutang ?>" id="capacity_karyawan_total_hutang" data-type="currency" required placeholder="Total Hutang" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Total Pengeluaran</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_karyawan_total_outcome" value="<?= $data->capacity_karyawan_total_outcome ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Kelebihan Pendapatan</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_karyawan_kelebihan_net_income" value="<?= $data->capacity_karyawan_kelebihan_net_income ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
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
                <?php } ?>

                <?php if ($leads->pekerjaan_konsumen == 'Wiraswasta') { ?>
                    <!-- Kapasitas konsumen jika Wiraswasta -->
                    <div class="col-md-12">
                        <div class="card card-margin-survey">
                            <div class="card-body text-size">
                                <h4 class="form-margin"><b>Kapasitas Konsumen</b>
                                    <a class="float-right kapasitas-down" onclick="kapasitasdownFunction()" data-toggle="collapse" href="#kapasitas" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <i class="fas fa-chevron-circle-down"></i>
                                    </a>
                                </h4>

                                <p class="form-margin mt-3"> <b>Pendapatan</b> </p>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-margin">
                                            <label>Pilih sumber data yang akan diisi</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input renovasi" type="radio" name="capacity_wir_pilih_data_analisa" <?= $data->capacity_wir_pilih_data_analisa == 'Nota' ? 'checked' : '' ?> id="" value="Nota">
                                                <label class="form-check-label">
                                                    Nota
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="capacity_wir_pilih_data_analisa" <?= $data->capacity_wir_pilih_data_analisa == 'Rekening Tabungan' ? 'checked' : '' ?> id="" value="Rekening Tabungan">
                                                <label class="form-check-label">
                                                    Rekening Tabungan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row form-margin mt-3 ">
                                    <div class="col-md-12">
                                        <p>Informasikan Kredit Rekening (jika kredit rekening)</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Mutasi Keredit
                                                                Bulan Pertama</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border wiraswasta-mutasi" name="capacity_wir_mutasi1" value="<?= $data->capacity_wir_mutasi1 ?>" id="" data-type="currency" required placeholder="Bulan Pertama" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Mutasi Keredit
                                                                Bulan Kedua</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border wiraswasta-mutasi" name="capacity_wir_mutasi2" value="<?= $data->capacity_wir_mutasi2 ?>" id="" data-type="currency" required placeholder="Bulan Kedua" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Mutasi Keredit
                                                                Bulan Ketiga</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border wiraswasta-mutasi" name="capacity_wir_mutasi3" value="<?= $data->capacity_wir_mutasi3 ?>" id="" data-type="currency" required placeholder="Bulan Ketiga" />
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <td>
                                                            <label class="table-lable">Average
                                                                Kredit</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_avr_mutasi" value="<?= $data->capacity_wir_avr_mutasi ?>" id="capacity_wir_avr_mutasi" data-type="currency" required placeholder="Average Kredit" readonly />
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
                                                            <label class="table-lable">Total Nota
                                                                Bulan Pertama</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border wiraswasta-nota" name="capacity_wir_nota1" value="<?= $data->capacity_wir_nota1 ?>" id="" data-type="currency" required placeholder="Bulan Pertama" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Total Nota
                                                                Bulan Kedua</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border wiraswasta-nota" name="capacity_wir_nota2" value="<?= $data->capacity_wir_nota2 ?>" id="" data-type="currency" required placeholder="Bulan Kedua" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Total Nota
                                                                Bulan Ketiga</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border wiraswasta-nota" name="capacity_wir_nota3" value="<?= $data->capacity_wir_nota3 ?>" id="" data-type="currency" required placeholder="Bulan Ketiga" />
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <td>
                                                            <label class="table-lable">Average
                                                                Kredit</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_avr_nota" value="<?= $data->capacity_wir_avr_nota ?>" id="capacity_wir_avr_nota" data-type="currency" required placeholder="Average Kredit" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-row form-margin mt-3 ">
                                    <div class="col-md-12">
                                        <p>Biaya Operasional</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Biaya Sewa
                                                                (Jika sewa)</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_sewa" value="<?= $data->capacity_wir_sewa ?>" id="" data-type="currency" required placeholder="Biaya
																				Sewa" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Gaji Karyawan
                                                                Perbulan</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_payroll" value="<?= $data->capacity_wir_payroll ?>" id="" data-type="currency" required placeholder="Gaji Karyawan
																				Perbulan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Biaya
                                                                Internet / Pulsa / Listrik</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_internet" value="<?= $data->capacity_wir_internet ?>" id="" data-type="currency" required placeholder="Biaya
																				Internet / Pulsa / Listrik" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Biaya
                                                                lainnya</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_lainnya" value="<?= $data->capacity_wir_lainnya ?>" id="" data-type="currency" required placeholder="Biaya lainny" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Presentase
                                                                Profit Margin</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_profit_margin" value="<?= $data->capacity_wir_profit_margin ?>" id="" data-type="currency" required placeholder="Presentase
																				Profit Margin" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Total Biaya
                                                                Operasional</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_operasional" value="<?= $data->capacity_wir_total_operasional ?>" id="" data-type="currency" required placeholder="Total Biaya Operasional" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Total
                                                                Pendapatan Omset</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_income" value="<?= $data->capacity_wir_total_income ?>" id="" data-type="currency" required placeholder="Total Pendapatan Omset" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-lable">Total Nett
                                                                Profit</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_net_profit" value="<?= $data->capacity_wir_total_net_profit ?>" id="" data-type="currency" required placeholder="Total Nett Profit" readonly />
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
                                            <div class="form-group form-margin">
                                                <label>Apakah ada Pendapatan lainnya ?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_wir_ada_income_lainnya" <?= $data->capacity_wir_ada_income_lainnya == 'Ya' ? 'checked' : '' ?> id="" value="Ya">
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_wir_ada_income_lainnya" <?= $data->capacity_wir_ada_income_lainnya == 'Tidak' ? 'checked' : '' ?> id="" value="Tidak">
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row form-margin mt-3 ">
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
                                                                <input type="text" class="form-control text-size form-border" name="capacity_wir_income_lain1" value="<?= $data->capacity_wir_income_lain1 ?>" id="" required placeholder="Deskripsi 1" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_nilai_lain1" value="<?= $data->capacity_wir_nilai_lain1 ?>" id="" data-type="currency" required placeholder="Nominal 1" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border" name="capacity_wir_income_lain2" value="<?= $data->capacity_wir_income_lain2 ?>" id="" required placeholder="Deskripsi 2" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_nilai_lain2" value="<?= $data->capacity_wir_nilai_lain2 ?>" id="" data-type="currency" required placeholder="Nominal 2" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total Pendapatan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_lain" value="<?= $data->capacity_wir_total_lain ?>" id="" data-type="currency" required placeholder="Nominal 2" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-margin">
                                                <label>Saldo Rekening Saat ini</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_wir_saldo_rekening" value="<?= $data->capacity_wir_saldo_rekening ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-margin">
                                                <label>Pendapatan Pasangan</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_wir_income_pasangan" value="<?= $data->capacity_wir_income_pasangan ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-margin">
                                                <label>Total Pendapatan</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_wir_total_nett_income" value="<?= $data->capacity_wir_total_nett_income ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                    </div>

                                    <p class="form-margin mt-3"> <b>Pengeluaran</b> </p>

                                    <div class="form-row form-margin mt-3 ">
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
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-wiraswasta" name="capacity_wir_outcome_pendidikan" value="<?= $data->capacity_wir_outcome_pendidikan ?>" id="" data-type="currency" required placeholder="Biaya
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
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-wiraswasta" name="capacity_wir_outcome_rumah_tangga" value="<?= $data->capacity_wir_outcome_rumah_tangga ?>" id="" data-type="currency" required placeholder="Biaya Rumah
																					Tangga" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-500">Biaya
                                                                    Internet / Pulsa / Listrik</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-wiraswasta" name="capacity_wir_outcome_internet" value="<?= $data->capacity_wir_outcome_internet ?>" id="" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-500">Biaya Lain
                                                                    - Lain</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-wiraswasta" name="capacity_wir_outcome_lainnya" value="<?= $data->capacity_wir_outcome_lainnya ?>" id="capacity_wir_outcome_lainnya" data-type="currency" required placeholder="Biaya Lain - Lain" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label class="table-form-500">Total
                                                                    Pengeluaran</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_biaya_outcome" value="<?= $data->capacity_wir_total_biaya_outcome ?>" id="capacity_wir_total_biaya_outcome" data-type="currency" required placeholder="Total Pengeluaran" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Apakah ada Hutang
                                                    ditempat lain ?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_wir_ada_hutang" <?= $data->capacity_wir_ada_hutang == 'Ya' ? 'checked' : '' ?> id="" value="Ya">
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_wir_ada_hutang" <?= $data->capacity_wir_ada_hutang == 'Tidak' ? 'checked' : '' ?> id="" value="Tidak">
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row form-margin mt-3 ">
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
                                                                <input type="text" class="form-control text-size form-border" name="capacity_wir_hutang1" value="<?= $data->capacity_wir_hutang1 ?>" id="" required placeholder="Deskripsi 1" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_nilai_hutang1" value="<?= $data->capacity_wir_nilai_hutang1 ?>" id="" data-type="currency" required placeholder="Nominal 1" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border" name="capacity_wir_hutang2" value="<?= $data->capacity_wir_hutang2 ?>" id="" required placeholder="Deskripsi 2" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_nilai_hutang2" value="<?= $data->capacity_wir_nilai_hutang2 ?>" id="" data-type="currency" required placeholder="Nominal 2" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border" name="capacity_wir_hutang3" value="<?= $data->capacity_wir_hutang3 ?>" id="" required placeholder="Deskripsi 3" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_nilai_hutang3" value="<?= $data->capacity_wir_nilai_hutang3 ?>" id="" data-type="currency" required placeholder="Nominal 3" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Total hutang</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_hutang" value="<?= $data->capacity_wir_total_hutang ?>" id="" data-type="currency" required placeholder="Total hutang" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Total Pengeluaran</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_wir_total_outcome" value="<?= $data->capacity_wir_total_outcome ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Kelebihan Pendapatan</label>
                                                <input type="text" class="form-control text-size number-only" name="capacity_wir_nett_income" value="<?= $data->capacity_wir_nett_income ?>" id="" data-type="currency" placeholder="Rp. 000000000" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-margin">
                                                <label>Apakah ada analisa kapasitaskonsumen dari omset
                                                    penjualan ?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_wir_ada_analisa_dari_omset" <?= $data->capacity_wir_ada_analisa_dari_omset == 'Ya' ? 'checked' : '' ?> id="" value="Ya">
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input renovasi" type="radio" name="capacity_wir_ada_analisa_dari_omset" <?= $data->capacity_wir_ada_analisa_dari_omset == 'Tidak' ? 'checked' : '' ?> id="" value="Tidak">
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row form-margin mt-3">
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
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_usaha_omset_perhari" value="<?= $data->capacity_wir_usaha_omset_perhari ?>" id="" data-type="currency" required placeholder="Omset
																					Perhari" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-500">Jumlah
                                                                    Hari Buka Usaha</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_usaha_jumlah_hari_buka" value="<?= $data->capacity_wir_usaha_jumlah_hari_buka ?>" id="" required placeholder="Jumlah
																					Hari Buka Usaha" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-500">Omset per
                                                                    bulan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_usaha_omset_perbulan" value="<?= $data->capacity_wir_usaha_omset_perbulan ?>" id="" data-type="currency" required placeholder="Omset per
																					bulan" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label class="table-form-500">Total
                                                                    Omset</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_omset" value="<?= $data->capacity_wir_total_omset ?>" id="" data-type="currency" required placeholder="Total
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

                                    <!-- <div class="form-row ml-3 mr-3 mt-3 ">
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
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required placeholder="Biaya
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
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required placeholder="Gaji Karyawan
																					Perbulan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Internet / Pulsa / Listrik</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                lainnya</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Biaya lainny" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Presentase
                                                                Profit Margin</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required placeholder="Presentase
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
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Total Biaya Operasional" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total
                                                                Pendapatan Omset</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Total Pendapatan Omset" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total Nett
                                                                Profit</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Total Nett Profit" readonly />
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
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required placeholder="Biaya
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
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required placeholder="Biaya Rumah
																					Tangga" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya
                                                                Internet / Pulsa / Listrik</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Biaya Lain
                                                                - Lain</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Biaya Lain - Lain" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="table-form-500">Total
                                                                Pengeluaran</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Total Pengeluaran" readonly />
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
                                                <input class="form-check-input renovasi" type="radio" name="" id=""
                                                    value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input renovasi" type="radio" name="" id=""
                                                    value="Tidak">
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
                                                            <input type="text"
                                                                class="form-control text-size table-form-500" name=""
                                                                id="" required placeholder="Deskripsi 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size table-form-500" name=""
                                                                id="" required placeholder="Deskripsi 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size table-form-500" name=""
                                                                id="" required placeholder="Deskripsi 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Nominal 3" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>Total Hutang</label>
                                                        </td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control text-size number-only table-form-220"
                                                                name="" id="" data-type="currency" required
                                                                placeholder="Total Hutang" readonly />
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
                                            <input type="text" class="form-control text-size number-only" name="" id=""
                                                data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Kelebihan Pendapatan</label>
                                            <input type="text" class="form-control text-size number-only" name="" id=""
                                                data-type="currency" placeholder="Rp. 000000000" />
                                        </div>
                                    </div>
                                </div> -->

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
                <?php } ?>

                <!-- Aset Konsumen -->
                <div class="col-md-12">
                    <div class="card card-margin-survey">
                        <div class="card-body text-size">
                            <h4 class="form-margin"><b>Aset Konsumen</b>
                                <a class="float-right aset-down" onclick="asetdownFunction()" data-toggle="collapse" href="#aset" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-margin">
                                        <label>Kepemilikan Tempat tinggal Saat ini</label>
                                        <select class="form-control text-size" name="capital_tempat_tinggal_milik" id="" required>
                                            <option selected value="">Pilih Kategori Kepemilikan
                                            </option>
                                            <option <?= $data->capital_tempat_tinggal_milik == 'Milik Sendiri - Lunas' ?> value="Milik Sendiri - Lunas">Milik Sendiri -
                                                Lunas</option>
                                            <option <?= $data->capital_tempat_tinggal_milik == 'Milik Sendiri - Kredit' ?> value="Milik Sendiri - Kredit">Milik Sendiri -
                                                Kredit</option>
                                            <option <?= $data->capital_tempat_tinggal_milik == 'Milik Keluarga - Lunas' ?> value="Milik Keluarga - Lunas">Milik Keluarga -
                                                Lunas</option>
                                            <option <?= $data->capital_tempat_tinggal_milik == 'Milik Keluarga - Kredit' ?> value="Milik Keluarga - Kredit">Milik Keluarga -
                                                Kredit</option>
                                            <option <?= $data->capital_tempat_tinggal_milik == 'Kontrak / Sewa' ?> value="Kontrak / Sewa">Kontrak / Sewa</option>
                                            <option <?= $data->capital_tempat_tinggal_milik == 'Dinas' ?> value="Dinas">
                                                Dinas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-margin">
                                        <label>Apakah ada hutang ditempat lain ?</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input renovasi" type="radio" name="capital_ada_hutang" <?= $data->capital_ada_hutang == 'Ya' ? 'checked' : '' ?> id="" value="Ya">
                                            <label class="form-check-label">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input renovasi" type="radio" name="capital_ada_hutang" <?= $data->capital_ada_hutang == 'Tidak' ? 'checked' : '' ?> id="" value="Tidak">
                                            <label class="form-check-label">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group form-margin">
                                        <label>Informasi Alamat BKR</label>
                                        <input type="text" class="form-control text-size" name="capital_alamat_bkr" value="<?= $data->capital_alamat_bkr ?>" id="" required placeholder="Informasi Alamat Lengkap" />
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="aset">

                                <div class="form-row form-margin mt-3">
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
                                                            <input type="text" class="form-control text-size text-size form-border" name="capital_aset1" value="<?= $data->capital_aset1 ?>" id="" required placeholder="Nama Barang 1" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border aset-konsumen" name="capital_harga1" value="<?= $data->capital_harga1 ?>" id="" data-type="currency" required placeholder="Nominal 1" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset2" value="<?= $data->capital_aset2 ?>" id="" required placeholder="Nama Barang 2" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border aset-konsumen" name="capital_harga2" value="<?= $data->capital_harga2 ?>" id="" data-type="currency" required placeholder="Nominal 2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset3" value="<?= $data->capital_aset3 ?>" id="" required placeholder="Nama Barang 3" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border aset-konsumen" name="capital_harga3" value="<?= $data->capital_harga3 ?>" id="" data-type="currency" required placeholder="Nominal 3" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset4" value="<?= $data->capital_aset4 ?>" id="" required placeholder="Nama Barang 4" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border aset-konsumen" name="capital_harga4" value="<?= $data->capital_harga4 ?>" id="" data-type="currency" required placeholder="Nominal 4" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset5" value="<?= $data->capital_aset5 ?>" id="" required placeholder="Nama Barang5" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border aset-konsumen" name="capital_harga5" value="<?= $data->capital_harga5 ?>" id="" data-type="currency" required placeholder="Nominal 5" />
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <td>
                                                            <label>Total Nilai Aset</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border" name="capital_total_aset" value="<?= $data->capital_total_aset ?>" id="capital_total_aset" data-type="currency" required placeholder="Total Nilai Aset" readonly />
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
                    <d iv class="card card-margin-survey">
                        <div class="card-body text-size">
                            <h4 class="form-margin mb-4"><b>Konfirmasi Karakter</b>
                                <a class="float-right konfirmasi-down" onclick="konfirmasidownFunction()" data-toggle="collapse" href="#konfirmasi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-row form-margin mt-3">
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
                                                        <label>Nomor Telepon</label>
                                                    </th>
                                                    <th>
                                                        <label>Hubungan</label>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control text-size form-border" name="character_nama1" value="<?= $data->character_nama1 ?>" id="" placeholder="Nama 1" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only form-border" name="character_no_telp1" value="<?= $data->character_no_telp1 ?>" id="" placeholder="Nomor Telepon 1" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size form-border" name="character_hubungan1" value="<?= $data->character_hubungan1 ?>" id="" placeholder="Hubungan 1" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control text-size form-border" name="character_nama2" value="<?= $data->character_nama2 ?>" id="" placeholder="Nama 2" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only form-border" name="character_no_telp2" value="<?= $data->character_no_telp2 ?>" id="" placeholder="Nomor Telepon 2" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size form-border" name="character_hubungan2" value="<?= $data->character_hubungan2 ?>" id="" placeholder="Hubungan 2" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control text-size form-border" name="character_nama3" value="<?= $data->character_nama3 ?>" id="" placeholder="Nama 3" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only form-border" name="character_no_telp3" value="<?= $data->character_no_telp3 ?>" id="" placeholder="Nomor Telepon 3" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size form-border" name="character_hubungan3" value="<?= $data->character_hubungan3 ?>" id="" placeholder="Hubungan 3" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="konfirmasi">
                                <div class="form-group form-margin">
                                    <label>Informasikan Hasil kredit Checking</label>
                                    <textarea class="form-control text-size" name="character_hasil_kredit" id="" cols="30" rows="10" placeholder="Informasikan Hasil kredit Checking" style="height:110px;"><?= $data->character_hasil_kredit ?></textarea>
                                </div>
                                <div class="form-group form-margin">
                                    <label>Hasil kredit Checking media lainnya</label>
                                    <textarea class="form-control text-size" name="character_hasil_kredit_media_lain" id="" cols="30" rows="10" placeholder="Haisl Keterangan Dari media Lain" style="height:110px;"><?= $data->character_hasil_kredit_media_lain ?></textarea>
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
                    </d>
                </div>
                <!-- konfirmasi karakter -->

                <!-- Jaminan Kendaraan -->
                <div class="col-md-12">
                    <div class="card card-margin-survey">
                        <div class="card-body text-size">
                            <h4 class="form-margin">Jaminan Kendaraan
                                <a class="float-right jaminan-down" onclick="jaminandownFunction()" data-toggle="collapse" href="#jaminan" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group form-margin">
                                        <label>Merk Kendaraan</label>
                                        <select class="form-control text-size" name="collateral_merk" id="" required>
                                            <option selected value="">Pilih Merk Mobil
                                                Jasa
                                            </option>
                                            <option <?= $data->collateral_merk == 'Toyota' ? 'selected' : '' ?> value="Toyota">Toyota</option>
                                            <option <?= $data->collateral_merk == 'Daihatsu' ? 'selected' : '' ?> value="Daihatsu">Daihatsu</option>
                                            <option <?= $data->collateral_merk == 'Honda' ? 'selected' : '' ?> value="Honda">Honda</option>
                                            <option <?= $data->collateral_merk == 'Suzuki' ? 'selected' : '' ?> value="Suzuki">Suzuki</option>
                                            <option <?= $data->collateral_merk == 'Mitsubishi' ? 'selected' : '' ?> value="Mitsubishi">Mitsubishi</option>
                                            <option <?= $data->collateral_merk == 'Nissan' ? 'selected' : '' ?> value="Nissan">Nissan </option>
                                            <option <?= $data->collateral_merk == 'Mercedes-Benz' ? 'selected' : '' ?> value="Mercedes-Benz">Mercedes-Benz</option>
                                            <option <?= $data->collateral_merk == 'Mazda' ? 'selected' : '' ?> value="Mazda">Mazda</option>
                                            <option <?= $data->collateral_merk == 'BMW' ? 'selected' : '' ?> value="BMW">BMW</option>
                                            <option <?= $data->collateral_merk == 'Hyundai' ? 'selected' : '' ?> value="Hyundai">Hyundai</option>
                                            <option <?= $data->collateral_merk == 'Audi' ? 'selected' : '' ?> value="Audi">Audi</option>
                                            <option <?= $data->collateral_merk == 'Volkswagen' ? 'selected' : '' ?> value="Volkswagen">Volkswagen</option>
                                            <option <?= $data->collateral_merk == 'Chevrolet' ? 'selected' : '' ?> value="Chevrolet">Chevrolet</option>
                                            <option <?= $data->collateral_merk == 'Ford' ? 'selected' : '' ?> value="Ford">Ford</option>
                                            <option <?= $data->collateral_merk == 'Datsun' ? 'selected' : '' ?> value="Datsun">Datsun</option>
                                            <option <?= $data->collateral_merk == 'Isuzu' ? 'selected' : '' ?> value="Isuzu">Isuzu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-margin">
                                        <label>Jenis Kendaraan</label>
                                        <select class="form-control text-size" name="collateral_jenis" id="" required>
                                            <option selected value="">Pilih jenis Kendaraan
                                            </option>
                                            <option <?= $data->collateral_jenis == 'PU' ? 'selected' : '' ?> value="PU">
                                                PU </option>
                                            <option <?= $data->collateral_jenis == 'Truck' ? 'selected' : '' ?> value="Truck ">Truck </option>
                                            <option <?= $data->collateral_jenis == 'SJMB' ? 'selected' : '' ?> value="SJMB ">SJMB </option>
                                            <option <?= $data->collateral_jenis == 'Heavy Truck' ? 'selected' : '' ?> value="Heavy Truck">Heavy Truck</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-margin">
                                        <label>Model kendaraan</label>
                                        <input type="text" class="form-control text-size" name="collateral_model" value="<?= $data->collateral_model ?>" id="" required placeholder="Civic / lancer / Skyline" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-margin">
                                        <label>tahun Mobil</label>
                                        <input type="text" class="form-control text-size" name="collateral_tahun_kendaraan" value="<?= $data->collateral_tahun_kendaraan ?>" id="" required placeholder="Min 2005" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-margin">
                                        <label>Astan nama BPKB</label>
                                        <select class="form-control text-size" name="collateral_nama_bpkb" id="" required>
                                            <option selected value="">Pilih Pemilik BPKB
                                            </option>
                                            <option value="Sendiri">Sendiri</option>
                                            <option value="Pasangan">Pasangan</option>
                                            <option value="OrangTua">OrangTua</option>
                                            <option value="Anak Kandung">Anak Kandung</option>
                                            <option value="Saudara kandung">Saudara kandung</option>
                                            <option value="Orang Lain">Orang Lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="collapse" id="jaminan">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-group form-margin">
                                            <label>Lama Memiliki mobil</label>
                                            <select class="form-control text-size" name="collateral_lama_punya_mobil" id="" required>
                                                <option selected value="">Pilih Data
                                                </option>
                                                <option <?= $data->collateral_lama_punya_mobil == '< 1 Tahun' ? 'selected' : '' ?> value="< 1 Tahun">
                                                    < 1 Tahun </option> <option <?= $data->collateral_lama_punya_mobil == '1 - 2 Tahun' ? 'selected' : '' ?> value="1 - 2 Tahun">
                                                        1 - 2 Tahun
                                                </option>
                                                <option <?= $data->collateral_lama_punya_mobil == '2 - 3 Tahun' ? 'selected' : '' ?> value="2 - 3 Tahun">2 - 3 Tahun</option>
                                                <option <?= $data->collateral_lama_punya_mobil == '> 4 Tahun' ? 'selected' : '' ?> value="> 4 Tahun">> 4 Tahun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-margin">
                                            <label>Penggunaan Mobil</label>
                                            <select class="form-control text-size" name="collateral_guna_mobil" id="" required>
                                                <option selected value="">Pilih Fungsi Mobil
                                                </option>
                                                <option <?= $data->collateral_guna_mobil == 'Usaha / Operasional' ? 'selected' : '' ?> value="Usaha / Operasional">Usaha /
                                                    Operasional</option>
                                                <option <?= $data->collateral_guna_mobil == 'Pribadi' ? 'selected' : '' ?> value="Pribadi">Pribadi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-margin">
                                            <label>Harga BFI Finance</label>
                                            <input type="text" class="form-control text-size number-only" name="collateral_pricelist_bfi" value="<?= $data->collateral_pricelist_bfi ?>" id="" data-type="currency" required placeholder="Rp. 000 000 000" />
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
                    <div class="card card-margin-survey">
                        <div class="card-body text-size">
                            <h4 class="form-margin">Data Religi
                                <a class="float-right religi-down" onclick="religidownFunction()" data-toggle="collapse" href="#religi" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a>
                            </h4>
                            <div class="form-group form-margin">
                                <label>Berapa Banyak Shalat Wajib yang dilaksanakan oleh
                                    konsumen setiap harinya ?</label>
                                <select class="form-control text-size" name="religi_solat" id="" required>
                                    <option selected value="">Pilih Jawaban
                                    </option>
                                    <option <?= $data->religi_solat == '1 - 2 Shalat Wajib' ? 'selected' : '' ?> value="1 - 2 Shalat Wajib">1 - 2 Shalat Wajib</option>
                                    <option <?= $data->religi_solat == '3-4 Shalat Wajib' ? 'selected' : '' ?> value="3-4 Shalat Wajib">3-4 Shalat Wajib</option>
                                    <option <?= $data->religi_solat == '5 Shalat Wajib' ? 'selected' : '' ?> value="5 Shalat Wajib">5 Shalat Wajib</option>
                                </select>
                            </div>
                            <div class="form-group form-margin">
                                <label>Berapa banyak frekuensi puasa yang dilakukan oleh
                                    konsumen dalam 1 bulan ramadhan ?</label>
                                <select class="form-control text-size" name="religi_puasa" id="" required>
                                    <option selected value="">Pilih Jawaban
                                    </option>
                                    <option <?= $data->religi_puasa == '< 22 Hari' ? 'selected' : '' ?> value="< 22 Hari">
                                        < 22 Hari</option> <option <?= $data->religi_puasa == '23 - 29 Hari (Asumsi Puasa 30 Hari)' ? 'selected' : '' ?> value="23 - 29 Hari (Asumsi Puasa 30 Hari)">23 - 29 Hari
                                            (Asumsi Puasa 30 Hari)
                                    </option>
                                    <option <?= $data->religi_puasa == '100% Puasa (Kecuali Ada Udzur Syari)' ? 'selected' : '' ?> value="100% Puasa (Kecuali Ada Udzur Syari)">100% Puasa
                                        (Kecuali Ada Udzur Syari)</option>
                                </select>
                            </div>

                            <div class="collapse" id="religi">
                                <div class="form-group form-margin">
                                    <label>Apakah pernah melakukan zakat mal (bukan zakat fitrah)
                                        ?</label>
                                    <select class="form-control text-size" name="religi_zakat" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option <?= $data->religi_zakat == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <78 Juta, Dan Belum Pernah Berzakat' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <78 Juta, Dan Belum Pernah Berzakat">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) < 78 Juta, Dan Belum Pernah Berzakat </option> <option <?= $data->religi_zakat == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Tapi Belum Pernah Zakat' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Tapi Belum Pernah Zakat">
                                                Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Tapi Belum
                                                Pernah Zakat</option>
                                        <option <?= $data->religi_zakat == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Tapi Tidak Konsisten Berzakat' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Tapi Tidak Konsisten Berzakat">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Tapi Tidak
                                            Konsisten Berzakat</option>
                                        <option <?= $data->religi_zakat == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Dan Selalu Berzakat' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Dan Selalu Berzakat">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >78 Juta, Dan Selalu
                                            Berzakat</option>
                                    </select>
                                </div>
                                <div class="form-group form-margin">
                                    <label>Apakah pernah menjalankan Ibadah Haji
                                        ?</label>
                                    <select class="form-control text-size" name="religi_haji" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option <?= $data->religi_haji == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <100 Juta, Dan Belum Pernah Berhaji / Belum Pernah Mendaftar Haji' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <100 Juta, Dan Belum Pernah Berhaji / Belum Pernah Mendaftar Haji">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <100 Juta, Dan Belum Pernah Berhaji / Belum Pernah Mendaftar Haji</option> <option <?= $data->religi_haji == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100 Juta, Dan Belum Pernah Berhaji / Belum Pernah Mendaftar Haji' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100 Juta, Dan Belum Pernah Berhaji / Belum Pernah Mendaftar Haji">
                                                Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100 Juta, Dan Belum
                                                Pernah Berhaji / Belum Pernah Mendaftar Haji</option>
                                        <option <?= $data->religi_haji == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100 Juta, Sudah Pernah Haji / Sudah Mendaftar Haji' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100 Juta, Sudah Pernah Haji / Sudah Mendaftar Haji">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >100 Juta, Sudah Pernah
                                            Haji / Sudah Mendaftar Haji
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group form-margin">
                                    <label>Apakah pernah menjalankan Ibadah Umroh
                                        ?</label>
                                    <select class="form-control text-size" name="religi_umroh" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option <?= $data->religi_umroh == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <60 Juta, Dan Belum Pernah Umroh' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <60 Juta, Dan Belum Pernah Umroh">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <60 Juta, Dan Belum Pernah Umroh</option> <option <?= $data->religi_umroh == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Dan Belum Pernah Umroh' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Dan Belum Pernah Umroh">
                                                Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Dan Belum
                                                Pernah Umroh</option>
                                        <option <?= $data->religi_umroh == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Sudah Umroh, Sudah Daftar Umroh' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Sudah Umroh, Sudah Daftar Umroh">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >60 Juta, Sudah Umroh,
                                            Sudah Daftar Umroh</option>
                                    </select>
                                </div>
                                <div class="form-group form-margin">
                                    <label>Apakah pernah menjalankan kurban pada Idul Adha
                                        ?</label>
                                    <select class="form-control text-size" name="religi_qurban" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option <?= $data->religi_qurban == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <20 Juta, Dan Belum Pernah Berkurban' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <20 Juta, Dan Belum Pernah Berkurban">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) <20 Juta, Dan Belum Pernah Berkurban</option> <option <?= $data->religi_qurban == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Tapi Belum Pernah Berkurban' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Tapi Belum Pernah Berkurban">
                                                Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Tapi Belum
                                                Pernah Berkurban</option>
                                        <option <?= $data->religi_qurban == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Tapi Tidak Konsisten Berkurban' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Tapi Tidak Konsisten Berkurban">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Tapi Tidak
                                            Konsisten Berkurban</option>
                                        <option <?= $data->religi_qurban == 'Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Konsistrn Berkurban Setiap Tahun' ? 'selected' : '' ?> value="Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Konsistrn Berkurban Setiap Tahun">
                                            Jumlah Harta (Tabungan + Emas + Stok Barang Dagang) >20 Juta, Konsistrn
                                            Berkurban Setiap Tahun</option>
                                    </select>
                                </div>
                                <div class="form-group form-margin">
                                    <label>Apakah pernah berhubungan dengan lembaga keuangan syariah
                                        terkait dengan pinajaman, tabungan, investasi dan sebagainya
                                        ?</label>
                                    <select class="form-control text-size" name="religi_lembaga_syariah" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option <?= $data->religi_lembaga_syariah == 'Belum Pernah' ? 'selected' : '' ?> value="Belum Pernah">Belum Pernah</option>
                                        <option <?= $data->religi_lembaga_syariah == 'Sudah Pernah' ? 'selected' : '' ?> value="Sudah Pernah">Sudah Pernah</option>
                                    </select>
                                </div>
                                <div class="form-group form-margin">
                                    <label>Apakah Konsumen memiliki pengetahuan yang cukup tentang
                                        ekonomi syariah dan riba
                                        ?</label>
                                    <select class="form-control text-size" name="religi_pengetahuan_riba" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option <?= $data->religi_pengetahuan_riba == 'Tidak Mengetahui' ? 'selected' : '' ?> value="Tidak Mengetahui">Tidak Mengetahui</option>
                                        <option <?= $data->religi_pengetahuan_riba == 'Cukup Mengetahui' ? 'selected' : '' ?> value="Cukup Mengetahui">Cukup Mengetahui</option>
                                        <option <?= $data->religi_pengetahuan_riba == 'Sangat Mengetahui' ? 'selected' : '' ?> value="Sangat Mengetahui">Sangat Mengetahui</option>
                                    </select>
                                </div>
                                <div class="form-group form-margin">
                                    <label>Apakah konsumen tahu tentang dosa tidak membayar hutang
                                        di akhirat
                                        ?</label>
                                    <select class="form-control text-size" name="religi_dosa_hutang" id="" required>
                                        <option selected value="">Pilih Jawaban
                                        </option>
                                        <option <?= $data->religi_dosa_hutang == 'Tidak Terlalu Memahami' ? 'selected' : '' ?> value="Tidak Terlalu Memahami">Tidak Terlalu
                                            Memahami</option>
                                        <option <?= $data->religi_dosa_hutang == 'Sangat Memahami' ? 'selected' : '' ?> value="Sangat Memahami">Sangat Memahami</option>
                                    </select>
                                </div>
                                <div class="form-group form-margin">
                                    <label>Alasan konsumen memilih lembaga keuangan syariah</label>
                                    <select class="form-control text-size" name="religi_alasan_syariah" id="" required>
                                        <option selected value="">Pilih Jawaban</option>
                                        <option <?= $data->religi_alasan_syariah == 'Menghindari Riba' ? 'selected' : '' ?> value="Menghindari Riba">Menghindari Riba</option>
                                        <option <?= $data->religi_alasan_syariah == 'Referensi Kerabat' ? 'selected' : '' ?> value="Referensi Kerabat">Referensi Kerabat</option>
                                        <option <?= $data->religi_alasan_syariah == 'jasa pembiayaan sesuai dengan kebutuhan' ? 'selected' : '' ?> value="jasa pembiayaan sesuai dengan kebutuhan">jasa
                                            pembiayaan sesuai dengan kebutuhan</option>
                                        <option <?= $data->religi_alasan_syariah == 'Mendapatkan penawaran' ? 'selected' : '' ?> value="Mendapatkan penawaran">Mendapatkan penawaran
                                        </option>
                                        <option <?= $data->religi_alasan_syariah == 'Tidak ada pilihan lain' ? 'selected' : '' ?> value="Tidak ada pilihan lain">Tidak ada pilihan
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

                <!-- Data Hasil Analisa -->
                <div class="col-md-12">
                    <div class="card card-margin-survey">
                        <div class="card-body text-size">
                            <h4 class="form-margin">Hasil Analisa
                                <!-- <a class="float-right konfirmasi-down"
														onclick="konfirmasidownFunction()" data-toggle="collapse"
														href="#konfirmasi" role="button" aria-expanded="false"
														aria-controls="collapseExample">
														<i class="fas fa-chevron-circle-down"></i>
													</a> -->
                            </h4>

                            <div class="form-group form-margin">
                                <label>Strength</label>
                                <textarea class="form-control text-size" name="kesimpulan_strength" id="" cols="30" rows="10" placeholder="" style="height:110px;"><?= $data->kesimpulan_strength ?></textarea>
                            </div>
                            <div class="form-group form-margin">
                                <label>Weakness</label>
                                <textarea class="form-control text-size" name="kesimpulan_weakness" id="" cols="30" rows="10" placeholder="" style="height:110px;"><?= $data->kesimpulan_weakness ?></textarea>
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
                <!-- Data Hasil Analisa -->

                <!-- Data Lampiran -->
                <div class="col-md-12">
                    <div class="card card-margin-survey">
                        <div class="card-body text-size">
                            <h4 class="form-margin">Data Lampiran
                                <!-- <a class="float-right lampiran-down" onclick="lampirandownFunction()" data-toggle="collapse" href="#lampiran" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-chevron-circle-down"></i>
                                </a> -->
                            </h4>

                            <div class="form-group text-size form-margin">
                                <label>Kartu Tanda Penduduk</label>
                                <input type="file" name=" " class="filestyle text-size" data-buttonname="btn-secondary">
                            </div>
                            <div class="form-group text-size form-margin">
                                <label>Kartu keluarga</label>
                                <input type="file" name=" " class="filestyle text-size" data-buttonname="btn-secondary">
                            </div>
                            <div class="form-group text-size form-margin">
                                <label>Bukti Penghasilan</label>
                                <input type="file" name=" " class="filestyle text-size" data-buttonname="btn-secondary">
                            </div>

                            <div class="collapse" id="lampiran">

                            </div>
                            <!-- <div class="col-md-12 lampiran-up">
                                <center>
                                    <h4 class="ml-3">
                                        <a onclick="lampiranupFunction()" data-toggle="collapse" href="#lampiran" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <i class="fas fa-chevron-circle-up"></i>
                                        </a>
                                    </h4>
                                </center>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- Data Lampiran -->

            </div>
        </form>
    </div>
</div>

<div class="form-row">
    <div class="col-md-12">
        <div class="form-group float-right card-margin-survey mt-3 mb-5">
            <button class="btn btn-light waves-effect waves-light text-size btn-cari" id="return" name="return" class="btn" type="button"><b>Return</b></button>
            <button class="btn btn-primary waves-effect waves-light submit text-size ml-1" type="submit" name="process"><b>Score</b></button>
        </div>
    </div>
</div>


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
    $('.konsumen-up, .pembiayaan-up, .kondisi-up, .kapasitas-up, .aset-up, .konfirmasi-up, .jaminan-up, .religi-up, .lampiran-up')
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

    function lampirandownFunction() {
        $('.lampiran-down').hide();
        $('.lampiran-up').show();
    }

    function lampiranupFunction() {
        $('.lampiran-up').hide();
        $('.lampiran-down').show();
    }
</script>
<!-- btn -->

<!-- Script untuk ajax autosave data ke table fs_konsumen -->
<!-- autosave ketika setiap user mengetik -->
<script>
    $(document).ready(function() {
        var id_leads = $("#id_leads").val();


        //menyimpan data secara AJAX
        $("form#fs_konsumen").on("blur", "input, select, textarea", function() {
            var selector = ($(this).attr('name'));
            var spinner = $("[data-selector='" + selector + "']");
            console.log(selector);
            $.ajax({
                url: '<?= base_url() ?>' + 'fs_konsumen/update/',
                type: 'POST',
                data: $("form#fs_konsumen").serialize(),
                dataType: 'json',
                beforeSend: function() {
                    // console.log('LOADING')
                    if (spinner.length == 0) {
                        $("[name='" + selector + "']").after(
                            `<div class="spinner-border spinner-border-sm mt-1 text-primary" data-selector="${selector}"><span class="sr-only">Loading...</span></div>`
                        )
                    }
                },
                success: function(data) {
                    var spinner = $("[data-selector='" + selector + "']");
                    setTimeout(function() {
                        spinner.fadeOut('slow', function() {
                            spinner.remove()
                        })
                    }, 500);
                }
            })
        })
    })
</script>

<!-- return form konsumen -->
<script>
    $('#return').click(function() {
        var data = $("#id_leads").val();

        var conf = confirm('Apakah Anda yakin ingin mengembalikan data form survey ini ke CMS?');


        if (conf) {
            // alert('alert')
            $.ajax({
                url: '<?= base_url() ?>' + 'fs_konsumen/return_fs/',
                type: 'POST',
                data: {
                    data: data
                },
                dataType: 'json',
                success: function(data) {
                    alert('success')
                }
            })
        }
    })
</script>

<!-- Jika Head/Manager, maka disable semua form inputan -->
<script>
    var level = $("#level").val()
    if (level == '2' || level == '3') {
        $("input, select, textarea").attr('disabled', 'disabled');
    }
</script>

<script>
    function sum(hitung, hasil) {
        var total = 0;
        $(hitung).each(function() {
            if ($(this).val() == '') {
                $(this).val('0')
                $(this)[0].setSelectionRange(0, 1)
            }
            console.log($(this).val());
            total = total + parseInt($(this).val().replace(",", ""));
        })
        $(hasil).val(total);
    }

    function average(hitung, hasil) {
        var total = 0;
        var jumlah_field = 0;
        $(hitung).each(function() {
            jumlah_field++;
            if ($(this).val() == '') {
                $(this).val('0')
                $(this)[0].setSelectionRange(0, 1)
            }
            total = total + parseInt($(this).val().replace(",", ""));
        })
        $(hasil).val(total / jumlah_field);
    }
    // tanggungan karyawan
    $(".tanggungan-karyawan").on("click keyup", function() {
        sum(".tanggungan-karyawan", "#condition_karyawan_tanggungan_total")
    })

    // tanggungan wiraswasta
    $(".tanggungan-wiraswasta").on("click keyup", function() {
        sum(".tanggungan-wiraswasta", "#condition_wir_tanggungan_total")
    })

    // mutasi wiraswasta
    $(".wiraswasta-mutasi").on("click keyup", function() {
        average(".wiraswasta-mutasi", "#capacity_wir_avr_mutasi")
    })
    // nota wiraswasta
    $(".wiraswasta-nota").on("click keyup", function() {
        average(".wiraswasta-nota", "#capacity_wir_avr_nota")
    })

    //pendapatan karyawan (capacity)
    $(".pendapatan-karyawan").on("click keyup", function() {
        sum(".pendapatan-karyawan", "#capacity_karyawan_total_net_income")
    })
    //pendapatan periodik karyawan (capacity)
    $(".pendapatan-periodik-karyawan").on("click keyup", function() {
        sum(".pendapatan-periodik-karyawan", "#capacity_karyawan_total_bonus")
    })

    //pendapatan karyawan lainnya (capacity)
    $(".pendapatan-karyawan-lainnya").on("click keyup", function() {
        sum(".pendapatan-karyawan-lainnya", "#capacity_karyawan_total_income_lainnya")
    })

    //pengeluaran karyawan (capacity)
    $(".pengeluaran-karyawan").on("click keyup", function() {
        sum(".pengeluaran-karyawan", "#capacity_karyawan_total_biaya_outcome")
    })

    //pengeluaran karyawan (capacity)
    $(".pengeluaran-wiraswasta").on("click keyup", function() {
        sum(".pengeluaran-wiraswasta", "#capacity_wir_total_biaya_outcome")
    })

    //hutang karyawan (capacity)
    $(".hutang-karyawan").on("click keyup", function() {
        sum(".hutang-karyawan", "#capacity_karyawan_total_hutang")
    })

    //Aset konsumen (capital)
    $(".aset-konsumen").on("click keyup", function() {
        sum(".aset-konsumen", "#capital_total_aset")
    })
</script>