<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <!-- /top-wizard -->
                    <form action="<?= base_url('Partner/save_draft') ?>" method="post">
                        <input id="website" name="website" type="disable" value="">
                        <!-- Inputan hidden id user -->
                        <input type="hidden" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                        <!-- Inputan hidden id cabang -->
                        <input type="hidden" name="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                        <!-- Inputan hidden id partner -->
                        <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">

                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">

                            <!-- Step 1 -->
                            <div class="step">
                                <h3 class="main_question"><strong> 1/4</strong>Form Inputan Partner</h3>
                                <div class="form-group">
                                    <label>Nama Usaha</label>
                                    <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="<?= $data->nama_usaha ?>" placeholder="Nama Usaha">
                                </div>
                                <div class="form-group">
                                    <label>Bidang Usaha</label>
                                    <select class="form-control" id="bidang_usaha" name="bidang_usaha" placeholder="Bidang Usaha">
                                        <option disabled value="">- Pilih Bidang Usaha -</option>
                                        <option <?= $data->bidang_usaha == 'Travel' ? 'selected' : '' ?> value="Travel">Travel</option>
                                        <option <?= $data->bidang_usaha == 'Wedding' ? 'selected' : '' ?> value="Wedding">Wedding</option>
                                        <option <?= $data->bidang_usaha == 'Renovasi & Interior' ? 'selected' : '' ?> value="Renovasi & Interior">Renovasi & Interior</option>
                                        <option <?= $data->bidang_usaha == 'Mobil' ? 'selected' : '' ?> value="Mobil">Mobil</option>
                                        <option <?= $data->bidang_usaha == 'Elektronik' ? 'selected' : '' ?> value="Elektronik">Elektronik</option>
                                        <option <?= $data->bidang_usaha == 'Jasa Lainnya' ? 'selected' : '' ?> value="Jasa Lainnya">Jasa Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat / Lokasi</label>
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat / Lokasi"><?= $data->alamat ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="phone" class="form-control" id="telepon" name="telepon" value="<?= $data->telepon ?>" placeholder="Nomor Telepon">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= $data->email ?>" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Kategori Produk</label>
                                    <select class="form-control" id="kategori_produk" name="kategori_produk" placeholder="Kategori Produk">
                                        <option disabled value="">- Pilih Kategori Produk -</option>
                                        <option <?= $data->kategori_produk == 'My Ihram' ? '' : '' ?> value="My Ihram">My Ihram</option>
                                        <option <?= $data->kategori_produk == 'My Safar' ? '' : '' ?> value="My Safar">My Safar</option>
                                        <option <?= $data->kategori_produk == 'My Talim' ? '' : '' ?> value="My Talim">My Talim</option>
                                        <option <?= $data->kategori_produk == 'My Hajat' ? '' : '' ?> value="My Hajat">My Hajat</option>
                                        <option <?= $data->kategori_produk == 'My Faedah' ? '' : '' ?> value="My Faedah">My Faedah</option>
                                        <option <?= $data->kategori_produk == 'My CarS' ? '' : '' ?> value="My CarS">My CarS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="step">
                                <h3 class="main_question"><strong>2/4</strong>Form Inputan Partner</h3>
                                <div class="form-group">
                                    <label>Kelurahan</label>
                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $data->kelurahan ?>" placeholder="kelurahan">
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $data->kecamatan ?>" placeholder="Kecamatan">
                                </div>
                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input type="phone" class="form-control" id="kode_pos" name="kode_pos" value="<?= $data->kode_pos ?>" placeholder="Kode Pos">
                                </div>
                                <div class="form-group">
                                    <label>Nama Pemilik</label>
                                    <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" value="<?= $data->nama_pemilik ?>" placeholder="Nama Pemilik">
                                </div>
                                <div class="form-group">
                                    <label>Hobi / Interest</label>
                                    <input type="text" class="form-control" id="hobi" name="hobi" value="<?= $data->hobi ?>" placeholder="Hobi / Interest">
                                </div>
                                <div class="form-group">
                                    <label>Bentuk Usaha</label>
                                    <select class="form-control" id="bentuk_usaha" name="bentuk_usaha" placeholder="Bentuk Usaha">
                                        <option selected disabled value="">- Pilih bentuk Usaha -</option>
                                        <option <?= $data->bentuk_usaha == 'Perorangan' ? 'selected' : '' ?> value="Perorangan">Perorangan</option>
                                        <option <?= $data->bentuk_usaha == 'PD' ? 'selected' : '' ?> value="PD">PD</option>
                                        <option <?= $data->bentuk_usaha == 'CV' ? 'selected' : '' ?> value="CV">CV</option>
                                        <option <?= $data->bentuk_usaha == 'PT' ? 'selected' : '' ?> value="PT">PT</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jumalah Karyawan</label>
                                    <input type="number" class="form-control" id="jumlah_karyawan" name="jumlah_karyawan" value="<?= $data->jumlah_karyawan ?>" placeholder="Jumalah Karyawan">
                                </div>
                                <div class="form-group">
                                    <label>Tahun Berdiri</label>
                                    <input type="date" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="<?= $data->tahun_berdiri ?>" placeholder="Tahun Berdiri">
                                </div>
                                <div class="form-group">
                                    <label>Barang Yang Dijual</label>
                                    <input type="text" class="form-control" id="barang_jual" name="barang_jual" value="<?= $data->barang_jual ?>" placeholder="Barang Yang Dijual">
                                </div>
                                <div class="form-group">
                                    <label>Sosial Media / Website</label>
                                    <input type="text" class="form-control" id="sosial_media" name="sosial_media" value="<?= $data->sosial_media ?>" placeholder="Sosial Media">
                                </div>
                                <div class="form-group">
                                    <label>Status Tempat Usaha</label>
                                    <select class="form-control" id="status_tempat_usaha" name="status_tempat_usaha" placeholder="Status Tempat Usaha">
                                        <option selected disabled value="">- Pilih Status Tempat usaha -</option>
                                        <option <?= $data->status_tempat_usaha == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                        <option <?= $data->status_tempat_usaha == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                        <option <?= $data->status_tempat_usaha == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Pembayaran</label>
                                    <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" placeholder="Jenis Pembayaran">
                                        <option selected disabled value="">- Pilih Jenis Pembayaran -</option>
                                        <option <?= $data->jenis_pembayaran == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                        <option <?= $data->jenis_pembayaran == 'Kredit Konvensional' ? 'selected' : '' ?> value="Kredit Konvensional">Kredit Konvensional</option>
                                        <option <?= $data->jenis_pembayaran == 'Kredit Syariah' ? 'selected' : '' ?> value="Kredit Syariah">Kredit Syariah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Omset Perbulan</label>
                                    <input type="phone" class="form-control" id="omset" name="omset" value="<?= $data->omset ?>" laceholder="Omset Perbulan">
                                </div>
                            </div>

                            <div class="step">
                                <h3 class="main_question"><strong>3/4</strong>Form Inputan Partner</h3>
                                <div class="form-group">
                                    <label>Jumlah Cabang</label>
                                    <input type="number" class="form-control" id="jumlah_cabang" name="jumlah_cabang" value="<?= $data->jumlah_cabang ?>" laceholder="Jumlah Cabang">
                                </div>
                                <div class="form-group">
                                    <label>Pernah Melakukan Promosi</label>
                                    <div class="form-check">
                                        <input class="form-check-input required" type="radio" name="pernah_promosi" id="pernah_promosi" <?= $data->pernah_promosi == 'Pernah' ? 'selected' : '' ?> value="Pernah">
                                        <label class="form-check-label">
                                            Pernah
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input required" type="radio" name="pernah_promosi" id="pernah_promosi" <?= $data->pernah_promosi == 'Tidak Pernah' ? 'selected' : '' ?> value="Tidak Pernah">
                                        <label class="form-check-label">
                                            Tidak Pernah
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Apakah Puanya Pinjaman?</label>
                                    <div class="form-check">
                                        <input class="form-check-input required" type="radio" name="punya_pinjaman" id="punya_pinjaman" <?= $data->punya_pinjaman == 'Ya' ? 'selected' : '' ?> value="Ya">
                                        <label class="form-check-label">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input required" type="radio" name="punya_pinjaman" id="punya_pinjaman" <?= $data->punya_pinjaman == 'Tidak' ? 'selected' : '' ?> value="Tidak">
                                        <label class="form-check-label">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>On Going Project</label>
                                    <div class="form-check">
                                        <input class="form-check-input required" type="radio" name="on_going_project" id="on_going_project" <?= $data->on_going_project == 'Ada' ? 'selected' : '' ?> value="Ada">
                                        <label class="form-check-label">
                                            Ada
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input required" type="radio" name="on_going_project" id="on_going_project" <?= $data->on_going_project == 'Tidak Ada' ? 'selected' : '' ?> value="Tidak Ada">
                                        <label class="form-check-label">
                                            Tidak Ada
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Punya Jumlah Plafond</label>
                                    <div class="form-check">
                                        <input class="form-check-input required" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" <?= $data->punya_jumlah_plafond == 'Ya' ? 'selected' : '' ?> value="Ya">
                                        <label class="form-check-label">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input required" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" <?= $data->punya_jumlah_plafond == 'Tidak' ? 'selected' : '' ?> value="Tidak">
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
                                    <textarea class="form-control" id="keterangan_tambahan" name="keterangan_tambahan" value="<?= $data->keterangan_tambahan ?>" placeholder="Keterangan Tambahan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Rekening Bank</label>
                                    <input type="number" class="form-control" id="rekening_bank" name="rekening_bank" value="<?= $data->rekening_bank ?>" placeholder="Rekening Bank">
                                </div>
                                <div class="form-group">
                                    <label>Cabang Bank</label>
                                    <input type="text" class="form-control" id="cabang_bank" name="cabang_bank" value="<?= $data->cabang_bank ?>" placeholder="Cabang bank">
                                </div>
                                <div class="form-group">
                                    <label>Nama Bank</label>
                                    <input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?= $data->nama_bank ?>" placeholder="Nama Bank">
                                </div>
                                <div class="form-group">
                                    <label>Atas Nama</label>
                                    <input type="text" class="form-control" id="atas_nama" name="atas_nama" value="<?= $data->atas_nama ?>" placeholder="Atas Nama">
                                </div>
                                <!--muncul jika Kategori produk My ihram dan My safar-->
                                <div id="disable" class="form-group">
                                    <label>Tahun Berakhir Izin Travel</label>
                                    <input type="date" class="form-control" id="akhir_izin" name="akhir_izin" value="<?= $data->akhir_izin ?>" placeholder="Tahun Berakhir Izin Travel">
                                </div>
                                <!--muncul jika Kategori produk My ihram dan My safar-->
                            </div>
                            <!-- /step-->

                            <div class="submit step">
                                <h3 class="main_question"><strong>4/4</strong>Form Inputan Partner</h3>
                                <div class="form-group">
                                    <label>KTP / Paspor</label>
                                    <input type="file" class="form-control" id="ktp" name="ktp" placeholder="KTP / Paspor">
                                </div>
                                <div class="form-group">
                                    <label>NPWP</label>
                                    <input type="file" class="form-control" id="npwp" name="npwp" placeholder="NPWP">
                                </div>
                                <div class="form-group">
                                    <label>Buku tabungan Perusahaan</label>
                                    <input type="file" class="form-control" id="buku_tabungan_perusahaan" name="buku_tabungan_perusahaan" placeholder="Buku tabungan Perusahaan">
                                </div>
                                <div class="form-group">
                                    <label>SIUP / TDP</label>
                                    <input type="file" class="form-control" id="siup" name="siup" placeholder="SIUP">
                                </div>
                                <div class="form-group">
                                    <label>Logo Perusahaan</label>
                                    <input type="file" class="form-control" id="logo_perusahaan" name="logo_perusahaan" placeholder="Logo Perusahaan">
                                </div>
                                <div class="form-group">
                                    <label>Foto Usaha luar / Dalam</label>
                                    <input type="file" class="form-control" id="foto_usaha" name="foto_usaha" placeholder="Foto Usaha">
                                </div>

                            </div>
                            <!-- /step-->
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="submit" class="btn">Save</button>


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