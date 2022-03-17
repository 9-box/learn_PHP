<?php
	$n = 27;

	if ($n%2==0) {
	 	echo "$n : 짝수<br>";
	 } 
	else{
		echo "$n : 홀수<br><br>";
	}
/*if (condition) {
	// code...
}
if 기본 문법*/
	echo "다른 예제<br>";
	$age = 66;
	$fee = "5000원";

	if ($age >= 65) {
		
		$fee = "무료";// code...
	}
	echo "나이 : $age 세<br>";
	echo "입장료 : $fee";
?>
