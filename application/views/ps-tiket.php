<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4 class="page-title">Product Support</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Product Support</li>
            </ol>
        </div>
    </div>
</div>
<?php if ($this->fungsi->user_login()->level != 4) { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="btn-kanan mb-2 card-margin-2">
                <a href="<?= base_url('product_support/create') ?>"><button class="btn btn-primary text-size">Request Product Support</button></a>
            </div>
        </div>
    </div>
<?php } ?>
<div class="row">
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="header-title mb-3">Table Daftar Tiket Product Support</h4>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sort Table By : </label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>All</option>
                                <option>Disetujui</option>
                                <option>Ditolak</option>
                                <option>Diaktivasi</option>
                                <option>In Progress</option>
                                <option>Pending HO</option>
                                <option>Menunggu Persetujuan Head</option>
                                <option>Menunggu Persetujuan Manager</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- <p class="text-muted m-b-30 text-size">Tiket di bawah.</p> -->
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID Tiket</th>
                            <th>Requester</th>
                            <th>Cabang</th>
                            <th>Aktivitas Cabang</th>
                            <th>Status</th>
                            <th>Terakhir Diubah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $ticket) { ?>
                            <tr>
                                <td style="width: 70px">
                                    <center>PS-<?= $ticket->id_ps_ticket ?></center>
                                </td>
                                <td>
                                    <?= $ticket->requester ?>
                                </td>
                                <td>
                                    <?= $ticket->nama_cabang ?>
                                </td>
                                <td>
                                    <?= $ticket->product_support ?>
                                </td>
                                <td>
                                    <center>
                                        <?php if ($ticket->status_approval == 0) { ?>
                                            <h6><span class="badge badge-secondary" style="width: 200px; height: 30px;">
                                                    <p style="margin-top: 2pxz">Menunggu Persetujuan Head</p>
                                                </span></h6>
                                        <?php } else if ($ticket->status_approval == 1) { ?>
                                            <h6><span class="badge badge-secondary" style="width: 220px; height: 30px;">
                                                    <p style="margin-top: 2px">Menunggu Persetujuan Manager</p>
                                                </span></h6>
                                        <?php } else if ($ticket->status_approval == 2) { ?>
                                            <h6><span class="badge badge-secondary" style="width: 90px; height: 30px;">
                                                    <p style="margin-top: 2px">Pending HO</p>
                                                </span></h6>
                                        <?php } else if ($ticket->status_approval == 3) { ?>
                                            <h6><span class="badge badge-warning" style="width: 90px; height: 30px;">
                                                    <p style="margin-top: 2px">In Progress</p>
                                                </span></h6>
                                        <?php } else if ($ticket->status_approval == 4) { ?>
                                            <h6><span class="badge badge-danger" style="width: 60px; height: 30px;">
                                                    <p style="margin-top: 2px">Ditolak</p>
                                                </span></h6>
                                        <?php } else if ($ticket->status_approval == 5) { ?>
                                            <h6><span class="badge badge-success" style="width: 70px; height: 30px;">
                                                    <p style="margin-top: 2px">Disetujui</p>
                                                </span></h6>
                                        <?php } else if ($ticket->status_approval == 6) { ?>
                                            <h6><span class="badge badge-primary" style="width: 80px; height: 30px;">
                                                    <p style="margin-top: 2px">Diaktivasi</p>
                                                </span></h6>
                                        <?php } ?>
                                    </center>
                                </td>
                                <td><?= $ticket->tanggal_diubah ?></td>
                                <td>
                                    <center>
                                        <?php if ($ticket->id_my_cars != NULL) { ?>
                                            <a href="<?= base_url('ps_my_cars/edit/' . $ticket->id_my_cars) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_talim != NULL) { ?>
                                            <a href="<?= base_url('ps_my_talim/edit/' . $ticket->id_my_talim) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_ihram != NULL) { ?>
                                            <a href="<?= base_url('ps_my_ihram/edit/' . $ticket->id_my_ihram) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_safar != NULL) { ?>
                                            <a href="<?= base_url('ps_my_safar/edit/' . $ticket->id_my_safar) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_faedah_bangunan != NULL) { ?>
                                            <a href="<?= base_url('ps_my_faedah_bangunan/edit/' . $ticket->id_my_faedah_bangunan) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_faedah_modal != NULL) { ?>
                                            <a href="<?= base_url('ps_my_faedah_modal/edit/' . $ticket->id_my_faedah_modal) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_faedah_qurban != NULL) { ?>
                                            <a href="<?= base_url('ps_my_faedah_qurban/edit/' . $ticket->id_my_faedah_qurban) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_faedah_lainnya != NULL) { ?>
                                            <a href="<?= base_url('ps_my_faedah_lainnya/edit/' . $ticket->id_my_faedah_lainnya) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_hajat_franchise != NULL) { ?>
                                            <a href="<?= base_url('ps_my_hajat_franchise/edit/' . $ticket->id_my_hajat_franchise) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_hajat_lainnya != NULL) { ?>
                                            <a href="<?= base_url('ps_my_hajat_lainnya/edit/' . $ticket->id_my_hajat_lainnya) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_hajat_renovasi != NULL) { ?>
                                            <a href="<?= base_url('ps_my_hajat_renovasi/edit/' . $ticket->id_my_hajat_renovasi) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_hajat_sewa != NULL) { ?>
                                            <a href="<?= base_url('ps_my_hajat_sewa/edit/' . $ticket->id_my_hajat_sewa) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_my_hajat_wedding != NULL) { ?>
                                            <a href="<?= base_url('ps_my_hajat_wedding/edit/' . $ticket->id_my_hajat_wedding) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } ?>
                                        <!-- <button class="btn btn-primary">Detail</button> -->
                                    </center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>