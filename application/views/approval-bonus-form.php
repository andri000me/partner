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
                <form class="text-size" action="<?= base_url('mapping_leads/save') ?>" method="post">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_agent" name="id_agent" value="<?= set_value('id_agent') ?>">
                    <!-- ID Partner -->
                    <input type="hidden" id="id_mapping" name="id_mapping" value="<?= set_value('id_mapping') ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row mb-3">
                                <div class="col-md-12">
                                    <div class="ml-3 mr-3">
                                        <label>Lead ID</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control text-size" name="lead_id" id="lead_id" required placeholder="202001SLOS12345" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger text-size" type="button" id="reset">x</button>
                                                <button class="btn btn-primary text-size" type="button" id="" data-toggle="modal" data-target="#modal-leads"><span class="ion-ios7-search-strong"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="cabang" id="cabang" placeholder="Cabang" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Requester</label>
                                        <input type="text" class="form-control text-size" name="requester" id="requester" placeholder="Requester" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen" placeholder="nama Konsumen" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Tanggal Dibuat</label>
                                        <input type="text" class="form-control text-size" name="date" id="date" placeholder="Tanggal Dibuat" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Produk</label>
                                        <input type="text" class="form-control text-size" name="produk" id="produk" placeholder="Produk" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Sumber Lead</label>
                                        <input type="text" class="form-control text-size" name="sumber_lead" id="sumber_lead" placeholder="Sumber Lead" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Pemberi Lead</label>
                                        <input type="text" class="form-control text-size" name="nama_pemberi-lead" id="nama_pemberi-lead" placeholder="Nama Pemberi lead" value="" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ml-3 mr-3">
                                <label>Nomor Kontrak</label>
                                <input type="text" class="form-control text-size placement number-only" name="no_kontrak" id="no_kontrak" value="" required placeholder="Nomor Kontrak" minlength="10" maxlength="10" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nomor Rekening</label>
                                <input type="text" class="form-control text-size placement number-only" name="no_rekening" id="no_rekening" value="" required placeholder="Nomor Rekening" minlength="16" maxlength="16" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Atas Nama</label>
                                <input type="text" class="form-control text-size" name="atas_nama" id="atas_nama" value="" required placeholder="Atas Nama" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Bank</label>
                                <input type="text" class="form-control text-size" name="nama_bank" id="nama_bank" value="" required placeholder="Nomor Rekening" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>NPWP</label>
                                <input type="text" class="form-control text-size placement number-only" name="npwp" id="npwp" value="" required placeholder="NPWP" minlength="15" maxlength="15" />
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
                                <center>
                                    <button class="btn btn-primary">Pilih</button>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal Leads-->