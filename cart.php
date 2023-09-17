<?php
session_start();
if (isset($_SESSION['uname'])) {
    include('Admin/include/config.php');
    $user_id = $_SESSION['user_id'];
    $product_id = $_SESSION['product_id'];

    // FETCHING DATA FROM CART TABLE
    $qry1 = "SELECT * FROM cart WHERE pro_id='" . $product_id . "' && user_id='" . $user_id . "'";
    $res1 = mysqli_query($conn, $qry1);
    $ans1 = mysqli_fetch_assoc($res1);

    // FETCHING DATA FROM PRODUCTS TABLE THROUGH PRODUCT_ID
    $qry2 = "SELECT * FROM products WHERE id='" . $product_id . "'";
    $res2 = mysqli_query($conn, $qry2);
    $ans2 = mysqli_fetch_assoc($res2);

    // FETCHING DATA FROM PRODUCT_IMAGE TABLE THROUGH PRODUCT_ID
    $qry3 = "SELECT * FROM product_image WHERE product_id='" . $product_id . "' && num=1";
    $res3 = mysqli_query($conn, $qry3);
    $ans3 = mysqli_fetch_assoc($res3);

?>

    <!DOCTYPE html>
    <html lang="zxx" class="no-js">

    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <?php include('common/favicon.php'); ?>
        <!-- Author Meta -->
        <meta name="author" content="CodePixar">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Karma Shop</title>

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
                        <h1>Shopping Cart</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">Cart</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->

        <!--================Cart Area =================-->
        <section class="cart_area">
            <div class="container">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <form action="#" method="post">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20%;">Product</th>
                                        <th scope="col" style="width: 50%;">Name</th>
                                        <th scope="col" style="width: 10%;">Price</th>
                                        <th scope="col" style="width: 20%;">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="images/product/<?php echo $ans3['image'] ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h3><?php echo $ans2['pro_name']; ?></h3>
                                        </td>
                                        <td>
                                            <h4><?php echo $ans2['price']; ?></h4>
                                        </td>
                                        <td>
                                            <?php
                                            $price = $ans2['price'];
                                            $additional = 200;
                                            $sum = $price + $additional;
                                            ?>
                                            <h4><?php echo $price . " + 200 (Delivery Charges)" ?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <h3>SubTotal</h3>
                                        </td>
                                        <td>
                                            <h3><?php echo $sum; ?></h3>
                                        </td>
                                    </tr>
                                    <tr class="shipping_area">
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr class="out_button_area">
                                        <td colspan="2">
                                            <h4 style="color: red;">Note : You can buy only one item at a time.</h4>

                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="checkout_btn_inner d-flex align-items-center">
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                                <button class="primary-btn" style="border: none;" type="submit" name="order">Place Order</button>
                                                <?php if(isset($_POST['order']))
                                                {
                                                    echo '<script> alert("Your Order Placed Successfully."); 
                                                    window.location = "order_process.php";
                                                    </script>';
                                                } ?>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Cart Area =================-->

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

<?php
} else {
    header('location:login.php');
}
?>