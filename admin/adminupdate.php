<?php
	session_start();
include '../public/common/config.php';
 $password=$_POST['password'];
 $sql="update user set password='{$password}' where username='admin'";
 $aa=mysqli_query($link,$sql);
if($aa){
 	$_SESSION=array();
 	session_destroy();
 	setcookie('PHPSESSID'.'',time()-3600,'/');
 	echo '<script>top.location="login.php"</script>';
 }
?>