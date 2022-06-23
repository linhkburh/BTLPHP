<?php
    include_once "ketnoi.php";
    $code = $_POST['action'];
    if($code == "themdanhmuc"){
        $tendanhmuc = $_POST['tendanhmuc'];
        $sql = "INSERT INTO category (name_category) VALUES ('$tendanhmuc')";
        mysqli_query($con,$sql);
        header("Location: dataCategories.php");
    }else if($code == "themsanpham"){
            $iddanhmuc = $_POST['iddanhmuc'];
            $tensanpham = $_POST['tensanpham'];
            $giagoc = $_POST['giagoc'];
            $sl = $_POST['soluong'];
            $mota = $_POST['mota'];
            include_once "ketnoi.php";
            // Điều kiện kiểm tra định dạng ảnh, nếu không phải ảnh không cho upload
            if ($_FILES['file_upload']['type'] == "image/jpeg" || $_FILES['file_upload']['type'] == "image/png" || $_FILES['file_upload']['type'] == "image/gif") {
            
            $path = "C:\\xampp\htdocs\GitHub\BTLPHP\coloshop-master\images\\"; // Thư mục images để lưu ảnh
            $tmp_name = $_FILES['file_upload']['tmp_name'];
            $name = $_FILES['file_upload']['name'];
            move_uploaded_file($_FILES['file_upload']['tmp_name'], $path.basename($_FILES['file_upload']['name']));
            // Upload ảnh vào thư mục images
            
            $slug = "images/$name"; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            $date = date("Y-m-d");
            // Thêm ảnh vào Database
            $sql = "INSERT INTO product (id_category,title,price,num,thumbnail,description,created_at,updated_at) VALUES ('$iddanhmuc','$tensanpham','$giagoc','$sl','$slug','$mota','$date','$date')";
            $result = mysqli_query($con, $sql);
            
            if (!$result) {
            echo '<script language="javascript">alert("Thêm thất bại!");</script>';
            }
            } else {
            // Không phải file ảnh
            echo "File không cho phép";
            }
            /* ?>
                <script>
                    function back(){
                        window.location="dataProduct.php";
                    }
                </script>
            <?php */
    }else if($code == "themanh"){
        $idsanpham = $_POST['idsp'];
        include_once "ketnoi.php";
        // Điều kiện kiểm tra định dạng ảnh, nếu không phải ảnh không cho upload
        if ($_FILES['file_upload']['type'] == "image/jpeg" || $_FILES['file_upload']['type'] == "image/png" || $_FILES['file_upload']['type'] == "image/gif") {
        
        $path = "C:\\xampp\htdocs\GitHub\BTLPHP\coloshop-master\images\\"; // Thư mục images để lưu ảnh
        $tmp_name = $_FILES['file_upload']['tmp_name'];
        $name = $_FILES['file_upload']['name'];
        move_uploaded_file($_FILES['file_upload']['tmp_name'], $path.basename($_FILES['file_upload']['name']));
        // Upload ảnh vào thư mục images
        
        $slug = "images/$name"; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        $date = date("Y-m-d");
        // Thêm ảnh vào Database
        $sql = "INSERT INTO gallery (id_product,thumbnail) VALUES ('$idsanpham','$slug')";
        $result = mysqli_query($con, $sql);
        if (!$result) {
        echo '<script language="javascript">alert("Thêm thất bại!");</script>';
        }
        } else {
        // Không phải file ảnh
        echo "File không cho phép";
        }
        header("Location: dataThumnail.php");
}
    mysqli_close($con); 
?>