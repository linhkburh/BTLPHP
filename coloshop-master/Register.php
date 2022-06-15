<?php
    include_once "ketnoi.php";
    $fullname = $_POST['FullName'];
    $email = $_POST['email'];
    $phone_number = $_POST['PhoneNumber'];
    $address = $_POST['Address'];
    $password = $_POST['password'];
    $date = date("Y-m-d H:i:s");
    $sql1 = "Select email from user where email = '$email'";
    $rs = mysqli_query($con,$sql1);
    $r = mysqli_fetch_assoc($rs);
    if($fullname =="" || $email =="" || $phone_number =="" || $address =="" || $password =="" ){
        ?><p style="margin-left: 40%; margin-top: 3%; color: red">
            <?php
            echo"Phải nhập đầy đủ thông tin";
            ?></p>
            <?php
            require_once'Register.html';
    }else{
            if($r['email'] != null){
                ?><p style="margin-left: 40%; margin-top: 3%; color: red">
                <?php
                echo"Email đã tồn tại";
                ?></p>
                <?php
                require_once'Register.html';
            }else{
                $sql = "INSERT INTO user (fullname, email, phone_number, address, password, id_role,created_at, updated_at) 
                VALUES ('$fullname','$email','$phone_number','$address','$password','2','$date','$date')";
                mysqli_query($con,$sql);
                mysqli_close($con);
                header("Location: login.html");
            }
    }
?>