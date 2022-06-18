<?php
    include_once "ketnoi.php";
    $id = $_POST['id'];
    $sql1 = "Select * from product where id_product = '$id'";
    $rs = mysqli_query($con,$sql1);
    $row = mysqli_fetch_assoc($rs);

    $email = $_COOKIE['email'];
    $sql4 = "Select id_user from user where email = '$email'";
    $rs4 = mysqli_query($con,$sql4);
    $row4 = mysqli_fetch_assoc($rs4);
    $id_user = $row4['id_user'];

    $price = $row['price'];
    $sql2 = "Select * from order_details where id_product = '$id'";
    $rs2 = mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_assoc($rs2);
        if($row2 != null){
            $tempnum = $row2['num']+1;
            $tempprice = ($row2['num']+1)*$price;
            $sql = "UPDATE order_details
            SET num = '$tempnum'
            WHERE id_product = '$id' && id_user ='$id_user'";
            mysqli_query($con,$sql);
            mysqli_close($con);
        }
        else if($row2 == null){
            $sql3 = "INSERT INTO order_details (id_user, id_product, price, num, status)
            VALUES ('$id_user', '$id', '$price', 1,0)";
            mysqli_query($con,$sql3);
            mysqli_close($con);
        }

    header("Location: cart.php");
?>