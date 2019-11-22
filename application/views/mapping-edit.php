<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Mapping Lokasi Partner</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Mapping Lokasi Partner</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card m-b-20">

            <div class="card-body">

                <h4 class="mt-0 header-title">Mapping Lokasi Partner</h4>
                <p class="text-muted m-b-30">Gunakan form ini untuk mendata calon partner yang berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar memudahkan anda dalam memaintain partner anda.</p>

                <form class="" method="post" action="<?= base_url('Mapping_partner/update') ?>">
                    <!-- Form inputan hidden untuk id user, untuk mengetahui user mana yg input data -->
                    <input type="hidden" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                    <!-- Form inputan hidden untuk id cabang, untuk mengetahui cabang mana yg input data -->
                    <input type="hidden" name="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <!-- Form inputan hidden untuk id mapping -->
                    <input type="hidden" name="id_mapping" value="<?= $data->id_mapping ?>">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama Usaha</label>
                            <input type="text" class="form-control <?= form_error('nama_usaha') ? 'is-invalid' : '' ?>" name="nama_usaha" id="nama_usaha" value="<?= $data->nama_usaha ?>" required value="<?= $data->nama_usaha ?>" placeholder="CV Aria Santiika" />
                            <?= form_error('nama_usaha'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" required value="<?= $data->email ?>" placeholder="Aisha@bfisyariah.id" />
                                <?= form_error('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Bidang Usaha</label>
                            <input type="text" class="form-control <?= form_error('bidang_usaha') ? 'is-invalid' : '' ?>" name="bidang_usaha" id="bidang_usaha" value="<?= $data->bidang_usaha ?>" required value="<?= $data->bidang_usaha ?>" placeholder="Garmen / Percetakan / Lainnya" />
                            <?= form_error('bidang_usaha'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kategori Produk</label>
                            <select class="form-control <?= form_error('kategori_produk') ? 'is-invalid' : '' ?>" name="kategori_produk" id="kategori_produk" required>
                                <option selected value="">Pilih Kategori Produk</option>
                                <option <?= $data->kategori_produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                <option <?= $data->kategori_produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                <option <?= $data->kategori_produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                <option <?= $data->kategori_produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                <option <?= $data->kategori_produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                <option <?= $data->kategori_produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                            </select>
                            <?= form_error('kategori_produk'); ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Alamat / Lokasi</label>
                            <input type="phone" class="form-control <?= form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" id="alamat" required value="<?= $data->alamat ?>" placeholder="Jalan Perjalanan Panjang No.22" />
                            <?= form_error('alamat'); ?>
                            <div class="form-group mt-3">
                                <label>Nomor Telepon</label>
                                <input type="text" class="form-control placement <?= form_error('telepon') ? 'is-invalid' : '' ?>" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" required value="<?= $data->telepon ?>" placeholder="EG 0811977500" maxlength="15" />
                                <?= form_error('telepon'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Catatan</label>
                            <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:110px;"><?= $data->catatan ?></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right">
                        <div>
                            <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<!-- script -->
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
            return true;
        }
    }
</script>
<!-- script -->