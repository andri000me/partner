<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box text size">
            <h4 class="page-title">Tranfer Data</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Tranfer Data</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card m-b-20">

            <div class="card-body text-size">

                <h4 class="mt-0 header-title">Proses Transfer Data</h4>
                <p class="text-muted m-b-30 text-size">Silahkan pilih data yang akan di tranfer.</p>

                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#database" role="tab">
                            <span class="d-block d-sm-none">Leads Database</span>
                            <span class="d-none d-sm-block">Leads Database</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#prospect" role="tab">
                            <span class="d-block d-sm-none">Leads Prospect</span>
                            <span class="d-none d-sm-block">Leads Prospect</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mapping" role="tab">
                            <span class="d-block d-sm-none">Mapping Partner</span>
                            <span class="d-none d-sm-block">Mapping Partner</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#partnership" role="tab">
                            <span class="d-block d-sm-none">Partnership</span>
                            <span class="d-none d-sm-block">Partnership</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#agent" role="tab">
                            <span class="d-block d-sm-none">Agent</span>
                            <span class="d-none d-sm-block">Agent</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="database" role="tabpanel">
                        <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama Konsumen</th>
                                    <th>Handphone/Whatsapp</th>
                                    <th>SOA</th>
                                    <th>Produk</th>
                                    <th>Detail Produk</th>
                                    <th>Nama Penerima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?= $mapping_leads->nama_konsumen ?>
                                    </td>
                                    <td>
                                        <?= $mapping_leads->telepon ?>
                                    </td>
                                    <td>
                                        <?= $mapping_leads->soa ?>
                                    </td>
                                    <td>
                                        <?= $mapping_leads->produk ?>
                                    </td>
                                    <td>
                                        <?= $mapping_leads->detail_produk ?>
                                    </td>
                                    <td>
                                        <center>
                                            <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                                <option selected disabled value="">Pilih Nama Penerima</option>
                                                <!-- <?php foreach ($branches->result() as $branch) { ?>
                                                <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                                <?php } ?> -->
                                            </select>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="prospect" role="tabpanel">
                        <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Leads ID</th>
                                    <th>Nomor KTP</th>
                                    <th>Follow Up By</th>
                                    <th>Funding</th>
                                    <th>Nama Penerima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?= $leads->nama_konsumen ?>
                                    </td>
                                    <td>
                                        <?= $leads->leads_id ?>
                                    </td>
                                    <td>
                                        <?= $leads->no_ktp ?>
                                    </td>
                                    <td>
                                        <?= $leads->follow_up_by ?>
                                    </td>
                                    <td>
                                        sudah / belum funding
                                    </td>
                                    <td>
                                        <center>
                                            <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                                <option selected disabled value="">Pilih Nama Penerima</option>
                                                <!-- <?php foreach ($branches->result() as $branch) { ?>
                                                <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                                <?php } ?> -->
                                            </select>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="mapping" role="tabpanel">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama Usaha</th>
                                    <th>Bidang Usaha</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>E-mail</th>
                                    <th>Produk</th>
                                    <th>Nama Penerima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="clickable-row" data-href="detail-partnership.html">
                                    <td>
                                        <?= $mapping->nama_usaha ?>
                                    </td>
                                    <td>
                                        <?= $mapping->bidang_usaha ?>
                                    </td>
                                    <td>
                                        <?= $mapping->alamat ?>
                                    </td>
                                    <td>
                                        <?= $mapping->telepon ?>
                                    </td>
                                    <td>
                                        <?= $mapping->email ?>
                                    </td>
                                    <td>
                                        <?= $mapping->kategori_produk ?>
                                    </td>
                                    <td>
                                        <center>
                                            <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                                <option selected disabled value="">Pilih Nama Penerima</option>
                                                <!-- <?php foreach ($branches->result() as $branch) { ?>
                                                <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                                <?php } ?> -->
                                            </select>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="partnership" role="tabpanel">
                        <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama Usaha</th>
                                    <th>Bidang Usaha</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Produk</th>
                                    <th>Alamat</th>
                                    <th>Nama Penerima</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?= $mapping->nama_usaha ?>
                                    </td>
                                    <td>
                                        <?= $mapping->bidang_usaha ?>
                                    </td>
                                    <td>
                                        <?= $mapping->telepon ?>
                                    </td>
                                    <td>
                                        <?= $mapping->email ?>
                                    </td>
                                    <td>
                                        <?= $mapping->kategori_produk ?>
                                    </td>
                                    <td>
                                        <?= $mapping->alamat ?>
                                    </td>
                                    <td>
                                        <center>
                                            <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                                <option selected disabled value="">Pilih Nama Penerima</option>
                                                <!-- <?php foreach ($branches->result() as $branch) { ?>
                                                <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                                <?php } ?> -->
                                            </select>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="agent" role="tabpanel">
                        <table id="" class="datatable table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="text-size">Nama Usaha</div>
                                    </th>
                                    <th>
                                        <div class="text-size">Jenis Agent</div>
                                    </th>
                                    <th>
                                        <div class="text-size">Pekerjaan</div>
                                    </th>
                                    <th>
                                        <div class="text-size">E-mail</div>
                                    </th>
                                    <th>
                                        <div class="text-size">Nomor KTP</div>
                                    </th>
                                    <th>
                                        <div class="text-size">Nama Penerima</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="clickable-row" data-href="detail-agent.html">
                                    <td>
                                        <div class="text-size"><?= $agent->nama_lengkap ?></div>
                                    </td>
                                    <td>
                                        <div class="text-size"><?= $agent->jenis_agent ?></div>
                                    </td>
                                    <td>
                                        <div class="text-size"><?= $agent->pekerjaan ?></div>
                                    </td>
                                    <td>
                                        <div class="text-size"><?= $agent->email ?></div>
                                    </td>
                                    <td>
                                        <div class="text-size"><?= $agent->no_ktp ?></div>
                                    </td>
                                    <td>
                                        <center>
                                            <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                                <option selected disabled value="">Pilih Nama Penerima</option>
                                                <!-- <?php foreach ($branches->result() as $branch) { ?>
                                                <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                                <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                                <?php } ?> -->
                                            </select>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-group mb-0 float-right mt-3 mr-3">
                    <a href="<?= base_url('mapping_leads') ?>" class="btn btn-secondary waves-effect waves-light text-size">Batal</a>
                    <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                        Transfer
                    </button>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Tranfer Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3 text-center">
                                <label>
                                    <h4>Pemilik data yang akan di tranfer</h4>
                                </label>
                                <input type="text" class="form-control text-size" name="" id="" value="bambank" required placeholder="bambank" readonly>
                                <?= form_error('nama_usaha'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <div class="fas fa-sync"></div>
                            </center>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3 text-size text-center">
                                <label>
                                    <h4>Penerima Data</h4>
                                </label>
                                <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                    <option selected disabled value="">Pilih Nama Penerima</option>
                                    <!-- <?php foreach ($branches->result() as $branch) { ?>
                                    <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                    <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                    <?php } ?> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                                    Tranfer
                                </button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>