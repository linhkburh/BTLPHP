<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    

<?php
    include_once "ketnoi.php";
    $uname = $_POST['email1'];
    $upass = $_POST['password'];
    $sql = "Select email, password, id_role From user";
    $rs = mysqli_query($con,$sql);
    while($r = mysqli_fetch_assoc($rs)){
        if($r['id_role'] == '2' && $r['email'] == $uname && $r['password'] == $upass){
            header("Location: index.php");
        }else if($r['id_role'] == '1' && $r['email'] == $uname && $r['password'] == $upass){
            header("Location: admin.php");
        }else{
            header("Location: index.php");
        }
    }
    mysqli_close($con);
?>
</body>
</html>