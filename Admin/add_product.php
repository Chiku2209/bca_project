<?php
session_start();
if (isset($_SESSION['email'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nike SNKRS | Add Product</title>

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
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <br>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h2 class="card-title"><big>ADD Product</big></h2>
                            </div>
                            <form action="product_process.php" method="post" enctype="multipart/form-data">

                                <div class="card-body">

                                    <div class="form-group">
                                        <label>PRODUCT NAME</label>
                                        <input type="text" class="form-control" id="pro_name" placeholder="Enter Product Name" name="pro_name">
                                    </div>

                                    <div class="form-group">
                                        <label>COLOR</label>
                                        <input type="text" class="form-control" id="color" placeholder="Enter Color Name" name="color">
                                    </div>

                                    <div class="form-group">
                                        <label>DESCRIPTION</label>
                                        <textarea name="description" class="form-control" id="description" cols="100" rows="2" placeholder="Enter Description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>SKU</label>
                                        <input type="text" class="form-control" id="sku" placeholder="Enter SKU detail" name="sku">
                                    </div>

                                    <div class="form-group">
                                        <label>COUNTRY</label>
                                        <input type="text" class="form-control" id="country" placeholder="Enter Country Name" name="country">
                                    </div>

                                    <div class="form-group">
                                        <label>HERITAGE</label>
                                        <textarea name="heritage" class="form-control" id="heritage" cols="100" rows="2" placeholder="Enter Heritage Description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>IMAGE</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label">Choose Images</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submit" role="button">ADD Product</button>
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