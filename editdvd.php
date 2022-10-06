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
$sql_update="SELECT * FROM dvd WHERE did='$_GET[did]'";
$result=mysqli_query($objConnect ,$sql_update);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editdvdsuccess.php">
<p>
<label for="did">รหัสสินค้า</label>
<input type="text" name="did" id="did" value="<?=$data['did'];?>"/>
</p>
<p>
<label for="dname">ชื่อ</label>
<input type="text" name="dname" id="dname" value="<?=$data['dname'];?>"/>
</p>
<p>
<label for="cdate">วันจำหน่าย</label>
<input type="text" name="cdate" id="cdate" value="<?=$data['cdate'];?>" />
</p>
<p>
<label for="price">ราคา</label>
<input type="text" name="price" id="price" value="<?=$data['price'];?>" />
</p>
<p>
<label for="amount">จำนวนคงเหลือ</label>
<input type="text" name="amount" id="amount" value="<?=$data['amount'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>
</body>
</html>