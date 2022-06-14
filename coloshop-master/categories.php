<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
</head>

<body>
<!-- 
	104 cart 
	
-->
<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Giao hàng miễn phí cho tất cả các đơn hàng trên 100.000VNĐ</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										VNĐ
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">Khác</a></li>
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
										Tài Khoản
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
										<li><a href="Register.html"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
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
								<li><a href="index.php">trang chủ</a></li>
								<li><a href="#">gian hàng</a></li>
								<li><a href="#">khuyến mãi</a></li>
								<li><a href="#">liên hệ</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
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
						VNĐ
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">Khác</a></li>
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
						<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
						<li><a href="Register.html"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">Trang chủ</a></li>
				<li class="menu_item"><a href="#">Gian hàng</a></li>
				<li class="menu_item"><a href="#">Khuyến mãi</a></li>
				<li class="menu_item"><a href="#">Liên hệ</a></li>
			</ul>
		</div>
	</div>

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Trang chủ</a></li>
						<li class="active"><a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Đồ nam</a></li>
					</ul>
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Danh mục sản phẩm</h5>
						</div>
						<ul class="sidebar_categories">
							<li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Nam giới</a></li>
							<li><a href="#">Nữ giới</a></li>
							<li><a href="#">Phụ kiện</a></li>
							<li><a href="#">Hàng mới</a></li>
							<li><a href="#">Bộ sưu tập</a></li>
						</ul>
					</div>

					<!-- Price Range Filtering -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Hiện theo giá</h5>
						</div>
						<p>
							<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="slider-range"></div>
						<div class="filter_button"><span>Lọc</span></div>
					</div>

					<!-- Sizes -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Sizes</h5>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>S</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>M</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>L</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XL</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>XXL</span></li>
						</ul>
					</div>

					<!-- Color -->
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Màu sắc</h5>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Đen</span></li>
							<li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Hồng</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Trắng</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Xanh dương</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Cam</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Trắng</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Xanh dương</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Cam</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Trắng</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Xanh dương</span></li>
							<li><i class="fa fa-square-o" aria-hidden="true"></i><span>Cam</span></li>
						</ul>
						<div class="show_more">
							<span><span>+</span>Hiện thêm</span>
						</div>
					</div>

				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Sắp xếp mặc định</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Sắp xếp mặc định</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Sắp xếp theo giá</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Sắp xếp theo tên</span></li>
											</ul>
										</li>
										<li>
											<span>Hiển thị</span>
											<span class="num_sorting_text">6</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<!-- Product Grid -->

								<div class="product-grid">

									<!-- Product  -->
									<?php
										include_once "ketnoi.php";
										$sql = "Select * From product";
										$rs = mysqli_query($con,$sql);
										while($row = mysqli_fetch_assoc($rs)){
									?>
									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?=$row['thumbnail']?>" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<!-- <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span></span></div> -->
											<div class="product_info">
												<h6 class="product_name"><a href="single.php?id=<?=$row['id_product']?>"><?=$row['title']?></a></h6>
												<div class="product_price"><?=$row['price']?><span><?=$row['discount']?></span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#"><button type="button">Thêm vào giỏ hàng</button></a></div>
									</div>
									<?php
										}
									?>
								</div>

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_bottom clearfix">
									<ul class="product_sorting">
										<li>
											<span>Hiển thị:</span>
											<span class="num_sorting_text">04</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>01</span></li>
												<li class="num_sorting_btn"><span>02</span></li>
												<li class="num_sorting_btn"><span>03</span></li>
												<li class="num_sorting_btn"><span>04</span></li>
											</ul>
										</li>
									</ul>
									<span class="showing_results">Hiển thị 1–3 của 12 kết quả</span>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

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
							<h6>Miễn phí vận chuyển</h6>
							<p>Có thể thay đổi tùy địa điểm</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Thanh toán trực tiếp</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 ngày hoàn trả</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Mở cửa tất cả các ngày trong tuần</h6>
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
						<h4>Bản tin</h4>
						<p>Đăng ký nhận bản tin của chúng tôi và được giảm giá 20% khi mua hàng đầu tiên</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Nhập Email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Nhận bản tin</button>
						</div>
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
<script src="js/categories_custom.js"></script>
</body>

</html>
