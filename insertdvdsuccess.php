<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="screen">
<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"store");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO dvd(did,dname,cdate,price,amount) VALUES ('$_GET[did]','$_GET[dname]','$_GET[cdate]','$_GET[price]','$_GET[amount]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!! <br>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='dvd.php'> กลับไปหน้าก่อนหน้า </a>";
}
?>
</body>
</html>