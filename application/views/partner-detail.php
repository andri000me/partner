<div class="row">
    <div class="col-lg-8">
        <div class="page-title-box">
            <h4 class="page-title">Partner</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Partner</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="hilang" class="loader-body">
                    <div id="loader"></div>
                    <div id="loadermobile"></div>
                </div>
                <div style="display:none;" id="myDiv" class="animate-bottom">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#partner" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Data partner</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#timeline" role="tab">
                                <span class="d-block d-sm-none"><i class="ion-ios7-checkmark-outline"></i></span>
                                <span class="d-none d-sm-block">Data Maintain</span>
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
                        <div class="tab-pane active p-3" id="partner" role="tabpanel">
                            <form class=" text-size" action="<?= base_url('Partner/update_detail') ?>" method="post">
                                <!-- ID Ticket -->
                                <input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>" id="id_ticket">
                                <!-- ID Partner -->
                                <input type="hidden" name="id_partner" id="id_partner" value="<?= $data->id_partner ?>">
                                <!-- ID Mapping -->
                                <input type="hidden" name="id_mapping" id="id_mapping" value="<?= $data->id_mapping ?>">
                                <!-- ID User -->
                                <input type="hidden" name="id_user" id="id_user" value="<?= $data->id_user ?>">
                                <!-- ID Branch -->
                                <input type="hidden" name="id_branch" id="id_branch" value="<?= $data->id_branch ?>">
                                <!-- Post Redirect halaman ke form -->
                                <input type="hidden" name="redirect" value="<?= uri_string() ?>">

                                <div class="">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Nama Usaha</label>
                                                <input type="text" class="form-control text-size" name="nama_usaha" id="nama_usaha" value="<?= $data->nama_usaha ?>" required placeholder="CV Aria Santika" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Nomor Telepon / WhatsApp</label>
                                                <input type="text" class="form-control text-size <?= form_error('telepon') ? 'is-invalid' : '' ?> placement number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0811977300" maxlength="15" />
                                                <?= form_error('telepon') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control text-size" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" placeholder="Aisha@bfisyariah.id" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group ml-3 mr-3">
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
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
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
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Bidang Usaha</label>
                                                <input type="text" class="form-control text-size" name="bidang_usaha" id="bidang_usaha" value="<?= $data->bidang_usaha ?>" required placeholder="Garmen / Percetakan / Lainnya" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ml-3 mr-3">
                                        <label>Alamat / Lokasi</label>
                                        <input type="phone" class="form-control text-size" name="alamat" id="alamat" required value="<?= $data->alamat ?>" placeholder="Jalan Perjalanan Panjang No.22" />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Kelurahan</label>
                                                <input type="text" class="form-control text-size" name="kelurahan" id="kelurahan" required value="<?= $data->kelurahan ?>" placeholder="Lengkong Gudang" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Kecamatan</label>
                                                <input type="text" class="form-control text-size" name="kecamatan" id="kecamatan" required value="<?= $data->kecamatan ?>" placeholder="Serpong utara" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Kode Pos</label>
                                                <input type="text" class="form-control text-size placement number-only" name="kode_pos" id="kode_pos" required value="<?= $data->kode_pos ?>" placeholder="16810" minlength="5" maxlength="6" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Provinsi</label>
                                                <input type="text" class="form-control text-size" name="provinsi" id="provinsi" required value="<?= $data->provinsi ?>" placeholder="Kalimantan Tengah" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
                                            <div class="form-group text-size ml-3 mr-3">
                                                <label>Tahun Berdiri</label>
                                                <input type="text" class="form-control placement number-only" name="tahun_berdiri" id="tahun_berdiri" value="<?= $data->tahun_berdiri ?>"" required placeholder=" 2016" minlength="4" maxlength="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div id="disable" class="form-group ml-3 mr-3">
                                                <label>Tahun Berakhir Izin Usaha</label>
                                                <input type="text" class="form-control placement text-size number-only" name="akhir_izin" id="akhir_izin" value="<?= $data->akhir_izin ?>" placeholder="2016" minlength="4" maxlength="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Jumlah Cabang</label>
                                                <input type="text" class="form-control text-size number-only" name="jumlah_cabang" id="jumlah_cabang" value="<?= $data->jumlah_cabang ?>" required placeholder="5">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size ml-3 mr-3">
                                                <label>Jumlah Karyawan</label>
                                                <input type="text" class="form-control number-only" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $data->jumlah_karyawan ?>"" required placeholder=" 25">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Barang Yang Dijual</label>
                                                <input type="text" class="form-control text-size" name="barang_jual" id="barang_jual" name="barang_jual" value="<?= $data->barang_jual ?>" required placeholder="Contoh : Bahan Bangunan, Paket Pernikahan, Lainnya">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Sosial Media / Website</label>
                                                <input type="text" class="form-control text-size" name="sosial_media" id="sosial_media" value="<?= $data->sosial_media ?>" required placeholder="https://www.instagram.com/bfisyariah">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Nama Pemilik</label>
                                                <input type="text" class="form-control text-size" name="nama_pemilik" id="nama_pemilik" value="<?= $data->nama_pemilik ?>" required placeholder="Khadaffi Antashari">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ml-3 mr-3">
                                                <label>Hobi / Interest</label>
                                                <input type="text" class="form-control text-size" name="hobi" id="hobi" value="<?= $data->hobi ?>" placeholder="Memancing">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
                                            <div class="ml-3 mr-3">
                                                <label>Omset Perbulan</label>
                                                <div class="input-group flex-nowrap mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control text-size number-only" name="omset" id="omset" value="<?= $data->omset ?>" data-type="currency" required placeholder="3,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                                                </div>
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
                                                <label>Atas Nama</label>
                                                <input type="text" class="form-control text-size" id="atas_nama" name="atas_nama" value="<?= $data->atas_nama ?>" required placeholder="Anton Hoed">
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
                                                <label>Nama Bank</label>
                                                <input type="text" class="form-control text-size" id="nama_bank" name="nama_bank" value="<?= $data->nama_bank ?>" required placeholder="Bank Mandiri">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3">
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
                                        <div class="col-md-3">
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
                                        <div class="col-md-3">
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
                                        <div class="col-md-3">
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
                                <div class="form-group mb-0 mt-2 float-right btn-maintain">
                                    <?php
                                    $level = $this->fungsi->user_login()->level;
                                    if (($level != 1) && (($level == 2 && $ticket->status_approval == 0) || ($level == 3 && $ticket->status_approval == 1) || ($level == 4 && $ticket->status_approval == 2) || ($level == 5 && $ticket->status_approval == 5))) {
                                    ?>
                                        <a class="btn btn-info text-size" onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')" href="<?= base_url('ticket/approve_status/' . $ticket->id_ticket) ?>">Approve</a>
                                    <?php } ?>
                                    <?php if ($level == 4 && $ticket->status_approval == 2) { ?>
                                        <a class="btn btn-danger text-size" onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href="<?= base_url('ticket/reject_status/' . $ticket->id_ticket) ?>">Reject</a>
                                    <?php } ?>
                                    <?php if ($level < 4) { ?>
                                        <button type="submit" onclick="return confirm('Mohon pastikan data yang diisi sudah benar!')" class="btn btn-primary waves-effect waves-light text-size">
                                            Simpan
                                        </button>
                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane p-3" id="timeline" role="tabpanel">
                            <h4 class="mt-0 header-title mb-4">Timeline Maintain</h4>
                            <ol class="activity-feed mb-0">
                                <?php if ($maintains->num_rows() > 0) {
                                    foreach ($maintains->result() as $maintain) {  ?>
                                        <li class="feed-item  text-size">
                                            <div class="feed-item-list">
                                                <span class="date">Maintain <?= $maintain->tanggal_maintain ?></span>
                                                <span class="activity-text"><?= $maintain->catatan ?></span>
                                                <div class="img-fluid">
                                                    <a class="image-popup-vertical-fit" href="<?= base_url('uploads/maintains/' .   $maintain->photo_activity) ?>" title="Foto maintain partner.">
                                                        <img class="d-flex align-self-start rounded mr-3 img-fluid" alt="" src="<?= base_url('uploads/maintains/' .   $maintain->photo_activity) ?>">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
                                    }
                                } else { ?>
                                    <p class="text-muted m-b-10 text-size">Tidak Ada Data</p>
                                <?php } ?>
                            </ol>
                        </div>
                        <div class="tab-pane p-3" id="lampiran" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mt-0 header-title mb-4">Data Lampiran</h4>
                                    <div class="owl-carousel owl-theme">
                                        <?php if ($data->ktp) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->ktp)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/partners/' . $data->ktp) ?>"><img src="<?= base_url('uploads/partners/' . $data->ktp) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $data->ktp) ?>">
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
                                                        <a href="<?= base_url('uploads/partners/' . $data->npwp) ?>"><img src="<?= base_url('uploads/partners/' . $data->npwp) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $data->npwp) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->npwp ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->npwp ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->buku_tabungan_perusahaan) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->buku_tabungan_perusahaan)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/partners/' . $data->buku_tabungan_perusahaan) ?>"><img src="<?= base_url('uploads/partners/' . $data->buku_tabungan_perusahaan) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $data->buku_tabungan_perusahaan) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->buku_tabungan_perusahaan ?>">
                                                            <i class=" fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->buku_tabungan_perusahaan ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->siup) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->siup)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/partners/' . $data->siup) ?>"><img src="<?= base_url('uploads/partners/' . $data->siup) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $data->siup) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->siup ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->siup ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->logo_perusahaan) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->logo_perusahaan)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/partners/' . $data->logo_perusahaan) ?>"><img src="<?= base_url('uploads/partners/' . $data->logo_perusahaan) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $data->logo_perusahaan) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->logo_perusahaan ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->logo_perusahaan ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->foto_usaha_mapping) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->foto_usaha_mapping)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/partners/' . $data->foto_usaha_mapping) ?>"><img src="<?= base_url('uploads/partners/' . $data->foto_usaha_mapping) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $data->foto_usaha_mapping) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->foto_usaha_mapping ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->foto_usaha_mapping ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->foto_usaha) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($data->foto_usaha)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/partners/' . $data->foto_usaha) ?>"><img src="<?= base_url('uploads/partners/' . $data->foto_usaha) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $data->foto_usaha) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->foto_usaha ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                            <!-- <span class="small"><?= $data->foto_usaha ?></span> -->
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                        <?php foreach ($maintains->result() as $maintain) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <div class="zoom-gallery">
                                                    <a href="<?= base_url('uploads/maintains/' . $maintain->photo_activity) ?>"><img src="<?= base_url('uploads/maintains/' . $maintain->photo_activity) ?>" alt="" style="height:150px; width:300px;"></a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($ticket->form_mou) { ?>
                                            <div class="item" style="height:150px; width:300px;">
                                                <?php if (get_extension($ticket->form_mou)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/partners/' . $ticket->form_mou) ?>"><img src="<?= base_url('uploads/partners/' . $ticket->form_mou) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $ticket->form_mou) ?>">
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
                                    <form action="">
                                        <h4 class="mt-0 header-title mb-4">Tambah Data Lampiran</h4>
                                        <div class="form-group element text-size ml-3 mr-3">
                                            <label>Lampirkan Data</label><br>
                                            <input type="file" name="tambah_lampiran" id="upload_file1" required>
                                        </div>
                                        <hr>
                                        <div id="moreImageUpload"></div>
                                        <div class="clear"></div>
                                        <div id="moreImageUploadLink" style="display:none;" class="float-right">
                                            <a class="btn btn-secondary mr-1" href="javascript:void(0);" id="attachMore">tambah Form lampiran</a>
                                            <button class="btn btn-primary mr-3">Simpan</button>
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
                                    <span class="d-block d-sm-none"><i class="far fa-newspaper"></i></span>
                                    <span class="d-none d-sm-block">Status</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-comment-dots"></i></span>
                                    <span class="d-none d-sm-block">Comment</span>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size"><b><?= $activity->activity ?></b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 text-size"><?= $activity->tanggal_activity ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $activity->name ?> (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1"><b><?= $activity->activity ?></b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $activity->name ?> (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0"><?= $activity->tanggal_activity ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success"><b>Terverifikasi</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_completed ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } else
                                        if ($ticket->status_approval == 6) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-primary"><b>Teraktivasi</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_activated ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size  text-danger"><b>Belum Diverifikasi</b></p>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($ticket->ttd_pks == 'Ya' && $ticket->form_mou != NULL) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success"><b>Sudah tanda tangan Kerjasama</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_verified_ttd ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-danger"><b>Belum tanda tangan Kerjasama</b></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (($this->fungsi->user_login()->level < 4) && ($ticket->form_mou == NULL || $ticket->form_mou == '')) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 ml-3 text-size"><b>Kerjasama?</b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <form action="#">
                                                                    <div class="form-group ml-3">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                                            <label class="form-check-label">
                                                                                Ya
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                                            <label class="form-check-label">
                                                                                Tidak
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <div id="" class="form-group ml-3 form_mou">
                                                                    <form action="<?= base_url('ticket/upload_mou/partners') ?>" method="post" enctype="multipart/form-data">
                                                                        <input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>">
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-success"><b>Terverifikasi</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted"><?= $ticket->tanggal_completed ?></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    <?php } else
                                    if ($ticket->status_approval == 6) { ?>
                                        <div class="inbox-wid">
                                            <div class="inbox-item">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 text-size text-primary"><b>Teraktivasi</b></p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_activated ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-danger"><b>Belum Diverifikasi</b></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ($ticket->ttd_pks == 'Ya' && $ticket->form_mou != NULL) { ?>
                                        <div class="inbox-wid">
                                            <div class="inbox-item">
                                                <table class="text-size">
                                                    <tr>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 text-success"><b>Sudah tanda tangan Kerjasama</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted"><?= $ticket->tanggal_verified_ttd ?></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-size text-danger"><b>Belum tanda tangan Kerjasama</b></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (($this->fungsi->user_login()->level < 4) && ($ticket->form_mou == NULL || $ticket->form_mou == '')) { ?>
                                        <div class="inbox-wid">
                                            <div class="inbox-item">
                                                <table>
                                                    <tr>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 ml-3 text-size"><b>Kerjasama?</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <form action="#">
                                                                <div class="form-group ml-3">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                                        <label class="form-check-label">
                                                                            Ya
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                                        <label class="form-check-label">
                                                                            Tidak
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div id="" class="form-group ml-3 form_mou">
                                                                <form action="<?= base_url('ticket/upload_mou/partners') ?>" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>">
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
                                                    <p class="inbox-item-author mt-0 mb-1 text-size"><b><a href="<?= base_url('zip/partner/' . $data->id_partner) ?>">Download Semua Lampiran</b></a></p>
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
                                            <div class="media mb-1">
                                                <a class="image-popup-vertical-fit" href="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
                                                    <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" height="64">
                                                </a>
                                                <div class="media-body b">
                                                    <p class="mb-0"><b><?= $comment->name ?></b></p>
                                                    <p class="text-size mt-0 mb-0"><?= $comment->tanggal ?></p>
                                                    <p class="text-size mt-0"><?= $comment->comment ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <h4 class="text-muted m-b-10 text-size">Tidak Ada Komentar</h4>
                                    <?php } ?>
                                </div>
                                <form action="<?= base_url('Comment/save') ?>" method="post">
                                    <input type="hidden" name="ticket" id="ticket" value="<?= $ticket->id_ticket ?>">
                                    <input type="hidden" name="uri_string" id="uri_string" value="<?= uri_string() ?>">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10" required placeholder="tulis comment disini" style="height:80px;"></textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light float-right" type="submit" name="process">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>