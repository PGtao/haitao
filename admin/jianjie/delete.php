<?php
include '../../public/common/config.php';
$id=$_GET['id'];
$sql="delete from jianjie where id={$id}";
	$aa=mysqli_query($link,$sql);
if($aa){
	echo '<script>location="index.php"</script>';
}
?>