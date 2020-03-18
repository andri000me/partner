<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Rekrut Partner</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Partnership</a></li>
                <li class="breadcrumb-item active">Rekrut Partner</li>
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
                    <form action="<?= base_url('Partner/update') ?>" method="post" enctype="multipart/form-data" class=" text-size">
                        <input id="website" name="website" type="disable" value="">
                        <!-- Leave for security protection, read docs for details -->

                        <!-- ID Partner -->
                        <input type="hidden" name="id_partner" id="id_partner" value="<?= $data->id_partner ?>">
                        <!-- ID Partner Mapping -->
                        <input type="hidden" name="id_mapping" id="id_mapping" value="<?= $data->id_mapping ?>">
                        <!-- ID User -->
                        <input type="hidden" name="id_user" id="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                        <!-- ID Cabang -->
                        <input type="hidden" name="id_branch" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">

                        <div id="middle-wizard">
                            <div class="step text-size">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="ml-3">
                                            <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                            <p class="text-muted text-size">Pilih data yang sudah anda mapping pada pilihan yang akan muncul dilayar, kemudia isi semua kolom pertanyaan untuk melanjutkan ke halaman selanjutnya.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ml-3 mr-3">
                                            <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                    <label>Nama Usaha</label>
                                                    <div class="input-group">
                                                        <input type="search" class="form-control text-size" name="nama_usaha" id="nama_usaha" value="<?= $data->nama_usaha ?>" required placeholder="CV Aria Santika" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-danger text-size" type="button" id="reset">Hapus</button>
                                                            <button class="btn btn-primary text-size" type="button" id="button-addon2" data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>E-Mail</label>
                                                        <input type="email" class="form-control text-size" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" required placeholder="Aisha@bfisyariah.id" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Nomor Telepon / WhatsApp</label>
                                                        <input type="text" class="form-control placement text-size number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0811977500" maxlength="15" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Kategori Produk</label>
                                                        <select class="form-control text-size" name="kategori_produk" id="kategori_produk" required>
                                                            <option selected disabled value="">Pilih Kategori Produk</option>
                                                            <option <?= $data->kategori_produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                                            <option <?= $data->kategori_produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                                            <option <?= $data->kategori_produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                                            <option <?= $data->kategori_produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                                            <option <?= $data->kategori_produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                                            <option <?= $data->kategori_produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Bidang Usaha</label>
                                                        <input type="text" class="form-control text-size" name="bidang_usaha" id="bidang_usaha" value="<?= $data->bidang_usaha ?>" required placeholder="Garmen / Percetakan / Lainnya" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Bentuk Usaha</label>
                                                        <select class="form-control text-size" name="bentuk_usaha" id="bentuk_usaha" required placeholder="Bentuk Usaha">
                                                            <option selected value="">Pilih Bentuk Usaha</option>
                                                            <option <?= $data->bentuk_usaha == 'Perorangan' ? 'selected' : '' ?> value="Perorangan">Perorangan</option>
                                                            <option <?= $data->bentuk_usaha == 'PD' ? 'selected' : '' ?> value="PD">PD</option>
                                                            <option <?= $data->bentuk_usaha == 'CV' ? 'selected' : '' ?> value="CV">CV</option>
                                                            <option <?= $data->bentuk_usaha == 'PT' ? 'selected' : '' ?> value="PT">PT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Alamat / Lokasi</label>
                                                    <input type="phone" class="form-control text-size" name="alamat" id="alamat" value="<?= $data->alamat ?>" required placeholder="Jalan Perjalanan Panjang No.22" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Kelurahan</label>
                                                    <input type="text" class="form-control text-size" name="kelurahan" id="kelurahan" value="<?= $data->kelurahan ?>" required placeholder="Lengkong Gudang" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Kecamatan</label>
                                                    <input type="text" class="form-control text-size" name="kecamatan" id="kecamatan" value="<?= $data->kecamatan ?>" required placeholder="Serpong utara" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Kode Pos</label>
                                                    <input type="text" class="form-control placement text-size number-only" name="kode_pos" id="kode_pos" value="<?= $data->kode_pos ?>" required placeholder="16810" minlength="5" maxlength="6" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Provinsi</label>
                                                    <input type="text" class="form-control text-size" name="provinsi" id="provinsi" value="<?= $data->provinsi ?>" required placeholder="Kalimantan Tengah" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Status Tempat Usaha</label>
                                                    <select class="form-control text-size" name="status_tempat_usaha" id="status_tempat_usaha" required>
                                                        <option selected disabled value="">Pilih Status Tempat usaha</option>
                                                        <option <?= $data->status_tempat_usaha == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                                        <option <?= $data->status_tempat_usaha == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                                        <option <?= $data->status_tempat_usaha == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Tahun Berdiri</label>
                                                    <input type="text" class="form-control placement text-size number-only" name="tahun_berdiri" id="tahun_berdiri" value="<?= $data->tahun_berdiri ?>" required placeholder="2016" minlength="4" maxlength="4">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Jumalah Karyawan</label>
                                                    <input type="text" class="form-control text-size number-only" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $data->jumlah_karyawan ?>" required placeholder="25">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /step-->
                            <div class="step text-size">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="ml-3">
                                            <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                            <p class="text-muted text-size">Semua data dibutuhkan untuk keperluan analisa dan pengembangan strategi produk Syariah, hanya selangkah lagi proses ini selesai :)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="">
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Barang Yang Dijual</label>
                                                        <input type="text" class="form-control text-size" name="barang_jual" id="barang_jual" name="barang_jual" value="<?= $data->barang_jual ?>" required placeholder="Contoh : Bahan Bangunan, Paket Pernikahan, Lainnya">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Sosial Media / Website</label>
                                                        <input type="text" class="form-control text-size" name="sosial_media" id="sosial_media" value="<?= $data->sosial_media ?>" required placeholder="https://www.instagram.com/bfisyariah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Apa Saja Jenis Pembayaran Yang Diterima</label>
                                                        <select class="form-control text-size" name="jenis_pembayaran" id="jenis_pembayaran" required placeholder="Jenis Pembayaran">
                                                            <option selected disabled value="">Pilih Jenis Pembayaran</option>
                                                            <option <?= $data->jenis_pembayaran == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                                            <option <?= $data->jenis_pembayaran == 'Kredit Konvensional' ? 'selected' : '' ?> value="Kredit Konvensional">Kredit Konvensional</option>
                                                            <option <?= $data->jenis_pembayaran == 'Kredit Syariah' ? 'selected' : '' ?> value="Kredit Syariah">Kredit Syariah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="ml-3 mr-3">
                                                        <label>Omset Perbulan</label>
                                                        <div class="input-group flex-nowrap">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control text-size number-only" name="omset" id="omset" value="<?= $data->omset ?>" data-type="currency" required placeholder="3,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Jumlah Cabang</label>
                                                        <input type="text" class="form-control text-size number-only" name="jumlah_cabang" id="jumlah_cabang" value="<?= $data->jumlah_cabang ?>" required placeholder="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Rekening Bank</label>
                                                        <input type="text" class="form-control placement text-size number-only" id="rekening_bank" name="rekening_bank" value="<?= $data->rekening_bank ?>" required placeholder="04686587658745" minlength="10" maxlength="16">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Nama Bank</label>
                                                        <input type="text" class="form-control text-size" id="nama_bank" name="nama_bank" value="<?= $data->nama_bank ?>" required placeholder="Bank Mandiri">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Cabang Bank</label>
                                                        <input type="text" class="form-control text-size" id="cabang_bank" name="cabang_bank" value="<?= $data->cabang_bank ?>" required placeholder="Cabang Karawaci">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Atas Nama</label>
                                                        <input type="text" class="form-control text-size" id="atas_nama" name="atas_nama" value="<?= $data->atas_nama ?>" required placeholder="Anton Hoed">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Pernah Melakukan Promosi?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" <?= $data->pernah_promosi == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                            <label class="form-check-label">
                                                                Ya
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" <?= $data->pernah_promosi == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                            <label class="form-check-label">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group ml-3 mr-3">
                                                        <label>Ada Project Yang Sedang Berjalan?</label><br>
                                                        <div class="form-check form-check-inline mt-2">
                                                            <input class="form-check-input" type="radio" name="on_going_project" id="on_going_project" <?= $data->on_going_project == 'Ada' ? 'checked' : '' ?> required value="Ada">
                                                            <label class="form-check-label">
                                                                Ada
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="on_going_project" id="on_going_project" <?= $data->on_going_project == 'Tidak Ada' ? 'checked' : '' ?> required value="Tidak Ada">
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
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Nama Pemilik</label>
                                                    <input type="text" class="form-control text-size" name="nama_pemilik" id="nama_pemilik" value="<?= $data->nama_pemilik ?>" required placeholder="Khadaffi Antashari">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Hobi / Interest</label>
                                                    <input type="text" class="form-control text-size" name="hobi" id="hobi" value="<?= $data->hobi ?>" placeholder="Memancing">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Apakah Punya Pinjaman?</label><br>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" <?= $data->punya_pinjaman == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                        <label class="form-check-label text-size">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" <?= $data->punya_pinjaman == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                        <label class="form-check-label text-size">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Ada Plafond Dari Instansi keuangan?</label><br>
                                                    <div class="form-check  form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" <?= $data->punya_jumlah_plafond == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                        <label class="form-check-label text-size">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check  form-check-inline">
                                                        <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" <?= $data->punya_jumlah_plafond == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                        <label class="form-check-label text-size">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Apakah Memiliki Giro / Cek?</label><br>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input" type="radio" name="punya_giro_cek" id="punya_giro_cek" <?= $data->punya_giro_cek == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                        <label class="form-check-label">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="punya_giro_cek" id="punya_giro_cek" <?= $data->punya_giro_cek == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                        <label class="form-check-label">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div id="disable" class="form-group ml-3 mr-3">
                                                    <label>Tahun Berakhir Izin Usaha</label>
                                                    <input type="text" class="form-control placement text-size number-only" name="akhir_izin" id="akhir_izin" value="<?= $data->akhir_izin ?>" placeholder="2016" minlength="4" maxlength="4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Catatan</label>
                                                    <textarea class="form-control text-size" name="keterangan_tambahan" id="keterangan_tambahan" value="<?= $data->keterangan_tambahan ?>" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:107px;"><?= $data->keterangan_tambahan ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step-->

                            <div class="submit step text-size">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="ml-3">
                                            <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                            <p class="text-muted">Alhamdulillah, sudah pada bagian terakhir dari pendaftaran partner ini. Pastikan semua data yang dikirim benar dan valid .<br>Silahkan isi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>KTP</label>
                                            <input type="file" name="ktp" class="filestyle" data-buttonname="btn-secondary" <?= $data->ktp ? '' : 'required' ?>>
                                            <?php if ($data->ktp) { ?>
                                                <div class="img-fluid mt-1">
                                                    <a class="image-popup-vertical-fit" href="<?= base_url('uploads/partners/' .   $data->ktp) ?>" title="Foto Profile.">
                                                        <img class="d-flex align-self-start rounded mr-3 img-fluid" alt="" src="<?= base_url('uploads/partners/' .   $data->ktp) ?>" style="width: 150px; height: 150px;">
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>NPWP</label>
                                            <input type="file" name="npwp" class="filestyle" data-buttonname="btn-secondary" <?= $data->npwp ? '' : 'required' ?>>
                                            <?php if ($data->npwp) { ?>
                                                <div class="img-fluid mt-1">
                                                    <a class="image-popup-vertical-fit" href="<?= base_url('uploads/partners/' .   $data->npwp) ?>" title="Foto Profile.">
                                                        <img class="d-flex align-self-start rounded mr-3 img-fluid" alt="" src="<?= base_url('uploads/partners/' .   $data->npwp) ?>" style="width: 150px; height: 150px;">
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>Buku Tabungan</label>
                                            <input type="file" name="buku_tabungan_perusahaan" class="filestyle" data-buttonname="btn-secondary" <?= $data->buku_tabungan_perusahaan ? '' : 'required' ?>>
                                            <?php if ($data->buku_tabungan_perusahaan) { ?>
                                                <div class="img-fluid mt-1">
                                                    <a class="image-popup-vertical-fit" href="<?= base_url('uploads/partners/' .   $data->buku_tabungan_perusahaan) ?>" title="Foto Profile.">
                                                        <img class="d-flex align-self-start rounded mr-3 img-fluid" alt="" src="<?= base_url('uploads/partners/' .   $data->buku_tabungan_perusahaan) ?>" style="width: 150px; height: 150px;">
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>SIUP / TDP</label>
                                            <input type="file" name="siup" class="filestyle" data-buttonname="btn-secondary" <?= $data->siup ? '' : 'required' ?>>
                                            <?php if ($data->siup) { ?>
                                                <div class="img-fluid mt-1">
                                                    <a class="image-popup-vertical-fit" href="<?= base_url('uploads/partners/' .   $data->siup) ?>" title="Foto Profile.">
                                                        <img class="d-flex align-self-start rounded mr-3 img-fluid" alt="" src="<?= base_url('uploads/partners/' .   $data->siup) ?>" style="width: 150px; height: 150px;">
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>Logo Perusahaan</label>
                                            <input type="file" name="logo_perusahaan" class="filestyle" data-buttonname="btn-secondary" <?= $data->logo_perusahaan ? '' : 'required' ?>>
                                            <?php if ($data->logo_perusahaan) { ?>
                                                <div class="img-fluid mt-1">
                                                    <a class="image-popup-vertical-fit" href="<?= base_url('uploads/partners/' .   $data->logo_perusahaan) ?>" title="Foto Profile.">
                                                        <img class="d-flex align-self-start rounded mr-3 img-fluid" alt="" src="<?= base_url('uploads/partners/' .   $data->logo_perusahaan) ?>" style="width: 150px; height: 150px;">
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group text-size ml-3 mr-3">
                                            <label>Foto usaha</label>
                                            <input type="file" name="foto_usaha" class="filestyle" data-buttonname="btn-secondary" <?= ($data->foto_usaha || $data->foto_usaha_mapping) ? '' : 'required' ?>>
                                            <?php if ($data->foto_usaha_mapping) { ?>
                                                <div class="img-fluid mt-1">
                                                    <a class="image-popup-vertical-fit" href="<?= base_url('uploads/partners/' .   $data->foto_usaha_mapping) ?>" title="Foto Profile.">
                                                        <img class="d-flex align-self-start rounded mr-3 img-fluid" alt="" src="<?= base_url('uploads/partners/' .   $data->foto_usaha_mapping) ?>" style="width: 150px; height: 150px;">
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step-->
                        </div>
                        <!-- /middle-wizard -->
                        <div class="form-group mb-0 float-right mt-3 mr-3">
                            <button class="btn btn-danger waves-effect waves-light text-size" id="draft" name="draft" class="btn" type="submit">Draft</button>
                            <button class="btn btn-secondary waves-effect waves-light backward text-size ml-1" type="button" name="backward">Kembali</button>
                            <button class="btn btn-primary waves-effect waves-light forward text-size ml-1" type="button" name="forward">Selanjutnya</button>
                            <button class="btn btn-primary waves-effect waves-light submit text-size ml-1" type="submit" name="process" data-toggle="modal" data-target="#modalBerhasil">Simpan</button>
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
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" style="height:700px;">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Partner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                <div class="text-size">Action</div>
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
                                    <center><a href="#" id="search" class="btn btn-primary pilih" data-mapping="<?= $data->mapping_id ?>" data-usaha="<?= $data->nama_usaha ?>" data-produk="<?= $data->kategori_produk ?>" data-telepon="<?= $data->telepon ?>" data-email="<?= $data->email ?>" data-alamat="<?= $data->alamat ?>" data-bidang="<?= $data->bidang_usaha ?>" data-bentuk="<?= $data->bentuk_usaha ?>">Pilih</a></center>
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

<!-- Modal -->
<!-- <div class="modal fade" id="modalBerhasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalCenterTitle">Pengajuan Kerjasama Berhasil</h5>
            </div>
            <div class="modal-body text-size">
                Terimakasih telah menyelesaikan tugas perjanjian kerjasama dengan partner potensial di daerah anda.
                Tim HO akan memverifikasi data anda, dan informasinya akan diberikan melalui menu <a href="#" style="color: blue;">motification</a> di website ini.
            </div>
            <div class="modal-footer">
                <a href="<?= base_url('partner') ?>"><button class="btn btn-primary text-size">OK</button></a>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal -->
<script>
    $("table").on('click', '.pilih', function() {

        var id_mapping = $(this).data('mapping');
        var nama_usaha = $(this).data('usaha');
        var kategori_produk = $(this).data('produk');
        var telepon = $(this).data('telepon');
        var bidang_usaha = $(this).data('bidang');
        var bentuk_usaha = $(this).data('bentuk');
        var email = $(this).data('email');
        var alamat = $(this).data('alamat');

        $('#id_mapping').val(id_mapping);
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
    $(document).ready(function() {
        $('#disable').hide();
        akhir_izin();
    })

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
    $('#reset').click(function() {
        $('#id_mapping, #nama_usaha, #bidang_usaha, #bentuk_usaha, #alamat, #telepon, #email, #kategori_produk, #catatan').val("");
        $('#reset').hide();
        $('#nama_usaha').removeAttr('readonly');
    })
</script>
<!-- script -->