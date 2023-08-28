<?php
session_start();
include_once('Admin/include/config.php');
$id = $_REQUEST['id'];

// for product

$qry = "SELECT * FROM products WHERE id='" . $id . "'";
$res = mysqli_query($conn, $qry);
$row = mysqli_fetch_row($res);

// for product image

$qry2 = "SELECT * FROM product_image WHERE product_id='" . $id . "'";
$res2 = mysqli_query($conn, $qry2);
$row2 = mysqli_fetch_all($res2);

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

	<!-- CSS ============================================ -->
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
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<p>product-details</p>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo 'images/product/' . $row2[0][3]; ?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo 'images/product/' . $row2[1][3]; ?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo 'images/product/' . $row2[2][3]; ?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo 'images/product/' . $row2[3][3]; ?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo 'images/product/' . $row2[4][3]; ?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo 'images/product/' . $row2[5][3]; ?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $row[1]; ?></h3>
						<h3>Color : <?php echo $row[3]; ?></h3>
						<h2><span>Price</span> &nbsp;: <?php echo $row[2]; ?>&#x20B9;</h2>
						<ul class="list">
							<li><span>Availibility</span>&nbsp;&nbsp; : In Stock</li>
						</ul>
						<p><?php echo $row[4]; ?></p>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p><?php echo $row[4]; ?></p>
					<br>
					<p><?php echo $row[8]; ?></p>
					<br>
					<p>Sneaker originates from the word sneak, which translates as to walk stealthily about,
						also related to stealing, in fact, thieves were known as sneaks. The only inconsistency was
						that back then, shoes were mostly made of leather, so that walking in them was noisy, thus passing
						unnoticed was out of the question. Things changed when, in the 19th century, the first rubber-soled
						shoes appeared, becoming the perfect choice to walk silently. That's exactly how the term sneaker
						originated.</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Size</h5>
									</td>
									<td>
										<h5>1 to 10 All size available</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Weight</h5>
									</td>
									<td>
										<h5>997gm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>SKU</h5>
									</td>
									<td>
										<h5><?php echo $row[6]; ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Made</h5>
									</td>
									<td>
										<h5>Handmade</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Country of Origin </h5>
									</td>
									<td>
										<h5><?php echo $row[7]; ?></h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Quality</h5>
									</td>
									<td>
										<h5>Excellent</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Quantity</h5>
									</td>
									<td>
										<h5>At a time only one</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Box</h5>
									</td>
									<td>
										<h5>Original</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

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