<button class="btn btn-secondary" onclick="topFunction()" id="myBtn" title="Go to top" style="right: 10px;"><i class="fas fa-angle-up"></i></button>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4><b>Form Rekrut Merchant</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('partner') ?>">Daftar Merchant</a></li>
                <li class="breadcrumb-item active">Rekrut Merchant</li>
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
                <p class="captiontext">Pilih data yang sudah anda mapping pada
                    pilihan yang akan muncul dilayar, kemudia isi semua kolom pertanyaan
                    untuk melanjutkan ke halaman selanjutnya.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20 card-margin-5">
            <div class="card-body">
                <div class="form-margin">
                    <h4 class="mt-0 mb-4 header-title"><b>Data Merchant</b></h4>
                </div>
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <div id="head-wizard">
                        <form id="partner-form" action="<?= base_url('Partner/save') ?>" method="post" enctype="multipart/form-data" class=" text-size">
                            <input id="website" name="website" type="disable" value="">
                            <input type="hidden" name="id_partner" id="id_partner" value="<?= set_value('id_partner') ?>">

                            <div id="middle-wizard">
                                <div class="step  text-size">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class=" form-margin">
                                                        <label>Nama Usaha</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text-size" name="nama_usaha" id="nama_usaha" value="<?= set_value('nama_usaha') ?>" required placeholder="CV Aria Santika" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-danger text-size" type="button" id="reset"><b>Hapus</b></button>
                                                                <button class="btn btn-primary text-size" type="button" id="button-addon2" data-toggle="modal" data-target=".bd-example-modal-xl"><b>Cari</b></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>E-Mail</label>
                                                        <input type="email" class="form-control text-size" name="email" id="email" parsley-type="email" value="<?= set_value('email') ?>" placeholder="Aisha@bfisyariah.id" />
                                                        <?= form_error("email") ?>
                                                        <div id="email-availabilty"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Nomor Telepon / WhatsApp</label>
                                                        <input type="text" class="form-control placement text-size number-only" name="telepon" id="telepon" value="<?= set_value('telepon') ?>" required placeholder="0811977500" maxlength="15" />
                                                        <?= form_error("telepon") ?>
                                                        <div id="telepon-availabilty"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Kategori Produk</label>
                                                        <select class="form-control text-size" name="kategori_produk" id="kategori_produk" required>
                                                            <option selected disabled value="">Pilih Kategori Produk
                                                            </option>
                                                            <option <?= set_value('kategori_produk') == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                                            <option <?= set_value('kategori_produk') == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                                            <option <?= set_value('kategori_produk') == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                                            <option <?= set_value('kategori_produk') == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                                            <option <?= set_value('kategori_produk') == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                                            <option <?= set_value('kategori_produk') == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Bidang Usaha</label>
                                                        <input type="text" class="form-control text-size" name="bidang_usaha" id="bidang_usaha" value="<?= set_value('bidang_usaha') ?>" required placeholder="Garmen / Percetakan / Lainnya" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Bentuk Usaha</label>
                                                        <select class="form-control text-size" name="bentuk_usaha" id="bentuk_usaha" required placeholder="Bentuk Usaha">
                                                            <option selected value="">Pilih Bentuk Usaha</option>
                                                            <option <?= set_value('bentuk_usaha') == 'Perorangan' ? 'selected' : '' ?> value="Perorangan">Perorangan</option>
                                                            <option <?= set_value('bentuk_usaha') == 'PD' ? 'selected' : '' ?> value="PD">PD</option>
                                                            <option <?= set_value('bentuk_usaha') == 'CV' ? 'selected' : '' ?> value="CV">CV</option>
                                                            <option <?= set_value('bentuk_usaha') == 'PT' ? 'selected' : '' ?> value="PT">PT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Alamat / Lokasi</label>
                                                        <input type="text" class="form-control text-size" name="alamat" id="alamat" value="<?= set_value('alamat') ?>" required placeholder="Jalan Perjalanan Panjang No.22" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Kelurahan</label>
                                                        <input type="text" class="form-control text-size" name="kelurahan" id="kelurahan" value="<?= set_value('kelurahan') ?>" required placeholder="Lengkong Gudang" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Kecamatan</label>
                                                        <input type="text" class="form-control text-size" name="kecamatan" id="kecamatan" value="<?= set_value('kecamatan') ?>" required placeholder="Serpong utara" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Kode Pos</label>
                                                        <input type="text" class="form-control placement text-size number-only" name="kode_pos" id="kode_pos" value="<?= set_value('kode_pos') ?>" required placeholder="16810" minlength="5" maxlength="6" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Provinsi</label>
                                                        <input type="text" class="form-control text-size" name="provinsi" id="provinsi" value="<?= set_value('provinsi') ?>" required placeholder="Kalimantan Tengah" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Status Tempat Usaha</label>
                                                        <select class=" form-control text-size" name="status_tempat_usaha" id="status_tempat_usaha" required>
                                                            <option selected disabled value="">Pilih Status Tempat usaha
                                                            </option>
                                                            <option <?= set_value('status_tempat_usaha') == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                                            <option <?= set_value('status_tempat_usaha') == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                                            <option <?= set_value('status_tempat_usaha') == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-left">
                                                        <label>Tahun Berdiri</label>
                                                        <input type="text" class="form-control placement text-size number-only" name="tahun_berdiri" id="tahun_berdiri" value="<?= set_value('tahun_berdiri') ?>" required placeholder="2016" minlength="4" maxlength="4">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-right">
                                                        <label>Jumlah Karyawan</label>
                                                        <input type="text" class="form-control text-size number-only" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= set_value('jumlah_karyawan') ?>" required placeholder="25">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /step-->
                                <div class="step text-size">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-margin">
                                                            <label>Barang Yang Dijual</label>
                                                            <input type="text" class="form-control text-size" name="barang_jual" id="barang_jual" name="barang_jual" value="<?= set_value('barang_jual') ?>" required placeholder="Contoh : Bahan Bangunan, Paket Pernikahan, Lainnya">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-margin">
                                                            <label>Sosial Media / Website</label>
                                                            <input type="text" class="form-control text-size" name="sosial_media" id="sosial_media" value="<?= set_value('sosial_media') ?>" placeholder="https://www.instagram.com/bfisyariah">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="form-margin">
                                                            <label class="">Apa Saja Jenis Pembayaran Yang
                                                                Diterima</label>
                                                            <div class="form-group">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="jenis_pembayaran[]" id="inlineCheckbox1" value="Tunai">
                                                                    <label class="form-check-label" for="inlineCheckbox1">Tunai</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="jenis_pembayaran[]" id="inlineCheckbox2" value="Cicilan Konvensional">
                                                                    <label class="form-check-label" for="inlineCheckbox2">Cicilan
                                                                        Konvensional</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" name="jenis_pembayaran[]" id="inlineCheckbox3" value="Cicilan Syariah">
                                                                    <label class="form-check-label" for="inlineCheckbox3">Cicilan Syariah</label>
                                                                </div>
                                                                <!-- <select class="form-control text-size" name="jenis_pembayaran" id="jenis_pembayaran" required placeholder="Jenis Pembayaran">
                                                                <option selected disabled value="">Pilih Jenis Pembayaran</option>
                                                                <option <?= set_value('jenis_pembayaran') == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                                                <option <?= set_value('jenis_pembayaran') == 'Kredit Konvensional' ? 'selected' : '' ?> value="Kredit Konvensional">Kredit Konvensional</option>
                                                                <option <?= set_value('jenis_pembayaran') == 'Kredit Syariah' ? 'selected' : '' ?> value="Kredit Syariah">Kredit Syariah</option>
                                                            </select> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-left">
                                                            <label>Omset Perbulan</label>
                                                            <input type="text" class="form-control text-size number-only" name="omset" id="omset" data-type="currency" value="<?= set_value('omset') ?>" required placeholder="Rp. 000 000 000">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-right">
                                                            <label>Jumlah Cabang</label>
                                                            <input type="text" class="form-control text-size number-only" name="jumlah_cabang" id="jumlah_cabang" value="<?= set_value('jumlah_cabang') ?>" required placeholder="5">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-left">
                                                            <label>Rekening Bank</label>
                                                            <input type="text" class="form-control placement text-size number-only" id="rekening_bank" name="rekening_bank" value="<?= set_value('rekening_bank') ?>" placeholder="04686587658745" minlength="10" maxlength="16">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-right">
                                                            <label>Nama Bank</label>
                                                            <input type="text" class="form-control text-size" id="nama_bank" name="nama_bank" value="<?= set_value('nama_bank') ?>" placeholder="Bank Mandiri">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-left">
                                                            <label>Cabang Bank</label>
                                                            <input type="text" class="form-control text-size" id="cabang_bank" name="cabang_bank" value="<?= set_value('cabang_bank') ?>" placeholder="Cabang Karawaci">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-right">
                                                            <label>Atas Nama</label>
                                                            <input type="text" class="form-control text-size" id="atas_nama" name="atas_nama" value="<?= set_value('atas_nama') ?>" placeholder="Anton Hoed">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-left">
                                                            <label>Pernah Melakukan Promosi?</label><br>
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" <?= set_value('pernah_promosi') == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                                <label class="form-check-label">
                                                                    Ya
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" <?= set_value('pernah_promosi') == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                                <label class="form-check-label">
                                                                    Tidak
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-right">
                                                            <label>Ada Project Yang Sedang Berjalan?</label><br>
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="on_going_project" id="on_going_project" <?= set_value('on_going_project') == 'Ada' ? 'checked' : '' ?> required value="Ada">
                                                                <label class="form-check-label">
                                                                    Ada
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="on_going_project" id="on_going_project" <?= set_value('on_going_project') == 'Tidak Ada' ? 'checked' : '' ?> required value="Tidak Ada">
                                                                <label class="form-check-label">
                                                                    Tidak Ada
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Nama Pemilik</label>
                                                        <input type="text" class="form-control text-size" name="nama_pemilik" id="nama_pemilik" value="<?= set_value('nama_pemilik') ?>" required placeholder="Khadaffi Antashari">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Hobi / Interest</label>
                                                        <input type="text" class="form-control text-size" name="hobi" id="hobi" value="<?= set_value('hobi') ?>" placeholder="Memancing">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group form-left">
                                                        <label>Apakah Punya Pinjaman?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" <?= set_value('punya_pinjaman') == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                            <label class="form-check-label text-size">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" <?= set_value('punya_pinjaman') == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                            <label class="form-check-label text-size">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group form-right">
                                                        <label>Ada Plafond Dari Instansi keuangan?</label><br>
                                                        <div class="form-check  form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" <?= set_value('punya_jumlah_plafond') == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                            <label class="form-check-label text-size">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check  form-check-inline">
                                                            <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" <?= set_value('punya_jumlah_plafond') == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                            <label class="form-check-label text-size">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group form-left">
                                                        <label>Apakah Sudah MOU?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input mou" type="radio" name="ttd_pks" <?= set_value('ttd_pks') == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input mou" type="radio" name="ttd_pks" <?= set_value('ttd_pks') == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group form-right">
                                                        <label>Apakah Memiliki Giro / Cek?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="punya_giro_cek" id="punya_giro_cek" <?= set_value('punya_giro_cek') == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="punya_giro_cek" id="punya_giro_cek" <?= set_value('punya_giro_cek') == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
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
                                                        <label>NPWP Penyedia Jasa</label>
                                                        <input type="text" class="form-control placement text-size number-only" id="" name="npwp_penyedia_jasa" value="<?= set_value('npwp_penyedia_jasa') ?>" placeholder="0000 0000 0000 000" minlength="15" maxlength="15">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div id="disable" class="form-group form-right">
                                                        <label>Tahun Berakhir Izin Usaha</label>
                                                        <input type="text" class="form-control placement text-size number-only" name="akhir_izin" id="akhir_izin" value="<?= set_value('akhir_izin') ?>" placeholder="2016" minlength="4" maxlength="4">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-margin">
                                                        <label>Catatan</label>
                                                        <textarea class="form-control text-size" name="keterangan_tambahan" id="keterangan_tambahan" cols="30" rows="10" value="<?= set_value('keterangan_tambahan') ?>" placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="submit step text-size">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>KTP</label>
                                                <input type="file" name="ktp" class="filestyle" data-buttonname="btn-secondary">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>NPWP</label>
                                                <input type="file" name="npwp" class="filestyle upload-form" data-buttonname="btn-secondary">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>Cover Tabungan</label>
                                                <input type="file" name="buku_tabungan_perusahaan" class="filestyle upload-form" data-buttonname="btn-secondary">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>SIUP / TDP</label>
                                                <input type="file" name="siup" class="filestyle upload-form" data-buttonname="btn-secondary">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>Logo Perusahaan</label>
                                                <input type="file" name="logo_perusahaan" class="filestyle" data-buttonname="btn-secondary">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>Foto usaha</label>
                                                <input type="file" name="foto_usaha" class="filestyle upload-form" data-buttonname="btn-secondary" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6" id="lampiran_mou">
                                            <div class="form-group text-size form-margin">
                                                <label>Lampiran MOU</label>
                                                <input type="file" id="form_mou" name="form_mou" class="filestyle upload-form" data-buttonname="btn-secondary">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-margin">
                                                <label>Data Lainnya</label><br>
                                                <input type="file" name="tambah_lampiran[]" id="upload_file1">
                                            </div>
                                            <h4 class="mt-0 header-title mb-4"><b>Tambah Data Lampiran</b></h4>
                                            <hr>
                                            <div id="moreImageUpload"></div>
                                            <div class="clear "></div>
                                            <div id="moreImageUploadLink" class="float-right mt-3">
                                                <a class="btn btn-secondary text-size mr-1" href="javascript:void(0);" id="attachMore">Tambah Form</a>
                                                <button class="btn btn-primary text-size">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 float-right form-margin mt-5">
                                    <button class="btn btn-light waves-effect waves-light text-size" id="draft" name="draft" class="btn" type="submit"><b>Draft</b></button>
                                    <button class="btn btn-secondary waves-effect waves-light backward text-size ml-1" type="button" name="backward"><b>Kembali</b></button>
                                    <button class="btn btn-primary waves-effect waves-light forward text-size ml-1" type="button" name="forward"><b>Selanjutnya</b></button>
                                    <button class="btn btn-primary waves-effect waves-light submit text-size ml-1" type="submit" name="process" data-toggle="modal" data-target="#modalBerhasil"><b>Kirim</b></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" style="height:700px;">
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Partner</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                <div class="text-size">Name Usaha</div>
                            </th>
                            <th>
                                <div class="text-size">Kategori Produk</div>
                            </th>
                            <th>
                                <div class="text-size">Telepon</div>
                            </th>
                            <th>
                                <div class="text-size"> </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mappings->result() as $data) { ?>
                            <tr>
                                <td class="not-clickable">
                                    <div class="text-size"><?= $data->nama_usaha ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $data->kategori_produk ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $data->telepon ?></div>
                                </td>
                                <td>
                                    <center><a href="#" id="search" class="btn btn-primary pilih radius" data-mapping="<?= $data->id_partner ?>" data-usaha="<?= $data->nama_usaha ?>" data-produk="<?= $data->kategori_produk ?>" data-telepon="<?= $data->telepon ?>" data-email="<?= $data->email ?>" data-alamat="<?= $data->alamat ?>" data-bidang="<?= $data->bidang_usaha ?>" data-bentuk="<?= $data->bentuk_usaha ?>"><b>Pilih</b></a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<script>
    $("table").on('click', '.pilih', function() {

        var id_partner = $(this).data('mapping');
        var nama_usaha = $(this).data('usaha');
        var kategori_produk = $(this).data('produk');
        var telepon = $(this).data('telepon');
        var bidang_usaha = $(this).data('bidang');
        var bentuk_usaha = $(this).data('bentuk');
        var email = $(this).data('email');
        var alamat = $(this).data('alamat');

        $('#id_partner').val(id_partner);
        $('#nama_usaha').val(nama_usaha);
        $('#kategori_produk').val(kategori_produk);
        $('#telepon').val(telepon);
        $('#bidang_usaha').val(bidang_usaha);
        $('#bentuk_usaha').val(bentuk_usaha);
        $('#email').val(email);
        $('#alamat').val(alamat);


        akhir_izin();

        $('.bd-example-modal-xl').modal('hide');

        $('#nama_usaha').attr('readonly', 'readonly');
        $('#reset').show()
    })
</script>

<script>
    $('#disable').hide();

    function akhir_izin() {
        if ($('#kategori_produk').val() == 'My Ihram' || $('#kategori_produk').val() == 'My Safar') {
            $('#disable').show();
            // alert($('#kategori_produk').val());
        } else {
            $('#disable').hide();
        }
    }
    $('#kategori_produk').change(function() {
        akhir_izin();
    })
</script>

<!-- Menghilangkan attr required untuk save sementara -->
<script>
    $('#draft').click(function() {
        $("input, select").removeAttr('required');
    })
</script>

<script>
    $('.travel').hide();
    $('.agent').hide();
    $('.jasa').hide();
    $('.event').hide();
    $('.modal-agent').hide();
    $('.modal-parnet').hide();
    $('.form').hide();
    $('#soa').change(function() {
        if ($('#soa').val() == 'Tour & travel') {
            $('.travel, .form, .modal-partner').show();
            $('#id_partner').attr('placeholder', 'jalan - jalan')
            $('.agent, .jasa, .event, .modal-agent').hide();
        } else if ($('#soa').val() == 'Penyedia Jasa') {
            $('.jasa, .form, .modal-partner').show();
            $('#id_partner').attr('placeholder', 'Jasa raharja')
            $('.agent, .travel, .event, .modal-agent').hide();
        } else if ($('#soa').val() == 'Agent BA') {
            $('.agent, .form, .modal-agent').show();
            $('#id_partner').attr('placeholder', 'Ibrahim')
            $('.jasa, .travel, .event, .modal-partner').hide();
        } else if ($('#soa').val() == 'Event') {
            $('.event').show();
            $('.jasa, .travel, .agent, .form').hide();
        } else {
            $('.jasa, .travel, .agent, .form, .event').hide();
        }
    })
</script>

<script>
    $('#reset').hide()
    $('#search').click(function() {
        $('#reset').show()
    })
    $('#reset').click(function() {
        $('#id_partner, #nama_usaha, #bidang_usaha, #bentuk_usaha, #alamat, #telepon, #email, #kategori_produk, #catatan')
            .val("");
        $('#reset').hide();
        $('#nama_usaha').removeAttr('readonly');
    })
</script>

<script>
    $('#lampiran_mou').hide();
    mou()

    function mou() {
        var radioValue = $("input[name='ttd_pks']:checked").val();
        if (radioValue == 'Tidak') {
            $("#lampiran_mou").hide();
            $('#form_mou').removeAttr('required', '');
        } else if (radioValue == 'Ya') {
            $("#lampiran_mou").show()
            // $('#form_mou').attr('required', 'required');
        }
    }

    $(".mou").click(function() {
        mou();
    })

    perorangan()

    function perorangan() {
        $('#bentuk_usaha').change(function() {
            if ($('#bentuk_usaha').val() == "Perorangan") {
                $('.upload-form').removeAttr('required');
            } else {
                $('.upload-form').attr('required', 'required');
            }
        })
    }

    $('#bentuk_usaha').click(function() {
        perorangan();
    })

    var required = [];
    var non_required = [];
    $('#partner-form').find('input, select, textarea').each(function() {
        if ($(this).attr('required')) {
            required.push($(this).attr('name'))
        } else {
            non_required.push($(this).attr('name'))
        }
    });
    console.log(required);
    console.log(non_required);
</script>