<!DOCTYPE html>
<html>
    <head><meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>ข้อมูลลูกค้าของร้านมะเหมี่ยว</title>
    </head>
    <body>
        <div class="screen" >

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect,"store");
mysqli_query($objConnect,"SET NAMES utf8");

$sql="SELECT * FROM customer";
$result=$objConnect ->query($sql);

echo "<h1>ข้อมูลลูกค้าในร้าน</h1>";
        echo "<table border='1px'>";
        echo "<tr bgcolor='pink'>";
        echo "<th width='200px'>รหัสสมาชิก: "; echo "</th>";echo "<th> ชื่อ: ";echo "</th>"; echo "<th> นามสกุล </th>"; echo "<th> ที่อยู่ </th>"; echo "<th> เบอร์โทร </th>";
        echo "</tr>";
while ($row = $result-> fetch_assoc()) {
echo "<tr><td><a href='editcustomer.php?cid=$row[cid]'>".$row["cid"]."</td>"."</a><td>"."</a>".$row["cname"]."</td>"."<td>".$row["clastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>";
echo "</tr>";
}
echo "</table>";
?>

<br>
<a class="menu-item" href='insertcustomer.php'> เพิ่มข้อมูลลูกค้า </a>
<br><br><br><br>
<a href='main.html'> <<< กลับสู่หน้าหลัก </a>
    </div>
    </body>
</html>