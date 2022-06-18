<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN concashop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
        $temp = "";
        if(isset($_COOKIE['admin'])){
            $temp = $_COOKIE['admin'];
        }
        if(isset($_POST['key_admin'])){
            setcookie("admin",$_POST['key_admin'],time()+120,'/','','',true);
            $temp = $_COOKIE['admin'];
        }else if(!isset($_COOKIE['admin'])){
            header("Location: /github/BTLPHP/coloshop-master/login.html");
        }
?>
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">ADMIN</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> ConCa Shop</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>Hi! <?=$temp?><b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/github/BTLPHP/coloshop-master/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="Admin.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="dataCategories.php"><i class="fa fa-sitemap fa-fw"></i>Danh mục sản phẩm<!-- <span class="fa arrow"></span> --></a>
                        <!-- <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="dataProduct.php"><i class="fa fa-sitemap fa-fw"></i>Sản phẩm<!-- <span class="fa arrow"></span> --></a>
                        <!-- <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="dataUser.php"><i class="fa fa-sitemap fa-fw"></i>Người dùng<!-- <span class="fa arrow"></span> --></a>
                        <!-- <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="dataThumnail.php"><i class="fa fa-sitemap fa-fw"></i>Ảnh minh họa sản phẩm<!-- <span class="fa arrow"></span> --></a>
                        <!-- <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li>
                        <a href="dataOrders.php"><i class="fa fa-sitemap fa-fw"></i>Hóa đơn<!-- <span class="fa arrow"></span> --></a>
                        <!-- <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Page Title</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <?php
                $code = $_GET['action'];
                
                if($code == "suadanhmuc"){
                    include_once "ketnoi.php";
                    $iddanhmuc = $_GET['iddanhmuc'];
                    $sqldanhmuc = "Select * from category where id_category = '$iddanhmuc'";
                    $rs = mysqli_query($con,$sqldanhmuc);
                    while($r = mysqli_fetch_assoc($rs)){
                    ?>
                        <div class="container mt-3">
                            <h3>Sửa danh mục</h3>                    
                            <form action="update.php" method="post">
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">ID danh mục</span>
                                    <input type="text" class="form-control" id="iddanhmuc" name="iddanhmuc" value="<?=$r['id_category']?>" readonly>
                                </div>
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">Tên danh mục</span>
                                    <input type="text" class="form-control" id="tendanhmuc" name="tendanhmuc" value="<?=$r['name_category']?>">
                                </div>
                                <input type="hidden" id="action" name="action" value="suadanhmuc" require>
                                <div>
                                    <button type="submit">Lưu</button>
                                </div><br>
                            </form>
                        </div>
                    <?php
                    }
                }else if($code == "suasanpham"){
                    ?>
                        <div class="container mt-3">
                            <h3>Sửa sản phẩm</h3>                    
                            <form action="update.php" method="post" enctype="multipart/form-data">
                                <div class="input-group input-group-lg mb-3">
                                        <?php
                                            include_once "ketnoi.php";
                                            $idsanpham = $_GET['idsanpham'];
                                            $sql1 = "Select * from product where id_product = '$idsanpham'";
                                            $rs1 = mysqli_query($con,$sql1);
                                            $sql = "Select * from category";
                                            $rs = mysqli_query($con,$sql);
                                            while($r1 = mysqli_fetch_assoc($rs1)){
                                                ?><div class="input-group input-group-lg mb-3">
                                                <span class="input-group-text">ID sản phẩm</span>
                                                <input type="text" class="form-control" id="idsanpham" name="idsanpham" value="<?=$r1['id_product']?>">
                                            </div>
                                            <span class="input-group-text">ID_Danh mục: </span>
                                                <select name="iddanhmuc" id="iddanhmuc">
                                            <?php
                                            while($r = mysqli_fetch_assoc($rs)){
                                        ?>
                                        <option value="<?=$r['id_category']?>"><?=$r['name_category']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">Tên sản phẩm</span>
                                    <input type="text" class="form-control" id="tensanpham" name="tensanpham" value="<?=$r1['title']?>">
                                </div>
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">Giá gốc</span>
                                    <input type="text" class="form-control" id="giagoc" name="giagoc" value="<?=$r1['price']?>">
                                </div>
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">Giá bán</span>
                                    <input type="text" class="form-control" id="giaban" name="giaban" value="<?=$r1['discount']?>">
                                </div>
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">Số lượng</span>
                                    <input type="text" class="form-control" id="soluong" name="soluong" value="<?=$r1['num']?>">
                                </div>
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">Hình ảnh</span>
                                    <img src="<?=$r1['thumbnail']?>">
                                    <input type="file" name="file_upload" id="file_upload"><br> 
                                </div>
                                <div class="input-group input-group-lg mb-3">
                                    <span class="input-group-text">Mô tả</span>
                                    <input type="text" class="form-control" id="mota" name="mota" value="<?=$r1['description']?>">
                                </div>
                                <?php
                                            }
                                ?>
                                <input type="hidden" id="action" name="action" value="suasanpham" require>
                                <div>
                                    <button type="submit">Lưu</button>
                                </div><br>
                            </form>
                        </div>
                    <?php    
                }else if($code == "suanguoidung"){
                    ?>
                        <div class="container mt-3">
                            <h3>Sửa người dùng</h3>                    
                            <form action="update.php" method="post" enctype="multipart/form-data">
                                <div class="input-group input-group-lg mb-3">
                                        <?php
                                            include_once "ketnoi.php";
                                            $idnguoidung = $_GET['idnguoidung'];
                                            $sql1 = "Select * from user where id_user = '$idnguoidung'";
                                            $rs1 = mysqli_query($con,$sql1);
                                            while($r1 = mysqli_fetch_assoc($rs1)){
                                        ?>
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">id_user</span>
                                            <input type="text" class="form-control" id="idnguoidung" name="idnguoidung" value="<?=$r1['id_user']?>" readonly>
                                        </div>
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">Tên đầy đủ</span>
                                            <input type="text" class="form-control" id="tennguoidung" name="tennguoidung" value="<?=$r1['fullname']?>">
                                        </div>
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">email</span>
                                            <input type="text" class="form-control" id="email" name="email" value="<?=$r1['email']?>">
                                        </div>
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">SĐT</span>
                                            <input type="text" class="form-control" id="sdt" name="sdt" value="<?=$r1['phone_number']?>">
                                        </div>
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">Địa chỉ</span>
                                            <input type="text" class="form-control" id="diachi" name="diachi" value="<?=$r1['address']?>">
                                        </div>
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">Mật khẩu mới</span>
                                            <input type="password" class="form-control" id="matkhau" name="matkhau" >
                                        </div>
                                        <div class="input-group input-group-lg mb-3">
                                            <span class="input-group-text">Ngày tạo</span>
                                            <input type="text" class="form-control" value="<?=$r1['created_at']?>" readonly>
                                        </div>
                                </div>
                                <?php
                                            }
                                ?>
                                <input type="hidden" id="action" name="action" value="suanguoidung" require>
                                <div>
                                    <button type="submit">Lưu</button>
                                </div><br>
                            </form>
                        </div>
                    <?php
                }else if($code == "suaanh"){
                    ?>
                        <div class="container mt-3">
                            <h3>Sửa ảnh</h3>                    
                            <form action="update.php" method="post" enctype="multipart/form-data">
                                <div class="input-group input-group-lg mb-3">
                                    <?php
                                        include_once "ketnoi.php";
                                        $sql1 = "Select * from gallery";
                                        $rs1 = mysqli_query($con,$sql1);
                                        while($r1 = mysqli_fetch_assoc($rs1)){
                                    ?>
                                    <div class="input-group input-group-lg mb-3">
                                        <span class="input-group-text">ID ảnh</span>
                                        <input type="text" class="form-control" id="idanh" name="idanh" value="<?=$r1['id_gallery']?>" readonly>
                                    </div>
                                    <span class="input-group-text">ID_Sản phẩm: </span>
                                    <select name="idsanpham" id="idsanpham">
                                        <?php
                                            include_once "ketnoi.php";
                                            $sql = "Select * from product";
                                            $rs = mysqli_query($con,$sql);
                                            while($r = mysqli_fetch_assoc($rs)){
                                        ?>
                                        <option value="<?=$r['id_product']?>">ID:<?=$r['id_product']?>/<?=$r['title']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <div class="input-group input-group-lg mb-3">
                                        <span class="input-group-text">Hình ảnh</span>
                                        <img src="<?=$thumbnail?>">
                                        <input type="file" name="file_upload" id="file_upload"><br> 
                                    </div>
                                </div>
                                <?php
                                            }
                                ?>
                                <input type="hidden" id="action" name="action" value="suaanh" require>
                                <div>
                                    <button type="submit">Lưu</button>
                                </div><br>
                            </form>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
