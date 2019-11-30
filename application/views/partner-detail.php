<div class="row">
    <div class="col-md-8">
        <div class="page-title-box">
            <h4 class="page-title">Timeline Maintain</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Timeline Maintain</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Data partner</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                            <span class="d-block d-sm-none"><i class="ion-ios7-checkmark-outline"></i></span>
                            <span class="d-none d-sm-block">Data Maintain</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="home2" role="tabpanel">
                        <form class="" action="<?= base_url('Partner/update_detail') ?>" method="post">
                            <!-- ID Partner -->
                            <input type="hidden" name="id_partner" id="id_partner" value="<?= $data->id_partner ?>">
                            <!-- ID Mapping -->
                            <input type="hidden" name="id_mapping" id="id_mapping" value="<?= $data->id_mapping ?>">
                            <!-- ID User -->
                            <input type="hidden" name="id_user" id="id_user" value="<?= $data->id_user ?>">
                            <!-- ID Branch -->
                            <input type="hidden" name="id_branch" id="id_branch" value="<?= $data->id_branch ?>">
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Usaha</label>
                                <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" value="<?= $data->nama_usaha ?>" required placeholder="CV Aria Santika" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>E-Mail</label>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" required placeholder="Aisha@bfisyariah.id" />
                                </div>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nomor Telepon / WhatsApp</label>
                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="EG 0811977500" maxlength="15" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Kategori Produk</label>
                                <select class="form-control" name="kategori_produk" id="kategori_produk" required>
                                    <option selected disabled value="">Pilih Kategori Produk</option>
                                    <option <?= $data->kategori_produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                    <option <?= $data->kategori_produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                    <option <?= $data->kategori_produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                    <option <?= $data->kategori_produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                    <option <?= $data->kategori_produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                    <option <?= $data->kategori_produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Bidang Usaha</label>
                                <input type="text" class="form-control" name="bidang_usaha" id="bidang_usaha" value="<?= $data->bidang_usaha ?>" required placeholder="Garmen / Percetakan / Lainnya" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Bentuk Usaha</label>
                                <select class="form-control" name="bentuk_usaha" id="bentuk_usaha" required placeholder="Bentuk Usaha">
                                    <option selected value="">Pilih Bentuk Usaha</option>
                                    <option <?= $data->bentuk_usaha == 'Perorangan' ? 'selected' : '' ?> value="Perorangan">Perorangan</option>
                                    <option <?= $data->bentuk_usaha == 'PD' ? 'selected' : '' ?> value="PD">PD</option>
                                    <option <?= $data->bentuk_usaha == 'CV' ? 'selected' : '' ?> value="CV">CV</option>
                                    <option <?= $data->bentuk_usaha == 'PT' ? 'selected' : '' ?> value="PT">PT</option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Alamat / Lokasi</label>
                                <input type="phone" class="form-control" name="alamat" id="alamat" required value="<?= $data->alamat ?>" placeholder="Jalan Perjalanan Panjang No.22" />
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Kelurahan</label>
                                        <input type="text" class="form-control" name="kelurahan" id="kelurahan" required value="<?= $data->kelurahan ?>" placeholder="Lengkong Gudang" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" required value="<?= $data->kecamatan ?>" placeholder="Serpong utara" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Kode Pos</label>
                                        <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="kode_pos" id="kode_pos" required value="<?= $data->kode_pos ?>" placeholder="125487" maxlength="6" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Provinsi</label>
                                        <input type="text" class="form-control" name="provinsi" id="provinsi" required value="<?= $data->provinsi ?>" placeholder="Kalimantan Tengah" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group  ml-3 mr-3">
                                <label>Status Tempat Usaha</label>
                                <select class="form-control" name="status_tempat_usaha" id="status_tempat_usaha" required>
                                    <option selected disabled value="">Pilih Status Tempat usaha</option>
                                    <option <?= $data->status_tempat_usaha == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                    <option <?= $data->status_tempat_usaha == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                    <option <?= $data->status_tempat_usaha == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Tahun Berdiri</label>
                                        <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="tahun_berdiri" id="tahun_berdiri" value="<?= $data->tahun_berdiri ?>"" required placeholder=" 2016" maxlength="4">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Jumalah Karyawan</label>
                                        <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $data->jumlah_karyawan ?>"" required placeholder=" 25">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 float-right mt-2">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light ml-3 mr-3">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane p-3" id="profile2" role="tabpanel">
                        <h4 class="mt-0 header-title mb-4">Timeline Maintain</h4>
                        <ol class="activity-feed mb-0">
                            <?php if ($maintain->num_rows() > 0) {
                                foreach ($maintain->result() as $data) {  ?>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Maintain <?= $data->tanggal_maintain ?></span>
                                            <span class="activity-text"><?= $data->catatan ?></span>
                                            <div class="img-fluid">
                                                <a class="image-popup-vertical-fit" href="<?= base_url('uploads/maintains/' .   $data->photo_activity) ?>" title="Foto Profile.">
                                                    <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= base_url('uploads/maintains/' .   $data->photo_activity) ?>" width="100" height="100">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                    }
                                } else { ?>
                                <p class="text-muted m-b-10">Tidak Ada Data</p>

                            <?php } ?>
                        </ol>
                    </div>
                </div>
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
                                <div class="boxx overflow-auto web">
                                    <?php if ($activities->num_rows() > 0) {
                                        foreach ($activities->result() as $activity) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table style="width: 470px;">
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-0"><i class="dripicons-clock"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-0"><b><?= $activity->activity ?></b></p>
                                                            </td>
                                                            <td>
                                                                <code class="inbox-item-text text-muted mb-0"><?= $activity->date_activity ?></code>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $activity->name ?></p>
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
                                        <p class="text-muted m-b-10">Tidak Ada Data</p>
                                    <?php } ?>
                                </div>
                                <div class="boxx overflow-auto mobile">
                                    <?php if ($activities->num_rows() > 0) {
                                        foreach ($activities->result() as $activity) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="dripicons-clock"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><b><?= $activity->activity ?></b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $activity->name ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> </td>
                                                            <td>
                                                                <code class="inbox-item-text text-muted mb-0"><?= $activity->date_activity ?></code>
                                                            </td>
                                                        </tr>
                                                    </table>
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