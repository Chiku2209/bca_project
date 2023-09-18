<?php
session_start();
if (isset($_SESSION['email'])) {

    include_once('include/config.php');
    extract($_REQUEST);
    $qry = "SELECT * FROM products WHERE id='" . $id . "'";
    $res = mysqli_query($conn, $qry);
    $result = mysqli_fetch_row($res);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nike SNKRS | Edit Product</title>

        <!-- Styles -->
        <?php include('common/style.php'); ?>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <!-- <?php include('common/preloader.php'); ?>  -->

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
                                <h1 class="m-0">Product Page</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="product.php">Product</a></li>
                                    <li class="breadcrumb-item active">Edit Product</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <br>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h2 class="card-title"><big>Edit Product</big></h2>
                            </div>
                            <form action="product_process.php" method="post" enctype="multipart/form-data">

                                <div class="card-body">
                                    <input type="hidden" name="id" value="<?php echo $result[0]; ?>">
                                    <div class="form-group">
                                        <label>PRODUCT NAME</label>
                                        <input type="text" class="form-control" id="pro_name" placeholder="Enter Product Name" value="<?php echo $result[1]; ?>" name="pro_name">
                                    </div>

                                    <div class="form-group">
                                        <label>PRODUCT PRICE</label>
                                        <input type="number" class="form-control" id="price" placeholder="Enter Product Price" name="price" value="<?php echo $result[2]; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>COLOR</label>
                                        <input type="text" class="form-control" id="color" placeholder="Enter Color" name="color" value="<?php echo $result[3]; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>DESCRIPTION 1</label>
                                        <textarea name="description1" class="form-control" id="description1" cols="100" rows="2" placeholder="Enter Description 1"><?php echo $result[4]; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>LATEST</label>
                                        <textarea name="description2" class="form-control" id="description2" cols="100" rows="2" placeholder="Yes/No"><?php echo $result[5]; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>SKU</label>
                                        <input type="text" class="form-control" id="sku" placeholder="Enter SKU detail" name="sku" value="<?php echo $result[6]; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>COUNTRY</label>
                                        <input type="text" class="form-control" id="country" placeholder="Enter Country Name" name="country" value="<?php echo $result[7]; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>HERITAGE</label>
                                        <textarea name="heritage" class="form-control" id="heritage" cols="100" rows="2" placeholder="Enter Heritage Description"><?php echo $result[8]; ?></textarea>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" value="edit" class="btn btn-primary" name="submit" role="button">Edit Product</button>
                                </div>

                            </form>
                        </div>
                    </div><!-- /.container-fluid -->
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