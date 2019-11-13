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
    <link href="<?= base_url('template/assets/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>

    <div id="wrapper">

        <div class="topbar">
            <?php $this->load->view('template/partial/topbar') ?>
        </div>

        <div class="left side-menu">
            <?php $this->load->view('template/partial/left-sidebar') ?>
        </div>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <?= $contents ?>
                </div>

            </div>

            <footer class="footer">
                © 2018 - 2019 Lexa - <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
            </footer>

        </div>


    </div>


    <!-- jQuery  -->
    <script src="<?= base_url('template/assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/waves.min.js') ?>"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael-min.js"></script>
    <script src="<?= base_url('template/assets/pages/dashboard.js') ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('template/assets/js/app.js') ?>"></script>
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>
</body>

</html>