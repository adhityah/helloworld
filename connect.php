<?php
	$hotname = "br-cdbr-azure-south-a.cloudapp.net";
	$username = "b7c141cebc9a78";
	$password = "cbb796d6";
	$db_name = "db_webhello";
	
	$conn = mysql_connect($hotname, $username, $password) or die("gagal menghubungkan ke database");
	$db = mysql_select_db($db_name) or die("gagal menghubungkan database");
?>