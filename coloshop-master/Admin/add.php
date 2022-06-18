<?php
    include_once "ketnoi.php";
    $code = $_POST['action'];
    if($code == "themdanhmuc"){
        $tendanhmuc = $_POST['tendanhmuc'];
        $sql = "INSERT INTO category (name_category) VALUES ('$tendanhmuc')";
        mysqli_query($con,$sql);
        header("Location: dataCategories.php");
    }
    
    mysqli_close($con); 
?>