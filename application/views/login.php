<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?= base_url('template/assets/images/favicon.ico') ?>">

    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <!-- Dropzone css -->
    <link href="../assets/plugins/css/dropzone.css" rel="stylesheet" type="text/css">

    <!-- Plugins css -->
    <link href="../assets/plugins/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="../assets/plugins/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="../assets/plugins/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="../assets/plugins/css/morris.css" rel="stylesheet" />
    <link href="../assets/plugins/css/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <link href="<?= base_url('template/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/style.css') ?>" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="../assets/plugins/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../assets/plugins/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div class="wrapper-page">

        <div class="card">
            <form action="<?= base_url('Auth/process') ?>" method="post">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <img src="<?= base_url('template/assets/images/bfi.png') ?>" style="width: 150px">
                    </h3>

                    <div class=" p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Assalamualaikum!</h4>
                        <p class="text-muted text-center">Masuk untuk menggunakan <i>Sysroad</i></p>

                        <form class="form-horizontal m-t-30" action="index.html">

                            <div class="form-group">
                                <label for="username">Nomor Induk karyawan</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Mauskkan NIK">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="password" name="password" nam placeholder="Masukkan Sandi">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12   text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Masuk</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="<?= base_url('Auth/lupa_password') ?>" class="text-muted"><i class="mdi mdi-lock"></i> Lupa Password? </a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="m-t-40 text-center">
                        <p>Belum punya akun ? <a href="#" class="text-primary"> Daftar yuk </a> </p>
                        <p>2019 BFI Syariah. Crafted with by Themesbrand</p>
                    </div>

                </div>
            </form>
        </div>

    </div>


    <!-- jQuery  -->
    <script src="<?= base_url('template/assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/waves.min.js') ?>"></script>
    <script src="../assets/js/common_scripts_min.js"></script>

    <script src="../assets/plugins/js/jquery.sparkline.min.js"></script>

    <!-- Plugins js -->
    <script src="template/assets/plugins/js/bootstrap-colorpicker.min.js"></script>
    <script src="template/assets/plugins/js/bootstrap-datepicker.js"></script>
    <script src="template/assets/plugins/js/select2.min.js"></script>
    <script src="template/assets/plugins/js/bootstrap-maxlength.min.js"></script>
    <script src="template/assets/plugins/js/bootstrap-filestyle.min.js"></script>
    <script src="template/assets/plugins/js/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Sweet-Alert  -->
    <script src="template/assets/plugins/js/sweetalert2.min.js"></script>
    <script src="template/assets/pages/sweet-alert.init.js"></script>

    <!--Dropzone-->
    <script src="template/assets/plugins/js/dropzone.js"></script>

    <!-- Plugins Init js -->
    <script src="template/assets/pages/form-advanced.js"></script>

    <!-- Required datatable js -->
    <script src="template/assets/plugins/js/jquery.dataTables.min.js"></script>
    <script src="template/assets/plugins/js/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="template/assets/plugins/js/dataTables.buttons.min.js"></script>
    <script src="template/assets/plugins/js/buttons.bootstrap4.min.js"></script>
    <script src="template/assets/plugins/js/jszip.min.js"></script>
    <script src="template/assets/plugins/js/pdfmake.min.js"></script>
    <script src="template/assets/plugins/js/vfs_fonts.js"></script>
    <script src="template/assets/plugins/js/buttons.html5.min.js"></script>
    <script src="template/assets/plugins/js/buttons.print.min.js"></script>
    <script src="template/assets/plugins/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="template/assets/plugins/js/dataTables.responsive.min.js"></script>
    <script src="template/assets/plugins/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="template/assets/pages/datatables.init.js"></script>

    <!--Morris Chart-->
    <script src="template/assets/plugins/js/morris.min.js"></script>
    <script src="template/assets/plugins/js/raphael-min.js"></script>
    <script src="template/assets/pages/dashboard.js"></script>

    <!-- App js -->
    <script src="template/assets/js/app.js"></script>
    <script src="template/assets/js/apps.js"></script>

</body>

</html>