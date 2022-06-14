<?php
    include_once "ketnoi.php";
    $id = $_POST['id'];
    $sl = $_POST['sl'];
    $sql1 = "Select * from product where id_product = '$id'";
    $rs1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_assoc($rs1);
    $price = $row1['price'];
    $sql2 = "Select * from order_details where id_product = '$id'";
    $rs2 = mysqli_query($con,$sql2);

    $row2 = mysqli_fetch_assoc($rs2);
        $temp = $row2['id_product'];
        if($row2 != null){
            $tempnum = $row2['num']+$sl;
            $sql = "UPDATE order_details
            SET num = '$tempnum', total_money = '$price*$tempnum'
            WHERE id_product = '$id'";
            mysqli_query($con,$sql);
            mysqli_close($con);
        }
        else if($row2 == null){
            $sql3 = "INSERT INTO order_details (id_orders ,	id_product, price, num, total_money)
            VALUES ('1', '$id', '$price', '$sl','$price*$sl')";
            mysqli_query($con,$sql3);
            mysqli_close($con);
        }
    header("Location: cart.php");
?>