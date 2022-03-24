<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="ex2.php" method="get">

  아이디 : <input type="text" name="uid" /></br>

  비밀번호 : <input type="password" name="pwd" /></br>

  <input type="submit" value="GET방식으로 전송" />
</form>
</body>
</html>-->


<?php
	//체중 조절이 필요한지 판별
	$h = 0;
	$w = 0;
	$a = ($h-100)*0.9;

	echo "키:$h<br>";
	echo "몸무게:$w<br>";
	if ($w > $a) {
		// code...
		echo "체중 조절이 필요<br>";
	}
	else
		echo "체중 조절이 필요 X<br>";
?>
