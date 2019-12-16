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
                    <!-- <li class="unread">
                        <div class="col-mail col-mail-1">
                            <a href="#" class="title">
                                <span class="badge-primary badge ml-5">Comment</span>
                            </a>
                            <span class="far fa-comment ml-5"></span>
                        </div>
                        <div class="col-mail col-mail-2">
                            <a href="#" class="subject"><span class="teaser"></span>Ibrahim Ahmad Jabar khaidiru Sobari S</span>
                            </a>
                            <div class="date">04 Dec, 2019</div>
                        </div>
                    </li> -->
                    <!-- <?php foreach ($data->result() as $notif) { ?>
                        <li class="<?= $notif->has_read == 0 ? 'unread' : '' ?>">
                            <div class="col-mail col-mail-1">
                                <a href="<?= base_url('ticket') ?>" class="title notifikasi btn btn-secondary" data-id="<?= $notif->id_notification ?>">View</a>
                            </div>
                            <div class="col-mail col-mail-2">
                                <a href="<?= base_url('ticket') ?>" class="title notifikasi" data-id="<?= $notif->id_notification ?>" class="subject"><?= $notif->type ?>
                                    Oleh <?= $notif->nama_pengirim ?> &nbsp;–&nbsp; ID Tiket <?= $notif->id_ticket ?>.
                                </a>
                                <div class="date"><?= $notif->dibuat_pada ?></div>
                            </div>
                        </li>
                    <?php } ?> -->
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
                            <?php foreach ($data->result() as $notif) { ?>
                                <tr class="<?= $notif->has_read == 0 ? 'table-warning' : '' ?>">
                                    <td>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan') { ?>
                                            <span class="far fa-check-circle"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Komentar') { ?>
                                            <span class="far fa-comment"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak') { ?>
                                            <span class="far fa-times-circle"></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width:450px;">
                                            <?= $notif->type ?> Oleh <?= $notif->nama_pengirim ?> &nbsp;–&nbsp; ID Tiket <?= $notif->id_ticket ?>.
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan') { ?>
                                            <span class="badge-success badge">Approved</span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak') { ?>
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