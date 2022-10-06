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
$db = mysqli_select_db($objConnect, "store");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE customer SET cid='$_GET[cid]',cname='$_GET[cname]',clastname='$_GET[clastname]',address='$_GET[address]',telephone='$_GET[telephone]'
 WHERE cid='$_GET[cid]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='customer.php'>กลับสู่หน้าหลัก</a>";
}
?>
</body>
</html>