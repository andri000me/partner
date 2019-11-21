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

                <form class="" action="#">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama Usaha</label>
                            <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" required placeholder="CV Aria Santiika" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" parsley-type="email" required placeholder="Aisha@bfisyariah.id" />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Bidang Usaha</label>
                            <input type="text" class="form-control" name="bidang_usaha" id="bidang_usaha" required placeholder="Garmen / Percetakan / Lainnya" />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kategori Produk</label>
                            <select class="form-control" name="kategori_produk" id="kategori_produk" require>
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
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Alamat / Lokasi</label>
                            <input type="phone" class="form-control" name="alamat" id="alamat" required placeholder="Jalan Perjalanan Panjang No.22" />
                            <div class="form-group mt-3">
                                <label>Nomor Telepon</label>
                                <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" required placeholder="EG 0811977500" maxlength="15" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Catatan</label>
                            <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10" required placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right">
                        <div>
                            <button type="cancle" class="btn btn-secondary waves-effect waves-light">
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