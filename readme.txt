xamppでドキュメントルートの変更をしているので、
本来localhostと実行するディレクトリ(c:/xamp/htdocs)が
c:/wwwになっている。

以下が、設定の内容です。

「httpd.conf」ファイル（デフォルトインストール場所：c:/xampp/apache/conf）を修正します（ファイルはバックアップをとってください）。

※予め変更場所のフォルダをメモしておきます。

例）変更場所：c:/document/htdocs

 

１．ファイルの185行目くらいにある文字列をコメントアウト（文字列の先頭に”#”を付加）してコピー。貼り付けで、変更場所に置き換えます。

#DocumentRoot “C:/xampp/htdocs”　←先頭に”#”付加

DocumentRoot “C:/documenet/htdocs”　←上記の文字列をコピーし、変更したいフォルダに修正（”#”は付けない）

２．ファイルの221行目くらいにある文字列をコメントアウト（文字列の先頭に”#”を付加）してコピー。貼り付けで、変更場所に置き換える。

#<Directory “C:/xampp/htdocs”>　←先頭に”#”付加

<Directory “C:/documenet/htdocs”>　←上記の文字列をコピーし、変更したいフォルダに修正（”#”は付けない）

修正した「httpd.conf」を保存し、apacheサーバーを再起動。

 
以上で終了です。


続いてxampp管理画面に「http://～/xampp/」でアクセスするためエイリアスを指定


[httpd-xampp.confを下記の様に変更]
「httpd-xampp.conf」ファイルは「(XAMPPインストールディレクトリ)\apache\conf\extra\」ディレクトリにあります。

<Directory “C:/xampp/htdocs/xampp”>
<IfModule php5_module>
<Files “status.php”>
php_admin_flag safe_mode off
</Files>
</IfModule>
AllowOverride AuthConfig
</Directory>

↓・・・変更

Alias /xampp “C:/xampp/htdocs/xampp/”
<Directory “C:/xampp/htdocs/xampp”>
<IfModule php5_module>
<Files “status.php”>
php_admin_flag safe_mode off
</Files>
</IfModule>
AllowOverride AuthConfig
Order allow,deny
Allow from all
</Directory>

※変更後はxamppコントロールパネルの
adminボタンでxampp管理画面へのアクセスは不可になります。

FTPアカウントにフォルダへのアクセス許可を指定していたので下記も実行
・FileZillaを起動
・Edit→Usersの順に選択
・対象ユーザーを選択
・Page窓内のshared foldersを選択
・Shared foldersよりアクセス可能なフォルダを変更



[XAMPPのMySQLをコマンドプロンプトから使用する。Windows環境変数Pathの設定]
http://hapisupu.com/2015/08/xampp-mysql-command-prompt/



