<?php
    include_once "ketnoi.php";
    $action = $_POST['action'];
    if($action == "suadanhmuc"){
        $iddanhmuc = $_POST['iddanhmuc'];
        $tendanhmuc = $_POST['tendanhmuc'];
        $sqldanhmuc = "Update category SET name_category = '$tendanhmuc' where id_category = '$iddanhmuc'";
        mysqli_query($con,$sqldanhmuc);
        header("Location: datacategories.php");
    }else if($action == "suasanpham"){
            $iddanhmuc = $_POST['iddanhmuc'];
            $idsanpham = $_POST['idsanpham'];
            $tensanpham = $_POST['tensanpham'];
            $giagoc = $_POST['giagoc'];
            $giaban = $_POST['giaban'];
            $sl = $_POST['soluong'];
            $mota = $_POST['mota'];
            include_once "ketnoi.php";
            // Điều kiện kiểm tra định dạng ảnh, nếu không phải ảnh không cho upload
            if ($_FILES['file_upload']['type'] == "image/jpeg" || $_FILES['file_upload']['type'] == "image/png" || $_FILES['file_upload']['type'] == "image/gif") {
            
            $name = $_FILES['file_upload']['name'];
            // Upload ảnh vào thư mục images
            
            $slug = "images/$name"; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            $date = date("Y-m-d H:i:s");
            // Thêm ảnh vào Database
            $sqlsanpham = "Update product SET id_category='$iddanhmuc', title='$mota', price='$giagoc', discount='$giaban' ,num='$sl',thumbnail='$slug',description='$mota',updated_at='$date' where id_product = '$idsanpham'";
            mysqli_query($con, $sqlsanpham);
            header("Location: dataProduct.php");
        }
    }
?>