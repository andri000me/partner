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

                <form class="" action="#">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" required placeholder="Ibrahim Ahmad" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Nomor Telepon / Whatsapp</label>
                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" required placeholder="0811977500" maxlength="15" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Asal Aplikasi</label>
                                <select class="form-control" name="soa" id="soa">
                                    <option selected>Pilih Source Aplikasi</option>
                                    <option value="Direct Selling">Direct Selling</option>
                                    <option value="Tour & travel">Tour & travel</option>
                                    <option value="Penyedia Jasa">Penyedia Jasa</option>
                                    <option value="Agent BA">Agent BA</option>
                                    <option value="EGC">EGC</option>
                                    <option value="CGC">CGC</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Website BFI Syariah">Website BFI Syariah</option>
                                    <option value="RO">RO</option>
                                    <option value="Walkin">Walkin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Produk</label>
                                <select class="form-control" name="produk" id="produk">
                                    <option selected>Pilih Kategori Produk</option>
                                    <option value="My Ihram">My Ihram</option>
                                    <option value="My Safar">My Safar</option>
                                    <option value="My Talin">My Talin</option>
                                    <option value="My Hajat">My Hajat</option>
                                    <option value="My Faedah">My Faedah</option>
                                    <option value="My CarS">My CarS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Detail Produk</label>
                                <input type="text" class="form-control" name="detail_produk" id="detail_produk" required placeholder="Detail produk" />
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