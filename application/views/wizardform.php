<div id="form_container">
    <div class="row">
        <div class="col-lg-12">
            <div id="wizard_container">
                <div id="top-wizard">
                    <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form action="<?= base_url('Home/save_stage1') ?>" method="post">
                    <input id="website" name="website" type="disable" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard">

                        <div class="step">
                            <h3 class="main_question"><strong> 1 /3</strong>Form Inputan Partner</h3>
                            <div class="form-group">
                                <label>Nama Usaha</label>
                                <input type="text" class="form-control required" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha">
                            </div>
                            <div class="form-group">
                                <label>Bidang Usaha</label>
                                <input type="text" class="form-control required" id="bidang_usaha" name="bidang_usaha" placeholder="Bidang Usaha">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control required" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="phone" class="form-control required" id="telepon" name="telepon" placeholder="Nomor Telepon">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control required" id="email" name="email" placeholder="Email">
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /step-->

                        <div class="step">
                            <h3 class="main_question"><strong>2/3</strong>Form Inputan Partner</h3>
                            <div class="form-group">
                                <label>Bentuk Usaha</label>
                                <input type="text" class="form-control required" id="bentuk_usaha" name="bentuk_usaha" placeholder="Bentuk Usaha">
                            </div>
                            <div class="form-group">
                                <label>Jumalah Karyawan</label>
                                <input type="number" class="form-control required" id="jumlah_karyawan" name="jumlah_karyawan" placeholder="Jumalah Karyawan">
                            </div>
                            <div class="form-group">
                                <label>Tahun Berdiri</label>
                                <input type="date" class="form-control required" id="tahun_berdiri" placeholder="Tahun Berdiri">
                            </div>
                            <div class="form-group">
                                <label>Barang Jual</label>
                                <input type="text" class="form-control required" id="barang_jual" name="barang_jual" placeholder="Barang Jual">
                            </div>
                            <div class="form-group">
                                <label>Sosial Media</label>
                                <input type="text" class="form-control required" id="sosial_media" name="sosial_media" placeholder="Sosial Media">
                            </div>
                            <div class="form-group">
                                <label>Status Tempat Usaha</label>
                                <input type="text" class="form-control required required" id="status_tempat_usaha" name="status_tempat_usaha" placeholder="Status Tempat Usaha">
                            </div>
                            <div class="form-group">
                                <label>Jenis Pembayaran</label>
                                <select class="form-control required" id="jenis_pembayaran" name="jenis_pembayaran" placeholder="Status Tempat Usaha">
                                    <option value="Tunai">Tunai</option>
                                    <option value="Kredit">Kredit</option>
                                    <option value="Ngutang">Ngutang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Omset</label>
                                <input type="number" class="form-control required" id="omset" name="omset" placeholder="Omset">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Cabang</label>
                                <input type="number" class="form-control required" id="jumlah_cabang" name="jumlah_cabang" placeholder="Jumlah Cabang">
                            </div>
                            <div class="form-group">
                                <label>Promosi</label>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="promosi" id="promosi" value="Ya">
                                    <label class="form-check-label">
                                        Ya!
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="promosi" id="promosi" value="Tidak">
                                    <label class="form-check-label">
                                        Tidak :(
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Hobi</label>
                                <input type="text" class="form-control required" id="hobi" name="hobi" placeholder="Hobi">
                            </div>
                            <div class="form-group">
                                <label>Puanya Pinjaman</label>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya">
                                    <label class="form-check-label">
                                        Ya!
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak">
                                    <label class="form-check-label">
                                        Tidak :(
                                    </label>
                                </div>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /step-->

                        <div class="submit step">
                            <h3 class="main_question"><strong>3/3</strong>Form Inputan Partner</h3>
                            <div class="form-group">
                                <label>KTP / Paspor</label>
                                <input type="file" class="form-control required" id="ktp" name="ktp" placeholder="KTP / Paspor">
                            </div>
                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="file" class="form-control required" id="npwp" name="npwp" placeholder="NPWP">
                            </div>
                            <div class="form-group">
                                <label>SIUP / TDP</label>
                                <input type="file" class="form-control required" id="siup" name="siup" placeholder="SIUP">
                            </div>
                            <div class="form-group">
                                <label>Logo Perusahaan</label>
                                <input type="file" class="form-control required" id="logo" name="logo" placeholder="Logo Perusahaan">
                            </div>
                            <div class="form-group">
                                <label>On Going Project</label>
                                <input type="text" class="form-control required" id="on_going_project" name="on_going_project" placeholder="On Going Project">
                            </div>
                            <div class="form-group">
                                <label>Punya Jumlah Plafond</label>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" value="Ya">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" value="Tidak">
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Punya Giro / Cek</label>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_giro" id="punya_giro" value="Giro">
                                    <label class="form-check-label">
                                        Giro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_giro" id="punya_giro" value="Cek">
                                    <label class="form-check-label">
                                        Cek
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Foto Usaha</label>
                                <input type="file" class="form-control required" id="foto_usaha" name="foto_usaha" placeholder="Foto Usaha">
                            </div>
                            <div class="form-group">
                                <label>Keterangan Tambahan</label>
                                <textarea class="form-control required" id="keterangan_tambahan" name="keterangan_tambahan" placeholder="Keterangan Tambahan"></textarea>
                            </div>
                        </div>
                        <!-- /step-->
                    </div>
                    <!-- /middle-wizard -->
                    <div id="bottom-wizard">
                        <button type="button" name="backward" class="backward">Backward</button>
                        <button type="button" name="forward" class="forward">Forward</button>
                        <button type="submit" name="process" class="submit">Submit</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->
        </div>
    </div><!-- /Row -->
</div>