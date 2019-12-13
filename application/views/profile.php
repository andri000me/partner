<div class="row">
    <div class="col-md-12 mt-5">
        <div class="card directory-card m-b-20">
            <div>
                <div class="directory-bg text-center" style="background-image: url(<?= base_url('template/assets/images/montain.jpeg') ?>)">
                    <div class="directory-overlay">
                        <a class="image-popup-vertical-fit" href="<?= $data->foto != '' ? base_url('uploads/foto_profil/' . $data->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
                            <img class="img-fluid rounded-circle" alt="" src="<?= $data->foto != '' ? base_url('uploads/foto_profil/' . $data->foto) : base_url('assets/img/profile-pic.jpg')  ?>" style="width: 200px; height: 200px;">
                        </a>
                    </div>
                </div>
                <div class="directory-content text-center p-4">
                    <p class=" mt-4"><?= $data->jabatan ?>, <?= $data->nama_cabang ?></p>
                    <h4 class="font-16"><?= $data->name ?> #<?= $data->nik ?></h4>

                    <ul class="nav nav-tabs mt-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#data-anggota" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#edit-data" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#ganti-password" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Messages</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="data-anggota" role="tabpanel">
                        <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nik</th>
                                    <th>Jabatan</th>
                                    <th>cabang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="clickable-row" data-href="detail-partnership.html">
                                    <td>
                                        Ibrahim hamad jabar
                                    </td>
                                    <td>
                                        000005
                                    </td>
                                    <td>
                                        CMS
                                    </td>
                                    <td>
                                        BSD
                                    </td>
                                    <td>
                                        <center><a href="" class="btn btn-secondary text-size">Edit</a></center>
                                    </td>
                                    <!-- <td></td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane p-3" id="edit-data" role="tabpanel">
                        <div class="ml-3">
                            <h4 class="mt-0 header-title">Edit Data</h4>
                            <p class="text-muted m-b-30 text-size">Edit data profile sesuai kebutuhan anda.</p>
                        </div>

                        <form action="<?= base_url('Profile/update') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>E-Mail</label>
                                        <div>
                                            <input type="email" class="form-control" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" placeholder="Aisha@bfisyariah.id" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control" name="cabang" id="cabang" value="<?= $data->nama_cabang ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group text-size ml-3 mr-3">
                                        <label>Foto</label>
                                        <input type="file" name="foto" class="filestyle" data-buttonname="btn-secondary" placeholder="Silahkan Upload Foto Kegiatan">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group float-right mt-2">
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane p-3 " id="ganti-password" role="tabpanel">
                        <div class="ml-3">
                            <h4 class="mt-0 header-title">ganti password</h4>
                            <p class="text-muted m-b-30 text-size">Pastikan password yang anda ganti memiliki
                                satu huruf kapital dan kombinasi nomor.</p>
                        </div>
                        <form action="<?= base_url('Auth/update_password') ?>" method="post">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Password</label>
                                        <div>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Sandi" minlength="4" required>
                                        </div>
                                        <?= form_error('password')  ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Password confirm</label>
                                        <div>
                                            <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Masukkan Sandi" minlength="4" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group float-right mt-2">
                                <div class="col-12   text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Masuk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>