<?php 

	$username 	= 'root';
	$server 	= 'localhost';
	$pass		= '';
	$db			= 'rama';

	$conn = mysql_connect($server,$username,$pass);
	$conn_db = mysql_select_db($db);
 ?>