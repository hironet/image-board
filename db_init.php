<?php
require_once("./gz_data/gz_db_info.php");
$dsn = "mysql:host=$SERV;dbname=$DBNM;charset=utf8mb4";
$db = new PDO($dsn, $USER, $PASS);
?>
