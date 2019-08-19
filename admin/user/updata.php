<?php
include '../../public/common/config.php';
 $username=$_POST['username'];
 $password=md5($_POST['password']);
 $user_id=$_POST['user_id'];
 $sql="update user set username='{$username}',password='{$password}' where user_id={$user_id}";
 $aa=mysqli_query($link,$sql);
 if($aa){
 	echo '<script>location="index.php"</script>';
 }
?>