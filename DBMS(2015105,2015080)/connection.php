<?php
$mysql_hostname = "localhost:3036";
$mysql_user = "root";
$mysql_password = "beatsbydre";
$mysql_database = "simple_login";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>