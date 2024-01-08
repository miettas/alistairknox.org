<?php

function searchQuery($req,$mdl){
	if($req->has('search')){
		$r = $req->input('search');
		$sq = $mdl::search($r)->paginate(15); 
	}
	if($req->has('query')){
		$srch = preg_replace('/query/','search',$req['query']);
		$sq = $mdl::search($srch)->paginate(15);
	}
	
	$num = count($sq);
	return [$sq,$num];
}