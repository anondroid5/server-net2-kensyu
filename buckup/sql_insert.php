<?php
	//Mysql必須情報
	define('DB_HOST','localhost');
	define('DB_USER','zabbix');
	define('DB_PASS','zabbixpassword');
	define('DB_NAME','phpdb');

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>MySQLテーブルに追加</title>
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
				die('SELECTクエリが失敗しました。'.mysql_error());
			}
			
			while ($row = mysql_fetch_assoc($result)) {
				print('<p>');
				print('name='.$row['name']);
				print(',email='.$row['email']);
				print(',msg='.$row['msg']);
				print('</p>');
			}
			
			print('<p>データを追加します。</p>');
			
			$sql = "INSERT INTO inquiry (name, email, msg) VALUES ('anonymous', 'anondroid555@gmail.com','anon')";
			$result_flag = mysql_query($sql);
			
			if (!$result_flag) {
				die('INSERTクエリが失敗しました。'.mysql_error());
			}
			
			print('<p>追加後のデータを取得します。</p>');
			
			$result = mysql_query('SELECT name, email, msg FROM inquiry');
			
			if (!$result) {
				die('SELECTクエリが失敗しました。'.mysql_error());
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