<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>while_5</title>
</head>
<body>
	<h3>2단 구구단 표 만들기</h3>
	<table border="1" width="100">
		<?php
			$a = 2;
			$b = 1;
			while ($a <= 9) {
				while ($b <= 9) {
				// code...
					$c = $a * $b;
					echo "<tr><td align = 'center'> $a x $b = $c</td></tr>";
					$b++;
				}
				$a++;
			}
			/*while ($b <= 9) {
				// code...
				$c = $a * $b;
				echo "<tr><td align = 'center'> $a x $b = $c</td></tr>";
				$b++;
			}*/
		?>
	</table>

</body>
</html>