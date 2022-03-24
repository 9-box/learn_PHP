<?php
	$age = 64;

	$welfare = "no";
	$youkong = "yes";
	$after = "no";

	if ($age < 3) {
		// code...
		$fee = "무료";
	}
	elseif ((($age >= 3 && $age <=13)) || (($after == "yes"))) {
		// code..
		$fee = "4000원";	
	}
	elseif (($age >= 14 && $age <= 18)||($age >=70) || ($welfare == "yes") || ($youkong == "yes")) {
		// code...
		$fee = "8000원";
	}
	else{
		$fee = "10000원";
	}
	echo "복지 카드 소지 : $welfare<br>";
	echo "국가 유공자 소지 : $youkong<br>";
	echo "17시 이후 입장 : $after<br>";
	echo "나이 : $age<br>";
	echo "입장료 : $fee<br>";

?>