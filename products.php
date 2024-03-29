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
    <title>Nike | Products</title>

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
                    <h1 style="color:black;">Products</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php" style="color:black;">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="#" style="color:black;">Products</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row">
                <?php
                include_once('Admin/include/config.php');
                $qry1 = "SELECT * FROM products";
                $res1 = mysqli_query($conn, $qry1);
                while ($row1 = mysqli_fetch_row($res1)) {
                    $qry2 = "SELECT * FROM product_image WHERE product_id = '" . $row1[0] . "' && num = 1";
                    $res2 = mysqli_query($conn, $qry2);
                    $row2 = mysqli_fetch_row($res2)
                ?>
                    <div class="col-md-3 p-3">
                        <a href="singleproduct.php?id=<?php echo $row1[0]; ?>"><img class="" src="<?php echo 'images/product/' . $row2[3]; ?>" alt="Product IMAGE...!" height="250px" width="250px">
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- end features Area -->

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