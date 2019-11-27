<div class="row">
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
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Data partner</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
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
                            <div class="form-group">
                                <label>Nama Usaha</label>
                                <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" value="<?= $data->nama_usaha ?>" required placeholder="CV Aria Santika" />
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" required placeholder="Aisha@bfisyariah.id" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon / WhatsApp</label>
                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="EG 0811977500" maxlength="15" />
                            </div>
                            <div class="form-group">
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
                            <div class="form-group">
                                <label>Bidang Usaha</label>
                                <input type="text" class="form-control" name="bidang_usaha" id="bidang_usaha" value="<?= $data->bidang_usaha ?>" required placeholder="Garmen / Percetakan / Lainnya" />
                            </div>
                            <div class="form-group">
                                <label>Bentuk Usaha</label>
                                <select class="form-control" name="bentuk_usaha" id="bentuk_usaha" required placeholder="Bentuk Usaha">
                                    <option selected value="">Pilih Bentuk Usaha</option>
                                    <option <?= $data->bentuk_usaha == 'Perorangan' ? 'selected' : '' ?> value="Perorangan">Perorangan</option>
                                    <option <?= $data->bentuk_usaha == 'PD' ? 'selected' : '' ?> value="PD">PD</option>
                                    <option <?= $data->bentuk_usaha == 'CV' ? 'selected' : '' ?> value="CV">CV</option>
                                    <option <?= $data->bentuk_usaha == 'PT' ? 'selected' : '' ?> value="PT">PT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat / Lokasi</label>
                                <input type="phone" class="form-control" name="alamat" id="alamat" required value="<?= $data->alamat ?>" placeholder="Jalan Perjalanan Panjang No.22" />
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Kelurahan</label>
                                    <input type="text" class="form-control" name="kelurahan" id="kelurahan" required value="<?= $data->kelurahan ?>" placeholder="Lengkong Gudang" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" required value="<?= $data->kecamatan ?>" placeholder="Serpong utara" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="kode_pos" id="kode_pos" required value="<?= $data->kode_pos ?>" placeholder="125487" maxlength="6" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Provinsi</label>
                                    <input type="text" class="form-control" name="provinsi" id="provinsi" required value="<?= $data->provinsi ?>" placeholder="Kalimantan Tengah" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status Tempat Usaha</label>
                                <select class="form-control" name="status_tempat_usaha" id="status_tempat_usaha" required>
                                    <option selected disabled value="">Pilih Status Tempat usaha</option>
                                    <option <?= $data->status_tempat_usaha == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                    <option <?= $data->status_tempat_usaha == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                    <option <?= $data->status_tempat_usaha == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tahun Berdiri</label>
                                    <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="tahun_berdiri" id="tahun_berdiri" value="<?= $data->tahun_berdiri ?>"" required placeholder=" 2016" maxlength="4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jumalah Karyawan</label>
                                    <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $data->jumlah_karyawan ?>"" required placeholder=" 25">
                                </div>
                            </div>
                            <div class="form-group mb-0 float-right mt-2">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
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
                                                <img src="<?= base_url('uploads/maintains/' .   $data->photo_activity) ?>" width="100" height="100" alt="">
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

    <div class="col-lg-4">
        <div class="">
            <div class="card m-b-20 pisition">
                <div class="card-body">
                    <div class="">
                        <img src="../assets/images/logo.png" class="img-fluid" alt="Responsive image">
                    </div>

                    <hr class="mt-3 mb-4">

                    <h4 class="mt-0 header-title">AKTIVITAS TERAKHIR</h4>
                    <?php if ($activities->num_rows() > 0) {
                        foreach ($activities->result() as $activity) { ?>
                            <p class="text-muted m-b-10">
                                <i class="dripicons-clock"></i>
                                <?= $activity->activity ?>&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <code><?= $activity->tanggal_activity ?> - <?= $activity->name ?></code>
                            </p>
                        <?php
                            }
                        } else { ?>
                        <p class="text-muted m-b-10">Tidak Ada Data</p>
                    <?php } ?>

                    <hr class="mt-4 mb-4">

                    <h4 class="mt-0 header-title">STATUS PARTNER</h4>
                    <?php if ($ticket->status == 5) { ?>
                        <p class="text-muted"><i class="mdi mdi-account-check"></i>&nbsp;&nbsp;&nbsp;
                            Terverifikasi Oleh Teri Anggraini<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <code style="color: blue;">30 Des, 2019 - Admin HO</code>
                        </p>
                    <?php } else { ?>
                        <p class="text-muted m-b-10"><i class="mdi mdi-account-check"></i>&nbsp;&nbsp;&nbsp;Data belum diverifikasi</p>
                    <?php } ?>
                    <?php if ($ticket->ttd_pks == 'sudah') { ?>
                        <p class="text-muted m-b-10">
                            <i class="mdi mdi-checkbox-marked"></i>&nbsp;&nbsp;&nbsp;
                            Sudah tanda tangan Kerjasama<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <code style="color: blue;">30 Des, 2019 - Ibrahim Ahmad</code>
                        </p>
                    <?php } else { ?>
                        <p class="text-muted m-b-10"><i class="mdi mdi-checkbox-marked"></i>&nbsp;&nbsp;&nbsp;Belum tanda tangan kerjasama</p>
                    <?php } ?>

                    <hr class="mt-4 mb-4">

                    <h4 class="mt-0 header-title">LAMPIRAN</h4>
                    <p class="text-muted"><i class="mdi mdi-account-check"></i>&nbsp;&nbsp;&nbsp;<a href="">Download
                            Semua Lampiran</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <code style="color: blue;">30 Des, 2019 -
                            Don Aria Sabda</code>
                    </p>

                    <hr class="mt-4">
                </div>
            </div>
        </div>
    </div>
</div>