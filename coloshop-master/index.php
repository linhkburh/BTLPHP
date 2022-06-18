<!DOCTYPE html>
<html lang="en">
<head>
<title>CONCASHOP | Trang chủ</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script type="text/javascript">
    function add(id){
		var f = document.getElementById('add');
        document.getElementById('id').value = id;
        f.submit();
    }
</script>
<?php
	$giohang = "";
	$tempcart = "";	
	$Addgiohang = "";
	if(isset($_COOKIE['email']) /* && $_COOKIE['email'] != $_POST['key_index'] */){
		$temp = $_COOKIE['email'];
		$giohang = "cart.php";
		$Addgiohang = "Addcart2.php";
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
	}else if(isset($_POST['key_index'])){
		setcookie("email",$_POST['key_index'],time()+120,'/','','',true);
		$temp = $_POST['key_index'];
		$tempcart = $_POST['key_index'];
		$giohang = "cart.php?key_cart=";
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
										Tài khoản
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
										<li><a href="Register.html"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng ký</a></li>
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
								<li><a href="#">trang chủ</a></li>
								<li><a href="categories.php">gian hàng</a></li>
								<li><a href="#">khuyến mãi</a></li>
								<li><a href="#">liên hệ</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li class="account1">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
									<ul class="account_selection" style="width: 250px;">
										<li><a href="#"><?=$temp?></a></li><br>
										<li><a href="logout.php" style="width: 100px">Đăng Xuất</a></li>
									</ul>
								</li>
								</li>
								<li class="checkout">
									<a href="<?=$giohang?>"
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
						Tài khoản
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
						<li><a href="Register.html"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">Trang chủ</a></li>
				<li class="menu_item"><a href="categories.php">Gian hàng</a></li>
				<li class="menu_item"><a href="#">Khuyến mãi</a></li>
				<li class="menu_item"><a href="#">Liên hệ</a></li>
			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(images/slider_1.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Bộ sưu tập Xuân / Hè 2022</h6>
						<h1>Giảm giá tới 30% cho hàng mới về</h1>
						<div class="red_button shop_now_button"><a href="#newproduct">Mua ngay</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpg)">
						<div class="banner_category">
							<a href="categories.php">đồ nữ</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_2.jpg)">
						<div class="banner_category">
							<a href="categories.php">phụ kiện</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg)">
						<div class="banner_category" id="newproduct">
							<a href="categories.php">đồ nam</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Hàng Mới</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">tất cả</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">đồ nữ</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">phụ kiện</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">đồ nam</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
									<?php
										include_once "ketnoi.php";
										$date = date("Y-m-d");
										$sql1 = "Select * From product where id_category ='3' ";
										$rs1 = mysqli_query($con,$sql1);
										while($row1 = mysqli_fetch_assoc($rs1)){
									?>
									<!-- Product nam-->
									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?=$row1['thumbnail']?>" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>New</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php?id=<?=$row1['id_product']?>&key_single=<?=$temp?>"><?=$row1['title']?></a></h6>
												<div class="product_price"><?=$row1['price']?><span><?=$row1['discount']?></span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#" onclick="add('<?=$row1['id_product']?>')">Thêm vào giỏ hàng</a></div>
									</div>
									<?php
										}
									?>
									<!-- Product nu-->
									<?php
										include_once "ketnoi.php";
										$sql2 = "Select * From product where id_category ='1' AND created_at = '$date'";
										$rs2 = mysqli_query($con,$sql2);
										while($row2 = mysqli_fetch_assoc($rs2)){
									?>
									<div class="product-item women">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?=$row2['thumbnail']?>" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>New</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php?id=<?=$row2['id_product']?>"><?=$row2['title']?></a></h6>
												<div class="product_price"><?=$row2['price']?><span><?=$row2['discount']?></span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#" onclick="add('<?=$row2['id_product']?>')">Thêm vào giỏ hàng</a></div>
									</div>
									<?php
										}
									?>
									<!-- Product phukien-->
									<?php
										include_once "ketnoi.php";
										$sql3 = "Select * From product where id_category ='2' AND created_at = '$date'";
										$rs3 = mysqli_query($con,$sql3);
										while($row3 = mysqli_fetch_assoc($rs3)){
									?>
									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?=$row3['thumbnail']?>" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>New</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php?id=<?=$row3['id_product']?>"><?=$row3['title']?></a></h6>
												<div class="product_price"><?=$row3['price']?><span><?=$row3['discount']?></span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#" onclick="add('<?=$row3['id_product']?>')">Thêm vào giỏ hàng</a></div>
									</div>
									<?php
										}
									?>
									<!-- Product ca2-->
									<?php
										include_once "ketnoi.php";
										$sql4 = "Select * From product where id_category ='4' AND created_at = '$date'";
										$rs4 = mysqli_query($con,$sql4);
										while($row4 = mysqli_fetch_assoc($rs4)){
									?>
									<div class="product-item women men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="<?=$row4['thumbnail']?>" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>New</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php?id=<?=$row4['id_product']?>"><?=$row4['title']?></a></h6>
												<div class="product_price"><?=$row4['price']?><span><?=$row4['discount']?></span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#" onclick="add('<?=$row4['id_product']?>')">Thêm vào giỏ hàng</a></div>
									</div>
									<?php
										}
									?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="<?=$Addgiohang?>" method="post" id="add">
		<input type="hidden" id="id" name="id">
	</form>
	<!-- Deal of the week -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="images/deal_ofthe_week.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Deal Hot của tuần</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">ngày</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">giờ</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">phút</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">giây</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="#">mua ngay</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Bán chạy</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->
							<?php
								include_once "ketnoi.php";
								$sql = "Select * from product where num_sold >= '10'";
								$rs = mysqli_query($con,$sql);
								while($r = mysqli_fetch_assoc($rs)){
							?>
							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="<?=$r['thumbnail']?>" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php?id=<?=$r['id_product']?>"><?=$r['title']?></a></h6>
											<div class="product_price"><?=$r['discount']?><span><?=$r['price']?></span></div>
										</div>
									</div>
								</div>
							</div>
							<?php
								}
							?>
						</div>
						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
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

	<!-- Blogs -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest Blogs</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_1.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/blog_3.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Here are the trends I see coming this fall</h4>
							<span class="blog_meta">by admin | dec 01, 2017</span>
							<a class="blog_more" href="#">Read more</a>
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
<script src="js/custom.js"></script>
</body>

</html>
