<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4 class="page-title">Notifikasi</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Notifikasi</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body text-size">
                <a class="btn btn-primary mb-4 mt-1 text-size btn-kanan" href="#" id="mark_all">Mark all as read</a>
                <div class="table-responsive">
                    <table class="table table-hover table-vertical  mb-1" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tbody>
                            <?php if ($today->num_rows() == 0 && $earlier->num_rows() == 0) { ?>
                                <tr>
                                    <td colspan="5" style="text-align:center"><b>Tidak ada notifikasi!</b></td>
                                </tr>
                            <?php } ?>

                            <!-- Hari ini -->
                            <?php if ($today->num_rows() > 0) { ?>
                                <tr>
                                    <td colspan="5"><b>Hari ini</b></td>
                                </tr>
                            <?php } ?>
                            <?php foreach ($today->result() as $notif) { ?>
                                <tr class="<?= $notif->has_read == 0 ? 'table-warning' : '' ?>">
                                    <td>
                                        <?php if ($notif->type == 'Tiket Baru') { ?>
                                            <span class="fas fa-ticket-alt"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Perubahan Data') { ?>
                                            <span class="fas fa-pencil-alt"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan oleh' || $notif->type == 'Diaktivasi oleh Head HO') { ?>
                                            <span class="far fa-check-circle"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Komentar oleh') { ?>
                                            <span class="far fa-comment"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak oleh') { ?>
                                            <span class="far fa-times-circle"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Cross Branch oleh') { ?>
                                            <span class="fas fa-code-branch mr-2"></span><?= $notif->cabang_asal ?>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Leads Assignment oleh') { ?>
                                            <span class="fas fa-clipboard mr-2"></span></span><?= $notif->cabang_asal ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width:450px;">
                                            <?= $notif->type ?> (<?= $notif->nama_pengirim ?>) &nbsp;–&nbsp; ID Tiket <?= $notif->id_ticket ?>.
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan') { ?>
                                            <h6><span class="badge-success badge" style="width: 100px; height: 30px;">
                                                    <p style="margin-top: 2px">Approved</p>
                                                </span></h6>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Diaktivasi oleh Head HO') { ?>
                                            <h6><span class="badge-primary badge" style="width: 100px; height: 30px;">
                                                    <p style="margin-top: 2px">Activated</p>
                                                </span></h6>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak oleh') { ?>
                                            <h6><span class="badge-danger badge" style="width: 100px; height: 30px;">
                                                    <p style="margin-top: 2px">Reject</p>
                                                </span></h6>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width: 100px;">
                                            <?= $notif->dibuat_pada ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->id_lead != NULL) { ?>
                                            <a href="<?= base_url('leads/detail/' . $notif->id_lead) ?>" class="title notifikasi btn btn-primary radius" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->agent_id != NULL) { ?>
                                            <a href="<?= base_url('agent/detail/' . $notif->agent_id) ?>" class="title notifikasi btn btn-primary radius" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->partner_id != NULL) { ?>
                                            <a href="<?= base_url('partner/detail/' . $notif->partner_id) ?>" class="title notifikasi btn btn-primary radius" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Leads Assignment oleh') { ?>
                                            <a href="<?= base_url('assignment/leads') ?>" class="title notifikasi btn btn-primary radius text-size" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>

                            <!-- Sebelumnya -->
                            <?php if ($earlier->num_rows() > 0) { ?>
                                <tr>
                                    <td colspan="5"><b>Sebelumnya</b></td>
                                </tr>
                            <?php } ?>
                            <?php foreach ($earlier->result() as $notif) { ?>
                                <tr class="<?= $notif->has_read == 0 ? 'table-warning' : '' ?>">
                                    <td>
                                        <?php if ($notif->type == 'Tiket Baru') { ?>
                                            <span class="fas fa-ticket-alt"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Perubahan Data') { ?>
                                            <span class="fas fa-pencil-alt"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan oleh' || $notif->type == 'Diaktivasi oleh Head HO') { ?>
                                            <span class="far fa-check-circle"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Komentar oleh') { ?>
                                            <span class="far fa-comment"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak oleh') { ?>
                                            <span class="far fa-times-circle"></span>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Cross Branch oleh') { ?>
                                            <span class="fas fa-code-branch mr-2"></span><?= $notif->cabang_asal ?>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Leads Assignment oleh') { ?>
                                            <span class="fas fa-clipboard mr-2"></span></span><?= $notif->cabang_asal ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width:450px;">
                                            <?= $notif->type ?> (<?= $notif->nama_pengirim ?>) &nbsp;–&nbsp; ID Tiket <?= $notif->id_ticket ?>.
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->type == 'Disetujui oleh Head' || $notif->type == 'Disetujui oleh Manager' || $notif->type == 'Disetujui oleh Admin HO' || $notif->type == 'Ditanda tangan') { ?>
                                            <h6><span class="badge-success badge" style="width: 100px; height: 30px;">
                                                    <p style="margin-top: 2px">Approved</p>
                                                </span></h6>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Diaktivasi oleh Head HO') { ?>
                                            <h6><span class="badge-primary badge" style="width: 100px; height: 30px;">
                                                    <p style="margin-top: 2px">Activated</p>
                                                </span></h6>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Ditolak oleh') { ?>
                                            <h6><span class="badge-danger badge" style="width: 100px; height: 30px;">
                                                    <p style="margin-top: 2px">Reject</p>
                                                </span></h6>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <div style="width: 100px;">
                                            <?= $notif->dibuat_pada ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if ($notif->id_lead != NULL) { ?>
                                            <a href="<?= base_url('leads/detail/' . $notif->id_lead) ?>" class="title notifikasi btn btn-primary radius text-size" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->agent_id != NULL) { ?>
                                            <a href="<?= base_url('agent/edit/' . $notif->agent_id) ?>" class="title notifikasi btn btn-primary radius text-size" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->partner_id != NULL) { ?>
                                            <a href="<?= base_url('partner/detail/' . $notif->partner_id) ?>" class="title notifikasi btn btn-primary radius text-size" data-id="<?= $notif->id_notification ?>">View</a>
                                        <?php } ?>
                                        <?php if ($notif->type == 'Leads Assignment oleh') { ?>
                                            <a href="<?= base_url('assignment/leads') ?>" class="title notifikasi btn btn-primary radius text-size" data-id="<?= $notif->id_notification ?>">View</a>
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

<!-- //Script untuk mark as read notifikasi -->
<script>
    //Update Barang
    $('#mark_all').on('click', function() {
        var has_read = 1;
        $.ajax({
            type: "POST",
            url: "<?= base_url('notification/mark_all') ?>",
            dataType: "JSON",
            success: function(data) {
                // alert('Success');
                location.reload();
            }
        });
    });
    // return false;
</script>