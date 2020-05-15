<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4><b>Detail Leads Database</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('leads/leads_database') ?>">Leads Database</a></li>
                <li class="breadcrumb-item active">Input Leads</li>
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
                <p>Input data leads anda untuk keperluan database.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card m-b-20 card-margin-left">
            <div class="card-body">
                <div class="ml-4">
                    <h4 class="mt-0 mb-4 header-title"><b>Form Leads Database</b></h4>
                </div>
                <form class="" action="<?= base_url('leads/update_database') ?>" method="post">
                    <!-- ID Leads -->
                    <input type="hidden" id="id_leads" name="id_leads" value="<?= $data->id_leads ?>">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_agent" name="id_agent" value="<?= $data->id_agent ?>">
                    <!-- ID Partner -->
                    <input type="hidden" id="id_partner" name="id_partner" value="<?= $data->id_partner ?>">
                    <!-- Redirect -->
                    <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group form-margin">
                                <label>Nama Konsumen</label>
                                <input type="text" class="form-control text-size " name="nama_konsumen" id="nama_konsumen" value="<?= $data->nama_konsumen ?>" required placeholder="Ibrahim Ahmad" />
                            </div>
                            <div class="form-group form-margin">
                                <label>Produk</label>
                                <select class="form-control text-size " name="produk" id="produk">
                                    <option value="" selected>Pilih Kategori Produk</option>
                                    <option <?= $data->produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My
                                        Ihram</option>
                                    <option <?= $data->produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My
                                        Safar</option>
                                    <option <?= $data->produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My
                                        Talim</option>
                                    <option <?= $data->produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My
                                        Hajat</option>
                                    <option <?= $data->produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">
                                        My Faedah</option>
                                    <option <?= $data->produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My
                                        CarS</option>
                                </select>
                            </div>
                            <div class="form-group form-margin">
                                <label>Detail Produk</label>
                                <input type="text" class="form-control text-size " name="detail_produk" id="detail_produk" value="<?= $data->detail_produk ?>" required placeholder="Detail produk" />
                            </div>
                            <div class="form-group form-margin">
                                <label>Handphone/Whatsapp</label>
                                <input type="text" class="form-control text-size  <?= form_error('telepon') ? 'is-invalid' : '' ?> placement number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0811977500" maxlength="15" />
                                <?= form_error('telepon') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-margin">
                                <label>SOA</label>
                                <select class="form-control text-size" name="soa" id="soa" required>
                                    <option value="" selected>Pilih Source Aplikasi</option>
                                    <option <?= $data->soa == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
                                    <option <?= $data->soa == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
                                    <option <?= $data->soa == 'Penyedia Jasa' ? 'selected' : '' ?> value="Penyedia Jasa">Penyedia Jasa</option>
                                    <option <?= $data->soa == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent
                                        BA</option>
                                    <option <?= $data->soa == 'EGC' ? 'selected' : '' ?> value="EGC">EGC</option>
                                    <option <?= $data->soa == 'CGC' ? 'selected' : '' ?> value="CGC">CGC</option>
                                    <option <?= $data->soa == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
                                    <option <?= $data->soa == 'Website BFI Syariah' ? 'selected' : '' ?> value="Website BFI Syariah">Website BFI Syariah</option>
                                    <option <?= $data->soa == 'RO' ? 'selected' : '' ?> value="RO">RO</option>
                                    <option <?= $data->soa == 'Walk In' ? 'selected' : '' ?> value="Walk In">Walk In
                                    </option>
                                    <option <?= $data->soa == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                    <option <?= $data->soa == 'Tele Marketing' ? 'selected' : '' ?> value="Tele Marketing">Tele Marketing</option>
                                </select>
                            </div>
                            <div class="form-group form-margin event">
                                <label>Nama Event</label>
                                <input type="text" class="form-control text-size" name="nama_event" id="nama_event" value="<?= $data->nama_event ?>" placeholder="Nama Event">
                            </div>
                            <div class="row">
                                <div class="col-md-6 nik">
                                    <div class="form-group form-left">
                                        <label>NIK</label>
                                        <input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= $data->nik_egc ?>" placeholder="072104" minlength="6" maxlength="7" />
                                    </div>
                                </div>
                                <div class="col-md-6 cabang">
                                    <div class="form-group form-right">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= $data->cabang_egc ?>" placeholder="Nama Cabang">
                                    </div>
                                </div>
                            </div>
                            <div class="posisi">
                                <div class="form-group form-margin">
                                    <label>Posisi</label>
                                    <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= $data->posisi_egc ?>" placeholder="Nama Jabatan / Posisi">
                                </div>
                            </div>
                            <div class="kontrak-ro">
                                <div class="form-group form-margin">
                                    <label>Nomor Kontrak</label>
                                    <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= $data->nomor_kontrak ?>" placeholder="087883774" minlength="10" maxlength="10" />
                                </div>
                            </div>
                            <div class="konsumen-ro">
                                <div class="form-group form-margin">
                                    <label>Nama Konsumen</label>
                                    <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= $data->referral_konsumen ?>" placeholder="Input Nama konsumen">
                                </div>
                            </div>
                            <div class="form-agent form-margin">
                                <label class="agent">Pilih Data Agent</label>
                                <div class="input-group">
                                    <input type="text" class="form-control text-size readonly pointer" name="data_agent" id="data_agent" value="<?= $data->nama_agent ?>" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-data text-size" type="button" id="btn-data-agent" data-toggle="modal" data-target=""><b>Cari</b></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form form-margin">
                                <label class=" vendor">Pilih Data Partner</label>
                                <label class=" travel">Pilih Data Travel</label>
                                <label class=" jasa">Pilih Data Penyedia Jasa</label>
                                <div class="input-group">
                                    <input type="text" class="form-control text-size readonly pointer" name="data_partner" id="data_partner" value="<?= $data->nama_partner ?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-data text-size" type="button" id="btn-data" data-toggle="modal" data-target=""><b>Cari</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right mt-4 form-margin">
                        <a href="<?= base_url('leads/leads_database') ?>" class="btn btn-secondary waves-effect waves-light text-size btn-width"><b>Batal</b></a>
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size btn-width ml-1">
                            <b>Simpan</b>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card m-b-20 card-margin-left">
            <div class="card-body">
                <div class="ml-4">
                    <h4 class="mt-0 mb-4 header-title"><b>Form Follow Up</b></h4>
                </div>
                <form class="" action="<?= base_url('Leads_follow_up/save') ?>" method="post">
                    <!-- ID Partner -->
                    <input type="hidden" name="id_leads" value="<?= $data->id_leads ?>">
                    <!-- Redirect -->
                    <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                    <div class="form-group form-margin">
                        <label>Follow Up By</label>
                        <select class="form-control text-size" name="follow_up_by" id="follow_up_by" required>
                            <option selected disabled value="">Pilih Kegiatan Follow Up</option>
                            <option value="Visit Konsumen">Visit Konsumen</option>
                            <option value="Telepon">Telepon</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Email">Email</option>
                        </select>
                    </div>
                    <div class="form-group form-margin">
                        <label>Catatan</label>
                        <textarea class="form-control text-size" name="catatan" id="catatan" cols="30" rows="10" required placeholder="Jelaskan detail kegiatan anda" style="height:80px;"></textarea>
                    </div>
                    <div class="form-group mb-0 float-right ml-4 mr-4">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-width">
                                <b>Kirim</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4 web">
        <div class="card  m-b-20 card-margin-right card-height">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4"><b>Timeline</b></h4>
                <div class="overflow-auto box-timeline">
                    <div class="tab-pane p-3" id="profile2" role="tabpanel">
                        <ol class="activity-feed mb-0">
                            <?php
                            if ($follow_up->num_rows() > 0) {
                                foreach ($follow_up->result() as $data) {
                            ?>
                                    <li class="feed-item text-size">
                                        <div class="feed-item-list">
                                            <span class="activity-text text-primary"><b>Follow Up By
                                                    <?= $data->follow_up_by ?></b></span><br>
                                            <span class="activity-text"><b>Oleh <?= $data->name ?></b></span>
                                            <span class="date"><?= $data->tanggal_follow_up ?></span>
                                            <span class="activity-text"><?= $data->catatan ?></span>
                                        </div>
                                    </li>
                                <?php
                                }
                            } else { ?>
                                <p class="text-muted m-b-10 text-size text-center">Tidak Ada Data</p>
                            <?php } ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 mobile">
        <div class="card ">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4"><b>Timeline</b></h4>
                <ol class="activity-feed mb-0">
                    <?php
                    if ($follow_up->num_rows() > 0) {
                        foreach ($follow_up->result() as $data) {
                    ?>
                            <li class="feed-item text-size">
                                <div class="feed-item-list">
                                    <span class="activity-text"><b>Follow Up By <?= $data->follow_up_by ?></b></span><br>
                                    <span class="activity-text"><b>Oleh <?= $data->name ?></b></span>
                                    <span class="date"><?= $data->tanggal_follow_up ?></span>
                                    <span class="activity-text"><?= $data->catatan ?></span>
                                </div>
                            </li>
                        <?php
                        }
                    } else { ?>
                        <p class="text-muted m-b-10 text-size text-center">Tidak Ada Data</p>
                    <?php } ?>
                </ol>
            </div>
        </div>
    </div>
</div>


<!-- Modal partner -->
<div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Partner</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <a href="<?= base_url('partner/create') ?>" class="btn btn-primary mb-2 w-md"><b>Buat Data Partner</b></a>
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
                                <td><button class="btn btn-primary pilih-partner radius" data-partner="<?= $partner->id_partner ?>" data-vendor="<?= $partner->nama_usaha ?>">Pilih</button></td>
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
                <a href="<?= base_url('agent/create') ?>" class="btn btn-primary mb-2 w-md"><b>Buat Data Agent</b></a>
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
                                <td><button class="btn btn-primary pilih-agent radius" data-agent="<?= $agent->id_agent ?>" data-nama="<?= $agent->nama_lengkap ?>">Pilih</button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal agent -->

<script>
    $("table").on('click', '.pilih-partner', function() {
        $('#id_partner').val($(this).data('partner'));
        // $('#id_agent').val("");
        $('#data_partner').val($(this).data('vendor'));
        $('#modal-partner').modal('hide');
    })
    $("table").on('click', '.pilih-agent', function() {
        $('#id_agent').val($(this).data('agent'));
        // $('#id_partner').val("");
        $('#data_agent').val($(this).data('nama'));
        $('#modal-agent').modal('hide');
    })
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
        } else if ($('#soa').val() == 'Tour & travel') {
            $('.travel, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Travel')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent')
                .hide();
        } else if ($('#soa').val() == 'Penyedia Jasa') {
            $('.jasa, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Penyedia Jasa')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent')
                .hide();
        } else if ($('#soa').val() == 'Agent BA') {
            $('.vendor, .agent, .form, .agent-form, .btn-data, .form-agent').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_agent').attr('placeholder', 'Pilih Nama Agent')
            $('#btn-data-agent').attr('data-target', '#modal-agent')
            // $('#data_partner, #data_agent').attr('required', 'required');
            $('#nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required',
                'required');
            $('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro')
                .hide();
        } else if ($('#soa').val() == 'EGC') {
            $('.nik, .posisi, .cabang, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#nik_egc, #cabang_egc, #posisi_egc').attr('required', 'required');
            $('#data_agent, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else if ($('#soa').val() == 'RO' || $('#soa').val() == 'CGC') {
            $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent').hide();
        } else if ($('#soa').val() == 'Digital Marketing') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
        } else if ($('#soa').val() == 'Website BFI Syariah') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
        } else if ($('#soa').val() == 'Walk In') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
        } else if ($('#soa').val() == 'Event Promotion') {
            $('.event, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#nama_event').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak').removeAttr('required',
                'required');
            $('.travel, .agent, .jasa, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
        } else if ($('#soa').val() == 'Tele Marketing') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            // $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event')
                .removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent')
                .hide();
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