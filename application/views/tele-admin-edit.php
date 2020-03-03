<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Tele Admin Form</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Assignment</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('assignment/leads') ?>">Lead Database</a></li>
                <li class="breadcrumb-item active">Assignment Leads Edit</li>
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
                <form action="<?= base_url('leads_assignment/update') ?>" method="post">
                    <!-- ID User -->
                    <input type="hidden" name="id_user" id="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                    <!-- ID Cabang -->
                    <input type="hidden" name="id_branch" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <!-- ID Leads Assignment -->
                    <input type="hidden" name="id_leads_assignment" id="id_leads_assignment" value="<?= $data->id_leads_assignment ?>">
                    <!-- Redirect -->
                    <input type="hidden" name="redirect" value="<?= uri_string() ?>">

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $data->nama ?>" required placeholder="Ibrahim Ahmad" <?= $data->assign_to == $this->fungsi->user_login()->id_branch ? 'readonly' : '' ?> />
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Nomor Telepon / Whatsapp</label>
                                <input type="text" class="form-control placement <?= form_error('telepon') ? 'is-invalid' : '' ?>" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0811977500" maxlength="15" <?= $data->assign_to == $this->fungsi->user_login()->id_branch ? 'readonly' : '' ?> />
                                <?= form_error('telepon') ?>
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota" id="kota" value="<?= $data->kota ?>" required placeholder="Jakarta" <?= $data->assign_to == $this->fungsi->user_login()->id_branch ? 'readonly' : '' ?> />
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Produk</label>
                                <select class="form-control" name="produk" id="produk" <?= $data->assign_to == $this->fungsi->user_login()->id_branch ? 'disabled' : '' ?>>
                                    <option selected>Kategori Prouk</option>
                                    <option <?= $data->produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                    <option <?= $data->produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                    <option <?= $data->produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                    <option <?= $data->produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                    <option <?= $data->produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                    <option <?= $data->produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                </select>
                                <input type="hidden" name="produk" value="<?= $data->produk ?>" <?= $data->assign_to != $this->fungsi->user_login()->id_branch ? 'disabled' : '' ?>>
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Detail Produk</label>
                                <input type="text" class="form-control" name="detail_produk" id="detail_produk" value="<?= $data->detail_produk ?>" required <?= $data->assign_to == $this->fungsi->user_login()->id_branch ? 'readonly' : '' ?> placeholder="Detail produk" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="ml-3">Nilai Pembiayaan</label>
                            <div class="input-group flex-nowrap ml-3 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                </div>
                                <input type="text" class="form-control text-size mr-4 number-only" name="nilai_pembiayaan" id="nilai_pembiayaan" data-type="currency" value="<?= $data->nilai_pembiayaan ?>" required <?= $data->assign_to == $this->fungsi->user_login()->id_branch ? 'readonly' : '' ?> placeholder="3,000,000" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Assign To</label>
                                <select class="form-control text-size" name="assign_to" id="assign_to" <?= $this->fungsi->user_login()->level < 4 ? 'disabled' : '' ?>>
                                    <option selected disabled value="">Pilih Cabang</option>
                                    <?php foreach ($branches->result() as $branch) { ?>
                                        <option <?= $data->assign_to == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang == 'Head Office' ? 'Head Office (Tele)' : $branch->nama_cabang ?></option>
                                    <?php } ?>
                                </select>
                                <input type="hidden" name="assign_to" value="<?= $data->assign_to ?>" <?= $this->fungsi->user_login()->level >= 4 ? 'disabled' : '' ?>>
                            </div>
                            <div class="form-group mr-3 ml-3">
                                <label>Status</label>
                                <select class="form-control" name="status" id="status" <?= $data->assign_to != $this->fungsi->user_login()->id_branch ? 'disabled' : '' ?>>
                                    <option selected>Pilih Status</option>
                                    <option <?= $data->status == 'Tidak tertarik' ? 'selected' : '' ?> value="Tidak tertarik">Tidak tertarik</option>
                                    <option <?= $data->status == 'Masih Pikir-pikir' ? 'selected' : '' ?> value="Masih Pikir-pikir">Masih Pikir-pikir</option>
                                    <option <?= $data->status == 'Prospect / Pengajuan' ? 'selected' : '' ?> value="Prospect / Pengajuan">Prospect / Pengajuan</option>
                                    <option <?= $data->status == 'Tidak Valid' ? 'selected' : '' ?> value="Tidak Valid">Tidak Valid</option>
                                    <option <?= $data->status == 'Tidak Memenuhi Klasifikasi' ? 'selected' : '' ?> value="Tidak Memenuhi Klasifikasi">Tidak Memenuhi Klasifikasi</option>
                                </select>
                                <input type="hidden" name="status" value="<?= $data->assign_to ?>" <?= $data->assign_to == $this->fungsi->user_login()->id_branch ? 'disabled' : '' ?>>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label class="text-size">Catatan</label>
                                <textarea class="form-control text-size" name="catatan" id="catatan" cols="30" rows="10" value="<?= $data->catatan ?>" <?= $data->assign_to != $this->fungsi->user_login()->id_branch ? 'readonly' : '' ?> placeholder="isi jika anda informasi tambahan" style="height:110px;"><?= $data->catatan ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0 float-right mt-3 mr-3">
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