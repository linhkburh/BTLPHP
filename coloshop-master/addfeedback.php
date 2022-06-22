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
    
</body>
</html>
<?php
    include_once "ketnoi.php";
    $namefb = $_POST['tenfb'];
    $email = $_POST['emailfb'];
    $idproduct = $_POST['idproduct'];
    $note = $_POST['fb'];
    $date = date("Y-m-d H:i:s");
    $sql0 = "Select * from user";
    $rs = mysqli_query($con,$sql0);
    while($r = mysqli_fetch_assoc($rs)){
        if($r['email'] == $email){
            $sql = "INSERT INTO feedback (name_feedback, email , id_product , note, created_at, updated_at)
            VALUES ('$namefb', '$email', '$idproduct', '$note', '$date', '$date')";
            mysqli_query($con,$sql);
            echo $namefb, $email, $idproduct, $note, $date, $date;
            ?>
                <form action="single.php" method="post" name="send_sl">
                    <input type="hidden" id="idsp" name="idsp" value="<?=$idproduct?>">
                </form>
                <script type="text/javascript"> submit1(); </script>
            <?php
            break;
        }
    }
    mysqli_close($con);
?>