<?php 
	$sum = 0;

	/*for ($i=1; $i <= 100 ; $i++) { 
		// code...
		if ($i % 5 == 0) {
			// code...
			$sum = $sum + $i;
		}
	}
	echo "1~100의 정수 중 5의 배수의 합계:$sum";*/
	$count = 0;
	$ok = true;
	for ($i=500; $i <= 700 ; $i++) { 
		// code...
		if ($i % 4 !=0) {
			// code...
			echo $i." ";
			$count++;
			$ok = true;
		}
		if ($count !=0 && $count%10==0 && $ok==true) {
			// code...
			echo "<br>";
		}
	}
 ?>