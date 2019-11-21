<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Partnership</h4>
            <ol class="breadcrumb">
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
                        <form action="<?= base_url('Home/save_stage1') ?>" method="post">
                            <input id="website" name="website" type="disable" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="step">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 header-title">Formulir Agent / BA</h4>
                                            <p class="text-muted">Isi data agent/ BA yang ingin anda daftarkan.</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Usaha</label>
                                            <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" required placeholder="CV Aria Santika" />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Apakah Puanya Pinjaman?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya" required>
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak" required>
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Terdaftar Sebagai Agen travel / Lainnya?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Ya" required>
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Tidak" required>
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>E-Mail</label>
                                            <div>
                                                <input type="email" class="form-control" name="email" id="email" parsley-type="email" required placeholder="Aisha@bfisyariah.id" />
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Terdaftar Sebagai Agen BFI Finance?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Ya" required>
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Tidak" required>
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required placeholder="19 / 10 / 1927" />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Nomor KTP</label>
                                            <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="tanggal_lahir" id="tanggal_lahir" required placeholder="1234567891234567" maxlength="16" />
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>Nomor NPWP</label>
                                            <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="tanggal_lahir" id="tanggal_lahir" required placeholder="1234567891234567" maxlength="15" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Apakah ada hubungan dengan karyawan BFI Finance?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Ada" required>
                                                <label class="form-check-label">
                                                    Ada
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Tidak Ada" required>
                                                <label class="form-check-label">
                                                    Tidak Ada
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label>Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required placeholder="Pilih Pekerjaan" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Jenis Pekerjaan</label>
                                            <input type="text" class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan" required placeholder="Pekerja Rumah tangga" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Apakah pernah menjadi konsumen BFI Finance?</label><br>
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Pernah" required>
                                                <label class="form-check-label">
                                                    Pernah
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Tidak Pernah" required>
                                                <label class="form-check-label">
                                                    Tidak Pernah
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Jenis Agent / BA</label>
                                            <select class="form-control" name="jenis_agent" id="jenis_agent" required>
                                                <option selected disabled value="">Pilih Jenis Agent / BA</option>
                                                <option value="Syariah Agent">Syariah Agent</option>
                                                <option value="Syariah Ambassador">Syariah Ambassador</option>
                                                <option value="Syariah Point">Syariah Point</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Rekening Bank</label>
                                            <input type="text" class="form-control pelacement" pelacement" onkeypress="return hanyaAngka(event);" id="rekening_bank" name="rekening_bank" required placeholder="0468 6587 6587 45" maxlength="16">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Nama Bank</label>
                                            <input type="text" class="form-control" id="nama_bank" name="nama_bank" required placeholder="Bank Mandiri">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Status Kepemilikan Rumah</label>
                                            <select class="form-control" name="status_kepemilikan_rumah" id="status_kepemilikan_rumah" required>
                                                <option selected disabled value="">Rumah Milik Siapa?</option>
                                                <option value="Milik Sendiri">Milik Sendiri</option>
                                                <option value="Milik Keluarga">Milik Keluarga</option>
                                                <option value="Kontrak">Kontrak</option>
                                                <option value="Sewa">Sewa</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Cabang Bank</label>
                                            <input type="text" class="form-control" id="cabang_bank" name="cabang_bank" required placeholder="Cabang Karawaci">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Nama Pemilik</label>
                                            <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" required placeholder="Anto Hoed">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>income Per bulan saat ini</label>
                                            <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="income" id="income" required placeholder="3,000,000" maxlength="15" />
                                        </div>
                                    </div>
                                </div>

                                <div class="submit step">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 header-title">Formulir Agent / BA</h4>
                                            <p class="text-muted">pastikan semua data yang dikirim benar dan valid. Silahkan upload dokumen pendukung.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div action="#" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div action="#" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div action="#" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div action="#" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button class="btn btn-secondary waves-effect waves-light backward" type="button" name="backward">Kembali</button>
                                <button class="btn btn-primary waves-effect waves-light forward" type="button" name="forward">Selanjutnya</button>
                                <button class="btn btn-primary waves-effect waves-light submit" type="submit" name="process" data-toggle="modal" data-target="#modalBerhasil">Selesai</button>
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
<div class="modal fade" id="modalBerhasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <a href="index.html"><button class="btn btn-primary">OK</button></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->