<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Input Produk</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Input Produk</li>
            </ol>
        </div>
    </div>
</div>

<form id="form_input_produk" action="<?= base_url() ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="ml-3">
                        <h4 class="mt-0 header-title">Form Konsumen</h4>
                        <p class="text-muted m-b-30 text-size"></p>
                    </div>

                    <div class="form-group ml-3 mr-3">
                        <label>Nama Konsumen</label>
                        <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen"
                            placeholder="Mayang Madana Lalitya" required />
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
                        <select class="form-control text-size" name="input_produk" id="input_produk" required>
                            <option selected value="">Pilih Input Produk</option>
                            <option value="My Ta'lim">My Ta'lim</option>
                            <option value="My Hajat">My Hajat</option>
                            <option value="My Ihram">My Ihram</option>
                            <option value="My Safar">My Safar</option>
                            <option value="My Faedah">My Faedah</option>
                            <option value="My Cars">My Cars</option>
                            <option value="Input Paket">Input Paket</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- My Ta'lim -->
        <div class="col-lg-7 talim">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="ml-3">
                        <h4 class="mt-0 header-title">Form My Ta'lim</h4>
                        <p class="text-muted m-b-30 text-size">Berikan informasi mengenai
                            program
                            pendidikan dan siswa/pelajar yang telah didaftarkan pada lembaga
                            pendidikan yang calon konsumen pilih</p>
                    </div>

                    <div class="form-group ml-3 mr-3">
                        <label>Nama Pelajar</label>
                        <input type="text" class="form-control text-size talim" name="nama_siswa" id="nama_siswa"
                            placeholder="Ryan Issabella" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Jenis Pembiayaan Pendidikan</label>
                        <select class="form-control text-size talim" name="pendidikan" id="pendidikan">
                            <option selected disabled value="">Pilih Pendidikan</option>
                            <option value="Sekolah (TK, SD, SMP, SMA, Pesantren)">Sekolah
                                (TK,
                                SD, SMP, SMA, Pesantren)
                            </option>
                            <option value="Universitas (S1, S2, S3)">Universitas (S1, S2,
                                S3)
                            </option>
                            <option value="kURSUS (English, Bimble, Komputer, Lainnya)">
                                kURSUS
                                (English, Bimble, Komputer, Lainnya)</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Nama Lembaga Pendidikan</label>
                        <input type="text" class="form-control text-size talim" name="nama_lembaga" id="nama_lembaga"
                            placeholder="ILP" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Tahun Berdiri Lembaga</label>
                        <input type="date" class="form-control text-size talim" name="tahun_berdiri"
                            id="tahun_berdiri" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Akreditasi Lembaga Pendidikan</label>
                        <input type="text" class="form-control text-size talim" name="akreditasi" id="akreditasi"
                            placeholder="Akreditasi A" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Tahun Periode Pendidikan</label>
                        <input type="text" class="form-control text-size talim" name="periode" id="periode"
                            placeholder="2020 - 2021" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Tujuan Pembiayaan</label>
                        <input type="text" class="form-control text-size talim" name="tujuan_pembiayaan"
                            id="tujuan_pembiayaan" placeholder="Uang Masuk / Uang Paket Semester / Lainnya" />
                    </div>
                    <div class="ml-3 mr-3 mb-3">
                        <label>Nilai Pembiayaan</label>
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                            </div>
                            <input type="text" class="form-control text-size talim number-only" name="nilai_pembiayaan"
                                id="nilai_pembiayaan" data-type="currency" placeholder="7,000,000" aria-label="Username"
                                aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Informasi Tambahan</label>
                        <textarea class="form-control text-size talim" name="keterangan_tambahan"
                            id="keterangan_tambahan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan"
                            style="height:110px;"></textarea>
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3 web">
                        <!-- <a href="#" class="btn btn-secondary waves-effect waves-light text-size">Batal</a> -->
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Ta'lim -->

        <!-- My Hajat -->
        <div class="col-lg-7 hajat">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="ml-3">
                        <h4 class="mt-0 header-title">Form My Hajat</h4>
                        <p class="text-muted m-b-30 text-size"></p>
                    </div>

                    <div class="form-group ml-3 mr-3">
                        <label>kategori My Hajat</label>
                        <select class="form-control text-size hajat" name="kategori_myhajat" id="kategori_myhajat">
                            <option selected value="">Pilih Kategori My hajat</option>
                            <option value="Renovasi Rumah">Renovasi Rumah</option>
                            <option value="Sewa bangunan (Rumah / Ruko)">Sewa bangunan (Rumah / Ruko)
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
                                <input type="text" class="form-control text-size renovasi" name="nama_vendor_renovasi"
                                    id="nama_vendor_renovasi" placeholder="CV Aria Santika"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Vendor Renovasi</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input renovasi" type="radio" name="jenis_vendor_renovasi"
                                    id="jenis_vendor_renovasi" value="Perorangan">
                                <label class="form-check-label">
                                    Perorangan
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input renovasi" type="radio" name="jenis_vendor_renovasi"
                                    id="jenis_vendor_renovasi" value="Badan Usaha">
                                <label class="form-check-label">
                                    Badan Usaha
                                </label>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Pekerjaan</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input renovasi" type="radio" name="jenis_pekerjaan"
                                    id="jenis_pekerjaan" value="Borongan">
                                <label class="form-check-label">
                                    Borongan
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input renovasi" type="radio" name="jenis_pekerjaan"
                                    id="jenis_pekerjaan" value="Harian">
                                <label class="form-check-label">
                                    Harian
                                </label>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Bagian bangunan Yang Direnovasi</label>
                            <input type="text" class="form-control text-size renovasi" name="bagian_bangunan"
                                id="bagian_bangunan" placeholder="Bagian bangunan Yang Direnovasi" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Luas Bangunan (Panjang X Lebar)</label>
                            <input type="text" class="form-control text-size renovasi" name="luas_bangunan"
                                id="luas_bangunan" placeholder="Luas Bangunan" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jumlah Tukang / Pekerja</label>
                            <input type="text" class="form-control text-size renovasi" name="jumlah_pekerja"
                                id="jumlah_pekerja" placeholder="Jumlah Tukang / Pekerja" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Estimasi Waktu Pelaksanaan</label>
                            <input type="text" class="form-control text-size renovasi" name="estimasi_waktu"
                                id="estimasi_waktu" placeholder="Estimasi Waktu Pelaksanaan" />
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nilai Pengajuan Pembiayaan</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only renovasi"
                                    name="nilai_pengajuan_pembiayaan_renovasi" id="nilai_pengajuan_pembiayaan_renovasi"
                                    data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size renovasi" name="informasi_tambahan_renovasi"
                                id="informasi_tambahan_renovasi" cols="30" rows="10"
                                placeholder="isi jika ada informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="sewa">p
                        <div class="ml-3 mr-3 mt-3">
                            <label>Nama Pemilik</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size sewa" name="nama_pemilik"
                                    id="nama_pemilik" placeholder="Nama Pemilik" aria-label="Recipient's username"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Pemilik</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input sewa" type="radio" name="jenis_pemilik"
                                    id="jenis_pemilik" value="Perorangan">
                                <label class="form-check-label">
                                    Perorangan
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input sewa" type="radio" name="jenis_pemilik"
                                    id="jenis_pemilik" value="Bandan Usaha">
                                <label class="form-check-label">
                                    Bandan Usaha
                                </label>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Hubungan Dengan Pemohon</label>
                            <input type="text" class="form-control text-size sewa" name="hubungan_dengan_pemohon"
                                id="hubungan_dengan_pemohon" placeholder="Orang lain / Rekan" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Luas X Panjang</label>
                            <input type="text" class="form-control text-size sewa" name="luas_x_panjang"
                                id="luas_x_panjang" placeholder="Luas X Panjang" />
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Biaya Sewa Pertahun</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only sewa" name="biaya_sewa"
                                    id="biaya_sewa" data-type="currency" placeholder="Biaya Sewa Pertahun"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size sewa" name="informasi_tambahan"
                                id="informasi_tambahan" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="wedding">
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nama Wedding Organizer</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size wedding" name="nama_wo" id="nama_wo"
                                    placeholder="Nama Pemilik" aria-label="Recipient's username"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Wedding Organizer</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input wedding" type="radio" name="jenis_wo" id="jenis_wo"
                                    value="Perorangan">
                                <label class="form-check-label">
                                    Perorangan
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input wedding" type="radio" name="jenis_wo" id="jenis_wo"
                                    value="Bandan Usaha">
                                <label class="form-check-label">
                                    Bandan Usaha
                                </label>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Lama Berdiri</label>
                            <input type="text" class="form-control text-size wedding" name="lama_berdiri_wo"
                                id="lama_berdiri_wo" placeholder="Lama Berdiri" />
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Jumlah biaya Acara</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only wedding"
                                    name="jumlah_biaya" id="jumlah_biaya" data-type="currency"
                                    placeholder="jumlah Biaya" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jumlah Undangan</label>
                            <input type="text" class="form-control text-size wedding" name="jumlah_undangan"
                                id="jumlah_undangan" placeholder="Jumlah Undangan" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Akun Sosial Media WO</label>
                            <input type="text" class="form-control text-size wedding" name="sosial_media_wo"
                                id="sosial_media_wo"
                                placeholder="Contoh : ( facebook : syariahbfi | instagram : @syariahbfi )" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size wedding" name="informasi_tambahan_wo"
                                id="informasi_tambahan" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="usaha">
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nama Franchise</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size usaha" name="nama_franchise"
                                    id="nama_franchise" placeholder="Nama Vendor" aria-label="Recipient's username"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jumlah cabang yang Dimiliki</label>
                            <input type="number" class="form-control text-size number-only usaha" name="jumlah_cabang"
                                id="jumlah_cabang" placeholder="Jumlah cabang" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Franchise</label>
                            <select class="form-control text-size usaha" name="jenis_franchise" id="jenis_franchise">
                                <option selected value="">Pilih Jenis Franchise</option>
                                <option value="Makanan dan Minuman">Makanan dan Minuman</option>
                                <option value="Otomotif">Otomotif</option>
                                <option value="Pendidikan / Pelatihan">Pendidikan / Pelatihan</option>
                                <option value="Hiburan / Hobi">Hiburan / Hobi</option>
                                <option value="Komputer / Teknologi">Komputer / Teknologi</option>
                                <option value="Kesehatan / Kecantikan">Kesehatan / Kecantikan</option>
                                <option value="Retail">Retail</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Tahun Berdiri franchise</label>
                            <input type="text" class="form-control text-size number-only usaha"
                                name="tahun_berdiri_franchise" id="tahun_berdiri_franchise"
                                placeholder="Tahun Berdiri franchise" />
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Harga Franchise</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only usaha"
                                    name="harga_franchise" id="harga_franchise" data-type="currency"
                                    placeholder="Harga Franchise" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jangka Waktu franchise</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input usaha" type="radio" name="jangka_waktu_franchise"
                                    id="jangka_waktu_franchise" value="Selamanya">
                                <label class="form-check-label">
                                    Selamanya
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input usaha" type="radio" name="jangka_waktu_franchise"
                                    id="jangka_waktu_franchise" value="Jangka Tertentu">
                                <label class="form-check-label">
                                    Jangka Tertentu
                                </label>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Akun Sosial Media / Website</label>
                            <input type="text" class="form-control text-size usaha" name="sosial_media_franchise"
                                id="sosial_media_franchise"
                                placeholder="Contoh : ( facebook : syariahbfi | instagram : @syariahbfi )" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size usaha" name="informasi_tambahan_franchise"
                                id="informasi_tambahan_franchise" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="lainnya">
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nama Penyedia Jasa</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size lainnya" name="nama_penyedia_jasa"
                                    id="nama_penyedia_jasa" placeholder="Nama Vendor" aria-label="Recipient's username"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Vendor Renovasi</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input lainnya" type="radio" name="jenis_vendor_renovasi"
                                    id="jenis_vendor_renovasi" value="Perorangan">
                                <label class="form-check-label">
                                    Perorangan
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input lainnya" type="radio" name="jenis_vendor_renovasi"
                                    id="jenis_vendor_renovasi" value="Badan Usaha">
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
                                <input type="text" class="form-control text-size number-only lainnya"
                                    name="nilai_pengajuan_pembiayaan" id="nilai_pengajuan_pembiayaan"
                                    data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size lainnya" name="informasi_tambahan"
                                id="informasi_tambahan" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="form-group mb-0 float-right mt-3 mr-3 web">
                        <!-- <a href="#" class="btn btn-secondary waves-effect waves-light text-size">Batal</a> -->
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Simpan
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- My Hajat -->

        <!-- My Ihram -->
        <div class="col-lg-7 ihram">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="ml-3">
                        <h4 class="mt-0 header-title">Form My Ihram</h4>
                        <p class="text-muted m-b-30 text-size"></p>
                    </div>

                    <div class="form-group ml-3 mr-3">
                        <label>Nama Travel</label>
                        <input type="text" class="form-control text-size ihram" name="nama_travel_ihram"
                            id="nama_travel_ihram" placeholder="Nama Travel" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Nomor KTP</label>
                        <input type="text" class="form-control text-size placement ihram number-only" name="nomor_ktp"
                            id="nomor_ktp" placeholder="Nomor KTP" minlength="16" maxlength="16" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Nama Paket</label>
                        <input type="text" class="form-control text-size ihram" name="nama_paket" id="nama_paket"
                            placeholder="Nama Paket" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Tanggal Keberangkatan</label>
                        <input type="date" class="form-control text-size ihram" name="tanggal_keberangkatan"
                            id="tanggal_keberangkatan" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Link Paket</label>
                        <input type="text" class="form-control text-size ihram" name="link_paket" id="link_paket"
                            placeholder="Link Paket" />
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3 web">
                        <!-- <a href="#"
											class="btn btn-secondary waves-effect waves-light text-size">Batal</a> -->
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Simpan
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- My Ihram -->

        <!-- My Safar -->
        <div class="col-lg-7 safar">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="ml-3">
                        <h4 class="mt-0 header-title">Form My Safar</h4>
                        <p class="text-muted m-b-30 text-size"></p>
                    </div>

                    <div class="form-group ml-3 mr-3">
                        <label>Nama Travel</label>
                        <input type="text" class="form-control text-size safar" name="nama_travel" id="nama_travel"
                            placeholder="Nama Travel" />
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3 web">
                        <!-- <a href="#"
											class="btn btn-secondary waves-effect waves-light text-size">Batal</a> -->
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Safar -->

        <!-- My Faedah -->
        <div class="col-lg-7 faedah">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="ml-3">
                        <h4 class="mt-0 header-title">Form My Faedah</h4>
                        <p class="text-muted m-b-30 text-size"></p>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>kategori My Faedah</label>
                        <select class="form-control text-size faedah" name="kategori_myfaedah" id="kategori_myfaedah">
                            <option selected value="">Pilih Kategori My Faedah</option>
                            <option value="Bahan Matrial bangunan">Bahan Matrial bangunan</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Barang Modal">Barang Modal</option>
                            <option value="Hewan Qurban">Hewan Qurban</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div class="bangunan">
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nama Penyedia Barang</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size bangunan" name="nama_penyedia_barang"
                                    id="nama_penyedia_barang" placeholder="Nama Vendor"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Penyedia Bangunan</label>
                            <select class="form-control text-size bangunan" name="jenis_penyedia_bangunan"
                                id="jenis_penyedia_bangunan">
                                <option selected value="">Pilih Jenis Penyedia Bangunan</option>
                                <option value="Toko / AGEN">Toko / AGEN</option>
                                <option value="Authorized Distributor">Authorized Distributor</option>
                                <option value="Penjual Perorangan">Penjual Perorangan</option>
                                <option value="Supermarket">Supermarket</option>
                            </select>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Tujuan Pembelian Barang</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input bangunan" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Konsumtif">
                                <label class="form-check-label">
                                    Konsumtif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input bangunan" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Produktif">
                                <label class="form-check-label">
                                    Produktif
                                </label>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Lokasi Yang Akan Dibangun / Direnovasi</label>
                            <input type="text" class="form-control text-size bangunan" name="lokasi" id="lokasi"
                                placeholder="Lokasi Yang Akan Dibangun / Direnovasi" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Estimasi Waktu Pelaksanaan</label>
                            <input type="text" class="form-control text-size bangunan" name="estimasi" id="estimasi"
                                placeholder="Estimasi Waktu Pelaksanaan" />
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nilai Pengajuan Pembiayaan</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only bangunan"
                                    name="nilai_pengajuan_pembiayaan" id="nilai_pengajuan_pembiayaan"
                                    data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size bangunan" name="informasi_tambahan"
                                id="informasi_tambahan" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="elektronik">
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nama Penyedia Barang</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size elektronik" name="nama_penyedia_barang"
                                    id="nama_penyedia_barang" placeholder="Nama Vendor"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Penyedia Barang</label>
                            <select class="form-control text-size elektronik" name="jenis_penyedia_barang"
                                id="jenis_penyedia_barang">
                                <option selected value="">Pilih Jenis Penyedia Barang</option>
                                <option value="Toko / AGEN">Toko / AGEN</option>
                                <option value="Authorized Distributor">Authorized Distributor</option>
                                <option value="Penjual Perorangan">Penjual Perorangan</option>
                                <option value="Supermarket">Supermarket</option>
                            </select>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Tujuan Pembelian Barang</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input elektronik" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Konsumtif">
                                <label class="form-check-label">
                                    Konsumtif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input elektronik" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Produktif">
                                <label class="form-check-label">
                                    Produktif
                                </label>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Lama Usaha</label>
                            <input type="text" class="form-control text-size elektronik" name="lama_usaha"
                                id="lama_usaha" placeholder="Lama Usaha" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Barang Elektronik yang akan dibeli</label>
                            <select class="form-control text-size elektronik" name="jenis_barang_elektronik"
                                id="jenis_barang_elektronik">
                                <option selected value="">Pilih Jenis Penyedia Barang</option>
                                <option value="TV">TV</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Kulkas">Kulkas</option>
                                <option value="Handphone">Handphone</option>
                                <option value="Mesin Cuci">Mesin Cuci</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <input type="text" class="form-control text-size" name="other_jenis_barang_elektronik"
                                id="other_jenis_barang_elektronik"
                                placeholder="Mauskan Jenis Elektronik yang akan dibeli" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jumlah Barang</label>
                            <input type="text" class="form-control text-size elektronik" name="jumlah_barang"
                                id="jumlah_barang" placeholder="Jumlah Barang" />
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nilai Pengajuan Pembiayaan</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only elektronik"
                                    name="nilai_pengajuan_pembiayaan" id="nilai_pengajuan_pembiayaan"
                                    data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size elektronik" name="informasi_tambahan"
                                id="informasi_tambahan" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="barang_modal">
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nama Penyedia Barang</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size barang_modal"
                                    name="nama_penyedia_barang" id="nama_penyedia_barang" placeholder="Nama Vendor"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Penyedia Barang</label>
                            <select class="form-control text-size barang_modal" name="jenis_penyedia_barang"
                                id="jenis_penyedia_barang">
                                <option selected value="">Pilih Jenis Penyedia Barang</option>
                                <option value="Toko / AGEN">Toko / AGEN</option>
                                <option value="Authorized Distributor">Authorized Distributor</option>
                                <option value="Penjual Perorangan">Penjual Perorangan</option>
                                <option value="Supermarket">Supermarket</option>
                            </select>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Barang</label>
                            <input type="text" class="form-control text-size barang_modal" name="jenis_barang"
                                id="jenis_barang" placeholder="Jenis Barang" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Tujuan Pembelian Barang</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input barang_modal" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Konsumtif">
                                <label class="form-check-label">
                                    Konsumtif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input barang_modal" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Produktif">
                                <label class="form-check-label">
                                    Produktif
                                </label>
                            </div>
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nilai Pengajuan Pembiayaan</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only barang_modal"
                                    name="nilai_pengajuan_pembiayaan" id="nilai_pengajuan_pembiayaan"
                                    data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size barang_modal" name="informasi_tambahan"
                                id="informasi_tambahan" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="qurban">
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nama Penyedia Barang</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size qurban" name="nama_penyedia_barang"
                                    id="nama_penyedia_barang" placeholder="Nama Vendor"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Penyedia Barang</label>
                            <select class="form-control text-size qurban" name="jenis_penyedia_barang"
                                id="jenis_penyedia_barang">
                                <option selected value="">Pilih Jenis Penyedia Barang</option>
                                <option value="Toko / AGEN">Toko / AGEN</option>
                                <option value="Authorized Distributor">Authorized Distributor</option>
                                <option value="Penjual Perorangan">Penjual Perorangan</option>
                                <option value="Supermarket">Supermarket</option>
                            </select>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Lama Usaha</label>
                            <input type="text" class="form-control text-size qurban" name="lama_usaha" id="lama_usaha"
                                placeholder="Lama Usaha" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Tujuan Pembelian Barang</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input qurban" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Konsumtif">
                                <label class="form-check-label">
                                    Konsumtif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input qurban" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Produktif">
                                <label class="form-check-label">
                                    Produktif
                                </label>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Hewan</label>
                            <input type="text" class="form-control text-size qurban" name="jenis_hewan" id="jenis_hewan"
                                placeholder="Jenis Hewan" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>jumlah Hewan</label>
                            <input type="number" class="form-control text-size number_only qurban" name="jumlah_hewan"
                                id="jumlah_hewan" placeholder="jumlah Hewan" />
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nilai Pengajuan Pembiayaan</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only qurban"
                                    name="nilai_pengajuan_pembiayaan" id="nilai_pengajuan_pembiayaan"
                                    data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size qurban" name="informasi_tambahan"
                                id="informasi_tambahan" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="other">
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nama Penyedia Barang</label>
                            <div class="input-group">
                                <input type="text" class="form-control text-size other" name="nama_penyedia_barang"
                                    id="nama_penyedia_barang" placeholder="Nama Vendor"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-danger text-size" type="button" id="reset">hapus</button>
                                    <button class="btn btn-primary text-size" type="button" id="button-addon2"
                                        data-toggle="modal" data-target=".bd-example-modal-xl">Cari</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Jenis Penyedia Barang</label>
                            <select class="form-control text-size other" name="jenis_penyedia_barang"
                                id="jenis_penyedia_barang">
                                <option selected value="">Pilih Jenis Penyedia Barang</option>
                                <option value="Toko / AGEN">Toko / AGEN</option>
                                <option value="Authorized Distributor">Authorized Distributor</option>
                                <option value="Penjual Perorangan">Penjual Perorangan</option>
                                <option value="Supermarket">Supermarket</option>
                            </select>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Lama Usaha</label>
                            <input type="text" class="form-control text-size other" name="lama_usaha" id="lama_usaha"
                                placeholder="Lama Usaha" />
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Tujuan Pembelian Barang</label><br>
                            <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input other" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Konsumtif">
                                <label class="form-check-label">
                                    Konsumtif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input other" type="radio" name="tujuan_pembelian_barang"
                                    id="tujuan_pembelian_barang" value="Produktif">
                                <label class="form-check-label">
                                    Produktif
                                </label>
                            </div>
                        </div>
                        <div class="ml-3 mr-3 mb-3">
                            <label>Nilai Pengajuan Pembiayaan</label>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size number-only other"
                                    name="nilai_pengajuan_pembiayaan" id="nilai_pengajuan_pembiayaan"
                                    data-type="currency" placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                    aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="form-group ml-3 mr-3">
                            <label>Informasi Tambahan</label>
                            <textarea class="form-control text-size other" name="informasi_tambahan"
                                id="informasi_tambahan" cols="30" rows="10"
                                placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>

                    </div>

                    <div class="form-group mb-0 float-right mt-3 mr-3 web">
                        <!-- <a href="#" class="btn btn-secondary waves-effect waves-light text-size">Batal</a> -->
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Faedah -->

        <!-- My cars -->
        <div class="col-lg-7 cars">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="ml-3">
                        <h4 class="mt-0 header-title">Form My cars</h4>
                        <p class="text-muted m-b-30 text-size"></p>
                    </div>

                    <div class="form-group ml-3 mr-3">
                        <label>Nama Penyedia Barang</label>
                        <input type="text" class="form-control text-size cars" name="nama_penyedia_mycars"
                            id="nama_penyedia_mycars" placeholder="Nama Penyedia Barang" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Jenis Penyedia Barang</label><br>
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input cars" type="radio" name="jenis_penyedia_mycars"
                                id="jenis_penyedia_mycars" value="Authorized">
                            <label class="form-check-label">
                                Authorized
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input cars" type="radio" name="jenis_penyedia_mycars"
                                id="jenis_penyedia_mycars" value="Non_Authorized">
                            <label class="form-check-label">
                                Non Authorized
                            </label>
                        </div>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Kategori Penyedia Barang Detail</label>
                        <select class="form-control text-size cars" name="kategori_penyedia_mycars" id="input_produk">
                            <option selected value="">Pilih Kategori Penyedia Barang Detail</option>
                            <option value="Dealer ATPM">Dealer ATPM</option>
                            <option value="Penjual Perorangan">Penjual Perorangan</option>
                            <option value="Pemilik Langsung">Pemilik Langsung</option>
                            <option value="Showroom Tanpa Izin Usaha">Showroom Tanpa Izin Usaha</option>
                            <option value="Showroom Dengan Izin Usaha">Showroom Dengan Izin Usaha
                            </option>
                        </select>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Kategori Aset</label><br>
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input cars" type="radio" name="kategori_aset" id="kategori_aset"
                                value="New Car">
                            <label class="form-check-label">
                                New Car
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input cars" type="radio" name="kategori_aset" id="kategori_aset"
                                value="Used Car">
                            <label class="form-check-label">
                                Used Car
                            </label>
                        </div>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Lama Usaha</label>
                        <input type="text" class="form-control text-size cars" name="lama_usaha_mycars"
                            id="lama_usaha_mycars" placeholder="Lama Usaha" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Kepemilikan Tempat Usaha</label><br>
                        <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input cars" type="radio" name="kepemilikan_tempat"
                                id="kepemilikan_tempat" value="Milik Sendiri">
                            <label class="form-check-label">
                                Milik Sendiri
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input cars" type="radio" name="kepemilikan_tempat"
                                id="kepemilikan_tempat" value="Sewa">
                            <label class="form-check-label">
                                Sewa
                            </label>
                        </div>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Jumlah Stok Unit</label>
                        <input type="number" class="form-control text-size cars number-only" name="jumlah_stok"
                            id="jumlah_stok" placeholder="Jumlah Stok Unit" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Tipe Kendaraan</label>
                        <input type="text" class="form-control text-size cars" name="tipe_kendaraan" id="tipe_kendaraan"
                            placeholder="Tipe kendaraan" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Tahun</label>
                        <input type="date" class="form-control text-size cars placement" name="tahun" id="tahun"
                            minlength="4" maxlength="4" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Warna kendaraan</label>
                        <input type="text" class="form-control text-size cars" name="warna_kendaraan"
                            id="warna_kendaraan" placeholder="Warna kendaraan" />
                    </div>
                    <div class="ml-3 mr-3 mb-3">
                        <label>Nilai Pengajuan Pembiayaan</label>
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                            </div>
                            <input type="text" class="form-control text-size cars number-only"
                                name="nilai_pembiayaan_mycars" id="nilai_pembiayaan_mycars" data-type="currency"
                                placeholder="Nilai Pengajuan Pembiayaan" aria-label="Username"
                                aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Informasi Tambahan</label>
                        <textarea class="form-control text-size cars" name="informasi_tambahan_mycars"
                            id="informasi_tambahan_mycars" cols="30" rows="10"
                            placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3 web">
                        <!-- <a href="#" class="btn btn-secondary waves-effect waves-light text-size">Batal</a> -->
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Simpan
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- My cars -->

        <!-- Input Paket -->
        <div class="col-lg-7 paket">
            <div class="card m-b-20">
                <div class="card-body">
                    <div class="ml-3">
                        <h4 class="mt-0 header-title">Form Input Paket</h4>
                        <p class="text-muted m-b-30 text-size"></p>
                    </div>

                    <div class="form-group ml-3 mr-3">
                        <label>Nama Travel</label>
                        <input type="text" class="form-control text-size paket" name="nama_travel" id="nama_travel"
                            placeholder="Nama Travel" />
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Produk</label>
                        <select class="form-control text-size paket" name="input_produk" id="input_produk">
                            <option selected value="">Pilih Input Produk</option>
                            <option value="My Ta'lim">My Ta'lim</option>
                            <option value="My Safar">My Safar</option>
                            <option value="My Ihram">My Ihram</option>
                        </select>
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3 web">
                        <!-- <a href="#"
											class="btn btn-secondary waves-effect waves-light text-size">Batal</a> -->
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Simpan
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Input Paket -->

        <!-- Upload -->
        <div class="col-lg-5 upload">
            <div class="card m-b-20">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Data Lampiran</h4>
                    <div class="form-group element text-size">
                        <label>Lampirkan Data</label><br>
                        <input type="file" name="tambah_lampiran[]" id="upload_file1">
                    </div>
                    <hr>
                    <div id="moreImageUpload"></div>
                    <div class="clear"></div>
                    <div id="moreImageUploadLink" class="float-right mt-3">
                        <a class="btn btn-secondary mr-1" href="javascript:void(0);" id="attachMore">tambah Form
                            lampiran</a>
                        <button class="btn btn-primary mobile">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Upload -->

    </div>
</form>

<script>
// input produk
$('.talim, .hajat, .ihram, .safar, .faedah, .cars, .paket, .upload').hide();
var route = $('#form_input_produk').attr('action');
$('#input_produk').change(function() {
    if ($('#input_produk').val() == "My Ta'lim") {
        $('.talim, .upload').show();
        $('.talim').attr('required', 'required');
        $('.hajat, .ihram, .safar, .faedah, .cars, .paket').removeAttr('required', ' ');
        $('.hajat, .ihram, .safar, .faedah, .cars, .paket').val("");
        $('.hajat, .ihram, .safar, .faedah, .cars, .paket').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_talim/save');
    } else if ($('#input_produk').val() == 'My Hajat') {
        $('.hajat, .upload').show();
        $('.hajat').attr('required', 'required');
        $('.talim, .ihram, .safar, .faedah, .cars, .paket').removeAttr('required', ' ');
        $('.talim, .ihram, .safar, .faedah, .cars, .paket').val("");
        $('.talim, .ihram, .safar, .faedah, .cars, .paket').hide();
        // $('#form_input_produk').attr('action', route + 'ps_my');
    } else if ($('#input_produk').val() == 'My Ihram') {
        $('.ihram, .upload').show();
        $('.ihram').attr('required', 'required');
        $('.talim, .hajat, .safar, .faedah, .cars, .paket').removeAttr('required', ' ');
        $('.talim, .hajat, .safar, .faedah, .cars, .paket').val("");
        $('.talim, .hajat, .safar, .faedah, .cars, .paket').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_ihram/save');
    } else if ($('#input_produk').val() == 'My Safar') {
        $('.safar, .upload').show();
        $('.safar').attr('required', 'required');
        $('.talim, .hajat, .ihram, .faedah, .cars, .paket').removeAttr('required', ' ');
        $('.talim, .hajat, .ihram, .faedah, .cars, .paket').val("");
        $('.talim, .hajat, .ihram, .faedah, .cars, .paket').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_safar/save');
    } else if ($('#input_produk').val() == 'My Faedah') {
        $('.faedah, .upload').show();
        $('.faedah').attr('required', 'required');
        $('.talim, .hajat, .ihram, .safar, .cars, .paket').removeAttr('required', ' ');
        $('.talim, .hajat, .ihram, .safar, .cars, .paket').val("");
        $('.talim, .hajat, .ihram, .safar, .cars, .paket').hide();
        // $('#form_input_produk').attr('action', route + 'ps_my_talim');
    } else if ($('#input_produk').val() == 'My Cars') {
        $('.cars, .upload').show();
        $('.cars').attr('required', 'required');
        $('.talim, .hajat, .ihram, .safar, .faedah, .paket').removeAttr('required', ' ');
        $('.talim, .hajat, .ihram, .safar, .faedah, .paket').val("");
        $('.talim, .hajat, .ihram, .safar, .faedah, .paket').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_cars/save');
    } else if ($('#input_produk').val() == 'Input Paket') {
        $('.paket, .upload').show();
        $('.paket').attr('required', 'required');
        $('.talim, .hajat, .ihram, .safar, .faedah, .cars').removeAttr('required', ' ');
        $('.talim, .hajat, .ihram, .safar, .faedah, .cars').val("");
        $('.talim, .hajat, .ihram, .safar, .faedah, .cars').hide();
        $('#form_input_produk').attr('action', route + 'ps_input_paket/save');
    } else {
        $('.talim, .hajat, .ihram, .safar, .faedah, .cars, .paket, .upload').hide();
        $('.talim, .hajat, .ihram, .safar, .faedah, .cars, .paket, .upload').val("");
    }

})
// input produk

// my hajat
$('.renovasi, .sewa, .wedding, .usaha, .lainnya').hide();

$('#kategori_myhajat').change(function() {
    if ($('#kategori_myhajat').val() == "Renovasi Rumah") {
        $('.renovasi').show();
        $('.renovasi').attr('required', 'required');
        $('.sewa, .wedding, .usaha, .lainnya').removeAttr('required', ' ');
        $('.sewa, .wedding, .usaha, .lainnya').val("");
        $('.sewa, .wedding, .usaha, .lainnya').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_hajat_renovasi/save');
    } else if ($('#kategori_myhajat').val() == 'Sewa bangunan (Rumah / Ruko)') {
        $('.sewa').show();
        $(' .sewa').attr('required', 'required');
        $('.renovasi, .wedding, .usaha, .lainnya').removeAttr('required', ' ');
        $('.renovasi, .wedding, .usaha, .lainnya').val("");
        $('.renovasi, .wedding, .usaha, .lainnya').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_hajat_sewa/save');
    } else if ($('#kategori_myhajat').val() == 'Wedding Organizer') {
        $('.wedding').show();
        $('.wedding').attr('required', 'required');
        $('.renovasi, .sewa, .usaha, .lainnya').removeAttr('required', ' ');
        $('.renovasi, .sewa, .usaha, .lainnya').val("");
        $('.renovasi, .sewa, .usaha, .lainnya').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_hajat_wedding/save');
    } else if ($('#kategori_myhajat').val() == 'Usaha franchise') {
        $('.usaha').show();
        $(' .usaha').attr('required', 'required');
        $('.renovasi, .sewa, .wedding, .lainnya').removeAttr('required', ' ');
        $('.renovasi, .sewa, .wedding, .lainnya').val("");
        $('.renovasi, .sewa, .wedding, .lainnya').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_hajat_franchise/save');
    } else if ($('#kategori_myhajat').val() == 'Lainnya') {
        $('.lainnya').show();
        $(' .lainnya').attr('required', 'required');
        $('.renovasi, .sewa, .wedding, .usaha').removeAttr('required', ' ');
        $('.renovasi, .sewa, .wedding, .usaha').val("");
        $('.renovasi, .sewa, .wedding, .usaha').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_hajat_lainnya/save');
    } else {
        $('.renovasi, .sewa, .wedding, .usaha, .lainnya').hide();
        $('.renovasi, .sewa, .wedding, .usaha, .lainnya').val("");
    }

})
// my hajat

// my faedah
$('.bangunan, .elektronik, .barang_modal, .qurban, .other').hide();

$('#kategori_myfaedah').change(function() {
    if ($('#kategori_myfaedah').val() == "Bahan Matrial bangunan") {
        $('.bangunan').show();
        $('.bangunan').attr('required', 'required');
        $('.elektronik, .barang_modal, .qurban, .other').removeAttr('required', ' ');
        $('.elektronik, .barang_modal, .qurban, .other').val("");
        $('.elektronik, .barang_modal, .qurban, .other').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_faedah_bangunan/save');
    } else if ($('#kategori_myfaedah').val() == 'Elektronik') {
        $('.elektronik').show();
        $('.elektronik').attr('required', 'required');
        $('.bangunan, .barang_modal, .qurban, .other').removeAttr('required', ' ');
        $('.bangunan, .barang_modal, .qurban, .other').val("");
        $('.bangunan, .barang_modal, .qurban, .other').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_faedah_elektronik/save');
    } else if ($('#kategori_myfaedah').val() == 'Barang Modal') {
        $('.barang_modal').show();
        $('.barang_modal').attr('required', 'required');
        $('.bangunan, .elektronik, .qurban, .other').removeAttr('required', ' ');
        $('.bangunan, .elektronik, .qurban, .other').val("");
        $('.bangunan, .elektronik, .qurban, .other').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_faedah_modal/save');
    } else if ($('#kategori_myfaedah').val() == 'Hewan Qurban') {
        $('.qurban').show();
        $('.qurban').attr('required', 'required');
        $('.bangunan, .elektronik, .barang_modal, .other').removeAttr('required', ' ');
        $('.bangunan, .elektronik, .barang_modal, .other').val("");
        $('.bangunan, .elektronik, .barang_modal, .other').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_faedah_qurban/save');
    } else if ($('#kategori_myfaedah').val() == 'Lainnya') {
        $('.other').show();
        $('.other').attr('required', 'required');
        $('.bangunan, .elektronik, .barang_modal, .qurban').removeAttr('required', ' ');
        $('.bangunan, .elektronik, .barang_modal, .qurban').val("");
        $('.bangunan, .elektronik, .barang_modal, .qurban').hide();
        $('#form_input_produk').attr('action', route + 'ps_my_faedah_lainnya/save');
    } else {
        $('.bangunan, .elektronik, .barang_modal, .qurban, .other').hide();
        $('.bangunan, .elektronik, .barang_modal, .qurban, .other').val("");
    }
})

$('#other_jenis_barang_elektronik').hide();

$('#jenis_barang_elektronik').change(function() {
    if ($('#jenis_barang_elektronik').val() == "Others") {
        $('#other_jenis_barang_elektronik').show();
        $('#other_jenis_barang_elektronik').attr('required', 'required');
        $('').val("");
    } else {
        $('#other_jenis_barang_elektronik').hide();
        $('#other_jenis_barang_elektronik').removeAttr('required', ' ');
        $('').val("");
    }
})
// my faedah
</script>