<?php
session_start();
?>

<html>
<head>
<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<title>ようこそ愛鳥獣写真館 momoへ！</title>
</head>
<body>
<p style="color: red">　愛鳥獣写真館momo (=^..^=)</p>

<?php
if (isset($_SESSION['us']) && $_SESSION['us'] != null) {
?>

<p>投稿よろしくお願いします！</p>
<form enctype='multipart/form-data' action='g_up_set.php' method='post'>
  名前<br>
  <input type='text' name='myn'><br>
  メッセージ<br>
  <textarea name='mym' rows='10' cols='70'></textarea><br>
  <input type='file' name='myf'>
  <p>送信できるのは1MBまでのJPEG画像だけです！<br>
  また展開後のメモリ消費が多い場合アップロードできません。</p>
  <input type='submit' value='送信'>
</form>
<p><a href=g.php>一覧表示へ</a></p>

<?php
} else {
  session_destroy();
  print "<p>ちゃんとログオンしてね！<br>
        <a href='g_logon.html'>ログオン</a></p>";
}
?>

</body>
</html>
