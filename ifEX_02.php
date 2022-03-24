<?php
	$besu = 3;
	$num =12;
	$level = 7;

	if ($num % $besu == 0) {
		echo "$num 는 $besu"."의 배수이다.";
	}
	else{
		echo"$num 는 $besu"."의 배수가 아니다.";
	}
	echo "회원레벨:$level<br>";

	if ($level >= 1 && $level <=7) {
		// code...
		echo "login O";
	}
	else{
		echo "login X";
	}
?>