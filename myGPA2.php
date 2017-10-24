<?php
//--myGPA2.php
	$score=75 ;
	switch($score)
	{
	case ($score>80):
		echo "Grade A";
		break;
	case ($score>=75) :
		echo "Grade B+";
		break;
	case ($score>=70) :
		echo "Grade B ";
		break;
	case ($score>=65) :
		echo "Grade c+";
		break;
	case ($score>=60) :
		echo "Grade c";
		break;
	case ($score>55) :
		echo "Grade d+";
		break;
	case ($score>=50) :
		echo "Grade d";
		break;

	default:
		echo "Grade F";
		}
?>
