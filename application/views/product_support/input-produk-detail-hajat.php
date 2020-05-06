<div class="row">
    <div class="col-lg-8">
        <div class="page-title-box">
            <h4 class="page-title">Input Produk Detail</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Input Produk</a></li>
                <li class="breadcrumb-item active">Input Produk Detail</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <!-- <div id="hilang" class="loader-body">
										<div id="loader"></div>
										<div id="loadermobile"></div>
									</div> -->
                <!-- <div style="display:none;" id="myDiv" class="animate-bottom"> -->
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
                        <form class=" text-size" action="#" method="post">
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Konsumen</label>
                                <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen" placeholder="Mayang Madana Lalitya" required />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Jenis Konsumen</label>
                                <select class="form-control text-size" name="jenis_konsumen" id="jenis_konsumen" required>
                                    <option selected disabled value="">Pilih Jenis Konsumen</option>
                                    <option value="Internal">Internal (Karyawan)</option>
                                    <option value="Eksternal">Eksternal</option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Input Produk</label>
                                <input type="text" class="form-control text-size" name="input_produk" id="input_produk" value="My Hajat" required readonly />
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>kategori My Hajat</label>
                                <select class="form-control text-size hajat" name="kategori_myhajat" id="kategori_myhajat" required>
                                    <option selected value="">Pilih Kategori My hajat</option>
                                    <option value="Renovasi Rumah">Renovasi Rumah</option>
                                    <option value="Sewa bangunan (Rumah / Ruko)">Sewa bangunan
                                        (Rumah / Ruko)
                                    </option>
                                    <option value="Wedding Organizer">Wedding Organizer</option>
                                    <option value="Usaha franchise">Usaha franchise</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="renovasi">
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Nama Vendor Renovasi</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-size renovasi" name="nama_vendor_renovasi" id="nama_vendor_renovasi" placeholder="CV Aria Santika" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                            <button class="btn btn-primary text-size" type="button" id="button-addon2" data-toggle="modal" data-target="#modal-partner">Cari</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jenis Vendor Renovasi</label><br>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input renovasi" type="radio" name="jenis_vendor_renovasi" id="jenis_vendor_renovasi" value="Perorangan">
                                        <label class="form-check-label">
                                            Perorangan
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input renovasi" type="radio" name="jenis_vendor_renovasi" id="jenis_vendor_renovasi" value="Bandan Usaha">
                                        <label class="form-check-label">
                                            Bandan Usaha
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jenis Pekerjaan</label><br>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input renovasi" type="radio" name="jenis_pekerjaan" id="jenis_pekerjaan" value="Borongan">
                                        <label class="form-check-label">
                                            Borongan
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input renovasi" type="radio" name="jenis_pekerjaan" id="jenis_pekerjaan" value="Harian">
                                        <label class="form-check-label">
                                            Harian
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Bagian bangunan Yang Direnovasi</label>
                                    <input type="text" class="form-control text-size renovasi" name="bagian_bangunan" id="bagian_bangunan" placeholder="Bagian bangunan Yang Direnovasi" />
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Luas Bangunan (Panjang X Lebar)</label>
                                    <input type="text" class="form-control text-size renovasi" name="luas_bangunan" id="luas_bangunan" placeholder="Luas Bangunan" />
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jumlah Tukang / Pekerja</label>
                                    <input type="text" class="form-control text-size renovasi" name="jumlah_pekerja" id="jumlah_pekerja" placeholder="Jumlah Tukang / Pekerja" />
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Estimasi Waktu Pelaksanaan</label>
                                    <input type="text" class="form-control text-size renovasi" name="estimasi_waktu" id="estimasi_waktu" placeholder="Estimasi Waktu Pelaksanaan" />
                                </div>
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Nilai Pengajuan Pembiayaan</label>
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control text-size number-only renovasi" name="nilai_pengajuan_pembiayaan" id="nilai_pengajuan_pembiayaan" data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Informasi Tambahan</label>
                                    <textarea class="form-control text-size renovasi" name="informasi_tambahan" id="informasi_tambahan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                                </div>

                            </div>

                            <div class="sewa">
                                <div class="ml-3 mr-3 mt-3">
                                    <label>Nama Pemilik</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-size sewa" name="nama_pemilik" id="nama_pemilik" placeholder="Nama Pemilik" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                            <button class="btn btn-primary text-size" type="button" id="button-addon2" data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jenis Pemilik</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sewa" type="radio" name="jenis_pemilik" id="jenis_pemilik" value="Perorangan">
                                        <label class="form-check-label">
                                            Perorangan
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sewa" type="radio" name="jenis_pemilik" id="jenis_pemilik" value="Bandan Usaha">
                                        <label class="form-check-label">
                                            Bandan Usaha
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Hubungan Dengan Pemohon</label>
                                    <input type="text" class="form-control text-size sewa" name="hubungan_dengan_pemohon" id="hubungan_dengan_pemohon" placeholder="Orang lain / Rekan" />
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Luas X Panjang</label>
                                    <input type="text" class="form-control text-size sewa" name="luas_x_panjang" id="luas_x_panjang" placeholder="Luas X Panjang" />
                                </div>
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Biaya Sewa Pertahun</label>
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control text-size number-only sewa" name="biaya_sewa" id="biaya_sewa" data-type="currency" placeholder="Biaya Sewa Pertahun" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Informasi Tambahan</label>
                                    <textarea class="form-control text-size sewa" name="informasi_tambahan" id="informasi_tambahan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                                </div>

                            </div>

                            <div class="wedding">
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Nama Wedding Organizer</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-size wedding" name="nama_wedding_organizer" id="nama_wedding_organizer" placeholder="Nama Pemilik" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                            <button class="btn btn-primary text-size" type="button" id="button-addon2" data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jenis Wedding Organizer</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input wedding" type="radio" name="jenis_wedding_organizer" id="jenis_wedding_organizer" value="Perorangan">
                                        <label class="form-check-label">
                                            Perorangan
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input wedding" type="radio" name="jenis_wedding_organizer" id="jenis_wedding_organizer" value="Bandan Usaha">
                                        <label class="form-check-label">
                                            Bandan Usaha
                                        </label>
                                    </div>
                                </div>
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Jumlah biaya Acara</label>
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control text-size number-only wedding" name="jumlah_biaya_acara" id="jumlah_biaya_acara" data-type="currency" placeholder="jumlah Biaya" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jumalah Undangan</label>
                                    <input type="text" class="form-control text-size wedding" name="jumlah_undangan" id="jumlah_undangan" placeholder="Jumalah Undangan" />
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Akun Sosial Media WO</label>
                                    <input type="text" class="form-control text-size wedding" name="sosial_media" id="sosial_media" placeholder="Contoh : ( facebook : syariahbfi | instagram : @syariahbfi )" />
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Informasi Tambahan</label>
                                    <textarea class="form-control text-size wedding" name="informasi_tambahan" id="informasi_tambahan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                                </div>

                            </div>

                            <div class="usaha">
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Nama franchise</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-size usaha" name="nama_franchise" id="nama_franchise" placeholder="Nama Vendor" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                            <button class="btn btn-primary text-size" type="button" id="button-addon2" data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jumlah cabang yang Dimiliki</label>
                                    <input type="number" class="form-control text-size number-only usaha" name="jumlah_cabang" id="jumlah_cabang" placeholder="Jumlah cabang" />
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jenis Franchise</label>
                                    <select class="form-control text-size usaha" name="jenis_franchise" id="jenis_franchise">
                                        <option selected value="">Pilih Jenis Franchise</option>
                                        <option value="Makanan dan Minuman">Makanan dan Minuman
                                        </option>
                                        <option value="Otomotif">Otomotif</option>
                                        <option value="Pendidikan / Pelatihan">Pendidikan /
                                            Pelatihan</option>
                                        <option value="Hiburan / Hobi">Hiburan / Hobi</option>
                                        <option value="Komputer / Teknologi">Komputer / Teknologi
                                        </option>
                                        <option value="Kesehatan / Kecantikan">Kesehatan /
                                            Kecantikan</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Tahun Berdiri franchise</label>
                                    <input type="text" class="form-control text-size number-only usaha" name="tahun_berdiri_franchise" id="tahun_berdiri_franchise" placeholder="Tahun Berdiri franchise" />
                                </div>
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Harga Franchise</label>
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control text-size number-only usaha" name="harga_franchise" id="harga_franchise" data-type="currency" placeholder="Harga Franchise" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jangka Waktu franchise</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input usaha" type="radio" name="jangka_waktu" id="jangka_waktu" value="Selamanya">
                                        <label class="form-check-label">
                                            Selamanya
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input usaha" type="radio" name="jangka_waktu" id="jangka_waktu" value="Jangka Tertentu">
                                        <label class="form-check-label">
                                            Jangka Tertentu
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Akun Sosial Media / Website</label>
                                    <input type="text" class="form-control text-size usaha" name="sosial_media" id="sosial_media" placeholder="Contoh : ( facebook : syariahbfi | instagram : @syariahbfi )" />
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Informasi Tambahan</label>
                                    <textarea class="form-control text-size usaha" name="informasi_tambahan" id="informasi_tambahan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                                </div>

                            </div>

                            <div class="lainnya">
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Nama Penyedia Jasa</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control text-size lainnya" name="nama_penyedia_jasa" id="nama_penyedia_jasa" placeholder="Nama Vendor" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                            <button class="btn btn-primary text-size" type="button" id="button-addon2" data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Jenis Vendor Renovasi</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input lainnya" type="radio" name="jenis_vendor_renovasi" id="jenis_vendor_renovasi" value="Perorangan">
                                        <label class="form-check-label">
                                            Perorangan
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input lainnya" type="radio" name="jenis_vendor_renovasi" id="jenis_vendor_renovasi" value="Badan Usaha">
                                        <label class="form-check-label">
                                            Badan Usaha
                                        </label>
                                    </div>
                                </div>
                                <div class="ml-3 mr-3 mb-3">
                                    <label>Nilai Pengajuan Pembiayaan</label>
                                    <div class="input-group flex-nowrap">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control text-size number-only lainnya" name="nilai_pengajuan_pembiayaan" id="nilai_pengajuan_pembiayaan" data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="form-group ml-3 mr-3">
                                    <label>Informasi Tambahan</label>
                                    <textarea class="form-control text-size lainnya" name="informasi_tambahan" id="informasi_tambahan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                                </div>

                            </div>



                            <div class="form-group mb-0 mt-2 float-right btn-maintain">
                                <a class="btn btn-info text-size" onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')" href="<?= base_url('ticket/approve_status/' . $ticket->id_ticket) ?>">Approve</a>
                                <a class="btn btn-danger text-size" onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href="<?= base_url('ticket/reject_status/' . $ticket->id_ticket) ?>">Reject</a>
                                <button type="submit" onclick="return confirm('Mohon pastikan data yang diisi sudah benar!')" class="btn btn-primary waves-effect waves-light text-size">
                                    Simpan
                                </button>
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
                                            <span class="date">Maintain
                                                <?= $maintain->tanggal_maintain ?></span>
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
                                        <!-- KTP -->
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
                                        <!-- NPWP -->
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
                                        <!-- Buku Tabungan Perusahaan -->
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
                                        <!-- SIUP -->
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
                                        <!-- Logo Perusahaan -->
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
                                        <!-- Foto Usaha Mapping -->
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
                                        <!-- Foto Usaha -->
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
                                    <!-- Foto Maintain -->
                                    <?php foreach ($maintains->result() as $maintain) { ?>
                                        <div class="item" style="height:150px; width:300px;">
                                            <div class="zoom-gallery">
                                                <a href="<?= base_url('uploads/maintains/' . $maintain->photo_activity) ?>"><img src="<?= base_url('uploads/maintains/' . $maintain->photo_activity) ?>" alt="" style="height:150px; width:300px;"></a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ($data->lampiran_tambahan) { ?>
                                        <!-- Lampiran Tambahan -->
                                        <div class="item" style="height:150px; width:300px;">
                                            <?php
                                            $lampiran_tambahan =  explode(",", $data->lampiran_tambahan);
                                            foreach ($lampiran_tambahan as $upload) {
                                                echo $upload;

                                            ?>
                                                <?php if (get_extension($upload)) { ?>
                                                    <div class="zoom-gallery">
                                                        <a href="<?= base_url('uploads/partners/' . $upload) ?>"><img src="<?= base_url('uploads/partners/' . $upload) ?>" alt="" style="height:150px; width:300px;"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/partners/' . $upload) ?>">
                                                        <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $data->upload ?>">
                                                            <i class="fa fa-file fa-5x"></i>
                                                        </div>
                                                    </a>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <!-- Form MOU -->
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
                                <form action="<?= base_url('partner/tambah_lampiran') ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">
                                    <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                                    <h4 class="mt-0 header-title mb-4">Tambah Data Lampiran</h4>
                                    <div class="form-group element text-size">
                                        <label>Lampirkan Data</label><br>
                                        <input type="file" name="tambah_lampiran[]" id="upload_file1" required>
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
                <!-- </div> -->
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
                                                                <p class="inbox-item-author mt-0 mb-0"><i class="dripicons-clock"></i>&nbsp;
                                                                </p>
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
                                                                    (<?= $activity->jabatan ?>) -
                                                                    <?= $activity->nama_cabang ?>
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
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="dripicons-clock"></i>&nbsp;
                                                                </p>
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
                                                                    (<?= $activity->jabatan ?>) -
                                                                    <?= $activity->nama_cabang ?>
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
                                        <!-- Terverifikasi -->
                                        <?php if ($ticket->status_approval == 5) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1">
                                                                    <i class="mdi mdi-account-check"></i>&nbsp;
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success">
                                                                    <b>Terverifikasi</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                    <?= $ticket->tanggal_completed ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?>
                                                                </p>
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
                                                                <p class="inbox-item-author mt-0 mb-1">
                                                                    <i class="mdi mdi-account-check"></i>&nbsp;
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-primary">
                                                                    <b>Teraktivasi</b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                    <?= $ticket->tanggal_activated ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?>
                                                                </p>
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
                                                                <p class="inbox-item-author mt-0 mb-1">
                                                                    <i class="mdi mdi-timer-sand"></i>&nbsp;
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size  text-danger">
                                                                    <b>Belum Diverifikasi</b></p>
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
                                                                <p class="inbox-item-author mt-0 mb-1">
                                                                    <i class="mdi mdi-account-check"></i>&nbsp;
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-success">
                                                                    <b>Sudah tanda tangan Kerjasama</b>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 mb-0 text-size">
                                                                    <?= $ticket->tanggal_verified_ttd ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?>
                                                                </p>
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
                                                                <p class="inbox-item-author mt-0 mb-1">
                                                                    <i class="mdi mdi-timer-sand"></i>&nbsp;
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size text-danger">
                                                                    <b>Belum tanda tangan Kerjasama</b>
                                                                </p>
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
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 text-success">
                                                                <b>Terverifikasi</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">
                                                                Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?>
                                                            </p>
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
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 text-size text-primary">
                                                                <b>Teraktivasi</b></p>
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
                                                                Oleh&nbsp;&nbsp;<?= $ticket->nama_user_activated ?>
                                                            </p>
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
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 text-danger">
                                                                <b>Belum
                                                                    Diverifikasi</b></p>
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
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="inbox-item-author mt-0 mb-1 text-success">
                                                                <b>Sudah
                                                                    tanda tangan Kerjasama</b></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">
                                                                Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?>
                                                            </p>
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
                                                            <p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;
                                                            </p>
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
                                    <?php if (($this->fungsi->user_login()->level < 4) && ($ticket->form_mou == NULL || $ticket->form_mou == '')) { ?>
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
                                                    <p class="inbox-item-author mt-0 mb-1 text-size">
                                                        <b><a href="<?= base_url('zip/partner/' . $data->id_partner) ?>">Download
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
                                                    <p class="text-size mt-0 mb-0"><?= $comment->tanggal ?>
                                                    </p>
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