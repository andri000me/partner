<div class="row">
    <div class="col-lg-8">
        <div class="page-title-box">
            <h4 class="page-title">Form Maintain Partner</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Form Maintain Partner</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Maintain Partner</h4>
                <p class="text-muted m-b-30 text-size">Form ini digunakan untuk mencatat aktivitas maintain cabang anda.</p>

                <form class="" action="<?= base_url('Maintain_partner/save') ?>" method="post" enctype="multipart/form-data">
                    <!-- ID Partner -->
                    <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">
                    <!-- ID user -->
                    <input type="hidden" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                    <!-- ID branch -->
                    <input type="hidden" name="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <div class="form-group text-size ml-3 mr-3">
                        <label>Upload Foto Selfie Anda</label>
                        <input type="file" name="photo_activity" class="filestyle text-size" data-buttonname="btn-secondary text-size" required>
                    </div>
                    <div class="form-group ml-3 mr-3 text-size">
                        <label>Jenis Kegiatan</label>
                        <select class="form-control text-size" name="jenis_kegiatan" id="jenis_kegiatan" required>
                            <option selected>Pilih Jenis Kegiatan</option>
                            <option value="Update produk">Update produk</option>
                            <option value="Presentasi">Presentasi</option>
                            <option value="Follow Up Leads">Follow Up Leads</option>
                            <option value="Update Usaha">Update Usaha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group ml-3 mr-3 text-size">
                        <label>Catatan</label>
                        <textarea class="form-control text-size" name="catatan" id="catatan" cols="30" rows="10" placeholder="jelaskan detail kegiatan anda" style="height:110px;"></textarea>
                    </div>
                    <div class="form-group mb-0 float-right mt-2 ml-3 mr-3">
                        <div>
                            <button type="cancle" class="btn btn-secondary waves-effect waves-light text-size">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light text-size">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
    <!-- sticky sidebar -->
    <div class="sticky">
            <div class="card height">
                <div class="card-body">
                    <div class="owl-carousel owl-theme">
                        <?php if ($data->ktp) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <?php if (get_extension($data->ktp)) { ?>
                                    <div class="zoom-gallery">
                                        <a href="<?= base_url('uploads/partners/' . $data->ktp) ?>"><img src="<?= base_url('uploads/partners/' . $data->ktp) ?>" alt="" style="height:79px; width:120px;"></a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?= base_url('uploads/partners/' . $data->ktp) ?>">
                                        <div class="card text-center" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->ktp ?>">
                                            <i class="fa fa-file fa-5x"></i>
                                            <!-- <span class="small"><?= $data->ktp ?></span> -->
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($data->npwp) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <?php if (get_extension($data->npwp)) { ?>
                                    <div class="zoom-gallery">
                                        <a href="<?= base_url('uploads/partners/' . $data->npwp) ?>"><img src="<?= base_url('uploads/partners/' . $data->npwp) ?>" alt="" style="height:79px; width:120px;"></a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?= base_url('uploads/partners/' . $data->npwp) ?>">
                                        <div class="card text-center" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->npwp ?>">
                                            <i class="fa fa-file fa-5x"></i>
                                            <!-- <span class="small"><?= $data->npwp ?></span> -->
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($data->buku_tabungan_perusahaan) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <?php if (get_extension($data->buku_tabungan_perusahaan)) { ?>
                                    <div class="zoom-gallery">
                                        <a href="<?= base_url('uploads/partners/' . $data->buku_tabungan_perusahaan) ?>"><img src="<?= base_url('uploads/partners/' . $data->buku_tabungan_perusahaan) ?>" alt="" style="height:79px; width:120px;"></a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?= base_url('uploads/partners/' . $data->buku_tabungan_perusahaan) ?>">
                                        <div class="card text-center" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->buku_tabungan_perusahaan ?>">
                                            <i class=" fa fa-file fa-5x"></i>
                                            <!-- <span class="small"><?= $data->buku_tabungan_perusahaan ?></span> -->
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($data->siup) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <?php if (get_extension($data->siup)) { ?>
                                    <div class="zoom-gallery">
                                        <a href="<?= base_url('uploads/partners/' . $data->siup) ?>"><img src="<?= base_url('uploads/partners/' . $data->siup) ?>" alt="" style="height:79px; width:120px;"></a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?= base_url('uploads/partners/' . $data->siup) ?>">
                                        <div class="card text-center" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->siup ?>">
                                            <i class="fa fa-file fa-5x"></i>
                                            <!-- <span class="small"><?= $data->siup ?></span> -->
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($data->logo_perusahaan) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <?php if (get_extension($data->logo_perusahaan)) { ?>
                                    <div class="zoom-gallery">
                                        <a href="<?= base_url('uploads/partners/' . $data->logo_perusahaan) ?>"><img src="<?= base_url('uploads/partners/' . $data->logo_perusahaan) ?>" alt="" style="height:79px; width:120px;"></a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?= base_url('uploads/partners/' . $data->logo_perusahaan) ?>">
                                        <div class="card text-center" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->logo_perusahaan ?>">
                                            <i class="fa fa-file fa-5x"></i>
                                            <!-- <span class="small"><?= $data->logo_perusahaan ?></span> -->
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($data->foto_usaha_mapping) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <?php if (get_extension($data->foto_usaha_mapping)) { ?>
                                    <div class="zoom-gallery">
                                        <a href="<?= base_url('uploads/partners/' . $data->foto_usaha_mapping) ?>"><img src="<?= base_url('uploads/partners/' . $data->foto_usaha_mapping) ?>" alt="" style="height:79px; width:120px;"></a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?= base_url('uploads/partners/' . $data->foto_usaha_mapping) ?>">
                                        <div class="card text-center" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->foto_usaha_mapping ?>">
                                            <i class="fa fa-file fa-5x"></i>
                                            <!-- <span class="small"><?= $data->foto_usaha_mapping ?></span> -->
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php if ($data->foto_usaha) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <?php if (get_extension($data->foto_usaha)) { ?>
                                    <div class="zoom-gallery">
                                        <a href="<?= base_url('uploads/partners/' . $data->foto_usaha) ?>"><img src="<?= base_url('uploads/partners/' . $data->foto_usaha) ?>" alt="" style="height:79px; width:120px;"></a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?= base_url('uploads/partners/' . $data->foto_usaha) ?>">
                                        <div class="card text-center" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->foto_usaha ?>">
                                            <i class="fa fa-file fa-5x"></i>
                                            <!-- <span class="small"><?= $data->foto_usaha ?></span> -->
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <?php foreach ($maintains->result() as $maintain) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <div class="zoom-gallery">
                                    <a href="<?= base_url('uploads/maintains/' . $maintain->photo_activity) ?>"><img src="<?= base_url('uploads/maintains/' . $maintain->photo_activity) ?>" alt="" style="height:79px; width:120px;"></a>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($ticket->form_mou) { ?>
                            <div class="item" style="height:79px; width:120px;">
                                <?php if (get_extension($ticket->form_mou)) { ?>
                                    <div class="zoom-gallery">
                                        <a href="<?= base_url('uploads/partners/' . $ticket->form_mou) ?>"><img src="<?= base_url('uploads/partners/' . $ticket->form_mou) ?>" alt="" style="height:79px; width:120px;"></a>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?= base_url('uploads/partners/' . $ticket->form_mou) ?>">
                                        <div class="card text-center" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $ticket->form_mou ?>">
                                            <i class="fa fa-file fa-5x"></i>
                                            <!-- <span class="small"><?= $ticket->form_mou ?></span> -->
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="card-contents">
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-newspaper"></i></span>
                                    <span class="d-none d-sm-block">Status</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-comment-dots"></i></span>
                                    <span class="d-none d-sm-block">Comment</span>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size"><b><?= $activity->activity ?></b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 text-size"><?= $activity->tanggal_activity ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $activity->name ?> (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1"><b><?= $activity->activity ?></b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $activity->name ?> (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0"><?= $activity->tanggal_activity ?></p>
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

                                <div class="web mt-2">
                                    <h6 class="header-title mb-0 mt-0">STATUS PARTNER</h6>
                                    <div class="boxxx overflow-auto">
                                        <!-- Terverifikasi -->
                                        <?php if ($ticket->status_approval == 5) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success"><b>Terverifikasi</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_completed ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-primary"><b>Teraktivasi</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_activated ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size  text-danger"><b>Belum Diverifikasi</b></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success"><b>Sudah tanda tangan Kerjasama</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_verified_ttd ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-danger"><b>Belum tanda tangan Kerjasama</b></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 ml-3 text-size"><b>Kerjasama?</b></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-success"><b>Terverifikasi</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted"><?= $ticket->tanggal_completed ?></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-size text-primary"><b>Teraktivasi</b></p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_activated ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-danger"><b>Belum Diverifikasi</b></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-success"><b>Sudah tanda tangan Kerjasama</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted"><?= $ticket->tanggal_verified_ttd ?></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-size text-danger"><b>Belum tanda tangan Kerjasama</b></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 ml-3 text-size"><b>Kerjasama?</b></p>
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

                                <h4 class="header-title mt-2 mb-0">LAMPIRAN</h4>
                                <div class="inbox-wid">
                                    <div class="inbox-item">
                                        <table>
                                            <tr>
                                                <td>
                                                    <p class="inbox-item-author mt-0 mb-1"><i class="fas fa-download"></i>&nbsp;</p>
                                                </td>
                                                <td>
                                                    <p class="inbox-item-author mt-0 mb-1 text-size"><b><a href="<?= base_url('zip/partner/' . $data->id_partner) ?>">Download Semua Lampiran</b></a></p>
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