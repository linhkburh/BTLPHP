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
            include_once "ketnoi.php";
            $iddanhmuc = $_POST['iddanhmuc'];
            $idsanpham = $_POST['idsanpham'];
            $tensanpham = $_POST['tensanpham'];
            $giagoc = $_POST['giagoc'];
            $giaban = $_POST['giaban'];
            $sl = $_POST['soluong'];
            $mota = $_POST['mota'];
            $date = date("Y-m-d H:i:s");
            if($_FILES['file_upload']['name'] == null){
                $sqlsanpham = "Update product SET id_category='$iddanhmuc', title='$mota', price='$giagoc', discount='$giaban' ,num='$sl',description='$mota',updated_at='$date' where id_product = '$idsanpham'";
            }
            // Điều kiện kiểm tra định dạng ảnh, nếu không phải ảnh không cho upload
            else if ($_FILES['file_upload']['type'] == "image/jpeg" || $_FILES['file_upload']['type'] == "image/png" || $_FILES['file_upload']['type'] == "image/gif") {
            
            $path = "C:\\xampp\htdocs\GitHub\BTLPHP\coloshop-master\images\\"; // Thư mục images để lưu ảnh
            $tmp_name = $_FILES['file_upload']['tmp_name'];
            
            $name = $_FILES['file_upload']['name'];
            move_uploaded_file($_FILES['file_upload']['tmp_name'], $path.basename($_FILES['file_upload']['name']));
            // Upload ảnh vào thư mục images
            
            $slug = "images/$name";
            // Thêm ảnh vào Database
            $sqlsanpham = "Update product SET id_category='$iddanhmuc', title='$mota', price='$giagoc', discount='$giaban' ,num='$sl',thumbnail='$slug',description='$mota',updated_at='$date' where id_product = '$idsanpham'";
            }
            mysqli_query($con, $sqlsanpham);
            header("Location: dataProduct.php");
    }else if($action == "suanguoidung"){
        $idnguoidung = $_POST['idnguoidung'];
        $tennguoidung = $_POST['tennguoidung'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];
        $matkhau = $_POST['matkhau'];
        $sqlnguoidung = "Update user SET fullname = '$tennguoidung',email = '$email', phone_number = '$sdt', address = '$diachi',password = '$matkhau'  where id_user = '$idnguoidung'";
        mysqli_query($con,$sqlnguoidung);
        header("Location: dataUser.php");
    }else if($action == "suaanh"){
        $idanh = $_POST['idanh'];
        $idsanpham = $_POST['idsanpham'];
        include_once "ketnoi.php";
        if($_FILES['file_upload']['name'] == null){
            $sqlanh = "Update gallery SET id_product='$idsanpham' where id_gallery = '$idanh'";
        }
        // Điều kiện kiểm tra định dạng ảnh, nếu không phải ảnh không cho upload
        else if ($_FILES['file_upload']['type'] == "image/jpeg" || $_FILES['file_upload']['type'] == "image/png" || $_FILES['file_upload']['type'] == "image/gif") {
            
        $path = "C:\\xampp\htdocs\GitHub\BTLPHP\coloshop-master\images\\"; // Thư mục images để lưu ảnh
        $tmp_name = $_FILES['file_upload']['tmp_name'];
        $name = $_FILES['file_upload']['name'];
        move_uploaded_file($_FILES['file_upload']['tmp_name'], $path.basename($_FILES['file_upload']['name']));
        // Upload ảnh vào thư mục images
        
        $slug = "images/$name";
        // Thêm ảnh vào Database
        $sqlanh = "Update gallery SET id_product='$idsanpham',thumbnail='$slug' where id_gallery = '$idanh'";
        
        }
        mysqli_query($con, $sqlanh);
        header("Location: dataThumnail.php");
}
?>