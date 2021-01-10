<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE["PHPSESSID"])) {
  setcookie("PHPSESSID", '', time() - 3600, '/');
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ご利用ありがとうございました</title>
</head>
<body>

<p style="color: red;">　たび写真館</p>
<p>またのご来場をお待ちしています<br>
<a href="gz_logon.php">再度ログオンするときはここから</a></p>

</body>
</html>
