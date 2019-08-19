<?php
include '../../public/common/config.php';
$id=$_POST['id'];
$time=$_POST['time'];
$bhao=$_POST['bhao'];
$lians=$_POST['lians'];
$rangq=$_POST['rangq'];
$bfen=$_POST['bfen'];
$qfen=$_POST['qfen'];
$sheng=$_POST['sheng'];
$ping=$_POST['ping'];
$fu=$_POST['fu'];
$ztai=$_POST['ztai'];
$jieg=$_POST['jieg'];
$zixun=$_POST['zixun'];
$sql="update saiguo set time='{$time}',bhao='{$bhao}',lians='{$lians}',rangq='{$rangq}'
  ,bfen='{$bfen}',qfen='{$qfen}',sheng='{$sheng}',ping='{$ping}',fu='{$fu}',ztai='{$ztai}',jieg='{$jieg}',zixun='{$zixun}' where id={$id}";
$aa=mysqli_query($link,$sql);
if($aa){
	echo '<script>location="index.php"</script>';
}
?>