<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="update.php" method="post" class="row g-3">
                        <div class="col-12"><div class="logo_container" style="top: 10%">
                            <a href="index.php">conca<span>shop</span></a>
                        </div>
                        <br><br>
                            <label>Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="<?=$_COOKIE['email']?>" readonly>
                        </div>
                        <div class="col-12">
                            <label>Mật khẩu cũ</label>
                            <input type="text" id="matkhaucu" name="matkhaucu" class="form-control">
                        </div>
                        <div class="col-12">
                            <label>Nhập mật khẩu mới</label>
                            <input type="text" id="matkhaumoi" name="matkhaumoi" class="form-control">
                        </div>
                        <div class="col-12">
                            <label>Nhập lại mật khẩu mới</label>
                            <input type="text" id="xnmk" name="xnmk" class="form-control">
                        </div>
                        <input type="hidden" id="action" name="action" value="suamatkhau">
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end" style="background-color: #fe4c50">Xác nhận</button>
                            <a href="index.php"><button type="button" class="btn btn-dark float-end" style="background-color: #fe4c50;margin-right: 100px;">Trở lại</button></a>
                        </div>
                    </form>
                    <hr class="mt-4">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>