<!-- Start content -->
<div class="page-title-box">
    <h4 class="page-title">Timeline Maintain</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
        <li class="breadcrumb-item active">Timeline Maintain</li>
    </ol>
</div>


<div class="row">
    <div class="col-md-12">
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

                    <ul class="social-links list-inline mb-0 mt-4">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" class="btn-primary" data-toggle="collapse" href="#edit" class="tooltips" data-original-title="Twitter" aria-controls="collapseExample"><i class="fas fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" class="btn-primary" data-toggle="collapse" href="#ganti-password" class="tooltips" data-original-title="Twitter" aria-controls="collapseExample"><i class="fas fa-exchange-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="collapse hide  mt-2 mb-2" id="edit">
            <div class="card card-body mb-0">
                <h4 class="mt-0 header-title">Edit Data</h4>
                <p class="text-muted m-b-30 text-size">Edit data profile sesuai kebutuhan anda.</p>

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
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto" required placeholder="Silahkan Upload Foto Kegiatan" />
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
        </div>
    </div>
    <div class="col-md-6">
        <div class="collapse hide mt-2 mb-2" id="ganti-password">
            <div class="card card-body mb-0">
                <h4 class="mt-0 header-title">ganti password</h4>
                <p class="text-muted m-b-30 text-size">Pastikan password yang anda ganti memiliki
                    satu huruf kapital dan kombinasi nomor.</p>

                <form action="<?= base_url('Auth/update_password') ?>" method="post">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3">
                                <label>Password</label>
                                <div>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Sandi" minlength="4" required>
                                </div>
                                <?= form_error('password')  ?>
                            </div>
                            <div class="form-group ml-3 mr-3">
                                <label>Password confirm</label>
                                <div>
                                    <input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="Masukkan Sandi" minlength="4" required>
                                </div>
                            </div>
                            <div class="form-group float-right mt-2">
                                <div class="col-12   text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Masuk</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>