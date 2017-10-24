<?php
// variable.php
#===============
$num1=200;
$num2=300;
$sum=$num1+$num2;
$fullname="sureeporn paibong";
$position="web programmer";
$salary=20000;
$br ="<br>";

//echo "num1+num2=$sum <br>";


//echo "ชื่อ-นาสกุล: $fullname ";
วิธีที่1
echo "ชื่อ-นาสกุล : " . $fullname ."<br>" ;
echo "ตำแหน่ง :  " . $position ."<br>";
echo "เงืนเดือน: " . $salary ."<br>" ;
วิธีที่2
echo "<br>";
echo "ชื่อ-นาสกุล : " . $fullname . $br ;
echo "ตำแหน่ง :  " . $position . $br;
echo "เงืนเดือน: " . $salary . $br ;
?>