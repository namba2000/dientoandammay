<?php 
	$login = $_GET["login"];
	$password = $_GET["password"];
	if ($login == "admin" && $password == "123456") {
		echo "Chao mung admin";
	}else{
		echo "Ban da nhap sai ten hoac password";
	}
 ?>