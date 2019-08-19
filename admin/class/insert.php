<?php
include '../../public/common/config.php';
$name=$_POST['name'];
$sql="insert into class(name) values('{$name}')";
$aa=mysqli_query($link,$sql);
if($aa){
	echo '<script>location="index.php"</script>';
}
?>