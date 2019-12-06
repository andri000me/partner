<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Partnership</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Partnership</li>
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
                        <form action="<?= base_url('Partner/update') ?>" method="post">
                            <input id="website" name="website" type="disable" value="">
                            <!-- Leave for security protection, read docs for details -->

                            <!-- ID Partner Mapping -->
                            <input type="hidden" name="id_mapping" value="<?= $partner->id_mapping ?>" id="id_mapping">
                            <!-- ID Partner -->
                            <input type="hidden" name="id_partner" value="<?= $partner->id_partner ?>" id="id_partner">
                            <!-- ID User -->
                            <input type="hidden" name="id_user" value="<?= $partner->id_user ?>" id="id_user">
                            <!-- ID Cabang -->
                            <input type="hidden" name="id_branch" value="<?= $partner->id_branch ?>" id="id_branch">

                            <div id="middle-wizard">
                                <div class="step">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                            <p class="text-muted text-size">Pilih data yang sudah anda mapping pada pilihan yang akan muncul dilayar, kemudia isi semua kolom pertanyaan untuk melanjutkan ke halaman selanjutnya.</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label class="ml-3">Nama Usaha</label>
                                            <div class="input-group mb-3 ml-3">
                                                <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" value="<?= $partner->nama_usaha ?>" required placeholder="CV Aria Santika" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <div class="input-group-append mr-4">
                                                    <button class="btn btn-primary" type="button" id="button-addon2" data-toggle="modal" data-target=".bd-example-modal-xl"><span class="ion-ios7-search-strong"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Alamat / Lokasi</label>
                                                <input type="phone" class="form-control" name="alamat" id="alamat" required value="<?= $partner->alamat ?>" placeholder="Jalan Perjalanan Panjang No.22" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>E-Mail</label>
                                                <input type="email" class="form-control" name="email" id="email" parsley-type="email" required value="<?= $partner->email ?>" placeholder="Aisha@bfisyariah.id" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Kelurahan</label>
                                                <input type="text" class="form-control" name="kelurahan" id="kelurahan" required value="<?= $partner->kelurahan ?>" placeholder="Lengkong Gudang" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Kecamatan</label>
                                                <input type="text" class="form-control" name="kecamatan" id="kecamatan" required value="<?= $partner->kecamatan ?>" placeholder="Serpong utara" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Nomor Telepon / WhatsApp</label>
                                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" value="<?= $partner->telepon ?>" required placeholder="EG 0811977500" maxlength="15" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Kode Pos</label>
                                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="kode_pos" id="kode_pos" required value="<?= $partner->kode_pos ?>" placeholder="125487" maxlength="6" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Provinsi</label>
                                                <input type="text" class="form-control" name="provinsi" id="provinsi" required value="<?= $partner->provinsi ?>" placeholder="Kalimantan Tengah" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Kategori Produk</label>
                                                <select class="form-control" name="kategori_produk" id="kategori_produk" required>
                                                    <option selected disabled value="">Pilih Kategori Produk</option>
                                                    <option <?= $partner->kategori_produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                                    <option <?= $partner->kategori_produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                                    <option <?= $partner->kategori_produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                                    <option <?= $partner->kategori_produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                                    <option <?= $partner->kategori_produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                                    <option <?= $partner->kategori_produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Status Tempat Usaha</label>
                                                <select class="form-control" name="status_tempat_usaha" id="status_tempat_usaha" required>
                                                    <option selected disabled value="">Pilih Status Tempat usaha</option>
                                                    <option <?= $partner->status_tempat_usaha == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                                    <option <?= $partner->status_tempat_usaha == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                                    <option <?= $partner->status_tempat_usaha == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Bidang Usaha</label>
                                                <input type="text" class="form-control" name="bidang_usaha" id="bidang_usaha" required value="<?= $partner->bidang_usaha ?>" placeholder="Garmen / Percetakan / Lainnya" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Tahun Berdiri</label>
                                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="tahun_berdiri" id="tahun_berdiri" value="<?= $partner->tahun_berdiri ?>" required placeholder="2016" maxlength="4">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Jumalah Karyawan</label>
                                                <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $partner->jumlah_karyawan ?>" required placeholder="25">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Bentuk Usaha</label>
                                                <select class="form-control" name="bentuk_usaha" id="" required placeholder="Bentuk Usaha">
                                                    <option selected value="">Pilih Bentuk Usaha</option>
                                                    <option <?= $partner->bentuk_usaha == 'Perorangan' ? 'selected' : '' ?> value="Perorangan">Perorangan</option>
                                                    <option <?= $partner->bentuk_usaha == 'PD' ? 'selected' : '' ?> value="PD">PD</option>
                                                    <option <?= $partner->bentuk_usaha == 'CV' ? 'selected' : '' ?> value="CV">CV</option>
                                                    <option <?= $partner->bentuk_usaha == 'PT' ? 'selected' : '' ?> value="PT">PT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /step-->
                                <div class="step">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                            <p class="text-muted text-size">Semua data dibutuhkan untuk keperluan analisa dan pengembangan strategi produk Syariah, hanya selangkah lagi proses ini selesai :)</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Barang Yang Dijual</label>
                                                <input type="text" class="form-control" name="barang_jual" id="barang_jual" name="barang_jual" required value="<?= $partner->barang_jual ?>" placeholder="Contoh : Bahan Bangunan, Paket Pernikahan, Lainnya">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Nama Pemilik</label>
                                                <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" required value="<?= $partner->nama_pemilik ?>" placeholder="Khadaffi Antashari">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Sosial Media / Website</label>
                                                <input type="text" class="form-control" name="sosial_media" id="sosial_media" required value="<?= $partner->sosial_media ?>" placeholder="https://www.instagram.com/bfisyariah">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Hobi / Interest</label>
                                                <input type="text" class="form-control" name="hobi" id="hobi" placeholder="Memancing" value="<?= $partner->hobi ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Apa Saja Jenis Pembayaran Yang Diterima</label>
                                                <select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran" required placeholder="Jenis Pembayaran">
                                                    <option selected disabled value="">Pilih Jenis Pembayaran</option>
                                                    <option <?= $partner->jenis_pembayaran == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                                    <option <?= $partner->jenis_pembayaran == 'Kredit Konvensional' ? 'selected' : '' ?> value="Kredit Konvensional">Kredit Konvensional</option>
                                                    <option <?= $partner->jenis_pembayaran == 'Kredit Syariah' ? 'selected' : '' ?> value="Kredit Syariah">Kredit Syariah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Apakah Puanya Pinjaman?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" <?= $partner->punya_pinjaman == 'Ya' ? 'checked' : '' ?> value="Ya" required>
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" <?= $partner->punya_pinjaman == 'Tidak' ? 'checked' : '' ?> value="Tidak" required>
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Punya Jumlah Plafond?</label><br>
                                                <div class="form-check  form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" <?= $partner->punya_jumlah_plafond == 'Ya' ? 'checked' : '' ?> value="Ya" required>
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check  form-check-inline">
                                                    <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" <?= $partner->punya_jumlah_plafond == 'Tidak' ? 'checked' : '' ?> value="Tidak" required>
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Omset Perbulan</label>
                                                <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="omset" id="omset" value="<?= $partner->omset ?>" required placeholder="50,000,000">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Jumlah Cabang</label>
                                                <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="jumlah_cabang" id="jumlah_cabang" value="<?= $partner->jumlah_cabang ?>" required placeholder="5">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Apakah Memiliki Giro / Cek?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="punya_giro_cek" id="punya_giro_cek" <?= $partner->punya_giro_cek == 'Giro' ? 'checked' : '' ?> required value="Giro">
                                                    <label class="form-check-label">
                                                        Giro
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="punya_giro_cek" id="punya_giro_cek" <?= $partner->punya_giro_cek == 'Cek' ? 'checked' : '' ?> required value="Cek">
                                                    <label class="form-check-label">
                                                        Cek
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div id="disable" class="form-group ml-3 mr-3">
                                                <label>Tahun Berakhir Izin Usaha</label>
                                                <input type="text" class="form-control  pelacement" onkeypress="return hanyaAngka(event);" name="akhir_izin" id="akhir_izin" value="<?= $partner->akhir_izin ?>" placeholder="2016" maxlength="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3 mt-1">
                                                <label>Pernah Melakukan Promosi?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" <?= $partner->pernah_promosi == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                    <label class="form-check-label">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline ml-3 mr-3">
                                                    <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" <?= $partner->pernah_promosi == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                    <label class="form-check-label">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3 ml-3 mr-3">
                                                <label>Rekening Bank</label>
                                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" id="rekening_bank" name="rekening_bank" value="<?= $partner->rekening_bank ?>" required placeholder="0468 6587 6587 45" maxlength="16">
                                            </div>
                                            <div class="form-group ml-3 mr-3">
                                                <label>Cabang Bank</label>
                                                <input type="text" class="form-control" id="cabang_bank" name="cabang_bank" required value="<?= $partner->cabang_bank ?>" placeholder="Cabang Karawaci">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ml-3 mr-3 mt-1">
                                                <label>Ada Project Yang Sedang Berjalan?</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="on_going_project" id="on_going_project" <?= $partner->on_going_project == 'Ada' ? 'checked' : '' ?> required value="Ada">
                                                    <label class="form-check-label">
                                                        Ada
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline ml-3 mr-3">
                                                    <input class="form-check-input" type="radio" name="on_going_project" id="on_going_project" <?= $partner->on_going_project == 'Tidak Ada' ? 'checked' : '' ?> required value="Tidak Ada">
                                                    <label class="form-check-label">
                                                        Tidak Ada
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3 ml-3 mr-3">
                                                <label>Nama Bank</label>
                                                <input type="text" class="form-control" id="nama_bank" name="nama_bank" required value="<?= $partner->nama_bank ?>" placeholder="Bank Mandiri">
                                            </div>
                                            <div class="form-group ml-3 mr-3">
                                                <label>Atas Nama</label>
                                                <input type="text" class="form-control" id="atas_nama" name="atas_nama" required value="<?= $partner->atas_nama ?>" placeholder="Anton Hoed">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Catatan</label>
                                                <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:107px;"><?= $partner->catatan ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->

                                <div class="submit step">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                            <p class="text-muted text-size">Alhamdulillah, sudah pada bagian terakhir dari pendaftaran partner ini. Pastikan semua data yang dikirim benar dan valid .<br>Silahkan isi</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>KTP</label>
                                            <input name="ktp" type="file">
                                        </div>
                                        <div class="col-md-2">
                                            <label>NPWP</label>
                                            <input name="npwp" type="file">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Buku Tabungan</label>
                                            <input name="buku_tabungan_perusahaan" type="file">
                                        </div>
                                        <div class="col-md-2">
                                            <label>SIUP / TDP</label>
                                            <input name="siup" type="file">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Logo Perusahaan</label>
                                            <input name="logo_perusahaan" type="file">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Foto usaha</label>
                                            <input name="foto_usaha" type="file">
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div class="form-group mb-0 float-right mt-3">
                                <button class="btn btn-danger waves-effect waves-light text-size" id="draft" class="btn" type="submit" name="draft">Draft</button>
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
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Partner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Usaha</th>
                            <th>Kategori Produk</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mapping->result() as $data) { ?>
                            <tr class="clickable-row" data-id="<?= $data->id_mapping ?>" data-usaha="<?= $data->nama_usaha ?>" data-produk="<?= $data->kategori_produk ?>" data-telepon="<?= $data->telepon ?>" data-email="<?= $data->email ?>" data-alamat="<?= $data->alamat ?>" data-bidang="<?= $data->bidang_usaha ?>">
                                <td class="not-clickable">
                                    <div class="text-size"><?= $data->nama_usaha ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $data->kategori_produk ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $data->telepon ?></div>
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
<div class="modal fade" id="modalBerhasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <a href="index.html"><button class="btn btn-primary text-size">OK</button></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<script>
    $("tr.clickable-row").not("tr > td.not-clickable").css('cursor', 'pointer');
    $("table").on("click", ".not-clickable", function(e) {
        e.stopPropagation();
    });
    $("table").on('click', '.clickable-row', function() {
        $("tr.clickable-row").not("tr > td.not-clickable").css('cursor', 'pointer');

        var id_mapping = $(this).data('id');
        var nama_usaha = $(this).data('usaha');
        var kategori_produk = $(this).data('produk');
        var telepon = $(this).data('telepon');
        var bidang_usaha = $(this).data('bidang');
        var email = $(this).data('email');
        var alamat = $(this).data('alamat');

        $('#id_mapping').val(id_mapping);
        $('#nama_usaha').val(nama_usaha);
        $('#kategori_produk').val(kategori_produk);
        $('#telepon').val(telepon);
        $('#bidang_usaha').val(bidang_usaha);
        $('#email').val(email);
        $('#alamat').val(alamat);



        $('.bd-example-modal-xl').modal('hide');
    })
</script>

<script>
    $('#disable').hide();
    $('#kategori_produk').change(function() {
        if ($('#kategori_produk').val() == 'My Ihram' || $('#kategori_produk').val() == 'My Safar') {
            $('#disable').show();
            // alert($('#kategori_produk').val());
        } else {
            $('#disable').hide();
        }
    })
</script>
</script>

<!-- Menghilangkan attr required untuk save sementara -->
<script>
    $('#draft').click(function() {
        $("input, select").removeAttr('required');
    })
</script>

<script>
    /*  Wizard */
    jQuery(function($) {
        "use strict";
        $('form#wrapped').attr('action', '');
        $("#wizard_container").wizard({
            stepsWrapper: "#wrapped",
            submit: ".submit",
            beforeSelect: function(event, state) {
                if ($('input#website').val().length != 0) {
                    return false;
                }
                if (!state.isMovingForward)
                    return true;
                var inputs = $(this).wizard('state').step.find(':input');
                return !inputs.length || !!inputs.valid();
            }
        }).validate({
            errorPlacement: function(error, element) {
                if (element.is(':radio') || element.is(':checkbox')) {
                    error.insertBefore(element.next());
                } else {
                    error.insertAfter(element);
                }
            }
        });
        //  progress bar
        $("#progressbar").progressbar();
        $("#wizard_container").wizard({
            afterSelect: function(event, state) {
                $("#progressbar").progressbar("value", state.percentComplete);
                $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
            }
        });
        /* Submit loader mask */
        $('form').on('submit', function() {
            var form = $("form#wrapped");
            form.validate();
            if (form.valid()) {
                $("#loader_form").fadeIn();
            }
        });
    });
</script>


<!-- script -->