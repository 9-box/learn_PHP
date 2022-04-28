<?php 
	/*$score[0] = 90;
	$score[1] = 80;
	$score[2] = 70;
	$score[3] = 60;
	$score[4] = 50;
	$sum = 0;
	for ($a=0; $a <= 4; $a++) { 
		// code...
		$sum =+ $score[$a];
	}
	$avg = $sum / 5;

	echo "$avg";*/
	$scores = array(87,76,98,87,87,93,79,84,52,63,21,59,95,95,84,77,78,95);
	$sum = 0;
	for ($a=0; $a < count($scores); $a++) { 
		$sum += $scores[$a];
	}
	$avg = $sum/count($scores);
	echo("합계 :"."$sum"."평균 :"."$avg");
 ?> 