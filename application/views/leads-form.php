<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4><b>Form Leads Prospect</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Prospect</a></li>
                <li class="breadcrumb-item active">Input Prospect</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary font-size gradient card-margin-5 mb-5" role="alert">
            <div class="ml-4 mr-4 mt-3 mb-3">
                <h5 class="alert-heading"><i class="fas fa-info-circle"></i> Hati - hati dalam menginput data</h5>
                <p class="text-size">Dilarang memalsukan data dan menginput data - data yang bukan milik konsumen. Data ini akan disimpan
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
                <form action="<?= base_url('Leads/save') ?>" method="post" enctype="multipart/form-data" class=" text-size">
                    <input id="website" name="website" type="disable" value="">
                    <!-- ID Leads -->
                    <input type="hidden" id="id_leads" name="id_leads" value="<?= set_value('id_leads') ?>">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_agent" name="id_agent" value="<?= set_value('id_agent') ?>">
                    <!-- ID Mapping Partner -->
                    <input type="hidden" id="id_partner" name="id_partner" value="<?= set_value('id_partner') ?>">
                    <!-- ID Branch -->
                    <input type="hidden" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <div class="form-margin">
                        <h5 class="mt-0 mb-4"><b>Data Konsumen</b></h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-margin">
                                        <label>Nama Lengkap</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen" value="<?= set_value('nama_konsumen') ?>" required placeholder="Ibrahim Ahmad" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger text-size" type="button" id="reset"><b>Hapus</b></button>
                                                <button class="btn btn-primary text-size" type="button" id="" data-toggle="modal" data-target="#modal-leads"><b>Cari</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group form-margin">
                                        <label>Nomor KTP</label>
                                        <input type="phone" class="form-control text-size placement number-only <?= form_error('no_ktp') ? 'is-invalid' : '' ?>" name="no_ktp" id="no_ktp" value="<?= set_value('no_ktp') ?>" required placeholder="0000 0000 0000 0000" minlength="16" maxlength="16" />
                                        <?= form_error('no_ktp') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-left">
                                        <label>Nomor Handphone</label>
                                        <input type="text" class="form-control text-size placement number-only <?= form_error('telepon') ? 'is-invalid' : '' ?>" name="telepon" id="telepon" value="<?= set_value('telepon') ?>" required placeholder="0896 5533 985" maxlength="15" />
                                        <?= form_error('telepon') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-right">
                                        <label>Nomor WA</label>
                                        <input type="text" class="form-control text-size placement number-only <?= form_error('') ? 'is-invalid' : '' ?>" name="" id="" value="<?= set_value('') ?>" required placeholder="0896 5533 985" maxlength="15" />
                                        <?= form_error('') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-left">
                                        <label>Email</label>
                                        <input type="email" class="form-control text-size <?= form_error('email') ? 'is-invalid' : '' ?>" name="email" id="email" value="<?= set_value('email') ?>" placeholder="Email">
                                        <?= form_error('email') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-right">
                                        <label>Pendidikan</label>
                                        <select class="form-control text-size" name="pendidikan" id="pendidikan" required>
                                            <option selected value="">Pilih Pendidikan</option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="SD">SD
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="SLTP">SLTP
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="SMU">SMU
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="SLTA">SLTA
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="STM">STM
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="SMEA">SMEA
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="D1">D1
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="D2">D2
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="D3">D3
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="S1">S1
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="S2">S2
                                            </option>
                                            <option <?= set_value('pendidikan') ? 'selected' : '' ?> value="S3">S3
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group form-left">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control text-size" name="tanggal_lahir" id="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" placeholder="Tanggal lahir">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-right">
                                        <label>Status Pernikahan</label>
                                        <select class="form-control text-size" name="status_pernikahan" id="status_pernikahan" required>
                                            <option selected value="">Pilih Status Pernikahan</option>
                                            <option <?= set_value('status_pernikahan') ?> value="Sudah Menikah">Sudah
                                                Menikah</option>
                                            <option <?= set_value('status_pernikahan') ?> value="Belum Menikah">Belum
                                                Menikah</option>
                                            <option <?= set_value('status_pernikahan') ?> value="Janda/Duda - Meninggal">Janda/Duda - Meninggal</option>
                                            <option <?= set_value('status_pernikahan') ?> value="Janda/Duda - Cerai">
                                                Janda/Duda - Cerai</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row pasangan">
                                <div class="col-md-12">
                                    <div class="form-group form-margin">
                                        <label>Nama Pasangan</label>
                                        <input type="text" class="form-control text-size" name="nama_pasangan" id="nama_pasangan" value="<?= set_value('nama_pasangan') ?>" placeholder="Nama Pasangan">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group text-size form-left">
                                        <label>Pekerjaan Konsumen</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio" name="pekerjaan_konsumen" <?= set_value('pekerjaan_konsumen') == 'Karyawan' ? 'checked' : '' ?> id="pekerjaan_konsumen" required value="Karyawan">
                                            <label class="form-check-label">
                                                Karyawan
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pekerjaan_konsumen" <?= set_value('pekerjaan_konsumen') == 'Wiraswasta' ? 'checked' : '' ?> id="pekerjaan_konsumen" required value="Wiraswasta">
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
                                            <option <?= set_value('status_konsumen') == 'New Customer' ? 'selected' : '' ?> value="New Customer">New Customer</option>
                                            <option <?= set_value('status_konsumen') == 'RO Expire' ? 'selected' : '' ?> value="RO Expire">RO Expire</option>
                                            <option <?= set_value('status_konsumen') == 'RO Active' ? 'selected' : '' ?> value="RO Active">RO Active</option>
                                        </select>
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
                                            <option <?= set_value('lokasi_rumah') == 'Non Perumahan - Tidak bisa Lewat Mobil' ? 'selected' :  '' ?> value="Non Perumahan - Tidak bisa Lewat Mobil">Non Perumahan - Tidak
                                                bisa Lewat Mobil</option>
                                            <option <?= set_value('lokasi_rumah') == 'Non Perumahan - Jalan Satu Mobil' ? 'selected' :  '' ?> value="Non Perumahan - Jalan Satu Mobil">Non Perumahan - Jalan Satu
                                                Mobil</option>
                                            <option <?= set_value('lokasi_rumah') == 'Non Perumahan - Jalan Dua Mobil' ? 'selected' :  '' ?> value="Non Perumahan - Jalan Dua Mobil">Non Perumahan - Jalan Dua
                                                Mobil</option>
                                            <option <?= set_value('lokasi_rumah') == 'Perumahan - Tidak Bisa Lewat Mobil' ? 'selected' :  '' ?> value="Perumahan - Tidak Bisa Lewat Mobil">Perumahan - Tidak Bisa
                                                Lewat Mobil</option>
                                            <option <?= set_value('lokasi_rumah') == 'Perumahan - Jalan Satu Mobil' ? 'selected' :  '' ?> value="Perumahan - Jalan Satu Mobil">Perumahan - Jalan Satu Mobil
                                            </option>
                                            <option <?= set_value('lokasi_rumah') == 'Perumahan - Jalan Dua Mobil' ? 'selected' :  '' ?> value="Perumahan - Jalan Dua Mobil">Perumahan - Jalan Dua Mobil
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
                                            <option value="Permanent">Permanent</option>
                                            <option value="Semi Permanent">Semi Permanent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-right">
                                        <label>Luas Bangunan Rumah</label>
                                        <select class="form-control text-size" name="luas_rumah" id="luas_rumah" required>
                                            <option selected value="">Pilih Kategori Luas Bangunan Rumah</option>
                                            <option value="< 60 M2">
                                                < 60 M2</option> <option value="60 - 100 M2">60 - 100 M2
                                            </option>
                                            <option value="100 - 150 M2">100 - 150 M2</option>
                                            <option value="> 150 M2">> 150 M2</option>
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
                                            <option <?= set_value('soa') == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
                                            <option <?= set_value('soa') == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
                                            <option <?= set_value('soa') == 'Penyedia Jasa' ? 'selected' : '' ?> value="Penyedia Jasa">Penyedia Jasa</option>
                                            <option <?= set_value('soa') == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
                                            <option <?= set_value('soa') == 'EGC' ? 'selected' : '' ?> value="EGC">EGC
                                            </option>
                                            <option <?= set_value('soa') == 'CGC' ? 'selected' : '' ?> value="CGC">CGC
                                            </option>
                                            <option <?= set_value('soa') == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
                                            <option <?= set_value('soa') == 'Website BFI Syariah' ? 'selected' : '' ?> value="Website BFI Syariah">Website BFI Syariah</option>
                                            <option <?= set_value('soa') == 'RO' ? 'selected' : '' ?> value="RO">RO
                                            </option>
                                            <option <?= set_value('soa') == 'Walk In' ? 'selected' : '' ?> value="Walk In">Walk In</option>
                                            <option <?= set_value('soa') == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                            <option <?= set_value('soa') == 'Tele Marketing' ? 'selected' : '' ?> value="Tele Marketing">Tele Marketing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-right">
                                        <label>Activity Marketing</label>
                                        <select class="form-control text-size" name="activity_marketing" id="activity_marketing" required>
                                            <option selected disabled value="">Pilih Kategori Activity Marketing
                                            </option>
                                            <option <?= set_value('activity_marketing') == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
                                            <option <?= set_value('activity_marketing') == 'Tele call' ? 'selected' : '' ?> value="Tele call">Tele call</option>
                                            <option <?= set_value('activity_marketing') == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
                                            <option <?= set_value('activity_marketing') == 'Sosial Media' ? 'selected' : '' ?> value="Sosial Media">Sosial Media</option>
                                            <option <?= set_value('activity_marketing') == 'Website' ? 'selected' : '' ?> value="Website">Website</option>
                                            <option <?= set_value('activity_marketing') == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                            <option <?= set_value('activity_marketing') == 'Walk In Branch' ? 'selected' : '' ?> value="Walk In Branch">Walk In Branch</option>
                                            <option <?= set_value('activity_marketing') == 'Surat Penawaran' ? 'selected' : '' ?> value="Surat Penawaran">Surat Penawaran</option>
                                            <option <?= set_value('activity_marketing') == 'Blast WA / SMS' ? 'selected' : '' ?> value="Blast WA / SMS">Blast WA / SMS</option>
                                            <option <?= set_value('activity_marketing') == 'Email Marketing' ? 'selected' : '' ?> value="Email Marketing">Email Marketing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 event">
                                    <div class="form-group form-margin">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control text-size" name="nama_event" id="nama_event" value="<?= set_value('nama_event') ?>" placeholder="Input Nama Event">
                                    </div>
                                </div>
                                <div class="col-md-12 form-agent">
                                    <div class="form-margin">
                                        <label class="gent">Pilih Data Agent</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control text-size" name="nama_agent" id="nama_agent" value="<?= set_value('nama_agent') ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-data text-size" type="button" id="btn-data-agent" data-toggle="modal" data-target=""><b>Cari</b></button>
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
                                            <input type="text" class="form-control text-size" name="nama_partner" id="nama_partner" value="<?= set_value('nama_partner') ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-data text-size" type="button" id="btn-data" data-toggle="modal" data-target=""><b>Cari</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 nik">
                                    <div class="form-group form-left">
                                        <label>NIK</label>
                                        <input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= set_value('nik_egc') ?>" placeholder="072104" minlength="6" maxlength="7" />
                                    </div>
                                </div>
                                <div class="col-md-6 posisi">
                                    <div class="form-group form-right">
                                        <label>Posisi</label>
                                        <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= set_value('posisi_egc') ?>" placeholder="Input Posisi">
                                    </div>
                                </div>
                                <div class="col-md-12 cabang">
                                    <div class="form-group form-margin">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= set_value('cabang_egc') ?>" placeholder="Input Cabang">
                                    </div>
                                </div>
                                <div class="col-md-6 kontrak-ro">
                                    <div class="form-group form-left">
                                        <label>Nomor Kontrak</label>
                                        <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= set_value('nomor_kontrak') ?>" placeholder="087883774" minlength="10" maxlength="10" />
                                    </div>
                                </div>
                                <div class="col-md-6 konsumen-ro">
                                    <div class="form-group form-right">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= set_value('referral_konsumen') ?>" placeholder="Input Nama konsumen">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group text-size form-left">
                                        <label>Konsumen Cross Branch?</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= set_value('cross_branch') == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                            <label class="form-check-label">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= set_value('cross_branch') == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
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
                                                <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right mt-5 form-margin">
                        <button class="btn btn-light waves-effect waves-light text-size btn-width" id="draft" name="draft" class="btn" type="submit"><b>Simpan</b></button>
                        <button class="btn btn-primary waves-effect waves-light submit text-size btn-width ml-1" type="submit" name="process"><b>Kirim</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<!-- Modal Mapping Leads -->
<div class="modal fade bd-example-modal-xl" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" style="height:700px;">
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Leads</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                    <center><button class="btn btn-primary pilih-leads radius" id="search" data-mapping="<?= $mapping->id_leads ?>" data-nama="<?= $mapping->nama_konsumen ?>" data-telepon="<?= $mapping->telepon ?>" data-soa="<?= $mapping->soa ?>" data-produk="<?= $mapping->produk ?>" data-detail="<?= $mapping->detail_produk ?>" data-event="<?= $mapping->nama_event ?>" data-kontrak="<?= $mapping->nomor_kontrak ?>" data-referral="<?= $mapping->referral_konsumen ?>" data-nikegc="<?= $mapping->nik_egc ?>" data-posisiegc="<?= $mapping->posisi_egc ?>" data-cabangegc="<?= $mapping->cabang_egc ?>" data-partner="<?= $mapping->id_partner ?>" data-namapartner="<?= $mapping->nama_partner ?>" data-namaagent="<?= $mapping->nama_agent ?>" data-agent="<?= $mapping->id_agent ?>">Pilih</button></center>
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
                                        <span class="badge badge-secondary" style="width: 60px; height: 30px;">
                                            <p style="margin-top: 5px;">Draft</p>
                                        </span>
                                    <?php } ?>
                                    <?php if ($partner->status == 'mapping') { ?>
                                        <span class="badge badge-secondary" style="width: 60px; height: 30px;">
                                            <p style="margin-top: 5px;">Mapping</p>
                                        </span>
                                    <?php } ?>
                                    <?php if ($partner->status == 'lengkap') { ?>
                                        <span class="badge badge-success" style="width: 60px; height: 30px;">
                                            <p style="margin-top: 5px;">Lengkap</p>
                                        </span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <center><button class="btn btn-primary pilih-partner radius" data-partner="<?= $partner->id_partner ?>" data-vendor="<?= $partner->nama_usaha ?>">Pilih</button></center>
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($agents->result() as $agent) { ?>
                            <tr>
                                <td><?= $agent->nama_lengkap ?></td>
                                <td><?= $agent->telepon ?></td>
                                <td>
                                    <center><button class="btn btn-primary pilih-agent radius" data-agent="<?= $agent->id_agent ?>" data-namaagent="<?= $agent->nama_lengkap ?>">Pilih</button></center>
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

    function source_leads() {
        $('#id_partner').val("");
        $('#id_agent').val("");
        $('#nama_vendor').val("").removeAttr("required");
        $('#nama_event').val("");
        $('#nama_partner').val("");
        $('#nama_agent').val("");
        $('#nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak').val("");
    }

    function source_leads() {
        if ($('#soa').val() == 'Direct Selling') {
            $('.vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            // $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Tour & travel') {
            $('.travel, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Travel')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Penyedia Jasa') {
            $('.jasa, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Penyedia Jasa')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Agent BA') {
            $('.vendor, .agent, .form, .agent-form, .btn-data, .form-agent').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_agent').attr('placeholder', 'Pilih Nama Agent')
            $('#btn-data-agent').attr('data-target', '#modal-agent')
            // $('#nama_partner, #nama_agent').attr('required', 'required');
            $('#nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required',
                'required');
            $('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'EGC') {
            $('.nik, .posisi, .cabang, .vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#nik_egc, #cabang_egc, #posisi_egc').attr('required', 'required');
            $('#nama_agent, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'RO') {
            $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent').hide();
            $('#status_konsumen').val('RO Active');
        } else if ($('#soa').val() == 'CGC') {
            $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent').hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Digital Marketing') {
            $('.vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Website BFI Syariah') {
            $('.vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Walk In') {
            $('.vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Event Promotion') {
            $('.event, .vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_event').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak').removeAttr('required',
                'required');
            $('.travel, .agent, .jasa, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
        } else if ($('#soa').val() == 'Tele Marketing') {
            $('.vendor, .form, .btn-data').show();
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#nama_partner').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
            $('#status_konsumen').val('');
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
        $('#id_agent').val($(this).data('agent'));
        $('#id_partner').val($(this).data('partner'));
        $('#nama_partner').val($(this).data('namapartner'));
        $('#nama_agent').val($(this).data('namaagent'));
        $('#modal-leads').modal('hide');

        $('#nama_konsumen').attr('readonly', 'readonly');
        $('#reset').show()

        source_leads();
    })
</script>

<script>
    // alert($("#id_leads").val());
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
    $('#reset').click(function() {
        $('#id_mapping_leads, #id_agent, #id_mapping, #nama_konsumen, #produk, #detail_produk, #telepon, #soa, #nama_event, #nama_partner, #nama_agent, #nik_egc, #posisi_egc, #cabang_egc, #nomor_kontrak, #referral_konsumen')
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
            $('#nama_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', '');
        }

        $('#status_konsumen').change(function() {
            if ($('#status_konsumen').val() == "RO Active") {
                $('#soa').val('RO')
                $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
                $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
                $('#btn-data').attr('data-target', '#modal-partner');
                $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
                $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required',
                    '');
            }

            function status_konsumen() {
                if ($('#status_konsumen').val() == "RO Active") {
                    $('.kontrak').show();
                    $('#nomor_kontrak').attr('required', 'required');
                    source_leads();
                } else {
                    $('.kontrak').hide();
                    $('#nomor_kontrak').removeAttr('required', ' ');
                }
            }

            $('#status_pernikahan').change(function() {
                    if ($('#status_pernikahan').val() == "Sudah Menikah") {
                        $('.pasangan').show();
                        $('#nama_pasangan').attr('required', 'required');
                    } else {
                        $('.pasangan').hide();
                        $('#nama_pasangan').removeAttr('required', ' ');
                    }
                }

            )
        })
    })
</script>

<script>
    $(document).ready(function() {
        // $('asd').hide();
        var radioValue = $("input[name='npwp']:checked").val();
        if (radioValue == 'Ada') {
            $(".npwp-form").hide();
            $('.npwp-form').removeAttr('required', '');
        } else if (radioValue == 'Ada') {
            $(".npwp-form").show()
            $('.npwp-form').attr('required', 'required');
        }
    })
</script>