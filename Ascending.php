<?php 
$num = array(15,13,5,9,8,7,11,23,3,1);
$count = 10;
echo "정렬전<br>";

for ($a=0; $a < count($num); $a++) { 
	 // code...
	echo $num[$a]." ";
	} 
echo "<br>";
echo "<br>";
for ($i = count($num)-2; $i >=0; $i--) { 	

	for ($j=0; $j <= $i; $j++) { 

	 	if ($num[$j] > $num[$j+1]) {

	 		$tmp = $num[$j];

	 		$num[$j] = $num[$j+1];

	 		$num[$j+1]=$tmp;
	 	}
	}
}
echo "버블 정렬 후<br>";
for ($a=0; $a < count($num); $a++) { 
	 
	echo $num[$a]." ";
} 
 ?>