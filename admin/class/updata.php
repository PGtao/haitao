<?php
include '../../public/common/config.php';
 $name=$_POST['name'];
 $id=$_POST['id'];
 $sql="update class set name='{$name}' where id={$id}";
 $aa=mysqli_query($link,$sql);
 if($aa){
 	echo '<script>location="index.php"</script>';
 }
?>