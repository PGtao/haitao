<?php
include '../../public/common/config.php';
 $name=$_POST['name'];
 $conter=$_POST['conter'];
//图片上传
   $src=$_FILES['img']['tmp_name'];
	$imgname=$_FILES['img']['name'];
	@$ext=array_pop(explode('.',$imgname));
	$dst='../public/uploads/'.time().mt_rand().'.'.$ext;
	if(move_uploaded_file($src,$dst)){
	$img=basename($dst);
	$sql="insert into saishi(name,conter,img) values('{$name}','{$conter}','{$img}')";	
    $aa=mysqli_query($link,$sql);
 if($aa){
	echo '<script>location="index.php"</script>';
 }
		}
 
 

?>