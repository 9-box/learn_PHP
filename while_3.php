<?php 
	$i = 1;
	$count = 0;
	while ($i <= 100) {
		// code...
		if ($i % 3 != 0) {
			// code...
			echo "$i,";
			$count++;
		}
		if ($count % 10 ==0) {
			// code...
			echo"<br>";
		}
		$i++;
	}
 ?>