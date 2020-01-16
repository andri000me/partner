<div class="row">
    <div class="col-md-12 mt-5">
        <div class="card directory-card m-b-20">
            <div>
                <div class="directory-bg text-center" style="background-image: url(<?= base_url('template/assets/images/montain.jpeg') ?>)">
                    <div class="directory-overlay">
                        <a class="image-popup-vertical-fit" href="<?= $data->foto != '' ? base_url('uploads/foto_profil/' . $data->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
                            <img class="img-fluid rounded-circle img-size" alt="" src="<?= $data->foto != '' ? base_url('uploads/foto_profil/' . $data->foto) : base_url('assets/img/profile-pic.jpg')  ?>">
                        </a>
                    </div>
                </div>
                <div class="directory-content text-center p-4">
                    <p class=" mt-4"><?= $data->jabatan ?>, <?= $data->nama_cabang ?></p>
                    <h4 class="font-16"><?= $data->name ?><br><span class="badge badge-light">Nik <?= $data->nik ?></span></h4>

                    <ul class="nav nav-tabs mt-5" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" data-toggle="tab" href="#edit-data" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-edit"></i></span>
                                <span class="d-none d-sm-block">Edit profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#edit-password" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-exchange-alt"></i></span>
                                <span class="d-none d-sm-block">Ganti Password</span>
                            </a>
                        </li>
                        <?php if ($this->fungsi->user_login()->level > 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#data-anggota" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-users"></i></span>
                                    <span class="d-none d-sm-block">List Karyawan</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="edit-data" role="tabpanel">
                        <div class="ml-3">
                            <h4 class="mt-0 header-title">Edit Data</h4>
                            <p class="text-muted m-b-30 text-size">Edit data profile sesuai kebutuhan anda.</p>
                        </div>

                        <form action="<?= base_url('Profile/update') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3 text-size">
                                        <label>E-Mail</label>
                                        <div>
                                            <input type="email" class="form-control text-size" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" placeholder="Aisha@bfisyariah.id" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3 text-size">
                                        <label>Cabang</label>
                                        <!-- <input type="text" class="form-control" name="cabang" id="cabang" value="<?= $data->nama_cabang ?>" placeholder=""> -->
                                        <select class="form-control text-size" name="cabang" id="cabang">
                                            <option selected disabled value="">- Pilih Cabang -</option>
                                            <?php foreach ($branches->result() as $branch) { ?>
                                                <option <?= $branch->id_branch == $data->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-size ml-3 mr-3">
                                        <label>Foto</label>
                                        <input type="file" name="foto" class="filestyle text-size" data-buttonname="btn-secondary" placeholder="Silahkan Upload Foto Kegiatan">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group float-right mt-2">
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light text-size" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane p-3" id="edit-password" role="tabpanel">
                        <div class="ml-3">
                            <h4 class="mt-0 header-title">Ganti password</h4>
                            <p class="text-muted m-b-30 text-size">Pastikan password yang anda ganti memiliki
                                satu huruf kapital dan kombinasi nomor.</p>
                        </div>
                        <form action="<?= base_url('Auth/update_password') ?>" method="post">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3 text-size">
                                        <label>Password</label>
                                        <div>
                                            <input type="password" class="form-control text-size" name="password" id="password" placeholder="Masukkan Sandi" minlength="4" required>
                                        </div>
                                        <?= form_error('password')  ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3 text-size">
                                        <label>Password confirm</label>
                                        <div>
                                            <input type="password" class="form-control text-size" name="password_confirm" id="password_confirm" placeholder="Masukkan Sandi" minlength="4" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group float-right mt-2">
                                <div class="col-12   text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light text-size" type="submit">Masuk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php if ($this->fungsi->user_login()->level > 1) { ?>
                        <div class="tab-pane p-3" id="data-anggota" role="tabpanel">
                            <div class="ml-3 mr-3">
                                <h4 class="mt-0 header-title">Table List Karyawan</h4>
                                <table class="datatable table table-striped table-bordered dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nik</th>
                                            <th>Jabatan</th>
                                            <th>Cabang</th>
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
                                                <!-- <td>
                                                    <center><a href="#" class="btn btn-secondary text-size">Edit</a></center>
                                                </td> -->
                                                <!-- <td></td> -->
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>


        </div>
    </div>
</div>
</div>