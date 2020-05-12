<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4 class="page-title">Daftar Tiket</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Daftar Tiket</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="header-title mb-3">Table Daftar Tiket</h4>
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
                <table id="datatable-buttons" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                    <?= $ticket->id_ticket ?>
                                </td>
                                <td>
                                    <?= $ticket->requester ?>
                                </td>
                                <td>
                                    <?= $ticket->nama_cabang ?>
                                </td>
                                <td>
                                    <?= $ticket->aktivitas_cabang ?>
                                </td>
                                <td>
                                    <?php if ($ticket->status_approval == 0) { ?>
                                        <h6><span class="badge badge-secondary" style="width: 210px; height: 30px;">
                                                <p style="margin-top: 2px;">Menunggu Persetujuan Head</p>
                                            </span></h6>
                                    <?php } else if ($ticket->status_approval == 1) { ?>
                                        <h6><span class="badge badge-secondary" style="width: 230px; height: 30px;">
                                                <p style="margin-top: 2px;">Menunggu Persetujuan Manager</p>
                                            </span></h6>
                                    <?php } else if ($ticket->status_approval == 2) { ?>
                                        <h6><span class="badge badge-secondary" style="width: 100px; height: 30px;">
                                                <p style="margin-top: 2px;">Pending HO</p>
                                            </span></h6>
                                    <?php } else if ($ticket->status_approval == 3) { ?>
                                        <h6><span class="badge badge-warning" style="width: 100px; height: 30px;">
                                                <p style="margin-top: 2px;">In Progress</p>
                                            </span></h6>
                                    <?php } else if ($ticket->status_approval == 4) { ?>
                                        <h6><span class="badge badge-danger" style="width: 100px; height: 30px;">
                                                <p style="margin-top: 2px;">Ditolak</p>
                                            </span></h6>
                                    <?php } else if ($ticket->status_approval == 5) { ?>
                                        <h6><span class="badge badge-success" style="width: 100px; height: 30px;">
                                                <p style="margin-top: 2px;">Disetujui</p>
                                            </span></h6>
                                    <?php } else if ($ticket->status_approval == 6) { ?>
                                        <h6><span class="badge badge-primary" style="width: 100px; height: 30px;">
                                                <p style="margin-top: 2px;">Diaktivasi</p>
                                            </span></h6>
                                    <?php } ?>
                                </td>
                                <td><?= $ticket->tanggal_diubah ?></td>
                                <td>
                                    <center>
                                        <?php if ($ticket->agent_id != NULL) { ?>
                                            <a href="<?= base_url('Agent/detail/' . $ticket->agent_id) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->partner_id != NULL) { ?>
                                            <a href="<?= base_url('partner/detail/' . $ticket->partner_id) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_leads != NULL) { ?>
                                            <a href="<?= base_url('leads/detail/' . $ticket->id_leads) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_nst != NULL) { ?>
                                            <a href="<?= base_url('nst/edit/' . $ticket->id_nst) ?>" class="btn btn-primary text-size radius">Detail</a>
                                        <?php } else if ($ticket->id_approval_bonus != NULL) { ?>
                                            <a href="<?= base_url('approval_bonus/edit/' . $ticket->id_approval_bonus) ?>" class="btn btn-primary text-size radius">Detail</a>
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