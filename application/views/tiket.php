<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Tiket</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                <li class="breadcrumb-item active">Tiket</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table Tiket</h4>
                <p class="text-muted m-b-30 text-size">Tiket di bawah.</p>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID Tiket</th>
                            <th>Requester</th>
                            <th>Cabang</th>
                            <th>Aktivitas Cabang</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($data->result() as $ticket) { ?>
                            <tr>
                                <td>
                                    <div class="text-size"><?= $ticket->id_ticket ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $ticket->name ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $ticket->nama_cabang ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $ticket->aktivitas_cabang ?></div>
                                </td>
                                <td>
                                    <center>
                                        <?php if ($ticket->status_approval == 0) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Head</span></h6>
                                        <?php } else if ($ticket->status_approval == 1) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Manager</span></h6>
                                        <?php } else if ($ticket->status_approval == 2) { ?>
                                            <h6><span class="badge badge-secondary">Pending</span></h6>
                                        <?php } else if ($ticket->status_approval == 3) { ?>
                                            <h6><span class="badge badge-warning">In Progress</span></h6>
                                        <?php } else if ($ticket->status_approval == 4) { ?>
                                            <h6><span class="badge badge-danger">Ditolak</span></h6>
                                        <?php } else if ($ticket->status_approval == 5) { ?>
                                            <h6><span class="badge badge-success">Disetujui</span></h6>
                                        <?php } ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php if ($ticket->id_agent != NULL) { ?>
                                            <a href="<?= base_url('Agent/edit/' . $ticket->id_agent) ?>" class="btn btn-primary">Detail</a>
                                        <?php } else if ($ticket->id_partner != NULL) { ?>
                                            <a href="<?= base_url('partner/detail/' . $ticket->id_partner) ?>" class="btn btn-primary">Detail</a>
                                        <?php } else if ($ticket->id_leads != NULL) { ?>
                                            <a href="<?= base_url('leads/detail/' . $ticket->id_leads) ?>" class="btn btn-primary">Detail</a>
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