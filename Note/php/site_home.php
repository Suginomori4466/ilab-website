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

$user = new UserInfo();
$user->ExecuteSQL("select * from user_info");
print_r($user->result);
$newpost = new UserPost();
//$newpost->ExecuteSQL("insert into post(id, title, userid) values(0, \"test\", 0)");
$newpost->ExecuteSQL("update post set title = \"北海道\" where id = 0");
$newpost->ExecuteSQL("select * from post");
print_r($user->result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>市川研ウェブサイト</title>
  </head>
  <body>
    ・タイトル<br>

    ・キーワード<br>

    ・記事<br>

    ・参考文献<br>

    ・関連記事（キーワードから）<br>

  </body>
</html>
