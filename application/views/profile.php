<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <!-- <h3><b>Profile</b></h3> -->
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol> -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card directory-card m-b-20 card-margin-5">
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

                    <ul class="nav nav-tabs nav-tabs-custom mt-5" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" data-toggle="tab" href="#edit-data" role="tab">
                                <span class="d-block d-sm-none mb-1"><i class="fas fa-edit"></i></span>
                                <span class="d-none d-sm-block mb-1">Edit Profile</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#edit-password" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-exchange-alt"></i></span>
                                <span class="d-none d-sm-block">Ganti Password</span>
                            </a>
                        </li> -->
                        <?php if ($this->fungsi->user_login()->level > 1) { ?>
                            <!-- <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#data-anggota" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-users"></i></span>
                                    <span class="d-none d-sm-block">List Karyawan</span>
                                </a>
                            </li> -->
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
                                <div class="col-md-6">
                                    <div class="form-group text-size form-margin">
                                        <label>Foto</label>
                                        <input type="file" name="foto" class="filestyle text-size" data-buttonname="btn-secondary" placeholder="Silahkan Upload Foto Kegiatan">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group text-size form-left">
                                        <label>E-Mail</label>
                                        <div>
                                            <input type="email" class="form-control text-size" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" placeholder="Aisha@bfisyariah.id" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group text-size form-right">
                                        <label>Cabang</label>
                                        <!-- <input type="text" class="form-control" name="cabang" id="cabang" value="<?= $data->nama_cabang ?>" placeholder=""> -->
                                        <select class="form-control text-size" name="" id="cabang" disabled>
                                            <option selected disabled value="">- Pilih Cabang -</option>
                                            <?php foreach ($branches->result() as $branch) { ?>
                                                <option <?= $branch->id_branch == $data->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group text-size form-margin">
                                        <label>Password</label>
                                        <div>
                                            <input type="password" class="form-control text-size" name="password" id="password" placeholder="Masukkan Sandi" minlength="6">
                                        </div>
                                        <?= form_error('password')  ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-size form-margin">
                                        <label>Password confirm</label>
                                        <div>
                                            <input type="password" class="form-control text-size" name="password_confirm" id="password_confirm" placeholder="Masukkan Ulang Sandi" minlength="6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary w-md text-size float-right form-margin mb-4" type="submit"><b>Simpan</b></button>
                        </form>
                    </div>

                    <!-- <div class="tab-pane p-3" id="edit-password" role="tabpanel">
                        <div class="ml-3">
                            <h4 class="mt-0 header-title">Ganti password</h4>
                            <p class="text-muted m-b-30 text-size">Pastikan password yang anda ganti memiliki satu huruf kapital dan kombinasi nomor.</p>
                        </div>
                        <form action="<?= base_url('Auth/update_password') ?>" method="post">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3 text-size">
                                        <label>Password</label>
                                        <div>
                                            <input type="password" class="form-control text-size" name="password" id="password" placeholder="Masukkan Sandi" minlength="6" required>
                                        </div>
                                        <?= form_error('password')  ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3 text-size">
                                        <label>Password confirm</label>
                                        <div>
                                            <input type="password" class="form-control text-size" name="password_confirm" id="password_confirm" placeholder="Masukkan Sandi" minlength="6" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group float-right">
                                <div class="col-12   text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light text-size mt-2 mb-2" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div> -->

                    <!-- <?php if ($this->fungsi->user_login()->level > 1) { ?>
                        <div class="tab-pane p-3" id="data-anggota" role="tabpanel">
                            <div class="form-margin">
                                <h4 class="mt-0 header-title">Table List Karyawan</h4>
                                <table id="datatable-buttons-profile" class="table table-hover dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Nik</th>
                                            <th>Jabatan</th>
                                            <th>Cabang</th>
                                            <th>Status</th>
                                            <th> </th>
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
                                                    <?= $user->is_active == 0 ? '<b class="text-danger">Non Aktif</b>' : '<b class="text-success">Aktif</b>' ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?> -->

                </div>
            </div>


        </div>
    </div>
</div>
</div>