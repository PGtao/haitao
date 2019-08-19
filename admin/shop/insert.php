<?php
include '../../public/common/config.php';
include '../../public/common/function.php';
 $name=$_POST['name'];
 $conter=$_POST['conter'];
 $brand_id=$_POST['brand_id'];
//图片上传
   $src=$_FILES['img']['tmp_name'];
	$imgname=$_FILES['img']['name'];
	@$ext=array_pop(explode('.',$imgname));
	$dst='../public/uploads/'.time().mt_rand().'.'.$ext;
	if(move_uploaded_file($src,$dst)){
    thumb($dst,400,230);
	$img=basename($dst);
	$sql="insert into shop(name,conter,brand_id,img) values('{$name}','{$conter}','{$brand_id}','{$img}')";	
    $aa=mysqli_query($link,$sql);
 if($aa){
	echo '<script>location="index.php"</script>';
 }
		}
 
 

?>