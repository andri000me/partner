<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Mapping Leads</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Mapping Lokasi Partner</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Mapping Leads</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner yang berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar memudahkan anda dalam memaintain partner anda.</p>

                <form class="" action="<?= base_url('mapping_leads/update') ?>" method="post">
                    <!-- ID Mapping Leads -->
                    <input type="hidden" id="id_mapping_leads" name="id_mapping_leads" value="<?= $data->mapping_id ?>">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_agent" name="id_agent" value="<?= $data->id_agent ?>">
                    <!-- ID Partner -->
                    <input type="hidden" id="id_partner" name="id_partner" value="<?= $data->id_partner ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group mr-3 ml-3">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" value="<?= $data->nama_konsumen ?>" required placeholder="Ibrahim Ahmad" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group mr-3 ml-3">
                                        <label>Produk</label>
                                        <select class="form-control" name="produk" id="produk">
                                            <option value="" selected>Kategori Produk</option>
                                            <option <?= $data->produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                            <option <?= $data->produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                            <option <?= $data->produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                            <option <?= $data->produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                            <option <?= $data->produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                            <option <?= $data->produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group mr-3 ml-3">
                                        <label>Asal Aplikasi</label>
                                        <select class="form-control" name="soa" id="soa" required>
                                            <option value="" selected>Pilih Source Aplikasi</option>
                                            <option <?= $data->soa == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
                                            <option <?= $data->soa == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
                                            <option <?= $data->soa == 'Penyedia Jasa' ? 'selected' : '' ?> value="Penyedia Jasa">Penyedia Jasa</option>
                                            <option <?= $data->soa == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
                                            <option <?= $data->soa == 'EGC' ? 'selected' : '' ?> value="EGC">EGC</option>
                                            <option <?= $data->soa == 'CGC' ? 'selected' : '' ?> value="CGC">CGC</option>
                                            <option <?= $data->soa == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
                                            <option <?= $data->soa == 'Website BFI Syariah' ? 'selected' : '' ?> value="Website BFI Syariah">Website BFI Syariah</option>
                                            <option <?= $data->soa == 'RO' ? 'selected' : '' ?> value="RO">RO</option>
                                            <option <?= $data->soa == 'Walking' ? 'selected' : '' ?> value="Walking">Walking</option>
                                            <option <?= $data->soa == 'Event' ? 'selected' : '' ?> value="Event">Event</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 form">
                                    <label class="ml-3 travel">Pilih Data Travel</label>
                                    <label class="ml-3 jasa">Pilih Data Penyedia Jasa</label>
                                    <label class="ml-3 agent">Pilih Data Agent</label>
                                    <div class="input-group ml-3 mb-3">
                                        <input type="text" class="form-control text-size" name="data_partner" id="data_partner" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-data mr-4 text-size" type="button" id="btn-data" data-toggle="modal" data-target=""><span class="ion-ios7-search-strong"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 nik">
                                    <div class="form-group ml-3 mr-3">
                                        <label>NIK</label>
                                        <input type="phone" class="form-control text-size placement" onkeypress="return hanyaAngka(event);" name="nik_egc" id="nik_egc" placeholder="072104" maxlength="6" />
                                    </div>
                                </div>
                                <div class="col-md-6 event">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control text-size" name="nama_event" id="nama_event" placeholder="Nama Event">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 posisi">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Posisi</label>
                                        <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" placeholder="Nama Jabatan / Posisi">
                                    </div>
                                </div>
                                <div class="col-md-6 cabang">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" placeholder="Nama Cabang">
                                    </div>
                                </div>
                                <div class="col-md-6 kontrak-cgc">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nomor Kontrak</label>
                                        <input type="phone" class="form-control text-size" onkeypress="return hanyaAngka(event);" name="nomor_kontrak_cgc" id="nomor_kontrak_cgc" placeholder="087883774" />
                                    </div>
                                </div>
                                <div class="col-md-6 konsumen-cgc">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="nama_konsumen_cgc" id="nama_konsumen_cgc" placeholder="Input Nama konsumen">
                                    </div>
                                </div>
                                <div class="col-md-6 kontrak-ro">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nomor Kontrak</label>
                                        <input type="phone" class="form-control text-size" onkeypress="return hanyaAngka(event);" name="nomor_kontrak_ro" id="nomor_kontrak_ro" placeholder="087883774" />
                                    </div>
                                </div>
                                <div class="col-md-6 konsumen-ro">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="nama_konsumen_ro" id="nama_konsumen_ro" placeholder="Input Nama konsumen">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group mr-3 ml-3">
                                        <label>Nomor Telepon / Whatsapp</label>
                                        <input type="text" class="form-control <?= form_error('telepon') ? 'is-invalid' : '' ?> placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0811977500" maxlength="15" />
                                        <?= form_error('telepon') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group mr-3 ml-3">
                                        <label>Detail Produk</label>
                                        <input type="text" class="form-control" name="detail_produk" id="detail_produk" value="<?= $data->detail_produk ?>" required placeholder="Detail produk" />
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <table id="" class="datatable table table-striped table-bordered dt-responsive nowrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Usaha</th>
                            <th>Kategori Produk</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($partners->result() as $partner) { ?>
                            <tr>
                                <td><?= $partner->nama_usaha ?></td>
                                <td><?= $partner->kategori_produk ?></td>
                                <td><?= $partner->telepon ?></td>
                                <td><button class="btn btn-primary pilih-partner" data-partner="<?= $partner->id_partner ?>" data-vendor="<?= $partner->nama_usaha ?>">Pilih</button></td>
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
                <table id="" class="datatable table table-striped table-bordered dt-responsive nowrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                <td><button class="btn btn-primary pilih-agent" data-agent="<?= $agent->id_agent ?>" data-nama="<?= $agent->nama_lengkap ?>">Pilih</button></td>
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
        $('#id_agent').val("");
        $('#nama_vendor').val($(this).data('vendor'));
        $('#modal-partner').modal('hide');
    })
    $("table").on('click', '.pilih-agent', function() {
        $('#id_agent').val($(this).data('agent'));
        $('#id_partner').val("");
        $('#nama_vendor').val($(this).data('nama'));
        $('#modal-agent').modal('hide');
    })
</script>

<script>
    $('.travel, .agent, .jasa, .event, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
    source_leads();
    $('#soa').change(function() {
        source_leads();
        $('#id_partner').val("");
        $('#id_agent').val("");
        $('#nama_vendor').val("").removeAttr("required");
        $('#nama_event').val("");
        $('#data_partner').val("");
    })

    function source_leads() {
        if ($('#soa').val() == 'Tour & travel') {
            $('.travel, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Travel')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'Penyedia Jasa') {
            $('.jasa, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Pilih Nama Penyedia Jasa')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'Agent BA') {
            $('.agent, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Aisha Putri')
            $('#btn-data').attr('data-target', '#modal-agent')
            $('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'EGC') {
            $('.nik, .posisi, .cabang').show();
            $('.jasa, .travel, .event, .form, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'CGC') {
            $('.kontrak-cgc, .konsumen-cgc').show();
            $('.travel, .agent, .jasa, .event, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'RO') {
            $('.kontrak-ro, .konsumen-ro').show();
            $('.travel, .agent, .jasa, .event, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc').hide();
        } else if ($('#soa').val() == 'Event') {
            $('.event').show();
            $('.travel, .agent, .jasa, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else {
            $('.jasa, .travel, .agent, .form, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        }
    }
</script>