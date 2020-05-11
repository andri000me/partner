<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box ml-3 mr-3">
            <h4 class="page-title">Tele Admin Form</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Assignment</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('assignment/leads') ?>">Lead Database</a></li>
                <li class="breadcrumb-item active">Assignment Leads Form</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Tele Admin Form</h4>
                <p class="text-muted m-b-30 text-size">Lorem Ipsum Dolor Sit Amet.</p>
                <?= $this->session->flashdata("berhasil_simpan"); ?>
                <form action="<?= base_url('leads_assignment/save') ?>" method="post">
                    <!-- ID User -->
                    <input type="hidden" name="id_user" id="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                    <!-- ID Cabang -->
                    <input type="hidden" name="id_branch" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3 text-size">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= set_value('nama') ?>" required placeholder="Ibrahim Ahmad" />
                            </div>
                            <div class="form-group mr-3 ml-3 text-size">
                                <label>Nomor Telepon / Whatsapp</label>
                                <input type="text" class="form-control placement <?= form_error('telepon') ? 'is-invalid' : '' ?>" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" value="<?= set_value('telepon') ?>" required placeholder="0811977500" maxlength="15" />
                                <?= form_error('telepon') ?>
                            </div>
                            <div class="form-group mr-3 ml-3 text-size">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota" id="kota" value="<?= set_value('kota') ?>" required placeholder="Jakarta" />
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Produk</label>
                                <select class="form-control text-size" name="produk" id="produk">
                                    <option selected>Kategori Produk</option>
                                    <option <?= set_value('produk') == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                    <option <?= set_value('produk') == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                    <option <?= set_value('produk') == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                    <option <?= set_value('produk') == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                    <option <?= set_value('produk') == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                    <option <?= set_value('produk') == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                </select>
                            </div>
                            <div class="form-group mr-3 ml-3 text-size">
                                <label>Detail Produk</label>
                                <input type="text" class="form-control" name="detail_produk" id="detail_produk" value="<?= set_value('detail_produk') ?>" required placeholder="Detail produk" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="ml-3 text-size">Nilai Pembiayaan</label>
                            <div class="input-group flex-nowrap ml-3 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size mr-4 number-only" name="nilai_pembiayaan" id="nilai_pembiayaan" data-type="currency" value="<?= set_value('nilai_pembiayaan') ?>" required placeholder="3,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="form-group ml-3 mr-3 text-size">
                                <label>Assign To</label>
                                <select class="form-control text-size" name="assign_to" id="assign_to" required>
                                    <option selected disabled value="">Pilih Cabang</option>
                                    <?php foreach ($branches->result() as $branch) { ?>
                                        <option <?= set_value('assign_to') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang == 'Head Office' ? 'Head Office (Tele)' : $branch->nama_cabang ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group mr-3 ml-3 text-size">
                                <label>Status</label>
                                <select class="form-control" name="status" id="status" disabled>
                                    <option selected>Pilih Status</option>
                                    <option <?= set_value('status') == 'Tidak tertarik' ? 'selected' : '' ?> value="Tidak tertarik">Tidak tertarik</option>
                                    <option <?= set_value('status') == 'Masih Pikir-pikir' ? 'selected' : '' ?> value="Masih Pikir-pikir">Masih Pikir-pikir</option>
                                    <option <?= set_value('status') == 'Prospect / Pengajuan' ? 'selected' : '' ?> value="Prospect / Pengajuan">Prospect / Pengajuan</option>
                                    <option <?= set_value('status') == 'Tidak Valid' ? 'selected' : '' ?> value="Tidak Valid">Tidak Valid</option>
                                    <option <?= set_value('status') == 'Tidak Memenuhi Klasifikasi' ? 'selected' : '' ?> value="Tidak Memenuhi Klasifikasi">Tidak Memenuhi Klasifikasi</option>
                                </select>
                            </div>
                            <div class="form-group ml-3 mr-3 text-size">
                                <label class="text-size">Catatan</label>
                                <textarea class="form-control text-size" name="catatan" id="catatan" cols="30" rows="10" value="<?= set_value('catatan') ?>" disabled placeholder="isi jika anda informasi tambahan" style="height:110px;"><?= set_value('catatan') ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0 float-right mt-3 mr-3 text-size">
                                <div>
                                    <a href="<?= base_url('assignment/leads') ?>" class="btn btn-secondary waves-effect waves-light">Batal</a>
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