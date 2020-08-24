<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Tiket</b></h4>
            <p class="text-muted m-b-30 text-size">Tabel berisi daftar data pengajuan support dari cabang</p>
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Daftar Tiket</li>
            </ol> -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <!-- Jika CMS/Head tiket descending, jika Admin tiket ascending -->
                <input type="hidden" id="level" value="<?= $this->fungsi->user_login()->level ?>">
                <h4 class="header-title mb-3"><b>Tabel Daftar Tiket</b></h4>
                <p class="text-muted m-b-30 text-size">Tiket di bawah.</p>
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab">
                            <span class="d-block d-sm-none mb-1">All Data</span>
                            <span class="d-none d-sm-block mb-1">All Data</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pending" role="tab">
                            <span class="d-block d-sm-none">Unfinished <span class="badge badge-danger"><?= $unfinished->num_rows() ?></span></span>
                            <span class="d-none d-sm-block">Unfinished <span class="badge badge-danger"><?= $unfinished->num_rows() ?></span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#finished" role="tab">
                            <span class="d-block d-sm-none">Finished</span>
                            <span class="d-none d-sm-block">Finished</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="all" role="tabpanel">
                        <table id="" class="datatable-tiket table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Tiket</th>
                                    <th>Pemohon</th>
                                    <th>Cabang</th>
                                    <th>Aktivitas</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th> </th>
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
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($ticket->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($ticket->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($ticket->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($ticket->status_approval == 4) { ?>
                                                <b class="text-danger">Rejected</b>
                                            <?php } else if ($ticket->status_approval == 5) { ?>
                                                <b class="text-success">Approved</b>
                                            <?php } else if ($ticket->status_approval == 6) { ?>
                                                <b class="text-primary">Activated</b>
                                            <?php } ?>
                                        </td>
                                        <td><?= $ticket->tanggal_diubah ?></td>
                                        <td>
                                            <center>
                                                <?php if ($ticket->agent_id != NULL) { ?>
                                                    <a href="<?= base_url('Agent/detail/' . $ticket->agent_id) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->partner_id != NULL) { ?>
                                                    <a href="<?= base_url('partner/detail/' . $ticket->partner_id) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_nst != NULL) { ?>
                                                    <a href="<?= base_url('nst/edit/' . $ticket->id_nst) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_approval_bonus != NULL) { ?>
                                                    <a href="<?= base_url('approval_bonus/edit/' . $ticket->id_approval_bonus) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_leads != NULL) { ?>
                                                    <a href="<?= base_url('leads/detail/' . $ticket->id_leads) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } ?>
                                                <!-- <button class="btn btn-primary">Lihat</button> -->
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="pending" role="tabpanel">
                        <table id="" class="datatable-tiket table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Tiket</th>
                                    <th>Pemohon</th>
                                    <th>Cabang</th>
                                    <th>Aktivitas</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($unfinished->result() as $ticket) { ?>
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
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($ticket->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($ticket->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($ticket->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($ticket->status_approval == 4) { ?>
                                                <b class="text-danger">Rejected</b>
                                            <?php } else if ($ticket->status_approval == 5) { ?>
                                                <b class="text-success">Approved</b>
                                            <?php } else if ($ticket->status_approval == 6) { ?>
                                                <b class="text-primary">Activated</b>
                                            <?php } ?>
                                        </td>
                                        <td><?= $ticket->tanggal_diubah ?></td>
                                        <td>
                                            <center>
                                                <?php if ($ticket->agent_id != NULL) { ?>
                                                    <a href="<?= base_url('Agent/detail/' . $ticket->agent_id) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->partner_id != NULL) { ?>
                                                    <a href="<?= base_url('partner/detail/' . $ticket->partner_id) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_nst != NULL) { ?>
                                                    <a href="<?= base_url('nst/edit/' . $ticket->id_nst) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_approval_bonus != NULL) { ?>
                                                    <a href="<?= base_url('approval_bonus/edit/' . $ticket->id_approval_bonus) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_leads != NULL) { ?>
                                                    <a href="<?= base_url('leads/detail/' . $ticket->id_leads) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } ?>
                                                <!-- <button class="btn btn-primary">Lihat</button> -->
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="finished" role="tabpanel">
                        <table id="" class="datatable-tiket table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Tiket</th>
                                    <th>Pemohon</th>
                                    <th>Cabang</th>
                                    <th>Aktivitas</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($finished->result() as $ticket) { ?>
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
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($ticket->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($ticket->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($ticket->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($ticket->status_approval == 4) { ?>
                                                <b class="text-danger">Rejected</b>
                                            <?php } else if ($ticket->status_approval == 5) { ?>
                                                <b class="text-success">Approved</b>
                                            <?php } else if ($ticket->status_approval == 6) { ?>
                                                <b class="text-primary">Activated</b>
                                            <?php } ?>
                                        </td>
                                        <td><?= $ticket->tanggal_diubah ?></td>
                                        <td>
                                            <center>
                                                <?php if ($ticket->agent_id != NULL) { ?>
                                                    <a href="<?= base_url('Agent/detail/' . $ticket->agent_id) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->partner_id != NULL) { ?>
                                                    <a href="<?= base_url('partner/detail/' . $ticket->partner_id) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_nst != NULL) { ?>
                                                    <a href="<?= base_url('nst/edit/' . $ticket->id_nst) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_approval_bonus != NULL) { ?>
                                                    <a href="<?= base_url('approval_bonus/edit/' . $ticket->id_approval_bonus) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } else if ($ticket->id_leads != NULL) { ?>
                                                    <a href="<?= base_url('leads/detail/' . $ticket->id_leads) ?>" class="btn btn-primary text-size radius"><b>Lihat</b></a>
                                                <?php } ?>
                                                <!-- <button class="btn btn-primary">Lihat</button> -->
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
    </div> <!-- end col -->
</div>