<?php
	//MySQL使用情報
	define('DB_HOST','localhost');
	define('DB_USER','zabbix');
	define('DB_PASS','zabbixpassword');
	define('DB_NAME','phpdb');
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>テーブルの表示</title>
		<meta http-equiv="content-style-type" content="text/css">
		<link rel="stylesheet" type="text/css" href="./css/form/style.css">
	</head>
	<body>
		<?php
			//入力フォームのサニタイジング(XSS対策)
			$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
			$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
			$msg = htmlspecialchars($_POST['msg'], ENT_QUOTES);
						
			//3つ値が存在するときのみクエリ実行
			if($name != null && $email != null && $msg != null){
				//データベース接続
				$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
				if (!$link) {
					die('接続失敗です。'.mysql_error());
				}
				//データベース選択
				$db_selected = mysql_select_db(DB_NAME, $link);
				if (!$db_selected){
					die('データベース選択失敗です。'.mysql_error());
				}
				//文字コード指定
				mysql_set_charset('utf8');
				//クエリ発行
				$sql = "INSERT INTO inquiry (name, email, msg) VALUES ('$name', '$email', '$msg')";
				//実行結果のフラッグ
				$result_flag = mysql_query($sql);
				if (!$result_flag) {
					die('INSERTクエリが失敗しました。'.mysql_error());
				}
				//追加後のデータを取得			
				$result = mysql_query('SELECT name, email, msg FROM inquiry');
				if (!$result) {
					die('SELECTクエリが失敗しました。'.mysql_error());
				}
				print('<table>');
				print('<tr><th>name</th><th>email</th><th>message</th></tr>');
				while ($row = mysql_fetch_assoc($result)) {
					print('<tr>');
					print('<td>'.$row['name'].'</td>');
					print('<td>'.$row['email'].'</td>');
					print('<td>'.$row['msg'].'</td>');
					print('</tr>');
				}
				print('</table>');
				$close_flag = mysql_close($link);
				if (!$close_flag){
					print('<p>切断に失敗しました。</p>');
				}
			}
		?>
	</body>
</html>