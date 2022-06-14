<?php
    include_once "ketnoi.php";
    $id = $_GET['id'];
    $sql1 = "Select * from product where id_product = '$id'";
    $rs = mysqli_query($con,$sql1);
    $row = mysqli_fetch_assoc($rs);
    $price = $row['price'];
    $sql2 = "Select * from order_details where id_product = '$id'";
    $rs2 = mysqli_query($con,$sql2);

    $row2 = mysqli_fetch_assoc($rs2);
        $temp = $row2['id_product'];
        if($row2 != null){
            $tempnum = $row2['num']+1;
            $sql = "UPDATE order_details
            SET num = '$tempnum', total_money = '$price*$tempnum'
            WHERE id_product = '$id'";
            mysqli_query($con,$sql);
            mysqli_close($con);
        }
        else if($row2 == null){
            $sql3 = "INSERT INTO order_details (id_orders ,	id_product, price, num, total_money)
            VALUES ('1', '$id', '$price', '1','$price')";
            mysqli_query($con,$sql3);
            mysqli_close($con);
        }
    header("Location: cart.php");
?>