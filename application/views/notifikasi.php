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
                    <?php if ($data->num_rows() > 0) { ?>
                        <?php foreach ($data->result() as $notif) { ?>
                            <li class="<?= $notif->has_read == 0 ? 'unread' : '' ?>">
                                <div class="col-mail col-mail-1">
                                    <a href="<?= base_url('ticket') ?>" class="title notifikasi" data-id="<?= $notif->id_notification ?>">
                                        <span class="badge-success badge ml-5">Approved</span></a><span class="far fa-check-circle ml-5"></span>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="<?= base_url('ticket') ?>" class="title notifikasi" data-id="<?= $notif->id_notification ?>" class="subject"><?= $notif->type ?>
                                        Oleh <?= $notif->nama_pengirim ?> &nbsp;–&nbsp; ID Tiket #<?= $notif->id_ticket ?>.
                                    </a>
                                    <div class="date"><?= $notif->dibuat_pada ?></div>
                                </div>
                            </li>
                        <?php } ?>
                    <?php } else { ?>
                        <center>
                            <h4>Tidak ada notifikasi!</h4>
                        </center>
                    <?php } ?>
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
            </div> <!-- card -->
        </div>
    </div>

</div><!-- End row -->