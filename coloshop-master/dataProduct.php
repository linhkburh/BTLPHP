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
    <style>
        .title{
            text-align: center;
        }
    </style>
    <?php
        if(!isset($_COOKIE['admin'])){
            header("Location: login.html");
        }else{
            $temp = $_COOKIE['admin'];
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
                    <i class="fa fa-user fa-fw"></i> <?=$temp?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                    <h1 class="page-header"></h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bảng sản phẩm
                        </div>
                        <form action="nhapdata.php" method="post">
                            <input type="hidden" id="action" name="action" value="themsanpham" require>
                            <div>
                                <button type="submit">Thêm</button>
                            </div><br>
                        </form>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <tr>
                                        <th class="title">STT</th>
                                        <th class="title">ID_Sản phẩm</th>
                                        <th class="title">ID_danh mục</th>
                                        <th class="title">Tên sản phẩm</th>
                                        <th class="title">Giá gốc</th>
                                        <th class="title">Giá bán</th>
                                        <th class="title">Số lượng</th>
                                        <th class="title">Hình ảnh</th>
                                        <th class="title">Mô tả</th>
                                        <th class="title">Ngày thêm</th>
                                        <th class="title">Ngày chỉnh sửa</th>
                                        <th class="title">Chức năng</th>
                                    </tr>
                                    <?php
                                        include_once "ketnoi.php";
                                        $sql = "SELECT * FROM product ";
                                        $rs = mysqli_query($con,$sql);
                                        $count = 0;
                                        while($r = mysqli_fetch_assoc($rs)){
                                            $count ++;
                                            
                                    ?>
                                    <tr style="text-align: center;">
                                        <td><?=$count?></td>
                                        <td><?=$r['id_product']?></td>
                                        <td><?=$r['id_category']?></td>
                                        <td><?=$r['title']?></td>
                                        <td><?=$r['price']?></td>
                                        <td><?=$r['discount']?></td>
                                        <td><?=$r['num']?></td>
                                        <td><img src="<?=$r['thumbnail']?>" width="100" height="100"></td>
                                        <td><?=$r['description']?></td>
                                        <td><?=$r['created_at']?></td>
                                        <td><?=$r['updated_at']?></td>
                                        <td>
                                            <a href="suadata.php?idsanpham=<?=$r['id_product']?>&action=suasanpham"><button type="button">Sửa</button></a>
                                            <a href="#"><button type="button" onclick="xoa('<?=$r['id_product']?>')">Xóa</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                            <script type="text/javascript">
                                function xoa(id){
                                    var cf = confirm("Bạn có thực sự muốn xóa không");
                                    if(cf){
                                        var f = document.getElementById('xoa');
                                        document.getElementById('idsanpham').value = id;
                                        f.submit();
                                    }
                                }
                            </script>
                            <form action="deletedata.php" method="post" id="xoa">
                                <input type="hidden" id="idsanpham" name="idsanpham">
                                <input type="hidden" id="action" name="action" value="xoasanpham">
                            </form>
                            <!-- /.table-responsive -->                                    
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
        
    </div>

</div>

<!-- jQuery -->
<script src="jsAdmin/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="jsAdmin/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="jsAdmin/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="jsAdmin/startmin.js"></script>

</body>
</html>
