<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Leads Go Live</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item active">Leads Go Live</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <form action="<?= base_url('Leads/update') ?>" method="post" enctype="multipart/form-data" class="text-size">
                    <input id="website" name="website" type="disable" value="">

                    <!-- Leave for security protection, read docs for details -->
                    <!-- ID Leads -->
                    <input type="hidden" id="id_leads" name="id_leads" value="<?= $data->id_leads ?>">
                    <!-- ID Mapping Leads -->
                    <input type="hidden" id="id_mapping_leads" name="id_mapping_leads" value="<?= $data->id_mapping_leads ?>">
                    <!-- ID Agent -->
                    <input type="hidden" id="id_agent" name="id_agent" value="<?= $data->id_agent ?>">
                    <!-- ID Partner -->
                    <input type="hidden" id="id_partner" name="id_partner" value="<?= $data->id_partner ?>">
                    <!-- ID Branch -->
                    <input type="hidden" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h4 class="mt-0 header-title">Formulir Leads</h4>
                            <p class="text-muted text-size">Pilih data yang sudah anda mapping pada pilihan yang akan muncul dilayar, kemudia isi semua kolom pertanyaan untuk melanjutkan ke halaman selanjutnya.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Leads ID</label>
                                        <input type="text" class="form-control text-size placement" name="leads_id" id="leads_id" value="<?= $data->leads_id ?>" required placeholder="009377736433744" maxlength="15">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="ml-3">Nama Konsumen</label>
                                    <div class="input-group ml-3 mb-3">
                                        <input type="text" class="form-control text-size" name="nama_konsumen" id="nama_konsumen" value="<?= $data->nama_konsumen ?>" required placeholder="Ibrahim Ahmad" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary mr-4 text-size" type="button" id="button-addon2" data-toggle="modal" data-target="#modal-leads"><span class="ion-ios7-search-strong"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>ID KTP</label>
                                        <input type="phone" class="form-control text-size placement" onkeypress="return hanyaAngka(event);" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required placeholder="0786 6875 8725 3564" maxlength="16" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nomor Telepon / Whatsapp</label>
                                        <input type="text" class="form-control text-size placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0811977500" maxlength="15" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group mr-3 ml-3">
                                        <label>Produk</label>
                                        <select class="form-control text-size" name="produk" id="produk">
                                            <option value="" selected>Pilih Kategori Produk</option>
                                            <option <?= $data->produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
                                            <option <?= $data->produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
                                            <option <?= $data->produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
                                            <option <?= $data->produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
                                            <option <?= $data->produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
                                            <option <?= $data->produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mr-3 ml-3">
                                        <label>Detail Produk</label>
                                        <input type="text" class="form-control text-size" name="detail_produk" id="detail_produk" value="<?= $data->detail_produk ?>" required placeholder="Contoh : " />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group mr-3 ml-3">
                                        <label>Asal Aplikasi</label>
                                        <select class="form-control text-size" name="soa" id="soa">
                                            <option value="" selected>Pilih Source Aplikasi</option>
                                            <option <?= $data->soa == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
                                            <option <?= $data->soa == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
                                            <option <?= $data->soa == 'Penyedia Jasa' ? 'selected' : '' ?> value="Penyedia Jasa">Penyedia Jasa</option>
                                            <option <?= $data->soa == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
                                            <option <?= $data->soa == 'EGC' ? 'selected' : '' ?> value="EGC">EGC</option>
                                            <option <?= $data->soa == 'CGC' ? 'selected' : '' ?> value="CGC">CGC</option>
                                            <option <?= $data->soa == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
                                            <option <?= $data->soa == 'Website BFI Syariah' ? 'selected' : '' ?> value="Website BFI Syariah">Website BFI Syariah</option>
                                            <option <?= $data->soa == 'RO' ? 'selected' : '' ?> value="RO">RO</option>
                                            <option <?= $data->soa == 'Walking' ? 'selected' : '' ?> value="Walking">Walking</option>
                                            <option <?= $data->soa == 'Event' ? 'selected' : '' ?> value="Event">Event</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 form">
                                    <label class="ml-3 travel">Pilih Data Travel</label>
                                    <label class="ml-3 jasa">Pilih Data Penyedia Jasa</label>
                                    <label class="ml-3 agent">Pilih Data Agent</label>
                                    <div class="input-group ml-3 mb-3">
                                        <input type="text" class="form-control text-size" name="data_partner" id="data_partner" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-data mr-4 text-size" type="button" id="btn-data" data-toggle="modal" data-target=""><span class="ion-ios7-search-strong"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 nik">
                                    <div class="form-group ml-3 mr-3">
                                        <label>NIK</label>
                                        <input type="phone" class="form-control text-size placement" onkeypress="return hanyaAngka(event);" name="nik_egc" id="nik_egc" value="<?= $data->nik_egc ?>" placeholder="0786 6875 8725 3564" maxlength="16" />
                                    </div>
                                </div>
                                <div class="col-md-6 event">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Event</label>
                                        <input type="text" class="form-control text-size" name="nama_event" id="nama_event" value="<?= $data->nama_event ?>" placeholder="Input Nama Event">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 posisi">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Posisi</label>
                                        <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= $data->posisi_egc ?>" placeholder="Input Posisi">
                                    </div>
                                </div>
                                <div class="col-md-6 cabang">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= $data->cabang_egc ?>" placeholder="Input Cabang">
                                    </div>
                                </div>
                                <div class="col-md-6 kontrak-ro">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nomor Kontrak</label>
                                        <input type="phone" class="form-control text-size" onkeypress="return hanyaAngka(event);" name="nomor_kontrak" id="nomor_kontrak" value="<?= $data->nomor_kontrak ?>" placeholder="087883774" />
                                    </div>
                                </div>
                                <div class="col-md-6 konsumen-ro">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Nama Konsumen</label>
                                        <input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= $data->referral_konsumen ?>" placeholder="Input Nama konsumen">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group text-size ml-3 mr-3">
                                        <label>Cross Branch?</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= $data->cross_branch == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                            <label class="form-check-label">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" <?= $data->cross_branch == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                            <label class="form-check-label">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="hide" class="form-group ml-3 mr-3">
                                        <label>Pilih cabang</label>
                                        <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                            <option selected disabled value="">Pilih Cabang</option>
                                            <?php foreach ($branches->result() as $branch) { ?>
                                                <option <?= $branch->id_branch == $data->cabang_cross ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div id="hide" class="form-group ml-3 mr-3">
                                        <label>Pic Tanda Tangan</label>
                                        <select class="form-control text-size" name="pic_ttd" id="pic_ttd">
                                            <option value="" selected>Pilih PIC Tanda tangan</option>
                                            <optgroup id="show_pic_ttd">

                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="hide" class="form-group ml-3 mr-3">
                                        <label>Surveyor</label>
                                        <select class="form-control text-size" name="surveyor" id="surveyor">
                                            <option value="" selected>Pilih Surveyor</option>
                                            <optgroup id="show_surveyor">

                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Follow Up By</label>
                                        <select class="form-control text-size" name="follow_up_by" id="follow_up_by" required>
                                            <option selected disabled value="">Pilih Follow Up By</option>
                                            <option <?= $data->follow_up_by == 'Kunjungan' ? 'selected' : '' ?> value="Kunjungan">Kunjungan</option>
                                            <option <?= $data->follow_up_by == 'Telepon' ? 'selected' : '' ?> value="Telepon">Telepon</option>
                                            <option <?= $data->follow_up_by == 'Whatsapp' ? 'selected' : '' ?> value="Whatsapp">Whatsapp</option>
                                            <option <?= $data->follow_up_by == 'Email' ? 'selected' : '' ?> value="Email">Email</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="ml-3">Nilai Funding</label>
                                    <div class="input-group flex-nowrap ml-3 mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
                                        </div>
                                        <input type="text" class="form-control text-size mr-4" onkeypress="return hanyaAngka(event);" name="nilai_funding" id="nilai_funding" value="<?= $data->nilai_funding ?>" required placeholder="3000000" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group text-size ml-3 mr-3">
                                        <label>Apakah Sudah Funding?</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio" name="sudah_funding" id="sudah_funding" <?= $data->sudah_funding == 'Sudah' ? 'checked' : '' ?> required value="Sudah">
                                            <label class="form-check-label">
                                                Sudah
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sudah_funding" id="sudah_funding" <?= $data->sudah_funding == 'Belum' ? 'checked' : '' ?> required value="Belum">
                                            <label class="form-check-label">
                                                Belum
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-size ml-3 mr-3">
                                        <label>Appeal NST</label><br>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio" name="appeal_nst" id="appeal_nst" <?= $data->appeal_nst == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                            <label class="form-check-label">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="appeal_nst" id="appeal_nst" <?= $data->appeal_nst == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                            <label class="form-check-label">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 float-right mt-3 mr-3">
                        <button class="btn btn-danger waves-effect waves-light text-size" id="draft" name="draft" class="btn" type="submit">Draft</button>
                        <button class="btn btn-primary waves-effect waves-light submit text-size ml-1" type="submit" name="process" data-toggle="modal" data-target="#modalBerhasil">Simpan</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->
<!-- Modal simpan -->
<div class="modal fade" id="modalBerhasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalCenterTitle">Pengajuan Kerjasama Berhasil</h5>
            </div>
            <div class="modal-body">
                Terimakasih telah menyelesaikan tugas perjanjian kerjasama dengan partner potensial di daerah anda.
                Tim HO akan memverifikasi data anda, dan informasinya akan diberikan melalui menu <a href="#" style="color: blue;">motification</a> di website ini.
            </div>
            <div class="modal-footer">
                <a href="index.html"><button class="btn btn-primary">OK</button></a>
            </div>
        </div>
    </div>
</div>
<!-- Modal simpan -->

<!-- Modal Mapping Leads -->
<div class="modal fade bd-example-modal-xl" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" style="height:700px;">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Leads</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                <div class="text-size">Nama Lengkap</div>
                            </th>
                            <th>
                                <div class="text-size">Nomor Telepon</div>
                            </th>
                            <th>
                                <div class="text-size">Asal Aplikasi</div>
                            </th>
                            <th>
                                <div class="text-size">Produk</div>
                            </th>
                            <th>
                                <div class="text-size">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mappings->result() as $mapping) { ?>
                            <tr>
                                <td>
                                    <div class="text-size"><?= $mapping->nama_konsumen ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->telepon ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->soa ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->produk ?></div>
                                </td>
                                <td>
                                    <center><button class="btn btn-primary pilih-leads" data-mapping="<?= $mapping->mapping_id ?>" data-nama="<?= $mapping->nama_konsumen ?>" data-telepon="<?= $mapping->telepon ?>" data-soa="<?= $mapping->soa ?>" data-produk="<?= $mapping->produk ?>" data-detail="<?= $mapping->detail_produk ?>" data-event="<?= $mapping->nama_event ?>" data-kontrak="<?= $mapping->nomor_kontrak ?>" data-referral="<?= $mapping->referral_konsumen ?>" data-nikegc="<?= $mapping->nik_egc ?>" data-posisiegc="<?= $mapping->posisi_egc ?>" data-cabangegc="<?= $mapping->cabang_egc ?>">Pilih</button></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!-- Modal partner -->
<div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Partner</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Usaha</th>
                            <th>Kategori Produk</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($partners->result() as $partner) { ?>
                            <tr>
                                <td><?= $partner->nama_usaha ?></td>
                                <td><?= $partner->kategori_produk ?></td>
                                <td><?= $partner->telepon ?></td>
                                <td>
                                    <center><button class="btn btn-primary pilih-partner" data-partner="<?= $partner->id_partner ?>" data-vendor="<?= $partner->nama_usaha ?>">Pilih</button></center>
                                </td>
                            </tr>
                        <?php } ?>
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
                <table id="" class="datatable table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($agents->result() as $agent) { ?>
                            <tr>
                                <td><?= $agent->nama_lengkap ?></td>
                                <td><?= $agent->telepon ?></td>
                                <td>
                                    <center><button class="btn btn-primary pilih-agent" data-agent="<?= $agent->id_agent ?>" data-namaagent="<?= $agent->nama_lengkap ?>">Pilih</button></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal agent -->

<!-- Menghilangkan attr required untuk save sementara -->
<script>
    $('#draft').click(function() {
        $("input, select").removeAttr('required');
    })
</script>

<script>
    $('.travel, .agent, .jasa, .event, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
    source_leads();
    $('#soa').change(function() {
        source_leads();
        $('#id_partner').val("");
        $('#id_agent').val("");
        //SOA EGC
        $('#nik_egc').val("");
        $('#posisi_egc').val("");
        $('#cabang_egc').val("");
        //SOA CGC / RO
        $('#referral_konsumen').val("");
        $('#nomor_kontrak').val("");
        //SOA Event
        $('#nama_event').val("");

        $('#nama_vendor').val("").removeAttr("required");
        $('#nama_event').val("");
        $('#data_partner').val("");
    })

    function source_leads() {
        if ($('#soa').val() == 'Tour & travel') {
            $('.travel, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'jalan - jalan')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'Penyedia Jasa') {
            $('.jasa, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Jasa raharja')
            $('#btn-data').attr('data-target', '#modal-partner')
            $('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'Agent BA') {
            $('.agent, .form, .btn-data').show();
            $('#data_partner').attr('placeholder', 'Ibrahim')
            $('#btn-data').attr('data-target', '#modal-agent')
            $('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'EGC') {
            $('.nik, .posisi, .cabang').show();
            $('.jasa, .travel, .event, .form, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else if ($('#soa').val() == 'RO' || $('#soa').val() == 'CGC') {
            $('.kontrak-ro, .konsumen-ro').show();
            $('.travel, .agent, .jasa, .event, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc`').hide();
        } else if ($('#soa').val() == 'Event') {
            $('.event').show();
            $('.travel, .agent, .jasa, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        } else {
            $('.jasa, .travel, .agent, .form, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
        }
    }
</script>

<script>
    $("table").on('click', '.pilih-partner', function() {
        $('#id_partner').val($(this).data('partner'));
        $('#id_agent').val("");
        $('#nama_vendor').val($(this).data('vendor'));
        $('#data_partner').val($(this).data('vendor'));
        $('#modal-partner').modal('hide');
    })
    $("table").on('click', '.pilih-agent', function() {
        $('#id_agent').val($(this).data('agent'));
        $('#id_partner').val("");
        // $('#nama_vendor').val($(this).data('nama'));
        $('#data_partner').val($(this).data('namaagent'));
        $('#modal-agent').modal('hide');
    })
    $("table").on('click', '.pilih-leads', function() {
        $('#id_mapping_leads').val($(this).data('mapping'));
        $('#soa').val($(this).data('soa'));
        //EGC
        $('#nik_egc').val($(this).data('nikegc'));
        $('#posisi_egc').val($(this).data('posisiegc'));
        $('#cabang_egc').val($(this).data('cabangegc'));
        //CGC / RO
        $('#nomor_kontrak').val($(this).data('kontrak'));
        $('#referral_konsumen').val($(this).data('referral'));

        //Data Leads
        $('#produk').val($(this).data('produk'));
        $('#telepon').val($(this).data('telepon'));
        $('#data_partner').val($(this).data('vendor'));
        $('#detail_produk').val($(this).data('detail'));
        $('#nama_event').val($(this).data('event'));
        $('#nama_konsumen').val($(this).data('nama'));
        $('#modal-leads').modal('hide');

        source_leads();
    })
</script>

<script>
    function show_leads() {
        var id_leads = $("#id_leads").val();
        $.ajax({
            type: 'GET',
            url: '<?= base_url('Leads/get_leads/') ?>' + id_leads,
            dataType: 'json',
            data: {
                id_leads: id_leads
            },
            success: function(data) {
                $("#surveyor").val(data.surveyor);
                $("#pic_ttd").val(data.pic_ttd);
            }

        });
    }
    $(document).ready(function() {
        show_leads();
    })
</script>