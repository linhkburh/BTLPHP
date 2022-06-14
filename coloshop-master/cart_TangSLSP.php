<?php
	include_once('ketnoi.php');
	$id_pr = $_GET['id_pr'];
    $sql = "UPDATE order_details set num = num + 1 where id_product = $id_pr";
    mysqli_query($con,$sql);
    mysqli_close($con);
	header("Location: cart.php");

?>