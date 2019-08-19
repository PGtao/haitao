<?php
include '../../public/common/config.php';
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
$sql="insert into saiguo(time,bhao,lians,rangq,bfen,qfen,sheng,ping,fu,ztai,jieg,zixun) 
values('{$time}','{$bhao}','{$lians}','{$rangq}','{$bfen}','{$qfen}','{$sheng}','{$ping}','{$fu}','{$ztai}','{$jieg}','{$zixun}')";
$aa=mysqli_query($link,$sql);
if($aa){
	echo '<script>location="index.php"</script>';
}
?>