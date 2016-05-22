<!DOCTYPE html>
<html lang="ja">
<head>
	<title>multiple</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		// 1から9の数字に3を掛けて表示
		for ($i=1; $i <= 9; $i++) {
			// 「&nbsp;」は、半角スペースの実体参照文字
			echo $i * 3 . '&nbsp;';
		}
	?>
</body>
</html>