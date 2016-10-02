<?php
	//入力フォームのサニタイジング(XSS対策)
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$msg = htmlspecialchars($_POST['msg']);
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>問い合わせ内容の表示</title>
	</head>
	<body>
		<?php
			echo "お名前:".$name;
			echo "<br/>";
			echo "e-mail:".$email;
			echo "<br/>";
			echo "内容:".$msg;
			echo "<br/>";
		?>
	</body>
</html>