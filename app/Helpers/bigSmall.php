<?php

function bigSmall($path,$name,$ext){
    $big 	= preg_replace('/150/', '1800', $path); 
    $small 	= preg_replace('/1800/', '600', $big); 
    $big 	= "$big/$name.$ext";
    $small	= "$small/$name.$ext"; 
    return [$big,$small];
}