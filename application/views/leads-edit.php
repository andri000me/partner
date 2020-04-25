<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Leads Go Live</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item active">Leads Go Live</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary font-size gradient" role="alert">
            <div class="ml-3 mr-3">
                <h5 class="alert-heading"><i class="fas fa-info-circle"></i> Hati - hati dalam menginput data</h5>
                <p>Dilarang memalsukan data dan menginput data - data yang bukan milik konsumen. Data ini akan disimpan
                    sebagai <b>Leads Prospect</b> dan akan dilanjutkan dengan mengisi <b>Form verifikasi dan Survey.</b>
                    Data ini akan diteruskan ke head di cabang kemudian diassign ke CMS diisi datanya dengan lengkap.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <form action="<?= base_url('Leads/update') ?>" method="post" enctype="multipart/form-data"
                    class="text-size">
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
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h4 class="mt-0 header-title ml-3">Data konsumen</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <!-- <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Leads ID</label>
                                            <input type="text" class="form-control text-size placement" name="leads_id"
                                                id="leads_id" value="<?= $data->leads_id ?>" required
                                                placeholder="202001SLOS123456" minlength="16" maxlength="16">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-row mb-3">
                                    <div class="col-md-12">
                                        <div class=" ml-3 mr-3">
                                            <label>Nama Lengkap</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control text-size" name="nama_konsumen"
                                                    id="nama_konsumen" value="<?= $data->nama_konsumen ?>" required
                                                    placeholder="Ibrahim Ahmad" aria-label="Recipient's username"
                                                    aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger text-size" type="button"
                                                        id="reset">Hapus</button>
                                                    <button class="btn btn-primary text-size" type="button"
                                                        id="button-addon2" data-toggle="modal"
                                                        data-target="#modal-leads">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Nomor KTP</label>
                                            <input type="phone" class="form-control text-size placement number-only"
                                                name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required
                                                placeholder="0000 0000 0000 0000" minlength="16" maxlength="16" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>Pakah Ada NPWP?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="npwp" id="npwp"
                                                    required value="Tidak Ada">
                                                <label class="form-check-label">
                                                    Tidak Ada
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="npwp" id="npwp"
                                                    required value="Ada">
                                                <label class="form-check-label">
                                                    Ada
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Nomor Handphone</label>
                                            <input type="text" class="form-control text-size placement number-only"
                                                name="telepon" id="telepon" value="<?= $data->telepon ?>" required
                                                placeholder="0896 5533 985" maxlength="15" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>Pekerjaan Konsumen?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input cross_branch" type="radio"
                                                    name="pekerjaan_konsumen" required
                                                    <?= $data->pekerjaan_konsumen == 'Karyawan' ? 'checked' : '' ?>
                                                    value="Karyawan">
                                                <label class="form-check-label">
                                                    Karyawan
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input cross_branch" type="radio"
                                                    name="pekerjaan_konsumen" required
                                                    <?= $data->pekerjaan_konsumen == 'Wiraswasta' ? 'checked' : '' ?>
                                                    value="Wiraswasta">
                                                <label class="form-check-label">
                                                    Wiraswasta
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row npwp-form">
                                    <div class="col-md-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Nomor NPWP</label>
                                            <input type="phone"
                                                class="form-control text-size placement number-only <?= form_error('') ? 'is-invalid' : '' ?>"
                                                name="no_npwp" id="no_npwp" value="<?= set_value('no_ktp') ?>" required
                                                placeholder="00 000 000 0 000 000" minlength="15" maxlength="15" />
                                            <?= form_error('') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3 ml-3 mr-3">
                                            <label>Nomor Handphone</label>
                                            <input type="text"
                                                class="form-control text-size placement number-only <?= form_error('telepon') ? 'is-invalid' : '' ?>"
                                                name="telepon" id="telepon" value="<?= set_value('telepon') ?>" required
                                                placeholder="0896 5533 985" maxlength="15" />
                                            <?= form_error('telepon') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control text-size" name="tanggal_lahir"
                                                id="tanggal_lahir" value="<?= $data->tanggal_lahir ?>"
                                                placeholder="Tanggal lahir">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Pendidikan</label>
                                            <select class="form-control text-size" name="pendidikan" id="pendidikan"
                                                required>
                                                <option selected value="">Pilih Pendidikan</option>
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
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Status Pernikahan</label>
                                            <select class="form-control text-size" name="status_pernikahan"
                                                id="status_pernikahan" required>
                                                <option selected value="">Pilih Status Pernikahan</option>
                                                <option value="Sudah Menikah">Sudah Menikah</option>
                                                <option value="Belum Menikah">Belum Menikah</option>
                                                <option value="Janda/Duda - Meninggal">Janda/Duda - Meninggal</option>
                                                <option value="Janda/Duda - Cerai">Janda/Duda - Cerai</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row pasangan">
                                    <div class="col-md-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Nama Pasangan</label>
                                            <input type="text" class="form-control text-size" name="nama_pasangan"
                                                id="nama_pasangan" value="<?= $data->nama_pasangan ?>"
                                                placeholder="Nama Pasangan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="ml-3 mr-3">
                                <!-- <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size">
                                            <label>Cross Branch?</label><br>
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
                                        <div class="form-group text-size">
                                            <label>Apakah Sudah Funding?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="sudah_funding" id="sudah_funding" <?= $data->sudah_funding == 'Sudah' ? 'checked' : '' ?> required value="Sudah">
                                                <label class="form-check-label">
                                                    Sudah
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sudah_funding" id="sudah_funding" <?= $data->sudah_funding == 'Belum' ? 'checked' : '' ?> required value="Belum">
                                                <label class="form-check-label">
                                                    Belum
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>Jenis Rumah</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="jenis_rumah"
                                                    id="jenis_rumah" required value="Semi Permanent">
                                                <label class="form-check-label">
                                                    Semi Permanent
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_rumah"
                                                    id="jenis_rumah" required value="Permanent">
                                                <label class="form-check-label">
                                                    Permanent
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Luas Bangunan Rumah</label>
                                            <select class="form-control text-size" name="luas_bangunan"
                                                id="luas_bangunan" required>
                                                <option selected value="">Pilih Kategori Luas Bangunan Rumah</option>
                                                <option <?= $data->luas_bangunan == '< 60 M2' ? 'selected' : '' ?>
                                                    value="< 60 M2">
                                                    < 60 M2</option>
                                                <option <?= $data->luas_bangunan == '60 - 100 M2' ? 'selected' : '' ?>
                                                    value="60 - 100 M2">60 - 100 M2
                                                </option>
                                                <option <?= $data->luas_bangunan == '100 - 150 M2' ? 'selected' : '' ?>
                                                    value="100 - 150 M2">100 - 150 M2</option>
                                                <option <?= $data->luas_bangunan == '> 150 M2' ? 'selected' : '' ?>
                                                    value="> 150 M2">> 150 M2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Lokasi Rumah</label>
                                            <select class="form-control text-size" name="lokasi_rumah" id="lokasi_rumah"
                                                required>
                                                <option selected value="">Pilih Kategori Lokasi Rumah</option>
                                                <option
                                                    <?= $data->lokasi_rumah == 'Non Perumahan - Tidak bisa Lewat Mobil' ? 'selected' : '' ?>
                                                    value="Non Perumahan - Tidak bisa Lewat Mobil">Non Perumahan -
                                                    Tidak bisa Lewat Mobil</option>
                                                <option
                                                    <?= $data->lokasi_rumah == 'Non Perumahan - Jalan Satu Mobil' ? 'selected' : '' ?>
                                                    value="Non Perumahan - Jalan Satu Mobil">Non Perumahan - Jalan
                                                    Satu Mobil</option>
                                                <option
                                                    <?= $data->lokasi_rumah == 'Non Perumahan - Jalan Dua Mobil' ? 'selected' : '' ?>
                                                    value="Non Perumahan - Jalan Dua Mobil">Non Perumahan - Jalan
                                                    Dua Mobil</option>
                                                <option
                                                    <?= $data->lokasi_rumah == 'Perumahan - Tidak Bisa Lewat Mobil' ? 'selected' : '' ?>
                                                    value="Perumahan - Tidak Bisa Lewat Mobil">Perumahan - Tidak
                                                    Bisa Lewat Mobil</option>
                                                <option
                                                    <?= $data->lokasi_rumah == 'Perumahan - Jalan Satu Mobil' ? 'selected' : '' ?>
                                                    value="Perumahan - Jalan Satu Mobil">Perumahan - Jalan Satu
                                                    Mobil</option>
                                                <option
                                                    <?= $data->lokasi_rumah == 'Perumahan - Jalan Dua Mobil' ? 'selected' : '' ?>
                                                    value="Perumahan - Jalan Dua Mobil">Perumahan - Jalan Dua Mobil
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Status Konsumen</label>
                                                <select class="form-control text-size" name="status_konsumen"
                                                    id="status_konsumen" required>
                                                    <option selected value="">Pilih Status Konsumen</option>
                                                    <option value="New Customer">New Customer</option>
                                                    <option value="RO Expire">RO Expire</option>
                                                    <option value="RO Active">RO Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Asal Aplikasi</label>
                                            <select class="form-control text-size" name="soa" id="soa" required>
                                                <option selected value="">Pilih Source Aplikasi</option>
                                                <option <?= $data->soa == 'Agent BA' ? 'selected' : '' ?>
                                                    value="Agent BA">Agent / BA</option>
                                                <option <?= $data->soa == 'EGC' ? 'selected' : '' ?> value="EGC">
                                                    EGC</option>
                                                <option <?= $data->soa == 'CGC' ? 'selected' : '' ?> value="CGC">
                                                    CGC</option>
                                                <option <?= $data->soa == 'Tele Marketing' ? 'selected' : '' ?>
                                                    value="Tele Marketing">Tele Sales</option>
                                                <option <?= $data->soa == 'CMS' ? 'selected' : '' ?> value="CMS">
                                                    CMS</option>
                                                <option <?= $data->soa == 'Sharia Head' ? 'selected' : '' ?>
                                                    value="Sharia Head">Sharia Head</option>
                                                <option <?= $data->soa == 'HO - Product' ? 'selected' : '' ?>
                                                    value="HO - Product">HO - Product</option>
                                                <option <?= $data->soa == 'Tour & travel' ? 'selected' : '' ?>
                                                    value="Tour & travel">Tour & travel</option>
                                                <option <?= $data->soa == 'Penyedia Jasa' ? 'selected' : '' ?>
                                                    value="Penyedia Jasa">Penyedia Jasa / Barang</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 event">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Nama Event</label>
                                            <input type="text" class="form-control text-size" name="nama_event"
                                                id="nama_event" value="<?= $data->nama_event ?>"
                                                placeholder="Input Nama Event">
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-agent mb-3">
                                        <div class="ml-3 mr-3">
                                            <label class="agent">Pilih Data Agent</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control text-size readonly pointer"
                                                    name="data_agent" id="data_agent" placeholder=""
                                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary btn-data text-size" type="button"
                                                        id="btn-data-agent" data-toggle="modal"
                                                        data-target="">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form mb-3">
                                        <div class="ml-3 mr-3">
                                            <label class="travel">Pilih Data Travel</label>
                                            <label class="jasa">Pilih Data Penyedia Jasa</label>
                                            <label class="vendor">Pilih Data Partner</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control text-size readonly pointer"
                                                    name="data_partner" id="data_partner"
                                                    value="<?= $data->nama_partner ?>" aria-label="Recipient's username"
                                                    aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary btn-data text-size" type="button"
                                                        id="btn-data" data-toggle="modal" data-target="">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 nik">
                                        <div class="form-group ml-3 mr-3">
                                            <label>NIK</label>
                                            <input type="phone" class="form-control text-size placement number-only"
                                                name="nik_egc" id="nik_egc" value="<?= $data->nik_egc ?>"
                                                placeholder="072104" minlength="6" maxlength="7" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 posisi">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Posisi</label>
                                            <input type="text" class="form-control text-size" name="posisi_egc"
                                                id="posisi_egc" value="<?= $data->posisi_egc ?>"
                                                placeholder="Input Posisi">
                                        </div>
                                    </div>
                                    <div class="col-md-12 cabang">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Cabang</label>
                                            <input type="text" class="form-control text-size" name="cabang_egc"
                                                id="cabang_egc" value="<?= $data->cabang_egc ?>"
                                                placeholder="Input Cabang">
                                        </div>
                                    </div>
                                    <div class="col-md-6 kontrak-ro">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Nomor Kontrak</label>
                                            <input type="phone" class="form-control text-size placement number-only"
                                                name="nomor_kontrak" id="nomor_kontrak"
                                                value="<?= $data->nomor_kontrak ?>" placeholder="0878837741"
                                                minlength="10" maxlength="10" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 konsumen-ro">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Nama Konsumen</label>
                                            <input type="text" class="form-control text-size" name="referral_konsumen"
                                                id="referral_konsumen" value="<?= $data->referral_konsumen ?>"
                                                placeholder="Input Nama konsumen">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group ml-3 mr-3">
                                            <label>Activity</label>
                                            <select class="form-control text-size" name="activity" id="activity"
                                                required>
                                                <option selected disabled value="">Pilih Kategori Activity</option>
                                                <option <?= $data->activity == 'Direct Selling' ? 'selected' : '' ?>
                                                    value="Direct Selling">Direct Selling</optionm>
                                                <option <?= $data->activity == 'Tele call' ? 'selected' : '' ?>
                                                    value="Tele call">Tele call</option>
                                                <option <?= $data->activity == 'Digital Marketing' ? 'selected' : '' ?>
                                                    value="Digital Marketing">Digital Marketing</option>
                                                <option <?= $data->activity == 'Sosial Media' ? 'selected' : '' ?>
                                                    value="Sosial Media">Sosial Media</option>
                                                <option <?= $data->activity == 'Website' ? 'selected' : '' ?>
                                                    value="Website">Website</option>
                                                <option <?= $data->activity == 'Event Promotion' ? 'selected' : '' ?>
                                                    value="Event Promotion">Event Promotion</option>
                                                <option <?= $data->activity == 'Walk In Branch' ? 'selected' : '' ?>
                                                    value="Walk In Branch">Walk In Branch</option>
                                                <option <?= $data->activity == 'Surat Penawaran' ? 'selected' : '' ?>
                                                    value="Surat Penawaran">Surat Penawaran</option>
                                                <option <?= $data->activity == 'Blast WA / SMS' ? 'selected' : '' ?>
                                                    value="Blast WA / SMS">Blast WA / SMS</option>
                                                <option <?= $data->activity == ''Email Marketing ? 'selected' : '' ?>
                                                    value="Email Marketing">Email Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>Konsumen Cross Branch?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input cross_branch" type="radio"
                                                    name="cross_branch" id="cross_branch"
                                                    <?= $data->cross_branch == 'Ya' ? 'checked' : '' ?> required
                                                    value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input cross_branch" type="radio"
                                                    name="cross_branch" id="cross_branch"
                                                    <?= $data->cross_branch == 'Tidak' ? 'checked' : '' ?> required
                                                    value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telah Dihubungi Melalui</label>
                                            <select class="form-control text-size" name="follow_up_by" id="follow_up_by"
                                                required>
                                                <option selected disabled value="">Hubungi Melalui</option>
                                                <option <?= $data->follow_up_by == 'Kunjungan' ? 'selected' : '' ?>
                                                    value="Kunjungan">Kunjungan</option>
                                                <option <?= $data->follow_up_by == 'Telepon' ? 'selected' : '' ?>
                                                    value="Telepon">Telepon</option>
                                                <option <?= $data->follow_up_by == 'Whatsapp' ? 'selected' : '' ?>
                                                    value="Whatsapp">Whatsapp</option>
                                                <option <?= $data->follow_up_by == 'Email' ? 'selected' : '' ?>
                                                    value="Email">Email</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div id="hide" class="form-group">
                                            <label>Pilih Cabang Tujuan</label>
                                            <select class="form-control text-size" name="cabang_cross"
                                                id="cabang_cross">
                                                <option selected disabled value="">Pilih Cabang</option>
                                                <?php foreach ($branches->result() as $branch) { ?>
                                                <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                <option
                                                    <?= $branch->id_branch == $data->cabang_cross ? 'selected' : '' ?>
                                                    <?= $branch->id_branch == $this->fungsi->user_login()->id_branch ? 'disabled' : '' ?>
                                                    value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-row users">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pic Tanda Tangan</label>
                                            <select class="form-control text-size" name="pic_ttd" id="pic_ttd">
                                                <option value="" selected>Pilih PIC Tanda tangan</option>
                                                <optgroup id="show_pic_ttd">

                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Surveyor</label>
                                            <select class="form-control text-size" name="surveyor" id="surveyor">
                                                <option value="" selected>Pilih Surveyor</option>
                                                <optgroup id="show_surveyor">

                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size">
                                            <label>Appeal NST</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="appeal_nst"
                                                    id="appeal_nst" <?= $data->appeal_nst == 'Ya' ? 'checked' : '' ?>
                                                    required value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="appeal_nst"
                                                    id="appeal_nst" <?= $data->appeal_nst == 'Tidak' ? 'checked' : '' ?>
                                                    required value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3">
                        <button class="btn btn-danger waves-effect waves-light text-size" id="draft" name="draft"
                            class="btn" type="submit">Simpan</button>
                        <button class="btn btn-primary waves-effect waves-light submit text-size ml-1" type="submit"
                            name="process">Kirim</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<!-- Modal simpan -->
<!-- <div class="modal fade" id="modalBerhasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalCenterTitle">Pengajuan Kerjasama Berhasil</h5>
            </div>
            <div class="modal-body">
                Terimakasih telah menyelesaikan tugas perjanjian kerjasama dengan partner potensial di daerah anda.
                Tim HO akan memverifikasi data anda, dan informasinya akan diberikan melalui menu <a href="#" style="color: blue;">motification</a> di website ini.
            </div>
            <div class="modal-footer">
                <a href="index.html"><button class="btn btn-primary">OK</button></a>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal simpan -->

<!-- Modal Mapping Leads -->
<div class="modal fade bd-example-modal-xl" id="modal-leads" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" style="height:700px;">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Leads</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id=""
                    class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                <div class="text-size">Aksi</div>
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
                                <center><button class="btn btn-primary pilih-leads" id="search"
                                        data-mapping="<?= $mapping->leads_id ?>"
                                        data-nama="<?= $mapping->nama_konsumen ?>"
                                        data-telepon="<?= $mapping->telepon ?>" data-soa="<?= $mapping->soa ?>"
                                        data-produk="<?= $mapping->produk ?>"
                                        data-detail="<?= $mapping->detail_produk ?>"
                                        data-event="<?= $mapping->nama_event ?>"
                                        data-kontrak="<?= $mapping->nomor_kontrak ?>"
                                        data-referral="<?= $mapping->referral_konsumen ?>"
                                        data-nikegc="<?= $mapping->nik_egc ?>"
                                        data-posisiegc="<?= $mapping->posisi_egc ?>"
                                        data-cabangegc="<?= $mapping->cabang_egc ?>"
                                        data-partner="<?= $mapping->id_partner ?>"
                                        data-namapartner="<?= $mapping->nama_partner ?>"
                                        data-namaagent="<?= $mapping->nama_agent ?>"
                                        data-agent="<?= $mapping->id_agent ?>">Pilih</button></center>
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
<div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Partner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id=""
                    class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                        <?php foreach ($partners->result() as $partner) { ?>
                        <tr>
                            <td><?= $partner->nama_usaha ?></td>
                            <td><?= $partner->kategori_produk ?></td>
                            <td><?= $partner->telepon ?></td>
                            <td>
                                <?php if ($partner->status == 'draft') { ?>
                                <span class="badge badge-secondary">Draft</span>
                                <?php } ?>
                                <?php if ($partner->status == 'lengkap') { ?>
                                <span class="badge badge-success">Lengkap</span>
                                <?php } ?>
                                <?php if ($partner->status == '') { ?>
                                <span class="badge badge-secondary">Mapping</span>
                                <?php } ?>
                            </td>
                            <td>
                                <center><button class="btn btn-primary pilih-partner"
                                        data-partner="<?= $partner->id_partner ?>"
                                        data-vendor="<?= $partner->nama_usaha ?>">Pilih</button></center>
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
<div class="modal fade" id="modal-agent" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Agent</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id=""
                    class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($agents->result() as $agent) { ?>
                        <tr>
                            <td><?= $agent->nama_lengkap ?></td>
                            <td><?= $agent->telepon ?></td>
                            <td>
                                <center><button class="btn btn-primary pilih-agent" data-agent="<?= $agent->id_agent ?>"
                                        data-namaagent="<?= $agent->nama_lengkap ?>">Pilih</button></center>
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
$('#soa').change(function() {
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
                if ($('#soa').val() == 'HO - Product') {
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
                    $('#data_agent, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required',
                        'required');
                    $('.travel, .agent, .jasa, .event, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                        .hide();
                    $('#status_konsumen').val('');
                } else if ($('#soa').val() == 'CMS') {
                    $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
                    $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
                    $('#btn-data').attr('data-target', '#modal-partner');
                    $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
                    $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required',
                        'required');
                    $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent')
                        .hide();
                    $('#status_konsumen').val('RO Active');
                } else if ($('#soa').val() == 'CGC') {
                    $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
                    $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
                    $('#btn-data').attr('data-target', '#modal-partner');
                    $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
                    $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required',
                        'required');
                    $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent')
                        .hide();
                    $('#status_konsumen').val('');
                } else if ($('#soa').val() == 'Sharia Head') {
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
                    $('#status_konsumen').val('');
                }
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
    $('#data_partner').val($(this).data('vendor'));
    $('#modal-partner').modal('hide');
})
$("table").on('click', '.pilih-agent', function() {
    $('#id_agent').val($(this).data('agent'));
    // $('#id_partner').val("");
    // $('#nama_vendor').val($(this).data('nama'));
    $('#data_agent').val($(this).data('namaagent'));
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
    $('#data_partner').val($(this).data('vendor'));
    $('#detail_produk').val($(this).data('detail'));
    $('#nama_event').val($(this).data('event'));
    $('#nama_konsumen').val($(this).data('nama'));
    $('#data_partner').val($(this).data('namapartner'));
    $('#data_agent').val($(this).data('namaagent'));

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
    $('#id_leads, #id_agent, #id_partner, #nama_konsumen, #produk, #detail_produk, #telepon, #soa, #nama_event, #data_partner, #data_agent, #nik_egc, #posisi_egc, #cabang_egc, #nomor_kontrak, #referral_konsumen')
        .val("");
    $('.travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, #reset')
        .hide();
    $('#nama_konsumen').removeAttr('readonly');
})
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