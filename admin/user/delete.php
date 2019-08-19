<?php
include '../../public/common/config.php';
$user_id=$_GET['user_id'];
$sql="delete from user where user_id={$user_id}";
	$aa=mysqli_query($link,$sql);
if($aa){
	echo '<script>location="index.php"</script>';
}
?>