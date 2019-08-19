<?php
include '../../public/common/config.php';
include '../../public/common/function.php';
 $sname=$_POST['name'];
 $conter=$_POST['conter'];
 $brand_id=$_POST['brand_id'];
 $id=$_POST['id'];
 $sql="update shop set name='{$sname}',conter='{$conter}',brand_id='{$brand_id}'
  where id={$id}";
  $aa=mysqli_query($link,$sql);
 if($aa){
 	echo '<script>location="index.php"</script>';
 }	

?>