<?php
    setcookie("admin","",time()-120,'/','','',true);
    setcookie("email","",time()-120,'/','','',true);
    header("Location: login.html");
?>