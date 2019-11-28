<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Mapping Leads</h4>
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
                <h4 class="mt-0 header-title">Mapping Leads</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner yang berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar memudahkan anda dalam memaintain partner anda.</p>

                <form class="" action="<?= base_url('mapping_leads/save') ?>" method="post">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" value="<?= set_value('nama_konsumen') ?>" required placeholder="Ibrahim Ahmad" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Nomor Telepon / Whatsapp</label>
                                <input type="text" class="form-control placement <?= form_error('telepon') ? 'is-invalid' : '' ?>" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" value="<?= set_value('telepon') ?>" required placeholder="0811977500" maxlength="15" />
                                <?= form_error('telepon') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Asal Aplikasi</label>
                                <select class="form-control" name="soa" id="soa">
                                    <option selected value="">Pilih Source Aplikasi</option>
                                    <option <?= set_value('soa') == 'Direct Selling' ? 'selected' : ''  ?> value="Direct Selling">Direct Selling</option>
                                    <option <?= set_value('soa') == 'Tour & travel' ? 'selected' : ''  ?> value="Tour & travel">Tour & travel</option>
                                    <option <?= set_value('soa') == 'Penyedia Jasa' ? 'selected' : ''  ?> value="Penyedia Jasa">Penyedia Jasa</option>
                                    <option <?= set_value('soa') == 'Agent BA' ? 'selected' : ''  ?> value="Agent BA">Agent BA</option>
                                    <option <?= set_value('soa') == 'EGC' ? 'selected' : ''  ?> value="EGC">EGC</option>
                                    <option <?= set_value('soa') == 'CGC' ? 'selected' : ''  ?> value="CGC">CGC</option>
                                    <option <?= set_value('soa') == 'Digital Marketing' ? 'selected' : ''  ?> value="Digital Marketing">Digital Marketing</option>
                                    <option <?= set_value('soa') == 'Website BFI Syariah' ? 'selected' : ''  ?> value="Website BFI Syariah">Website BFI Syariah</option>
                                    <option <?= set_value('soa') == 'RO' ? 'selected' : ''  ?> value="RO">RO</option>
                                    <option <?= set_value('soa') == 'Walking' ? 'selected' : ''  ?> value="Walking">Walking</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Produk</label>
                                <select class="form-control" name="produk" id="produk">
                                    <option selected value="">Pilih Kategori Produk</option>
                                    <option <?= set_value('produk') == 'My Ihram' ? 'selected' : ''  ?> value="My Ihram">My Ihram</option>
                                    <option <?= set_value('produk') == 'My Safar' ? 'selected' : ''  ?> value="My Safar">My Safar</option>
                                    <option <?= set_value('produk') == 'My Talim' ? 'selected' : ''  ?> value="My Talim">My Talim</option>
                                    <option <?= set_value('produk') == 'My Hajat' ? 'selected' : ''  ?> value="My Hajat">My Hajat</option>
                                    <option <?= set_value('produk') == 'My Faedah' ? 'selected' : ''  ?> value="My Faedah">My Faedah</option>
                                    <option <?= set_value('produk') == 'My CarS' ? 'selected' : ''  ?> value="My CarS">My CarS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Detail Produk</label>
                                <input type="text" class="form-control" name="detail_produk" id="detail_produk" value="<?= set_value('detail_produk') ?>" required placeholder="Detail produk" />
                            </div>
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