<?php
	$now_year = 2022;
	$now_month = 3;
	$now_day = 10;

	$birth_year = 1999;
	$birth_month = 2;
	$birth_day = 9;

	if($birth_month < $now_month){
		$age = $now_year - $birth_year;
	}
	elseif ($birth_month == $now_month) {
		// code...
		if($birth_day <= $now_day){
			$age = $now_year -$birth_year;

		}
		else{
			$age = $now_year - $birth_year-1;
		}
	}
	else{
		$age = $now_year -$birth_year -1;
	}
	echo "오늘 날짜 : {$now_year}년{$now_month}월{$now_day}일<br>";
	echo "출생 날짜 : {$birth_year}년{$birth_month}월{$birth_day}일<br>";
	echo "만 나이 $age";

?>