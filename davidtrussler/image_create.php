<?php

$image = $_GET['image']; 
$type = $_GET['type']; 
//	$image = 'graphics/'.$client.'_screenshot.jpg'; 
$size = getimagesize('graphics/'.$image);
$src_h = $size[1];	// source height
$src_w = 508;		// source width
$src_x = 0; 		// source x
$src_y = 0; 		// source y
$dst_x = 0; 		// destination x
$dst_y = 0; 		// destination y

$source = imagecreatefromjpeg('graphics/'.$image); 

if ($type == 'main') {
	$dst_h = 200;	// destination height
	$dst_w = 268;	// destination width
	$comp = imagecreatetruecolor($dst_w, $dst_h); 
} else { 		// type = thumb
	$dst_h = 115;	// destination height
	$dst_w = 153;	// destination width
	$comp = imagecreatetruecolor($dst_w, $dst_h); 
}

if (($src_h / $src_w) > ($dst_h / $dst_w)) {
	$src_h = ($dst_h * $src_w) / $dst_w; 
} else {
	$src_w = ($dst_w * $src_h) / $dst_h; 
	$src_x = (508 - $src_w) / 2; 
}

imagecopyresampled($comp, $source, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h); 
imagejpeg($comp); 

imagedestroy($source); 
imagedestroy($comp); 

?>