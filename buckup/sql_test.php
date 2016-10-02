<?php
	//Mysql必須情報の表示
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','rootroot');
	define('DB_NAME','phpdb');

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>MySQL必須情報</title>
	</head>
	<body>
		<?php
			echo "ホスト名:".DB_HOST;
			echo "<br/>";
			echo "ユーザ名:".DB_USER;
			echo "<br/>";
			echo "パスワード:".DB_PASS;
			echo "<br/>";
			echo "データベース名:".DB_NAME;
			echo "<br/>";
		?>
	</body>
</html>