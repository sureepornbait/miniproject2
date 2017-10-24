<?php
	//--if03.php
		$NAME="admin";
		if($NAME=="manager")
{
		echo"ยินดีต้อนรับ คุณคือผู้จัดการ";
		}elseif ($NAME=="admin")
{
		echo"ยินดีต้อนรับ คุณคือผู้ดูแลระบบ";
		}elseif ($NAME=="Webmaster")
{
		echo"ยินดีต้อนรับ คุณคือผู้ดูแลเว็บไซต์";
}else
{
echo"ยินดีต้อนรับ คุณคือผู้ใช้งาน";
}
?>