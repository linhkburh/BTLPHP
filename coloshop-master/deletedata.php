<?php
    include_once("ketnoi.php");
    $action = $_POST['action'];
    if($action == "xoadanhmuc"){
        $iddanhmuc = $_POST['iddanhmuc'];
        $sql = "DELETE FROM category WHERE id_category = '$iddanhmuc'";
        mysqli_query($con,$sql);
        header("Location: dataCategories.php");
    }else if($action == "xoasanpham"){
        include_once("ketnoi.php");
        $idsanpham = $_POST['idsanpham'];
        $sql1 = "DELETE FROM product WHERE id_product = '$idsanpham'";
        mysqli_query($con,$sql1);
        header("Location: dataProduct.php");
    }else if($action == "xoanguoidung"){
        include_once("ketnoi.php");
        $idnguoidung = $_POST['idnguoidung'];
        $sql2 = "DELETE FROM user WHERE id_user = '$idnguoidung'";
        mysqli_query($con,$sql2);
        header("Location: dataUser.php");
    }
    else if($action == "xoaanh"){
        include_once("ketnoi.php");
        $idanh = $_POST['idanh'];
        $sql3 = "DELETE FROM gallery WHERE id_gallery = '$idanh'";
        mysqli_query($con,$sql3);
        header("Location: dataThumnail.php");
    }
    else if($action == "xoadonhang"){
        include_once("ketnoi.php");
        $iddonhang = $_POST['iddonhang'];
        $sql4 = "DELETE FROM orders WHERE id_orders = '$iddonhang'";
        mysqli_query($con,$sql4);
        header("Location: dataOrders.php");
    }
    mysqli_close($con);   
?>