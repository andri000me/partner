<div class="row">
    <div class="col-md-8">
        <div class="page-title-box card-margin-2">
            <h4><b>Detail Agent / BA</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="#">Help Desk</a></li>
                <li class="breadcrumb-item text-size"><a href="#">Kerjasama</a></li>
                <li class="breadcrumb-item text-size"><a href="#">Agent / BA</a></li>
                <li class="breadcrumb-item text-size active">Detail Agent / BA</li>
            </ol>
        </div>
        <div class="card card-margin-2">
            <div class="card-body">
                <div id="hilang" class="loader-body">
                    <div id="loader"></div>
                    <div id="loadermobile"></div>
                </div>
                <div style="display:none;" id="myDiv" class="animate-bottom">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#agent" role="tab">
                                <span class="d-block d-sm-none mb-1"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block mb-1">Data partner</span>
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
                        <div class="tab-pane active p-3" id="agent" role="tabpanel">
                            <form class="" action="<?= base_url('Agent/update_detail') ?>" method="post">
                                <!-- ID Ticket -->
                                <input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>" id="id_ticket">
                                <!-- ID Agent -->
                                <input type="hidden" name="id_agent" value="<?= $data->id_agent ?>" id="id_agent">
                                <!-- ID User -->
                                <input type="hidden" name="id_user" value="<?= $data->id_user ?>" id="id_user">
                                <!-- ID Cabang -->
                                <input type="hidden" name="id_branch" value="<?= $data->id_branch ?>" id="id_branch">
                                <!-- Post Redirect halaman ke form -->
                                <input type="hidden" name="redirect" value="<?= uri_string() ?>">

                                <div class="">
                                    <div class="form-group form-margin">
                                        <label class="text-size">Nama Usaha</label>
                                        <input type="text" class="form-control text-size" name="nama_lengkap" id="nama_lengkap" value="<?= $data->nama_lengkap ?>" required placeholder="Aisha Putri" />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control text-size" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" required placeholder="Aisha@bfisyariah.id" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Nomor Telepon</label>
                                                <input type="text" class="form-control placement text-size number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="109788398364" maxlength="15" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">Tanggal Lahir</label>
                                                <input type="date" class="form-control text-size" name="tanggal_lahir" id="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" required placeholder="19 / 10 / 1927" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Nomor KTP</label>
                                                <input type="text" class="form-control placement text-size number-only" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required placeholder="1234567891234567" minlength="16" maxlength="16" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">Pekerjaan</label>
                                                <input type="text" class="form-control text-size" name="pekerjaan" id="pekerjaan" value="<?= $data->pekerjaan ?>" required placeholder="Pilih Pekerjaan" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Jenis Pekerjaan</label>
                                                <input type="text" class="form-control text-size" name="jenis_pekerjaan" id="jenis_pekerjaan" value="<?= $data->jenis_pekerjaan ?>" required placeholder="Pekerja Rumah tangga" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">Jenis Agent / BA</label>
                                                <select class="form-control text-size" name="jenis_agent" id="jenis_agent" required>
                                                    <option selected disabled value="">Pilih Jenis Agent / BA</option>
                                                    <option <?= $data->jenis_agent == 'Syariah Agent' ? 'selected' : '' ?> value="Syariah Agent">Syariah Agent</option>
                                                    <option <?= $data->jenis_agent == 'Syariah Ambassador' ? 'selected' : '' ?> value="Syariah Ambassador">Syariah Ambassador</option>
                                                    <option <?= $data->jenis_agent == 'Syariah Point' ? 'selected' : '' ?> value="Syariah Point">Syariah Point</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Status Kepemilikan Rumah</label>
                                                <select class="form-control text-size" name="status_kepemilikan_rumah" id="status_kepemilikan_rumah" required>
                                                    <option selected disabled value="">Rumah Milik Siapa?</option>
                                                    <option <?= $data->status_kepemilikan_rumah == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                                    <option <?= $data->status_kepemilikan_rumah == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                                    <option <?= $data->status_kepemilikan_rumah == 'Kontrak' ? 'selected' : '' ?> value="Kontrak">Kontrak</option>
                                                    <option <?= $data->status_kepemilikan_rumah == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">Income Per bulan saat ini</label>
                                                <input type="text" class="form-control text-size number-only" name="income" id="income" data-type="currency" value="<?= $data->income ?>" required placeholder="Rp. 000 000 000" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Nomor NPWP</label>
                                                <input type="text" class="form-control placement text-size number-only" name="telepon" id="no_npwp" value="<?= $data->no_npwp ?>" required placeholder="123456789123456" minlength="15" maxlength="15" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">Rekening Bank</label>
                                                <input type="text" class="form-control pelacement text-size number-only" id="rekening_bank" name="rekening_bank" value="<?= $data->rekening_bank ?>" required placeholder="04686587658745" minlength="10" maxlength="16">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Nama Bank</label>
                                                <input type="text" class="form-control text-size" id="nama_bank" name="nama_bank" value="<?= $data->nama_bank ?>" required placeholder="Bank Mandiri">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">Cabang Bank</label>
                                                <input type=" text" class="form-control text-size" id="cabang_bank" name="cabang_bank" value="<?= $data->cabang_bank ?>" required placeholder="Cabang Karawaci">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Nama Pemilik</label>
                                                <input type=" text" class="form-control text-size" name="atas_nama" id="atas_nama" value="<?= $data->atas_nama ?>" required placeholder="Anto Hoed">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">Apakah Punya Pinjaman?</label><br>
                                                <div class="form-check form-check-inline mt-2 text-size">
                                                    <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya" <?= $data->punya_pinjaman == 'Ya' ? 'checked' : '' ?> required>
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline text-size">
                                                    <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak" <?= $data->punya_pinjaman == 'Tidak' ? 'checked' : '' ?> required>
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Terdaftar Sebagai Agen travel /
                                                    Lainnya?</label><br>
                                                <div class="form-check form-check-inline mt-2 text-size">
                                                    <input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Ya" <?= $data->afiliasi_travel == 'Ya' ? 'checked' : '' ?> required>
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline text-size">
                                                    <input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Tidak" <?= $data->afiliasi_travel == 'Tidak' ? 'checked' : '' ?> required>
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="text-size">Terdaftar Sebagai Agen BFI Finance?</label><br>
                                                <div class="form-check form-check-inline mt-2 text-size">
                                                    <input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Ya" <?= $data->agent_konvensional == 'Ya' ? 'checked' : '' ?> required>
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline text-size">
                                                    <input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Tidak" <?= $data->agent_konvensional == 'Tidak' ? 'checked' : '' ?> required>
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label class="text-size">Ada hubungan dengan karyawan BFI
                                                    Finance?</label><br>
                                                <div class="form-check form-check-inline mt-2 text-size">
                                                    <input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Ada" <?= $data->hubungan_karyawan_bfi == 'Ada' ? 'checked' : '' ?> required>
                                                    <label class="form-check-label">
                                                        Ada
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline text-size">
                                                    <input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Tidak Ada" <?= $data->hubungan_karyawan_bfi == 'Tidak Ada' ? 'checked' : '' ?> required>
                                                    <label class="form-check-label">
                                                        Tidak Ada
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-left">
                                        <label class=" text-size">Apakah pernah menjadi konsumen BFI Finance?</label><br>
                                        <div class="form-check form-check-inline mt-2 text-size">
                                            <input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Pernah" <?= $data->konsumen_bfi == 'Pernah' ? 'checked' : '' ?> required>
                                            <label class="form-check-label">
                                                Pernah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline text-size">
                                            <input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Tidak Pernah" <?= $data->konsumen_bfi == 'Tidak Pernah' ? 'checked' : '' ?> required>
                                            <label class="form-check-label">
                                                Tidak Pernah
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2 mr-4 float-right mr-4">
                                    <?php
                                    $level = $this->fungsi->user_login()->level;
                                    if (($level != 1) && (($level == 2 && $ticket->status_approval == 0) || ($level == 3 && $ticket->status_approval == 1) || ($level == 4 && $ticket->status_approval == 2) || ($level == 5 && $ticket->status_approval == 5))) {
                                    ?>
                                        <a class="btn btn-info text-size ml-1" onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')" href="<?= base_url('ticket/approve_status/' . $ticket->id_ticket) ?>">Approve</a>
                                    <?php } ?>
                                    <?php if ($level == 4 && $ticket->status_approval == 2) { ?>
                                        <a class="btn btn-danger text-size ml-1 mb-1" onclick=" return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href=" <?= base_url('ticket/reject_status/' . $ticket->id_ticket) ?>">Reject</a>
                                    <?php } ?>
                                    <?php if ($level < 4) { ?>
                                        <button type="submit" onclick="return confirm('Mohon pastikan data yang diisi sudah benar!')" class="btn btn-primary waves-effect waves-light text-size ml-1 mb-1">
                                            Simpan
                                        </button>
                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane p-3" id="lampiran" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mt-0 header-title mb-4"><b>Data Lampiran</b></h4>
                                    <div class="owl-carousel owl-theme">
                                        <?php if ($data->ktp) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->ktp)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/agents/' . $data->ktp) ?>"><img src="<?= base_url('uploads/agents/' . $data->ktp) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/agents/' . $data->ktp) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->ktp ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->ktp ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->npwp) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->npwp)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/agents/' . $data->npwp) ?>"><img src="<?= base_url('uploads/agents/' . $data->npwp) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/agents/' . $data->npwp) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->npwp ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->npwp ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->buku_tabungan) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->buku_tabungan)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/agents/' . $data->buku_tabungan) ?>"><img src="<?= base_url('uploads/agents/' . $data->buku_tabungan) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/agents/' . $data->buku_tabungan) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->buku_tabungan ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->buku_tabungan ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->foto_selfie) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->foto_selfie)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/agents/' . $data->foto_selfie) ?>"><img src="<?= base_url('uploads/agents/' . $data->foto_selfie) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/agents/' . $data->foto_selfie) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->foto_selfie ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->foto_selfie ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->form_f100) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->form_f100)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/agents/' . $data->form_f100) ?>"><img src="<?= base_url('uploads/agents/' . $data->form_f100) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/agents/' . $data->form_f100) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->form_f100 ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->form_f100 ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->lampiran_tambahan) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php
                                                $uploads =  explode(",", $data->lampiran_tambahan);
                                                foreach ($uploads as $upload) {
                                                ?>
                                                    <?php if (get_extension($upload)) { ?>
                                                        <div class="zoom-gallery">
                                                            <a href="<?= base_url('uploads/agents/' . $upload) ?>"><img src="<?= base_url('uploads/agents/' . $upload) ?>" alt="" style="height:150px; width:300px;"></a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <a href="<?= base_url('uploads/agents/' . $upload) ?>">
                                                            <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->lampiran_tambahan ?>">
                                                                <i class="fa fa-file fa-5x"></i>
                                                            </div>
                                                        </a>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($ticket->form_mou) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($ticket->form_mou)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/agents/' . $ticket->form_mou) ?>"><img src="<?= base_url('uploads/agents/' . $ticket->form_mou) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/agents/' . $ticket->form_mou) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $ticket->form_mou ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $ticket->form_mou ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <form action="<?= base_url('agent/tambah_lampiran') ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_agent" value="<?= $data->id_agent ?>">
                                        <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                                        <h4 class="mt-0 header-title mb-4"><b>Tambah Data Lampiran</b></h4>
                                        <div class="form-group element text-size">
                                            <label>Lampirkan Data</label><br>
                                            <input type="file" name="tambah_lampiran[]" id="upload_file1" required>
                                        </div>
                                        <hr>
                                        <div id="moreImageUpload"></div>
                                        <div class="clear"></div>
                                        <div id="moreImageUploadLink" class="float-right mt-3">
                                            <a class="btn btn-secondary mr-1 text-size" href="javascript:void(0);" id="attachMore"><b>Tambah Form</b></a>
                                            <button type="submit" class="btn btn-primary text-size"><b>Simpan</b></button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success">
                                                                    <b>Terverifikasi</b></p>
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
                                        <?php } else if ($ticket->status_approval == 6) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
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
                                                                    <b>Belum Diverifikasi</b></p>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- Tanda Tangan PKS -->
                                        <?php if ($data->ttd_pks == 'Ya' && $data->form_mou != NULL) { ?>
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
                                        <?php if (($this->fungsi->user_login()->level < 4) && ($data->form_mou == NULL || $data->form_mou == '')) { ?>
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
                                                                            <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $data->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                                            <label class="form-check-label">
                                                                                Ya
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $data->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                                            <label class="form-check-label">
                                                                                Tidak
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                                <div id="" class="form-group ml-3 form_mou">
                                                                    <form action="<?= base_url('agent/upload_mou') ?>" method="post" enctype="multipart/form-data">
                                                                        <input type="hidden" name="id_agent" value="<?= $data->id_agent ?>">
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
                                                                <b>Terverifikasi</b></p>
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
                                    <?php } else if ($ticket->status_approval == 6) { ?>
                                        <div class="inbox-wid">
                                            <div class="inbox-item">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
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
                                    <?php if ($data->ttd_pks == 'Ya' && $data->form_mou != NULL) { ?>
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
                                    <?php if (($this->fungsi->user_login()->level < 4) && ($data->form_mou == NULL || $data->form_mou == '')) { ?>
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
                                                            <div class="form-group ml-3">
                                                                <form action="#">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $data->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                                        <label class="form-check-label">
                                                                            Ya
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $data->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                                        <label class="form-check-label">
                                                                            Tidak
                                                                        </label>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div id="" class="form-group ml-3 form_mou">
                                                                <form action="<?= base_url('agent/upload_mou') ?>" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id_agent" value="<?= $data->id_agent ?>">
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
                                                    <p class="inbox-item-author mt-0 mb-1 text-size"><b><a href="<?= base_url('zip/agent/' . $data->id_agent) ?>">Download
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
                                            <div class="media">
                                                <a class="image-popup-vertical-fit" href="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
                                                    <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" height="64">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="mt-0 font-16"><?= $comment->name ?></h5>
                                                    <p class="text-size mt-0 mb-0"><?= $comment->tanggal ?></p>
                                                    <p><?= $comment->comment ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <h5 class="text-muted m-b-10 text-size">Tidak Ada Komentar</h5>
                                    <?php } ?>
                                </div>
                                <form action="<?= base_url('Comment/save') ?>" method="post">
                                    <input type="hidden" name="ticket" id="ticket" value="<?= $ticket->id_ticket ?>">
                                    <input type="hidden" name="uri_string" id="uri_string" value="<?= uri_string() ?>">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10" required placeholder="tulis comment disini" style="height:80px;"></textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light float-right w-md" type="submit" name="process"><b>Kirim</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //Script untuk update tanda tangan pks -->
<script>
    if ($("input[name='ttd_pks']:checked").val() == 'Ya') {
        $(".form_mou").show();
    } else {
        $(".form_mou").hide();
    }
    //Update tanda tangan pks
    $(".ttd_pks").on('click', function() {
        var ttd_pks = $(this).val();
        var id_agent = $('#id_agent').val();

        if (ttd_pks == 'Ya') {
            $(".form_mou").show();
        } else {
            $(".form_mou").hide();
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('agent/update_ttd') ?>",
            dataType: "JSON",
            data: {
                ttd_pks: ttd_pks,
                id_agent: id_agent
            },
            success: function(data) {
                alert('Success, \n ID Agent: ' + id_agent + '\n TTD: ' + ttd_pks);
                // location.reload();
            }
        });
        // return false;
    });
</script>