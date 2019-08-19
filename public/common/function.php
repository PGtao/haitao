<?php
//图片缩放函数
function thumb($simg,$dw,$dh){
	$arr=getimagesize($simg);
	$sw=$arr[0];
	$sh=$arr[1];
	$st=$arr[2];
	$sm=$arr['mime'];
	
	switch($st){
		case 1:
		$imagecreate="imagecreatefromgif";
		$imageout="imagegif";
		break;
		case 2:
		$imagecreate="imagecreatefromjpeg";
		$imageout="imagejpeg";
		break;
		case 3:
		$imagecreate="imagecreatefrompng";
		$imageout="imagepng";
		break;
	}
	$simgr=$imagecreate($simg);
	if($sw/$dw>$sh/$dh){
		$b=$sw/$dw;
	}else{
		$b=$sh/$dh;
	}
	$dw2=floor($sw/$b);
	$dh2=floor($sh/$b);
	$dimgr=imagecreatetruecolor($dw2,$dh2);
	imagecopyresampled($dimgr,$simgr,0,0,0,0,$dw2,$dh2,$sw,$sh);
	$dir=dirname($simg);
	$file=basename($simg);
	$save=$dir.'/'.'thumb_'.$file;
	$imageout($dimgr,$save);
}
?>