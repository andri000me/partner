<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Assignment Lead Database</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Assignment</a></li>
                <li class="breadcrumb-item text-size active">Lead Database</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <?php if ($this->fungsi->user_login()->level >= 3) { ?>
        <div class="col-md-12 mt-4">
            <a href="<?= base_url('leads_assignment/create') ?>"><button class="btn btn-primary mb-2 btn-kanan text-size card-margin-2"><b>Assign Leads ke Cabang / Tele</b></button></a>
        </div>
    <?php } ?>
    <div class="col-md-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <?= $this->session->flashdata("berhasil_simpan"); ?>
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#cabang" role="tab">
                            <span class="d-block d-sm-none mb-1">Assignment Cabang</span>
                            <span class="d-none d-sm-block mb-1">Assignment Cabang</span>
                        </a>
                    </li>
                    <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tele" role="tab">
                                <span class="d-block d-sm-none">Assignment Tele</i></span>
                                <span class="d-none d-sm-block">Assignment Tele</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active p-3" id="cabang" role="tabpanel">
                        <ul class="nav nav-tabs mt-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#belum-update" role="tab">
                                    <span class="d-block d-sm-none">Belum Update <?= $belum_update->num_rows() > 0 ? '<span class="badge badge-pill badge-danger float-right ml-2"> ' . $belum_update->num_rows()  : '' ?></span></span>
                                    <span class="d-none d-sm-block">Belum Update <?= $belum_update->num_rows() > 0 ? '<span class="badge badge-pill badge-danger float-right ml-2"> ' . $belum_update->num_rows()  : '' ?></span></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sudah-update" role="tab">
                                    <span class="d-block d-sm-none">Sudah Update</i></span>
                                    <span class="d-none d-sm-block">Sudah Update</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="belum-update" role="tabpanel">
                                <table id="datatable-buttons" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name Lengkap</th>
                                            <th>Nomor Telepon / Whatsapp</th>
                                            <th>Kota</th>
                                            <th>Produk</th>
                                            <th>Detail Produk</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($belum_update->result() as $leads_assignemnt) { ?>
                                            <tr>
                                                <td>
                                                    <?= $leads_assignemnt->nama ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->telepon ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->kota ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->produk ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->detail_produk ?>
                                                </td>
                                                <td>
                                                    <center><a class="btn btn-primary text-size radius" href="<?= base_url('leads_assignment/edit/' . $leads_assignemnt->id_leads_assignment) ?>"><b>Detail</b></a></center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane p-3" id="sudah-update" role="tabpanel">
                                <table id="datatable-buttons-1" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name Lengkap</th>
                                            <th>Nomor Telepon / Whatsapp</th>
                                            <th>Kota</th>
                                            <th>Produk</th>
                                            <th>Detail Produk</th>
                                            <th>Status</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($sudah_update->result() as $leads_assignemnt) { ?>
                                            <tr>
                                                <td>
                                                    <?= $leads_assignemnt->nama ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->telepon ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->kota ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->produk ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->detail_produk ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->status ?>
                                                </td>
                                                <td>
                                                    <center><a class="btn btn-primary text-size radius" href="<?= base_url('leads_assignment/edit/' . $leads_assignemnt->id_leads_assignment) ?>"><b>Detail</b></a></center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane p-3" id="tele" role="tabpanel">
                        <ul class="nav nav-tabs mt-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#belum-update-tele" role="tab">
                                    <span class="d-block d-sm-none">Belum Update <?= $belum_update_tele->num_rows() > 0 ? '<span class="badge badge-pill badge-danger float-right ml-2"> ' . $belum_update_tele->num_rows()  : '' ?></span></span>
                                    <span class="d-none d-sm-block">Belum Update <?= $belum_update_tele->num_rows() > 0 ? '<span class="badge badge-pill badge-danger float-right ml-2"> ' . $belum_update_tele->num_rows()  : '' ?></span></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sudah-update-tele" role="tab">
                                    <span class="d-block d-sm-none">Sudah Update</i></span>
                                    <span class="d-none d-sm-block">Sudah Update</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane p-3 active" id="belum-update-tele" role="tabpanel">
                                <table id="datatable-buttons-2" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name Lengkap</th>
                                            <th>Nomor Telepon / Whatsapp</th>
                                            <th>Kota</th>
                                            <th>Produk</th>
                                            <th>Detail Produk</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($belum_update_tele->result() as $leads_assignemnt) { ?>
                                            <tr>
                                                <td>
                                                    <?= $leads_assignemnt->nama ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->telepon ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->kota ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->produk ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->detail_produk ?>
                                                </td>
                                                <td>
                                                    <center><a class="btn btn-primary text-size radius" href="<?= base_url('leads_assignment/edit/' . $leads_assignemnt->id_leads_assignment) ?>"><b>Detail</b></a></center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane p-3" id="sudah-update-tele" role="tabpanel">
                                <table id="datatable-buttons-3" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name Lengkap</th>
                                            <th>Nomor Telepon / Whatsapp</th>
                                            <th>Kota</th>
                                            <th>Produk</th>
                                            <th>Detail Produk</th>
                                            <th>Status</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($sudah_update_tele->result() as $leads_assignemnt) { ?>
                                            <tr>
                                                <td>
                                                    <?= $leads_assignemnt->nama ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->telepon ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->kota ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->produk ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->detail_produk ?>
                                                </td>
                                                <td>
                                                    <?= $leads_assignemnt->status ?>
                                                </td>
                                                <td>
                                                    <center><a class="btn btn-primary text-size radius" href="<?= base_url('leads_assignment/edit/' . $leads_assignemnt->id_leads_assignment) ?>"><b>Detail</b></a></center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>