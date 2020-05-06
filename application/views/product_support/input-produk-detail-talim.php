<div class="row">
    <div class="col-lg-8">
        <div class="page-title-box">
            <h4 class="page-title">Input Produk Detail</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Input Produk</a></li>
                <li class="breadcrumb-item active">My Talim</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#my_talim" role="tab">
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
                    <div class="tab-pane active p-3" id="my_talim" role="tabpanel">
                        <form class=" text-size" action="<?= base_url("ps_my_talim/update") ?>" method="post">
                            <input type="hidden" name="id_my_talim" value="<?= $data->id_my_talim ?>">
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
                                    value="My Ta'lim" required readonly />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Pelajar</label>
                                <input type="text" class="form-control text-size talim" name="nama_siswa"
                                    value="<?= $data->nama_siswa ?>" id="nama_siswa" placeholder="Ryan Issabella" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Jenis Pembiayaan Pendidikan</label>
                                <select class="form-control text-size talim" name="pendidikan" id="pendidikan">
                                    <option selected disabled value="">Pilih Pendidikan</option>
                                    <option
                                        <?= $data->pendidikan == 'Sekolah (TK, SD, SMP, SMA, Pesantren)' ? 'selected' : '' ?>
                                        value="Sekolah (TK, SD, SMP, SMA, Pesantren)">Sekolah
                                        (TK,
                                        SD, SMP, SMA, Pesantren)
                                    </option>
                                    <option <?= $data->pendidikan == 'Universitas (S1, S2, S3)' ? 'selected' : '' ?>
                                        value="Universitas (S1, S2, S3)">Universitas (S1, S2,
                                        S3)
                                    </option>
                                    <option
                                        <?= $data->pendidikan == 'Kursus (English, Bimble, Komputer, Lainnya)' ? 'selected' : '' ?>
                                        value="Kursus (English, Bimble, Komputer, Lainnya)">
                                        Kursus
                                        (English, Bimble, Komputer, Lainnya)</option>
                                    <option <?= $data->pendidikan == 'Lainnya' ? 'selected' : '' ?> value="Lainnya">
                                        Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Lembaga Pendidikan</label>
                                <input type="text" class="form-control text-size talim" name="nama_lembaga"
                                    value="<?= $data->nama_lembaga ?>" id="nama_lembaga" placeholder="ILP" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Tahun Berdiri Lembaga</label>
                                <input type="date" class="form-control text-size talim" name="tahun_berdiri"
                                    value="<?= $data->tahun_berdiri ?>" id="tahun_berdiri" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Akreditasi Lembaga Pendidikan</label>
                                <input type="text" class="form-control text-size talim" name="akreditasi"
                                    value="<?= $data->akreditasi ?>" id="akreditasi" placeholder="Akreditasi A" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Tahun Periode Pendidikan</label>
                                <input type="text" class="form-control text-size talim" name="periode"
                                    value="<?= $data->periode ?>" id="periode" placeholder="2020 - 2021" />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Tujuan Pembiayaan</label>
                                <input type="text" class="form-control text-size talim" name="tujuan_pembiayaan"
                                    value="<?= $data->tujuan_pembiayaan ?>" id="tujuan_pembiayaan"
                                    placeholder="Uang Masuk / Uang Paket Semester / Lainnya" />
                            </div>
                            <div class="ml-3 mr-3 mb-3">
                                <label>Nilai Pembiayaan</label>
                                <div class="input-group flex-nowrap">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                    </div>
                                    <input type="text" class="form-control text-size talim number-only"
                                        name="nilai_pembiayaan" value="<?= $data->nilai_pembiayaan ?>"
                                        id="nilai_pembiayaan" data-type="currency" placeholder="7,000,000"
                                        aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Informasi Tambahan</label>
                                <textarea class="form-control text-size talim" name="informasi_tambahan"
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
                                            <a href="<?= base_url('uploads/my_talim/' . $upload) ?>"><img
                                                    src="<?= base_url('uploads/my_talim/' . $upload) ?>" alt=""
                                                    style="height:150px; width:300px;"></a>
                                        </div>
                                        <?php } else { ?>
                                        <a href="<?= base_url('uploads/my_talim/' . $upload) ?>">
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
                                <form action="<?= base_url('ps_my_talim/tambah_lampiran') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="id_my_talim" value="<?= $data->id_my_talim ?>">
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
                                            id="attachMore">Tambah Form lampiran</a>
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
                                                                href="<?= base_url('zip/my_talim/' . $data->id_my_talim) ?>">Download
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