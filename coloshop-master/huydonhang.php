<?php
	include_once('ketnoi.php');
	$id_user = $_GET['id_user'];
	$sql = "DELETE FROM orders WHERE status = 0 and id_user = $id_user";
	mysqli_query($con,$sql);
	$sql = "DELETE FROM order_details WHERE status = 0 and id_user = $id_user";
	mysqli_query($con,$sql);
	mysqli_close($con);
?>