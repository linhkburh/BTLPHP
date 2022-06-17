<?php
    setcookie("email","",time()-120,'/','','',true);
    header("Location: login.html");
?>