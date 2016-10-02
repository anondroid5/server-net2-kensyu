<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8"/>
	<title>Zabbix-Agent実験(HTTP)</title>
</head>
<body>
	<h3>MySQL接続実験</h3>
	<h3 style="color:green;">お問い合わせ</h3>
	<form action="./form.php" method="post">
		<div>
			<label>名前:<input type="text" name="name" required/></label>
		</div>
		<div>
			<label>E-mail:<input type="email" name="email" placeholder"メールアドレスを入力してください" required/></label>
		</div>
		<div>
			<textarea name="msg" required></textarea>
		</div>
		<div>
			<button name="submit">submit this message</button>
		</div>
	
	</form>
</body>
</html>