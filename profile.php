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
    <section class="container section_gap">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Welcome <?php echo strtoupper($row[1]); ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 text-center">
                <h3>Full Name : &nbsp;&nbsp;&nbsp; <?php echo $row[1]; ?></h3>
            </div>
            <div class="col-lg-6 text-center">
                <h3>User Name : &nbsp;&nbsp;&nbsp; <?php echo $row[4]; ?></h3>
            </div>
            <div class="col-lg-12 text-center">
                <br>
                <h3>Email : &nbsp;&nbsp;&nbsp; <?php echo $row[2]; ?></h3>
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