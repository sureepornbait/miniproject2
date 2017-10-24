<?php
//-- footer.php
class footer
	{
		function show_footer()
		{
			echo "มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ (Rajamangala University of Technology Suvarnabhumi <br>";
			echo "เลขที่ 60 หมู่ 3 ถ.สายเอเซีย (กรุงเทพฯ - นครสวรรค์ ) ต.หันตรา อ.พระนครศรีอยุธยา จ.พระนครศรีอยุธยา 13000  <br>";
			echo "โทรศัพท์ : 035-709101 ถึง 103 แฟกซ์ : 035 709 105";
		}
		
	}
	$a=new footer;		//สร้าง class ใหม่

	$a->show_footer(); //เรียกใช้งาน
	
	
	?>