<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <script type="text/javascript">
    function xoa(masv){
      var cf = confirm("Bạn có thực sự muốn xóa không");
      if(cf){
        var f = document.getElementById('xoa');
        document.getElementById('masv').value = masv;
        f.submit();
      }
    }
    </script>
</head>
<body>
    <table width="100%" border="1" style="border-collapse: collapse">
        <tr>
            <th>STT</th>
            <th>Name_Categories</th>
        </tr>
        <?php
            include_once("ketnoi.php");
            $sql = "SELECT * FROM category";
            $rs = mysqli_query($con,$sql);
            $count = 0;
            while($r = mysqli_fetch_assoc($rs)){
                $count ++;
        ?>
        <tr style="text-align: center ;">
            <td><?=$count?></td>
            <td><?=$r['name_category']?></td>
            <td>
                <a href=""><button type="button" >Sửa</button></a>
                <button type="button" onclick="xoa('<?=$r['maSV']?>')">Xóa</button>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>

    <table width="100%" border="1" style="border-collapse: collapse">
        <tr>
            <th>STT</th>
            <th>Name_Categories</th>
        </tr>
        <?php
            include_once("ketnoi.php");
            $sql = "SELECT * FROM category";
            $rs = mysqli_query($con,$sql);
            $count = 0;
            while($r = mysqli_fetch_assoc($rs)){
                $count ++;
        ?>
        <tr style="text-align: center ;">
            <td><?=$count?></td>
            <td><?=$r['name_category']?></td>
            <td>
                <a href=""><button type="button" >Sửa</button></a>
                <button type="button" onclick="xoa('<?=$r['maSV']?>')">Xóa</button>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    
    <form action="xoasv.php" method="post" id="xoa">
    <input type="hidden" id="masv" name="masv">
  </form>
</body>
</html>
