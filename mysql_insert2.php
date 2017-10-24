<?php
//--mysql_insert2.php

// กำหนดตัวแปรเพื่อนำไปใช้งาน
$DBhostname = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname	= "rus_db";
$tblname	= "member";


// เริ่มติดต่อฐานข้อมูล
$link = mysqli_connect($DBhostname, $DBusername, $DBpassword, $DBname);
 
// ตรวจสอบการเชื่อมต่อ
if($link === false){
    die("ERROR: ติดต่อฐานข้อมูลไม่ได้ " . mysqli_connect_error());
}
 
// คำสั่ง SQL ในการเพิ่มตาราง
$sql = "INSERT INTO $tblname (rus_id,rus_name,rus_surname,rus_position,rus_salary,) VALUES
            (1001'Rakdee', 'Nawasukri', Web Design,'18000'),
            (1002'Somphop', 'Nahuntra',Web Programmer,'25000'),
            (1003'Aphirak', 'Nasupan', project Manager,'40000'),
            (1004'sureeporn', 'paibong',Web Programmer ,'25000')";
			
// เอ็กซิคิวต์คำสั่ง SQL
if(mysqli_query($link, $sql)){
    echo " เพิ่มข้อมูลเข้าตาราง <font color='red'> $tblname </font> สำเร็จ";
} else{
    echo "ERROR: เอ็กซิคิวต์คำสั่ง SQL ไม่ได้" . mysqli_error($link);
}
 
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($link);
?>