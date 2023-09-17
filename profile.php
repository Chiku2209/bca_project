<?php
session_start();
?>


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
    <title>Nike | SNKRS</title>

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
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>User Profile</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#">Profile</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <?php
    include_once('Admin/include/config.php');
    extract($_REQUEST);
    $qry = "SELECT * FROM members WHERE id='" . $id . "'";
    $res = mysqli_query($conn, $qry);
    $row = mysqli_fetch_row($res);
    ?>

    <!--================ Profile Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/login.jpg" alt="">
                        <div class="hover">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>User Details</h3>
                        <form class="row login_form" action="member_login.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-12 form-group">
                                <input type="text" disabled class="form-control" id="username" name="username" placeholder="<?php echo $row['1'] ?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" disabled class="form-control" id="password" name="password" placeholder="<?php echo $row[2] ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Profile Area =================-->

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