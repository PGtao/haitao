<?php
include '../../public/common/config.php';
$id=$_GET['id'];
$img=$_GET['img'];
$file="../public/uploads/{$img}";
$file2="../public/uploads/thumb_{$img}";
$sql="delete from shop where id={$id}";
	$aa=mysqli_query($link,$sql);
if($aa){
	unlink($file);
	unlink($file2);
	echo '<script>location="index.php"</script>';
}
?>