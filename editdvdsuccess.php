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

$sql_update="UPDATE dvd SET did='$_GET[did]',dname='$_GET[dname]',cdate='$_GET[cdate]',price='$_GET[price]',amount='$_GET[amount]'
 WHERE did='$_GET[did]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='dvd.php'>กลับสู่หน้าหลัก</a>";
}
?>
</body>
</html>