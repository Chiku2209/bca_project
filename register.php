<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <?php
        include('common/favicon.php');
    ?>
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Nike | Register</title>

    <!-- CSS ============================================= -->
    <?php
        include('common/style.php');
    ?>
</head>

<body>

    <!-- Start Header Area -->
    <?php
        include('common/header.php');
    ?>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="" style="margin-top: 150px;">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1 style="color:black;">Login/Register</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php" style="color:black;">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html" style="color:black;">Login/Register</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/login.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Sign Up</h3>
                        <form class="row login_form" action="register_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Username">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->

    <!-- start footer Area -->
    <?php
        include('common/footer.php');
    ?>

    <!-- End footer Area -->


    <?php
    include('common/script.php');
    ?>
</body>

</html>