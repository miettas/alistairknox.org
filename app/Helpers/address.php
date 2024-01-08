<?php

function addressString($suite,$lotnmbr,$stnmbr,$street,$suburb,$pc,$state){
	$adr = '';
	if(strlen($suite)){
		$adr .= $suite." ";
	}
	if(strlen($stnmbr)){
		$adr .= $stnmbr." ";
	}
	elseif(strlen($lotnmbr)){
			$adr .= $lotnmbr." ";
	}
	if(strlen($street)){
		$adr .= $street.", ";
	}
	if(strlen($suburb)){
		$adr .= $suburb.". ";
	}
	if(strlen($pc)){
		$adr .= $pc;
	}
	if(strlen($state)){
		$state = strtoupper($state);
		$adr .= " ".$state;
	}
	return $adr;
}

#formatted
function address($suite,$lotnmbr,$stnmbr,$street,$suburb,$pc,$state){
	$adr = '';
	if(strlen($suite)){
		$adr .= $suite."<br />";
	}
	if(strlen($stnmbr)){
		$adr .= $stnmbr." ";
	}
	elseif(strlen($lotnmbr)){
			$adr .= $lotnmbr." ";
	}
	if(strlen($street)){
		$adr .= $street.",<br />";
	}
	if(strlen($suburb)){
		$adr .= $suburb.". ";
	}
	if(strlen($pc)){
		$adr .= $pc;
	}
	if(strlen($state)){
		$state = strtoupper($state);
		$adr .= " ".$state;
	}
	return $adr;
}