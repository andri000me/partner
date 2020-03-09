<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Assignment Lead Database</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Assignment</a></li>
                <li class="breadcrumb-item text-size active">Assignment Lead Database</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <?php if ($this->fungsi->user_login()->level > 3) { ?>
        <div class="col-md-12 mt-4">
            <a href="<?= base_url('leads_assignment/create') ?>"><button class="btn btn-primary mb-2 btn-kanan text-size">Tambah Data Baru</button></a>
        </div>
    <?php } ?>
    <div class="col-md-12">
        <div class="card m-b-20">
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#belum-update" role="tab">
                            <span class="d-block d-sm-none">Belum Update</span>
                            <span class="d-none d-sm-block">Belum Update</span>
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
                        <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name Lengkap</th>
                                    <th>Nomor Telepon / Whatsapp</th>
                                    <th>Kota</th>
                                    <th>Produk</th>
                                    <th>Detail Produk</th>
                                    <th>Aksi</th>
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
                                            <center><a class="btn btn-secondary text-size" href="<?= base_url('leads_assignment/edit/' . $leads_assignemnt->id_leads_assignment) ?>">Detail</a></center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="sudah-update" role="tabpanel">
                        <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name Lengkap</th>
                                    <th>Nomor Telepon / Whatsapp</th>
                                    <th>Kota</th>
                                    <th>Produk</th>
                                    <th>Detail Produk</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
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
                                            <center><a class="btn btn-secondary text-size" href="<?= base_url('leads_assignment/edit/' . $leads_assignemnt->id_leads_assignment) ?>">Detail</a></center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>