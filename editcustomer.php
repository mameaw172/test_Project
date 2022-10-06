<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="screen">
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "store");
mysqli_query($objConnect, "SET NAMES utf8");
$sql_update="SELECT * FROM customer WHERE cid='$_GET[cid]'";
$result=mysqli_query($objConnect ,$sql_update);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editcustomersuccess.php">
<p>
<label for="cid">รหัสสมาชิก</label>
<input type="text" name="cid" id="cid" value="<?=$data['cid'];?>"/>
</p>
<p>
<label for="cname">ชื่อ</label>
<input type="text" name="cname" id="cname" value="<?=$data['cname'];?>"/>
</p>
<p>
<label for="clastname">นามสกุล</label>
<input type="text" name="clastname" id="clastname" value="<?=$data['clastname'];?>" />
</p>
<p>
<label for="address">ที่อยู่</label>
<input type="text" name="address" id="address" value="<?=$data['address'];?>" />
</p>
<p>
<label for="telephone">เบอร์โทร</label>
<input type="text" name="telephone" id="telephone" value="<?=$data['telephone'];?>" />
</p>


<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>
</body>
</html>