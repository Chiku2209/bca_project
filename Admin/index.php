<?php
session_start();

if (!isset($_SESSION['email'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Log in (v2)</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <link rel="stylesheet" href="dist/css/custom.css">
        <style>
            a:hover {
                color: black;
            }

            a:link {
                color: black;
            }
        </style>
    </head>

    <body class="hold-transition login-page" id="bgimg1">
        <div class="" style="float: left; margin-right: 900px; margin-top: 180px; border: none;">
            <!-- /.login-logo -->
            <div class="card clr-red" id="">
                <div class="text-center">
                    <!-- <img src="dist/img/login2.png" alt="" class="h-25 w-25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <br><a href="" class="h1 clr"><b>Admin Login</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg clr"></p>

                    <form action="login_check.php" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"> Email</span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"> Password</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-block" style="background-color: rgb(0, 0, 0); color:white;">Login</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <!-- <br>
                            <p class="mb-1">
                                <a href="forgot-password.html">I forgot my password</a>
                            </p> -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
    </body>

    </html>

<?php
} else {
    header("location:dashboard.php");
}
?>



<!-- https://www.nike.com/in/launch/t/big-kids-air-jordan-3-animal-icon -->