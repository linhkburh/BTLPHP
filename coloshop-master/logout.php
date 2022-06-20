<?php
    if(isset($_COOKIE['admin'])){
        setcookie("admin","",time()-120000,'/','','',true);
    }
    if(isset($_COOKIE['email'])){
        setcookie("email","",time()-120000,'/','','',true);
    }
    header("Location: login.html");
?>