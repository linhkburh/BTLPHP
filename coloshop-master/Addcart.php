<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function submit1()
        {
            document.send_sl.submit();
        }
    </script> 
</head>
<body>
<?php
    include_once "ketnoi.php";
    $id = $_POST['id'];
    $sl = $_POST['sl'];
    $email = $_COOKIE['email'];
    $sql4 = "Select id_user from user where email = '$email'";
    $rs4 = mysqli_query($con,$sql4);
    $row4 = mysqli_fetch_assoc($rs4);
    $id_user = $row4['id_user'];

    $sql1 = "Select * from product where id_product = '$id'";
    $rs1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_assoc($rs1);
    $price = $row1['discount'];
    $sql2 = "Select * from cart where id_product = '$id' AND id_user = '$id_user'";
    $rs2 = mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_assoc($rs2);
    if($sl > $row1['num']){
        $slcon = $row1['num'];
        ?>
            <form action="single.php" method="post" name="send_sl">
                <input type="hidden" id="slcon" name="slcon" value="<?=$slcon?>">
                <input type="hidden" id="idsp" name="idsp" value="<?=$id?>">
            </form>
            <script type="text/javascript"> submit1(); </script>
        <?php
    }else if($row2 != null){
        $tempnum = $row2['num']+$sl;
        $sum = $price*$tempnum;
        $sql = "UPDATE cart
        SET num = '$tempnum', total_money = '$sum'
        WHERE id_product = '$id' && id_user ='$id_user'";
        mysqli_query($con,$sql);
        header("Location: cart.php");
    }
    else if($row2 == null){
        $sum = $price*$sl;
        $sql3 = "INSERT INTO cart (id_user, id_product, num, price, total_money, status)
        VALUES ('$id_user', '$id', '$sl', '$price', '$sum', 1)";
        mysqli_query($con,$sql3);
        header("Location: cart.php");
    }
    mysqli_close($con);
    
?>
</body>
</html>
