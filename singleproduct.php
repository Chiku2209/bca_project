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
				<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
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
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-6">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item reply">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="review_box">
								<h4>Post a comment</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-12">
							<div class="row total_rate text-center">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="box_total">
										<br>
										<h5>Overall</h5>
										<h4>4.0</h4>
										<h6>(03 Reviews)</h6>
										<br><br>
									</div>
								</div>
							</div>
							<br>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
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