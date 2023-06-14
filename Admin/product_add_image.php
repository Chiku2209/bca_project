<?php
session_start();
if (isset($_SESSION['email'])) {
    include('include/config.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nike SNKRS | Add Product Image</title>

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
                                <h1 class="m-0">Product Image Page</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="product.php">Product</a></li>
                                    <li class="breadcrumb-item active">Add Product Image</li>
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
                                <h2 class="card-title"><big>ADD Product Image</big></h2>
                            </div>
                            <form action="product_image_process.php" method="post" enctype="multipart/form-data">

                                <div class="card-body">

                                    <div class="form-group">
                                        <label>SELECT PRODUCT</label>
                                        <select class="form-control select2" name="product_id" style="width: 100%;">
                                            <option selected disabled>Select Product</option>
                                            <?php
                                            $qry = "SELECT * FROM products";
                                            $res = mysqli_query($conn, $qry);
                                            while ($result = mysqli_fetch_row($res)) {
                                            ?>
                                                <option value="<?php echo $result[0]; ?>"><?php echo $result[1]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>ENTER NUMBER OF IMAGE</label>
                                        <input type="number" min="1" max="9" class="form-control" id="num" placeholder="Enter Product Image Number" name="num">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">PRODUCT IMAGE</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="image" multiple>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submit" value="add" role="button">ADD Product</button>
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