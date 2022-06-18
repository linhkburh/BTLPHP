
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="robots" content="all,follow">
<meta http-equiv="Cache-control" content="public">
<title>CONCASHOP | Bán các thể loại quần áo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="theme-color" content="#563d7c">

<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .container {
        max-width: 960px;
      }

      .lh-condensed { line-height: 1.25; }
    </style>
</head>
<div class="super_container">
  <!-- Header -->
  <header   class="header trans_300">
    <!-- Top Navigation -->
    <!-- Main Navigation -->
    <div  class="main_nav_container">
      <div style="margin-left: 240px;" class="container">
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
                <li><a href="https://www.facebook.com/dinhhuydz13092001/">liên hệ</a></li>
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
        <li class="menu_item"><a href="#">Gian hàng</a></li>
        <li class="menu_item"><a href="#">Khuyến mãi</a></li>
        <li class="menu_item"><a href="#">Liên hệ</a></li>
      </ul>
    </div>
  </div>
</div>
<body class="bg-light">
<div class="container">
<div class="py-5 text-center">
<p class="lead">
</p>
<ul style="display: flex; list-style-type: none; padding: 0px; margin: 0px;">
</ul>
</div>
<div class="row">
<div class="col-md-4 order-md-2 mb-4">
<h4 class="d-flex justify-content-between align-items-center mb-3">
<span class="text-muted">Đơn Hàng Của Bạn</span>
<span class="badge badge-secondary badge-pill">0</span>
</h4>
<ul class="list-group mb-3">
<li class="list-group-item d-flex justify-content-between">
<span>Tổng Tiền</span>
<?php
  $toal_money = $_GET['total_money'];

?>
<strong><?=$toal_money?></strong>
</li>
</ul>
</div>
<div class="col-md-8 order-md-1">
<h4 class="mb-3">Địa Chỉ Ship Hàng</h4>
<form class="needs-validation" novalidate>
<div class="mb-3">
<label for="fullname">Họ & Tên</label>
<input type="text" class="form-control" id="fullname" placeholder="Nhập Họ & Tên">
<div class="invalid-feedback">
Vui lòng nhập họ tên của bạn để nhận thông tin đơn hàng.
</div>
</div>
<div class="mb-3">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" placeholder="you@example.com">
<div class="invalid-feedback">
Vui lòng nhập địa chỉ email của bạn để nhận thông tin đơn hàng.
</div>
</div>
<div class="mb-3">
<label for="phone_number">Số Điện Thoại</label>
<input type="telno" class="form-control" id="phone_number" placeholder="123456789">
<div class="invalid-feedback">
Vui lòng nhập số điện thoại của bạn để nhận thông tin đơn hàng.
</div>
</div>
<div class="mb-3">
<label for="address">Địa Chỉ</label>
<input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
<div class="invalid-feedback">
Vui lòng nhập địa chỉ nhận hàng
</div>
</div>
<div class="mb-3">
<label for="content">Ghi Chú</label>
<textarea class="form-control" rows="3" id="content"></textarea>
</div>
<hr class="mb-4">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="same-address" checked="true">
<label class="custom-control-label" for="same-address">Địa chỉ ship hàng trùng với địa chỉ thanh toán.</label>
</div>
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="save-info">
<label class="custom-control-label" for="save-info">Lưu thông tin cho lần thanh toán tiếp theo.</label>
</div>
<hr class="mb-4">
<h4 class="mb-3">Thanh Toán</h4>
<div class="d-block my-3">
<div class="custom-control custom-radio" onclick="$('#payment_info').hide()">
<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked>
<label class="custom-control-label" for="credit">Thanh Toán Khi Nhận Hàng</label>
</div>
<div class="custom-control custom-radio" onclick="$('#payment_info').show()">
<input id="debit" name="paymentMethod" type="radio" class="custom-control-input">
<label class="custom-control-label" for="debit">Chuyển Khoản</label>
</div>
</div>
<div class="row" id="payment_info" style="display: none;">
<div class="col-md-6 mb-3">
<label for="cc-name">
<h5>STK : 9704.2292.6928.5909</h5><div>Ngân Hàng : Vietcombak</div><div>Chi Nhánh : Hà Nội</div><div>Chủ TK : BUI DINH HUY</div><h5><br> <br>
HOTLINE:&nbsp; 0983.950.405</h5>
</label>
</div>
</div>
<hr class="mb-4">
<button class="btn btn-primary btn-lg btn-block" type="button" onclick="saveProfile(this)">Thanh Toán</button>
</form>
</div>
</div>

</div>
<div  class="super_container">
<div style="margin-left: 20px;" class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div style="margin-left: -150px;" class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
            <h4>Bản tin</h4>
            <p>Đăng ký nhận bản tin của chúng tôi và được giảm giá 20% khi mua hàng đầu tiên</p>
          </div>
        </div>
        <div class="col-lg-6">
          <form style="margin-right: -140px;" action="post">
            <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
              <input id="newsletter_email" type="email" placeholder="Nhập Email" required="required" data-error="Valid email is required.">
              <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Nhận bản tin</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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
</body>
</html>
<script type="text/javascript">
  countdown = localStorage.getItem('countdown');
  if(countdown == null || countdown == '' || countdown <= 0) {
    countdown = 360;
  }
  countdown = parseInt(countdown)

  setInterval(function() {
    countdown--;
    localStorage.setItem('countdown', countdown)
    minutes = Math.floor(countdown / 60);
    seconds = countdown % 60;
    jQuery('#countdown').html(minutes + ':' + seconds)

    if(countdown <= 0) {
      $('.lead').hide()
    }
  }, 1000)
</script>
<script type="text/javascript">
  function saveProfile(that) {
    if($('#fullname').val() == "") {
      // alert('Vui lòng nhập tên khách hàng')
      $('#fullname').parent().find('.invalid-feedback').show()
      $('#fullname').focus()
      return;
    }
    $('#fullname').parent().find('.invalid-feedback').hide()

              if($('#email').val() == "") {
        // alert('Vui lòng nhập email khách hàng')
        $('#email').parent().find('.invalid-feedback').show()
        $('#email').focus()
        return;
      }
      $('#email').parent().find('.invalid-feedback').hide()
    
    if($('#address').val() == "") {
      // alert('Vui lòng nhập địa chỉ nhận hàng')
      $('#address').parent().find('.invalid-feedback').show()
      $('#address').focus()
      return;
    }
    $('#address').parent().find('.invalid-feedback').hide()

    if($('#phone_number').val() == "") {
      // alert('Vui lòng nhập số điện thoại liên hệ')
      $('#phone_number').parent().find('.invalid-feedback').show()
      $('#phone_number').focus()
      return;
    }
    $('#phone_number').parent().find('.invalid-feedback').hide()
    $(that).prop('disabled', true)

    infor = {
      'fullname': $('#fullname').val(),
      'email': $('#email').val(),
      'address': $('#address').val(),
      'phone_number': $('#phone_number').val(),
      'content': $('#content').val(),
    }
    infor = JSON.stringify(infor)
    localStorage.setItem('infor', infor)

    $.post('https://t004.gokisoft.com/completeCheckout', {
      'infor': infor,
      '_token': 'KbQp1sZo6iYZa3pNOTz31s9G1cnVW0mt0KKWZrvo'
    }, function(data) {
      localStorage.removeItem('infor')
      window.open('https://t004.gokisoft.com/completeCheckout', '_self')
    })
  }

  $(function() {
    $('input').change(function() {
      infor = {
        'fullname': $('#fullname').val(),
        'email': $('#email').val(),
        'address': $('#address').val(),
        'phone_number': $('#phone_number').val(),
        'content': $('#content').val(),
      }
      infor = JSON.stringify(infor)
      localStorage.setItem('infor', infor)
    })

    $('textarea').change(function() {
      infor = {
        'fullname': $('#fullname').val(),
        'email': $('#email').val(),
        'address': $('#address').val(),
        'phone_number': $('#phone_number').val(),
        'content': $('#content').val(),
      }
      infor = JSON.stringify(infor)
      localStorage.setItem('infor', infor)
    })

    infor = localStorage.getItem('infor')
    if(infor == null || infor == "") return;
    infor = JSON.parse(infor)
    $('#fullname').val(infor.fullname)
    $('#email').val(infor.email)
    $('#address').val(infor.address)
    $('#phone_number').val(infor.phone_number)
    $('#content').val(infor.content)
  })
</script>
</body>
</html>
