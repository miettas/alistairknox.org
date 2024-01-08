<?php

function abbreviate($inf,$id,$table,$length){

	$inf = preg_replace("[<.*?>]",'',$inf);

    if (preg_match("/^.{1,$length}\b/s", $inf, $match)){
    	$inf = $match[0];
    }

    $info = $inf."<a href='/$table/$id'> ... read more</a>";
    
    return $info;
}