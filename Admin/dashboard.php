<?php
session_start();
if (isset($_SESSION['email'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nike SNKRS | Dashboard</title>

        <!-- Styles -->
        <?php include('common/style.php'); ?>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <!-- <?php include('common/preloader.php'); ?> -->

            <!-- Navbar -->
            <?php include('common/header.php'); ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php include('common/sidebar.php'); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Dashboard</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">Dashboard</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <?php
                    include_once('include/config.php');
                    $qry1 = "SELECT * FROM members";
                    $res1 = mysqli_query($conn, $qry1);
                    $members = mysqli_num_rows($res1);

                    $qry2 = "SELECT * FROM products";
                    $res2 = mysqli_query($conn, $qry2);
                    $products = mysqli_num_rows($res2);

                    $qry3 = "SELECT * FROM slider";
                    $res3 = mysqli_query($conn, $qry3);
                    $slider = mysqli_num_rows($res3);

                    $qry4 = "SELECT * FROM orders";
                    $res4 = mysqli_query($conn, $qry4);
                    $orders = mysqli_num_rows($res4);

                ?>
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3><?php echo $members; ?></h3>

                                        <p>Registered Members</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-person"></i>
                                    </div>
                                    <a href="user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3><?php echo $orders; ?></h3>

                                        <p>All Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-shopping-cart"></i>
                                    </div>
                                    <a href="order.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3><?php echo $products; ?></h3>

                                        <p>Added Products</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-p"></i>
                                    </div>
                                    <a href="product.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </section>

                <!-- /.Main content -->
            </div>
            <!-- /Footer -->
            <?php include('common/footer.php'); ?>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <?php include('common/script.php'); ?>
    </body>

    </html>

<?php
} else {
    header('location:index.php');
}
?>