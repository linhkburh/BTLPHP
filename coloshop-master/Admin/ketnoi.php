<?php
    $host = "localhost";
    $uname = "root";
    $upass = "";
    $udbname = "qlbh";
    $con = mysqli_connect($host,$uname,$upass,$udbname);
    if(!$con){
        die("K ket noi dc db".mysqli_connect_error());
    }
?>