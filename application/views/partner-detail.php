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
                        <form class="" action="#">
                            <div class="form-group">
                                <label>Nama Usaha</label>
                                <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" required placeholder="CV Aria Santika" />
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" parsley-type="email" required placeholder="Aisha@bfisyariah.id" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon / WhatsApp</label>
                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" required placeholder="EG 0811977500" maxlength="15" />
                            </div>
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select class="form-control" name="kategori_produk" id="kategori_produk" required>
                                    <option selected disabled value="">Pilih Kategori Produk</option>
                                    <option value="My Ihram">My Ihram</option>
                                    <option value="My Safar">My Safar</option>
                                    <option value="My Talin">My Talin</option>
                                    <option value="My Hajat">My Hajat</option>
                                    <option value="My Faedah">My Faedah</option>
                                    <option value="My CarS">My CarS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Bidang Usaha</label>
                                <input type="text" class="form-control" name="bidang_usaha" id="bidang_usaha" required placeholder="Garmen / Percetakan / Lainnya" />
                            </div>
                            <div class="form-group">
                                <label>Bentuk Usaha</label>
                                <select class="form-control" name="bentuk_usaha" id="" required placeholder="Bentuk Usaha">
                                    <option selected value="">Pilih Bentuk Usaha</option>
                                    <option value="My Ihram">Perorangan</option>
                                    <option value="My Safar">PD</option>
                                    <option value="My Talim">CV</option>
                                    <option value="My Hajat">PT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat / Lokasi</label>
                                <input type="phone" class="form-control" name="alamat" id="alamat" required placeholder="Jalan Perjalanan Panjang No.22" />
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Kelurahan</label>
                                    <input type="text" class="form-control" name="kelurahan" id="kelurahan" required placeholder="Lengkong Gudang" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" required placeholder="Serpong utara" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="kode_pos" id="kode_pos" required placeholder="125487" maxlength="6" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Provinsi</label>
                                    <input type="text" class="form-control" name="provinsi" id="provinsi" required placeholder="Kalimantan Tengah" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status Tempat Usaha</label>
                                <select class="form-control" name="status_tempat_usaha" id="status_tempat_usaha" required>
                                    <option selected disabled value="">Pilih Status Tempat usaha</option>
                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                    <option value="Milik Keluarga">Milik Keluarga</option>
                                    <option value="Sewa">Sewa</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tahun Berdiri</label>
                                    <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="tahun-berdiri" id="tahun_berdiri" required placeholder="2016" maxlength="4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jumalah Karyawan</label>
                                    <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="jumlah_karyawan" id="jumlah_karyawan" required placeholder="25">
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
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">Maintain 29, 2019</span>
                                    <span class="activity-text">Lorem Ipsum Sit Dolor Amet lala lalala Amet
                                        amet jabang jabang</span>
                                </div>
                            </li>
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
                    <p class="text-muted m-b-10"><i class="dripicons-clock"></i>&nbsp;&nbsp;Perubahan
                        pada
                        data partner<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <code>30 Des, 2019 -
                            Ibrahim Ahmad</code>
                    </p>
                    <p class="text-muted m-b-10"><i class="dripicons-clock"></i>&nbsp;&nbsp;Perubahan
                        pada
                        data partner<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <code>27 Nov, 2019 -
                            Don Aria Sabda</code>
                    </p>
                    <p class="text-muted m-b-10"><i class="dripicons-clock"></i>&nbsp;&nbsp;Perubahan
                        pada
                        data partner<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <code>24 Nov, 2019 -
                            Don Aria Sabda</code>
                    </p>

                    <hr class="mt-4 mb-4">

                    <h4 class="mt-0 header-title">STATUS PARTNER</h4>
                    <p class="text-muted"><i class="mdi mdi-account-check"></i>&nbsp;&nbsp;&nbsp;Terverifikasi Oleh Teri
                        Anggraini<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <code style="color: blue;">30 Des, 2019 -
                            Admin HO</code>
                    </p>
                    <p class="text-muted m-b-10"><i class="mdi mdi-checkbox-marked"></i>&nbsp;&nbsp;&nbsp;Sudah tanda tangan
                        Kerjasama<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <code style="color: blue;">30 Des, 2019 -
                            Ibrahim Ahmad</code>
                    </p>

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