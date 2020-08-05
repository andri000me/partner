<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4 class="page-title">Tambah Data</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Approval bonus</a></li>
                <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary font-size gradient card-margin-5" role="alert">
            <div class="ml-4 mr-4 mt-3 mb-3">
                <h5 class="alert-heading"><i class="fas fa-info-circle"></i> Hati - hati dalam menginput data</h5>
                <p>Cari data menggunakan tombol search di bawah
                    ini.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20 card-margin-5">
            <div class="card-body">
                <div class="ml-4">
                    <h4 class="mt-0 mb-4 header-title">Approval Bonus Form</h4>
                    <!-- <p class="text-muted m-b-30 text-size"></p> -->
                </div>
                <form class="text-size" action="<?= base_url('approval_bonus/update') ?>" method="post">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_approval_bonus" name="id_approval_bonus" value="<?= $data->id_approval_bonus ?>">
                    <!-- ID Ticket -->
                    <input type="hidden" id="id_ticket" name="id_ticket" value="<?= $ticket->id_ticket ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row mb-3">
                                <div class="col-md-12">
                                    <div class="ml-4 mr-4">
                                        <label>Lead ID</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control text-size" name="leads_id" id="leads_id" value="<?= $data->leads_id ?>" required placeholder="202001SLOS12345">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger text-size" type="button" id="reset">Hapus</button>
                                                <button class="btn btn-primary text-size" type="button" id="" data-toggle="modal" data-target="#modal-leads">Cari</button>
                                            </div>
                                            <?= form_error('leads_id') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-4 mr-4">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="nama_cabang" id="nama_cabang" value="<?= $ticket->nama_cabang ?>" placeholder="Cabang" readonly>
                                        <input type="hidden" id="cabang" name="cabang" value="<?= $ticket->cabang ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-4 mr-4">
                                        <label>Requester</label>
                                        <input type="text" class="form-control text-size" name="requester" id="requester" value="<?= $ticket->name ?>" placeholder="Requester" readonly>
                                        <input type="hidden" id="requester" name="requester" value="<?= $ticket->requester ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-4 mr-4">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen" placeholder="nama Konsumen" value="<?= $data->nama_konsumen ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-4 mr-4">
                                        <label>Tanggal Dibuat</label>
                                        <input type="text" class="form-control text-size" name="tanggal_dibuat" id="tanggal_dibuat" placeholder="Tanggal Dibuat" value="<?= $data->tanggal_dibuat ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-4 mr-4">
                                        <label>Produk</label>
                                        <input type="text" class="form-control text-size" name="produk" id="produk" placeholder="Produk" value="<?= $data->produk ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-4 mr-4">
                                        <label>Sumber Lead</label>
                                        <input type="text" class="form-control text-size" name="sumber_lead" id="sumber_lead" placeholder="Sumber Lead" value="<?= $data->sumber_lead ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <!-- <div class="col-md-12">
                                    <div class="form-group ml-4 mr-4">
                                        <label>Nama Pemberi Lead</label>
                                        <input type="text" class="form-control text-size" name="nama_pemberi_lead" id="nama_pemberi_lead" placeholder="Nama Pemberi lead" value="<?= $data->nama_pemberi_lead ?>" readonly>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ml-4 mr-4">
                                <label>Nomor Kontrak</label>
                                <input type="text" class="form-control text-size placement number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= $data->nomor_kontrak ?>" required placeholder="Nomor Kontrak" minlength="10" maxlength="10" />
                            </div>
                            <div class="form-group ml-4 mr-4">
                                <label>Nomor Rekening</label>
                                <input type="text" class="form-control text-size placement number-only" name="nomor_rekening" id="nomor_rekening" value="<?= $data->nomor_rekening ?>" required placeholder="Nomor Rekening" minlength="7" maxlength="50" />
                            </div>
                            <div class="form-group ml-4 mr-4">
                                <label>Atas Nama</label>
                                <input type="text" class="form-control text-size" name="atas_nama" id="atas_nama" value="<?= $data->atas_nama ?>" required placeholder="Atas Nama" />
                            </div>
                            <div class="form-group ml-4 mr-4">
                                <label>Nama Bank</label>
                                <input type="text" class="form-control text-size" name="nama_bank" id="nama_bank" value="<?= $data->nama_bank ?>" required placeholder="Nomor Rekening" />
                            </div>
                            <div class="form-group ml-4 mr-4">
                                <label>NPWP</label>
                                <input type="text" class="form-control text-size placement number-only" name="npwp" id="npwp" value="<?= $data->npwp ?>" required placeholder="NPWP" minlength="15" maxlength="15" />
                            </div>
                            <div class="form-group text-size ml-4 mr-4">
                                <label>Data Lampiran</label>
                                <input type="file" name="lampiran" class="filestyle" data-buttonname="btn-secondary">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right mt-4 mr-4">
                        <?php
                        $level = $this->fungsi->user_login()->level;
                        if (($level != 1) && (($level == 2 && $data->status == 0) || ($level == 3 && $data->status == 1) || ($level == 4 && $data->status == 2))) {
                        ?>
                            <a class="btn btn-info text-size" onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')" href="<?= base_url('ticket/approve_status/' . $data->id_ticket) ?>">Approve</a>
                        <?php } ?>
                        <?php if ($level == 4 && $data->status == 2) { ?>
                            <a class="btn btn-danger text-size" onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href="<?= base_url('ticket/reject_status/' . $data->id_ticket) ?>">Reject</a>
                        <?php } ?>
                        <a href="<?= base_url('mapping_leads') ?>" class="btn btn-secondary waves-effect waves-light text-size">Batal</a>
                        <?php if ($level < 4) { ?>
                            <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                                Simpan
                            </button>
                        <?php } ?>
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
                <table class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                        <?php foreach ($fs_konsumen->result() as $leads) { ?>
                            <tr>
                                <td>
                                    <div class="text-size"><?= $leads->nama_konsumen ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $leads->leads_id ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $leads->no_ktp ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $leads->follow_up_by ?></div>
                                </td>
                                <td>
                                    <center>
                                        <button class="btn btn-primary pilih-leads radius" data-leads="<?= $leads->leads_id ?>" data-cabang="<?= $leads->id_branch ?>" data-namacabang="<?= $leads->nama_cabang ?>" data-requester="<?= $leads->id_user ?>" data-namarequester="<?= $leads->name ?>" data-konsumen="<?= $leads->nama_konsumen ?>" data-tanggal="<?= $leads->created_at ?>" data-produk="<?= $leads->produk ?>" data-soa="<?= $leads->soa ?>">Pilih</button>
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