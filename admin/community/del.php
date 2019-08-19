<?php
	include '../../public/common/config.php';
	
	$id=$_GET['id'];
	$img=$_GET['img'];
	$file="../public/uploads/{$img}";
	$file2="../public/uploads/thumb_{$img}";
   
   $sql="delete from luntan where id='$id'";
	  if(mysqli_query($link,$sql)){
	  	unlink($file);
		unlink($file2);
		echo "<script>alert('删除成功');</script>";
  	    echo '<script>location="index.php"</script>';
	  }
	  else{
		echo "<script>alert('删除失败');</script>";
	}
?>