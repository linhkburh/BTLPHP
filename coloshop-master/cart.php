<!DOCTYPE html>
<html lang="en">

<head>
    <title>CONCASHOP | Giỏ hàng </title>
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
    <?php
	if(isset($_COOKIE['email'])){
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
									VND
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
                                    <li><a href="index.php">trang chủ</a></li>
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
                                    <!-- <li class="checkout">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_items" class="checkout_items">2</span>
                                        </a>
                                    </li> -->
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
                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
                        </ul>
                    </li>
                    <li class="menu_item"><a href="#">Trang chủ</a></li>
                    <li class="menu_item"><a href="categories.php">Gian hàng</a></li>
                    <li class="menu_item"><a href="#">Khuyến mãi</a></li>
                    <li class="menu_item"><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        
        <div class="container product_section_container">
            <div class="row">
                <div class="col product_section clearfix">
                    <!-- Main Content -->
                    <div class="main_content">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>STT</th>
                                    <th>Ảnh</th>
                                    <th>Tên Sản phẩm</th>
                                    <th>Giá</th>
                                    <th style="width: 100px;">Số lượng</th>
                                    <th style="width: 100px;">Tổng tiền</th>
                                    <th style="width: 100px;"></th>
                                  </tr>
                                </thead>
                                <?php
                                    include_once('ketnoi.php');
                                    $Email_User = $_COOKIE['email'];
                                    $sql = "Select id_user from user where email = '".$Email_User."'";
                                    $rs = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_assoc($rs)){
                                    $id_user = $row['id_user'];
                                     }
                                    $sql = "SELECT product.id_product, thumbnail, title, cart.price, cart.num FROM product inner join cart on product.id_product = cart.id_product
                                    where cart.id_user = $id_user and status = 1";
                                    $rs = mysqli_query($con,$sql);
                                    $count = 0;
                                    $TongTien = 0;
                                    while($row = mysqli_fetch_assoc($rs)){ 
                                        $count++;
                                        $ThanhTien = $row['price']*$row['num'];
                                        $TongTien = $TongTien + $ThanhTien;
                                ?>

                                <tr style="text-align: center">
                                  <td><?=$count?></td>
                                  <td><img src="<?=$row['thumbnail']?>"></td>
                                  <td><?=$row['title']?></td>
                                  <td><?=$row['price']?></td>
                                  <td style="text-align: center;">
                                        <a href="cart_GiamSLSP.php?id_pr=<?=$row['id_product']?>"><button style="background-color: #fe4c50cf; width: 18px;">-</button></a>
                                        <?=$row['num']?>
                                        <a href="cart_TangSLSP.php?id_pr=<?=$row['id_product']?>"><button style="background-color: #fe4c50cf; width: 18px;">+</button></a>
                                    </td>
                                  <td><?=$ThanhTien?></td>                    
                                  <td>
                                    <button onclick="xoa(<?=$row['id_product']?>)" style="width: 70px; background-color: #fe4c50cf;">Xóa</button>

                                  </td>
                                </tr>
                              <?php    
                                }
                                mysqli_close($con);
                              ?>
                            </table>
                        </div> 
                       
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-left: 64%;">
            <button class="btn btn-dark" onclick="thanhtoan(<?=$TongTien?>,<?=$id_user?>)">Thanh Toán</button>
        </div>

        <script type="text/javascript">
            function xoa(id){
              var cf = confirm("Bạn có thực sự muốn xóa sản phẩm này?");
              if(cf){
                window.location= "cart_delete.php?id_pr="+id;
      }
            
    }
            function thanhtoan(total,id_user){

                window.location = "thanhtoan.php?total_money="+total+"&id_user="+id_user;

            }
        </script>

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
                                <li><a href="contact.php">Liên lạc với chúng tôi</a></li>
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