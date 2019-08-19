<?php
include '../../public/common/config.php';
$id=$_GET['id'];
$img=$_GET['img'];
$file="../public/uploads/{$img}";
$sql="delete from saishi where id={$id}";
	$aa=mysqli_query($link,$sql);
if($aa){
	unlink($file);
	echo '<script>location="index.php"</script>';
}
?>