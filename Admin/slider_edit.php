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
        <title>Nike SNKRS | Edit Product Image</title>

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
                                <!-- <h1 class="m-0">Edit Product Image</h1> -->
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="slider.php">Slider</a></li>
                                    <li class="breadcrumb-item active">Edit Slider</li>
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
                                <h2 class="card-title"><big>Edit Product Image</big></h2>
                            </div>
                            <?php
                            extract($_REQUEST);
                            $query = "SELECT * FROM slider WHERE id='" . $id . "'";
                            $ress = mysqli_query($conn, $query);
                            $row = mysqli_fetch_row($ress);
                            ?>
                            <form action="slider_add_process.php" method="post" enctype="multipart/form-data">

                                <div class="card-body">
                                    <input type="hidden" name="id" value="<?php echo $row[0]; ?>">
                                    <div class="form-group">
                                        <label>SLIDER DESCRIPTION</label>
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="3"><?php echo $row[2]; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">SLIDER IMAGE</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="image" multiple>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div>
                                            <img class="image-disp" src="../images/slider/<?php echo $row[1]; ?>" alt="Slider Image" height="200px" width="200px">
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" name="submit" value="edit" role="button">Submit</button>
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