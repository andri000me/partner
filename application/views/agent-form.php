<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Partnership</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Agent / BA</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <div id="top-wizard">
                        <form action="<?= base_url('Agent/save') ?>" method="post" enctype="multipart/form-data" class=" text-size">
                            <input id="website" name="website" type="disable" value="">

                            <!-- ID Agent -->
                            <!-- <input type="hidden" name="id_agent" id="id_agent"> -->
                            <!-- ID User -->
                            <input type="hidden" name="id_user" id="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                            <!-- ID Cabang -->
                            <input type="hidden" name="id_branch" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="step">
                                    <div class="row mb-2">
                                        <div class="col-md-12 ml-3">
                                            <h4 class="mt-0 header-title">Formulir Agent / BA</h4>
                                            <p class="text-muted">Isi data agent/ BA yang ingin anda daftarkan.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>Nama Lengkap</label>
                                                            <input type="text" class="form-control text-size <?= form_error('nama_lengkap') ? 'is-invalid' : '' ?>" name="nama_lengkap" id="nama_lengkap" value="<?= set_value('nama_lengkap') ?>" required placeholder="Aisha Putri" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>E-Mail</label>
                                                            <div>
                                                                <input type="email" class="form-control text-size <?= form_error('email') ? 'is-invalid' : '' ?>" name="email" id="email" parsley-type="email" value="<?= set_value('email') ?>" required placeholder="Aisha@bfisyariah.id" />
                                                                <?= form_error('email'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>Nomor Telepon</label>
                                                            <input type="text" class="form-control text-size <?= form_error('telepon') ? 'is-invalid' : '' ?> placement number-only" name="telepon" id="telepon" value="<?= set_value('telepon') ?>" required placeholder="09788398364" maxlength="15" />
                                                            <?= form_error('telepon'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-size <?= form_error('tanggal_lahir') ? 'is-invalid' : '' ?>" name="tanggal_lahir" id="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" required placeholder="19 / 10 / 1927" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>Nomor KTP</label>
                                                            <input type="text" class="form-control text-size <?= form_error('no_ktp') ? 'is-invalid' : '' ?> placement number-only" name="no_ktp" id="no_ktp" value="<?= set_value('no_ktp') ?>" required placeholder="1234567891234567" maxlength="16" />
                                                            <?= form_error('no_ktp'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>Pekerjaan</label>
                                                            <!-- <input type="text" class="form-control <?= form_error('pekerjaan') ? 'is-invalid' : '' ?>" name="pekerjaan" id="pekerjaan" value="<?= set_value('pekerjaan') ?>" required placeholder="Pilih Pekerjaan" /> -->
                                                            <select class="form-control text-size <?= form_error('pekerjaan') ? 'is-invalid' : '' ?>" name="pekerjaan" id="pekerjaan" required>
                                                                <option selected disabled value="">Pilih Pekerjaan</option>
                                                                <option <?= set_value('pekerjaan') == 'Swasta' ? 'selected' : '' ?> value="Swasta">Swasta</option>
                                                                <option <?= set_value('pekerjaan') == 'Wiraswasta' ? 'selected' : '' ?> value="Wiraswasta">Wiraswasta</option>
                                                                <option <?= set_value('pekerjaan') == 'Freelance' ? 'selected' : '' ?> value="Freelance">Freelance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>Jenis Pekerjaan</label>
                                                            <input type="text" class="form-control text-size <?= form_error('jenis_pekerjaan') ? 'is-invalid' : '' ?>" name="jenis_pekerjaan" id="jenis_pekerjaan" value="<?= set_value('jenis_pekerjaan') ?>" required placeholder="Pekerja Rumah tangga" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>Jenis Agent / BA</label>
                                                            <select class="form-control text-size <?= form_error('jenis_agent') ? 'is-invalid' : '' ?>" name="jenis_agent" id="jenis_agent" required>
                                                                <option selected disabled value="">Pilih Jenis Agent / BA</option>
                                                                <option <?= set_value('jenis_agent') == 'Syariah Agent' ? 'selected' : '' ?> value="Syariah Agent">Syariah Agent</option>
                                                                <option <?= set_value('jenis_agent') == 'Syariah Ambassador' ? 'selected' : '' ?> value="Syariah Ambassador">Syariah Ambassador</option>
                                                                <option <?= set_value('jenis_agent') == 'Syariah Point' ? 'selected' : '' ?> value="Syariah Point">Syariah Point</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="form-group ml-3 mr-3">
                                                            <label>Status Kepemilikan Rumah</label>
                                                            <select class="form-control text-size <?= form_error('') ? 'is-invalid' : 'status_kepemilikan_rumah' ?>" name="status_kepemilikan_rumah" id="status_kepemilikan_rumah" required>
                                                                <option selected disabled value="">Rumah Milik Siapa?</option>
                                                                <option <?= set_value('status_kepemilikan_rumah') == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                                                <option <?= set_value('status_kepemilikan_rumah') == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                                                <option <?= set_value('status_kepemilikan_rumah') == 'Kontrak' ? 'selected' : '' ?> value="Kontrak">Kontrak</option>
                                                                <option <?= set_value('status_kepemilikan_rumah') == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row mb-3">
                                                    <div class="col-md-12">
                                                        <div class="ml-3 mr-3">
                                                            <label>income Per bulan saat ini</label>
                                                            <div class="input-group flex-nowrap">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                                                </div>
                                                                <input type="text" class="form-control text-size number-only  <?= form_error('income') ? 'is-invalid' : '' ?>" name="income" id="income" value="<?= set_value('income') ?>" data-type="currency" required placeholder="3,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-row mb-1">
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Apakah Punya Pinjaman?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya" <?= set_value('punya_pinjaman') == 'Ya' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak" <?= set_value('punya_pinjaman') == 'Tidak' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Terdaftar Sebagai Agen travel / Lainnya?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Ya" <?= set_value('afiliasi_travel') == 'Ya' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Tidak" <?= set_value('afiliasi_travel') == 'Tidak' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb-1">
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Terdaftar Sebagai Agen BFI Finance?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Ya" <?= set_value('agent_konvensional') == 'Ya' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Tidak" <?= set_value('agent_konvensional') == 'Tidak' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Ada hubungan dengan karyawan BFI Finance?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Ada" <?= set_value('hubungan_karyawan_bfi') == 'Ada' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Ada
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Tidak Ada" <?= set_value('hubungan_karyawan_bfi') == 'Tidak Ada' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak Ada
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb-1">
                                                <div class="col-md-12">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Apakah pernah menjadi konsumen BFI Finance?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Pernah" <?= set_value('konsumen_bfi') == 'Pernah' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Pernah
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Tidak Pernah" <?= set_value('konsumen_bfi') == 'Tidak Pernah' ? 'checked' : '' ?> required>
                                                            <label class="form-check-label">
                                                                Tidak Pernah
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Nomor NPWP</label>
                                                        <input type="text" class="form-control text-size <?= form_error('no_npwp') ? 'is-invalid' : '' ?> placement number-only" name="no_npwp" id="no_npwp" value="<?= set_value('no_npwp') ?>" required placeholder="1234567891234567" maxlength="15" />
                                                        <?= form_error('no_npwp'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Rekening Bank</label>
                                                        <input type="text" class="form-control text-size <?= form_error('rekening_bank') ? 'is-invalid' : '' ?> placement number-only" id="rekening_bank" name="rekening_bank" value="<?= set_value('rekening_bank') ?>" required placeholder="0468 6587 6587 45" maxlength="16">
                                                        <?= form_error('rekening_bank'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Nama Bank</label>
                                                        <input type="text" class="form-control text-size <?= form_error('nama_bank') ? 'is-invalid' : '' ?>" id="nama_bank" name="nama_bank" value="<?= set_value('nama_bank') ?>" required placeholder="Bank Mandiri">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Cabang Bank</label>
                                                        <input type="text" class="form-control text-size <?= form_error('cabang_bank') ? 'is-invalid' : '' ?>" id="cabang_bank" name="cabang_bank" value="<?= set_value('cabang_bank') ?>" required placeholder="Cabang Karawaci">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Nama Pemilik</label>
                                                        <input type="text" class="form-control text-size <?= form_error('atas_nama') ? 'is-invalid' : '' ?>" name="atas_nama" id="atas_nama" value="<?= set_value('atas_nama') ?>" required placeholder="Anto Hoed">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="submit step">
                                    <div class="form-row mb-3">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 header-title">Formulir Agent / BA</h4>
                                            <p class="text-muted">pastikan semua data yang dikirim benar dan valid. Silahkan upload dokumen pendukung.</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size ml-3 mr-3">
                                                <label>KTP</label>
                                                <input type="file" name="ktp" class="filestyle" data-buttonname="btn-secondary" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size ml-3 mr-3">
                                                <label>NPWP</label>
                                                <input type="file" name="npwp" class="filestyle" data-buttonname="btn-secondary" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size ml-3 mr-3">
                                                <label>Buku Tabungan</label>
                                                <input type="file" name="buku_tabungan" class="filestyle" data-buttonname="btn-secondary" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size ml-3 mr-3">
                                                <label>Foto Selfie</label>
                                                <input type="file" name="foto_selfie" class="filestyle" data-buttonname="btn-secondary" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size ml-3 mr-3">
                                                <label>Form F100</label>
                                                <input type="file" name="form_f100" class="filestyle" data-buttonname="btn-secondary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div class="form-group mb-0 float-right mt-3 mr-3">
                                <button class="btn btn-danger waves-effect waves-light text-size" id="draft" name="draft" class="btn" type="submit">Draft</button>
                                <button class="btn btn-secondary waves-effect waves-light backward text-size" type="button" name="backward">Kembali</button>
                                <button class="btn btn-primary waves-effect waves-light forward text-size" type="button" name="forward">Selanjutnya</button>
                                <button class="btn btn-primary waves-effect waves-light submit text-size" type="submit" name="process" data-toggle="modal" data-target="#modalBerhasil">Simpan</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="modalBerhasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalCenterTitle">Pengajuan Kerjasama Berhasil</h5>
            </div>
            <div class="modal-body">
                Terimakasih telah menyelesaikan tugas perjanjian kerjasama dengan partner potensial di daerah anda.
                Tim HO akan memverifikasi data anda, dan informasinya akan diberikan melalui menu <a href="#" style="color: blue;">motification</a> di website ini.
            </div>
            <div class="modal-footer">
                <a href="<?= base_url('agent') ?>"><button class="btn btn-primary">OK</button></a>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal -->

<!-- Menghilangkan attr required untuk save sementara -->
<script>
    $('#draft').click(function() {
        $("input, select").removeAttr('required');
    })
</script>