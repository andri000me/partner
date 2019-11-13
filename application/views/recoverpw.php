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
                    <a href="index.html" class="logo logo-admin"><img src="assets/images/logo.png" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 mb-3 text-center">Reset Password</h4>
                    <div class="alert alert-info text-center" role="alert">
                        Masukan Email anda, maka password akan di kirim ke Email Anda!
                    </div>

                    <form method="post" class="form-horizontal m-t-30" action="<?= base_url('Auth/lupa_password') ?>">

                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right">
                                <button name="reset_password" class="btn btn-primary w-md waves-effect waves-light" type="submit">Kirim</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>


        <!-- jQuery  -->
        <script src="<?= base_url('template/assets/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('template/assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('template/assets/js/metisMenu.min.js') ?>"></script>
        <script src="<?= base_url('template/assets/js/jquery.slimscroll.js') ?>"></script>
        <script src="<?= base_url('template/assets/js/waves.min.js') ?>"></script>

        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!--Morris Chart-->
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael-min.js"></script>
        <script src="<?= base_url('template/assets/pages/dashboard.js') ?>"></script>

        <!-- App js -->
        <script src="<?= base_url('template/assets/js/app.js') ?>"></script>

</body>

</html>