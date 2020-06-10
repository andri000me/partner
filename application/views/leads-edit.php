<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4><b>Form Leads Prospect</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tabel</a></li>
                <li class="breadcrumb-item active">Survey Report</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary font-size gradient card-margin-5" role="alert">
            <div class="topcaption">
                <p class="captionalert"><i class="fas fa-info-circle fa-lg"></i> &nbsp;&nbsp;<b>Hati - hati dalam
                        menginput data</b></p>
                <p class="captiontext">Dilarang memalsukan data dan menginput data - data yang bukan milik konsumen.
                    Data ini akan disimpan
                    sebagai <b>Leads Prospect</b> dan akan dilanjutkan dengan mengisi <b>Form verifikasi dan Survey.
                        Data ini akan diteruskan ke head di cabang kemudian diassign ke CMS diisi datanya dengan
                        lengkap.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20 card-margin-5">
            <div class="card-body">
                <form action="<?= base_url('Leads/update') ?>" method="post" enctype="multipart/form-data" class="text-size">
                    <input id="website" name="website" type="disable" value="">

                    <!-- Leave for security protection, read docs for details -->
                    <!-- ID Leads -->
                    <input type="hidden" id="id_leads" name="id_leads" value="<?= $data->id_leads ?>">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_agent" name="id_agent" value="<?= $data->id_agent ?>">
                    <!-- ID Mapping Partner -->
                    <input type="hidden" name="id_partner" id="id_partner" value="<?= $data->id_partner ?>">
                    <!-- ID Branch -->
                    <input type="hidden" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <!-- Redirect -->
                    <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                    <div class="ml-4">
                        <h4 class="mt-0 mb-4"><b>Data Konsumen</b></h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-margin">
                                            <label>Nama Lengkap</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen" value="<?= $data->nama_konsumen ?>" required placeholder="Ibrahim Ahmad" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger text-size" type="button" id="reset"><b>Hapus</b></button>
                                                    <button class="btn btn-primary text-size" type="button" id="button-addon2" data-toggle="modal" data-target="#modal-leads"><b>Cari</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-left">
                                            <label>Nomor KTP</label>
                                            <input type="phone" class="form-control text-size placement number-only" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required placeholder="0000 0000 0000 0000" minlength="16" maxlength="16" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-size form-right">
                                            <label>Jenis kelamin</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="" required <?= $data->jenis_kelamin == 'Laki - Laki' ? 'checked' : '' ?> value="Laki - Laki">
                                                <label class="form-check-label">
                                                    Laki - Laki
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="" required <?= $data->jenis_kelamin == 'Perempuan' ? 'checked' : '' ?> value="Perempuan">
                                                <label class="form-check-label">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-left">
                                            <label>Nomor Handphone</label>
                                            <input type="text" class="form-control text-size placement number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0896 5533 985" maxlength="15" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-right">
                                            <label>Nomor WA</label>
                                            <input type="text" class="form-control text-size placement number-only" name="" id="" value="" required placeholder="0896 5533 985" maxlength="15" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-left">
                                            <label>Email</label>
                                            <input type="email" class="form-control text-size" name="email" id="email" value="<?= $data->email ?>" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-right">
                                            <label>Pendidikan</label>
                                            <select class="form-control text-size" name="pendidikan" id="pendidikan" required>
                                                <option selected value="">Pilih Pendidikan</option>
                                                <option <?= $data->pendidikan == 'SD' ? 'selected' : '' ?> value="SD">SD
                                                </option>
                                                <option <?= $data->pendidikan == 'SLTP' ? 'selected' : '' ?> value="SLTP">SLTP</option>
                                                <option <?= $data->pendidikan == 'SMU' ? 'selected' : '' ?> value="SMU">
                                                    SMU</option>
                                                <option <?= $data->pendidikan == 'SLTA' ? 'selected' : '' ?> value="SLTA">SLTA</option>
                                                <option <?= $data->pendidikan == 'STM' ? 'selected' : '' ?> value="STM">
                                                    STM</option>
                                                <option <?= $data->pendidikan == 'SMEA' ? 'selected' : '' ?> value="SMEA">SMEA</option>
                                                <option <?= $data->pendidikan == 'D1' ? 'selected' : '' ?> value="D1">D1
                                                </option>
                                                <option <?= $data->pendidikan == 'D2' ? 'selected' : '' ?> value="D2">D2
                                                </option>
                                                <option <?= $data->pendidikan == 'D3' ? 'selected' : '' ?> value="D3">D3
                                                </option>
                                                <option <?= $data->pendidikan == 'S1' ? 'selected' : '' ?> value="S1">S1
                                                </option>
                                                <option <?= $data->pendidikan == 'S2' ? 'selected' : '' ?> value="S2">S2
                                                </option>
                                                <option <?= $data->pendidikan == 'S3' ? 'selected' : '' ?> value="S3">S3
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group form-left">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control text-size" name="tanggal_lahir" id="tanggal_lahir" value="<?= $data->email ?>" placeholder="Tanggal lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-right">
                                            <label>Status Pernikahan</label>
                                            <select class="form-control text-size" name="status_pernikahan" id="status_pernikahan" required>
                                                <option selected value="">Pilih Status Pernikahan</option>
                                                <option <?= $data->status_pernikahan == 'Sudah Menikah' ? 'selected' : '' ?> value="Sudah Menikah">Sudah Menikah</option>
                                                <option <?= $data->status_pernikahan == 'Belum Menikah' ? 'selected' : '' ?> value="Belum Menikah">Belum Menikah</option>
                                                <option <?= $data->status_pernikahan == 'Janda/Duda - Meninggal' ? 'selected' : '' ?> value="Janda/Duda - Meninggal">Janda/Duda - Meninggal</option>
                                                <option <?= $data->status_pernikahan == 'Janda/Duda - Cerai' ? 'selected' : '' ?> value="Janda/Duda - Cerai">Janda/Duda - Cerai</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row pasangan">
                                    <div class="col-md-12">
                                        <div class="form-group form-margin">
                                            <label>Nama Pasangan</label>
                                            <input type="text" class="form-control text-size" name="nama_pasangan" id="nama_pasangan" value="<?= $data->nama_pasangan ?>" placeholder="Nama Pasangan">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size form-left">
                                            <label>Pekerjaan Konsumen?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input pekerjaan_konsumen" type="radio" name="pekerjaan_konsumen" id="pekerjaan_konsumen" <?= $data->pekerjaan_konsumen == 'Karyawan' ? 'checked' : '' ?> required value="Karyawan">
                                                <label class="form-check-label">
                                                    Karyawan
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input pekerjaan_konsumen" type="radio" name="pekerjaan_konsumen" id="pekerjaan_konsumen" <?= $data->pekerjaan_konsumen == 'Wiraswasta' ? 'checked' : '' ?> required value="Wiraswasta">
                                                <label class="form-check-label">
                                                    Wiraswasta
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-right">
                                            <label>Jenis Konsumen</label>
                                            <select class="form-control text-size" name="status_konsumen" id="status_konsumen" required>
                                                <option selected value="">Pilih Jenis Konsumen</option>
                                                <option <?= $data->status_konsumen == 'New Customer' ? 'selected' : '' ?> value="New Customer">New Customer</option>
                                                <option <?= $data->status_konsumen == 'RO Expire' ? 'selected' : '' ?> value="RO Expire">RO Expire</option>
                                                <option <?= $data->status_konsumen == 'RO Active' ? 'selected' : '' ?> value="RO Active">RO Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row ro-active">
                                    <div class="col-md-6">
                                        <div class="form-group form-left">
                                            <label>Nomor Kontrak</label>
                                            <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= $data->nomor_kontrak ?>" placeholder="0878837741" minlength="10" maxlength="10" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-right">
                                            <label>Nama Konsumen</label>
                                            <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= $data->referral_konsumen ?>" placeholder="Input Nama konsumen">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group form-margin">
                                        <label>Lokasi Rumah</label>
                                        <select class="form-control text-size" name="lokasi_rumah" id="lokasi_rumah" required>
                                            <option selected value="">Pilih Kategori Lokasi Rumah</option>
                                            <option <?= $data->lokasi_rumah == 'Non Perumahan - Tidak bisa Lewat Mobil' ? 'selected' : '' ?> value="Non Perumahan - Tidak bisa Lewat Mobil">Non Perumahan - Tidak
                                                bisa Lewat Mobil</option>
                                            <option <?= $data->lokasi_rumah == 'Non Perumahan - Jalan Satu Mobil' ? 'selected' : '' ?> value="Non Perumahan - Jalan Satu Mobil">Non Perumahan - Jalan Satu
                                                Mobil</option>
                                            <option <?= $data->lokasi_rumah == 'Non Perumahan - Jalan Dua Mobil' ? 'selected' : '' ?> value="Non Perumahan - Jalan Dua Mobil">Non Perumahan - Jalan Dua
                                                Mobil</option>
                                            <option <?= $data->lokasi_rumah == 'Perumahan - Tidak Bisa Lewat Mobil' ? 'selected' : '' ?> value="Perumahan - Tidak Bisa Lewat Mobil">Perumahan - Tidak Bisa
                                                Lewat Mobil</option>
                                            <option <?= $data->lokasi_rumah == 'Perumahan - Jalan Satu Mobil' ? 'selected' : '' ?> value="Perumahan - Jalan Satu Mobil">Perumahan - Jalan Satu Mobil
                                            </option>
                                            <option <?= $data->lokasi_rumah == 'Perumahan - Jalan Dua Mobil' ? 'selected' : '' ?> value="Perumahan - Jalan Dua Mobil">Perumahan - Jalan Dua Mobil
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-left">
                                        <label>Jenis Bangunan Rumah</label>
                                        <select class="form-control text-size" name="jenis_rumah" id="jenis_rumah" required>
                                            <option selected value="">Pilih Kategori Jenis Bangunan Rumah</option>
                                            <option <?= $data->jenis_rumah == 'Permanent' ?> value="Permanent">Permanent
                                            </option>
                                            <option <?= $data->jenis_rumah == 'Semi Permanent' ?> value="Semi Permanent">Semi Permanent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-right">
                                        <label>Luas Bangunan Rumah</label>
                                        <select class="form-control text-size" name="luas_rumah" id="luas_rumah" required>
                                            <option selected value="">Pilih Kategori Luas Bangunan Rumah</option>
                                            <option <?= $data->luas_rumah == '< 60 M2' ? 'selected' : '' ?> value="< 60 M2">
                                                < 60 M2</option> <option <?= $data->luas_rumah == '60 - 100 M2' ? 'selected' : '' ?> value="60 - 100 M2">60 - 100 M2
                                            </option>
                                            <option <?= $data->luas_rumah == '100 - 150 M2' ? 'selected' : '' ?> value="100 - 150 M2">100 - 150 M2</option>
                                            <option <?= $data->luas_rumah == '> 150 M2' ? 'selected' : '' ?> value="> 150 M2">> 150 M2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-left">
                                        <label>Asal Aplikasi</label>
                                        <select class="form-control text-size" name="soa" id="soa" required>
                                            <option selected value="">Pilih Asal Aplikasi</option>
                                            <option <?= $data->soa == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
                                            <option <?= $data->soa == 'EGC' ? 'selected' : '' ?> value="EGC">EGC</option>
                                            <option <?= $data->soa == 'CGC' ? 'selected' : '' ?> value="CGC">CGC</option>
                                            <option <?= $data->soa == 'Tele Sales' ? 'selected' : '' ?> value="Tele Sales">Tele Sales</option>
                                            <option <?= $data->soa == 'CMS' ? 'selected' : '' ?> value="CMS">CMS</option>
                                            <option <?= $data->soa == 'Sharia Head' ? 'selected' : '' ?> value="Sharia Head">Sharia Head</option>
                                            <option <?= $data->soa == 'HO - Product' ? 'selected' : '' ?> value="HO - Product">HO - Product</option>
                                            <option <?= $data->soa == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
                                            <option <?= $data->soa == 'Penyedia Jasa / Barang' ? 'selected' : '' ?> value="Penyedia Jasa / Barang">Penyedia Jasa / Barang</option>
                                            <!-- <option <?= $data->soa == 'Walk In' ? 'selected' : '' ?> value="Walk In">Walk In</option>
                                                <option <?= $data->soa == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                                <option <?= $data->soa == 'Tele Marketing' ? 'selected' : '' ?> value="Tele Marketing">Tele Marketing</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-right">
                                        <label>Activity Marketing</label>
                                        <select class="form-control text-size" name="activity" id="activity" required>
                                            <option selected disabled value="">Pilih Kategori Activity Marketing</option>
                                            <option <?= $data->activity_marketing == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
                                            <option <?= $data->activity_marketing == 'Tele call' ? 'selected' : '' ?> value="Tele call">Tele call</option>
                                            <option <?= $data->activity_marketing == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
                                            <option <?= $data->activity_marketing == 'Sosial Media' ? 'selected' : '' ?> value="Sosial Media">Sosial Media</option>
                                            <option <?= $data->activity_marketing == 'Website' ? 'selected' : '' ?> value="Website">Website</option>
                                            <option <?= $data->activity_marketing == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                            <option <?= $data->activity_marketing == 'Walk In Branch' ? 'selected' : '' ?> value="Walk In Branch">Walk In Branch</option>
                                            <option <?= $data->activity_marketing == 'Surat Penawaran' ? 'selected' : '' ?> value="Surat Penawaran">Surat Penawaran</option>
                                            <option <?= $data->activity_marketing == 'Blast WA / SMS' ? 'selected' : '' ?> value="Blast WA / SMS">Blast WA / SMS</option>
                                            <option <?= $data->activity_marketing == 'Email Marketing' ? 'selected' : '' ?> value="Email Marketing">Email Marketing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 event">
                                    <div class="form-group form-margin">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control text-size" name="nama_event" id="nama_event" value="<?= $data->nama_event ?>" placeholder="Input Nama Event">
                                    </div>
                                </div>
                                <div class="col-md-12 form-agent">
                                    <div class="form-margin">
                                        <label class="agent">Pilih Data Agent</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control text-size readonly pointer" name="nama_agent" id="nama_agent" placeholder="" value="<?= $data->nama_agent ?>" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary text-size" type="button" id="btn-data-agent" data-toggle="modal" data-target=""><b>Cari</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 form">
                                    <div class="form-margin">
                                        <label class="travel">Pilih Data Travel</label>
                                        <label class="jasa">Pilih Data Penyedia Jasa</label>
                                        <label class="vendor">Pilih Data Partner</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control text-size readonly pointer" name="nama_partner" id="nama_partner" value="<?= $data->nama_partner ?>" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary text-size" type="button" id="btn-data" data-toggle="modal" data-target=""><b>Cari</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 nik">
                                    <div class="form-group form-left">
                                        <label>NIK</label>
                                        <input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= $data->nik_egc ?>" placeholder="072104" minlength="6" maxlength="7" />
                                    </div>
                                </div>
                                <div class="col-md-6 posisi">
                                    <div class="form-group form-right">
                                        <label>Posisi</label>
                                        <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= $data->posisi_egc ?>" placeholder="Input Posisi">
                                    </div>
                                </div>
                                <div class="col-md-12 cabang">
                                    <div class="form-group form-margin">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= $data->cabang_egc ?>" placeholder="Input Cabang">
                                    </div>
                                </div>
                                <div class="col-md-6 kontrak-ro">
                                    <div class="form-group form-left">
                                        <label>Nomor Kontrak</label>
                                        <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= $data->nomor_kontrak ?>" placeholder="0878837741" minlength="10" maxlength="10" />
                                    </div>
                                </div>
                                <div class="col-md-6 konsumen-ro">
                                    <div class="form-group form-right">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= $data->referral_konsumen ?>" placeholder="Input Nama konsumen">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group text-size form-left">
                                        <label>Konsumen Cross Branch?</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= $data->cross_branch == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                            <label class="form-check-label">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= $data->cross_branch == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                            <label class="form-check-label">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="hide" class="form-group form-right">
                                        <label>Pilih Cabang Tujuan</label>
                                        <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                            <option selected disabled value="">Pilih Cabang</option>
                                            <?php foreach ($branches->result() as $branch) { ?>
                                                <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                <option <?= $branch->id_branch == $data->cabang_cross ? 'selected' : '' ?> <?= $branch->id_branch == $this->fungsi->user_login()->id_branch ? 'disabled' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right mt-5 form-margin">
                        <button class="btn btn-light waves-effect waves-light btn-cari text-size btn-width" id="draft" name="draft" class="btn" type="submit"><b>Simpan</b></button>
                        <button class="btn btn-primary waves-effect waves-light submit text-size btn-width ml-1" type="submit" name="process"><b>Kirim</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<!-- Modal Mapping Leads -->
<div class="modal fade bd-example-modal-xl" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" style="height:700px;">
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Leads</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                <div class="text-size">Nama Lengkap</div>
                            </th>
                            <th>
                                <div class="text-size">Nomor Telepon</div>
                            </th>
                            <th>
                                <div class="text-size">Asal Aplikasi</div>
                            </th>
                            <th>
                                <div class="text-size">Produk</div>
                            </th>
                            <th>
                                <div class="text-size"> </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mappings->result() as $mapping) { ?>
                            <tr>
                                <td>
                                    <div class="text-size"><?= $mapping->nama_konsumen ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->telepon ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->soa ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->produk ?></div>
                                </td>
                                <td>
                                    <center><button class="btn btn-primary pilih-leads radius" id="search" data-mapping="<?= $mapping->leads_id ?>" data-nama="<?= $mapping->nama_konsumen ?>" data-telepon="<?= $mapping->telepon ?>" data-soa="<?= $mapping->soa ?>" data-produk="<?= $mapping->produk ?>" data-detail="<?= $mapping->detail_produk ?>" data-event="<?= $mapping->nama_event ?>" data-kontrak="<?= $mapping->nomor_kontrak ?>" data-referral="<?= $mapping->referral_konsumen ?>" data-nikegc="<?= $mapping->nik_egc ?>" data-posisiegc="<?= $mapping->posisi_egc ?>" data-cabangegc="<?= $mapping->cabang_egc ?>" data-partner="<?= $mapping->id_partner ?>" data-namapartner="<?= $mapping->nama_partner ?>" data-namaagent="<?= $mapping->nama_agent ?>" data-agent="<?= $mapping->id_agent ?>"><b>Pilih</b></button></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

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
                                    <?php if ($partner->status == 'lengkap') { ?>
                                        <b class="text-success">Lengkap</b>
                                    <?php } ?>
                                    <?php if ($partner->status == 'mapping') { ?>
                                        <b class="text-secondary">Mapping</b>
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

<!-- Menghilangkan attr required untuk save sementara -->
<script>
    $('#draft').click(function() {
        $("input, select").removeAttr('required');
    })
</script>

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
        $('#nama_partner').val($(this).data('namapartner'));
        $('#nama_agent').val($(this).data('namaagent'));

        $('#id_agent').val($(this).data('agent'));
        $('#id_partner').val($(this).data('partner'));

        $('#modal-leads').modal('hide');

        $('#nama_konsumen').attr('readonly', 'readonly');
        $('#reset').show()

        source_leads();
    })
</script>

<script>
    function show_leads() {
        var id_leads = $("#id_leads").val();
        $.ajax({
            type: 'GET',
            url: '<?= base_url() ?>' + 'leads/get_leads/' + id_leads,
            dataType: 'json',
            data: {
                id_leads: id_leads
            },
            success: function(data) {
                $("#surveyor").val(data.surveyor);
                $("#pic_ttd").val(data.pic_ttd);
            }

        });
    }
    $(document).ready(function() {
        show_leads();
    })
</script>

<script>
    $('#reset').hide();
    if ($("#id_leads").val()) {
        $('#nama_konsumen').attr('readonly', 'readonly');
        $('#reset').show();
    }

    $('#reset').click(function() {
        $('#id_leads, #id_agent, #id_partner, #nama_konsumen, #produk, #detail_produk, #telepon, #soa, #nama_event, #nama_partner, #nama_agent, #nik_egc, #posisi_egc, #cabang_egc, #nomor_kontrak, #referral_konsumen')
            .val("");
        $('.travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, #reset')
            .hide();
        $('#nama_konsumen').removeAttr('readonly');
    })
</script>

<script>
    $('.ro-active, .pasangan').hide();

    // Status Konsumen
    status_konsumen();

    $('#status_konsumen').change(function() {
        status_konsumen();
    })

    function status_konsumen() {
        if ($('#status_konsumen').val() == "RO Active") {
            $('.ro-active').show();
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
        } else {
            $('.ro-active').hide();
            $('#referral_konsumen, #nomor_kontrak').removeAttr('required', '');
            $('#referral_konsumen, #nomor_kontrak').val('');
        }
    }
    // Status Konsumen

    // status pernikahan
    status_pernikahan();

    $('#status_pernikahan').change(function() {
        status_pernikahan();
    })

    function status_pernikahan() {
        if ($('#status_pernikahan').val() == "Sudah Menikah") {
            $('.pasangan').show();
            $('#nama_pasangan').attr('required', 'required');
        } else {
            $('.pasangan').hide();
            $('#nama_pasangan').removeAttr('required', ' ');
        }
    }
    // status pernikahan
</script>

<script>
    $("#leads_id").keyup(function() {
        var leads_id = ($(this).val());

        $.ajax({
            type: "POST",
            url: "<?= base_url('leads/get_leads') ?>",
            async: false,
            dataType: "JSON",
            data: {
                leads_id: leads_id
            },
            success: function(data) {
                // if(data.exist)
                alert(data.exist);
            }
        })
    })
</script>