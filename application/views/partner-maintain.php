<div class="row">
    <div class="col-lg-8">
        <div class="page-title-box card-margin-2">
            <h4><b>Maintain Merchant</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('partner') ?>">Daftar Merchant</a></li>
                <li class="breadcrumb-item active">maintain Merchant</li>
            </ol>
        </div>
        <div class="alert alert-primary font-size gradient card-margin-2 mb-5" role="alert">
            <div class="topcaption">
                <p class="captionalert"><i class="fas fa-info-circle fa-lg"></i> &nbsp;&nbsp;<b>Hati - hati dalam
                        menginput data</b></p>
                <p class="captiontext">Form ini digunakan untuk mencatat aktivitas maintain cabang anda.</p>
            </div>
        </div>
        <div class="card card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title form-margin">Form Maintain Merchant</h4>

                <form class="" action="<?= base_url('Maintain_partner/save') ?>" method="post" enctype="multipart/form-data">
                    <!-- ID Partner -->
                    <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">
                    <!-- ID user -->
                    <input type="hidden" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                    <!-- ID branch -->
                    <input type="hidden" name="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <div class="form-group text-size form-margin">
                        <label>Upload Foto Selfie Anda</label>
                        <input type="file" name="photo_activity" class="filestyle text-size" data-buttonname="btn-secondary text-size" required>
                    </div>
                    <div class="form-group form-margin text-size">
                        <label>Jenis Kegiatan</label>
                        <select class="form-control text-size" name="jenis_kegiatan" id="jenis_kegiatan" required>
                            <option selected>Pilih Aktivitas</option>
                            <option value="Update produk">Update produk</option>
                            <option value="Presentasi">Presentasi</option>
                            <option value="Follow Up Leads">Follow Up Leads</option>
                            <option value="Update Usaha">Update Usaha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group form-margin text-size">
                        <label>Catatan</label>
                        <textarea class="form-control text-size" name="catatan" id="catatan" cols="30" rows="10" placeholder="jelaskan detail kegiatan anda" style="height:110px;"></textarea>
                    </div>
                    <div class="form-group mb-0 float-right mt-2 form-margin">
                        <div>
                            <a href="<?= base_url('partner') ?>" class="btn btn-secondary waves-effect waves-light text-size btn-width">
                                <b>Batal</b>
                            </a>
                            <button type="submit" class="btn btn-primary waves-effect waves-light text-size btn-width ml-1">
                                <b>Simpan</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="sticky">
            <div class="card height">
                <div class="card-body">
                    <div class="card-contents">
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                    <span class="d-block d-sm-none mb-1"><i class="far fa-newspaper"></i></span>
                                    <span class="d-none d-sm-block mb-1">Status</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-comment-dots"></i></span>
                                    <span class="d-none d-sm-block">Comment <span class="badge badge-danger ml-1"><?= $comments->num_rows() ?></span></span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                <h6 class="header-title mt-0 mb-0 web">AKTIVITAS TERAKHIR</h6>
                                <div class="boxx overflow-auto web">
                                    <?php if ($activities->num_rows() > 0) {
                                        foreach ($activities->result() as $activity) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table class="text-size">
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-0"><i class="dripicons-clock"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size">
                                                                    <b><?= $activity->activity ?></b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 text-size">
                                                                    <?= $activity->tanggal_activity ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $activity->name ?>
                                                                    (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?>
                                                                </p>
                                                            </td>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    } else { ?>
                                        <p class="text-muted m-b-10 text-size">Tidak Ada Data</p>
                                    <?php } ?>
                                </div>

                                <h6 class="header-title mt-0 mb-0 mobile">AKTIVITAS TERAKHIR</h6>
                                <div class="boxx mobile">
                                    <?php if ($activities->num_rows() > 0) {
                                        foreach ($activities->result() as $activity) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table class="text-size">
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="dripicons-clock"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1">
                                                                    <b><?= $activity->activity ?></b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $activity->name ?>
                                                                    (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0">
                                                                    <?= $activity->tanggal_activity ?></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    } else { ?>
                                        <p class="text-muted m-b-10 text-size">Tidak Ada Data</p>
                                    <?php } ?>
                                </div>

                                <?php if (isset($ticket->id_ticket)) { ?>
                                    <div class="web mt-2">
                                        <h6 class="header-title mb-0 mt-0">STATUS PARTNER</h6>
                                        <div class="boxxx overflow-auto">
                                            <!-- Verified -->
                                            <?php if ($ticket->status_approval == 5) { ?>
                                                <div class="inbox-wid">
                                                    <div class="inbox-item">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1 text-size text-success">
                                                                        <b>Verified</b></p>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                        <?= $ticket->tanggal_completed ?></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-text text-muted mb-0 text-size">
                                                                        Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            <?php } else
                                        if ($ticket->status_approval == 6) { ?>
                                                <div class="inbox-wid">
                                                    <div class="inbox-item">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1 text-size text-primary">
                                                                        <b>Activated</b></p>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                        <?= $ticket->tanggal_activated ?></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-text text-muted mb-0 text-size">
                                                                        Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?></p>
                                                                </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="inbox-wid hide">
                                                    <div class="inbox-item">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;</p>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1 text-size  text-danger">
                                                                        <b>HO Approval</b></p>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if ($ticket->ttd_pks == 'Ya' && $ticket->form_mou != NULL) { ?>
                                                <div class="inbox-wid">
                                                    <div class="inbox-item">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1 text-size text-success">
                                                                        <b>Sudah tanda tangan Kerjasama</b></p>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                        <?= $ticket->tanggal_verified_ttd ?></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>
                                                                    <p class="inbox-item-text text-muted mb-0 text-size">
                                                                        Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="inbox-wid">
                                                    <div class="inbox-item">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;</p>
                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1 text-size text-danger">
                                                                        <b>Belum tanda tangan Kerjasama</b></p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if (($this->fungsi->user_login()->level < 4) && ($ticket->form_mou == NULL || $ticket->form_mou == '')) { ?>
                                                <div class="inbox-wid">
                                                    <div class="inbox-item">
                                                        <table>
                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <p class="inbox-item-author mt-0 mb-1 ml-3 text-size">
                                                                        <b>Kerjasama?</b></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <form action="#">
                                                                        <div class="form-group ml-3">
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                                                <label class="form-check-label">
                                                                                    Ya
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                                                <label class="form-check-label">
                                                                                    Tidak
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <div id="" class="form-group ml-3 form_mou">
                                                                        <form action="<?= base_url('ticket/upload_mou/partners') ?>" method="post" enctype="multipart/form-data">
                                                                            <input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>">
                                                                            <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                                                                            <div class="form-group mr-2">
                                                                                <label>Form MOU</label>
                                                                                <input type="file" name="upload_mou" class="filestyle" data-buttonname="btn-secondary">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="mobile mt-2">
                                        <h6 class="header-title mb-0">STATUS PARTNER</h6>
                                        <?php if ($ticket->status_approval == 5) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table class="text-size">
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-success">
                                                                    <b>Verified</b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted">
                                                                    <?= $ticket->tanggal_completed ?></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } else
                                    if ($ticket->status_approval == 6) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-primary">
                                                                    <b>Activated</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                    <?= $ticket->tanggal_activated ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?></p>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table class="text-size">
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-danger"><b>Belum
                                                                        Diverifikasi</b></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($ticket->ttd_pks == 'Ya' && $ticket->form_mou != NULL) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table class="text-size">
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-success"><b>Sudah
                                                                        tanda tangan Kerjasama</b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted">
                                                                    <?= $ticket->tanggal_verified_ttd ?></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-danger">
                                                                    <b>Belum tanda tangan Kerjasama</b></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (($this->fungsi->user_login()->level < 4) && ($ticket->form_mou == NULL || $ticket->form_mou == '')) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 ml-3 text-size">
                                                                    <b>Kerjasama?</b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <form action="#">
                                                                    <div class="form-group ml-3">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                                            <label class="form-check-label">
                                                                                Ya
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                                            <label class="form-check-label">
                                                                                Tidak
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <div id="" class="form-group ml-3 form_mou">
                                                                    <form action="<?= base_url('ticket/upload_mou/partners') ?>" method="post" enctype="multipart/form-data">
                                                                        <input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>">
                                                                        <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                                                                        <div class="form-group mr-2">
                                                                            <label>Form MOU</label>
                                                                            <input type="file" name="upload_mou" class="filestyle" data-buttonname="btn-secondary">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php } ?>

                                <h4 class="header-title mt-2 mb-0">LAMPIRAN</h4>
                                <div class="inbox-wid">
                                    <div class="inbox-item">
                                        <table>
                                            <tr>
                                                <td>
                                                    <p class="inbox-item-author mt-0 mb-1"><i class="fas fa-download"></i>&nbsp;</p>
                                                </td>
                                                <td>
                                                    <p class="inbox-item-author mt-0 mb-1 text-size"><b><a href="<?= base_url('zip/partner/' . $data->id_partner) ?>">Download
                                                                Semua Lampiran</b></a></p>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                <div class="box overflow-auto">
                                    <?php if ($comments->num_rows() > 0) { ?>
                                        <?php foreach ($comments->result() as $comment) { ?>
                                            <div class="media mb-1">
                                                <a class="image-popup-vertical-fit" href="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
                                                    <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" height="64">
                                                </a>
                                                <div class="media-body b">
                                                    <p class="mb-0"><b><?= $comment->name ?></b></p>
                                                    <p class="text-size mt-0 mb-0"><?= $comment->tanggal ?></p>
                                                    <p class="text-size mt-0"><?= $comment->comment ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <h4 class="text-muted m-b-10 text-size">Tidak Ada Komentar</h4>
                                    <?php } ?>
                                </div>
                                <form action="<?= base_url('Comment/save') ?>" method="post">
                                    <input type="hidden" name="ticket" id="ticket" value="<?= $ticket->id_ticket ?>">
                                    <input type="hidden" name="uri_string" id="uri_string" value="<?= uri_string() ?>">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10" required placeholder="tulis comment disini" style="height:80px;"></textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light float-right" type="submit" name="process">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#jenis_kegiatan').change(function() {
        if ($('#jenis_kegiatan').val() == 'Lainnya') {
            $('#catatan').attr('required', 'required');
        } else {
            $('#catatan').removeAttr('required');
        }
    })
</script>