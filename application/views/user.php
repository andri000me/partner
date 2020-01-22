<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">List User</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="mb-2 btn-kanan">
            <a class="btn btn-primary text-size" href="<?= base_url('auth/daftar_akun') ?>">Tambah User</a>
        </div>
    </div>

    <div class=" col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table Data Karyawan Cabang</h4>
                <!-- <p class="text-muted m-b-30 text-size">Tekan tombol Transfer Perdata untuk memindahkan data tertentu atau Tekan tombol transfer Semua Data untuk memindahkan semua data.</p> -->
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jabatan</th>
                            <th>Cabang</th>
                            <th>Aksi</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users->result() as $user) { ?>
                            <tr>
                                <td>
                                    <?= $user->name ?>
                                </td>
                                <td>
                                    <?= $user->nik ?>
                                </td>
                                <td>
                                    <?= $user->jabatan ?>
                                </td>
                                <td>
                                    <?= $user->nama_cabang ?>
                                </td>
                                <td>
                                    <center>
                                        <button class="btn btn-primary text-size" data-toggle="modal" data-target="#myModal">Detail</button>
                                    </center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Detail User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <div class="">
                                <img class="rounded-circle" src="<?= base_url('template/assets/images/montain.jpeg') ?>" data-holder-rendered="true" width="150px" height="150px">
                            </div>
                        </center>

                        <form action="">
                            <div class="ml-3 mr-3 mt-3">
                                <div class="form-group">
                                    <label>Nomor Induk Karyawan</label>
                                    <input type="phone" class="form-control text-size placement number-only" name="nik" id="nik" required placeholder="072104" maxlength="6" />
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control text-size" name="nama" id="nama" required placeholder="Ibrahim Ahmad" />
                                </div>
                                <div class="form-group">
                                    <label class="text-size">Jabatan</label>
                                    <select class="form-control text-size <?= form_error('kategori_produk') ? 'is-invalid' : '' ?>" name="kategori_produk" id="kategori_produk" required>
                                        <option selected value="">Pilih Jabatan</option>
                                        <option value="CMS">CMS</option>
                                        <option value="Sharia Head">Sharia Head</option>
                                        <option value="Sharia Manager">Sharia Manager</option>
                                        <option value="Admin Tele">Admin Tele</option>
                                    </select>
                                    <?= form_error('kategori_produk'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Cabang</label>
                                    <select class="form-control text-size" name="cabang" id="cabang">
                                        <option selected disabled value="">Pilih Cabang</option>
                                        <!-- <?php foreach ($branches->result() as $branch) { ?>
                                        <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                        <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                    <?php } ?> -->
                                    </select>
                                </div>
                                <div class="form-group text-size">
                                    <label>Status</label><br>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="status" required value="Aktif">
                                        <label class="form-check-label">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" required value="Non Aktif">
                                        <label class="form-check-label">
                                            Non Aktif
                                        </label>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="text-size">E-Mail</label>
                                    <div>
                                        <input type="email" class="form-control text-size" name="email" id="email" parsley-type="email" required placeholder="Aisha@bfisyariah.id" />
                                        <?= form_error('email'); ?>
                                    </div>
                                </div> -->
                            </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">batal</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Update</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>