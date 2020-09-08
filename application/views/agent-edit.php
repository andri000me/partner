<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4><b>Form Rekrut Agent / BA</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Agent / BA</a></li>
                <li class="breadcrumb-item active">Rekrut Agent / BA</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary font-size gradient card-margin-5 mb-5" role="alert">
            <div class="topcaption">
                <p class="captionalert"><i class="fas fa-info-circle fa-lg"></i> &nbsp;&nbsp;<b>Hati - hati dalam
                        menginput data</b></p>
                <p class="captiontext">Isi data agent/ BA yang ingin anda daftarkan.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20 card-margin-5">
            <div class="card-body">
                <div class="ml-4">
                    <h4 class="mt-0 mb-4 header-title"><b>Data Agen / BA</b></h4>
                </div>
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <div id="top-wizard">
                        <form action="<?= base_url('Agent/update') ?>" method="post" enctype="multipart/form-data" class=" text-size">
                            <input id="website" name="website" type="disable" value="">

                            <!-- ID Agent -->
                            <input type="hidden" name="id_agent" id="id_agent" value="<?= $data->id_agent ?>">
                            <!-- ID User -->
                            <input type="hidden" name="id_user" id="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                            <!-- ID Cabang -->
                            <input type="hidden" name="id_branch" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">

                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="step">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Nama Lengkap</label>
                                                        <input type="text" class="form-control text-size <?= form_error('nama_lengkap') ? 'is-invalid' : '' ?>" name="nama_lengkap" id="nama_lengkap" value="<?= $data->nama_lengkap ?>" required placeholder="Aisha Putri" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>E-Mail</label>
                                                        <div>
                                                            <input type="email" class="form-control text-size <?= form_error('email') ? 'is-invalid' : '' ?>" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" required placeholder="Aisha@bfisyariah.id" />
                                                            <?= form_error('email'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Nomor Telepon</label>
                                                        <input type="text" class="form-control text-size <?= form_error('telepon') ? 'is-invalid' : '' ?> placement number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="09788398364" maxlength="15" />
                                                        <?= form_error('telepon'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Tanggal Lahir</label>
                                                        <input type="date" class="form-control text-size <?= form_error('tanggal_lahir') ? 'is-invalid' : '' ?>" name="tanggal_lahir" id="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" required placeholder="19 / 10 / 1927" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Nomor KTP</label>
                                                        <input type="text" class="form-control text-size <?= form_error('no_ktp') ? 'is-invalid' : '' ?> placement number-only" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required placeholder="1234567891234567" minlength="16" maxlength="16" />
                                                        <?= form_error('no_ktp'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Pekerjaan</label>
                                                        <!-- <input type="text" class="form-control <?= form_error('pekerjaan') ? 'is-invalid' : '' ?>" name="pekerjaan" id="pekerjaan" value="<?= $data->pekerjaan ?>" required placeholder="Pilih Pekerjaan" /> -->
                                                        <select class="form-control text-size <?= form_error('pekerjaan') ? 'is-invalid' : '' ?>" name="pekerjaan" id="pekerjaan" required>
                                                            <option selected disabled value="">Pilih Pekerjaan</option>
                                                            <option <?= $data->pekerjaan == 'Pegawai Swasta' ? 'selected' : '' ?> value="Pegawai Swasta">Pegawai Swasta</option>
                                                            <option <?= $data->pekerjaan == 'Pegawai Negeri' ? 'selected' : '' ?> value="Pegawai Negeri">Pegawai Negeri</option>
                                                            <option <?= $data->pekerjaan == 'Wiraswasta' ? 'selected' : '' ?> value="Wiraswasta">Wiraswasta</option>
                                                            <option <?= $data->pekerjaan == 'Freelance' ? 'selected' : '' ?> value="Freelance">Freelance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Jenis Pekerjaan</label>
                                                        <input type="text" class="form-control text-size <?= form_error('jenis_pekerjaan') ? 'is-invalid' : '' ?>" name="jenis_pekerjaan" id="jenis_pekerjaan" value="<?= $data->jenis_pekerjaan ?>" required placeholder="Pekerja Rumah tangga" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Jenis Agent / BA</label>
                                                        <select class="form-control text-size <?= form_error('jenis_agent') ? 'is-invalid' : '' ?>" name="jenis_agent" id="jenis_agent" required>
                                                            <option selected disabled value="">Pilih Jenis Agent / BA</option>
                                                            <option <?= $data->jenis_agent == 'Syariah Agent' ? 'selected' : '' ?> value="Syariah Agent">Syariah Agent</option>
                                                            <option <?= $data->jenis_agent == 'Syariah Ambassador' ? 'selected' : '' ?> value="Syariah Ambassador">Syariah Ambassador</option>
                                                            <option <?= $data->jenis_agent == 'Syariah Point' ? 'selected' : '' ?> value="Syariah Point">Syariah Point</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Status Kepemilikan Rumah</label>
                                                        <select class="form-control text-size <?= form_error('') ? 'is-invalid' : 'status_kepemilikan_rumah' ?>" name="status_kepemilikan_rumah" id="status_kepemilikan_rumah" required>
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
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>income Per bulan saat ini</label>
                                                        <input type="text" class="form-control text-size <?= form_error('income') ? 'is-invalid' : '' ?> number-only" name="income" id="income" data-type="currency" value="<?= $data->income ?>" required placeholder="Rp. 000 000 000" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-row mb-1">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Apakah Punya Pinjaman?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya" <?= $data->punya_pinjaman == 'Ya' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak" <?= $data->punya_pinjaman == 'Tidak' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Terdaftar Sebagai Agen travel / Lainnya?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Ya" <?= $data->afiliasi_travel == 'Ya' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Tidak" <?= $data->afiliasi_travel == 'Tidak' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb-1">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Terdaftar Sebagai Agen BFI Finance?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Ya" <?= $data->agent_konvensional == 'Ya' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Tidak" <?= $data->agent_konvensional == 'Tidak' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Ada hubungan dengan karyawan BFI Finance?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Ada" <?= $data->hubungan_karyawan_bfi == 'Ada' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Ada
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Tidak Ada" <?= $data->hubungan_karyawan_bfi == 'Tidak Ada' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak Ada
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb-1">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Apakah pernah menjadi konsumen BFI Finance?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Pernah" <?= $data->konsumen_bfi == 'Pernah' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Pernah
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Tidak Pernah" <?= $data->konsumen_bfi == 'Tidak Pernah' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak Pernah
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Nomor NPWP</label>
                                                        <input type="text" class="form-control text-size <?= form_error('no_npwp') ? 'is-invalid' : '' ?> placement  number-only" name="no_npwp" id="no_npwp" value="<?= $data->no_npwp ?>" required placeholder="123456789123456" minlength="15" maxlength="15" />
                                                        <?= form_error('no_npwp'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Rekening Bank</label>
                                                        <input type="text" class="form-control text-size <?= form_error('rekening_bank') ? 'is-invalid' : '' ?> placement  number-only" id="rekening_bank" name="rekening_bank" value="<?= $data->rekening_bank ?>" placeholder="04686587658745" minlength="10" maxlength="16">
                                                        <?= form_error('rekening_bank'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Nama Bank</label>
                                                        <input type="text" class="form-control text-size <?= form_error('nama_bank') ? 'is-invalid' : '' ?>" id="nama_bank" name="nama_bank" value="<?= $data->nama_bank ?>" required placeholder="Bank Mandiri">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Cabang Bank</label>
                                                        <input type="text" class="form-control text-size <?= form_error('cabang_bank') ? 'is-invalid' : '' ?>" id="cabang_bank" name="cabang_bank" value="<?= $data->cabang_bank ?>" required placeholder="Cabang Karawaci">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Nama Pemilik</label>
                                                        <input type="text" class="form-control text-size <?= form_error('atas_nama') ? 'is-invalid' : '' ?>" name="atas_nama" id="atas_nama" value="<?= $data->atas_nama ?>" required placeholder="Anto Hoed">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="submit step">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>KTP</label>
                                                <input type="file" name="ktp" class="filestyle" data-buttonname="btn-secondary" <?= $data->ktp ? '' : 'required' ?>>
                                                <?php if ($data->ktp) { ?>
                                                    <?php if (get_extension($data->ktp)) { ?>
                                                        <div class="img-fluid mt-1">
                                                            <a class="image-popup-vertical-fit" href="<?= base_url('uploads/agents/' .   $data->ktp) ?>" title="Foto Profile.">
                                                                <img class="d-flex align-self-start rounded mr-4" alt="" src="<?= base_url('uploads/agents/' .   $data->ktp) ?>" width="100" height="100">
                                                            </a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="card text-center mt-2" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->ktp ?>">
                                                            <a href="<?= base_url('uploads/partners/' . $data->ktp) ?>">
                                                                <i class="fa fa-file fa-5x"></i>
                                                                <!-- <span class="small"><?= $data->ktp ?></span> -->
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>NPWP</label>
                                                <input type="file" name="npwp" class="filestyle" data-buttonname="btn-secondary">
                                                <?php if ($data->npwp) { ?>
                                                    <?php if (get_extension($data->npwp)) { ?>
                                                        <div class="img-fluid mt-1">
                                                            <a class="image-popup-vertical-fit" href="<?= base_url('uploads/agents/' .   $data->npwp) ?>" title="Foto Profile.">
                                                                <img class="d-flex align-self-start rounded mr-4" alt="" src="<?= base_url('uploads/agents/' .   $data->npwp) ?>" width="100" height="100">
                                                            </a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="card text-center mt-2" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->npwp ?>">
                                                            <a href="<?= base_url('uploads/partners/' . $data->npwp) ?>">
                                                                <i class="fa fa-file fa-5x"></i>
                                                                <!-- <span class="small"><?= $data->npwp ?></span> -->
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>Buku Tabungan</label>
                                                <input type="file" name="buku_tabungan" class="filestyle" data-buttonname="btn-secondary">
                                                <?php if ($data->buku_tabungan) { ?>
                                                    <?php if (get_extension($data->buku_tabungan)) { ?>
                                                        <div class="img-fluid mt-1">
                                                            <a class="image-popup-vertical-fit" href="<?= base_url('uploads/agents/' .   $data->buku_tabungan) ?>" title="Foto Profile.">
                                                                <img class="d-flex align-self-start rounded mr-4" alt="" src="<?= base_url('uploads/agents/' .   $data->buku_tabungan) ?>" width="100" height="100">
                                                            </a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="card text-center mt-2" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->buku_tabungan ?>">
                                                            <a href="<?= base_url('uploads/partners/' . $data->buku_tabungan) ?>">
                                                                <i class="fa fa-file fa-5x"></i>
                                                                <!-- <span class="small"><?= $data->buku_tabungan ?></span> -->
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>Foto Selfie</label>
                                                <input type="file" name="foto_selfie" class="filestyle" data-buttonname="btn-secondary">
                                                <?php if ($data->foto_selfie) { ?>
                                                    <?php if (get_extension($data->foto_selfie)) { ?>
                                                        <div class="img-fluid mt-1">
                                                            <a class="image-popup-vertical-fit" href="<?= base_url('uploads/agents/' .   $data->foto_selfie) ?>" title="Foto Profile.">
                                                                <img class="d-flex align-self-start rounded mr-4" alt="" src="<?= base_url('uploads/agents/' .   $data->foto_selfie) ?>" width="100" height="100">
                                                            </a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="card text-center mt-2" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->foto_selfie ?>">
                                                            <a href="<?= base_url('uploads/partners/' . $data->foto_selfie) ?>">
                                                                <i class="fa fa-file fa-5x"></i>
                                                                <!-- <span class="small"><?= $data->foto_selfie ?></span> -->
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>Form F100</label>
                                                <input type="file" name="form_f100" class="filestyle" data-buttonname="btn-secondary">
                                                <?php if ($data->form_f100) { ?>
                                                    <?php if (get_extension($data->form_f100)) { ?>
                                                        <div class="img-fluid mt-1">
                                                            <a class="image-popup-vertical-fit" href="<?= base_url('uploads/agents/' .   $data->form_f100) ?>" title="Foto Profile.">
                                                                <img class="d-flex align-self-start rounded mr-4" alt="" src="<?= base_url('uploads/agents/' .   $data->form_f100) ?>" width="100" height="100">
                                                            </a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="card text-center mt-2" style="height: 79px; width: 120px" data-toggle="tooltip" title="<?= $data->form_f100 ?>">
                                                            <a href="<?= base_url('uploads/partners/' . $data->form_f100) ?>">
                                                                <i class="fa fa-file fa-5x"></i>
                                                                <!-- <span class="small"><?= $data->form_f100 ?></span> -->
                                                            </a>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div class="form-group mb-0 float-right mt-4 mr-4">
                                <button class="btn btn-danger waves-effect waves-light text-size" id="draft" name="draft" class="btn" type="submit"><b>Draft</b></button>
                                <button class="btn btn-secondary waves-effect waves-light backward text-size ml-1" type="button" name="backward"><b>Kembali</b></button>
                                <button class="btn btn-primary waves-effect waves-light forward text-size ml-1" type="button" name="forward"><b>Selanjutnya</b></button>
                                <button class="btn btn-primary waves-effect waves-light submit text-size ml-1" type="submit" name="process"><b>Kirim</b></button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<!-- Menghilangkan attr required untuk save sementara -->
<script>
    $('#draft').click(function() {
        $("input, select").removeAttr('required');
    })
</script>