<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Approval Bonus Form</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Approval bonus</a></li>
                <li class="breadcrumb-item active">Approval Bonus Form</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <div class="ml-3">
                    <h4 class="mt-0 header-title">Approval Bonus Form</h4>
                    <p class="text-muted m-b-30 text-size"></p>
                </div>
                <form class="text-size" action="<?= base_url('approval_bonus/save') ?>" method="post">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_approval_bonus" name="id_approval_bonus" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row mb-3">
                                <div class="col-md-12">
                                    <div class="ml-3 mr-3">
                                        <label>Lead ID</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control text-size" name="leads_id" id="leads_id" value="<?= set_value('leads_id') ?>" required placeholder="202001SLOS12345">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger text-size" type="button" id="reset">x</button>
                                                <button class="btn btn-primary text-size" type="button" id="" data-toggle="modal" data-target="#modal-leads"><span class="ion-ios7-search-strong"></span></button>
                                            </div>
                                            <?= form_error('leads_id') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="nama_cabang" id="nama_cabang" value="<?= set_value('nama_cabang') ?>" placeholder="Cabang" readonly>
                                        <input type="hidden" id="cabang" name="cabang" value="<?= set_value('cabang') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Requester</label>
                                        <input type="text" class="form-control text-size" name="nama_requester" id="nama_requester" value="<?= set_value('nama_requester') ?>" placeholder="Requester" value="<?= set_value('requester') ?>" readonly>
                                        <input type="hidden" id="requester" name="requester" value="<?= set_value('requester') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen" placeholder="nama Konsumen" value="<?= set_value('nama_konsumen') ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Tanggal Dibuat</label>
                                        <input type="text" class="form-control text-size" name="tanggal_dibuat" id="tanggal_dibuat" placeholder="Tanggal Dibuat" value="<?= set_value('tanggal_dibuat') ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Produk</label>
                                        <input type="text" class="form-control text-size" name="produk" id="produk" placeholder="Produk" value="<?= set_value('produk') ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Sumber Lead</label>
                                        <input type="text" class="form-control text-size" name="sumber_lead" id="sumber_lead" placeholder="Sumber Lead" value="<?= set_value('sumber_lead') ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Pemberi Lead</label>
                                        <input type="text" class="form-control text-size" name="nama_pemberi_lead" id="nama_pemberi_lead" placeholder="Nama Pemberi lead" value="<?= set_value('nama_pemberi_lead') ?>" readonly>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ml-3 mr-3">
                                <label>Nomor Kontrak</label>
                                <input type="text" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= set_value('nomor_kontrak') ?>" required placeholder="Nomor Kontrak" minlength="10" maxlength="10" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nomor Rekening</label>
                                <input type="text" class="form-control text-size placement number-only" name="nomor_rekening" id="nomor_rekening" value="<?= set_value('nomor_rekening') ?>" required placeholder="Nomor Rekening" minlength="16" maxlength="16" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Atas Nama</label>
                                <input type="text" class="form-control text-size" name="atas_nama" id="atas_nama" value="<?= set_value('atas_nama') ?>" required placeholder="Atas Nama" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Bank</label>
                                <input type="text" class="form-control text-size" name="nama_bank" id="nama_bank" value="<?= set_value('nama_bank') ?>" required placeholder="Nomor Rekening" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nomor NPWP</label>
                                <input type="text" class="form-control text-size placement number-only" name="npwp" id="npwp" value="<?= set_value('npwp') ?>" required placeholder="NPWP" minlength="15" maxlength="15" />
                            </div>
                            <div class="form-group text-size ml-3 mr-3">
                                <label>Data Lampiran</label>
                                <input type="file" name="lampiran" class="filestyle" data-buttonname="btn-secondary">
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

<!-- Modal Leads -->
<div class="modal fade bd-example-modal-xl" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" style="height:700px;">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Leads</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                <div class="text-size">Nama Lengkap</div>
                            </th>
                            <th>
                                <div class="text-size">Leads ID</div>
                            </th>
                            <th>
                                <div class="text-size">Nomor KTP</div>
                            </th>
                            <th>
                                <div class="text-size">Follow Up By</div>
                            </th>
                            <th>
                                <div class="text-size">Action</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($leads->result() as $data) { ?>
                            <tr>
                                <td>
                                    <div class="text-size"><?= $data->nama_konsumen_leads ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $data->leads_id_leads ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $data->no_ktp ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $data->follow_up_by ?></div>
                                </td>
                                <td>
                                    <center>
                                        <button class="btn btn-primary pilih-leads" data-leads="<?= $data->leads_id_leads ?>" data-cabang="<?= $data->id_branch_leads ?>" data-namacabang="<?= $data->nama_cabang ?>" data-requester="<?= $data->id_user_leads ?>" data-namarequester="<?= $data->name ?>" data-konsumen="<?= $data->nama_konsumen_leads ?>" data-tanggal="<?= $data->created_at_leads ?>" data-produk="<?= $data->produk_leads ?>" data-soa="<?= $data->soa ?>">Pilih</button>
                                    </center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal Leads-->

<script>
    $("table").on('click', '.pilih-leads', function() {

        var leads = $(this).data('leads');
        var cabang = $(this).data('cabang');
        var namacabang = $(this).data('namacabang');
        var requester = $(this).data('requester');
        var namarequester = $(this).data('namarequester');
        var konsumen = $(this).data('konsumen');
        var tanggal = $(this).data('tanggal');
        var produk = $(this).data('produk');
        var soa = $(this).data('soa');

        $('#leads_id').val(leads);
        $('#cabang').val(cabang);
        $('#nama_cabang').val(namacabang);
        $('#requester').val(requester);
        $('#nama_requester').val(namarequester);
        $('#nama_konsumen').val(konsumen);
        $('#tanggal_dibuat').val(tanggal);
        $('#produk').val(produk);
        $('#sumber_lead').val(soa);

        $('.bd-example-modal-xl').modal('hide');

        // $('#nama_usaha').attr('readonly', 'readonly');
        // $('#reset').show()
    })
</script>

<script>
    $('#reset').hide();
</script>