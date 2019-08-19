<?php
include '../../public/common/config.php';
include '../../public/common/function.php';
	
    $bt=$_POST['biaoti'];
    $zw=$_POST['zhengwen'];
//  $tp=$_POST['tupian'];
//  $tp2=$_POST['tupian2'];
	//图片上传
	$src=$_FILES['img']['tmp_name'];
	
	$name=$_FILES['img']['name'];
	
	@$ext=array_pop(explode('.',$name));
	
	$dst='../public/uploads/'.time().mt_rand().'.'.$ext;
	
	print_r($dst);
	if(move_uploaded_file($src,$dst)){
		thumb($dst,200,200);
		$img=basename($dst);
		echo'<script>alert("上传成功");</script>';
		
		$sql="insert into luntan(biaoti,zhengwen,img) values('{$bt}','{$zw}','{$img}')";
		
		if(mysqli_query($link,$sql)){
		echo '<script>location="index.php"</script>';
			echo "1";
		}else{
			echo "0";
		}
	}	
	else{
	echo'<script>alert("上传失败");</script>';	
	}

    	
?>