<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Mapping Lokasi Partner</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="#">Kerjasama</a></li>
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

                <form method="post" class="" action="<?= base_url('Partner/save_mapping') ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama Usaha</label>
                            <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" required value="<?= set_value('nama_usaha') ?>" placeholder="Nama Usaha" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" parsley-type="email" required value="<?= set_value('email') ?>" placeholder=" E-Mail" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Bidang Usaha</label>
                            <!-- <input type="text" class="form-control" name="bidang_usaha" id="bidang_usaha" required placeholder="Bidang Usaha" /> -->
                            <select class="form-control" name="bidang_usaha" id="bidang_usaha" required>
                                <option selected disabled value="">- Pilih Bidang Usaha -</option>
                                <option <?= set_value('bidang_usaha') == 'Travel' ? 'selected' : '' ?> value="Travel">Travel</option>
                                <option <?= set_value('bidang_usaha') == 'Wedding' ? 'selected' : '' ?> value="Wedding">Wedding</option>
                                <option <?= set_value('bidang_usaha') == 'Renovasi & Interior' ? 'selected' : '' ?> value="Renovasi & Interior">Renovasi & Interior</option>
                                <option <?= set_value('bidang_usaha') == 'Mobil' ? 'selected' : '' ?> value="Mobil">Mobil</option>
                                <option <?= set_value('bidang_usaha') == 'Elektronik' ? 'selected' : '' ?> value="Elektronik">Elektronik</option>
                                <option <?= set_value('bidang_usaha') == 'Jasa Lainnya' ? 'selected' : '' ?> value="Jasa Lainnya">Jasa Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kategori Produk</label>
                            <select class="form-control" name="kategori_produk" id="kategori_produk">
                                <option selected disabled value="">- Pilih Kategori Produk -</option>
                                <option <?= set_value('kategori_produk') == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                <option <?= set_value('kategori_produk') == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                <option <?= set_value('kategori_produk') == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                <option <?= set_value('kategori_produk') == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                <option <?= set_value('kategori_produk') == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                <option <?= set_value('kategori_produk') == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Alamat / Lokasi</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" required value="<?= set_value('alamat') ?>" placeholder=" Alamat / Lokasi" />
                            <div class="form-group mt-3">
                                <label>Nomor Telepon</label>
                                <input type="phone" class="form-control" name="telepon" id="telepon" required value="<?= set_value('telepon') ?>" placeholder=" Nomor Telepon" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Catatan</label>
                            <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10" placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>

                        </div>
                    </div>
                    <div class="form-row">

                    </div>
                    <div class="form-group mb-0 float-right">
                        <div>
                            <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>