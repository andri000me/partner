<div class="row mt-5">
    <div class="col-lg-8">
        <div class="page-title-box ml-4">
            <h4 class="page-title">Timeline Maintain</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Timeline Maintain</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Mapping Lokasi Partner</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner yang berpotensi di
                    area cabang anda. Pastikan anda memasukan data yang valid agar memudahkan anda dalam
                    memaintain partner anda.</p>

                <form class="" action="<?= base_url('Maintain_partner/save') ?>" method="post" enctype="multipart/form-data">
                    <!-- ID Partner -->
                    <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">
                    <!-- ID user -->
                    <input type="hidden" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                    <!-- ID branch -->
                    <input type="hidden" name="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <div class="form-group ml-3 mr-3">
                        <label>Upload Foto Kegiatan</label>
                        <input type="file" class="form-control" name="photo_activity" id="photo_activity" required placeholder="Silahkan Upload Foto Kegiatan" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Jenis Kegiatan</label>
                        <select class="form-control" name="jenis_kegiatan" id="jenis_kegiatan">
                            <option selected>Pilih Jenis Kegiatan</option>
                            <option value="Update produk">Update produk</option>
                            <option value="Silaturahmi">Silaturahmi</option>
                            <option value="Presentasi">Presentasi</option>
                            <option value="Follow Up Leads">Follow Up Leads</option>
                            <option value="Update Usaha">Update Usaha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Catatan</label>
                        <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10" required placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                    </div>
                    <div class="form-group mb-0 float-right mt-2 ml-3 mr-3">
                        <div>
                            <button type="cancle" class="btn btn-secondary waves-effect waves-light">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="sticky">
            <div class="card height">
                <div class="card-body">
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="height:79px; width:120px;">
                            <div class="zoom-gallery">
                                <a href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>"><img src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" alt="" style="height:79px; width:120px;"></a>
                            </div>
                        </div>
                        <div class="item" style="height:79px; width:120px;">
                            <div class="zoom-gallery">
                                <a href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>"><img src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" alt="" style="height:79px; width:120px;"></a>
                            </div>
                        </div>
                        <div class="item" style="height:79px; width:120px;">
                            <div class="zoom-gallery">
                                <a href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>"><img src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" alt="" style="height:79px; width:120px;"></a>
                            </div>
                        </div>
                        <div class="item" style="height:79px; width:120px;">
                            <div class="zoom-gallery">
                                <a href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>"><img src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" alt="" style="height:79px; width:120px;"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-contents">
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-newspaper"></i></span>
                                    <span class="d-none d-sm-block">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-comment-dots"></i></span>
                                    <span class="d-none d-sm-block">Profile</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                <h4 class="mt-0 header-title">AKTIVITAS TERAKHIR</h4>
                                <div class="boxx overflow-auto">
                                    <?php if ($activities->num_rows() > 0) {
                                        foreach ($activities->result() as $activity) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <p class="inbox-item-author mt-0 mb-1"><i class="dripicons-clock"></i><b>&nbsp;&nbsp;<?= $activity->activity ?></b></p>
                                                    <p class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh&nbsp;&nbsp;<?= $activity->name ?></p>
                                                    <code class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;<?= $activity->date_activity ?></code>
                                                </div>
                                            </div>
                                        <?php
                                            }
                                        } else { ?>
                                        <p class="text-muted m-b-10">Tidak Ada Data</p>
                                    <?php } ?>
                                </div>

                                <hr class="">

                                <div class="">
                                    <h4 class="mt-0 header-title">STATUS PARTNER</h4>
                                    <div class="inbox-wid">
                                        <div class="inbox-item">
                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i><b>&nbsp;&nbsp;Terverifikasi</b></p>
                                            <p class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh&nbsp;&nbsp;Teri Anggraini</p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code class="inbox-item-text text-muted">30 Des, 2019</code>
                                        </div>
                                    </div>
                                    <div class="inbox-wid">
                                        <div class="inbox-item">
                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i><b>&nbsp;&nbsp;Belum
                                                    Diverifikasi</b>
                                            </p>
                                            <p class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh&nbsp;&nbsp;Admin HO</p>
                                        </div>
                                    </div>
                                    <div class="inbox-wid">
                                        <div class="inbox-item">
                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i><b>&nbsp;&nbsp;Sudah
                                                    tanda
                                                    tangan
                                                    Kerjasama</b>
                                            </p>
                                            <p class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh&nbsp;&nbsp;Ibrahim Ahmad</p>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code class="inbox-item-text text-muted">30 Des, 2019</code>
                                        </div>
                                    </div>
                                    <div class="inbox-wid">
                                        <div class="inbox-item">
                                            <p class="inbox-item-author mt-0 mb-1"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerjasama?</b></p>
                                            <div class="form-group ml-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" required value="Ya">
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" required value="Tidak">
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="">

                                <div class="">
                                    <h4 class="mt-0 header-title">LAMPIRAN</h4>
                                    <div class="inbox-wid">
                                        <div class="inbox-item">
                                            <p class="inbox-item-author mt-0 mb-1"><i class="fas fa-download"></i><b>&nbsp;&nbsp;<a href="#">Download Semua Lampiran</b></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                <div class="box overflow-auto">
                                    <div class="media">
                                        <a class="image-popup-vertical-fit" href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" title="Foto Profile.">
                                            <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" height="64">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">Ibrahim</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                                metus
                                                scelerisque ante sollicitudin. Cras purus odio,
                                                vestibulum
                                                in vulputate at, tempus viverra turpis. Fusce
                                                condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                felis
                                                in faucibus.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="image-popup-vertical-fit" href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" title="Foto Profile.">
                                            <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" height="64">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">Ibrahim</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                                metus
                                                scelerisque ante sollicitudin. Cras purus odio,
                                                vestibulum
                                                in vulputate at, tempus viverra turpis. Fusce
                                                condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                felis
                                                in faucibus.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="image-popup-vertical-fit" href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" title="Foto Profile.">
                                            <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" height="64">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">Ibrahim</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                                metus
                                                scelerisque ante sollicitudin. Cras purus odio,
                                                vestibulum
                                                in vulputate at, tempus viverra turpis. Fusce
                                                condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                felis
                                                in faucibus.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="image-popup-vertical-fit" href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" title="Foto Profile.">
                                            <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" height="64">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">Ibrahim</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                                metus
                                                scelerisque ante sollicitudin. Cras purus odio,
                                                vestibulum
                                                in vulputate at, tempus viverra turpis. Fusce
                                                condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                felis
                                                in faucibus.</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="image-popup-vertical-fit" href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" title="Foto Profile.">
                                            <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" height="64">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0 font-16">Ibrahim</h5>
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                                metus
                                                scelerisque ante sollicitudin. Cras purus odio,
                                                vestibulum
                                                in vulputate at, tempus viverra turpis. Fusce
                                                condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                felis
                                                in faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10" required placeholder="tulis comment disini" style="height:107px;"></textarea>
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