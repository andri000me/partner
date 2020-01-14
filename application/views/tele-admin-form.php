<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Tele Admin Form</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Assignment</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Lead</a></li>
                <li class="breadcrumb-item active">Tele Admin Form</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Tele Admin Form</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner yang berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar memudahkan anda dalam memaintain partner anda.</p>

                <form class="" action="#">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" required placeholder="Ibrahim Ahmad" />
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Nomor Telepon / Whatsapp</label>
                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" required placeholder="0811977500" maxlength="15" />
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota" id="kota" required placeholder="Jakarta" />
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Cabang</label>
                                <input type="text" class="form-control" name="cabang" id="cabang" required placeholder="Kali jodo" />
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Produk</label>
                                <select class="form-control" name="produk" id="produk">
                                    <option selected>Kategori Produk</option>
                                    <option value="My Ihram">My Ihram</option>
                                    <option value="My Safar">My Safar</option>
                                    <option value="My Talin">My Talin</option>
                                    <option value="My Hajat">My Hajat</option>
                                    <option value="My Faedah">My Faedah</option>
                                    <option value="My CarS">My CarS</option>
                                </select>
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Detail Produk</label>
                                <input type="text" class="form-control" name="detail_produk" id="detail_produk" required placeholder="Detail produk" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="ml-3">Nilai Pembiayaan</label>
                            <div class="input-group flex-nowrap ml-3 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size mr-4 number-only" name="nilai_pembiayaan" id="nilai_pembiayaan" data-type="currency" required placeholder="3,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Assign To</label>
                                <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                    <option selected disabled value="">Pilih Cabang</option>
                                    <!-- <?php foreach ($branches->result() as $branch) { ?>
                                        <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                        <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                    <?php } ?> -->
                                </select>
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option selected>Pilih Source Aplikasi</option>
                                    <option value="Tidak tertarik">Tidak tertarik</option>
                                    <option value="Masih Pikir - pikir">Masih Pikir - pikir</option>
                                    <option value="Prospect / pengajuan">Prospect / Pengajuan</option>
                                    <option value="Tidak Valid">Tidak Valid</option>
                                    <option value="Tidak Memenuhi Klasifikasi">Tidak Memenuhi Klasifikasi</option>
                                    <option value="SNI">SNI</option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label class="text-size">Catatan</label>
                                <textarea class="form-control text-size" name="catatan" id="catatan" cols="30" rows="10" value="<?= set_value('catatan') ?>" placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0 float-right mt-3 mr-3">
                                <div>
                                    <a href="leads.html" class="btn btn-secondary waves-effect waves-light">Batal</a>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light ml-1">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                </divcl>

            </div>
        </div>
    </div>

</div>