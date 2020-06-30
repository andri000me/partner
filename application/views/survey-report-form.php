<button class="btn btn-secondary" onclick="topFunction()" id="myBtn" title="Go to top" style="right: 10px;"><i class="fas fa-angle-up"></i></button>
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
            <div class="topcaption">
                <p class="captionalert"><i class="fas fa-info-circle fa-lg"></i> &nbsp;&nbsp;<b>Hati - hati dalam
                        menginput data</b></p>
                <p class="captiontext">Dilarang memalsukan data dan menginput data - data yang bukan milik konsumen.
                    Data ini akan disimpan sebagai <b>Leads Prospect</b> dan akan dilanjutkan dengan
                    mengisi <b>Form verifikasi dan Survey.</b> Data ini akan diteruskan ke head di
                    cabang kemudian diassign ke CMS diisi datanya dengan lengkap.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3 web">
        <div class="card-margin-left" id="leftcaption">
            <div class="mt-1 ml-5">
                <p class="gede"><b>Yang harus Diisi</b></p>

                <p class="mt-3 mb-0 sedeng">Data Diri</p>
                <p class="mb-2 personal-sudah kecil"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <!-- <p class="mb-2 personal-belum kecil"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p> -->

                <p class="mb-0 sedeng">Tujuan & Struktur</p>
                <p class="mb-2 detail-sudah kecil"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <!-- <p class="mb-2 detail-belum kecil"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p> -->

                <p class="mb-0 sedeng">Kondisi & Aset</p>
                <p class="mb-2 product-sudah kecil"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <!-- <p class="mb-2 product-belum kecil"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p> -->

                <p class="mb-0 sedeng">Kapasitas</p>
                <p class="mb-2 branch-sudah kecil"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <!-- <p class="mb-2 branch-belum kecil"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p> -->

                <p class="mb-0 sedeng">karakter</p>
                <p class="mb-2 branch-sudah kecil"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <!-- <p class="mb-2 branch-belum kecil"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p> -->

                <p class="mb-0 sedeng">Jaminan</p>
                <p class="mb-2 branch-sudah kecil"><i class="fas fa-check-circle text-success"></i>&nbsp;&nbsp;&nbsp;Data
                    Lengkap</p>
                <!-- <p class="mb-2 branch-belum kecil"><i class="fas fa-times-circle text-danger"></i>&nbsp;&nbsp;&nbsp;Data
                    Belum
                    Lengkap</p> -->

                <p class="gede mt-4"><b>Documents</b></p>

                <p class="mb-2 kecil"><a href="#"><i class="far fa-file-archive"></i>&nbsp;&nbsp;&nbsp;Download Semua Dokumen</a></p>
            </div>

        </div>

    </div>

    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-custom card-margin-survey" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-size active" data-toggle="tab" href="#nav-konsumen" role="tab">
                            <span class="d-block d-sm-none" id="btn-konsumen"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block" id="btn-konsumen">Data Diri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-size" data-toggle="tab" href="#nav-pembiayaan" role="tab">
                            <span class="d-block d-sm-none" id="btn-pembiayaan" onclick="ExistingLogic()"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block" id="btn-pembiayaan" onclick="ExistingLogic()">Tujuan & Struktur</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-size" data-toggle="tab" href="#nav-kondisi" role="tab">
                            <span class="d-block d-sm-none" id="btn-kondisi"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block" id="btn-kondisi">Kondisi & Aset</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-size" data-toggle="tab" href="#nav-kapasitas" role="tab">
                            <span class="d-block d-sm-none" id="btn-kapasitas"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block" id="btn-kapasitas">Kapasitas</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-size" data-toggle="tab" href="#nav-karakter" role="tab">
                            <span class="d-block d-sm-none" id="btn-karakter"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block" id="btn-karakter">Karakter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-size" data-toggle="tab" href="#nav-jaminan" role="tab">
                            <span class="d-block d-sm-none" id="btn-jaminan"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block" id="btn-jaminan">Jaminan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-size" data-toggle="tab" href="#nav-religi" role="tab">
                            <span class="d-block d-sm-none" id="btn-religi"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block" id="btn-religi">Religi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-size" data-toggle="tab" href="#nav-score" role="tab">
                            <span class="d-block d-sm-none" id="btn-score"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block" id="btn-score">Score</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-12">
                <div class="tab-content card-margin-survey-right">

                    <!-- Data Konsumen -->
                    <div class="tab-pane active p-3" id="nav-konsumen" role="tabpanel">
                        <form id="leads" action="<?= base_url('leads/update') ?>">
                            <!-- ID Leads -->
                            <input type="hidden" name="id_leads" value="<?= $leads->id_leads ?>">
                            <!-- ID Branch -->
                            <input type="hidden" id="id_branch" value="<?= $leads->id_branch ?>">
                            <div class="card">
                                <div class="card-body text-size">
                                    <h5 class="form-margin"><b>Data Konsumen</b></h5>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control text-size" value="<?= $leads->nama_konsumen ?>" name="nama_konsumen" id="nama_konsumen" placeholder="Ibrahim Ahmad" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Nomor KTP</label>
                                                <input type="phone" class="form-control text-size placement number-only" value="<?= $leads->no_ktp ?>" name="no_ktp" id="no_ktp" minlength="16" maxlength="16" placeholder="0000 0000 0000 0000" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-left">
                                                <label>Nomor Handphone</label>
                                                <input type="text" class="form-control text-size placement number-only" value="<?= $leads->telepon ?>" name="telepon" id="telepon" maxlength="15" placeholder="0000 0000 000" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-center">
                                                <label>Nomor WA</label>
                                                <input type="text" class="form-control text-size placement number-only" value="<?= $leads->nomor_wa ?>" name="nomor_wa" id="" maxlength="15" placeholder="0000 0000 000" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-right">
                                                <label>Email</label>
                                                <input type="email" class="form-control text-size" name="email_konsumen" value="<?= $leads->email_konsumen ?>" id="email_konsumen" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-left">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control text-size" name="tanggal_lahir" id="tanggal_lahir" value="<?= $leads->tanggal_lahir ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group text-size form-center">
                                                <label>Jenis Kelamin</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" <?= $leads->jenis_kelamin == 'Laki - Laki' ? 'checked' : '' ?> id="" value="Laki - Laki">
                                                    <label class="form-check-label">
                                                        Laki - Laki
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_kelamin" <?= $leads->jenis_kelamin == 'Perempuan' ? 'checked' : '' ?> id="" value="Perempuan">
                                                    <label class="form-check-label">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group text-size form-right">
                                                <label>Pekerjaan Konsumen</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="pekerjaan_konsumen" <?= $leads->pekerjaan_konsumen == 'Karyawan' ? 'checked' : '' ?> id="pekerjaan_konsumen" value="Karyawan">
                                                    <label class="form-check-label">
                                                        Karyawan
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pekerjaan_konsumen" <?= $leads->pekerjaan_konsumen == 'Wiraswasta' ? 'checked' : '' ?> id="pekerjaan_konsumen" value="Wiraswasta">
                                                    <label class="form-check-label">
                                                        Wiraswasta
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-left">
                                                <label>Pendidikan</label>
                                                <select class="form-control text-size" name="pendidikan" id="pendidikan">
                                                    <option selected value="">Pilih Kategori Pendidikan</option>
                                                    <option <?= $leads->pendidikan == 'SD' ? 'selected' : '' ?> value="SD">
                                                        SD</option>
                                                    <option <?= $leads->pendidikan == 'SLTP' ? 'selected' : '' ?> value="SLTP">
                                                        SLTP</option>
                                                    <option <?= $leads->pendidikan == 'SMU' ? 'selected' : '' ?> value="SMU">SMU
                                                    </option>
                                                    <option <?= $leads->pendidikan == 'SLTA' ? 'selected' : '' ?> value="SLTA">
                                                        SLTA</option>
                                                    <option <?= $leads->pendidikan == 'STM' ? 'selected' : '' ?> value="STM">STM
                                                    </option>
                                                    <option <?= $leads->pendidikan == 'SMEA' ? 'selected' : '' ?> value="SMEA">
                                                        SMEA</option>
                                                    <option <?= $leads->pendidikan == 'D1' ? 'selected' : '' ?> value="D1">
                                                        D1</option>
                                                    <option <?= $leads->pendidikan == 'D2' ? 'selected' : '' ?> value="D2">
                                                        D2</option>
                                                    <option <?= $leads->pendidikan == 'D3' ? 'selected' : '' ?> value="D3">
                                                        D3</option>
                                                    <option <?= $leads->pendidikan == 'S1' ? 'selected' : '' ?> value="S1">
                                                        S1</option>
                                                    <option <?= $leads->pendidikan == 'S2' ? 'selected' : '' ?> value="S2">
                                                        S2</option>
                                                    <option <?= $leads->pendidikan == 'S3' ? 'selected' : '' ?> value="S3">
                                                        S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-center">
                                                <label>Status Pernikahan</label>
                                                <select class="form-control text-size" name="status_pernikahan" id="status_pernikahan">
                                                    <option selected value="">Pilih Status Pernikahan</option>
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
                                        <div class="col-md-4 pasangan">
                                            <div class="form-group form-right">
                                                <label>Nama Pasangan</label>
                                                <input type="text" class="form-control text-size" name="nama_pasangan" id="nama_pasangan" value="<?= $leads->nama_pasangan ?>" placeholder="Nama Pasangan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
                                                <label>Jenis Konsumen</label>
                                                <select class="form-control text-size" name="jenis_konsumen" id="jenis_konsumen">
                                                    <option value="">Pilih Jenis Konsumen</option>
                                                    <option <?= $leads->jenis_konsumen == 'New Customer' ? 'selected' : '' ?> value="New Customer">New Customer
                                                    </option>
                                                    <option <?= $leads->jenis_konsumen == 'RO Expire' ? 'selected' : '' ?> value="RO Expire">RO Expire</option>
                                                    <option <?= $leads->jenis_konsumen == 'RO Active' ? 'selected' : '' ?> value="RO Active">RO Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row ro-active">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Nomor Kontrak</label>
                                                <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= $leads->nomor_kontrak ?>" minlength="10" maxlength="10" placeholder="0000000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Nama Konsumen</label>
                                                <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= $leads->referral_konsumen ?>" placeholder="Input Nama Konsumen">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-left">
                                                <label>Lokasi Rumah</label>
                                                <select class=" form-control text-size" name="lokasi_rumah" id="lokasi_rumah">
                                                    <option selected value="">Pilih Lokasi Rumah</option>
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
                                        <div class="col-md-4">
                                            <div class="form-group form-center">
                                                <label>Jenis Bangunan Rumah</label>
                                                <select class=" form-control text-size" name="jenis_rumah" id="jenis_rumah">
                                                    <option selected value="">Pilih Kategori Jenis Bangunan Rumah</option>
                                                    <option <?= $leads->jenis_rumah == 'Permanent' ? 'selected' : '' ?> value="Permanent">Permanent</option>
                                                    <option <?= $leads->jenis_rumah == 'Semi Permanent' ? 'selected' : '' ?> value="Semi Permanent">Semi
                                                        Permanent</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-right">
                                                <label>Luas Bangunan Rumah</label>
                                                <select class=" form-control text-size" name="luas_rumah" id="luas_rumah">
                                                    <option selected value="">Pilih Kategori Luas Bangunan Rumah</option>
                                                    <option <?= $leads->luas_rumah == '< 60 M2' ? 'selected' : '' ?> value="< 60 M2">
                                                        < 60 M2</option> <option <?= $leads->luas_rumah == '60 - 100 M2' ? 'selected' : '' ?> value="60 - 100 M2">60 - 100 M2
                                                    </option>
                                                    <option <?= $leads->luas_rumah == '100 - 150 M2' ? 'selected' : '' ?> value="100 - 150 M2">100 - 150 M2
                                                    </option>
                                                    <option <?= $leads->luas_rumah == '> 150 M2' ? 'selected' : '' ?> value="> 150 M2">> 150 M2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Asal Aplikasi</label>
                                                <select class="form-control text-size" name="soa" id="soa">
                                                    <option selected value="">Pilih Asal Aplikasi</option>
                                                    <option <?= $leads->soa == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
                                                    <option <?= $leads->soa == 'EGC' ? 'selected' : '' ?> value="EGC">EGC</option>
                                                    <option <?= $leads->soa == 'CGC' ? 'selected' : '' ?> value="CGC">CGC</option>
                                                    <option <?= $leads->soa == 'Tele Sales' ? 'selected' : '' ?> value="Tele Sales">Tele Sales</option>
                                                    <option <?= $leads->soa == 'CMS' ? 'selected' : '' ?> value="CMS">CMS</option>
                                                    <option <?= $leads->soa == 'Sharia Head' ? 'selected' : '' ?> value="Sharia Head">Sharia Head</option>
                                                    <option <?= $leads->soa == 'HO - Product' ? 'selected' : '' ?> value="HO - Product">HO - Product</option>
                                                    <option <?= $leads->soa == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
                                                    <option <?= $leads->soa == 'Penyedia Jasa / Barang' ? 'selected' : '' ?> value="Penyedia Jasa / Barang">Penyedia Jasa / Barang</option>
                                                    <!-- <option <?= $leads->soa == 'Walk In' ? 'selected' : '' ?> value="Walk In">Walk In</option>
                                                    <option <?= $leads->soa == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                                    <option <?= $leads->soa == 'Tele Marketing' ? 'selected' : '' ?> value="Tele Marketing">Tele Marketing</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Activity Marketing</label>
                                                <select class="form-control text-size" name="activity_marketing" id="activity_marketing">
                                                    <option selected value="">Pilih Kategori Activity Marketing</option>
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
                                        <div class="col-md-12 event">
                                            <div class="form-group form-margin">
                                                <label>Nama Event</label>
                                                <input type="text" class="form-control text-size" name="nama_event" id="nama_event" value="<?= $leads->nama_event ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-agent">
                                            <div class="form-margin">
                                                <label class="gent">Pilih Data Agent</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control text-size" name="nama_agent" id="nama_agent" value="<?= $leads->nama_agent ?>" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Pilih Nama Agent">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary btn-data text-size" type="button" id="btn-data-agent" data-toggle="modal" data-target="#modal-agent"><b>Cari</b></button>
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
                                                    <input type="text" class="form-control text-size" name="nama_partner" id="nama_partner" value="<?= $leads->nama_partner ?>" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Pilih Nama Partner">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary btn-data text-size" type="button" id="btn-data" data-toggle="modal" data-target="#modal-partner"><b>Cari</b></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 nik">
                                            <div class="form-group form-left">
                                                <label>NIK</label>
                                                <input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= $leads->nik_egc ?>" minlength="6" maxlength="7" placeholder="0000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 posisi">
                                            <div class="form-group form-center">
                                                <label>Posisi</label>
                                                <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= $leads->posisi_egc ?>" placeholder="Input Posisi">
                                            </div>
                                        </div>
                                        <div class="col-md-4 cabang">
                                            <div class="form-group form-right">
                                                <label>Cabang</label>
                                                <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= $leads->cabang_egc ?>" placeholder="Input Cabang">
                                            </div>
                                        </div>
                                        <div class="col-md-6 kontrak-ro">
                                            <div class="form-group form-left">
                                                <label>Nomor Kontrak</label>
                                                <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= $leads->nomor_kontrak ?>" minlength="10" maxlength="10" placeholder="0000000000" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 konsumen-ro">
                                            <div class="form-group form-right">
                                                <label>Nama Konsumen</label>
                                                <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= $leads->referral_konsumen ?>" placeholder="Input Nama Konsumen">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group text-size form-left">
                                                <label>Konsumen Cross Branch?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= $leads->cross_branch == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= $leads->cross_branch == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="hide" class="form-group form-right">
                                                <label>Cabang Tujuan</label>
                                                <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                                    <option selected value="">Pilih Cabang Tujuan</option>
                                                    <?php foreach ($branches->result() as $branch) { ?>
                                                        <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                        <option <?= $leads->cabang_cross == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>">
                                                            <?= $branch->nama_cabang ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-margin float-right mt-5">
                                        <button type="button" class="btn btn-primary ml-1 text-size" onclick="document.getElementById('btn-pembiayaan').click()"><b>Selanjutnya</b></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Data Konsumen -->

                    <!-- Tujuan Pembiayaan -->
                    <div class="tab-pane p-3" id="nav-pembiayaan" role="tabpanel">
                        <form method="post" id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>" autocomplete="off">
                            <!-- ID Leads -->
                            <input type="hidden" id="id_leads" name="id_leads" value="<?= $leads->id_leads ?>">
                            <!-- Level -->
                            <input type="hidden" id="level" value="<?= $this->fungsi->user_login()->level ?>">

                            <div class="card">
                                <div class="card-body text-size">
                                    <h5 class="form-margin"><b>Tujuan Pembiayaan</b></h5>

                                    <p class="form-left form-caption">Informasi Pembiayaan</p>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-left">
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
                                        <div class="col-md-4">
                                            <div class="form-group form-center">
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
                                        <div class="col-md-4">
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

                                    <p class="form-left mt-3 mb-4 form-caption">Informasi Harga</p>

                                    <div class="form-margin">
                                        <p>Detail Rencana Angsuran</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Harga Beli Ke
                                                                merchant</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border number-only table-form-medium" name="purpose_harga_beli_ke_merchant" value="<?= $data->purpose_harga_beli_ke_merchant ?>" id="purpose_harga_beli_ke_merchant" data-type="currency" required placeholder="Harga Beli ke Merchant" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <label class="table-lable">Harga
                                                                Jual ke Konsumen</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border number-only" name="purpose_harga_jual_ke_konsumen" value="<?= $data->purpose_harga_jual_ke_konsumen ?>" id="purpose_harga_jual_ke_konsumen" data-type="currency" required placeholder="Harga Jual ke Konsumen" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Uang
                                                                Muka</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_uang_muka" value="<?= $data->purpose_uang_muka ?>" id="purpose_uang_muka" data-type="currency" required placeholder="Uang Muka" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Biaya
                                                                Administrasi</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_biaya_administrasi" value="<?= $data->purpose_biaya_administrasi ?>" id="purpose_biaya_administrasi" data-type="currency" required placeholder="Biaya Administrasi" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Asuransi
                                                                Jiwa</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_asuransi_jiwa" value="<?= $data->purpose_asuransi_jiwa ?>" id="purpose_asuransi_jiwa" data-type="currency" required placeholder="Asuransi Jiwa" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Asuransi
                                                                kendaraan</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_asuransi_kendaraan" value="<?= $data->purpose_asuransi_kendaraan ?>" id="purpose_asuransi_kendaraan" data-type="currency" required placeholder="Asuransi Kendaraan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Total
                                                                Uang Muka</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_total_uang_muka" value="<?= $data->purpose_total_uang_muka ?>" id="purpose_total_uang_muka" data-type="currency" required placeholder="Total Uang Muka" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">NTF Murni</label>
                                                        </th>
                                                        <td><input type="text" class="form-control text-size form-border number-only" name="purpose_ntf_murni" id="purpose_ntf_murni" data-type="currency" required placeholder="NTF Murni" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Lama
                                                                Angsuran</label>
                                                        </th>
                                                        <td>
                                                            <!-- <input type="text" class="form-control text-size form-border number-only" name="purpose_lama_angsuran" value="<?= $data->purpose_lama_angsuran ?>" id="" data-type="currency" required placeholder="Lama Angsuran" /> -->
                                                            <select class="form-control text-size form-border" name="purpose_lama_angsuran" id="purpose_lama_angsuran" required>
                                                                <option selected value="">Pilih Lama Angsuran
                                                                </option>
                                                                <option <?= $data->purpose_lama_angsuran == '3' ? 'selected' : '' ?> value="3">3 Bulan</option>
                                                                <option <?= $data->purpose_lama_angsuran == '6' ? 'selected' : '' ?> value="6">6 Bulan</option>
                                                                <option <?= $data->purpose_lama_angsuran == '12' ? 'selected' : '' ?> value="12">12 Bulan</option>
                                                                <option <?= $data->purpose_lama_angsuran == '18' ? 'selected' : '' ?> value="18">18 Bulan</option>
                                                                <option <?= $data->purpose_lama_angsuran == '24' ? 'selected' : '' ?> value="24">24 Bulan</option>
                                                                <option <?= $data->purpose_lama_angsuran == '36' ? 'selected' : '' ?> value="36">36 Bulan</option>
                                                                <option <?= $data->purpose_lama_angsuran == '48' ? 'selected' : '' ?> value="48">48 Bulan</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><label class="table-lable">Angsuran Per Bulan</label>
                                                        </th>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border number-only" name="purpose_angsuran_per_bulan" value="<?= $data->purpose_angsuran_per_bulan ?>" id="purpose_angsuran_per_bulan" data-type="currency" required placeholder="Angsuran Per Bulan" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <p class="mt-5">Informasikan Harga 3 Sumber Lainnya</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
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
                                                            <input type="text" class="form-control text-size form-border table-form-medium" name="purpose_nama_merchant_1" value="<?= $data->purpose_nama_merchant_1 ?>" id="" placeholder="Nama Merchant / Toko" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-medium" name="purpose_harga_1" value="<?= $data->purpose_harga_1 ?>" id="" placeholder="Harga" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border table-form-medium" name="purpose_alamat_telepon_1" value="<?= $data->purpose_alamat_telepon_1 ?>" id="" placeholder="Alamat / Telepon" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="purpose_nama_merchant_2" value="<?= $data->purpose_nama_merchant_2 ?>" id="" placeholder="Nama Merchant / Toko" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="purpose_harga_2" value="<?= $data->purpose_harga_2 ?>" id="" placeholder="Harga" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="purpose_alamat_telepon_2" value="<?= $data->purpose_alamat_telepon_2 ?>" id="" placeholder="Alamat / Telepon" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="purpose_nama_merchant_3" value="<?= $data->purpose_nama_merchant_3 ?>" id="" placeholder="Nama Merchant / Toko" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="purpose_harga_3" value="<?= $data->purpose_harga_3 ?>" id="" placeholder="Harga" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="purpose_alamat_telepon_3" value="<?= $data->purpose_alamat_telepon_3 ?>" id="" placeholder="Alamat / Telepon" />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group form-margin float-right mt-5">
                                        <button type="button" class="btn btn-secondary text-size" onclick="document.getElementById('btn-konsumen').click()"><b>Kembali</b></button>
                                        <button type="button" class="btn btn-primary text-size ml-1" onclick="document.getElementById('btn-kondisi').click()"><b>Selanjutnya</b></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Tujuan Pembiayaan -->

                    <!-- kondisi konsumen -->
                    <div class="tab-pane p-3" id="nav-kondisi" role="tabpanel">
                        <form method="post" id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>">

                            <!-- kondisi konsumen jika karyawan -->
                            <?php if ($leads->pekerjaan_konsumen == 'Karyawan') { ?>
                                <div class="card">
                                    <div class="card-body text-size">
                                        <h5 class="form-margin"><b>Kondisi Konsumen</b></h5>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group form-left">
                                                    <label>Detail Profesi konsumen</label>
                                                    <select class="form-control text-size" name="condition_karyawan_pekerjaan" id="condition_karyawan_pekerjaan" required>
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
                                                        <!-- <option <?= $data->condition_karyawan_pekerjaan == 'Wiraswasta < 2th' ? 'selected' : '' ?> value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option <?= $data->condition_karyawan_pekerjaan == 'Wiraswasta > 2th' ? 'selected' : '' ?> value="Wiraswasta > 2th">
                                                        Wiraswasta > 2th
                                                </option> -->
                                                        <option <?= $data->condition_karyawan_pekerjaan == 'Profesi Beresiko' ? 'selected' : '' ?> value="Profesi Beresiko">Profesi
                                                            Beresiko</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-right">
                                                    <label>Nama Perusahaan Bekerja</label>
                                                    <input type="text" class="form-control text-size" name="condition_karyawan_tempat_kerja" id="condition_karyawan_tempat_kerja" value="<?= $data->condition_karyawan_tempat_kerja ?>" placeholder="PT BFI Finance Indonesia" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row resiko">
                                            <div class="col-md-12">
                                                <div class="form-group form-margin">
                                                    <label>Penjelasan Profesi Beresiko</label>
                                                    <input type="text" class="form-control text-size" name="condition_karyawan_profesi_beresiko" id="condition_karyawan_profesi_beresiko" value="<?= $data->condition_karyawan_profesi_beresiko ?>" placeholder="Penjelasan Profesi Beresiko" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
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
                                            <div class="col-md-4">
                                                <div class="form-group form-center">
                                                    <label>Lama Bekerja</label>
                                                    <select class="form-control text-size" name="condition_karyawan_lama_bekerja" id="" required>
                                                        <option selected value="">Pilih Lama Bekerja
                                                        </option>
                                                        <option <?= $data->condition_karyawan_lama_bekerja == '0 Tahun - < 3 Tahun' ? 'selected' : '' ?> value="0 Tahun - < 3 Tahun">0 Tahun - < 3 Tahun </option> <option <?= $data->condition_karyawan_lama_bekerja == '> 3 Tahun - < 5 Tahun' ? 'selected' : '' ?> value="> 3 Tahun - < 5 Tahun">> 3 Tahun - < 5 Tahun </option> <option <?= $data->condition_karyawan_lama_bekerja == '> 5 Tahun' ? 'selected' : '' ?> value="> 5 Tahun">> 5 Tahun
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-right">
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
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group form-left">
                                                    <label>Total Karyawan</label>
                                                    <input type="text" class="form-control text-size number-only" name="condition_karyawan_jumlah_karyawan" value="<?= $data->condition_karyawan_jumlah_karyawan ?>" id="" placeholder="5000" required />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-center">
                                                    <label>Tahun Berdiri</label>
                                                    <input type="text" class="form-control text-size number-only placement" name="condition_karyawan_tahun_berdiri" value="<?= $data->condition_karyawan_tahun_berdiri ?>" id="" placeholder="2020" minlength="4" maxlength="4" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-right">
                                                    <label>Pembayaran Gaji Via</label>
                                                    <select class="form-control text-size" name="condition_karyawan_cara_gajian" id="" required>
                                                        <option selected value="">Pilih Metode
                                                        </option>
                                                        <option <?= $data->condition_karyawan_cara_gajian == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                                        <option <?= $data->condition_karyawan_cara_gajian == 'Tranfer' ? 'selected' : '' ?> value="Tranfer">Transfer</option>
                                                        <option <?= $data->condition_karyawan_cara_gajian == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row pasangan-wir">
                                            <div class="col-md-6">
                                                <div class="form-group form-left">
                                                    <label>Pekerjaan Pasangan</label>
                                                    <select class="form-control text-size" name="condition_karyawan_pekerjaan_pasangan" id="condition_karyawan_pekerjaan_pasangan" required>
                                                        <option selected value="">Pilih Pekerjaan
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Ibu Rumah Tangga' ? 'selected' : '' ?> value="Ibu Rumah Tangga">Ibu Rumah Tangga
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Perhutanan' ? 'selected' : '' ?> value="Perhutanan">Perhutanan
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Peternakan & Perikanan' ? 'selected' : '' ?> value="Peternakan & Perikanan">Peternakan &
                                                            Perikanan
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Konstruksi' ? 'selected' : '' ?> value="Konstruksi">Konstruksi
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Jasa' ? 'selected' : '' ?> value="Jasa">Jasa
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Pertanian & Perkebunan' ? 'selected' : '' ?> value="Pertanian & Perkebunan">Pertanian &
                                                            Perkebunan
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Perdagangan Besar' ? 'selected' : '' ?> value="Perdagangan Besar">Perdagangan Besar
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Perdagangan Eceran' ? 'selected' : '' ?> value="Perdagangan Eceran">Perdagangan
                                                            Eceran
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Perdagangan Ekspor-Impor' ? 'selected' : '' ?> value="Perdagangan Ekspor-Impor">Perdagangan
                                                            Ekspor-Impor
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Makanan / Minuman' ? 'selected' : '' ?> value="Makanan / Minuman">Makanan / Minuman
                                                        </option>
                                                        <option <?= $data->condition_karyawan_pekerjaan_pasangan == 'Profesi Beresiko' ? 'selected' : '' ?> value="Profesi Beresiko">Profesi
                                                            Beresiko</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 condition_karyawan_kerja_pasangan">
                                                <div class="form-group form-right">
                                                    <label>Tempat Kerja / Usaha pasangan</label>
                                                    <input type="text" class="form-control text-size" name="condition_karyawan_tempat_kerja_pasangan" id="condition_karyawan_tempat_kerja_pasangan" value="<?= $data->condition_karyawan_tempat_kerja_pasangan ?>" placeholder="Tempat Kerja / Usaha pasangan" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row resiko-pasangan-kar condition_karyawan_beresiko_pasangan">
                                            <div class="col-md-12">
                                                <div class="form-group form-margin">
                                                    <label>Penjelasan Profesi Beresiko</label>
                                                    <input type="text" class="form-control text-size" name="condition_karyawan_profesi_beresiko_pasangan" id="condition_karyawan_profesi_beresiko_pasangan" value="<?= $data->condition_karyawan_profesi_beresiko_pasangan ?>" placeholder="Penjelasan Profesi Beresiko" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-margin">
                                            <p>Jumlah Tanggungan</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
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
                                                        <!-- <tr class="bg-light">
                                                            <th><label class="table-lable">Total Jumlah
                                                                    Tanggungan</label>
                                                            </th>
                                                            <td><input type="number" class="form-control text-size number-only form-border form-radius" name="condition_wir_tanggungan_total" value="<?= $data->condition_wir_tanggungan_total ?>" id="condition_wir_tanggungan_total" required placeholder="Total Jumlah Tanggungan" readonly />
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- kondisi konsumen jika karyawan -->

                            <!-- kondisi konsumen jika wiraswasta -->
                            <?php if ($leads->pekerjaan_konsumen == 'Wiraswasta') { ?>
                                <div class="card">
                                    <div class="card-body text-size">
                                        <h5 class="form-margin"><b>Kondisi Konsumen</b></h5>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group form-left">
                                                    <label>Profesi Konsumen</label>
                                                    <select class="form-control text-size" name="condition_wir_pekerjaan" id="condition_wir_pekerjaan" required>
                                                        <option selected value="">Pilih Pekerjaan
                                                        </option>
                                                        <!-- <option <?= $data->condition_wir_pekerjaan == 'Karyawan Swasta - Tetap' ? 'selected' : '' ?> value="Karyawan Swasta - Tetap">
                                                    Karyawan Swasta - Tetap</option>
                                                <option <?= $data->condition_wir_pekerjaan == 'Karyawan Swasta - Kontrak' ? 'selected' : '' ?> value="Karyawan Swasta - Kontrak">
                                                    Karyawan Swasta - Kontrak</option>
                                                <option <?= $data->condition_wir_pekerjaan == 'PNS / ASN - Tetap' ? 'selected' : '' ?> value="PNS / ASN - Tetap">PNS / ASN -
                                                    Tetap</option>
                                                <option <?= $data->condition_wir_pekerjaan == 'PNS / ASN - Honorer < 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer < 5th">PNS /
                                                    ASN - Honorer < 5th</option> <option <?= $data->condition_wir_pekerjaan == 'PNS / ASN - Honorer > 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                        Honorer > 5th</option> -->
                                                        <option <?= $data->condition_wir_pekerjaan == 'Wiraswasta < 2th' ? 'selected' : '' ?> value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option <?= $data->condition_wir_pekerjaan == 'Wiraswasta > 2th' ? 'selected' : '' ?> value="Wiraswasta > 2th">
                                                                Wiraswasta > 2th
                                                        </option>
                                                        <!-- <option <?= $data->condition_wir_pekerjaan == 'Profesi Beresiko' ? 'selected' : '' ?> value="Profesi Beresiko">Profesi
                                                    Beresiko</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-right">
                                                    <label>Nama Usaha</label>
                                                    <input type=" text" class="form-control text-size" name="condition_wir_nama_usaha" value="<?= $data->condition_wir_nama_usaha ?>" id="" placeholder="PT BFI Syariah indonesia" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group form-left">
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
                                            <div class="col-md-4">
                                                <div class="form-group form-center">
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
                                            <div class="col-md-4">
                                                <div class="form-group form-right">
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
                                            <div class="col-md-4">
                                                <div class="form-group form-left">
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
                                            <div class="col-md-4">
                                                <div class="form-group form-center">
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
                                            <div class="col-md-4">
                                                <div class="form-group form-right">
                                                    <label>Tahun Berdiri</label>
                                                    <input type="text" class="form-control text-size number-only placement" name="condition_wir_tahun_berdiri" value="<?= $data->condition_wir_tahun_berdiri ?>" id="" placeholder="2020" minlength="4" maxlength="4" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group form-left">
                                                    <label>Jumlah Karyawan</label>
                                                    <select class="form-control text-size" name="condition_wir_jumlah_karyawan" id="" required>
                                                        <option selected value="">Pilih Jumlah Karyawan
                                                        </option>
                                                        <option <?= $data->condition_wir_jumlah_karyawan == '1 - 4' ? 'selected' : ''  ?> value="1 - 4"> 1 - 4
                                                        </option>
                                                        <option <?= $data->condition_wir_jumlah_karyawan == '5 - 19' ? 'selected' : ''  ?> value="5 - 19">5 -
                                                            19
                                                        </option>
                                                        <option <?= $data->condition_wir_jumlah_karyawan == '20 - 99' ? 'selected' : ''  ?> value="20 - 99">20 - 99
                                                        </option>
                                                        <option <?= $data->condition_wir_jumlah_karyawan == '100 - 499' ? 'selected' : ''  ?> value="100 - 499">
                                                            100 - 499
                                                        </option>
                                                        <option <?= $data->condition_wir_jumlah_karyawan == '> 500' ? 'selected' : ''  ?> value="> 500">> 500
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-center">
                                                    <label>Metode Pembayaran</label>
                                                    <select class="form-control text-size" name="condition_wir_cara_bayar" id="" required>
                                                        <option selected value="">Pilih Metode Pembayaran
                                                        </option>
                                                        <option <?= $data->condition_wir_cara_bayar == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                                        <option <?= $data->condition_wir_cara_bayar == 'Transfer' ? 'selected' : '' ?> value="Transfer">Transfer</option>
                                                        <option <?= $data->condition_wir_cara_bayar == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-right">
                                                    <label>Kondisi Usaha</label>
                                                    <input type="text" class="form-control text-size" name="condition_wir_kondisi_usaha" value="<?= $data->condition_wir_kondisi_usaha ?>" id="condition_wir_kondisi_usaha" placeholder="Jelaskan Kondisi Usaha Saat ini" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row pasangan-wir">
                                            <div class="col-md-6">
                                                <div class="form-group form-left">
                                                    <label>Pekerjaan Pasangan</label>
                                                    <select class="form-control text-size" name="condition_wir_pekerjaan_pasangan" id="condition_wir_pekerjaan_pasangan" required>
                                                        <option selected value="">Pilih Pekerjaan
                                                        </option>
                                                        <option <?= $data->condition_wir_pekerjaan_pasangan == 'Ibu Rumah Tangga' ? 'selected' : '' ?> value="Ibu Rumah Tangga">
                                                            Ibu Rumah Tangga</option>
                                                        <option <?= $data->condition_wir_pekerjaan_pasangan == 'Karyawan Swasta - Tetap' ? 'selected' : '' ?> value="Karyawan Swasta - Tetap">
                                                            Karyawan Swasta - Tetap</option>
                                                        <option <?= $data->condition_wir_pekerjaan_pasangan == 'Karyawan Swasta - Kontrak' ? 'selected' : '' ?> value="Karyawan Swasta - Kontrak">
                                                            Karyawan Swasta - Kontrak</option>
                                                        <option <?= $data->condition_wir_pekerjaan_pasangan == 'PNS / ASN - Tetap' ? 'selected' : '' ?> value="PNS / ASN - Tetap">PNS / ASN -
                                                            Tetap</option>
                                                        <option <?= $data->condition_wir_pekerjaan_pasangan == 'PNS / ASN - Honorer < 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer < 5th">PNS /
                                                            ASN - Honorer < 5th</option> <option <?= $data->condition_wir_pekerjaan_pasangan == 'PNS / ASN - Honorer > 5th' ? 'selected' : '' ?> value="PNS / ASN - Honorer > 5th">PNS / ASN -
                                                                Honorer > 5th</option>
                                                        <option <?= $data->condition_wir_pekerjaan_pasangan == 'Wiraswasta < 2th' ? 'selected' : '' ?> value="Wiraswasta < 2th">Wiraswasta < 2th</option> <option <?= $data->condition_wir_pekerjaan_pasangan == 'Wiraswasta > 2th' ? 'selected' : '' ?> value="Wiraswasta > 2th">
                                                                Wiraswasta > 2th
                                                        </option>
                                                        <option <?= $data->condition_wir_pekerjaan_pasangan == 'Profesi Beresiko' ? 'selected' : '' ?> value="Profesi Beresiko">Profesi
                                                            Beresiko</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 condition_wir_tempat_pasangan">
                                                <div class="form-group form-right">
                                                    <label>Tempat Kerja / Usaha pasangan</label>
                                                    <input type="text" class="form-control text-size" name="condition_wir_tempat_kerja_pasangan" id="condition_wir_tempat_kerja_pasangan" value="<?= $data->condition_wir_tempat_kerja_pasangan ?>" placeholder="Tempat Kerja / Usaha pasangan" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row resiko-pasangan-wir condition_wir_beresiko_pasangan">
                                            <div class="col-md-12">
                                                <div class="form-group form-margin">
                                                    <label>Penjelasan Profesi Beresiko</label>
                                                    <input type="text" class="form-control text-size" name="condition_wir_profesi_beresiko_pasangan" id="condition_wir_profesi_beresiko_pasangan" value="<?= $data->condition_wir_profesi_beresiko_pasangan ?>" placeholder="Penjelasan Profesi Beresiko" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-margin mt-3">
                                            <p>Jumlah Tanggungan</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
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
                                                        <!-- <tr class="bg-light">
                                                        <th><label class="table-lable">Total Jumlah
                                                                Tanggungan</label>
                                                        </th>
                                                        <td><input type="number" class="form-control text-size number-only form-border" name="condition_wir_tanggungan_total" value="<?= $data->condition_wir_tanggungan_total ?>" id="condition_wir_tanggungan_total" required placeholder="Total Jumlah Tanggungan" readonly />
                                                        </td>
                                                    </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- kondisi konsumen jika wiraswasta -->

                            <!-- Aset Konsumen -->
                            <div class="card">
                                <div class="card-body text-size">
                                    <h5 class="form-margin"><b>Aset Konsumen</b></h5>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Kepemilikan Tempat tinggal Saat ini</label>
                                                <select class="form-control text-size" name="capital_tempat_tinggal_milik" id="" required>
                                                    <option selected value="">Pilih Kategori Kepemilikan
                                                    </option>
                                                    <option <?= $data->capital_tempat_tinggal_milik == 'Milik Sendiri - Lunas' ? 'selected' : '' ?> value="Milik Sendiri - Lunas">Milik Sendiri -
                                                        Lunas</option>
                                                    <option <?= $data->capital_tempat_tinggal_milik == 'Milik Sendiri - Kredit' ? 'selected' : ''  ?> value="Milik Sendiri - Kredit">Milik Sendiri -
                                                        Kredit</option>
                                                    <option <?= $data->capital_tempat_tinggal_milik == 'Milik Keluarga - Lunas' ? 'selected' : ''  ?> value="Milik Keluarga - Lunas">Milik Keluarga -
                                                        Lunas</option>
                                                    <option <?= $data->capital_tempat_tinggal_milik == 'Milik Keluarga - Kredit' ? 'selected' : ''  ?> value="Milik Keluarga - Kredit">Milik Keluarga -
                                                        Kredit</option>
                                                    <option <?= $data->capital_tempat_tinggal_milik == 'Kontrak / Sewa' ? 'selected' : ''  ?> value="Kontrak / Sewa">Kontrak / Sewa</option>
                                                    <option <?= $data->capital_tempat_tinggal_milik == 'Dinas' ? 'selected' : ''  ?> value="Dinas">
                                                        Dinas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Informasi Alamat BKR</label>
                                                <input type="text" class="form-control text-size" name="capital_alamat_bkr" value="<?= $data->capital_alamat_bkr ?>" id="" required placeholder="Informasi Alamat Lengkap" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
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
                                    </div> -->
                                    <div class="form-margin mt-3">
                                        <p>Informasikan Lima Aset Berharga Yang Dimiliki</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <label class="table-form-small">Nama Barang</label>
                                                        </th>
                                                        <th>
                                                            <label class="table-form-small">Status Barang </label>
                                                        </th>
                                                        <th>
                                                            <label class="table-form-small">harga jual Pasar</label>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset1" value="<?= $data->capital_aset1 ?>" id="" required placeholder="Nama Barang" />
                                                        </td>
                                                        <td>
                                                            <select class="form-control text-size form-border" name="capital_status_barang1" id="" required>
                                                                <option selected value="">Pilih Status Barang</option>
                                                                <option <?= $data->capital_status_barang1 == 'Masih Cicilan' ? 'selected' : '' ?> value="Masih Cicilan">Masih Cicilan</option>
                                                                <option <?= $data->capital_status_barang1 == 'Sudah Lunas' ? 'selected' : '' ?> value="Sudah Lunas">Sudah Lunas</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border aset-konsumen" name="capital_harga1" value="<?= $data->capital_harga1 ?>" id="capital_harga1" data-type="currency" required placeholder="Harga Jual Pasar" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset2" value="<?= $data->capital_aset2 ?>" id="" required placeholder="Nama Barang" />
                                                        </td>
                                                        <td>
                                                            <select class="form-control text-size form-border" name="capital_status_barang2" id="" required>
                                                                <option selected value="">Pilih Status Barang</option>
                                                                <option <?= $data->capital_status_barang2 == 'Masih Cicilan' ? 'selected' : '' ?> value="Masih Cicilan">Masih Cicilan</option>
                                                                <option <?= $data->capital_status_barang2 == 'Sudah Lunas' ? 'selected' : '' ?> value="Sudah Lunas">Sudah Lunas</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border aset-konsumen" name="capital_harga2" value="<?= $data->capital_harga2 ?>" id="capital_harga2" data-type="currency" required placeholder="Harga Jual Pasar" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset3" value="<?= $data->capital_aset3 ?>" id="" required placeholder="Nama Barang" />
                                                        </td>
                                                        <td>
                                                            <select class="form-control text-size form-border" name="capital_status_barang3" id="" required>
                                                                <option selected value="">Pilih Status Barang</option>
                                                                <option <?= $data->capital_status_barang3 == 'Masih Cicilan' ? 'selected' : '' ?> value="Masih Cicilan">Masih Cicilan</option>
                                                                <option <?= $data->capital_status_barang3 == 'Sudah Lunas' ? 'selected' : '' ?> value="Sudah Lunas">Sudah Lunas</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border aset-konsumen" name="capital_harga3" value="<?= $data->capital_harga3 ?>" id="capital_harga3" data-type="currency" required placeholder="Harga Jual Pasar" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset4" value="<?= $data->capital_aset4 ?>" id="" required placeholder="Nama Barang" />
                                                        </td>
                                                        <td>
                                                            <select class="form-control text-size form-border" name="capital_status_barang4" id="" required>
                                                                <option selected value="">Pilih Status Barang</option>
                                                                <option <?= $data->capital_status_barang4 == 'Masih Cicilan' ? 'selected' : '' ?> value="Masih Cicilan">Masih Cicilan</option>
                                                                <option <?= $data->capital_status_barang4 == 'Sudah Lunas' ? 'selected' : '' ?> value="Sudah Lunas">Sudah Lunas</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border aset-konsumen" name="capital_harga4" value="<?= $data->capital_harga4 ?>" id="capital_harga4" data-type="currency" required placeholder="Harga Jual Pasar" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="capital_aset5" value="<?= $data->capital_aset5 ?>" id="" required placeholder="Nama Barang" />
                                                        </td>
                                                        <td>
                                                            <select class="form-control text-size form-border" name="capital_status_barang5" id="" required>
                                                                <option selected value="">Pilih Status Barang</option>
                                                                <option <?= $data->capital_status_barang5 == 'Masih Cicilan' ? 'selected' : '' ?> value="Masih Cicilan">Masih Cicilan</option>
                                                                <option <?= $data->capital_status_barang5 == 'Sudah Lunas' ? 'selected' : '' ?> value="Sudah Lunas">Sudah Lunas</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border aset-konsumen" name="capital_harga5" value="<?= $data->capital_harga5 ?>" id="capital_harga5" data-type="currency" required placeholder="Harga Jual Pasar" />
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <td>
                                                            <label>Total Nilai Aset</label>
                                                        </td>
                                                        <td> </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only  form-border form-radius" name="capital_total_aset" value="<?= $data->capital_total_aset ?>" id="capital_total_aset" data-type="currency" required placeholder="Total Nilai Aset" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group form-margin float-right mt-5">
                                        <button type="button" class="btn btn-secondary text-size" onclick="document.getElementById('btn-pembiayaan').click()"><b>Kembali</b></button>
                                        <button type="button" class="btn btn-primary text-size ml-1" onclick="document.getElementById('btn-kapasitas').click()"><b>Selanjutnya</b></button>
                                    </div>
                                </div>
                            </div>
                            <!-- Aset Konsumen -->
                        </form>
                    </div>
                    <!-- kondisi konsumen -->

                    <!-- kapasitas konsumen -->
                    <div class="tab-pane p-3" id="nav-kapasitas" role="tabpanel">
                        <form method="post" id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>">

                            <!-- Kapasitas konsumen jika karyawan -->
                            <?php if ($leads->pekerjaan_konsumen == 'Karyawan') { ?>
                                <div id="kapasitas-karyawan" class="card">
                                    <div class="card-body text-size">
                                        <h5 class="form-margin"><b>Kapasitas Konsumen</b></h5>

                                        <p class="form-margin form-caption">Pendapatan</p>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group form-left">
                                                    <label>Pendapatan Berupa (Gaji)</label>
                                                    <input type="text" class="form-control text-size number-only pendapatan-karyawan" name="capacity_karyawan_income_bruto" value="<?= $data->capacity_karyawan_income_bruto ?>" id="capacity_karyawan_income_bruto" data-type="currency" placeholder="Rp. 000000000" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-right">
                                                    <label>Take Home Pay</label>
                                                    <input type="text" class="form-control text-size number-only pendapatan-karyawan" name="capacity_karyawan_income_thp" value="<?= $data->capacity_karyawan_income_thp ?>" id="capacity_karyawan_income_thp" data-type="currency" placeholder="Rp. 000000000" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group form-margin">
                                                    <label>Apakah Ada Bonus Periodik ?</label><br>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input renovasi" type="radio" name="capacity_karyawan_ada_bonus_periodik" <?= $data->capacity_karyawan_ada_bonus_periodik == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                        <label class="form-check-label">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input renovasi" type="radio" name="capacity_karyawan_ada_bonus_periodik" <?= $data->capacity_karyawan_ada_bonus_periodik == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                        <label class="form-check-label">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-margin mt-3 bonus-periodik ">
                                            <p>Informasi Pendapatan Periodik</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <label class="table-form-medium">Deskripsi</label>
                                                            </th>
                                                            <th>
                                                                <label class="table-form-medium">Periode
                                                                    Bulan</label>
                                                            </th>
                                                            <th>
                                                                <label class="table-form-medium">Nominal</label>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border pendapatan_kar" name="capacity_karyawan_bonus1" value="<?= $data->capacity_karyawan_bonus1 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border pendapatan_kar" name="capacity_karyawan_periode1" value="<?= $data->capacity_karyawan_periode1 ?>" id="" required placeholder="Tuliskan Periode per Tiga Bulan" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_kar" name="capacity_karyawan_nilai1" value="<?= $data->capacity_karyawan_nilai1 ?>" id="capacity_karyawan_nilai1" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border pendapatan_kar" name="capacity_karyawan_bonus2" value="<?= $data->capacity_karyawan_bonus2 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td><input type="text" class="form-control text-size form-border pendapatan_kar" name="capacity_karyawan_periode2" value="<?= $data->capacity_karyawan_periode2 ?>" id="" required placeholder="Tuliskan Periode per Tiga Bulan" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_kar" name="capacity_karyawan_nilai2" value="<?= $data->capacity_karyawan_nilai2 ?>" id="capacity_karyawan_nilai2" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border pendapatan_kar" name="capacity_karyawan_bonus3" value="<?= $data->capacity_karyawan_bonus3 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td><input type="text" class="form-control text-size form-border pendapatan_kar" name="capacity_karyawan_periode3" value="<?= $data->capacity_karyawan_periode3 ?>" id="" required placeholder="Tuliskan Periode per Tiga Bulan" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_kar" name="capacity_karyawan_nilai3" value="<?= $data->capacity_karyawan_nilai3 ?>" id="capacity_karyawan_nilai3" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total Pendapatan Periodik</label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_kar" name="capacity_karyawan_total_bonus" value="<?= $data->capacity_karyawan_total_bonus ?>" id="capacity_karyawan_total_bonus" data-type="currency" required placeholder="Total Pendapatan Periodik" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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

                                        <div class="form-margin mt-3 pendapatan-lainnya">
                                            <p>Informasi pendapatan Lainnya</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <label class="table-form-medium">Deskripsi</label>
                                                            </th>
                                                            <th>
                                                                <label class="table-form-medium">Nominal</label>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border pendapatan_lainnya_kar" name="capacity_karyawan_income_lainnya1" value="<?= $data->capacity_karyawan_income_lainnya1 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_lainnya_kar pendapatan-karyawan pendapatan-karyawan-lainnya" name="capacity_karyawan_nilai_lain1" value="<?= $data->capacity_karyawan_nilai_lain1 ?>" id="capacity_karyawan_nilai_lain1" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border pendapatan_lainnya_kar" name="capacity_karyawan_income_lainnya2" value="<?= $data->capacity_karyawan_income_lainnya2 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_lainnya_kar pendapatan-karyawan pendapatan-karyawan-lainnya" name="capacity_karyawan_nilai_lain2" value="<?= $data->capacity_karyawan_nilai_lain2 ?>" id="capacity_karyawan_nilai_lain2" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <!-- <tr class="bg-light">
                                                            <td>
                                                                <label>Total Pendapatan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_karyawan_total_income_lainnya" value="<?= $data->capacity_karyawan_total_income_lainnya ?>" id="capacity_karyawan_total_income_lainnya" data-type="currency" required placeholder="Nominal 2" readonly />
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group form-left">
                                                    <label>Saldo Rekening Saat ini</label>
                                                    <input type="text" class="form-control text-size number-only" name="capacity_karyawan_saldo_rekening" value="<?= $data->capacity_karyawan_saldo_rekening ?>" id="capacity_karyawan_saldo_rekening" data-type="currency" placeholder="Rp. 000000000" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-center">
                                                    <label>Pendapatan Pasangan</label>
                                                    <input type="text" class="form-control text-size number-only" name="capacity_karyawan_income_pasangan" value="<?= $data->capacity_karyawan_income_pasangan ?>" id="capacity_karyawan_income_pasangan" data-type="currency" placeholder="Rp. 000000000" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-right">
                                                    <label>Total Pendapatan</label>
                                                    <input type="text" class="form-control text-size number-only" name="capacity_karyawan_total_net_income" value="<?= $data->capacity_karyawan_total_net_income ?>" id="capacity_karyawan_total_net_income" data-type="currency" placeholder="Rp. 000000000" readonly />
                                                </div>
                                            </div>
                                        </div>

                                        <p class="form-margin form-caption mt-3">Pengeluaran</p>

                                        <div class="form-margin">
                                            <p>Informasikan pengeluaran</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-medium">Biaya
                                                                    pendidikan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-karyawan table-form-medium" name="capacity_karyawan_outcome_pendidikan" value="<?= $data->capacity_karyawan_outcome_pendidikan ?>" id="capacity_karyawan_outcome_pendidikan" data-type="currency" required placeholder="Biaya
																					pendidikan" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya
                                                                    Rumah
                                                                    Tangga</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-karyawan" name="capacity_karyawan_outcome_rumah" value="<?= $data->capacity_karyawan_outcome_rumah ?>" id="capacity_karyawan_outcome_rumah" data-type="currency" required placeholder="Biaya Rumah
																					Tangga" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya
                                                                    Internet / Pulsa / Listrik</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-karyawan" name="capacity_karyawan_outcome_listrik" value="<?= $data->capacity_karyawan_outcome_listrik ?>" id="capacity_karyawan_outcome_listrik" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya Lain
                                                                    - Lain</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-karyawan" name="capacity_karyawan_outcome_lainnya" value="<?= $data->capacity_karyawan_outcome_lainnya ?>" id="capacity_karyawan_outcome_lainnya" data-type="currency" required placeholder="Biaya Lain - Lain" />
                                                            </td>
                                                        </tr>
                                                        <!-- <tr class="bg-light">
                                                            <td>
                                                                <label>Total
                                                                    Pengeluaran</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_karyawan_total_outcome" value="<?= $data->capacity_karyawan_total_biaya_outcome ?>" id="capacity_karyawan_total_biaya_outcome" data-type="currency" required placeholder="Total Pengeluaran" readonly />
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group form-left">
                                                    <label>Total Pengeluaran</label>
                                                    <input type="text" class="form-control text-size number-only" name="capacity_karyawan_total_outcome" value="<?= $data->capacity_karyawan_total_outcome ?>" id="capacity_karyawan_total_outcome" data-type="currency" placeholder="Rp. 000000000" readonly />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-right">
                                                    <label>Kelebihan Pendapatan</label>
                                                    <input type="text" class="form-control text-size number-only" name="capacity_karyawan_kelebihan_net_income" value="<?= $data->capacity_karyawan_kelebihan_net_income ?>" id="capacity_karyawan_kelebihan_net_income" data-type="currency" placeholder="Rp. 000000000" readonly />
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

                                        <div class="form-margin mt-3 hutang-lainnya">
                                            <p>Informasikan hutang lainnya</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <label class="table-form-medium">Deskripsi</label>
                                                            </th>
                                                            <th>
                                                                <label class="table-form-medium">Nominal</label>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border hutang_lainnya_kar" name="capacity_karyawan_hutang1" value="<?= $data->capacity_karyawan_hutang1 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang_lainnya_kar hutang-karyawan" name="capacity_karyawan_nilai_hutang1" value="<?= $data->capacity_karyawan_nilai_hutang1 ?>" id="capacity_karyawan_nilai_hutang1" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border hutang_lainnya_kar" name="capacity_karyawan_hutang2" value="<?= $data->capacity_karyawan_hutang2 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang_lainnya_kar hutang-karyawan" name="capacity_karyawan_nilai_hutang2" value="<?= $data->capacity_karyawan_nilai_hutang2 ?>" id="capacity_karyawan_nilai_hutang2" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border hutang_lainnya_kar" name="capacity_karyawan_hutang3" value="<?= $data->capacity_karyawan_hutang3 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang_lainnya_kar hutang-karyawan" name="capacity_karyawan_nilai_hutang3" value="<?= $data->capacity_karyawan_nilai_hutang3 ?>" id="capacity_karyawan_nilai_hutang3" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <!-- <tr class="bg-light">
                                                            <td>
                                                                <label>Total Hutang</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_karyawan_total_hutang" value="<?= $data->capacity_karyawan_total_hutang ?>" id="capacity_karyawan_total_hutang" data-type="currency" required placeholder="Total Hutang" readonly />
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group form-margin float-right mt-5">
                                            <button type="button" class="btn btn-secondary text-size" onclick="document.getElementById('btn-kondisi').click()"><b>Kembali</b></button>
                                            <button type="button" class="btn btn-primary text-size ml-1" onclick="document.getElementById('btn-karakter').click()"><b>Selanjutnya</b></button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- kapasitas konsumen jika karyawan -->

                            <!-- Kapasitas konsumen jika Wiraswasta -->
                            <?php if ($leads->pekerjaan_konsumen == 'Wiraswasta') { ?>
                                <div class="card">
                                    <div class="card-body text-size">
                                        <h5 class="form-margin"><b>Kapasitas Konsumen</b></h5>

                                        <p class="form-margin mt-3 form-caption">Pendapatan</p>

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

                                        <div class="form-margin mt-3">
                                            <div class="rekening">
                                                <p>Informasikan Kredit Rekening</p>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <label class="table-form-medium">Mutasi Keredit
                                                                        Bulan Pertama</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-size number-only form-border kredit_wir wiraswasta-mutasi table-form-medium" name="capacity_wir_mutasi1" value="<?= $data->capacity_wir_mutasi1 ?>" id="capacity_wir_mutasi1" data-type="currency" required placeholder="Bulan Pertama" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label>Mutasi Keredit
                                                                        Bulan Kedua</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-size number-only form-border kredit_wir wiraswasta-mutasi" name="capacity_wir_mutasi2" value="<?= $data->capacity_wir_mutasi2 ?>" id="capacity_wir_mutasi2" data-type="currency" required placeholder="Bulan Kedua" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label>Mutasi Keredit
                                                                        Bulan Ketiga</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-size number-only form-border kredit_wir wiraswasta-mutasi" name="capacity_wir_mutasi3" value="<?= $data->capacity_wir_mutasi3 ?>" id="capacity_wir_mutasi3" data-type="currency" required placeholder="Bulan Ketiga" />
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-light">
                                                                <td>
                                                                    <label>Average
                                                                        Kredit</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-size number-only form-border kredit_wir" name="capacity_wir_avr_mutasi" value="<?= $data->capacity_wir_avr_mutasi ?>" id="capacity_wir_avr_mutasi" data-type="currency" required placeholder="Average Kredit" readonly />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="nota">
                                                <p>Informasikan Total Nilai Nota</p>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <label class="table-form-medium">Total Nota
                                                                        Bulan Pertama</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-size number-only form-border nota_wir wiraswasta-nota table-form-medium" name="capacity_wir_nota1" value="<?= $data->capacity_wir_nota1 ?>" id="capacity_wir_nota1" data-type="currency" required placeholder="Bulan Pertama" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label>Total Nota
                                                                        Bulan Kedua</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-size number-only form-border nota_wir wiraswasta-nota" name="capacity_wir_nota2" value="<?= $data->capacity_wir_nota2 ?>" id="capacity_wir_nota2" data-type="currency" required placeholder="Bulan Kedua" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <label>Total Nota
                                                                        Bulan Ketiga</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-size number-only form-border nota_wir wiraswasta-nota" name="capacity_wir_nota3" value="<?= $data->capacity_wir_nota3 ?>" id="capacity_wir_nota3" data-type="currency" required placeholder="Bulan Ketiga" />
                                                                </td>
                                                            </tr>
                                                            <tr class="bg-light">
                                                                <td>
                                                                    <label>Average
                                                                        Kredit</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control text-size number-only form-border nota_wir" name="capacity_wir_avr_nota" value="<?= $data->capacity_wir_avr_nota ?>" id="capacity_wir_avr_nota" data-type="currency" required placeholder="Average Kredit" readonly />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-margin mt-3">
                                            <p>Biaya Operasional</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-medium">Biaya Sewa
                                                                    (Jika sewa)</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border table-form-medium" name="capacity_wir_sewa" value="<?= $data->capacity_wir_sewa ?>" id="capacity_wir_sewa" data-type="currency" required placeholder="Biaya
																				Sewa" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Gaji Karyawan
                                                                    Perbulan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_payroll" value="<?= $data->capacity_wir_payroll ?>" id="capacity_wir_payroll" data-type="currency" required placeholder="Gaji Karyawan
																				Perbulan" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya
                                                                    Internet / Pulsa / Listrik</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_internet" value="<?= $data->capacity_wir_internet ?>" id="capacity_wir_internet" data-type="currency" required placeholder="Biaya
																				Internet / Pulsa / Listrik" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya
                                                                    lainnya</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_lainnya" value="<?= $data->capacity_wir_lainnya ?>" id="capacity_wir_lainnya" data-type="currency" required placeholder="Biaya lainny" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Presentase
                                                                    Profit Margin</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_profit_margin" value="<?= $data->capacity_wir_profit_margin ?>" id="capacity_wir_profit_margin" data-type="currency" required placeholder="Presentase
																				Profit Margin" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total Biaya
                                                                    Operasional</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_operasional" value="<?= $data->capacity_wir_total_operasional ?>" id="capacity_wir_total_operasional" data-type="currency" required placeholder="Total Biaya Operasional" readonly />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total
                                                                    Pendapatan Omset</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_income" value="<?= $data->capacity_wir_total_income ?>" id="capacity_wir_total_income" data-type="currency" required placeholder="Total Pendapatan Omset" readonly />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total Nett
                                                                    Profit</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border total-pendapatan-wiraswasta" name="capacity_wir_total_net_profit" value="<?= $data->capacity_wir_total_net_profit ?>" id="capacity_wir_total_net_profit" data-type="currency" required placeholder="Total Nett Profit" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group form-margin">
                                                    <label>Saldo Rekening Saat Ini</label>
                                                    <input type="text" class="form-control text-size number-only" name="" value="" id="" data-type="currency" placeholder="Rp. 000000000" required />
                                                </div>
                                            </div>
                                        </div>

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

                                        <div class="form-margin mt-3 pendapatan-lainnya-wir">
                                            <p>Informasi pendapatan Lainnya</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
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
                                                        <!-- <tr>
                                                            <td>
                                                                <label class="table-lable">Saldo Rekening Saat Ini</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan-wiraswasta-lainnya" name="" value="" id="" data-type="currency" required placeholder="Rp. 000000000" />
                                                            </td>
                                                        </tr> -->
                                                        <tr>
                                                            <td>
                                                                <label class="table-lable">Pendapatan Pasangan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_lain_wir pendapatan-wiraswasta-lainnya" name="capacity_wir_income_pasangan" value="<?= $data->capacity_wir_income_pasangan ?>" id="capacity_wir_income_pasangan" data-type="currency" required placeholder="Rp. 000000000" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border pendapatan_lain_wir" name="capacity_wir_income_lain1" value="<?= $data->capacity_wir_income_lain1 ?>" id="" required placeholder="Pendapatan Lainnya" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_lain_wir pendapatan-wiraswasta-lainnya" name="capacity_wir_nilai_lain1" value="<?= $data->capacity_wir_nilai_lain1 ?>" id="capacity_wir_nilai_lain1" data-type="currency" required placeholder="Rp. 000000000" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border pendapatan_lain_wir" name="capacity_wir_income_lain2" value="<?= $data->capacity_wir_income_lain2 ?>" id="" required placeholder="Pendapatan lainnya" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_lain_wir pendapatan-wiraswasta-lainnya" name="capacity_wir_nilai_lain2" value="<?= $data->capacity_wir_nilai_lain2 ?>" id="capacity_wir_nilai_lain2" data-type="currency" required placeholder="Rp. 000000000" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total Pendapatan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pendapatan_lain_wir form-radius" name="capacity_wir_total_lain" value="<?= $data->capacity_wir_total_lain ?>" id="capacity_wir_total_lain" data-type="currency" required placeholder="Total Pendapatan Periodik" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <p class="form-margin mt-3 form-caption">Pengeluaran</p>

                                        <div class="form-margin mt-3">
                                            <p>Informasikan pengeluaran</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-medium">Biaya
                                                                    pendidikan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-wiraswasta table-form-medium" name="capacity_wir_outcome_pendidikan" value="<?= $data->capacity_wir_outcome_pendidikan ?>" id="capacity_wir_outcome_pendidikan" data-type="currency" required placeholder="Biaya
																					pendidikan" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya
                                                                    Rumah
                                                                    Tangga</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-wiraswasta" name="capacity_wir_outcome_rumah_tangga" value="<?= $data->capacity_wir_outcome_rumah_tangga ?>" id="capacity_wir_outcome_rumah_tangga" data-type="currency" required placeholder="Biaya Rumah
																					Tangga" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya
                                                                    Internet / Pulsa / Listrik</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border pengeluaran-wiraswasta" name="capacity_wir_outcome_internet" value="<?= $data->capacity_wir_outcome_internet ?>" id="capacity_wir_outcome_internet" data-type="currency" required placeholder="Biaya
																					Internet / Pulsa / Listrik" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya Lain
                                                                    - Lain</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_outcome_lainnya" value="<?= $data->capacity_wir_outcome_lainnya ?>" id="capacity_wir_outcome_lainnya" data-type="currency" required placeholder="Biaya Lain - Lain" />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total
                                                                    Pengeluaran</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border form-radius" name="capacity_wir_total_biaya_outcome" value="<?= $data->capacity_wir_total_biaya_outcome ?>" id="capacity_wir_total_biaya_outcome" data-type="currency" required placeholder="Total Pengeluaran" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group form-margin">
                                                    <label>Sisa Pendapatan</label>
                                                    <input type="text" class="form-control text-size number-only" name="capacity_wir_nett_income" value="<?= $data->capacity_wir_nett_income ?>" id="capacity_wir_nett_income" data-type="currency" placeholder="Rp. 000000000" readonly />
                                                </div>
                                            </div>
                                        </div>

                                        <div class=" form-row">
                                            <div class="col-md-6">
                                                <div class="form-group form-margin">
                                                    <label>Apakah ada Hutang ditempat lain ?</label><br>
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

                                        <div class="form-margin mt-3 hutang-lainnya-wir">
                                            <p>Informasikan hutang lainnya</p>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <label class="table-form-medium">Deskripsi</label>
                                                            </th>
                                                            <th>
                                                                <label class=" table-form-medium">Nominal</label>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border hutang_lainnya_wir" name="capacity_wir_hutang1" value="<?= $data->capacity_wir_hutang1 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang_lainnya_wir hutang-wiraswasta" name="capacity_wir_nilai_hutang1" value="<?= $data->capacity_wir_nilai_hutang1 ?>" id="" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border hutang_lainnya_wir" name="capacity_wir_hutang2" value="<?= $data->capacity_wir_hutang2 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang_lainnya_wir hutang-wiraswasta" name="capacity_wir_nilai_hutang2" value="<?= $data->capacity_wir_nilai_hutang2 ?>" id="" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control text-size form-border hutang_lainnya_wir" name="capacity_wir_hutang3" value="<?= $data->capacity_wir_hutang3 ?>" id="" required placeholder="Deskripsi" />
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border hutang_lainnya_wir hutang-wiraswasta" name="capacity_wir_nilai_hutang3" value="<?= $data->capacity_wir_nilai_hutang3 ?>" id="" data-type="currency" required placeholder="Nominal" />
                                                            </td>
                                                        </tr>
                                                        <!-- <tr>
                                                    <td>
                                                        <label>Total hutang</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_hutang" value="<?= $data->capacity_wir_total_hutang ?>" id="capacity_wir_total_hutang" data-type="currency" required placeholder="Total hutang" readonly />
                                                    </td>
                                                </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- kapasitas konsumen jika Wiraswasta -->

                            <!-- infomasi omset -->
                            <?php if ($leads->pekerjaan_konsumen == 'Wiraswasta') { ?>
                                <div class="card">
                                    <div class="card-body text-size">
                                        <h5 class="form-margin mb-4"><b>Informasi Omset Konsumen</b></h5>

                                        <div class=" form-row">
                                            <div class="col-md-6">
                                                <div class="form-group form-margin">
                                                    <label>Apakah ada analisa kapasitas konsumen dari omset
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

                                        <div class="form-margin mt-3 omset-penjualan">
                                            <p>Nilai Omset</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-medium">Omset
                                                                    Perhari</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border omset_wir table-form-medium" name="capacity_wir_usaha_omset_perhari" value="<?= $data->capacity_wir_usaha_omset_perhari ?>" id="capacity_wir_usaha_omset_perhari" data-type="currency" required placeholder="Omset Perhari" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Jumlah
                                                                    Hari Buka Usaha</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border omset_wir" name="capacity_wir_usaha_jumlah_hari_buka" value="<?= $data->capacity_wir_usaha_jumlah_hari_buka ?>" id="capacity_wir_usaha_jumlah_hari_buka" required placeholder="Jumlah Hari Buka Usaha" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Omset per
                                                                    bulan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border omset_wir" name="capacity_wir_usaha_omset_perbulan" value="<?= $data->capacity_wir_usaha_omset_perbulan ?>" id="capacity_wir_usaha_omset_perbulan" data-type="currency" readonly required placeholder="Omset per bulan" />
                                                            </td>
                                                        </tr>
                                                        <!-- <tr class="bg-light">
                                                    <td>
                                                        <label>Total
                                                            Omset</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_total_omset" value="<?= $data->capacity_wir_total_omset ?>" id="capacity_wir_total_omset" data-type="currency" required placeholder="Total Omset" readonly />
                                                    </td>
                                                </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="form-margin mt-3">
                                            <p>Biaya Operasional</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label class="table-form-medium">Biaya Sewa (Jika Sewa)</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border table-form-medium" name="" value="" id="capacity_wir_sewa_duplicate" data-type="currency" readonly placeholder="Rp. 000000000" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Gaji Karyawan Perbulan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="" value="" id="capacity_wir_payroll_duplicate" data-type="currency" readonly placeholder="Rp. 000000000" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya Listrik / Internet / Pulsa</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="" value="" id="capacity_wir_internet_duplicate" data-type="currency" readonly placeholder="Rp. 000000000" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Biaya Lainnya</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="" value="" id="capacity_wir_lainnya_duplicate" data-type="currency" readonly placeholder="Rp. 000000000" />
                                                            </td>
                                                        </tr>
                                                        <!-- <tr class="bg-light">
                                                            <td>
                                                                <label class="table-form-medium">Total Biaya Operasional</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border table-form-medium" name="" value="" id="" data-type="currency" required placeholder="Rp. 000000000" readonly />
                                                            </td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-margin mt-3">
                                            <p>Hasil Omset</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Gross Profit</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="capacity_wir_gross_profit" value="<?= $data->capacity_wir_gross_profit ?>" id="capacity_wir_gross_profit" data-type="currency" required placeholder="Rp. 000000000" readonly />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label class="table-form-medium">Presentase Profit margin (%)</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border table-form-medium" name="" value="" id="capacity_wir_profit_margin_duplikat" data-type="currency" required placeholder="Rp. 000000000" readonly />
                                                            </td>
                                                        </tr>
                                                        <tr class="bg-light">
                                                            <td>
                                                                <label>Total Nett Profit</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="" value="" id="capacity_wir_total_net_profit_duplikat" data-type="currency" required placeholder="Rp. 000000000" readonly />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group form-margin float-right mt-5">
                                            <button type="button" class="btn btn-secondary text-size" onclick="document.getElementById('btn-kondisi').click()"><b>Kembali</b></button>
                                            <button type="button" class="btn btn-primary text-size ml-1" onclick="document.getElementById('btn-karakter').click()"><b>Selanjutnya</b></button>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- infomasi omset -->

                        </form>
                    </div>
                    <!-- kapasitas konsumen -->

                    <!-- konfirmasi karakter -->
                    <div class="tab-pane p-3" id="nav-karakter" role="tabpanel">
                        <form method="post" id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>">

                            <div class="card">
                                <div class="card-body text-size">
                                    <h5 class="form-margin mb-4"><b>Konfirmasi Karakter</b></h5>

                                    <div class="form-margin mt-3">
                                        <div class="table-responsive">
                                            <p>Informasikan Data Karakter</p>
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <label class="table-form-medium">Nama</label>
                                                        </th>
                                                        <th>
                                                            <label class="table-form-medium">Nomor Telepon</label>
                                                        </th>
                                                        <th>
                                                            <label class="table-form-medium">Hubungan</label>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="character_nama1" value="<?= $data->character_nama1 ?>" id="" placeholder="Nama" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="character_no_telp1" value="<?= $data->character_no_telp1 ?>" id="" placeholder="Nomor Telepon" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="character_hubungan1" value="<?= $data->character_hubungan1 ?>" id="" placeholder="Hubungan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="character_nama2" value="<?= $data->character_nama2 ?>" id="" placeholder="Nama" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="character_no_telp2" value="<?= $data->character_no_telp2 ?>" id="" placeholder="Nomor Telepon" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="character_hubungan2" value="<?= $data->character_hubungan2 ?>" id="" placeholder="Hubungan" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="character_nama3" value="<?= $data->character_nama3 ?>" id="" placeholder="Nama" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size number-only form-border" name="character_no_telp3" value="<?= $data->character_no_telp3 ?>" id="" placeholder="Nomor Telepon" />
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control text-size form-border" name="character_hubungan3" value="<?= $data->character_hubungan3 ?>" id="" placeholder="Hubungan" />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group form-margin">
                                        <label>Informasikan Hasil kredit Checking</label>
                                        <textarea class="form-control text-size" name="character_hasil_kredit" id="" cols="30" rows="10" placeholder="Informasikan Hasil kredit Checking" style="height:110px;"><?= $data->character_hasil_kredit ?></textarea>
                                    </div>
                                    <div class="form-group form-margin">
                                        <label>Hasil kredit Checking media lainnya</label>
                                        <textarea class="form-control text-size" name="character_hasil_kredit_media_lain" id="" cols="30" rows="10" placeholder="Haisl Keterangan Dari media Lain" style="height:110px;"><?= $data->character_hasil_kredit_media_lain ?></textarea>
                                    </div>
                                    <div class="form-group form-margin float-right mt-5">
                                        <button type="button" class="btn btn-secondary text-size" onclick="document.getElementById('btn-kapasitas').click()"><b>Kembali</b></button>
                                        <button type="button" class="btn btn-primary text-size ml-1" onclick="document.getElementById('btn-jaminan').click()"><b>Selanjutnya</b></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- konfirmasi karakter -->

                    <!-- Jaminan Kendaraan -->
                    <div class="tab-pane p-3" id="nav-jaminan" role="tabpanel">
                        <form method="post" id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>">

                            <div class="card">
                                <div class="card-body text-size">
                                    <h5 class="form-margin"><b>Jaminan Kendaraan</b></h5>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-left">
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
                                                    <option <?= $data->collateral_merk == 'BMW' ? 'selected' : '' ?> value="BMW">BMW
                                                    </option>
                                                    <option <?= $data->collateral_merk == 'Hyundai' ? 'selected' : '' ?> value="Hyundai">Hyundai</option>
                                                    <option <?= $data->collateral_merk == 'Audi' ? 'selected' : '' ?> value="Audi">
                                                        Audi</option>
                                                    <option <?= $data->collateral_merk == 'Volkswagen' ? 'selected' : '' ?> value="Volkswagen">Volkswagen</option>
                                                    <option <?= $data->collateral_merk == 'Chevrolet' ? 'selected' : '' ?> value="Chevrolet">Chevrolet</option>
                                                    <option <?= $data->collateral_merk == 'Ford' ? 'selected' : '' ?> value="Ford">
                                                        Ford</option>
                                                    <option <?= $data->collateral_merk == 'Datsun' ? 'selected' : '' ?> value="Datsun">Datsun</option>
                                                    <option <?= $data->collateral_merk == 'Isuzu' ? 'selected' : '' ?> value="Isuzu">Isuzu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-center">
                                                <label>Jenis Kendaraan</label>
                                                <select class="form-control text-size" name="collateral_jenis" id="" required>
                                                    <option selected value="">Pilih jenis Kendaraan
                                                    </option>
                                                    <option <?= $data->collateral_jenis == 'PU' ? 'selected' : '' ?> value="PU">PU</option>
                                                    <option <?= $data->collateral_jenis == 'Truck' ? 'selected' : '' ?> value="Truck">Truck</option>
                                                    <option <?= $data->collateral_jenis == 'SJMB' ? 'selected' : '' ?> value="SJMB">SJMB</option>
                                                    <option <?= $data->collateral_jenis == 'Heavy Truck' ? 'selected' : '' ?> value="Heavy Truck">Heavy Truck</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-right">
                                                <label>Model kendaraan</label>
                                                <input type="text" class="form-control text-size" name="collateral_model" value="<?= $data->collateral_model ?>" id="" required placeholder="Civic / lancer / Skyline" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>tahun Mobil</label>
                                                <input type="text" class="form-control text-size number-only" name="collateral_tahun_kendaraan" value="<?= $data->collateral_tahun_kendaraan ?>" id="" required placeholder="Min 2005" minlength="4" maxlength="4" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Astan nama BPKB</label>
                                                <select class="form-control text-size" name="collateral_nama_bpkb" id="" required>
                                                    <option selected value="">Pilih Pemilik BPKB
                                                    </option>
                                                    <option <?= $data->collateral_nama_bpkb == 'Sendiri' ? 'selected' : '' ?> value="Sendiri">Sendiri</option>
                                                    <option <?= $data->collateral_nama_bpkb == 'Pasangan' ? 'selected' : '' ?> value="Pasangan">Pasangan</option>
                                                    <option <?= $data->collateral_nama_bpkb == 'Orang Tua' ? 'selected' : '' ?> value="Orang Tua">Orang Tua</option>
                                                    <option <?= $data->collateral_nama_bpkb == 'Anak Kandung' ? 'selected' : '' ?> value="Anak Kandung">Anak Kandung</option>
                                                    <option <?= $data->collateral_nama_bpkb == 'Saudara kandung' ? 'selected' : '' ?> value="Saudara kandung">Saudara kandung</option>
                                                    <option <?= $data->collateral_nama_bpkb == 'Orang Lain' ? 'selected' : '' ?> value="Orang Lain">Orang Lain</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group form-left">
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
                                            <div class="form-group form-center">
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
                                            <div class="form-group form-right">
                                                <label>Harga BFI Finance</label>
                                                <input type="text" class="form-control text-size number-only" name="collateral_pricelist_bfi" value="<?= $data->collateral_pricelist_bfi ?>" id="" data-type="currency" required placeholder="Rp. 000 000 000" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-margin float-right mt-5">
                                        <button type="button" class="btn btn-secondary text-size" onclick="document.getElementById('btn-karakter').click()"><b>Kembali</b></button>
                                        <button type="button" class="btn btn-primary text-size ml-1" onclick="document.getElementById('btn-religi').click()"><b>Selanjutnya</b></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- Jaminan Kendaraan -->

                    <!-- Data Religi -->
                    <div class="tab-pane p-3" id="nav-religi" role="tabpanel">
                        <form method="post" id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>">

                            <div class="card">
                                <div class="card-body text-size">
                                    <h5 class="form-margin"><b>Data Religi</b></h5>
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
                                    <div class="form-group form-margin float-right mt-5">
                                        <button type="button" class="btn btn-secondary text-size" onclick="document.getElementById('btn-jaminan').click()"><b>Kembali</b></button>
                                        <button type="button" class="btn btn-primary text-size ml-1" onclick="document.getElementById('btn-score').click()"><b>Selanjutnya</b></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- Data Religi -->

                    <!-- Data Hasil Analisa -->
                    <div class="tab-pane p-3" id="nav-score" role="tabpanel">
                        <form method="post" id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>">

                            <div class="card">
                                <div class="card-body text-size">
                                    <h5 class="form-margin"><b>Hasil Analisa</b></h5>

                                    <div class="form-group form-margin">
                                        <label>Strength</label>
                                        <textarea class="form-control text-size" name="kesimpulan_strength" id="" cols="30" rows="10" placeholder="" style="height:110px;"><?= $data->kesimpulan_strength ?></textarea>
                                    </div>
                                    <div class="form-group form-margin">
                                        <label>Weakness</label>
                                        <textarea class="form-control text-size" name="kesimpulan_weakness" id="" cols="30" rows="10" placeholder="" style="height:110px;"><?= $data->kesimpulan_weakness ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form method="POST" action="<?= base_url('fs_konsumen/tambah_lampiran') ?>" enctype="multipart/form-data">
                            <!-- Redirect -->
                            <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                            <!-- ID Leads -->
                            <input type="hidden" name="id_leads" value="<?= $leads->id_leads ?>">
                            <!-- Upload Lampiran -->
                            <div class="card">
                                <div class="card-body text-size">
                                    <h5 class="form-margin"><b>Data Lampiran</b></h5>

                                    <div class="form-group element text-size form-margin">
                                        <label>Lampirkan Data</label><br>
                                        <input class="text-size" type="file" name="tambah_lampiran[]" id="upload_file1">
                                        <hr>
                                        <div id="moreImageUpload"></div>
                                        <div class="clear "></div>

                                        <div id="moreImageUploadLink mt-5">
                                            <a class="btn btn-secondary text-size" href="javascript:void(0);" id="attachMore"><b>Tambah form</b></a>
                                            <button class="btn btn-primary text-size float-right" type="submit"><b>Upload Lampiran</b></button>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-margin mt-5">
                                                <div class="owl-carousel owl-theme">
                                                    <?php if ($data->lampiran_tambahan) { ?>
                                                        <!-- Lampiran Tambahan -->
                                                        <?php
                                                        $lampiran_tambahan =  explode(",", $data->lampiran_tambahan);
                                                        foreach ($lampiran_tambahan as $upload) {
                                                        ?>
                                                            <div class="item" style="width: 300px; height: 150px;">
                                                                <?php if (get_extension($upload)) { ?>
                                                                    <div class="zoom-gallery">
                                                                        <a href="<?= base_url('uploads/fs_konsumen/' . $upload) ?>"><img style="width: 300px; height: 150px;" class="item" src="<?= base_url('uploads/fs_konsumen/' . $upload) ?>" alt=""></a>
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <a href="<?= base_url('uploads/fs_konsumen/' . $upload) ?>">
                                                                        <center>
                                                                            <div class="card text-center mt-3" style="width: 250px; height: 140px;" data-toggle="tooltip" title="<?= $upload ?>">
                                                                                <i class="fa fa-file fa-5x" style="margin-top: 35px;"></i>
                                                                            </div>
                                                                        </center>
                                                                    </a>
                                                                <?php } ?>
                                                            </div>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <?php if ($this->fungsi->user_login()->level < 4) { ?>
                                                <div class="form-group form-margin float-right mt-5">
                                                    <button type="button" class="btn btn-secondary text-size mr-1" onclick="document.getElementById('btn-religi').click()"><b>Kembali</b></button>
                                                    <a href="<?= base_url('fs_konsumen') ?>" class="btn btn-primary waves-effect waves-light submit text-size" name="process"><b>Kirim</b></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form method="post" id="fs_konsumen" action="<?= base_url('fs_konsumen/update') ?>">
                            <!-- Penilaian Scoring -->
                            <?php if ($this->fungsi->user_login()->level >= 4) { ?>
                                <div class="card">
                                    <div class="card-body text-size">
                                        <h5 class="form-margin mb-4"><b>Hasil Scoring HO</b></h5>

                                        <div class="form-margin mt-3">
                                            <div class="table-responsive">
                                                <p>Tabel Penilaian</p>
                                                <table class="table table-hover scoring_ho">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <label class="table-form-large">Penilaian Scoring</label>
                                                            </th>
                                                            <th>
                                                                <label class="table-form-medium">Nilai</label>
                                                            </th>
                                                            <th>
                                                                <label class="table-form-medium">Grade</label>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <label>Informasi Aplikasi & Konsumen</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="hasil_scoring_nilai_informasi_konsumen" value="<?= $data->hasil_scoring_nilai_informasi_konsumen ?>" id="" placeholder="Nilai" />
                                                            </td>
                                                            <td>
                                                                <select class="form-control text-size form-border" name="hasil_scoring_grade_informasi_konsumen" required>
                                                                    <option selected value="">Pilih Grade</option>
                                                                    <option <?= $data->hasil_scoring_grade_informasi_konsumen == 'Grade 1' ? 'selected' : '' ?> value="Grade 1">Grade 1</option>
                                                                    <option <?= $data->hasil_scoring_grade_informasi_konsumen == 'Grade 2' ? 'selected' : '' ?> value="Grade 2">Grade 2</option>
                                                                    <option <?= $data->hasil_scoring_grade_informasi_konsumen == 'Grade 3' ? 'selected' : '' ?> value="Grade 3">Grade 3</option>
                                                                    <option <?= $data->hasil_scoring_grade_informasi_konsumen == 'Grade 4' ? 'selected' : '' ?> value="Grade 4">Grade 4</option>
                                                                    <option <?= $data->hasil_scoring_grade_informasi_konsumen == 'Grade 5' ? 'selected' : '' ?> value="Grade 5">Grade 5</option>
                                                                    <option <?= $data->hasil_scoring_grade_informasi_konsumen == 'Fatal Score' ? 'selected' : '' ?> value="Fatal Score">Fatal Score</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Survey Konsumen</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="hasil_scoring_nilai_survey_konsumen" value="<?= $data->hasil_scoring_nilai_penilaian_merchant ?>" id="" placeholder="Nilai" />
                                                            </td>
                                                            <td>
                                                                <select class="form-control text-size form-border" name="hasil_scoring_grade_survey_konsumen" required>
                                                                    <option selected value="">Pilih Grade</option>
                                                                    <option <?= $data->hasil_scoring_grade_survey_konsumen == 'Grade 1' ? 'selected' : '' ?> value="Grade 1">Grade 1</option>
                                                                    <option <?= $data->hasil_scoring_grade_survey_konsumen == 'Grade 2' ? 'selected' : '' ?> value="Grade 2">Grade 2</option>
                                                                    <option <?= $data->hasil_scoring_grade_survey_konsumen == 'Grade 3' ? 'selected' : '' ?> value="Grade 3">Grade 3</option>
                                                                    <option <?= $data->hasil_scoring_grade_survey_konsumen == 'Grade 4' ? 'selected' : '' ?> value="Grade 4">Grade 4</option>
                                                                    <option <?= $data->hasil_scoring_grade_survey_konsumen == 'Grade 5' ? 'selected' : '' ?> value="Grade 5">Grade 5</option>
                                                                    <option <?= $data->hasil_scoring_grade_survey_konsumen == 'Fatal Score' ? 'selected' : '' ?> value="Fatal Score">Fatal Score</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Penilaian Merchant</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="hasil_scoring_nilai_penilaian_merchant" value="<?= $data->hasil_scoring_nilai_penilaian_merchant ?>" id="" placeholder="Nilai" />
                                                            </td>
                                                            <td>
                                                                <select class="form-control text-size form-border" name="hasil_scoring_grade_penilaian_merchant" required>
                                                                    <option selected value="">Pilih Grade</option>
                                                                    <option <?= $data->hasil_scoring_grade_penilaian_merchant == 'Grade 1' ? 'selected' : '' ?> value="Grade 1">Grade 1</option>
                                                                    <option <?= $data->hasil_scoring_grade_penilaian_merchant == 'Grade 2' ? 'selected' : '' ?> value="Grade 2">Grade 2</option>
                                                                    <option <?= $data->hasil_scoring_grade_penilaian_merchant == 'Grade 3' ? 'selected' : '' ?> value="Grade 3">Grade 3</option>
                                                                    <option <?= $data->hasil_scoring_grade_penilaian_merchant == 'Grade 4' ? 'selected' : '' ?> value="Grade 4">Grade 4</option>
                                                                    <option <?= $data->hasil_scoring_grade_penilaian_merchant == 'Grade 5' ? 'selected' : '' ?> value="Grade 5">Grade 5</option>
                                                                    <option <?= $data->hasil_scoring_grade_penilaian_merchant == 'Fatal Score' ? 'selected' : '' ?> value="Fatal Score">Fatal Score</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Aset Kendaraan</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="hasil_scoring_nilai_aset_kendaraan" value="<?= $data->hasil_scoring_nilai_aset_kendaraan ?>" id="" placeholder="Nilai" />
                                                            </td>
                                                            <td>
                                                                <select class="form-control text-size form-border" name="hasil_scoring_grade_aset_kendaraan" required>
                                                                    <option selected value="">Pilih Grade</option>
                                                                    <option <?= $data->hasil_scoring_grade_aset_kendaraan == 'Grade 1' ? 'selected' : '' ?> value="Grade 1">Grade 1</option>
                                                                    <option <?= $data->hasil_scoring_grade_aset_kendaraan == 'Grade 2' ? 'selected' : '' ?> value="Grade 2">Grade 2</option>
                                                                    <option <?= $data->hasil_scoring_grade_aset_kendaraan == 'Grade 3' ? 'selected' : '' ?> value="Grade 3">Grade 3</option>
                                                                    <option <?= $data->hasil_scoring_grade_aset_kendaraan == 'Grade 4' ? 'selected' : '' ?> value="Grade 4">Grade 4</option>
                                                                    <option <?= $data->hasil_scoring_grade_aset_kendaraan == 'Grade 5' ? 'selected' : '' ?> value="Grade 5">Grade 5</option>
                                                                    <option <?= $data->hasil_scoring_grade_aset_kendaraan == 'Fatal Score' ? 'selected' : '' ?> value="Fatal Score">Fatal Score</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>Tingkat Religiusitas</label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control text-size number-only form-border" name="hasil_scoring_nilai_tingkat_religiusitas" value="<?= $data->hasil_scoring_nilai_tingkat_religiusitas ?>" id="" placeholder="Nilai" />
                                                            </td>
                                                            <td>
                                                                <select class="form-control text-size form-border" name="hasil_scoring_grade_tingkat_religiusitas" required>
                                                                    <option selected value="">Pilih Grade</option>
                                                                    <option <?= $data->hasil_scoring_grade_tingkat_religiusitas == 'Grade 1' ? 'selected' : '' ?> value="Grade 1">Grade 1</option>
                                                                    <option <?= $data->hasil_scoring_grade_tingkat_religiusitas == 'Grade 2' ? 'selected' : '' ?> value="Grade 2">Grade 2</option>
                                                                    <option <?= $data->hasil_scoring_grade_tingkat_religiusitas == 'Grade 3' ? 'selected' : '' ?> value="Grade 3">Grade 3</option>
                                                                    <option <?= $data->hasil_scoring_grade_tingkat_religiusitas == 'Grade 4' ? 'selected' : '' ?> value="Grade 4">Grade 4</option>
                                                                    <option <?= $data->hasil_scoring_grade_tingkat_religiusitas == 'Grade 5' ? 'selected' : '' ?> value="Grade 5">Grade 5</option>
                                                                    <option <?= $data->hasil_scoring_grade_tingkat_religiusitas == 'Fatal Score' ? 'selected' : '' ?> value="Fatal Score">Fatal Score</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group form-margin">
                                            <label>Kesimpulan Hasil Analisa HO Berdasarkan Rule</label>
                                            <select class="form-control text-size scoring_ho" name="is_recommended" id="" required>
                                                <option selected value="">Pilih Jawaban</option>
                                                <option <?= $data->is_recommended == 'Recommended' ? 'selected' : '' ?> value="Recommended">Recommended</option>
                                                <option <?= $data->is_recommended == 'Not Recommended' ? 'selected' : '' ?> value="Not Recommended">Not Recommended</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-margin float-right mt-5">
                                            <button type="button" class="btn btn-secondary text-size mr-1" onclick="document.getElementById('btn-religi').click()"><b>Kembali</b></button>
                                            <a href="<?= base_url("fs_konsumen") ?>" class="btn btn-primary waves-effect waves-light submit text-size"><b>Score</b></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
                <!-- Data Hasil Analisa -->

            </div>
        </div>

    </div>
</div>
</div>

<!-- <div class="form-row">
    <div class="col-md-12">
        <div class="form-group float-right card-margin-survey mt-3 mb-5">
            <button class="btn btn-light waves-effect waves-light text-size btn-cari" id="return" name="return" class="btn" type="button"><b>Return</b></button>
            <button class="btn btn-primary waves-effect waves-light submit text-size ml-1" type="submit" name="process"><b>Score</b></button>
        </div>
    </div>
</div> -->

<!-- Modal partner -->
<div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Partner</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Usaha</th>
                            <th>Kategori Produk</th>
                            <th>Telepon</th>
                            <th>Status</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($partners->result() as $partner) { ?>
                            <tr>
                                <td><?= $partner->nama_usaha ?></td>
                                <td><?= $partner->kategori_produk ?></td>
                                <td><?= $partner->telepon ?></td>
                                <td>
                                    <?php if ($partner->status == 'draft') { ?>
                                        <b class="text-secondary">Draft</b>
                                    <?php } ?>
                                    <?php if ($partner->status == 'mapping') { ?>
                                        <b class="text-secondary">Mapping</b>
                                    <?php } ?>
                                    <?php if ($partner->status == 'lengkap') { ?>
                                        <b class="text-success">Lengkap</b>
                                    <?php } ?>
                                </td>
                                <td>
                                    <center><button class="btn btn-primary pilih-partner radius" data-partner="<?= $partner->id_partner ?>" data-vendor="<?= $partner->nama_usaha ?>"><b>Pilih</b></button></center>
                                </td>
                            </tr>
                        <?php } ?>
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
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Agent</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Telepon</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($agents->result() as $agent) { ?>
                            <tr>
                                <td><?= $agent->nama_lengkap ?></td>
                                <td><?= $agent->telepon ?></td>
                                <td>
                                    <center><button class="btn btn-primary pilih-agent radius" data-agent="<?= $agent->id_agent ?>" data-namaagent="<?= $agent->nama_lengkap ?>"><b>Pilih</b></button></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal agent -->

<!-- <script>
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
</script> -->

<script>
    $('.travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor')
        .hide();
    source_leads();
    $("#soa").change(function() {
        source_leads();
        $('#id_partner').val("");
        $('#id_agent').val("");
        $('#nama_vendor').val("").removeAttr("required");
        $('#nama_event').val("");
        $('#nama_partner').val("");
        $('#nama_agent').val("");
        $('#nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak').val("");

    })

    function source_leads() {
        if ($('#soa').val() == 'Tour & travel') {
            $('.travel, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Travel')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent')
                .hide();
        } else if ($('#soa').val() == 'Penyedia Jasa / Barang') {
            $('.jasa, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Penyedia Jasa')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent')
                .hide();
        } else if ($('#soa').val() == 'Agent BA') {
            $('.vendor, .agent, .form, .agent-form, .btn-data, .form-agent').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_agent').attr('placeholder', 'Pilih Nama Agent')
            $('#btn-data-agent').attr('data-target', '#modal-agent')
            $('#nama_agent').attr('required', 'required');
            $('#nama_partner, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required',
                    '');
            $('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro')
                .hide();
        } else if ($('#soa').val() == 'EGC') {
            $('.nik, .posisi, .cabang, .vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#nik_egc, #cabang_egc, #posisi_egc').attr('required', 'required');
            $('#nama_agent, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', ' ');
            $('.travel, .agent, .jasa, .event, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else if ($('#soa').val() == 'CGC') {
            $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent').hide();
        } else {
            $('.jasa, .travel, .agent, .form, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#nama_partner, #nama_agent').removeAttr('required', 'required');
        }
    }


    $(".readonly").keydown(function(e) {
        e.preventDefault();
    });
</script>

<script src="<?= base_url('template/assets/js/kalkulasi.js') ?>"></script>


<script>
    $('.ro-active, .pasangan, .pasangan-kar, .pasangan-wir, .resiko, .resiko-pasangan').hide();

    // jenis Konsumen
    jenis_konsumen();

    $('#jenis_konsumen').change(function() {
        jenis_konsumen();
    })

    function jenis_konsumen() {
        if ($('#jenis_konsumen').val() == "RO Active") {
            $('.ro-active').show();
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
        } else {
            $('.ro-active').hide();
            $('#referral_konsumen, #nomor_kontrak').removeAttr('required', '');
            $('#referral_konsumen, #nomor_kontrak').val('');
        }
    }
    // jenis Konsumen

    // status pernikahan
    menikah();

    $('#status_pernikahan').change(function() {
        menikah();
    })

    function menikah() {
        if ($('#status_pernikahan').val() == "Sudah Menikah") {
            $('.pasangan, .pasangan-kar, .pasangan-wir').show();
            $('#nama_pasangan').attr('required', 'required');
        } else {
            $('.pasangan, .pasangan-kar, .pasangan-wir, .condition_karyawan_beresiko_pasangan, .condition_wir_beresiko_pasangan').hide();
            $('#nama_pasangan').removeAttr('required', ' ');
            $('#nama_pasangan, #condition_karyawan_pekerjaan_pasangan, #condition_karyawan_tempat_kerja_pasangan, #condition_karyawan_profesi_beresiko_pasangan, #condition_wir_pekerjaan_pasangan, #condition_wir_tempat_kerja_pasangan, #condition_wir_profesi_beresiko_pasangan').val('');
        }
    }
    // status pernikahan

    // form survey field
    function fs_field() {

    }
    // resiko karyawan
    resiko_kar();

    $('#condition_karyawan_pekerjaan').change(function() {
        resiko_kar();
    })

    function resiko_kar() {
        if ($('#condition_karyawan_pekerjaan').val() == "Profesi Beresiko") {
            $('.resiko').show();
            $('#condition_karyawan_profesi_beresiko').attr('required', 'required');
        } else {
            $('.resiko').hide();
            $('#condition_karyawan_profesi_beresiko').removeAttr('required', '');
            $('#condition_karyawan_profesi_beresiko').val('');
        }
    }
    // resiko karyawan

    // resiko pasangan karyawan
    resiko_kar_pasangan();

    $('#condition_karyawan_pekerjaan_pasangan').change(function() {
        resiko_kar_pasangan();
    })

    function resiko_kar_pasangan() {
        if ($('#condition_karyawan_pekerjaan_pasangan').val() == "Profesi Beresiko") {
            $('.resiko-pasangan-kar').show();
            $('#condition_karyawan_profesi_beresiko_pasangan').attr('required', 'required');
            $('.condition_karyawan_kerja_pasangan').show();
            $('#condition_karyawan_tempat_kerja_pasangan').attr('required', 'required');
        } else if ($('#condition_karyawan_pekerjaan_pasangan').val() == "Ibu Rumah Tangga") {
            $('.condition_karyawan_kerja_pasangan').hide();
            $('#condition_karyawan_tempat_kerja_pasangan').val('');
            $('#condition_karyawan_tempat_kerja_pasangan').attr('required', '');
            $('.resiko-pasangan-kar').hide();
            $('#condition_karyawan_profesi_beresiko_pasangan').removeAttr('required', '');
            $('#condition_karyawan_profesi_beresiko_pasangan').val('');
        } else {
            $('.resiko-pasangan-kar').hide();
            $('#condition_karyawan_profesi_beresiko_pasangan').removeAttr('required', '');
            $('#condition_karyawan_profesi_beresiko_pasangan').val('');
            $('.condition_karyawan_kerja_pasangan').show();
            $('#condition_karyawan_tempat_kerja_pasangan').attr('required', 'required');
        }
    }
    // resiko pasangan karyawan

    // resiko wiraswasta
    // $('#condition_wir_pekerjaan').change(function() {
    //     if ($('#condition_wir_pekerjaan').val() == "Profesi Beresiko") {
    //         $('.resiko').show();
    //         $('#condition_wir_profesi_beresiko').attr('required', 'required');
    //     } else {
    //         $('.resiko').hide();
    //         $('#condition_wir_profesi_beresiko').removeAttr('required', ' ');
    //     }
    // })
    $(document).ready(function() {
        resiko_wir_pasangan();

    })

    $('#condition_wir_pekerjaan_pasangan').change(function() {
        resiko_wir_pasangan();
    })

    function resiko_wir_pasangan() {
        if ($('#condition_wir_pekerjaan_pasangan').val() == "Profesi Beresiko") {
            $('.resiko-pasangan-wir').show();
            $('#condition_wir_profesi_beresiko_pasangan').attr('required', 'required');
            $('.condition_wir_tempat_pasangan').show();
            $('#condition_wir_tempat_kerja_pasangan').attr('required', 'required');
        } else if ($('#condition_wir_pekerjaan_pasangan').val() == "Ibu Rumah Tangga") {
            $('.condition_wir_tempat_pasangan').hide();
            $('#condition_wir_tempat_kerja_pasangan').attr('required', '');
            $('#condition_wir_tempat_kerja_pasangan').val('');
            $('.resiko-pasangan-wir').hide();
            $('#condition_wir_profesi_beresiko_pasangan').val('');
            $('#condition_wir_profesi_beresiko_pasangan').removeAttr('required', '');
        } else {
            $('.resiko-pasangan-wir').hide();
            $('#condition_wir_profesi_beresiko_pasangan').removeAttr('required', '');
            $('#condition_wir_profesi_beresiko_pasangan').val('');
            $('.condition_wir_tempat_pasangan').show();
            $('#condition_wir_profesi_beresiko_pasangan').removeAttr('required', 'rerquired');
        }
    }

    // resiko wiraswasta
</script>

<script>
    // bonus periodik karyawan
    periodik_kar();

    $("input[name='capacity_karyawan_ada_bonus_periodik']").click(function() {
        periodik_kar();
    })

    function periodik_kar() {
        var radioValue = $("input[name='capacity_karyawan_ada_bonus_periodik']:checked").val();
        $('.bonus-periodik').hide();
        if (radioValue == 'Ya') {
            $(".bonus-periodik").show();
        } else if (radioValue == 'Tidak') {
            $('.bonus-periodik').hide();
            $('.pendapatan_kar').val("");
        }
    }
    // bonus periodik karyawan

    // pendapatan lainnya karyawan
    Pendapatan_lain_kar();

    $("input[name='capacity_karyawan_ada_income_lainnya']").click(function() {
        Pendapatan_lain_kar();
    })

    function Pendapatan_lain_kar() {
        var radioValue = $("input[name='capacity_karyawan_ada_income_lainnya']:checked").val();
        $('.pendapatan-lainnya').hide();
        if (radioValue == 'Ya') {
            $(".pendapatan-lainnya").show();
        } else if (radioValue == 'Tidak') {
            $('.pendapatan-lainnya').hide();
            $('.pendapatan_lainnya_kar').val("");
        }
    }
    // pendapatan lainnya karyawan

    // hutang di tempat lain karyawan
    hutang_lain_kar();

    $("input[name='capacity_karyawan_ada_hutang']").click(function() {
        hutang_lain_kar();
    })

    function hutang_lain_kar() {
        var radioValue = $("input[name='capacity_karyawan_ada_hutang']:checked").val();
        $('.hutang-lainnya').hide();
        if (radioValue == 'Ya') {
            $(".hutang-lainnya").show();
        } else if (radioValue == 'Tidak') {
            $('.hutang-lainnya').hide();
            $('.hutang_lainnya_kar').val("");
        }
    }
    // hutang di tempat lain karyawan

    // <------------------------------------------------------------------------------------------>

    // sumberdata pendapatan wiraswasta
    sumberdata_pendapatan_wir();

    $("input[name='capacity_wir_pilih_data_analisa']").click(function() {
        sumberdata_pendapatan_wir();
    })

    function sumberdata_pendapatan_wir() {
        var radioValue = $("input[name='capacity_wir_pilih_data_analisa']:checked").val();
        $('.rekening, .nota').hide();
        if (radioValue == 'Nota') {
            $(".rekening").hide();
            $(".nota").show();
            $(".kredit_wir").val("");
        } else if (radioValue == 'Rekening Tabungan') {
            $(".rekening").show()
            $('.nota').hide();
            $('.nota_wir').val("");
        }

    }
    // sumberdata pendapatan wiraswasta

    // pendapatan lainnya wiraswasta
    pendapatan_lainnya_wir();

    $("input[name='capacity_wir_ada_income_lainnya']").click(function() {
        pendapatan_lainnya_wir();
    })

    function pendapatan_lainnya_wir() {
        var radioValue = $("input[name='capacity_wir_ada_income_lainnya']:checked").val();
        $('.pendapatan-lainnya-wir').hide();
        if (radioValue == 'Ya') {
            $(".pendapatan-lainnya-wir").show();
        } else if (radioValue == 'Tidak') {
            $('.pendapatan-lainnya-wir').hide();
            $('.pendapatan_lain_wir').val("");
        }
    }
    // pendapatan lainnya wiraswasta

    // hutang di tempat lain wiraswasta
    hutang_lainnya_wir();

    $("input[name='capacity_wir_ada_hutang']").click(function() {
        hutang_lainnya_wir();
    })

    function hutang_lainnya_wir() {
        var radioValue = $("input[name='capacity_wir_ada_hutang']:checked").val();
        $('.hutang-lainnya-wir').hide();
        if (radioValue == 'Ya') {
            $(".hutang-lainnya-wir").show();
        } else if (radioValue == 'Tidak') {
            $('.hutang-lainnya-wir').hide();
            $('.hutang_lainnya_wir').val("");
        }
    }
    // hutang di tempat lain wiraswasta

    // analisa omset wiraswasta
    analisa_omset_wir();

    $("input[name='capacity_wir_ada_analisa_dari_omset']").click(function() {
        analisa_omset_wir();
    })

    function analisa_omset_wir() {
        var radioValue = $("input[name='capacity_wir_ada_analisa_dari_omset']:checked").val();
        $('.omset-penjualan').hide();
        if (radioValue == 'Ya') {
            $(".omset-penjualan").show();
        } else if (radioValue == 'Tidak') {
            $('.omset-penjualan').hide();
            $('.omset_wir').val("");
        }
    }
    // analisa omset wiraswasta
</script>

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
                        $("[name='" + selector + "']").before(
                            `<div class="spinner-border spinner-border-sm text-primary" data-selector="${selector}"><span class="sr-only">Loading...</span></div>`
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

        //menyimpan data secara AJAX
        $("form#leads").on("blur", "input, select, textarea", function() {
            var selector = ($(this).attr('name'));
            var spinner = $("[data-selector='" + selector + "']");
            console.log(selector);
            $.ajax({
                url: '<?= base_url() ?>' + 'leads/update_ajax/',
                type: 'POST',
                data: $("form#leads").serialize(),
                dataType: 'json',
                beforeSend: function() {
                    if (spinner.length == 0) {
                        $("[name='" + selector + "']").before(
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

<!-- Jika Head/Manager login, maka disable semua form inputan -->
<!-- Dan Jika cross branch, cabang penginput hanya bisa meilhat data saja -->
<script>
    var level = $("#level").val();

    var id_branch = $("#id_branch").val();
    var cabang_cross = $("#cabang_cross").val();

    // alert(id_branch + ' ' + cabang_cross)
    if (level == '2' || level == '3' || level == '4' || level == '5' || cabang_cross != '') {
        $("input, select, textarea").attr('disabled', 'disabled');
        if (level == '4' || level == '5') {
            $("#id_leads").removeAttr('disabled');
            $(".scoring_ho input, .scoring_ho select, .scoring_ho textarea, .scoring_ho").removeAttr('disabled');
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("input[id^='upload_file']").each(function() {
            var id = parseInt(this.id.replace("upload_file", ""));
            $("#upload_file" + id).change(function() {
                if ($("#upload_file" + id).val() != "") {
                    $("#moreImageUploadLink").show();
                }
            });
        });
    });

    $(document).ready(function() {
        var upload_number = 2;
        $('#attachMoree').click(function() {
            //add more file
            var moreUploadTag = '';
            moreUploadTag +=
                '<div class="form-group element text-size"><label for="upload_file"' +
                upload_number + '>Lampirkan Data ' + '</label>' + '<br>';
            moreUploadTag += '<input type="file" id="upload_file' + '" name="tambah_lampiran[]"/>';
            moreUploadTag += ' <a class="text-size" href="javascript:del_file(' +
                upload_number +
                ')" style="cursor:pointer;" onclick="return confirm("Are you really want to delete ?")"><b class="text-danger">Hapus</b>' +
                '</a></div>' + '<hr>';
            $('<dl id="delete_file' + upload_number + '">' + moreUploadTag + '</dl>').fadeIn('slow')
                .appendTo('#moreImageUpload');
            upload_number++;
        });
    });

    function del_file(eleId) {
        var ele = document.getElementById("delete_file" + eleId);
        ele.parentNode.removeChild(ele);
    }
</script>

<script>
    $("table").on('click', '.pilih-partner', function() {
        $('#id_partner').val($(this).data('partner'));
        // $('#id_agent').val("");
        $('#nama_vendor').val($(this).data('vendor'));
        $('#nama_partner').val($(this).data('vendor'));
        $('#modal-partner').modal('hide');
    })
    $("table").on('click', '.pilih-agent', function() {
        $('#id_agent').val($(this).data('agent'));
        // $('#id_partner').val("");
        // $('#nama_vendor').val($(this).data('nama'));
        $('#nama_agent').val($(this).data('namaagent'));
        $('#modal-agent').modal('hide');
    })
    $("table").on('click', '.pilih-leads', function() {
        $('#id_leads').val($(this).data('mapping'));
        $('#soa').val($(this).data('soa'));
        //EGC
        $('#nik_egc').val($(this).data('nikegc'));
        $('#posisi_egc').val($(this).data('posisiegc'));
        $('#cabang_egc').val($(this).data('cabangegc'));
        //CGC / RO
        $('#nomor_kontrak').val($(this).data('kontrak'));
        $('#referral_konsumen').val($(this).data('referral'));

        //Data Leads
        $('#produk').val($(this).data('produk'));
        $('#telepon').val($(this).data('telepon'));
        $('#nama_partner').val($(this).data('vendor'));
        $('#detail_produk').val($(this).data('detail'));
        $('#nama_event').val($(this).data('event'));
        $('#nama_konsumen').val($(this).data('nama'));
        $('#id_agent').val($(this).data('agent'));
        $('#id_partner').val($(this).data('partner'));
        $('#nama_partner').val($(this).data('namapartner'));
        $('#nama_agent').val($(this).data('namaagent'));
        $('#activity_marketing').val($(this).data('activity'));
        $('#modal-leads').modal('hide');

        $('#nama_konsumen').attr('readonly', 'readonly');
        $('#reset').show()

        source_leads();
    })
</script>