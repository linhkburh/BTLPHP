<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script type="text/javascript">
        function submit()
        {
            document.send_index.submit();
        }
    </script>   
</head>
<body>
<?php
    include_once "ketnoi.php";
    $uname = $_POST['email1'];
    $upass = $_POST['password'];
    $sql = "Select email, password, id_role From user";
    $rs = mysqli_query($con,$sql);
    while($r = mysqli_fetch_assoc($rs)){
        if($uname == "" || $upass == ""){
            ?><p style="margin-left: 36%; margin-top: 3%; color: red">
            <?php
            echo"Tên đăng nhập hoặc mật khẩu không được để trống";
            ?></p>
            <?php
            require_once'login.html';
            break;
        }else if($uname != $r['email'] || $upass != $r['password']){
            ?><p style="margin-left: 40%; margin-top: 3%; color: red">
            <?php
            echo"Sai tên đăng nhập hoặc mật khẩu";
            ?></p>
            <?php
            require_once'login.html';
            break;
        }else if($r['id_role'] == '2' && $r['email'] == $uname && $r['password'] == $upass){
            //header("Location: index.php");
            ?>
            <form action="index.php" method="post" name="send_index">
                <input type="hidden" id="key_index" name="key_index" value="<?=$uname?>">
            </form>
            <script type="text/javascript">    submit();      </script>
            <?php
        }else if($r['id_role'] == '1' && $r['email'] == $uname && $r['password'] == $upass){
            header("Location: admin.php");
        }
    }
    mysqli_close($con);
?>
</body>
</html>