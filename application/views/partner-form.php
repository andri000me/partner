<div class="row">
                                    <div class="col-sm-12">
                                        <div class="page-title-box">
                                            <h4 class="page-title">Partnership</h4>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                                                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                                                <li class="breadcrumb-item active">Partnership</li>
                                            </ol>
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-lg-12">
                                            <div class="card m-b-20">
                                                <div class="card-body">
                                                    <div id="wizard_container">
                                                        <div id="top-wizard">
                                                            <div id="progressbar"></div>
                                                        </div>
                                                        <div id="top-wizard">
                                                                <form action="<?= base_url('Home/save_stage1') ?>" method="post">
                                                                    <input id="website" name="website" type="disable" value="">
                                                                    <!-- Leave for security protection, read docs for details -->
                                                                    <div id="middle-wizard">
                                                                        <div class="step">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-12">
                                                                                        <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                                                                        <p class="text-muted">Pilih data yang sudah anda mapping pada pilihan yang akan muncul dilayar, kemudia isi semua kolom pertanyaan untuk melanjutkan ke halaman selanjutnya.</p>
                                                                                </div>
                                                                            </div>  
                                                                            <div class="form-row">
                                                                                <div class="col-md-6">
                                                                                    <label>Nama Usaha</label>
                                                                                    <div class="input-group mb-3">
                                                                                        <input type="text" class="form-control" name="nama_usaha" id="nama_usaha" required placeholder="CV Aria Santika" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                                                        <div class="input-group-append">
                                                                                            <button class="btn btn-primary" type="button" id="button-addon2"><span class="ion-ios7-search-strong" data-toggle="modal" data-target=".bd-example-modal-xl"></span></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-md-5">
                                                                                    <label>Alamat / Lokasi</label>
                                                                                    <input type="phone" class="form-control" name="alamat" id="alamat" required placeholder="Jalan Perjalanan Panjang No.22"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>E-Mail</label>
                                                                                    <input type="email" class="form-control" name="email" id="email" parsley-type="email" required placeholder="Aisha@bfisyariah.id"/>
                                                                                </div>
                                                                                <div class="form-group col-md-2">
                                                                                    <label>Kelurahan</label>
                                                                                    <input type="text" class="form-control" name="kelurahan" id="kelurahan" required placeholder="Lengkong Gudang"/>
                                                                                </div>
                                                                                <div class="form-group col-md-2">
                                                                                    <label>Kecamatan</label>
                                                                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" required placeholder="Serpong utara"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Nomor Telepon / WhatsApp</label>
                                                                                    <input type="text" class="form-control placement"  onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" required placeholder="EG 0811977500" maxlength="15"/>
                                                                                </div>
                                                                                <div class="form-group col-md-1">
                                                                                    <label>Kode Pos</label>
                                                                                    <input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="kode_pos" id="kode_pos" required placeholder="125487" maxlength="6"/>
                                                                                </div>
                                                                                <div class="form-group col-md-2">
                                                                                    <label>Provinsi</label>
                                                                                    <input type="text" class="form-control" name="provinsi" id="provinsi" required placeholder="Kalimantan Tengah"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Kategori Produk</label>
                                                                                    <select class="form-control" name="kategori_produk" id="kategori_produk" required>
                                                                                        <option selected disabled value="">Pilih Kategori Produk</option>
                                                                                        <option value="My Ihram">My Ihram</option>
                                                                                        <option value="My Safar">My Safar</option>
                                                                                        <option value="My Talin">My Talin</option>
                                                                                        <option value="My Hajat">My Hajat</option>
                                                                                        <option value="My Faedah">My Faedah</option>
                                                                                        <option value="My CarS">My CarS</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Status Tempat Usaha</label>
                                                                                    <select class="form-control" name="status_tempat_usaha" id="status_tempat_usaha" required>
                                                                                        <option selected disabled value="">Pilih Status Tempat usaha</option>
                                                                                        <option value="Milik Sendiri">Milik Sendiri</option>
                                                                                        <option value="Milik Keluarga">Milik Keluarga</option>
                                                                                        <option value="Sewa">Sewa</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Bidang Usaha</label>
                                                                                    <input type="text" class="form-control" name="bidang_usaha" id="bidang_usaha" required placeholder="Garmen / Percetakan / Lainnya"/>
                                                                                </div>
                                                                                <div class="form-group col-md-2">
                                                                                    <label>Tahun Berdiri</label>
                                                                                    <input type="text"  class="form-control placement" onkeypress="return hanyaAngka(event);" name="tahun-berdiri" id="tahun_berdiri" required placeholder="2016" maxlength="4">
                                                                                </div>
                                                                                <div class="form-group col-md-2">
                                                                                    <label>Jumalah Karyawan</label>
                                                                                    <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="jumlah_karyawan" id="jumlah_karyawan" required placeholder="25">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Bentuk Usaha</label>
                                                                                    <select class="form-control" name="bentuk_usaha" id="" required placeholder="Bentuk Usaha">
                                                                                        <option selected value="">Pilih Bentuk Usaha</option>
                                                                                        <option value="My Ihram">Perorangan</option>
                                                                                        <option value="My Safar">PD</option>
                                                                                        <option value="My Talim">CV</option>
                                                                                        <option value="My Hajat">PT</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <!-- /step-->
                                                                        <div class="step">
                                                                            <div class="row mb-3">
                                                                                <div class="col-md-12">
                                                                                        <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                                                                        <p class="text-muted">Semua data dibutuhkan untuk keperluan analisa dan pengembangan strategi produk  Syariah, hanya selangkah lagi  proses ini selesai :)</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Barang Yang Dijual</label>
                                                                                    <input type="text" class="form-control" name="barang_jual" id="barang_jual" name="barang_jual" required placeholder="Contoh : Bahan Bangunan, Paket Pernikahan, Lainnya">
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Nama Pemilik</label>
                                                                                    <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" required placeholder="Khadaffi Antashari">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Sosial Media / Website</label>
                                                                                    <input type="text" class="form-control" name="sosial_media" id="sosial_media" required placeholder="https://www.instagram.com/bfisyariah">
                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                    <label>Nomor Telepon / WhatsApp</label>
                                                                                    <input type="text" class="form-control placement"  onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" required placeholder="0811977500" maxlength="15"/>
                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                    <label>Hobi / Interest</label>
                                                                                    <input type="text" class="form-control" name="hobi" id="hobi" placeholder="Memancing">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Apa Saja Jenis Pembayaran Yang Diterima</label>
                                                                                    <select class="form-control" name="jenis_pembayaran" id="jenis_pembayaran" required placeholder="Jenis Pembayaran">
                                                                                        <option selected disabled value="">Pilih Jenis Pembayaran</option>
                                                                                        <option value="Tunai">Tunai</option>
                                                                                        <option value="Kredit Konvensional">Kredit Konvensional</option>
                                                                                        <option value="Kredit Syariah">Kredit Syariah</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                    <label>Apakah Puanya Pinjaman?</label><br>
                                                                                    <div class="form-check form-check-inline mt-2">
                                                                                        <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya" required>
                                                                                        <label class="form-check-label">
                                                                                            Ya
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak" required>
                                                                                        <label class="form-check-label">
                                                                                            Tidak
                                                                                        </label>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                        <label>Punya Jumlah Plafond?</label><br>
                                                                                        <div class="form-check  form-check-inline mt-2">
                                                                                            <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" value="Ya" required>
                                                                                            <label class="form-check-label">
                                                                                                Ya
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check  form-check-inline">
                                                                                            <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" value="Tidak" required>
                                                                                            <label class="form-check-label">
                                                                                                Tidak
                                                                                            </label>
                                                                                        </div>
                                                                                        
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-3">
                                                                                    <label>Omset Perbulan</label>
                                                                                    <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="omset" id="omset" required placeholder="50,000,000">
                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                    <label>Jumlah Cabang</label>
                                                                                    <input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="jumlah_cabang" id="jumlah_cabang" required placeholder="5">
                                                                                </div>
                                                                                <div id="disable" class="form-group col-md-3">
                                                                                    <label>Tahun Berakhir Izin Usaha</label>
                                                                                    <input type="text" class="form-control  pelacement" onkeypress="return hanyaAngka(event);" name="akhir_izin" id="akhir_izin" placeholder="2016" maxlength="4">
                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                    <label>Apakah Memiliki Giro / Cek?</label><br>
                                                                                    <div class="form-check form-check-inline mt-2">
                                                                                        <input class="form-check-input" type="radio" name="punya_giro_cek" id="punya_giro_cek" required value="Giro">
                                                                                        <label class="form-check-label">
                                                                                            Giro
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" type="radio" name="punya_giro_cek" id="punya_giro_cek" required value="Cek">
                                                                                        <label class="form-check-label">
                                                                                            Cek
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <div class="form-group col-md-3">
                                                                                    <label>Pernah Melakukan Promosi?</label><br>
                                                                                    <div class="form-check form-check-inline mt-2">
                                                                                        <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" required value="Ya">
                                                                                        <label class="form-check-label">
                                                                                            Ya
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" required value="Tidak">
                                                                                        <label class="form-check-label">
                                                                                            Tidak
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-group mt-3">
                                                                                        <label>Rekening Bank</label>
                                                                                        <input type="text" class="form-control pelacement" pelacement" onkeypress="return hanyaAngka(event);" id="rekening_bank" name="rekening_bank" required placeholder="0468 6587 6587 45" maxlength="16">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Cabang Bank</label>
                                                                                        <input type="text" class="form-control" id="cabang_bank" name="cabang_bank" required placeholder="Cabang Karawaci">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-md-3">
                                                                                    <label>Ada Project Yang Sedang Berjalan?</label><br>
                                                                                    <div class="form-check form-check-inline mt-2">
                                                                                        <input class="form-check-input" type="radio" name="on_going_project" id="on_going_project" required value="Ada">
                                                                                        <label class="form-check-label">
                                                                                            Ada
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-check form-check-inline">
                                                                                        <input class="form-check-input" type="radio" name="on_going_project" id="on_going_project" required value="Tidak Ada">
                                                                                        <label class="form-check-label">
                                                                                            Tidak Ada
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="form-group mt-3">
                                                                                        <label>Nama Bank</label>
                                                                                        <input type="text" class="form-control" id="nama_bank" name="nama_bank" required placeholder="Bank Mandiri">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label>Atas Nama</label>
                                                                                        <input type="text" class="form-control" id="atas_nama" name="atas_nama" required placeholder="Anton Hoed">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group col-md-6">
                                                                                    <label>Catatan</label>
                                                                                    <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10" required placeholder="isi jika anda informasi tambahan" style="height:107px;"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /step-->
                                                
                                                                        <div class="submit step">
                                                                                <div class="row mb-3">
                                                                                    <div class="col-md-12">
                                                                                        <h4 class="mt-0 header-title">Formulir Partnership</h4>
                                                                                        <p class="text-muted">Alhamdulillah, sudah pada bagian terakhir dari pendaftaran partner ini. Pastikan semua data yang dikirim benar dan valid .<br>Silahkan isi</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-2">
                                                                                        <div action="#" class="dropzone">
                                                                                            <div class="fallback">
                                                                                                <input name="file" type="file" multiple="multiple">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div action="#" class="dropzone">
                                                                                            <div class="fallback">
                                                                                                <input name="file" type="file" multiple="multiple">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div action="#" class="dropzone">
                                                                                            <div class="fallback">
                                                                                                <input name="file" type="file" multiple="multiple">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div action="#" class="dropzone">
                                                                                            <div class="fallback">
                                                                                                <input name="file" type="file" multiple="multiple">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div action="#" class="dropzone">
                                                                                            <div class="fallback">
                                                                                                <input name="file" type="file" multiple="multiple">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div action="#" class="dropzone">
                                                                                            <div class="fallback">
                                                                                                <input name="file" type="file" multiple="multiple">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <!-- /step-->
                                                                    </div>
                                                                    <!-- /middle-wizard -->
                                                                    <div id="bottom-wizard">
                                                                        <button class="btn btn-secondary waves-effect waves-light backward" type="button" name="backward">Kembali</button>
                                                                        <button class="btn btn-primary waves-effect waves-light forward" type="button" name="forward">Selanjutnya</button>
                                                                        <button class="btn btn-primary waves-effect waves-light submit" type="submit" name="process"  data-toggle="modal" data-target="#modalBerhasil">Simpan</button>
                                                                    </div>
                                                                    <!-- /bottom-wizard -->
                                                                </form>            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div> <!-- end col -->
                            </div>

                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="modal-header mb-2">
                                        <h4 class="modal-title">Cari Data Partner</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <table id="datatable"
                                    class="table table-striped table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                    <!-- Modal -->

                    <!-- Modal -->
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
                    <!-- Modal -->
                    
                    <!-- script -->
                    

                    <script>
                        /*  Wizard */
                        jQuery(function ($) {
                            "use strict";
                            $('form#wrapped').attr('action', '');
                            $("#wizard_container").wizard({
                                stepsWrapper: "#wrapped",
                                submit: ".submit",
                                beforeSelect: function (event, state) {
                                    if ($('input#website').val().length != 0) {
                                        return false;
                                    }
                                    if (!state.isMovingForward)
                                        return true; 
                                    var inputs = $(this).wizard('state').step.find(':input');
                                    return !inputs.length || !!inputs.valid();
                                }
                            }).validate({
                                errorPlacement: function (error, element) {
                                    if (element.is(':radio') || element.is(':checkbox')) {
                                        error.insertBefore(element.next());
                                    } else {
                                        error.insertAfter(element);
                                    }
                                }
                            });
                            //  progress bar
                            $("#progressbar").progressbar();
                            $("#wizard_container").wizard({
                                afterSelect: function (event, state) {
                                    $("#progressbar").progressbar("value", state.percentComplete);
                                    $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
                                }
                            });
                            /* Submit loader mask */
                            $('form').on('submit',function() {
                                var form = $("form#wrapped");
                                form.validate();
                                if (form.valid()) {
                                    $("#loader_form").fadeIn();
                                }
                            });
                        });
                    </script>

                    <script>
                        $("tr.clickable-row").not("tr > td.not-clickable").css('cursor', 'pointer');
                        $("table").on("click", ".not-clickable", function (e) {
                            e.stopPropagation();
                        });
                        $("table").on('click', '.clickable-row', function () {
                            $("tr.clickable-row").not("tr > td.not-clickable").css('cursor', 'pointer');
                            window.location = $(this).data("href");
                        })

                    </script>
                    <!-- script -->