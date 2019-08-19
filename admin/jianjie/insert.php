<?php
include '../../public/common/config.php';
$data=$_POST['data'];
$title=$_POST['title'];
$conter=$_POST['conter'];
$sql="insert into jianjie(data,title,conter) values('{$data}','{$title}','{$conter}')";
$aa=mysqli_query($link,$sql);
if($aa){
	echo '<script>location="index.php"</script>';
}
?>