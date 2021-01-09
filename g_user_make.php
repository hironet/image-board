<?php
$db = new PDO("mysql:host=dev-db;dbname=image-board", "root", "root");
$db->query("INSERT INTO table2 (id, pas, nam) VALUES ('admin', md5('himitunopass'), 'nisizawa')");
$db->query("INSERT INTO table2 (id, pas, nam) VALUES ('user1', md5('inupass'), 'dog')");
$db->query("INSERT INTO table2 (id, pas, nam) VALUES ('user2', md5('nekopass'), 'cat')");
$db->query("INSERT INTO table2 (id, pas, nam) VALUES ('user3', md5('usagipass'), 'rabbit')");
print "<p>table2にユーザーを作成</p>"
?>
