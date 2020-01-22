<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Daftar Akun</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="<?= base_url('template/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/style.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Begin page -->
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <img src="<?= base_url('template/assets/images/bfisyariah.png') ?>" style="width: 150px">
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Assalamualaikum!</h4>
                    <p class="text-muted text-center">Masuk untuk menggunakan <i>Sysroad</i></p>
                    <?= $this->session->flashdata('berhasil_register') ?>

                    <form method="post" class="form-horizontal m-t-30" action="<?= base_url('User/save') ?>" autocomplete="off">

                        <div class="form-group">
                            <label for="nik">Nomor Induk Karyawan</label>
                            <input type="text" class="form-control <?= form_error('nik') ? 'has-error' : '' ?>" id="nik" name="nik" value="<?= set_value('nik') ?>" placeholder="Nomor Induk Karyawan">
                            <?= form_error('nik') ?>
                        </div>

                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control <?= form_error('name') ? 'has-error' : '' ?>" id="name" name="name" value="<?= set_value('name') ?>" placeholder="Nama Lengkap">
                            <?= form_error('name') ?>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control <?= form_error('email') ? 'has-error' : '' ?>" id="email" name="email" value="<?= set_value('email') ?>" placeholder="E-mail">
                            <?= form_error('email') ?>
                        </div>


                        <div class="form-group">
                            <label for="password">Kata Sandi</label>
                            <input type="password" class="form-control <?= form_error('password') ? 'has-error' : '' ?>" id="password" name="password" placeholder="Kata Sandi">
                            <?= form_error('password') ?>
                        </div>

                        <div class="form-group">
                            <label for="passconf">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control <?= form_error('passconf') ? 'has-error' : '' ?>" id="passconf" name="passconf" placeholder="Konfirmasi Kata Sandi">
                            <?= form_error('passconf') ?>
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Cabang</label>
                            <select class="form-control" name="jabatan" id="jabatan">
                                <option selected disabled value="">Pilih Jabatan</option>
                                <option <?= set_value('jabatan') == '1' ? 'selected' : '' ?> value="1">CMS</option>
                                <option <?= set_value('jabatan') == '2' ? 'selected' : '' ?> value="2">Sharia Head</option>
                                <option <?= set_value('jabatan') == '3' ? 'selected' : '' ?> value="3">Sharia Manager</option>
                                <option <?= set_value('jabatan') == '4' ? 'selected' : '' ?> value="4">Admin Tele</option>
                            </select>
                            <?= form_error('name') ?>
                        </div>

                        <div class="form-group">
                            <label for="id_branch">Cabang</label>
                            <select class="form-control" name="id_branch" id="id_branch">
                                <option selected disabled value="">Pilih Cabang</option>
                                <?php foreach ($branches->result() as $branch) {  ?>
                                    <?php if ($branch->id_branch == 46)  continue; ?>
                                    <option <?= set_value('id_branch') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('name') ?>
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <!-- <p class="font-14 text-muted mb-0">By registering you agree to the Lexa <a href="#" class="text-primary">Terms of Use</a></p> -->
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p>Already have an account ? <a href="<?= base_url('auth') ?>" class="text-primary"> Login </a> </p>
            <p>© 2018 - 2019 Lexa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
        </div>
    </div>


    <!-- jQuery  -->
    <script src="<?= base_url('template/assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/bootstrap.bundle.min') ?>.js"></script>
    <script src="<?= base_url('template/assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/waves.min.js') ?>"></script>

    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url('template/assets/js/app.js') ?>"></script>

</body>

</html>