<?php 
	$inch = 10;
	echo "<table border='1'>";

	echo "<tr>";
	echo "<th width='100'>인치</th> <th width = '100'>센치미터</th>";
	echo "</tr>";
	while ($inch <=100 ) {
		// code...
		$cm = $inch * 2.54;
		echo "<tr aligh='center'><td>$inch</td> <td>$cm</td> </tr>";

		$inch = $inch + 10;
	}
	echo "</table>"
	
 ?>