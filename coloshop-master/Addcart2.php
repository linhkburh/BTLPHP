<?php
    include_once "ketnoi.php";
    $id = $_POST['id'];
    $sql1 = "Select * from product where id_product = '$id'";
    $rs = mysqli_query($con,$sql1);
    $row = mysqli_fetch_assoc($rs);
    $price = $row['discount'];

    $email = $_COOKIE['email'];
    $sql4 = "Select id_user from user where email = '$email'";
    $rs4 = mysqli_query($con,$sql4);
    $row4 = mysqli_fetch_assoc($rs4);
    $id_user = $row4['id_user'];

    
    $sql2 = "Select * from cart where id_product = '$id' AND id_user = '$id_user'";
    $rs2 = mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_assoc($rs2);
        if($row2 != null){
            $tempnum = $row2['num']+1;
            $tempprice = ($row2['num']+1)*$price;
            $sql = "UPDATE cart
            SET num = '$tempnum', total_money = '$tempprice'
            WHERE id_product = '$id' && id_user ='$id_user'";
            mysqli_query($con,$sql);
            mysqli_close($con);
        }
        else if($row2 == null){
            $sql3 = "INSERT INTO cart (id_user, id_product, num, price, total_money ,status)
            VALUES ('$id_user', '$id', 1, '$price', '$price',1)";
            mysqli_query($con,$sql3);
            mysqli_close($con);
        }

    //header("Location: cart.php");
?>