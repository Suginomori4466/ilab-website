<?php
require_once(dirname(__FILE__).'/../setting.php');
require_once(PATH_PHP.'functions.php');
require_once(PATH_PHP.'manageDB.php');

echo "PATH_ROOT : ".PATH_ROOT."<br>";
echo "PROJECT_ROOT : ".PROJECT_ROOT."<br>";
echo "PATH_PHP : ".PATH_PHP."<br>";
echo "WEB_ROOT : ".WEB_ROOT."<br>";
echo "WP_ROOT : ".WP_ROOT."<br>";
echo "SRC_ROOT : ".SRC_ROOT."<br>";
echo "PATH_JS : ".PATH_JS."<br>";
echo "PATH_CSS : ".PATH_CSS."<br>";
echo "PROJECT_NAME : ".PROJECT_NAME."<br>";

$user = new UserTable();
$user->ExecuteSQL("insert into user (id, nicname) values(0, \"いいキャラ\")");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>市川研ウェブサイト</title>
  </head>
  <body>
    ・タイトル

    ・キーワード

    ・記事

    ・参考文献

    ・関連記事（キーワードから）

  </body>
</html>
