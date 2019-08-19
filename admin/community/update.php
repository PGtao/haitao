<?php 
include '../../public/common/config.php';
include '../../public/common/function.php';

$biaoti=$_POST['biaoti'];
$zhengwen=$_POST['zhengwen'];
$id=$_POST['id'];
$imgsrc=$_POST['imgsrc'];

$imgerror=$_FILES['img']['error'];

if($imgerror===0){
	//图片上传
	$src=$_FILES['img']['tmp_name'];

	$name=$_FILES['img']['name'];

	$ext=array_pop(explode('.',$name));

	$dst='../public/uploads/'.time().mt_rand().'.'.$ext;

	if(move_uploaded_file($src,$dst)){
		//进行图片缩放200x200

		thumb($dst,400,200);

		//删除原图
		$oldfile="../public/uploads/{$imgsrc}";
		$oldfile2="../public/uploads/thumb_{$imgsrc}";

		unlink($oldfile);
		unlink($oldfile2);

		$img=basename($dst);

		$sql="update luntan set biaoti='{$biaoti}',img='{$img}',zhengwen='{$zhengwen}' where id={$id}";

		if(mysqli_query($link,$sql)){
			echo '<script>alert("修改成功");</script>';
			echo '<script>location="index.php"</script>';
		}
	}
}else{
			$sql="update luntan set biaoti='{$biaoti}',zhengwen='{$zhengwen}' where id={$id}";
			if(mysqli_query($link,$sql)){
				echo '<script>location="index.php"</script>';
}
	}
?>