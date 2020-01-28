<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Leads Database</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item active">Leads Database</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <div class="ml-3">
                    <h4 class="mt-0 header-title">Leads Database</h4>
                    <p class="text-muted m-b-30 text-size">Input data leads anda untuk keperluan database.</p>
                </div>
                <form class="text-size" action="<?= base_url('mapping_leads/save') ?>" method="post">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_agent" name="id_agent" value="<?= set_value('id_agent') ?>">
                    <!-- ID Partner -->
                    <input type="hidden" id="id_mapping" name="id_mapping" value="<?= set_value('id_mapping') ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ml-3 mr-3">
                                <div class="form-group">
                                    <label>Nama Konsumen</label>
                                    <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen" value="<?= set_value('nama_konsumen') ?>" required placeholder="Ibrahim Ahmad" />
                                </div>
                                <div class="form-group">
                                    <label>Produk</label>
                                    <select class="form-control text-size" name="produk" id="produk" required>
                                        <option value="" selected>Pilih Kategori Produk</option>
                                        <option <?= set_value('produk') == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                        <option <?= set_value('produk') == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                        <option <?= set_value('produk') == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                        <option <?= set_value('produk') == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                        <option <?= set_value('produk') == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                        <option <?= set_value('produk') == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                    </select>
                                </div>
                                <div class="form-group text-size">
                                    <label>Detail Produk</label>
                                    <input type="text" class="form-control text-size" name="detail_produk" id="detail_produk" value="<?= set_value('detail_produk') ?>" required placeholder="Nama Barang / Jasa" />
                                </div>
                                <div class="form-group">
                                    <label>Handphone/Whatsapp</label>
                                    <input type="text" class="form-control text-size <?= form_error('telepon') ? 'is-invalid' : '' ?> placement number-only" name="telepon" id="telepon" value="<?= set_value('telepon') ?>" required placeholder="0811977500" maxlength="15" />
                                    <?= form_error('telepon') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ml-3 mr-3">
                                <div class="form-group text-size">
                                    <label>SOA</label>
                                    <select class="form-control text-size" name="soa" id="soa" required>
                                        <option value="" selected>Pilih Source Aplikasi</option>
                                        <option <?= set_value('soa') == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
                                        <option <?= set_value('soa') == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
                                        <option <?= set_value('soa') == 'Penyedia Jasa' ? 'selected' : '' ?> value="Penyedia Jasa">Penyedia Jasa</option>
                                        <option <?= set_value('soa') == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
                                        <option <?= set_value('soa') == 'EGC' ? 'selected' : '' ?> value="EGC">EGC</option>
                                        <option <?= set_value('soa') == 'CGC' ? 'selected' : '' ?> value="CGC">CGC</option>
                                        <option <?= set_value('soa') == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
                                        <option <?= set_value('soa') == 'Website BFI Syariah' ? 'selected' : '' ?> value="Website BFI Syariah">Website BFI Syariah</option>
                                        <option <?= set_value('soa') == 'RO' ? 'selected' : '' ?> value="RO">RO</option>
                                        <option <?= set_value('soa') == 'Walk In' ? 'selected' : '' ?> value="Walk In">Walk In</option>
                                        <option <?= set_value('soa') == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                        <option <?= set_value('soa') == 'Tele Marketing' ? 'selected' : '' ?> value="Tele Marketing">Tele Marketing</option>
                                    </select>
                                </div>
                                <div class="event">
                                    <div class="form-group">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control text-size" name="nama_event" id="nama_event" value="<?= set_value('nama_event') ?>" placeholder="Nama Event">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 nik">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= set_value('nik_egc') ?>" placeholder="072104" maxlength="6" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 posisi">
                                        <div class="form-group">
                                            <label>Posisi</label>
                                            <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= set_value('posisi_egc') ?>" placeholder="Nama Jabatan / Posisi">
                                        </div>
                                    </div>

                                </div>
                                <div class="cabang">
                                    <div class="form-group">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= set_value('cabang_egc') ?>" placeholder="Nama Cabang">
                                    </div>
                                </div>
                                <div class="kontrak-ro">
                                    <div class="form-group">
                                        <label>Nomor Kontrak</label>
                                        <input type="phone" class="form-control text-size number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= set_value('nomor_kontrak') ?>" placeholder="087883774" />
                                    </div>
                                </div>
                                <div class="konsumen-ro">
                                    <div class="form-group">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= set_value('referral_konsumen') ?>" placeholder="Input Nama konsumen">
                                    </div>
                                </div>
                                <div class="form-agent mb-3">
                                    <label class="agent">Pilih Data Agent</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-size readonly pointer" name="data_agent" id="data_agent" value="<?= set_value('data_agent') ?>" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-data text-size" type="button" id="btn-data-agent" data-toggle="modal" data-target=""><span class="ion-ios7-search-strong"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form mb-3">
                                    <label class="vendor">Pilih Data Partner</label>
                                    <label class="travel">Pilih Data Travel</label>
                                    <label class="jasa">Pilih Data Penyedia Jasa</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-size readonly pointer" name="data_partner" id="data_partner" value="<?= set_value('data_partner') ?>" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-data text-size" type="button" id="btn-data" data-toggle="modal" data-target=""><span class="ion-ios7-search-strong"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3">
                        <a href="<?= base_url('mapping_leads') ?>" class="btn btn-secondary waves-effect waves-light text-size">Batal</a>
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</div>
</div>
<!-- end content -->


<!-- Modal partner -->
<div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Partner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <a href="<?= base_url('partner/create') ?>" class="btn btn-primary mb-2">Buat Data Partner +</a>
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
                        <?php foreach ($partners->result() as $partner) { ?>
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
                                    <center><button class="btn btn-primary pilih-partner" data-partner="<?= $partner->id_mapping ?>" data-vendor="<?= $partner->nama_usaha ?>">Pilih</button></center>
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
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Agent</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <a href="<?= base_url('agent/create') ?>" class="btn btn-primary mb-2">Buat Data Agent +</a>
                <table id="" class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                    <center><button class="btn btn-primary pilih-agent" data-agent="<?= $agent->id_agent ?>" data-nama="<?= $agent->nama_lengkap ?>">Pilih</button></center>
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

<script>
    $("table").on('click', '.pilih-partner', function() {
        $('#id_mapping').val($(this).data('partner'));
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
    $('.travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor').hide();
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
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else if ($('#soa').val() == 'Tour & travel') {
            $('.travel, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Travel')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent').hide();
        } else if ($('#soa').val() == 'Penyedia Jasa') {
            $('.jasa, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Penyedia Jasa')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent').hide();
        } else if ($('#soa').val() == 'Agent BA') {
            $('.vendor, .agent, .form, .agent-form, .btn-data, .form-agent').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_agent').attr('placeholder', 'Pilih Nama Agent')
            $('#btn-data-agent').attr('data-target', '#modal-agent')
            $('#data_partner, #data_agent').attr('required', 'required');
            $('#nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'EGC') {
            $('.nik, .posisi, .cabang, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#data_partner, #nik_egc, #cabang_egc, #posisi_egc').attr('required', 'required');
            $('#data_agent, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else if ($('#soa').val() == 'RO' || $('#soa').val() == 'CGC') {
            $('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner');
            $('#btn-data').attr('data-target', '#modal-partner');
            $('#data_partner, #referral_konsumen, #nomor_kontrak').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent').hide();
        } else if ($('#soa').val() == 'Digital Marketing') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else if ($('#soa').val() == 'Website BFI Syariah') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else if ($('#soa').val() == 'Walk In') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else if ($('#soa').val() == 'Event Promotion') {
            $('.event, .vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner, #nama_event').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else if ($('#soa').val() == 'Tele Marketing') {
            $('.vendor, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Partner')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('#data_partner').attr('required', 'required');
            $('#data_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event').removeAttr('required', 'required');
            $('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
        } else {
            $('.jasa, .travel, .agent, .form, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
            $('#data_partner, #data_agent').removeAttr('required', 'required');
        }
    }

    $(".readonly").keydown(function(e) {
        e.preventDefault();
    });
</script>