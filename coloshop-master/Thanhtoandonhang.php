<?php
    include_once "ketnoi.php";
    $sql = "Delete From order_details where status = '1'";
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("Location: cart.php");
?>