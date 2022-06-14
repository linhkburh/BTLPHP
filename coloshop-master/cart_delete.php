<?php
	include_once('ketnoi.php');
	$id_pr = $_GET['id_pr'];
    $sql = "DELETE from order_details where id_product = $id_pr";
    mysqli_query($con,$sql);
    mysqli_close($con);
	header("Location: cart.php");
?>