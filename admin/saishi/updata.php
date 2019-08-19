<?php
include '../../public/common/config.php';
 $name=$_POST['name'];
 $conter=$_POST['conter'];
 $id=$_POST['id'];
 $sql="update saishi set name='{$name}',conter='{$conter}'
  where id={$id}";
  $aa=mysqli_query($link,$sql);
 if($aa){
 	echo '<script>location="index.php"</script>';
 }	

?>