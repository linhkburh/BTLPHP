<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script type="text/javascript">
        function submit1()
        {
            document.send_index.submit();
        }
        function submit2()
        {
            document.send_Admin.submit();
        }
    </script>   
</head>
<body>
<?php
    include_once "ketnoi.php";
    $uname = $_POST['emailuser'];
    $upass = $_POST['password'];
    $sql1 = "Select email, password, id_role From user";
    $sql2 = "Select email, password, id_role From admin";
    $rs1 = mysqli_query($con,$sql1);
    $rs2 = mysqli_query($con,$sql2);
    if($uname == "" || $upass == ""){
        ?><p style="margin-left: 36%; margin-top: 3%; color: red">
        <?php
        echo"Tên đăng nhập hoặc mật khẩu không được để trống";
        ?></p>
        <?php
        require_once'login.html';
    }else{
        while($r1 = mysqli_fetch_assoc($rs1)){
            if($r1['email'] == $uname && $r1['password'] == $upass){
                //header("Location: index.php");
                ?>
                <form action="index.php" method="post" name="send_index">
                    <input type="hidden" id="key_index" name="key_index" value="<?=$uname?>">
                </form>
                <script type="text/javascript">    submit1();      </script>
                <?php
            }
        }
        while($r2 = mysqli_fetch_assoc($rs2)){
            if($r2['email'] == $uname && $r2['password'] == $upass ){
                //header("Location: Admin/Admin.php");
                ?>
                <form action="Admin/Admin.php" method="post" name="send_Admin">
                    <input type="hidden" id="key_admin" name="key_admin" value="<?=$uname?>">
                </form>
                <script type="text/javascript">    submit2();      </script>
                <?php
            }else{
                ?><p style="margin-left: 40%; margin-top: 3%; color: red">
                <?php
                echo"Sai tên đăng nhập hoặc mật khẩu";
                ?></p>
                <?php
                require_once'login.html';
            }
        }
    }
    mysqli_close($con);
?>
</body>
</html>