<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Hóa đơn | CONCASHOP</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>
<?php
	include_once('ketnoi.php');
	$id_order = $_GET['id_order'];
	$total_money = $_GET['total_money'];
	$id_user = $_GET['id_user'];
	$sql = "UPDATE order_details set status = '2' WHERE id_user = $id_user and status = '1'";
	mysqli_query($con,$sql);
	$sql = "DELETE from cart where id_user = $id_user and status ='2'";
	mysqli_query($con,$sql);
	$sql = "SELECT email, fullname,phone_number,address from user WHERE id_user = $id_user";
	$rs = mysqli_query($con,$sql);
	while($row = mysqli_fetch_assoc($rs)){
		$email = $row['email'];
		$fullname = $row['fullname'];
		$phone_number = $row['phone_number'];
		$address = $row['address'];
	}
	$date = date("Y-m-d");
?>
	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="images/Logo.png" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Mã hóa đơn #: <?=$id_order?><br />
									Ngày tạo : <?=$date?><br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Công ty cổ phần con cá, Inc.<br />
									Tòa nhà SUNNY<br />
									35 - Đường Hoàng Quốc Việt
								</td>

								<td>
									<?=$fullname?>-<?=$phone_number?><br/>
									<?=$address?><br/>
									<?=$email?>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Phương thức thanh toán</td>

					<td>Kiểm tra #</td>
				</tr>

				<tr class="details">
					<td>Thanh toán khi nhận hàng</td>

					<td>STK : 9704.2292.6928.5909</td>
				</tr>

				<tr class="heading">
					<td>Mặt hàng</td>

					<td>Thành tiền</td>
				</tr>
				<?php
					include_once('ketnoi.php');
					$sql = "SELECT id_product, num, total_money from order_details WHERE status = '2' and id_user = $id_user";
					$rs = mysqli_query($con,$sql);
					$tongtien = 0;
					while($row = mysqli_fetch_assoc($rs)){
						$tongtien = $tongtien + $row['total_money'];
						$id_product = $row['id_product'];
						$num = $row['num'];
						$sql2 = "UPDATE product set num = num-$num, num_sold = num_sold+$num where id_product = $id_product";
						mysqli_query($con,$sql2);
						$sql1 = "SELECT title from product where id_product = $id_product";
						$rs1 = mysqli_query($con,$sql1);
						$row1 = mysqli_fetch_assoc($rs1);
						$title = $row1['title'];
						?>
						<tr class="Mặt hàng">
						<td>+) <?=$title?> (<?=$row['num']?>)</td>
						<td><?=$row['total_money']?></td>
						</tr>
					<?php	
					}
					$sql = "UPDATE orders set status = '1' , total_moneyFinal = $tongtien WHERE id_user = $id_user and status = '0'";
					mysqli_query($con,$sql);
					mysqli_close($con);
				?>
					<td>Tổng: <?=$tongtien?></td>
				</tr>
			</table>
		</div>
		<br>
		<button onclick="vetrangchu()" style="width: 400px; height: 40px; margin-left: 515px; background-color: #FF6347; color: white; font-size: 20px ;">Trở về trang chủ</button>
	</body>
</html>
<script type="text/javascript">
	function vetrangchu(){
		window.location = "index.php";
	}
</script>