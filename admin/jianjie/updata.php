<?php
include '../../public/common/config.php';
$id=$_POST['id'];
$data=$_POST['data'];
$title=$_POST['title'];
$conter=$_POST['conter'];
 $sql="update jianjie set data='{$data}',title='{$title}',conter='{$conter}' where id={$id}";
 $aa=mysqli_query($link,$sql);
 if($aa){
 	echo '<script>location="index.php"</script>';
 }
?>