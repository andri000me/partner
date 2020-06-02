<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Tiket</b></h4>
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
                <h4 class="header-title mb-3"><b>Tabel Daftar Tiket</b></h4>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sort Table By </label>
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
                <table id="" class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID Tiket</th>
                            <th>Requester</th>
                            <th>Cabang</th>
                            <th>Aktivitas Cabang</th>
                            <th>Status</th>
                            <th>Terakhir Diubah</th>
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
                                        <b class="text-secondary">Menunggu Persetujuan Head</b>
                                    <?php } else if ($ticket->status_approval == 1) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Manager</b>
                                    <?php } else if ($ticket->status_approval == 2) { ?>
                                        <b class="text-secondary">Pending HO</b>
                                    <?php } else if ($ticket->status_approval == 3) { ?>
                                        <b class="text-warning">In Progress</b>
                                    <?php } else if ($ticket->status_approval == 4) { ?>
                                        <b class="text-danger">Ditolak</b>
                                    <?php } else if ($ticket->status_approval == 5) { ?>
                                        <b class="text-success">Disetujui</b>
                                    <?php } else if ($ticket->status_approval == 6) { ?>
                                        <b class="text-primary">Diaktivasi</b>
                                    <?php } ?>
                                </td>
                                <td><?= $ticket->tanggal_diubah ?></td>
                                <td>
                                    <center>
                                        <?php if ($ticket->agent_id != NULL) { ?>
                                            <a href="<?= base_url('Agent/detail/' . $ticket->agent_id) ?>" class="btn btn-primary text-size radius"><b>Detail</b></a>
                                        <?php } else if ($ticket->partner_id != NULL) { ?>
                                            <a href="<?= base_url('partner/detail/' . $ticket->partner_id) ?>" class="btn btn-primary text-size radius"><b>Detail</b></a>
                                        <?php } else if ($ticket->id_leads != NULL) { ?>
                                            <a href="<?= base_url('leads/detail/' . $ticket->id_leads) ?>" class="btn btn-primary text-size radius"><b>Detail</b></a>
                                        <?php } else if ($ticket->id_nst != NULL) { ?>
                                            <a href="<?= base_url('nst/edit/' . $ticket->id_nst) ?>" class="btn btn-primary text-size radius"><b>Detail</b></a>
                                        <?php } else if ($ticket->id_approval_bonus != NULL) { ?>
                                            <a href="<?= base_url('approval_bonus/edit/' . $ticket->id_approval_bonus) ?>" class="btn btn-primary text-size radius"><b>Detail</b></a>
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