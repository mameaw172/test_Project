<!DOCTYPE html>
<html>
    <head><meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>หน้าจัดการข้อมูลDVD</title>
    </head>
    <body>
        <div class="screen" >

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect,"store");
mysqli_query($objConnect,"SET NAMES utf8");

$sql="SELECT * FROM dvd";
$result=$objConnect ->query($sql);

echo "<h1 >ข้อมูลภาพยนต์ในร้าน</h1>";
        echo "<table border='1px'>";
        echo "<tr bgcolor='pink'>";
        echo "<th width='200px'>รหัสดีวีดี: "; echo "</th>";echo "<th> ชื่อภาพยนต์: ";echo "</th>"; echo "<th> วันจำหน่าย </th>"; echo "<th> ราคา </th>"; echo "<th> จำนวนคงเหลือ </th>";
        echo "</tr>";
while ($row = $result-> fetch_assoc()) {
echo "<tr><td><a href='editdvd.php?did=$row[did]'>".$row["did"]."</td>"."</a><td>"."</a>".$row["dname"]."</td>"."<td>".$row["cdate"]."</td>"."<td>".$row["price"]."</td>"."<td>".$row["amount"]."</td>";
echo "</tr>";
}
echo "</table>";
?>

<br>
<a class="menu-item" href='insertdvd.php'> เพิ่มข้อมูล </a>
<br><br><br><br>
<a href='main.html'> <<< กลับกลับหน้าหลัง </a>
    </div>
    </body>
</html>