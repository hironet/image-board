<?php
session_start();

$u = htmlspecialchars($_POST['user'], ENT_QUOTES);
$p = htmlspecialchars($_POST['pass'], ENT_QUOTES);
require_once("db_init.php");
?>

<html>
<head>
<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<title>ようこそ愛鳥獣写真館</title>
</head>
<body>

<?php
$ps = $db->query("SELECT pas FROM table2 WHERE id='$u'");
if ($ps->rowCount() > 0) {
  $r = $ps->fetch();
  if ($r['pas'] === md5($p)) {
    $_SESSION['us'] = $u;
?>

<p>ようこそ愛鳥獣写真館 momoへ！</p>
<p><a href='g.php'>ここをクリックして一覧表示にどうぞ</a></p>

<?php
  } else {
    session_destroy();
?>

<p>パスワードが違います<br>
<a href='g_logon.html'>ログオン</a></p>

<?php
  }
} else {
  session_destroy();
?>

<p>ユーザーが登録されていません<br>
<a href='g_logon.html'>ログオン画面へ</a></p>

<?php
}
?>

</body>
</html>
