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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mr-3 ml-3">
                                <label>Detail Produk</label>
                                <input type="text" class="form-control" name="detail_produk" id="detail_produk" required placeholder="Detail produk" />
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
                                    <option value="Event">Event</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 form">
                            <label class="ml-3 travel">Pilih Data Travel</label>
                            <label class="ml-3 jasa">Pilih Data Penyedia Jasa</label>
                            <label class="ml-3 agent">Pilih Data Agent</label>
                            <div class="input-group ml-3 mr-3">
                                <input type="text" class="form-control" name="id_partner" id="id_partner" required placeholder="aaaa" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                <div class="input-group-append mr-4">
                                    <button class="btn btn-primary modal-partner" type="button" id="button-addon2" data-toggle="modal" data-target="#modal-partner"><span class="ion-ios7-search-strong"></span></button>
                                    <button class="btn btn-primary modal-agent" type="button" id="button-addon2" data-toggle="modal" data-target="#modal-agent"><span class="ion-ios7-search-strong"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 event">
                            <div class="form-group ml-3 mr-3">
                                <label>Nama Event</label>
                                <input type="text" class="form-control" name="nama_event" id="nama_event" placeholder="Input Nama Event">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3">
                        <div>
                            <a href="leads.html" class="btn btn-secondary waves-effect waves-light">Batal</a>
                            <button type="submit" class="btn btn-primary waves-effect waves-light ml-1">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

</div>
</div>
<!-- end content -->


<!-- Modal partner -->
<div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Partner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Usaha</th>
                            <th>Kategori Produk</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="clickable-row" data-href="partnership-form.html">
                            <td>PT Markibul</td>
                            <td>My Safar</td>
                            <td>0811977500</td>
                        </tr>
                        <tr class="clickable-row" data-href="partnership-form.html">
                            <td>PT Markobar</td>
                            <td>My Faedah</td>
                            <td>0811977500</td>
                        </tr>
                        <tr class="clickable-row" data-href="partnership-form.html">
                            <td>CV Antasari Ashar</td>
                            <td>My Ihram</td>
                            <td>0811977500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal partner -->

<!-- Modal agent -->
<div class="modal fade" id="modal-agent" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Agent</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Usaha</th>
                            <th>Kategori Produk</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="clickable-row" data-href="partnership-form.html">
                            <td>PT Markibul</td>
                            <td>My Safar</td>
                            <td>0811977500</td>
                        </tr>
                        <tr class="clickable-row" data-href="partnership-form.html">
                            <td>PT Markobar</td>
                            <td>My Faedah</td>
                            <td>0811977500</td>
                        </tr>
                        <tr class="clickable-row" data-href="partnership-form.html">
                            <td>CV Antasari Ashar</td>
                            <td>My Ihram</td>
                            <td>0811977500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal agent -->