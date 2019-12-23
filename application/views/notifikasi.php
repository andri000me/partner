<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Notfikasi</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Notifikasi</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <!-- Right Sidebar -->
        <div class="card">

            <div class="card-body">

                <ul class="message-list">
                    <!-- <li>
                        <div class="col-mail col-mail-1">
                            <a href="#" class="title"><span class="badge-danger badge ml-5">Reject</span></a><span class="far fa-times-circle ml-5"></a>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject">Oleh Don Aria
                                sabda
                            </a>
                            <div class="date">04 Dec, 2019</div>
                        </div>
                    </!-->
                </ul>


                <div class="table-responsive">
                    <table class="table table-vertical  mb-1" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tbody>
                            <tr>
                                <td colspan="5"><b>Hari ini</b></td>
                            </tr>
                            <?php foreach ($today->result() as $notif) { ?>
                                <tr class="<?= $notif->has_read == 0 ? 'table-warning' : '' ?>">
                                    <td>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan oleh') { ?>
                                            <span class="far fa-check-circle"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Komentar oleh') { ?>
                                            <span class="far fa-comment"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak oleh') { ?>
                                            <span class="far fa-times-circle"></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width:450px;">
                                            <?= $notif->type ?> (<?= $notif->nama_pengirim ?>) &nbsp;–&nbsp; ID Tiket <?= $notif->id_ticket ?>.
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan') { ?>
                                            <span class="badge-success badge">Approved</span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak oleh') { ?>
                                            <span class="badge-danger badge">Reject</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width: 80px;">
                                            <?= $notif->dibuat_pada ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->id_lead != NULL) { ?>
                                            <a href="<?= base_url('leads/detail/' . $notif->id_lead) ?>" class="title notifikasi btn btn-secondary" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->agent_id != NULL) { ?>
                                            <a href="<?= base_url('agent/detail/' . $notif->agent_id) ?>" class="title notifikasi btn btn-secondary" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->partner_id != NULL) { ?>
                                            <a href="<?= base_url('partner/detail/' . $notif->partner_id) ?>" class="title notifikasi btn btn-secondary" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="5"><b>Sebelumnya</b></td>
                            </tr>
                            <?php foreach ($earlier->result() as $notif) { ?>
                                <tr class="<?= $notif->has_read == 0 ? 'table-warning' : '' ?>">
                                    <td>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan oleh') { ?>
                                            <span class="far fa-check-circle"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Komentar oleh') { ?>
                                            <span class="far fa-comment"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak oleh') { ?>
                                            <span class="far fa-times-circle"></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width:450px;">
                                            <?= $notif->type ?> (<?= $notif->nama_pengirim ?>) &nbsp;–&nbsp; ID Tiket <?= $notif->id_ticket ?>.
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan') { ?>
                                            <span class="badge-success badge">Approved</span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak oleh') { ?>
                                            <span class="badge-danger badge">Reject</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width: 80px;">
                                            <?= $notif->dibuat_pada ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->id_lead != NULL) { ?>
                                            <a href="<?= base_url('leads/detail/' . $notif->id_lead) ?>" class="title notifikasi btn btn-secondary" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->agent_id != NULL) { ?>
                                            <a href="<?= base_url('agent/edit/' . $notif->agent_id) ?>" class="title notifikasi btn btn-secondary" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->partner_id != NULL) { ?>
                                            <a href="<?= base_url('partner/detail/' . $notif->partner_id) ?>" class="title notifikasi btn btn-secondary" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div> <!-- card -->
        </div>
    </div>

</div><!-- End row -->