<?php
	//Mysql必須情報の表示
	define('DB_HOST','localhost');
	define('DB_USER','zabbix');
	define('DB_PASS','zabbixpassword');
	define('DB_NAME','phpdb');

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>MySQLテーブル表示</title>
	</head>
	<body>
		<?php
			$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
			if (!$link) {
				die('接続失敗です。'.mysql_error());
			}
			
			print('<p>接続に成功しました。</p>');
			$db_selected = mysql_select_db(DB_NAME, $link);
			if (!$db_selected){
				die('データベース選択失敗です。'.mysql_error());
			}
			
			print('<p>phpdbデータベースを選択しました。</p>');
			
			mysql_set_charset('utf8');
			
			$result = mysql_query('SELECT name, email, msg FROM inquiry');
			
			if (!$result) {
				die('クエリーが失敗しました。'.mysql_error());
			}
			
			while ($row = mysql_fetch_assoc($result)) {
				print('<p>');
				print('name='.$row['name']);
				print(',email='.$row['email']);
				print(',msg='.$row['msg']);
				print('</p>');
			}
			
			$close_flag = mysql_close($link);
			
			if ($close_flag){
				print('<p>切断に成功しました。</p>');
			}
		?>
	</body>
</html>