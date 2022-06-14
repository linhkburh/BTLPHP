<?php
    include_once "ketnoi.php";
    $fullname = $_POST['FullName'];
    $email = $_POST['email'];
    $phone_number = $_POST['PhoneNumber'];
    $address = $_POST['Address'];
    $password = $_POST['password'];
    $date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO user (fullname, email, phone_number, address, password, id_role,created_at, updated_at) 
    VALUES ('$fullname','$email','$phone_number','$address','$password','2','$date','$date')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("Location: login.html");
?>