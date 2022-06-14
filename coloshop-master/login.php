<?php
    include_once "ketnoi.php";
    $uname = $_POST['email'];
    $upass = $_POST['password'];

    $sql1 = "Select email, password From user Where email = '$uname' AND password = '$upass' AND id_role = '2'";
    $rs1 = mysqli_query($con,$sql1);
    while($r = mysqli_fetch_assoc($rs1)){
        if($r['email'] == $uname && $r['password'] == $upass){
            header("Location: index.php");
        }else{

        }
    }

    $sql2 = "Select email, password From user Where email = '$uname' AND password = '$upass' AND id_role = '1'";
    $rs2 = mysqli_query($con,$sql2);
    while($r2 = mysqli_fetch_assoc($rs2)){
        if($r2['email'] == $uname && $r2['password'] == $upass){
            header("Location: ");
        }else{

        }
    }
    mysqli_close($con);
?>