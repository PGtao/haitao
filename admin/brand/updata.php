<?php
include '../../public/common/config.php';
 $name=$_POST['name'];
 $class_id=$_POST['class_id'];
 $id=$_POST['id'];
 $sql="update brand set name='{$name}',class_id='{$class_id}' where id={$id}";
 $aa=mysqli_query($link,$sql);
 if($aa){
 	echo '<script>location="index.php"</script>';
 }
?>