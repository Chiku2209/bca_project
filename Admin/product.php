<?php
session_start();
if (isset($_SESSION['email'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nike SNKRS | Product</title>

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
                                    <li class="breadcrumb-item active">Product</li>
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
                                <h2 class="card-title"><big>Product Table</big></h2>
                                <a href="product_add.php" class="float-right"><i class="fa-solid fa-square-plus fa-2xl" style="color: #ffffff;"></i></a>
                                <a href="product_add_image.php" class="float-right mr-2"><i class="fa-sharp fa-solid fa-image fa-2xl"></i></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php
                                include_once('include/config.php');
                                $qry = "SELECT * from products order by id desc";
                                $res = mysqli_query($conn, $qry);
                                ?>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Color</th>
                                            <th>Description 1</th>
                                            <th>Description 2</th>
                                            <th>SKU</th>
                                            <th>Country</th>
                                            <th>Heritage</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        while ($result = mysqli_fetch_row($res)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no;
                                                    $no++; ?></td>
                                                <td><?php echo $result[1]; ?></td>
                                                <td><?php echo $result[2]; ?></td>
                                                <td><?php echo $result[3]; ?></td>
                                                <td><?php echo substr($result[4], 0, 100); ?></td>
                                                <td><?php echo substr($result[5], 0, 100); ?></td>
                                                <td><?php echo $result[6]; ?></td>
                                                <td><?php echo $result[7]; ?></td>
                                                <td><?php echo substr($result[8], 0, 100); ?></td>
                                                <td><a href="product_edit.php?id=<?php echo $result[0]; ?>"><i class="fa-solid fa-file-pen fa-xl"></i></a></td>
                                                <td><a href="product_process.php?id=<?php echo $result[0]; ?>&val=del"><i class="fa-solid fa-trash fa-xl"></i></a></td>
                                            </tr>
                                        <?php

                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Color</th>
                                            <th>Description 1</th>
                                            <th>Description 2</th>
                                            <th>SKU</th>
                                            <th>Country</th>
                                            <th>Heritage</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
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
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    </body>

    </html>

<?php
} else {
    header('location:index.php');
}
?>