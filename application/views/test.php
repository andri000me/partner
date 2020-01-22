<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('uploads/css/style.css') ?>">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <style>
        .active {
            color: #0659DE;
        }

        .box-shadow {
            -webkit-box-shadow: 0px 50px 50px -20px rgba(6, 89, 222, 0.23);
            box-shadow: 0px 50px 50px -20px rgba(6, 89, 222, 0.23);
        }
    </style>
</head>

<body style="background-color: #fafafa">
    <div class="container" style="margin-top: 159px">
        <div class="box-shadow" style="background-color: #ffffff; border-radius: 0px 5px 5px 0px">
            <div class="row">
                <div class="col-lg-6" style="background-image: url('<?= base_url('uploads/night.jpg') ?>'); width: 351px; height: 500px;">
                    <div style="margin-left: 151px; margin-top: 179px;">
                        <img class="mb-4" src="" alt="" width="72" height="72">
                        <H1 style="color: #FFFFFF">S I P P D T</H1>
                    </div>
                </div>
                <div class="col-lg-6" style="width: 351px; height: 500px;">
                    <div class="ml-5 mr-5 mt-5 mb-5" style="">
                        <form class="form-signin">
                            <h1 class="h3 mb-3 font-weight-bolder">Hello!</h1>
                            <p style="color: #bdbdbd">Silahkan masukkan alamat email dan password Anda untuk masuk ke Sistem Informasi Percepatan Pembangunan Daerah Tertinggal.</p>

                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            </div>


                            <div class="row mt-2">
                                <div class="col-lg-6">
                                    <a href="#">Lupa Password</a>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        $('input').focus(function() {
            $(this).prev().addClass('active');
        }).blur(function() {
            $(this).prev().removeClass('active');
        });
    </script>
</body>

</html>