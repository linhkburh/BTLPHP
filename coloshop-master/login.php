<?php
    include_once "ketnoi.php";
    $uname = $_POST['email'];
    $upass = $_POST['password'];

    $sql = "Select email, password From user Where email = '$uname' AND password = '$upass'";
    $rs = mysqli_query($con,$sql);
    while($r = $rs = mysqli_fetch_assoc($rs)){
        if($r['email'] == $uname && $r['password'] == $upass){
            header("Location: index.php");
        }else{

        }
    }
    mysqli_close($con);
?>