<?php
	include_once('ketnoi.php');
	$id_pr = $_GET['id_pr'];
    $sql = "UPDATE cart set num = num + 1 where id_product = $id_pr";
    mysqli_query($con,$sql);
	header("Location: cart.php");

?>