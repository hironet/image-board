<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ようこそ愛鳥獣写真館momoへ！</title>
</head>
<body>

<?php
if (isset($_SESSION['us']) && $_SESSION['us'] != null) {
?>
<p style='color: red'>　愛鳥獣写真館momo (=^..^=)</p>
<p><a href='g_up.php'>アップロード</a><br>
<a href='g_logoff.php'>ログオフ</a></p>
<?php
  require_once("db_init.php");
  $ps = $db->query('SELECT * FROM table1 ORDER BY ban DESC');
  while ($r = $ps->fetch()) {
    $tg = $r['gaz'];
    print "<p>{$r['ban']}【投稿者：{$r['nam']}】{$r['dat']}<br>"
          . nl2br($r['mes'])
          . "<br><a href='./gz_img/$tg' target='_blank'>
          <img src='./gz_img/thumb_$tg'></a><hr></p>";
  }
?>
<p><a href='g_up.php'>アップロード</a><br>
<a href='g_logoff.php'>ログオフ</a></p>
<?php
} else {
  session_destroy();
  print "<p>ちゃんとログオンしてね！<br>
        <a href='g_logon.html'>ログオン</a></p>";
}
?>

</body>
</html>
