<?php
include '../../public/common/config.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql="insert into user(username,password) values('{$username}','{$password}')";
$aa=mysqli_query($link,$sql);
if($aa){
	echo '<script>location="index.php"</script>';
}
?>