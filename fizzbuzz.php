<!DOCTYPE html>
<html lang="ja">
<head>
	<title>fizzbuzz</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		// 1から100までを出力
		for ($i=1; $i <= 100; $i++) {
			if ($i % 15 == 0) {
				// 3と5の倍数（15の倍数）の時は「FizzBuzz」と出力
				echo 'FizzBuzz<br>';
			} else if ($i % 3 == 0) {
				// 3の倍数の時は「Fizz」と出力
				echo 'Fizz<br>';
			} else if ($i % 5 == 0) {
				// 5の倍数の時は「Buzz」と出力
				echo 'Buzz<br>';
			} else {
				// それ以外は数値を出力
				echo $i . '<br>';
			}
		}
	?>
</body>
</html>