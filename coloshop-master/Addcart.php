<?php
    include_once "ketnoi.php";
    $id = $_POST['id'];
    $sl = $_POST['sl'];
    $sql1 = "Select * from product where id_product = '$id'";
    $rs = mysqli_query($con,$sql1);
    $row = mysqli_fetch_assoc($rs);
    $price = $row['price'];
    $sql2 = "INSERT INTO order_details (id_orders ,	id_product, price, num, total_money)
    VALUES ('1', '$id', '$price', '$sl','$price*$sl')";
    mysqli_query($con,$sql2);
    mysqli_close($con);
    header("Location: cart.php");
?>