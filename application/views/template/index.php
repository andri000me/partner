<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Database Partnership</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?= base_url('template/assets/images/favicon.ico') ?>">

    <link rel="stylesheet" href="<?= base_url('template/assets/plugins/css/morris.css') ?>">

    <link href="<?= base_url('template/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('template/assets/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="<?= base_url('template/assets/plugins/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('template/assets/plugins/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= base_url('template/assets/plugins/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Dropzone css -->
    <link href="<?= base_url('template/assets/plugins/css/dropzone.css') ?>" rel="stylesheet" type="text/css">

    <!-- Plugins css -->
    <link href="<?= base_url('template/assets/plugins/css/bootstrap-colorpicker.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('template/assets/plugins/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('template/assets/plugins/css/select2.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('template/assets/plugins/css/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('template/assets/plugins/css/morris.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('template/assets/plugins/css/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- jQuery  -->
    <script src="<?= base_url('template/assets/js/jquery.min.js') ?>"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Topbar -->
        <div class="topbar">
            <?php $this->load->view('template/partial/topbar') ?>
        </div>

        <!-- Left Sidebar -->
        <div class="left side-menu">
            <?php $this->load->view('template/partial/left-sidebar') ?>
        </div>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <?= $contents ?>
                </div>

            </div>

            <footer class="footer mt-5">
                <p class="text-size">2019 BFI Syariah. Crafted with by Themesbrand</p>
            </footer>

        </div>


    </div>



    <script src="<?= base_url('template/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/waves.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/registration_wizard_func.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/common_scripts_min.js') ?>"></script>

    <script src="<?= base_url('template/assets/plugins/js/jquery.sparkline.min.js') ?>"></script>

    <!--Morris Chart-->
    <script src="<?= base_url('template/assets/plugins/js/morris.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/raphael-min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/dashboard.js') ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('template/assets/js/app.js') ?>"></script>




    <!-- Required datatable js -->
    <script src="<?= base_url('template/assets/plugins/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/dataTables.bootstrap4.min.js') ?>"></script>

    <!-- Datatable init js -->
    <script src="<?= base_url('template/assets/pages/datatables.init.js') ?>"></script>

    <!-- Buttons examples -->
    <script src="<?= base_url('template/assets/plugins/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/jszip.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/buttons.colVis.min.js') ?>"></script>

    <!-- Responsive examples -->
    <script src="<?= base_url('template/assets/plugins/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/responsive.bootstrap4.min.js') ?>"></script>

    <!-- Sweet-Alert  -->
    <script src="<?= base_url('template/assets/plugins/js/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/pages/sweet-alert.init.js') ?>"></script>

    <!--Dropzone-->
    <script src="<?= base_url('template/assets/plugins/js/dropzone.js') ?>"></script>

    <!-- Plugins Init js -->
    <script src="<?= base_url('template/assets/pages/form-advanced.js') ?>"></script>

    <!-- Plugins js -->
    <script src="<?= base_url('template/assets/plugins/js/bootstrap-colorpicker.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/select2.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/bootstrap-maxlength.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/bootstrap-filestyle.min.js') ?>"></script>
    <script src="<?= base_url('template/assets/plugins/js/jquery.bootstrap-touchspin.min.js') ?>"></script>

    <script>
        var rupiah = document.getElementById("rupiah");
        rupiah.addEventListener("keyup", function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, "Rp. ");
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
        }
    </script>



    <!-- Custom Scripts -->
    <?php $this->load->view('template/partial/scripts') ?>
</body>

</html>