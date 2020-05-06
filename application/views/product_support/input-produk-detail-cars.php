<div class="row">
    <div class="col-lg-8">
        <div class="page-title-box">
            <h4 class="page-title">Input Produk Detail</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Input Produk</a></li>
                <li class="breadcrumb-item active">My Cars</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#partner" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Data Product Support</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#lampiran" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-file-alt"></i></span>
                            <span class="d-none d-sm-block">Data Lampiran</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="partner" role="tabpanel">
                        <form class=" text-size" action="<?= base_url('ps_my_cars/update') ?>" method="post">
                            <input type="hidden" name="id_my_cars" value="<?= $data->id_my_cars ?>">
                            <input type="hidden" name="id_ps_ticket" value="<?= $ticket->id_ps_ticket ?>">
                            <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Konsumen</label>
                                <input type="text" class="form-control text-size" name="nama_konsumen"
                                    value="<?= $data->nama_konsumen ?>" id="nama_konsumen"
                                    placeholder="Mayang Madana Lalitya" required />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Jenis Konsumen</label>
                                <select class="form-control text-size" name="jenis_konsumen" id="jenis_konsumen"
                                    required>
                                    <option selected disabled value="">Pilih Jenis Konsumen</option>
                                    <option <?= $data->jenis_konsumen == 'Internal' ? 'selected' : '' ?>
                                        value="Internal">Internal (Karyawan)</option>
                                    <option <?= $data->jenis_konsumen == 'Eksternal' ? 'selected' : '' ?>
                                        value="Eksternal">Eksternal</option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Input Produk</label>
                                <input type="text" class="form-control text-size" name="input_produk" id="input_produk"
                                    value="My Cars" required readonly />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Penyedia Barang</label>
                                <input type="text" class="form-control text-size cars" name="nama_penyedia"
                                    value="<?= $data->nama_penyedia ?>" id="nama_penyedia"
                                    placeholder="Nama Penyedia Barang" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Jenis Penyedia Barang</label><br>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input cars" type="radio" name="jenis_penyedia"
                                        <?= $data->jenis_penyedia == 'Authorized' ? 'checked' : '' ?>
                                        value="Authorized">
                                    <label class="form-check-label">
                                        Authorized
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input cars" type="radio" name="jenis_penyedia"
                                        <?= $data->jenis_penyedia == 'Non-Authorized' ? 'checked' : '' ?>
                                        value="Non-Authorized">
                                    <label class="form-check-label">
                                        Non-Authorized
                                    </label>
                                </div>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Kategori Penyedia Barang Detail</label>
                                <select class="form-control text-size cars" name="kategori_penyedia" id="input_produk">
                                    <option selected value="">Pilih Kategori Penyedia Barang Detail
                                    </option>
                                    <option <?= $data->kategori_penyedia == 'Dealer ATPM' ? 'selected' : '' ?>
                                        value="Dealer ATPM">Dealer ATPM</option>
                                    <option <?= $data->kategori_penyedia == 'Penjual Perorangan' ? 'selected' : '' ?>
                                        value="Penjual Perorangan">Penjual Perorangan</option>
                                    <option <?= $data->kategori_penyedia == 'Pemilik Langsung' ? 'selected' : '' ?>
                                        value="Pemilik Langsung">Pemilik Langsung</option>
                                    <option
                                        <?= $data->kategori_penyedia == 'Showroom Tanpa Izin Usaha' ? 'selected' : '' ?>
                                        value="Showroom Tanpa Izin Usaha">Showroom Tanpa Izin
                                        Usaha</option>
                                    <option
                                        <?= $data->kategori_penyedia == 'Showroom Dengan Izin Usaha' ? 'selected' : '' ?>
                                        value="Showroom Dengan Izin Usaha">Showroom Dengan Izin
                                        Usaha
                                    </option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Kategori Aset</label><br>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input cars" type="radio" name="kategori_aset"
                                        <?= $data->kategori_aset == 'New Car' ? 'checked' : '' ?> value="New Car">
                                    <label class="form-check-label">
                                        New Car
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input cars" type="radio" name="kategori_aset"
                                        <?= $data->kategori_aset == 'Used Car' ? 'checked' : '' ?> value="Used Car">
                                    <label class="form-check-label">
                                        Used Car
                                    </label>
                                </div>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Lama Usaha</label>
                                <input type="text" class="form-control text-size cars" name="lama_usaha"
                                    value="<?= $data->lama_usaha ?>" id="lama_usaha" placeholder="Lama Usaha" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Kepemilikan Tempat Usaha</label><br>
                                <div class="form-check form-check-inline mt-2">
                                    <input class="form-check-input cars" type="radio" name="kepemilikan_tempat"
                                        <?= $data->kepemilikan_tempat == 'Milik Sendiri' ? 'checked' : '' ?>
                                        value="Milik Sendiri">
                                    <label class="form-check-label">
                                        Milik Sendiri
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input cars" type="radio" name="kepemilikan_tempat"
                                        <?= $data->kepemilikan_tempat == 'Sewa' ? 'checked' : '' ?> value="Sewa">
                                    <label class="form-check-label">
                                        Sewa
                                    </label>
                                </div>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Jumlah Stok Unit</label>
                                <input type="number" class="form-control text-size cars number-only" name="jumlah_stok"
                                    value="<?= $data->jumlah_stok ?>" id="jumlah_stok" placeholder="Jumlah Stok Unit" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Tipe Kendaraan</label>
                                <input type="text" class="form-control text-size cars" name="tipe_kendaraan"
                                    value="<?= $data->tipe_kendaraan ?>" id="tipe_kendaraan"
                                    placeholder="Tipe kendaraan" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Tahun</label>
                                <input type="date" class="form-control text-size cars placement" name="tahun"
                                    value="<?= $data->tahun ?>" id="tahun" minlength="4" maxlength="4" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Warna kendaraan</label>
                                <input type="text" class="form-control text-size cars" name="warna_kendaraan"
                                    value="<?= $data->warna_kendaraan ?>" id="warna_kendaraan"
                                    placeholder="Warna kendaraan" />
                            </div>
                            <div class="ml-3 mr-3 mb-3">
                                <label>Nilai Pengajuan Pembiayaan</label>
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control text-size cars number-only"
                                        name="nilai_pembiayaan" value="<?= $data->nilai_pembiayaan ?>"
                                        id="nilai_pembiayaan" data-type="currency"
                                        placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                        aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Informasi Tambahan</label>
                                <textarea class="form-control text-size cars" name="informasi_tambahan"
                                    id="informasi_tambahan" cols="30" rows="10"
                                    placeholder="isi jika anda informasi tambahan"
                                    style="height:110px;"><?= $data->informasi_tambahan ?></textarea>
                            </div>
                            <div class="form-group mb-0 mt-2 float-right btn-maintain">
                                <a class="btn btn-info text-size"
                                    onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')"
                                    href="<?= base_url('ticket/approve_status/' . $ticket->id_ps_ticket) ?>">Approve</a>
                                <a class="btn btn-danger text-size"
                                    onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')"
                                    href="<?= base_url('ticket/reject_status/' . $ticket->id_ps_ticket) ?>">Reject</a>
                                <button type="submit"
                                    onclick="return confirm('Mohon pastikan data yang diisi sudah benar!')"
                                    class="btn btn-primary waves-effect waves-light text-size">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Tab Lampiran -->
                    <div class="tab-pane p-3" id="lampiran" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="mt-0 header-title mb-4">Data Lampiran</h4>
                                <div class="owl-carousel owl-theme">
                                    <?php if ($data->upload_file) { ?>
                                    <!-- Lampiran Tambahan -->
                                    <?php
                                        $upload_file =  explode(",", $data->upload_file);
                                        foreach ($upload_file as $upload) {
                                        ?>
                                    <div class="item" style="height:150px; width:300px;">
                                        <?php if (get_extension($upload)) { ?>
                                        <div class="zoom-gallery">
                                            <a href="<?= base_url('uploads/my_cars/' . $upload) ?>"><img
                                                    src="<?= base_url('uploads/my_cars/' . $upload) ?>" alt=""
                                                    style="height:150px; width:300px;"></a>
                                        </div>
                                        <?php } else { ?>
                                        <a href="<?= base_url('uploads/my_cars/' . $upload) ?>">
                                            <div class="card text-center" style="height: 150px; width: 300px"
                                                data-toggle="tooltip" title="<?= $upload ?>">
                                                <i class="fa fa-file fa-5x"></i>
                                            </div>
                                        </a>
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <form action="<?= base_url('ps_my_cars/tambah_lampiran') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="id_my_cars" value="<?= $data->id_my_cars ?>">
                                    <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                                    <h4 class="mt-0 header-title mb-4">Tambah Data Lampiran</h4>
                                    <div class="form-group element text-size">
                                        <label>Lampirkan Data</label><br>
                                        <input type="file" name="tambah_lampiran[]" id="upload_file1" required>
                                    </div>
                                    <hr>
                                    <div id="moreImageUpload"></div>
                                    <div class="clear"></div>
                                    <div id="moreImageUploadLink" style="display:none;" class="float-right">
                                        <a class="btn btn-secondary mr-1" href="javascript:void(0);"
                                            id="attachMore">tambah Form lampiran</a>
                                        <button class="btn btn-primary mr-3">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
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
                                                        <p class="inbox-item-author mt-0 mb-0"><i
                                                                class="dripicons-clock"></i>&nbsp;
                                                        </p>
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
                                                            (<?= $activity->jabatan ?>) -
                                                            <?= $activity->nama_cabang ?>
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
                                                        <p class="inbox-item-author mt-0 mb-1"><i
                                                                class="dripicons-clock"></i>&nbsp;
                                                        </p>
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
                                                            (<?= $activity->jabatan ?>) -
                                                            <?= $activity->nama_cabang ?>
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

                                <div class="web mt-2">
                                    <h6 class="header-title mb-0 mt-0">STATUS TICKET</h6>
                                    <div class="boxxx overflow-auto">
                                        <!-- Terverifikasi -->
                                        <?php if ($ticket->status == 5) { ?>
                                        <div class="inbox-wid">
                                            <div class="inbox-item">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1">
                                                                <i class="mdi mdi-account-check"></i>&nbsp;
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p
                                                                class="inbox-item-author mt-0 mb-1 text-size text-success">
                                                                <b>Terverifikasi</b></p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                <?= $ticket->tanggal_completed ?>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0 text-size">
                                                                Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?>
                                                            </p>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <?php } else
																				if ($ticket->status == 6) { ?>
                                        <div class="inbox-wid">
                                            <div class="inbox-item">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1">
                                                                <i class="mdi mdi-account-check"></i>&nbsp;
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p
                                                                class="inbox-item-author mt-0 mb-1 text-size text-primary">
                                                                <b>Teraktivasi</b></p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                <?= $ticket->tanggal_activated ?>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0 text-size">
                                                                Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?>
                                                            </p>
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
                                                            <p class="inbox-item-author mt-0 mb-1">
                                                                <i class="mdi mdi-timer-sand"></i>&nbsp;
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p
                                                                class="inbox-item-author mt-0 mb-1 text-size  text-danger">
                                                                <b>Belum Diverifikasi</b></p>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="mobile mt-2">
                                    <h6 class="header-title mb-0">STATUS TICKET</h6>
                                    <?php if ($ticket->status == 5) { ?>
                                    <div class="inbox-wid">
                                        <div class="inbox-item">
                                            <table class="text-size">
                                                <tr>
                                                    <td>
                                                        <p class="inbox-item-author mt-0 mb-1"><i
                                                                class="mdi mdi-account-check"></i>&nbsp;
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="inbox-item-author mt-0 mb-1 text-success">
                                                            <b>Terverifikasi</b></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <p class="inbox-item-text text-muted mb-0">
                                                            Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?>
                                                        </p>
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
																			if ($ticket->status == 6) { ?>
                                    <div class="inbox-wid">
                                        <div class="inbox-item">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <p class="inbox-item-author mt-0 mb-1"><i
                                                                class="mdi mdi-account-check"></i>&nbsp;
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="inbox-item-author mt-0 mb-1 text-size text-primary">
                                                            <b>Teraktivasi</b></p>
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
                                                            Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?>
                                                        </p>
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
                                                        <p class="inbox-item-author mt-0 mb-1"><i
                                                                class="mdi mdi-timer-sand"></i>&nbsp;
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="inbox-item-author mt-0 mb-1 text-danger">
                                                            <b>Belum
                                                                Diverifikasi</b></p>
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
                                                    <p class="inbox-item-author mt-0 mb-1"><i
                                                            class="fas fa-download"></i>&nbsp;</p>
                                                </td>
                                                <td>
                                                    <p class="inbox-item-author mt-0 mb-1 text-size">
                                                        <b><a
                                                                href="<?= base_url('zip/my_cars/' . $data->id_my_cars) ?>">Download
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
                                        <a class="image-popup-vertical-fit"
                                            href="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>"
                                            title="Foto Profile.">
                                            <img class="d-flex align-self-start rounded mr-3" alt=""
                                                src="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>"
                                                height="64">
                                        </a>
                                        <div class="media-body b">
                                            <p class="mb-0"><b><?= $comment->name ?></b></p>
                                            <p class="text-size mt-0 mb-0"><?= $comment->tanggal ?>
                                            </p>
                                            <p class="text-size mt-0"><?= $comment->comment ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php } else { ?>
                                    <h4 class="text-muted m-b-10 text-size">Tidak Ada Komentar</h4>
                                    <?php } ?>
                                </div>
                                <form action="<?= base_url('Comment/save_ps') ?>" method="post">
                                    <input type="hidden" name="id_ps_ticket" id="id_ps_ticket"
                                        value="<?= $ticket->id_ps_ticket ?>">
                                    <input type="hidden" name="uri_string" id="uri_string" value="<?= uri_string() ?>">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"
                                            required placeholder="tulis comment disini" style="height:80px;"></textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light float-right" type="submit"
                                        name="process">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>