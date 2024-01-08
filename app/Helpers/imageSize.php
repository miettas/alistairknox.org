<?php

function imageSize($path,$name,$ext){

$fullName = $name.'.'.$ext;
$big    = preg_replace('/150/', '1800', $path); 
$small  = preg_replace('/1800/', '600', $big); 
$big    = "$big/$fullName";
$small  = "$small/$fullName"; 
$thumb  = "$path/$fullName";
$width  = '100%';
$file = public_path("$thumb");
list($w,$h) = getimagesize($file);	
if($h>$w){$width = $w / $h * 80; };  
$width = "$width%"; 
$width = preg_replace('/%%/','%', $width);

return [$big,$small,$thumb,$width];
}