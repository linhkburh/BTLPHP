<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
<script type="text/javascript">
    function add(id){
		var f = document.getElementById('add');
        document.getElementById('id').value = id;
		document.getElementById('sl').value = document.getElementById('quantity_value').innerText;
        f.submit();
    }
    </script>
	<?php
	if(isset($_GET['id']) && !isset($_POST['slcon']) && !isset($_POST['idsp'])){
		$temp2 = $_GET['id'];
		?>
			<style>
				.slcon {
					display: none;
				}
			</style>
		<?php
	}else if(!isset($_GET['id'])&& isset($_POST['slcon']) && isset($_POST['idsp'])){
		$temp2 = $_POST['idsp'];
		$slcon = $_POST['slcon'];
		?>
			<style>
				.slcon {
					display: block;
					color: red;
				}
			</style>
		<?php
	}else{
		$temp2 = $_POST['idsp'];
		?>
			<style>
				.slcon {
					display: none;
				}
			</style>
		<?php
	}
	
	$giohang = "";
	$Addgiohang = "";
	if(isset($_COOKIE['email'])){
		$giohang = "cart.php";
		$Addgiohang = "Addcart.php";
		$temp = $_COOKIE['email'];
		?>
		<style>
			.account{
				display: none;
			}
			.account1{
				display: inline-block;
				position: relative;
				min-width: 50px;
				padding-left: 20px;
				text-align: center;
				vertical-align: middle;
			}
			.account1 > a
			{
				display: block;
				color: #b5aec4;
				font-weight: 400;
				height: 50px;
				line-height: 50px;
				font-size: 13px;
				width: 200px;
			}
			.account1:hover .account_selection
			{
				visibility: visible;
				opacity: 1;
				top: 100%;
			}
		</style>
		<?php
	}else{
		$giohang = "login.html";
		$Addgiohang = "login.html";
		?>
		<style>
			.account1{
				display: none;
			}
		</style>
		<?php
	}
?>
</head>
<body>
<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Giao h??ng mi???n ph?? cho t???t c??? c??c ????n h??ng tr??n 100.000VN??</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										VN??
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">Kh??c</a></li>										
									</ul>
								</li>
								<li class="language">
									<a href="#">
										Vietnamese
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">English</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										T??i kho???n
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>????ng nh???p</a></li>
										<li><a href="Register.html"><i class="fa fa-user-plus" aria-hidden="true"></i>????ng k??</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">conca<span>shop</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<ul class="navbar_menu">
									<li><a href="index.php">trang ch???</a></li>
									<li><a href="categories.php">gian h??ng</a></li>
									<li><a href="#">khuy???n m??i</a></li>
									<li><a href="#">li??n h???</a></li>
								</ul>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li class="account1">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
									<ul class="account_selection" style="width: 250px;">
										<li><a href="#"><?=$_COOKIE['email']?></a></li><br>
										<li><a href="logout.php" style="width: 100px">????ng Xu???t</a></li>
									</ul>
								</li>
								<li class="checkout">
									<a href="cart.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>

	<!-- Hamburger Menu -->

	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						VN??
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">Kh??c</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						Vietnamese
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">English</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>????ng nh???p</a></li>
						<li><a href="Register.html"><i class="fa fa-user-plus" aria-hidden="true"></i>????ng k??</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">Trang ch???</a></li>
				<li class="menu_item"><a href="categories.php">Gian h??ng</a></li>
				<li class="menu_item"><a href="#">Khuy???n m??i</a></li>
				<li class="menu_item"><a href="#">Li??n h???</a></li>
			</ul>
		</div>
	</div>

	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Trang ch???</a></li>
						<li><a href="categories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>????? nam</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Chi ti???t s???n ph???m</a></li>
					</ul>
				</div>

			</div>
		</div>
		<?php
			include_once "ketnoi.php";
			$sql = "Select * from product where id_product = '$temp2'";
			$rs = mysqli_query($con,$sql);
			while($row = mysqli_fetch_assoc($rs)){
		?>
		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
							<div class="single_product_thumbnails">
								<ul>
									<li><img src="<?=$row['thumbnail']?>" alt="" data-image="<?=$row['thumbnail']?>"></li>
									<li class="active"><img src="<?=$row['thumbnail']?>" alt="" data-image="<?=$row['thumbnail']?>"></li>
									<li><img src="<?=$row['thumbnail']?>" alt="" data-image="<?=$row['thumbnail']?>"></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(<?=$row['thumbnail']?>)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2><?=$row['title']?></h2>
						<p><?=$row['description']?></p>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>Mi???n ph?? v???n chuy???n</span>
					</div>
					<div class="original_price"><?=$row['price']?></div>
					<div class="product_price"><?=$row['discount']?></div>
					<ul class="star_rating">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					</ul>
					<div class="product_color">
						<span>Ch???n m??u s???c:</span>
						<ul>
							<li style="background: #e54e5d"></li>
							<li style="background: #252525"></li>
							<li style="background: #60b3f3"></li>
						</ul>
					</div>
					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<span class="sl">S??? l?????ng:</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div>
						<div class="red_button add_to_cart_button"><a href="#" onclick="add('<?=$row['id_product']?>')">Th??m v??o gi??? h??ng</a></div>
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div>
					<div>
						<br>
						<p class="slcon">S??? l?????ng trong kho ch??? c??n: <?=$slcon?></p>
					</div>
				</div>
			</div>
		</div>
				
	</div>
	<form action="<?=$Addgiohang?>" method="post" id="add">
		<input type="hidden" id="id" name="id">
		<input type="hidden" id="sl" name="sl">
  	</form>
	<!-- Tabs -->

	<div class="tabs_section_container">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<!-- <li class="tab active" data-active-tab="tab_1"><span>M?? t???</span></li> -->
							<li class="tab active" data-active-tab="tab_2"><span>Th??ng tin th??m</span></li>
							<li class="tab" data-active-tab="tab_3"><span>Ph???n h???i (2)</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<!-- Tab Description -->

					<!-- <div id="tab_1" class="tab_container active">
						<div class="row">
							<div class="col-lg-5 desc_col">
								<div class="tab_title">
									<h4>M?? t???</h4>
								</div>
								<div class="tab_text_block">
									<h2>Pocket cotton sweatshirt</h2>
									<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
								</div>
								<div class="tab_image">
									<img src="images/desc_1.jpg" alt="">
								</div>
								<div class="tab_text_block">
									<h2>Pocket cotton sweatshirt</h2>
									<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
								</div>
							</div>
							<div class="col-lg-5 offset-lg-2 desc_col">
								<div class="tab_image">
									<img src="images/desc_2.jpg" alt="">
								</div>
								<div class="tab_text_block">
									<h2>Pocket cotton sweatshirt</h2>
									<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
								</div>
								<div class="tab_image desc_last">
									<img src="images/desc_3.jpg" alt="">
								</div>
							</div>
						</div>
					</div> -->
					<?php
						}	
					?>
					<!-- Tab Additional Info -->

					<div id="tab_2" class="tab_container active">
						<div class="row">
							<div class="col additional_info_col">
								<div class="tab_title additional_info_title">
									<h4>Th??ng tin th??m</h4>
								</div>
								<p>M??U S???C:<span>V??ng, ?????</span></p>
								<p>SIZE:<span>L,M,XL</span></p>
							</div>
						</div>
					</div>

					<!-- Tab Reviews -->

					<div id="tab_3" class="tab_container">
						<div class="row">

							<!-- User Reviews -->

							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Ph???n h???i (2)</h4>
								</div>


								<!-- User Review -->
								<?php 
									include_once "ketnoi.php";
									$sql = "Select * from feedback inner join user ON feedback.email = user.email where id_product = '$temp2'";
									$rs = mysqli_query($con,$sql);
									while($r = mysqli_fetch_assoc($rs)){
								?>
								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date"><?=$r['created_at']?></div>
										<div class="user_name"><?=$r['email']?></div>
										<p><?=$r['note']?></p>
									</div>
								</div>
								<?php
									}
								?>
							</div>

							<!-- Add Review -->

							<div class="col-lg-6 add_review_col">

								<div class="add_review">
									<form id="review_form" action="addfeedback.php" method="post">
										<div>
											<h1>Th??m ph???n h???i</h1>
											<input id="tenfb" class="form_input input_name" type="text" name="tenfb" placeholder="T??n*" >
											<input id="emailfb" class="form_input input_email" type="text" name="emailfb" placeholder="Email*">
											<input type="hidden" id="idproduct" name="idproduct" value="<?=$temp2?>">
										</div>
										<div>
											<h1>????nh gi??:</h1>
											<ul class="user_star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
											<textarea id="fb" class="input_review" name="fb"  placeholder="Nh???p ph???n h???i" rows="4" required data-error="Please, leave us a review."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">Ph???n h???i</button>
										</div>
									</form>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Mi???n ph?? v???n chuy???n</h6>
							<p>C?? th??? thay ?????i t??y ?????a ??i???m</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Thanh to??n tr???c ti???p</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 ng??y ho??n tr???</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>M??? c???a t???t c??? c??c ng??y trong tu???n</h6>
							<p>8AM - 9PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>B???n tin</h4>
						<p>????ng k?? nh???n b???n tin c???a ch??ng t??i v?? ???????c gi???m gi?? 20% khi mua h??ng ?????u ti??n</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Nh???p Email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Nh???n b???n tin</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.php">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/single_custom.js"></script>
</body>

</html>
