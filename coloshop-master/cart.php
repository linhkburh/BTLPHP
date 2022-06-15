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
                                        Tài Khoản
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                        <ul class="account_selection">
                                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng nhập</a></li>
                                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng kí</a></li>
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
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="#">
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
                                    $Email_User = $_GET['key_cart'];
                                    $sql = "Select id_orders from orders where email = '$Email_User'";
                                    $rs = mysqli_query($con,$sql);
                                    while($row = mysqli_fetch_assoc($rs)){
                                    $id_Oder = $row['id_orders'];
                                     }
                                    $sql = "SELECT product.id_product, thumbnail, title, order_details.price, num,total_money FROM 
                                    product inner join order_details on product.id_product = order_details.id_product
                                    where order_details.id_orders = $id_Oder";
                                    $rs = mysqli_query($con,$sql);
                                    $count = 0;
                                    while($row = mysqli_fetch_assoc($rs)){ 
                                        $count++;
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
                                  <td><?=$row['total_money']?></td>                    
                                  <td>
                                    <a href="cart_delete.php?id_pr=<?=$row['id_product']?>"><button style="width: 70px; background-color: #fe4c50cf;">Xóa</button></a>
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
            <a href="ThanhToan.html" class="btn btn-dark">Thanh Toán <i class="fa fa-chevron-right"></i> </a>
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