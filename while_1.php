<?php
	echo "while문 1<br>";  
	$i=1;

	while ($i <= 10) {
		// code...
		echo "$i<br>";
		$i++;
	}

	echo "<br><br>";
	echo "while문 2<br>";
	$sum= 0;
	$j = 1;

	while ($j <=10){
		$sum += $j;
		echo "\$j:$j -> 합계 : $sum<br>";
		// \는 escape문자로 $를 그대로 출력하기 위하여 사용
		$j++;
	}

?>

