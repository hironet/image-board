<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>たび画像アップロード</title>
</head>
<body style="background-color: lightblue;">
<?php
if (isset($_SESSION['us']) && $_SESSION['us'] != null && $_SESSION['tm'] >= time() - 300) {
  $_SESSION['tm'] = time();
?>
<p style="color: red">たび写真館</p>
<p>投稿よろしくお願いします！</p>
<form enctype='multipart/form-data' action='gz_up_set.php' method='post'>
  名前<br>
  <input type='text' name='myn' value="<?php print $_SESSION['us'] ?>"><br>
  メッセージ<br>
  <textarea name='mym' rows='10' cols='70'></textarea><br>
  <input type='file' name='myf'>
  <p>送信できるのは1MBまでのJPEG画像だけです！<br>
  また展開後のメモリ消費が多い場合アップロードできません。</p>
  <input type='submit' value='送信'>
  <p><a href=gz.php>一覧表示へ</a></p>
</form>
<?php
} else {
  session_destroy();
  print "<p>ちゃんとログオンしてね！<br>
        <a href='gz_logon.php'>ログオン</a></p>";
}
?>

</body>
</html>
