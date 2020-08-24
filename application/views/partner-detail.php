<div class="row">
    <div class="col-lg-8">
        <div class="page-title-box card-margin-2">
            <h4><b>Detail Merchant</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Daftar Merchant</a></li>
                <li class="breadcrumb-item active">Detail Merchant</li>
            </ol>
        </div>
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <div id="hilang" class="loader-body">
                    <div id="loader"></div>
                    <div id="loadermobile"></div>
                </div>
                <div style="display:none;" id="myDiv" class="animate-bottom">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#partner" role="tab">
                                <span class="d-block d-sm-none mb-1"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block mb-1">Data partner</span>
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
                            <!-- Alert Message-->
                            <?= $this->session->flashdata('alert') ?>
                            <form class=" text-size" action="<?= base_url('Partner/update_detail') ?>" method="post">
                                <!-- ID Ticket -->
                                <input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>" id="id_ticket">
                                <!-- ID Partner -->
                                <input type="hidden" name="id_partner" id="id_partner" value="<?= $data->id_partner ?>">
                                <!-- ID User -->
                                <input type="hidden" name="id_user" id="id_user" value="<?= $data->id_user ?>">
                                <!-- ID Branch -->
                                <input type="hidden" name="id_branch" id="id_branch" value="<?= $data->id_branch ?>">
                                <!-- Post Redirect halaman ke form -->
                                <input type="hidden" name="redirect" value="<?= uri_string() ?>">

                                <div class="">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
                                                <label>Nama Usaha</label>
                                                <input type="text" class="form-control text-size" name="nama_usaha" id="nama_usaha" value="<?= $data->nama_usaha ?>" required placeholder="CV Aria Santika" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Nomor Telepon / WhatsApp</label>
                                                <input type="text" class="form-control text-size <?= form_error('telepon') ? 'is-invalid' : '' ?> placement number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0811977300" maxlength="15" />
                                                <?= form_error('telepon') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control text-size" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" placeholder="Aisha@bfisyariah.id" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
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
                                            <div class="form-group form-left">
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
                                            <div class="form-group form-right">
                                                <label>Bidang Usaha</label>
                                                <input type="text" class="form-control text-size" name="bidang_usaha" id="bidang_usaha" value="<?= $data->bidang_usaha ?>" required placeholder="Garmen / Percetakan / Lainnya" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-margin">
                                        <label>Alamat / Lokasi</label>
                                        <input type="phone" class="form-control text-size" name="alamat" id="alamat" required value="<?= $data->alamat ?>" placeholder="Jalan Perjalanan Panjang No.22" />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Kelurahan</label>
                                                <input type="text" class="form-control text-size" name="kelurahan" id="kelurahan" required value="<?= $data->kelurahan ?>" placeholder="Lengkong Gudang" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Kecamatan</label>
                                                <input type="text" class="form-control text-size" name="kecamatan" id="kecamatan" required value="<?= $data->kecamatan ?>" placeholder="Serpong utara" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Kode Pos</label>
                                                <input type="text" class="form-control text-size placement number-only" name="kode_pos" id="kode_pos" required value="<?= $data->kode_pos ?>" placeholder="16810" minlength="5" maxlength="6" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Provinsi</label>
                                                <input type=" text" class="form-control text-size" name="provinsi" id="provinsi" required value="<?= $data->provinsi ?>" placeholder="Kalimantan Tengah" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Status Tempat Usaha</label>
                                                <select class="form-control text-size" name="status_tempat_usaha" id="status_tempat_usaha" required>
                                                    <option selected disabled value="">Pilih Status Tempat usaha
                                                    </option>
                                                    <option <?= $data->status_tempat_usaha == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
                                                    <option <?= $data->status_tempat_usaha == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
                                                    <option <?= $data->status_tempat_usaha == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-right">
                                                <label>Tahun Berdiri</label>
                                                <input type="text" class="form-control placement number-only" name="tahun_berdiri" id="tahun_berdiri" value="<?= $data->tahun_berdiri ?>"" required placeholder=" 2016" minlength="4" maxlength="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div id="disable" class="form-group form-margin">
                                                <label>Tahun Berakhir Izin Usaha</label>
                                                <input type="text" class="form-control placement text-size number-only" name="akhir_izin" id="akhir_izin" value="<?= $data->akhir_izin ?>" placeholder="2016" minlength="4" maxlength="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Jumlah Cabang</label>
                                                <input type="text" class="form-control text-size number-only" name="jumlah_cabang" id="jumlah_cabang" value="<?= $data->jumlah_cabang ?>" required placeholder="5">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Jumlah Karyawan</label>
                                                <input type="text" class="form-control text-size number-only" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $data->jumlah_karyawan ?>"" required placeholder=" 25">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Barang Yang Dijual</label>
                                                <input type="text" class="form-control text-size" name="barang_jual" id="barang_jual" name="barang_jual" value="<?= $data->barang_jual ?>" required placeholder="Contoh : Bahan Bangunan, Paket Pernikahan, Lainnya">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Sosial Media / Website</label>
                                                <input type="text" class="form-control text-size" name="sosial_media" id="sosial_media" value="<?= $data->sosial_media ?>" required placeholder="https://www.instagram.com/bfisyariah">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Nama Pemilik</label>
                                                <input type="text" class="form-control text-size" name="nama_pemilik" id="nama_pemilik" value="<?= $data->nama_pemilik ?>" required placeholder="Khadaffi Antashari">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Hobi / Interest</label>
                                                <input type="text" class="form-control text-size" name="hobi" id="hobi" value="<?= $data->hobi ?>" placeholder="Memancing">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label class="mt-1">Apa Saja Jenis Pembayaran Yang Diterima</label><br>
                                                <div class="mt-2">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="jenis_pembayaran[]" id="inlineCheckbox1" <?= in_array('Tunai', explode(',', $data->jenis_pembayaran)) ? 'checked' : '' ?> value="Tunai">
                                                        <label class="form-check-label" for="inlineCheckbox1">Tunai</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="jenis_pembayaran[]" id="inlineCheckbox2" <?= in_array('Cicilan Konvensional', explode(',', $data->jenis_pembayaran)) ? 'checked' : '' ?> value="Cicilan Konvensional">
                                                        <label class="form-check-label" for="inlineCheckbox2">Cicilan
                                                            Konvensional</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="jenis_pembayaran[]" id="inlineCheckbox3" <?= in_array('Cicilan Syariah', explode(',', $data->jenis_pembayaran)) ? 'checked' : '' ?> value="Cicilan Syariah">
                                                        <label class="form-check-label" for="inlineCheckbox3">Cicilan
                                                            Syariah</label>
                                                    </div>
                                                </div>
                                                <!-- <label>Apa Saja Jenis Pembayaran Yang Diterima</label>
                                                <select class="form-control text-size" name="jenis_pembayaran" id="jenis_pembayaran" required placeholder="Jenis Pembayaran">
                                                    <option selected disabled value="">Pilih Jenis Pembayaran</option>
                                                    <option <?= $data->jenis_pembayaran == 'Tunai' ? 'selected' : '' ?> value="Tunai">Tunai</option>
                                                    <option <?= $data->jenis_pembayaran == 'Kredit Konvensional' ? 'selected' : '' ?> value="Kredit Konvensional">Kredit Konvensional</option>
                                                    <option <?= $data->jenis_pembayaran == 'Kredit Syariah' ? 'selected' : '' ?> value="Kredit Syariah">Kredit Syariah</option>
                                                </select> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-right">
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
                                            <div class="form-group form-left">
                                                <label>Rekening Bank</label>
                                                <input type="text" class="form-control placement text-size number-only" id="rekening_bank" name="rekening_bank" value="<?= $data->rekening_bank ?>" required placeholder="04686587658745" minlength="10" maxlength="16">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Atas Nama</label>
                                                <input type="text" class="form-control text-size" id="atas_nama" name="atas_nama" value="<?= $data->atas_nama ?>" required placeholder="Anton Hoed">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Cabang Bank</label>
                                                <input type="text" class="form-control text-size" id="cabang_bank" name="cabang_bank" value="<?= $data->cabang_bank ?>" required placeholder="Cabang Karawaci">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Nama Bank</label>
                                                <input type="text" class="form-control text-size" id="nama_bank" name="nama_bank" value="<?= $data->nama_bank ?>" required placeholder="Bank Mandiri">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
                                                <label>NPWP Penyedia Jasa</label>
                                                <input type="text" class="form-control placement text-size number-only" id="" name="npwp_penyedia_jasa" value="<?= $data->npwp_penyedia_jasa ?>" required placeholder="0000 0000 0000 000" minlength="15" maxlength="15">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group ml-4 mr-4 mb-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group ml-4 mr-4 mb-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group ml-4 mr-4 mb-4">
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
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group ml-4 mr-4 mb-4">
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
                                        <div class="col-md-4">
                                            <div class="form-group ml-4 mr-4 mb-4">
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
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
                                                <label>Catatan</label>
                                                <textarea class="form-control text-size" name="keterangan_tambahan" id="keterangan_tambahan" value="<?= $data->keterangan_tambahan ?>" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:107px;"><?= $data->keterangan_tambahan ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2 float-right btn-maintain form-margin mr-4">
                                    <?php
                                    $level = $this->fungsi->user_login()->level;
                                    if (
                                        //Bukan CMS
                                        ($level != 1) &&
                                        // Head & Menunggu Persetujuan Head 
                                        (
                                            ($level == 2 && $ticket->status_approval == 0) ||
                                            // Manager & Menunggu Persetujuan Manager 
                                            ($level == 3 && $ticket->status_approval == 1) ||
                                            // Admin & Pending HO 
                                            ($level == 4 && $ticket->status_approval == 2) ||
                                            // Head HO & Disetujui 
                                            ($level == 5 && $ticket->status_approval == 5))
                                    ) {
                                    ?>
                                        <a class="btn btn-info text-size ml-1 mb-1" onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')" href="<?= base_url('ticket/approve_status/' . $ticket->id_ticket . '/partner') ?>"><b>Approve</b></a>
                                    <?php } ?>
                                    <!-- Tombol REJECT untuk ADMIN HO -->
                                    <?php if ($level == 4 && $ticket->status_approval == 2) { ?>
                                        <a class="btn btn-danger text-size ml-1 mb-1" onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href="<?= base_url('ticket/reject_status/' . $ticket->id_ticket . '/partner') ?>"><b>Reject</b></a>
                                    <?php } ?>
                                    <!-- Tombol RETURN untuk Head & Manager -->
                                    <?php if (($level == 2 || $level == 3) && ($ticket->status_approval == 0 || $ticket->status_approval == 1)) { ?>
                                        <a class="btn btn-danger text-size ml-1 mb-1" onclick="return confirm('Apakah Anda yakin MENGEMBALIKAN data tiket ini ke CMS?')" href="<?= base_url('ticket/reject_status/' . $ticket->id_ticket . '/partner') ?>"><b>Return</b></a>
                                    <?php } ?>
                                    <!-- Tombol SIMPAN untuk simpan data -->
                                    <?php if ($level < 4 && $level != 3) { ?>
                                        <button type="submit" onclick="return confirm('Mohon pastikan data yang diisi sudah benar!')" class="btn btn-primary waves-effect waves-light text-size ml-1 mb-1">
                                            <b>Simpan</b>
                                        </button>
                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane p-3" id="timeline" role="tabpanel">
                            <h4 class="mt-0 header-title mb-4"><b>Timeline Maintain</b></h4>
                            <ol class="activity-feed mb-0">
                                <?php if ($maintains->num_rows() > 0) {
                                    foreach ($maintains->result() as $maintain) {  ?>
                                        <?php $data_maintain = explode(",", $maintain->photo_activity) ?>
                                        <li class="feed-item  text-size">
                                            <div class="feed-item-list">
                                                <span class="date">Maintain <?= $maintain->tanggal_maintain ?></span>
                                                <span class="activity-text"><?= $maintain->catatan ?></span>
                                                <div class="img-fluid">
                                                    <a class="image-popup-vertical-fit" href="<?= base_url('uploads/maintains/' .   $data_maintain[0]) ?>" title="Foto maintain partner.">
                                                        <img class="d-flex align-self-start rounded mr-3 img-fluid" alt="" src="<?= base_url('uploads/maintains/' .   $data_maintain[0]) ?>">
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
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Upload Data</th>
                                                <th>Nama File</th>
                                                <th>Ukuran</th>
                                                <th>Date Upload</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $data_upload = explode(",", $data->ktp) ?>
                                            <tr>
                                                <td>KTP</td>
                                                <?php if (!empty($data->ktp)) { ?>
                                                    <td><?= array_key_exists(0, $data_upload) ? $data_upload[0] : "-" ?></td>
                                                    <td><?= array_key_exists(1, $data_upload) ? $data_upload[1] . "Kb" : "-" ?></td>
                                                    <td><?= array_key_exists(2, $data_upload) ? $data_upload[2] : "-" ?></td>
                                                    <td style="white-space: nowrap;">
                                                        <a class="btn btn-primary radius" style="width: 40px;" href="<?= base_url(array_key_exists(0, $data_upload) ? "uploads/partners/" . $data_upload[0] : "#") ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger radius" onclick="return confirm('Apakah Anda yakin ingin menghapus data lampiran ini?')" style="width: 40px;" href="<?= base_url('partner/delete_lampiran/' . $data->id_partner . '/ktp') ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td colspan="4" style="vertical-align: middle; text-align: right;"><input class="" type="file"></td>
                                                <?php } ?>
                                            </tr>
                                            <?php $data_upload = explode(",", $data->npwp) ?>
                                            <tr>
                                                <td>NPWP</td>
                                                <?php if (!empty($ata->npwp)) { ?>
                                                    <td><?= array_key_exists(0, $data_upload) ? $data_upload[0] : "-" ?></td>
                                                    <td><?= array_key_exists(1, $data_upload) ? $data_upload[1] . "Kb" : "-" ?></td>
                                                    <td><?= array_key_exists(2, $data_upload) ? $data_upload[2] : "-" ?></td>
                                                    <td style="white-space: nowrap;">
                                                        <a class="btn btn-primary radius" style="width: 40px;" href="<?= base_url(array_key_exists(0, $data_upload) ? "uploads/partners/" . $data_upload[0] : "#") ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger radius" onclick="return confirm('Apakah Anda yakin ingin menghapus data lampiran ini?')" style="width: 40px;" href="<?= base_url('partner/delete_lampiran/' . $data->id_partner . '/npwp') ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td colspan="4" style="vertical-align: middle; text-align: right;"><input class="" type="file"></td>
                                                <?php } ?>
                                            </tr>
                                            <?php $data_upload = explode(",", $data->buku_tabungan_perusahaan) ?>
                                            <tr>
                                                <td>Buku Tabungan Perusahaan</td>
                                                <?php if (!empty($data->buku_tabungan_perusahaan)) { ?>
                                                    <td><?= array_key_exists(0, $data_upload) ? $data_upload[0] : "-" ?></td>
                                                    <td><?= array_key_exists(1, $data_upload) ? $data_upload[1] . "Kb" : "-" ?></td>
                                                    <td><?= array_key_exists(2, $data_upload) ? $data_upload[2] : "-" ?></td>
                                                    <td style="white-space: nowrap;">
                                                        <a class="btn btn-primary radius" style="width: 40px;" href="<?= base_url(array_key_exists(0, $data_upload) ? "uploads/partners/" . $data_upload[0] : "#") ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger radius" onclick="return confirm('Apakah Anda yakin ingin menghapus data lampiran ini?')" style="width: 40px;" href="<?= base_url('partner/delete_lampiran/' . $data->id_partner . '/buku_tabungan_perusahaan') ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td colspan="4" style="vertical-align: middle; text-align: right;"><input class="" type="file"></td>
                                                <?php } ?>
                                            </tr>
                                            <?php $data_upload = explode(",", $data->siup) ?>
                                            <tr>
                                                <td>SIUP</td>
                                                <?php if (!empty($data->siup)) { ?>
                                                    <td><?= array_key_exists(0, $data_upload) ? $data_upload[0] : "-" ?></td>
                                                    <td><?= array_key_exists(1, $data_upload) ? $data_upload[1] . "Kb" : "-" ?></td>
                                                    <td><?= array_key_exists(2, $data_upload) ? $data_upload[2] : "-" ?></td>
                                                    <td style="white-space: nowrap;">
                                                        <a class="btn btn-primary radius" style="width: 40px;" href="<?= base_url(array_key_exists(0, $data_upload) ? "uploads/partners/" . $data_upload[0] : "#") ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger radius" onclick="return confirm('Apakah Anda yakin ingin menghapus data lampiran ini?')" style="width: 40px;" href="<?= base_url('partner/delete_lampiran/' . $data->id_partner . '/siup') ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td colspan="4" style="vertical-align: middle; text-align: right;"><input class="" type="file"></td>
                                                <?php } ?>
                                            </tr>
                                            <?php $data_upload = explode(",", $data->logo_perusahaan) ?>
                                            <tr>
                                                <td>Logo Perusahaan</td>
                                                <?php if (!empty($data->logo_perusahaan)) { ?>
                                                    <td><?= array_key_exists(0, $data_upload) ? $data_upload[0] : "-" ?></td>
                                                    <td><?= array_key_exists(1, $data_upload) ? $data_upload[1] . "Kb" : "-" ?></td>
                                                    <td><?= array_key_exists(2, $data_upload) ? $data_upload[2] : "-" ?></td>
                                                    <td style="white-space: nowrap;">
                                                        <a class="btn btn-primary radius" style="width: 40px;" href="<?= base_url(array_key_exists(0, $data_upload) ? "uploads/partners/" . $data_upload[0] : "#") ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger radius" onclick="return confirm('Apakah Anda yakin ingin menghapus data lampiran ini?')" style="width: 40px;" href="<?= base_url('partner/delete_lampiran/' . $data->id_partner . '/logo_perusahaan') ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td colspan="4" style="vertical-align: middle; text-align: right;"><input class="" type="file"></td>
                                                <?php } ?>
                                            </tr>
                                            <?php $data_upload = explode(",", $data->form_mou) ?>
                                            <tr>
                                                <td>Form MOU</td>
                                                <?php if (!empty($data->form_mou)) { ?>
                                                    <td><?= array_key_exists(0, $data_upload) ? $data_upload[0] : "-" ?></td>
                                                    <td><?= array_key_exists(1, $data_upload) ? $data_upload[1] . "Kb" : "-" ?></td>
                                                    <td><?= array_key_exists(2, $data_upload) ? $data_upload[2] : "-" ?></td>
                                                    <td style="white-space: nowrap;">
                                                        <a class="btn btn-primary radius" style="width: 40px;" href="<?= base_url(array_key_exists(0, $data_upload) ? "uploads/partners/" . $data_upload[0] : "#") ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger radius" onclick="return confirm('Apakah Anda yakin ingin menghapus data lampiran ini?')" style="width: 40px;" href="<?= base_url('partner/delete_lampiran/' . $data->id_partner . '/form_mou') ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td colspan="4" style="vertical-align: middle; text-align: right;"><input class="" type="file"></td>
                                                <?php } ?>
                                            </tr>
                                            <?php $data_upload = explode(",", $data->foto_usaha) ?>
                                            <tr>
                                                <td>Foto Usaha</td>
                                                <?php if (!empty($data->foto_usaha)) { ?>
                                                    <td><?= array_key_exists(0, $data_upload) ? $data_upload[0] : "-" ?></td>
                                                    <td><?= array_key_exists(1, $data_upload) ? $data_upload[1] . "Kb" : "-" ?></td>
                                                    <td><?= array_key_exists(2, $data_upload) ? $data_upload[2] : "-" ?></td>
                                                    <td style="white-space: nowrap;">
                                                        <a class="btn btn-primary radius" style="width: 40px;" href="<?= base_url(array_key_exists(0, $data_upload) ? "uploads/partners/" . $data_upload[0] : "#") ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                        <a class="btn btn-danger radius" onclick="return confirm('Apakah Anda yakin ingin menghapus data lampiran ini?')" style="width: 40px;" href="<?= base_url('partner/delete_lampiran/' . $data->id_partner . '/foto_usaha') ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td colspan="4" style="vertical-align: middle; text-align: right;"><input class="" type="file"></td>
                                                <?php } ?>
                                            </tr>
                                            <?php $i = 0; ?>
                                            <?php
                                            $lampiran_tambahan = explode("|", $data->lampiran_tambahan);
                                            foreach ($lampiran_tambahan as $key => $lampiran) { ?>
                                                <?php $data_upload = explode(",", $lampiran) ?>
                                                <tr>
                                                    <td><?= $i == 0 ? 'Lampiran Tambahan' : '';
                                                        $i++ ?></td>
                                                    <td><?= array_key_exists(0, $data_upload) ? $data_upload[0] : "-" ?></td>
                                                    <td><?= array_key_exists(1, $data_upload) ? $data_upload[1] . "Kb" : "-" ?></td>
                                                    <td><?= array_key_exists(2, $data_upload) ? $data_upload[2] : "-" ?></td>
                                                    <?php if (!empty($data_upload)) { ?>
                                                        <td style="white-space: nowrap;">
                                                            <a class="btn btn-primary radius" style="width: 40px;" href="<?= base_url(array_key_exists(0, $data_upload) ? "uploads/partners/" . $data_upload[0] : "#") ?>" target="_blank"><i class="fa fa-eye"></i></a>
                                                            <a class="btn btn-danger radius" onclick="return confirm('Apakah Anda yakin ingin menghapus data lampiran ini?')" style="width: 40px;" href="<?= base_url('partner/delete_lampiran/' . $data->id_partner . '/lampiran_tambahan/' . $key) ?>"><i class="fa fa-trash"></i></a>
                                                        <?php } ?>
                                                        </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <form action="<?= base_url('partner/tambah_lampiran') ?>" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">
                                        <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                                        <h4 class="mt-0 header-title mb-4"><b>Tambah Data Lampiran</b></h4>
                                        <div class="form-group element text-size">
                                            <label>Lampirkan Data</label><br>
                                            <input type="file" name="tambah_lampiran[]" id="upload_file1" required>
                                        </div>
                                        <hr>
                                        <div id="moreImageUpload"></div>
                                        <div class="clear "></div>
                                        <div id="moreImageUploadLink" class="float-right mt-3">
                                            <a class="btn btn-secondary text-size mr-1" href="javascript:void(0);" id="attachMore">Tambah Form</a>
                                            <button class="btn btn-primary text-size">Simpan</button>
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
                                    <span class="d-block d-sm-none mb-1"><i class="far fa-newspaper"></i></span>
                                    <span class="d-none d-sm-block mb-1">Status</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-comment-dots"></i></span>
                                    <span class="d-none d-sm-block">Comment <span class="badge badge-danger ml-1"><?= $comments->num_rows() ?></span></span>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size">
                                                                    <b><?= $activity->activity ?></b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 text-size">
                                                                    <?= $activity->tanggal_activity ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $activity->name ?>
                                                                    (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?>
                                                                </p>
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
                                                                <p class="inbox-item-author mt-0 mb-1">
                                                                    <b><?= $activity->activity ?></b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $activity->name ?>
                                                                    (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0">
                                                                    <?= $activity->tanggal_activity ?></p>
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
                                        <!-- Verified -->
                                        <?php if ($ticket->status_approval == 5) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success">
                                                                    <b>Verified</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                    <?= $ticket->tanggal_completed ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-primary">
                                                                    <b>Activated</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                    <?= $ticket->tanggal_activated ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size  text-danger">
                                                                    <b>Belum diverifikasi</b></p>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data->ttd_pks == 'Ya' && $data->form_mou != NULL) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success">
                                                                    <b>Sudah tanda tangan Kerjasama</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                    <?= $ticket->tanggal_verified_ttd ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-danger">
                                                                    <b>Belum tanda tangan Kerjasama</b></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <?php if (($this->fungsi->user_login()->level < 4) && ($data->form_mou == NULL || $data->form_mou == '')) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 ml-3 text-size">
                                                                    <b>Kerjasama?</b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <form action="#">
                                                                    <div class="form-group ml-3">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $data->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                                            <label class="form-check-label">
                                                                                Ya
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $data->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                                            <label class="form-check-label">
                                                                                Tidak
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <div id="" class="form-group ml-3 form_mou">
                                                                    <form action="<?= base_url('partner/upload_mou') ?>" method="post" enctype="multipart/form-data">
                                                                        <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-success">
                                                                <b>Verified</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">
                                                                Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted">
                                                                <?= $ticket->tanggal_completed ?></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-size text-primary">
                                                                <b>Activated</b></p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                <?= $ticket->tanggal_activated ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0 text-size">
                                                                Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-danger"><b>Belum
                                                                    Diverifikasi</b></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ($data->ttd_pks == 'Ya' && $data->form_mou != NULL) { ?>
                                        <div class="inbox-wid">
                                            <div class="inbox-item">
                                                <table class="text-size">
                                                    <tr>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 text-success"><b>Sudah
                                                                    tanda tangan Kerjasama</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">
                                                                Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted">
                                                                <?= $ticket->tanggal_verified_ttd ?></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1 text-size text-danger">
                                                                <b>Belum tanda tangan Kerjasama</b></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (($this->fungsi->user_login()->level < 4) && ($data->form_mou == NULL || $data->form_mou == '')) { ?>
                                        <div class="inbox-wid">
                                            <div class="inbox-item">
                                                <table>
                                                    <tr>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 ml-3 text-size">
                                                                <b>Kerjasama?</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <form action="#">
                                                                <div class="form-group ml-3">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $data->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
                                                                        <label class="form-check-label">
                                                                            Ya
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $data->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
                                                                        <label class="form-check-label">
                                                                            Tidak
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div id="" class="form-group ml-3 form_mou">
                                                                <form action="<?= base_url('partner/upload_mou/') ?>" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">
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
                                                    <p class="inbox-item-author mt-0 mb-1 text-size"><b><a href="<?= base_url('partner/download_lampiran/' . $data->id_partner) ?>">Download
                                                                Semua Lampiran</b></a></p>
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
                                    <button class="btn btn-primary waves-effect waves-light float-right btn-width" type="submit" name="process"><b>Kirim</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //Script untuk update tanda tangan pks -->
<script>
    if ($("input[name='ttd_pks']:checked").val() == 'Ya') {
        $(".form_mou").show();
    } else {
        $(".form_mou").hide();
    }
    //Update tanda tangan pks
    $(".ttd_pks").on('click', function() {
        var ttd_pks = $(this).val();
        var id_partner = $('#id_partner').val();

        if (ttd_pks == 'Ya') {
            $(".form_mou").show();
        } else {
            $(".form_mou").hide();
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('partner/update_ttd') ?>",
            dataType: "JSON",
            data: {
                ttd_pks: ttd_pks,
                id_partner: id_partner
            },
            success: function(data) {
                // alert('Success, \n ID Tiket: ' + id_partner + '\n TTD: ' + ttd_pks);
                // location.reload();
            }
        });
        // return false;
    });
</script>