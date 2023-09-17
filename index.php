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
    <!-- 
        CSS 
            ============================================= -->
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

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        <?php
                        include('Admin/include/config.php');
                        $qry = "SELECT * from slider";
                        $res = mysqli_query($conn, $qry);
                        while ($row = mysqli_fetch_row($res)) {
                        ?>
                            <div class="row single-slide align-items-center d-flex">
                                <div class="col-lg-5 col-md-6">
                                    <div class="banner-content">
                                        <h2><?php echo $row[2] ?></h2>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="banner-img">
                                        <!-- <img class="img-fluid" src="img/banner/banner-img.png" alt=""> -->
                                        <img src="<?php echo 'images/slider/' . $row[1]; ?>" alt="Product Image" height="320px">
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon1.png" alt="">
                        </div>
                        <h6>Free Delivery</h6>
                        <p>In All India</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon2.png" alt="">
                        </div>
                        <h6>Return Policy</h6>
                        <p>Within 15 days</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon3.png" alt="">
                        </div>
                        <h6>24/7 Support</h6>
                        <p>We're only A Call Away</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon4.png" alt="">
                        </div>
                        <h6>Secure Payment</h6>
                        <p>Payments without the Risk</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->

    <!-- Start category Area -->
    <section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <img class="img-fluid w-100" src="img/category/c2.jpg" alt="">             
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category Area -->

    <!-- start product Area -->
    <br>
    <section class="container section_gap">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Just Arrived...!</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="owl-carousel1">
            <?php
            include_once('Admin/include/config.php');
            $qry1 = "SELECT * FROM products WHERE description2='YES'";
            $res1 = mysqli_query($conn, $qry1);
            while ($row1 = mysqli_fetch_row($res1)) {
                $qry2 = "SELECT * FROM product_image WHERE product_id = '" . $row1[0] . "' && num = 1";
                $res2 = mysqli_query($conn, $qry2);
                $row2 = mysqli_fetch_row($res2)
            ?>
                <div class="col-lg-12 col-md-6">
                    <div class="">
                        <a href="singleproduct.php?id=<?php echo $row1[0]; ?>"><img class="" src="<?php echo 'images/product/' . $row2[3]; ?>" alt="Product IMAGE...!" height="300px" width="300px"></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- Start exclusive deal Area -->
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 no-padding exclusive-left">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1>Exclusive Hot Deal Starts Soon!</h1>
                            <p>Stay tuned for the new products and exclusive deals.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row clock-wrap">
                                <div class="col clockinner1 clockinner">
                                    <h1 class="days">150</h1>
                                    <span class="smalltext">Days</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="hours">23</h1>
                                    <span class="smalltext">Hours</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="minutes">47</h1>
                                    <span class="smalltext">Mins</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="seconds">59</h1>
                                    <span class="smalltext">Secs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="" class="primary-btn">Shop Now</a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End exclusive deal Area -->

    <!-- Start brand Area -->
    <section class="brand-area section_gap">
        <div class="container">
            <div class="row">
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <!-- End brand Area -->

    <!-- start footer Area -->
    <?php
    include('common/footer.php');
    ?>
    <!-- End footer Area -->
    <?php
    include('common/script.php');
    ?>
    <script>
        var owl = $('.owl-carousel1');
        owl.owlCarousel({
            loop: false,
            nav: false,
            margin: 0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                960: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    </script>
</body>

</html>