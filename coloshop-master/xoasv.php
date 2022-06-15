<?php
    include_once("ketnoi.php");
    $masv = $_POST['masv'];
    echo "$masv";
    $sql = "DELETE FROM sv WHERE maSV = '$masv'";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "$masv";
    header("Location: hienthi.php");
?>