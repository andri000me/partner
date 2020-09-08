<div class="row">
    <div class="col-md-8">
        <div class="page-title-box card-margin-2">
            <h4><b>Detail Leads Prospect</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Prospect</a></li>
                <li class="breadcrumb-item active">Detail Leads Prospect</li>
            </ol>
        </div>

        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <div id="hilang" class="loader-body">
                    <div id="loader"></div>
                    <div id="loadermobile"></div>
                </div>
                <div style="display:none;" id="myDiv" class="animate-bottom">
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
                                <span class="d-block d-sm-none mb-1"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block mb-1">Data Leads</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
                                <span class="d-block d-sm-none"><i class="ion-ios7-checkmark-outline"></i></span>
                                <span class="d-none d-sm-block">History Follow Up</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#lam" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-file-alt"></i></span>
                                <span class="d-none d-sm-block">Data Lampiran</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="home2" role="tabpanel">
                            <form class="" action="<?= base_url('Leads/update_detail') ?>" method="post">
                                <!-- ID Ticket -->
                                <input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>" id="id_ticket">
                                <!-- ID Leads -->
                                <input type="hidden" name="id_leads" id="id_leads" value="<?= $data->id_leads ?>">
                                <!-- ID Mapping Partner -->
                                <input type="hidden" name="id_partner" id="id_partner" value="<?= $data->id_partner ?>">
                                <!-- ID Agent -->
                                <input type="hidden" name="id_agent" id="id_agent" value="<?= $data->id_agent ?>">
                                <!-- ID User -->
                                <input type="hidden" name="id_user" id="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                                <!-- ID Branch -->
                                <input type="hidden" name="id_branch" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                                <!-- ID Cross Branch -->
                                <input type="hidden" id="id_cross_branch" value="<?= $data->cabang_cross ?>">
                                <!-- Post Redirect halaman ke form -->
                                <input type="hidden" name="redirect" value="<?= uri_string() ?>">
                                <?php $cabang_asal = $this->fungsi->user_login()->id_branch; ?>
                                <div class="">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control placement text-size" name="nama_konsumen" id="nama_konsumen" value="<?= $data->nama_konsumen ?>" required placeholder="Nama Lengkap" minlength="16" maxlength="16">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group text-size form-margin">
                                                <label>Nomor KTP</label>
                                                <input type="phone" class="form-control placement number-only text-size" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required placeholder="0000 0000 0000 0000" minlength="16" maxlength="16">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group text-size form-margin">
                                                <label>NPWP</label>
                                                <input type="text" class="form-control text-size placement number-only <?= form_error('no_npwp') ? 'is-invalid' : '' ?>" name="no_npwp" id="no_npwp" value="<?= $data->no_npwp ?>" required placeholder="NPWP" maxlength="15" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-left">
                                                <label>Nomor Handphone</label>
                                                <input type="text" class="form-control placement number-only text-size" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0896 5533 985" maxlength="15">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-right">
                                                <label>Nomor WA</label>
                                                <input type="text" class="form-control placement number-only text-size" name="nomor_wa" id="" value="<?= $data->nomor_wa ?>" required placeholder="0896 5533 985" maxlength="15">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Email</label>
                                                <input type="email" class="form-control text-size" name="email_konsumen" value="<?= $data->email_konsumen ?>" id="email_konsumen" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Pendidikan</label>
                                                <select class="form-control text-size" name="pendidikan" id="pendidikan" required>
                                                    <option selected value="">Pilih Pendidikan</option>
                                                    <option <?= $data->pendidikan == 'SD' ? 'selected' : '' ?> value="SD">SD</option>
                                                    <option <?= $data->pendidikan == 'SLTP' ? 'selected' : '' ?> value="SLTP">SLTP</option>
                                                    <option <?= $data->pendidikan == 'SMU' ? 'selected' : '' ?> value="SMU">SMU</option>
                                                    <option <?= $data->pendidikan == 'SLTA' ? 'selected' : '' ?> value="SLTA">SLTA</option>
                                                    <option <?= $data->pendidikan == 'STM' ? 'selected' : '' ?> value="STM">STM</option>
                                                    <option <?= $data->pendidikan == 'SMEA' ? 'selected' : '' ?> value="SMEA">SMEA</option>
                                                    <option <?= $data->pendidikan == 'D1' ? 'selected' : '' ?> value="D1">D1</option>
                                                    <option <?= $data->pendidikan == 'D2' ? 'selected' : '' ?> value="D2">D2</option>
                                                    <option <?= $data->pendidikan == 'D3' ? 'selected' : '' ?> value="D3">D3</option>
                                                    <option <?= $data->pendidikan == 'S1' ? 'selected' : '' ?> value="S1">S1</option>
                                                    <option <?= $data->pendidikan == 'S2' ? 'selected' : '' ?> value="S2">S2</option>
                                                    <option <?= $data->pendidikan == 'S3' ? 'selected' : '' ?> value="S3">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control text-size" name="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" id="tanggal_lahir" placeholder="Tanggal lahir">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Status Pernikahan</label>
                                                <select class="form-control text-size" name="status_pernikahan" id="status_pernikahan" required>
                                                    <option selected value="">Pilih Status Pernikahan</option>
                                                    <option <?= $data->status_pernikahan == 'Sudah Menikah' ? 'selected' : '' ?> value="Sudah Menikah">Sudah Menikah</option>
                                                    <option <?= $data->status_pernikahan == 'Belum Menikah' ? 'selected' : '' ?> value="Belum Menikah">Belum Menikah</option>
                                                    <option <?= $data->status_pernikahan == 'Janda/Duda - Meninggal' ? 'selected' : '' ?> value="Janda/Duda - Meninggal">Janda/Duda - Meninggal
                                                    </option>
                                                    <option <?= $data->status_pernikahan == 'Janda/Duda - Cerai' ? 'selected' : '' ?> value="Janda/Duda - Cerai">Janda/Duda - Cerai</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row pasangan">
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
                                                <label>Nama Pasangan</label>
                                                <input type="text" class="form-control text-size" name="nama_pasangan" value="<?= $data->nama_pasangan ?>" id="nama_pasangan" placeholder="Nama Pasangan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-left">
                                                <label>Pekerjaan Konsumen</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="pekerjaan_konsumen" <?= $data->pekerjaan_konsumen == 'Karyawan' ? 'checked' : '' ?> id="pekerjaan_konsumen" required value="Karyawan">
                                                    <label class="form-check-label">
                                                        Karyawan
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="pekerjaan_konsumen" <?= $data->pekerjaan_konsumen == 'Wiraswasta' ? 'checked' : '' ?> id="pekerjaan_konsumen" required value="Wiraswasta">
                                                    <label class="form-check-label">
                                                        Wiraswasta
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Jenis Konsumen</label>
                                                <select class="form-control text-size" name="jenis_konsumen" id="jenis_konsumen" required>
                                                    <option selected value="">Pilih Jenis Konsumen</option>
                                                    <option <?= $data->jenis_konsumen == 'New Customer' ? 'selected' : '' ?> value="New Customer">New Customer</option>
                                                    <option <?= $data->jenis_konsumen == 'RO Expire' ? 'selected' : '' ?> value="RO Expire">RO Expire</option>
                                                    <option <?= $data->jenis_konsumen == 'RO Active' ? 'selected' : '' ?> value="RO Active">RO Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row ro-active">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Nomor Kontrak</label>
                                                <input type="phone" class="form-control text-size placement number-only nomor_kontrak" name="nomor_kontrak" value="<?= $data->nomor_kontrak ?>" placeholder="0878837741" minlength="10" maxlength="10" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Nama Konsumen</label>
                                                <input type="text" class="form-control text-size referral_konsumen" name="referral_konsumen" value="<?= $data->referral_konsumen ?>" placeholder="Input Nama konsumen">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Kategori Produk</label>
                                                <select class="form-control text-size" name="produk" id="produk" required>
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
                                            <div class="form-group form-right">
                                                <label>Detail Barang / jasa</label>
                                                <input type="text" class="form-control text-size" name="detail_produk" id="detail_produk" value="<?= $data->detail_produk ?>" required placeholder="Detail Barang / Jasa" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group form-margin">
                                                <label>Lokasi Rumah</label>
                                                <select class="form-control text-size" name="lokasi_rumah" id="lokasi_rumah" required>
                                                    <option selected value="">Pilih Kategori Lokasi Rumah</option>
                                                    <option <?= $data->lokasi_rumah == 'Non Perumahan - Tidak bisa Lewat Mobil' ? 'selected' : '' ?> value="Non Perumahan - Tidak bisa Lewat Mobil">Non Perumahan
                                                        - Tidak bisa Lewat Mobil</option>
                                                    <option <?= $data->lokasi_rumah == 'Non Perumahan - Jalan Satu Mobil' ? 'selected' : '' ?> value="Non Perumahan - Jalan Satu Mobil">Non Perumahan -
                                                        Jalan Satu Mobil</option>
                                                    <option <?= $data->lokasi_rumah == 'Non Perumahan - Jalan Dua Mobil' ? 'selected' : '' ?> value="Non Perumahan - Jalan Dua Mobil">Non Perumahan -
                                                        Jalan Dua Mobil</option>
                                                    <option <?= $data->lokasi_rumah == 'Perumahan - Tidak Bisa Lewat Mobil' ? 'selected' : '' ?> value="Perumahan - Tidak Bisa Lewat Mobil">Perumahan - Tidak
                                                        Bisa Lewat Mobil</option>
                                                    <option <?= $data->lokasi_rumah == 'Perumahan - Jalan Satu Mobil' ? 'selected' : '' ?> value="Perumahan - Jalan Satu Mobil">Perumahan - Jalan Satu
                                                        Mobil</option>
                                                    <option <?= $data->lokasi_rumah == 'Perumahan - Jalan Dua Mobil' ? 'selected' : '' ?> value="Perumahan - Jalan Dua Mobil">Perumahan - Jalan Dua
                                                        Mobil</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group text-size form-left">
                                                <label>Jenis Rumah</label><br>
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="radio" name="jenis_rumah" <?= $data->jenis_rumah == 'Semi Permanent' ? 'checked' : '' ?> id="jenis_rumah" required value="Semi Permanent">
                                                    <label class="form-check-label">
                                                        Semi Permanent
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="jenis_rumah" <?= $data->jenis_rumah == 'Permanent' ? 'checked' : '' ?> id="jenis_rumah" required value="Permanent">
                                                    <label class="form-check-label">
                                                        Permanent
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Luas Bangunan Rumah</label>
                                                <select class="form-control text-size" name="luas_rumah" id="luas_rumah" required>
                                                    <option selected value="">Pilih Kategori Luas Bangunan Rumah
                                                    </option>
                                                    <option <?= $data->luas_rumah == '< 60 M2' ? 'selected' : '' ?> value="< 60 M2">
                                                        < 60 M2</option> <option <?= $data->luas_rumah == '60 - 100 M2' ? 'selected' : '' ?> value="60 - 100 M2">60 - 100 M2
                                                    </option>
                                                    <option <?= $data->luas_rumah == '100 - 150 M2' ? 'selected' : '' ?> value="100 - 150 M2">100 - 150 M2</option>
                                                    <option <?= $data->luas_rumah == '> 150 M2' ? 'selected' : '' ?> value="> 150 M2">> 150 M2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group form-left">
                                                <label>Asal Aplikasi</label>
                                                <select class="form-control text-size" name="soa" id="soa" required>
                                                    <option selected value="">Pilih Asal Aplikasi</option>
                                                    <option <?= $data->soa == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
                                                    <option <?= $data->soa == 'EGC' ? 'selected' : '' ?> value="EGC">EGC</option>
                                                    <option <?= $data->soa == 'CGC' ? 'selected' : '' ?> value="CGC">CGC</option>
                                                    <option <?= $data->soa == 'Tele Sales' ? 'selected' : '' ?> value="Tele Sales">Tele Sales</option>
                                                    <option <?= $data->soa == 'CMS' ? 'selected' : '' ?> value="CMS">CMS</option>
                                                    <option <?= $data->soa == 'Sharia Head' ? 'selected' : '' ?> value="Sharia Head">Sharia Head</option>
                                                    <option <?= $data->soa == 'HO - Product' ? 'selected' : '' ?> value="HO - Product">HO - Product</option>
                                                    <option <?= $data->soa == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
                                                    <option <?= $data->soa == 'Penyedia Jasa / Barang' ? 'selected' : '' ?> value="Penyedia Jasa / Barang">Penyedia Jasa / Barang</option>
                                                    <!-- <option <?= $data->soa == 'Walk In' ? 'selected' : '' ?> value="Walk In">Walk In</option>
                                                <option <?= $data->soa == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                                <option <?= $data->soa == 'Tele Marketing' ? 'selected' : '' ?> value="Tele Marketing">Tele Marketing</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-right">
                                                <label>Activity Marketing</label>
                                                <select class="form-control text-size" name="activity_marketing" id="activity_marketing" required>
                                                    <option selected disabled value="">Pilih Kategori Activity Marketing
                                                    </option>
                                                    <option <?= $data->activity_marketing == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
                                                    <option <?= $data->activity_marketing == 'Tele call' ? 'selected' : '' ?> value="Tele call">Tele call</option>
                                                    <option <?= $data->activity_marketing == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
                                                    <option <?= $data->activity_marketing == 'Sosial Media' ? 'selected' : '' ?> value="Sosial Media">Sosial Media</option>
                                                    <option <?= $data->activity_marketing == 'Website' ? 'selected' : '' ?> value="Website">Website</option>
                                                    <option <?= $data->activity_marketing == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
                                                    <option <?= $data->activity_marketing == 'Walk In Branch' ? 'selected' : '' ?> value="Walk In Branch">Walk In Branch</option>
                                                    <option <?= $data->activity_marketing == 'Surat Penawaran' ? 'selected' : '' ?> value="Surat Penawaran">Surat Penawaran</option>
                                                    <option <?= $data->activity_marketing == 'Blast WA / SMS' ? 'selected' : '' ?> value="Blast WA / SMS">Blast WA / SMS</option>
                                                    <option <?= $data->activity_marketing == 'Email Marketing' ? 'selected' : '' ?> value="Email Marketing">Email Marketing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 event text-size">
                                            <div class="form-group form-margin">
                                                <label>Nama Event</label>
                                                <input type="text" class="form-control text-size" value="<?= $data->nama_event ?>" name="nama_event" id="nama_event" placeholder="Input Nama Event">
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-agent text-size">
                                            <div class="form-margin">
                                                <label class="agent">Pilih Data Agent</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control text-size readonly pointer" name="nama_agent" id="nama_agent" value="<?= $data->nama_agent ?>" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary btn-data text-size" type="button" id="btn-data-agent" data-toggle="modal" data-target=""><b>Cari</b></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form text-size">
                                            <div class="form-margin">
                                                <label class="travel">Pilih Data Travel</label>
                                                <label class="jasa">Pilih Data Penyedia Jasa</label>
                                                <label class="vendor">Pilih Data Partner</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control text-size readonly pointer" name="nama_partner" id="nama_partner" value="<?= $data->nama_partner ?>" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary btn-data text-size" type="button" id="btn-data" data-toggle="modal" data-target=""><b>Cari</b></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 nik text-size">
                                            <div class="form-group form-left">
                                                <label>NIK</label>
                                                <input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= $data->nik_egc ?>" placeholder="072104" minlength="6" maxlength="7" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 posisi text-size">
                                            <div class="form-group form-right">
                                                <label>Posisi</label>
                                                <input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= $data->posisi_egc ?>" placeholder="Input Posisi">
                                            </div>
                                        </div>
                                        <div class="col-md-12 cabang">
                                            <div class="form-group form-margin">
                                                <label>Cabang</label>
                                                <input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= $data->cabang_egc ?>" placeholder="Input Cabang">
                                            </div>
                                        </div>
                                        <div class="col-md-6 kontrak-ro">
                                            <div class="form-group form-left">
                                                <label>Nomor Kontrak</label>
                                                <input type="phone" class="form-control text-size placement number-only" name="nomor_kontrak_cgc" id="nomor_kontrak" value="<?= $data->nomor_kontrak ?>" placeholder="0878837741" minlength="10" maxlength="10" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 konsumen-ro">
                                            <div class="form-group form-right">
                                                <label>Nama Konsumen</label>
                                                <input type="text" class="form-control text-size" name="referral_konsumen_cgc" id="referral_konsumen_cgc" value="<?= $data->referral_konsumen ?>" placeholder="Input Nama konsumen">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 text-size">
                                            <fieldset>
                                                <div class="form-group form-left">
                                                    <label>Konsumen Cross Branch?</label><br>
                                                    <div class="form-check form-check-inline mt-2">
                                                        <input class="form-check-input cross_branch text-size" type="radio" name="cross_branch" <?= $data->cross_branch == 'Ya' ? 'checked' : '' ?> required value="Ya">
                                                        <label class="form-check-label text-size">
                                                            Ya
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input cross_branch text-size" type="radio" name="cross_branch" <?= $data->cross_branch == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
                                                        <label class="form-check-label text-size">
                                                            Tidak
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 text-size">
                                            <fieldset>
                                                <div id="hide" class="form-group form-right">
                                                    <label>Pilih cabang</label>
                                                    <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                                        <option selected disabled value="">Pilih Cabang</option>
                                                        <?php foreach ($branches->result() as $branch) { ?>
                                                            <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch && $cabang_asal == $data->id_branch) continue; ?>
                                                            <option <?= $branch->id_branch == $data->cabang_cross ? 'selected' : '' ?> value="<?= $branch->id_branch ?>">
                                                                <?= $branch->nama_cabang ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2 float-right btn-maintain mr-4">
                                    <button type="submit" onclick="return confirm('Mohon pastikan data yang diisi sudah benar!')" class="btn btn-primary waves-effect waves-light text-size ml-1 mb-1">
                                        <b>Simpan</b>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane p-3" id="profile2" role="tabpanel">
                            <h4 class="mt-0 header-title mb-4"><b>Timeline History Follow Up</b></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <ol class="activity-feed mb-0">
                                        <?php
                                        if ($follow_up->num_rows() > 0) {
                                            foreach ($follow_up->result() as $data) {
                                        ?>
                                                <li class="feed-item text-size">
                                                    <div class="feed-item-list">
                                                        <span class="activity-text text-primary"><b>Follow Up By
                                                                <?= $data->follow_up_by ?></b></span><br>
                                                        <span class="activity-text"><b>Oleh <?= $data->name ?></b></span>
                                                        <span class="date"><?= $data->tanggal_follow_up ?></span>
                                                        <span class="activity-text"><?= $data->catatan ?></span>
                                                    </div>
                                                </li>
                                            <?php
                                            }
                                        } else { ?>
                                            <p class="text-muted m-b-10 text-size text-center">Tidak Ada Data</p>
                                        <?php } ?>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane p-3" id="lam" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mt-0 header-title mb-4"><b>Data Lampiran</b></h4>

                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id_partner" value="">
                                        <input type="hidden" name="redirect" value="">
                                        <h4 class="mt-0 header-title mb-4">Tambah Data Lampiran</h4>
                                        <div class="form-group element text-size">
                                            <label>Lampirkan Data</label><br>
                                            <input type="file" name="tambah_lampiran[]" id="upload_file1" required>
                                        </div>
                                        <hr>
                                        <div id="moreImageUpload"></div>
                                        <div class="clear"></div>
                                        <div id="moreImageUploadLink" class="float-right mt-3">
                                            <a class="btn btn-secondary mr-1 text-size" href="javascript:void(0);" id="attachMore"><b>Tambah Form</b></a>
                                            <button class="btn btn-primary text-size"><b>Simpan</b></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="sticky">
            <div class="card height">
                <div class="card-body">
                    <div class="card-contents">
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                    <span class="d-block d-sm-none mb-1"><i class="far fa-newspaper"></i></span>
                                    <span class="d-none d-sm-block mb-1">Status</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-comment-dots"></i></span>
                                    <span class="d-none d-sm-block">Comment <span class="badge badge-danger m-1 "><?= $comments->num_rows() ?></span></span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                <h6 class="header-title web mt-0 mb-0">AKTIVITAS TERAKHIR</h6>
                                <div class="boxx overflow-auto web">
                                    <?php if ($activities->num_rows() > 0) {
                                        foreach ($activities->result() as $activity) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table class="text-size">
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-0"><i class="dripicons-clock"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1 text-size">
                                                                    <b><?= $activity->activity ?></b></p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-date text-muted mt-1 text-size">
                                                                    <?= $activity->tanggal_activity ?></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $activity->name ?>
                                                                    (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?>
                                                                </p>
                                                            </td>
                                                            <td>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    } else { ?>
                                        <p class="text-muted m-b-10 text-size">Tidak Ada Data</p>
                                    <?php } ?>
                                </div>
                                <div class="boxx mobile">
                                    <h6 class="header-title mt-0 mb-0">AKTIVITAS TERAKHIR</h6>
                                    <?php if ($activities->num_rows() > 0) {
                                        foreach ($activities->result() as $activity) { ?>
                                            <div class="inbox-wid">
                                                <div class="inbox-item">
                                                    <table class="text-size">
                                                        <tr>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1"><i class="dripicons-clock"></i>&nbsp;</p>
                                                            </td>
                                                            <td>
                                                                <p class="inbox-item-author mt-0 mb-1">
                                                                    <b><?= $activity->activity ?></b></p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">
                                                                    Oleh&nbsp;&nbsp;<?= $activity->name ?>
                                                                    (<?= $activity->jabatan ?>) - <?= $activity->nama_cabang ?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0">
                                                                    <?= $activity->tanggal_activity ?></p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    } else { ?>
                                        <p class="text-muted m-b-10 text-size">Tidak Ada Data</p>
                                    <?php } ?>
                                </div>

                                <h4 class="header-title mt-4 mb-0">LAMPIRAN</h4>
                                <div class="inbox-wid">
                                    <div class="inbox-item">
                                        <table>
                                            <tr>
                                                <td>
                                                    <p class="inbox-item-author mt-0 mb-1"><i class="fas fa-download"></i>&nbsp;</p>
                                                </td>
                                                <td>
                                                    <p class="inbox-item-author mt-0 mb-1 text-size"><b><a href="<?= base_url('zip/create_zip/' . $ticket->id_ticket . '/partners') ?>">Download
                                                                Semua Lampiran</b></a></p>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                <div class="box overflow-auto">
                                    <?php if ($comments->num_rows() > 0) { ?>
                                        <?php foreach ($comments->result() as $comment) { ?>
                                            <div class="media mb-1">
                                                <a class="image-popup-vertical-fit" href="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
                                                    <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" height="64" width="64">
                                                </a>
                                                <div class="media-body b">
                                                    <p class="mb-0"><b><?= $comment->name ?></b></p>
                                                    <p class="text-size mt-0 mb-0"><?= $comment->tanggal ?></p>
                                                    <p class="text-size mt-0"><?= $comment->comment ?></p>
                                                </div>
                                            </div>
                                            <hr>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <h4 class="text-muted m-b-10 text-size">Tidak Ada Komentar</h4>
                                    <?php } ?>
                                </div>
                                <form action="<?= base_url('Comment/save') ?>" method="post">
                                    <input type="hidden" name="ticket" id="ticket" value="<?= $ticket->id_ticket ?>">
                                    <input type="hidden" name="uri_string" id="uri_string" value="<?= uri_string() ?>">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" id="comment-text" cols="30" rows="10" required placeholder="tulis comment disini" style="height: 80px;"></textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light float-right btn-width" type="submit" name="process"><b>Kirim</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Mapping Leads -->
<div class="modal fade bd-example-modal-xl" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body" style="height:700px;">
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Leads</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                <div class="text-size"> </div>
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
                                    <center><button class="btn btn-primary pilih-leads radius" data-mapping="<?= $mapping->id_leads ?>" data-nama="<?= $mapping->nama_konsumen ?>" data-telepon="<?= $mapping->telepon ?>" data-soa="<?= $mapping->soa ?>" data-produk="<?= $mapping->produk ?>" data-detail="<?= $mapping->detail_produk ?>" data-event="<?= $mapping->nama_event ?>" data-kontrak="<?= $mapping->nomor_kontrak ?>" data-referral="<?= $mapping->referral_konsumen ?>" data-nikegc="<?= $mapping->nik_egc ?>" data-posisiegc="<?= $mapping->posisi_egc ?>" data-cabangegc="<?= $mapping->cabang_egc ?>"><b>Pilih</b></button></center>
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
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Partner</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Usaha</th>
                            <th>Kategori Produk</th>
                            <th>Telepon</th>
                            <th>Status</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($partners->result() as $partner) { ?>
                            <tr>
                                <td><?= $partner->nama_usaha ?></td>
                                <td><?= $partner->kategori_produk ?></td>
                                <td><?= $partner->telepon ?></td>
                                <td>
                                    <?php if ($partner->status == 'draft') { ?>
                                        <b class="text-secondary">Draft</b>
                                    <?php } ?>
                                    <?php if ($partner->status == 'lengkap') { ?>
                                        <b class="text-success">Lengkap</b>
                                    <?php } ?>
                                    <?php if ($partner->status == 'mapping') { ?>
                                        <b class="text-secondary">Mapping</b>
                                    <?php } ?>
                                </td>
                                <td>
                                    <center><button class="btn btn-primary pilih-partner radius" data-partner="<?= $partner->id_partner ?>" data-vendor="<?= $partner->nama_usaha ?>"><b>Pilih</b></button></center>
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
                <div class="modal-header mb-3">
                    <h4 class="modal-title"><b>Cari Data Agent</b></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Telepon</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($agents->result() as $agent) { ?>
                            <tr>
                                <td><?= $agent->nama_lengkap ?></td>
                                <td><?= $agent->telepon ?></td>
                                <td>
                                    <center><button class="btn btn-primary pilih-agent radius" data-agent="<?= $agent->id_agent ?>" data-namaagent="<?= $agent->nama_lengkap ?>"><b>Pilih</b></button></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('template/assets/js/leads_prospect.js') ?>"></script>


<script>
    $("table").on('click', '.pilih-partner', function() {
        $('#id_partner').val($(this).data('partner'));
        // $('#id_agent').val("");
        $('#nama_vendor').val($(this).data('vendor'));
        $('#nama_partner').val($(this).data('vendor'));
        $('#modal-partner').modal('hide');
    })
    $("table").on('click', '.pilih-agent', function() {
        $('#id_agent').val($(this).data('agent'));
        // $('#id_partner').val("");
        $('#nama_agent').val($(this).data('namaagent'));
        $('#modal-agent').modal('hide');
    })
    $("table").on('click', '.pilih-leads', function() {
        $('#id_leads').val($(this).data('mapping'));
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
        $('#nama_partner').val($(this).data('vendor'));
        $('#detail_produk').val($(this).data('detail'));
        $('#nama_event').val($(this).data('event'));
        $('#nama_konsumen').val($(this).data('nama'));
        $('#modal-leads').modal('hide');

        source_leads();
    })
</script>

<script>
    $('.ro-active, .pasangan').hide();

    // Status Konsumen
    jenis_konsumen();

    $('#jenis_konsumen').change(function() {
        jenis_konsumen();
    })

    function jenis_konsumen() {
        if ($('#jenis_konsumen').val() == "RO Active") {
            $('.ro-active').show();
            $('.referral_konsumen, .nomor_kontrak').attr('required', 'required');
        } else {
            $('.ro-active').hide();
            $('.referral_konsumen, .nomor_kontrak').removeAttr('required', '');
            $('.referral_konsumen, .nomor_kontrak').val('');
        }
    }
    // Status Konsumen

    // status pernikahan
    status_pernikahan();

    $('#status_pernikahan').change(function() {
        status_pernikahan();
    })

    function status_pernikahan() {
        if ($('#status_pernikahan').val() == "Sudah Menikah") {
            $('.pasangan').show();
            $('#nama_pasangan').attr('required', 'required');
        } else {
            $('.pasangan').hide();
            $('#nama_pasangan').removeAttr('required', ' ');
        }
    }
    // status pernikahan
</script>