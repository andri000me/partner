<div class="content">
    <div class="container-fluid">
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
                            <h3 class="main_question"><strong> 1/4</strong>Form Inputan Partner</h3>
                            <div class="form-group">
                                <label>Nama Usaha</label>
                                <input type="text" class="form-control required" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha">
                            </div>
                            <div class="form-group">
                                <label>Bidang Usaha</label>
                                <select class="form-control required" id="bidang_usaha" name="bidang_usaha" placeholder="Bidang Usaha">
                                    <option selected disabled value="">- Pilih Bidang Usaha -</option>
                                    <option value="Travel">Travel</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Renovasi & Interior">Renovasi & Interior</option>
                                    <option value="Mobil">Mobil</option>
                                    <option value="Elektronik">Elektronik</option>
                                    <option value="Jasa Lainnya">Jasa Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat / Lokasi</label>
                                <textarea class="form-control required" id="alamat" name="alamat" placeholder="Alamat / Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="phone" class="form-control required" id="telepon" name="telepon" placeholder="Nomor Telepon">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control required" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select class="form-control required" id="kategori_produk" name="kategori_produk" placeholder="Kategori Produk">
                                    <option selected disabled value="">- Pilih Kategori Produk -</option>
                                    <option value="My Ihram">My Ihram</option>
                                    <option value="My Safar">My Safar</option>
                                    <option value="My Talim">My Talim</option>
                                    <option value="My Hajat">My Hajat</option>
                                    <option value="My Faedah">My Faedah</option>
                                    <option value="My cars">My cars</option>
                                </select>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /step-->

                        <div class="step">
                            <h3 class="main_question"><strong>2/4</strong>Form Inputan Partner</h3>
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <input type="text" class="form-control required" id="kelurahan" name="kelurahan" placeholder="kelurahan">
                            </div>
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control required" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
                            </div>
                            <div class="form-group">
                                <label>Kode Pos</label>
                                <input type="phone" class="form-control required" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
                            </div>
                            <div class="form-group">
                                <label>Nama Pemilik</label>
                                <input type="text" class="form-control required" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik">
                            </div>
                            <div class="form-group">
                                <label>Hobi / Interest</label>
                                <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Hobi / Interest">
                            </div>
                            <div class="form-group">
                                <label>Bentuk Usaha</label>
                                <select class="form-control required" id="bentuk_usaha" name="bentuk_usaha" placeholder="Bentuk Usaha">
                                    <option selected disabled value="">- Pilih bentuk Usaha -</option>
                                    <option value="My Ihram">Perorangan</option>
                                    <option value="My Safar">PD</option>
                                    <option value="My Talim">CV</option>
                                    <option value="My Hajat">PT</option>
                                </select>
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
                                <label>Barang Yang Dijual</label>
                                <input type="text" class="form-control required" id="barang_jual" name="barang_jual" placeholder="Barang Yang Dijual">
                            </div>
                            <div class="form-group">
                                <label>Sosial Media / Website</label>
                                <input type="text" class="form-control required" id="sosial_media" name="sosial_media" placeholder="Sosial Media">
                            </div>
                            <div class="form-group">
                                <label>Status Tempat Usaha</label>
                                <select class="form-control required" id="status_tempat_usaha" name="status_tempat_usaha" placeholder="Status Tempat Usaha">
                                    <option selected disabled value="">- Pilih Status Tempat usaha -</option>
                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                    <option value="Milik Keluarga">Milik Keluarga</option>
                                    <option value="Sewa">Sewa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Pembayaran</label>
                                <select class="form-control required" id="jenis_pembayaran" name="jenis_pembayaran" placeholder="Jenis Pembayaran">
                                    <option selected disabled value="">- Pilih Jenis Pembayaran -</option>
                                    <option value="Tunai">Tunai</option>
                                    <option value="Kredit Konvensional">Kredit Konvensional</option>
                                    <option value="Kredit Syariah">Kredit Syariah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Omset Perbulan</label>
                                <input type="phone" class="form-control required" id="omset" name="omset" placeholder="Omset Perbulan">
                            </div>
                        </div>
                        <div class="step">
                            <h3 class="main_question"><strong>3/4</strong>Form Inputan Partner</h3>
                            <div class="form-group">
                                <label>Jumlah Cabang</label>
                                <input type="number" class="form-control required" id="jumlah_cabang" name="jumlah_cabang" placeholder="Jumlah Cabang">
                            </div>
                            <div class="form-group">
                                <label>Pernah Melakukan Promosi</label>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="pernah_promosi" id="pernah_promosi" value="pernah">
                                    <label class="form-check-label">
                                    Pernah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="pernah_promosi" id="pernah_promosi" value="Tidak Pernah">
                                    <label class="form-check-label">
                                    Tidak Pernah
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Apakah Puanya Pinjaman?</label>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya">
                                    <label class="form-check-label">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak">
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>On Going Project</label>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="on_going_project" id="on_going_project" value="Ada">
                                    <label class="form-check-label">
                                        Ada
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="on_going_project" id="on_going_project" value="Tidak Ada">
                                    <label class="form-check-label">
                                        Tidak Ada
                                    </label>
                                </div>
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
                                    <input class="form-check-input required" type="radio" name="punya_giro_cek" id="punya_giro_cek" value="Giro">
                                    <label class="form-check-label">
                                        Giro
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input required" type="radio" name="punya_giro_cek" id="punya_giro_cek" value="Cek">
                                    <label class="form-check-label">
                                        Cek
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Tambahan</label>
                                <textarea class="form-control required" id="keterangan_tambahan" name="keterangan_tambahan" placeholder="Keterangan Tambahan"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Rekening Bank</label>
                                <input type="number" class="form-control required" id="rekening_bank" name="rekening_bank" placeholder="Rekening Bank">
                            </div>
                            <div class="form-group">
                                <label>Cabang Bank</label>
                                <input type="text" class="form-control required" id="cabang_bank" name="cabang_bank" placeholder="Cabang bank">
                            </div>
                            <div class="form-group">
                                <label>Nama Bank</label>
                                <input type="text" class="form-control required" id="nama_bank" name="nama_bank" placeholder="Nama Bank">
                            </div>
                            <div class="form-group">
                                <label>Atas Nama</label>
                                <input type="text" class="form-control required" id="atas_nama" name="atas_nama" placeholder="Atas Nama">
                            </div>
                            <!--muncul jika Kategori produk My ihram dan My safar-->
                            <div id="disable" class="form-group">
                                <label>Tahun Berakhir Izin Travel</label>
                                <input type="date" class="form-control required" id="akhir_izin" name="akhir_izin" placeholder="Tahun Berakhir Izin Travel">
                            </div>
                            <!--muncul jika Kategori produk My ihram dan My safar-->
                        </div>
                        <!-- /step-->

                        <div class="submit step">
                            <h3 class="main_question"><strong>4/4</strong>Form Inputan Partner</h3>
                            <div class="form-group">
                                <label>KTP / Paspor</label>
                                <input type="file" class="form-control required" id="ktp" name="ktp" placeholder="KTP / Paspor">
                            </div>
                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="file" class="form-control required" id="npwp" name="npwp" placeholder="NPWP">
                            </div>
                            <div class="form-group">
                                <label>Buku tabungan Perusahaan</label>
                                <input type="file" class="form-control required" id="buku_tabungan_perusahaan" name="buku_tabungan_perusahaan" placeholder="Buku tabungan Perusahaan">
                            </div>
                            <div class="form-group">
                                <label>SIUP / TDP</label>
                                <input type="file" class="form-control required" id="siup" name="siup" placeholder="SIUP">
                            </div>
                            <div class="form-group">
                                <label>Logo Perusahaan</label>
                                <input type="file" class="form-control required" id="logo_perusahaan" name="logo_perusahaan" placeholder="Logo Perusahaan">
                            </div>
                            <div class="form-group">
                                <label>Foto Usaha luar / Dalam</label>
                                <input type="file" class="form-control required" id="foto_usaha" name="foto_usaha" placeholder="Foto Usaha">
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
</div>