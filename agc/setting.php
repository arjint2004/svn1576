<?php

function base_url($data=''){
	return $_SERVER['PHP_SELF'];
}
function pr($data=array()){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
//pr($_SERVER);
$genre=array('Action','Adventure','Animation','Biography','Comedy','Crime','Documentary','Drama','Family','Fantasy','Film-Noir','History','Horror','Music','Musical','Mystery','Romance','Sci-Fi','Sport','Thriller','War','Western');

/*switch($_GET['years']){
	case "":
	
	break;
}*/
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}
if(isset($_GET['years'])){
	$datamovie=json_decode(file_get_contents('http://idmovapi.com/years/'.$_GET['years'].'/'.$page.'/random'),true);
}elseif(isset($_GET['genre'])){
	$datamovie=json_decode(file_get_contents('http://idmovapi.com/genre/'.$_GET['genre'].'/'.$page.'/random'),true);
}else{
	$datamovie=json_decode(file_get_contents('http://idmovapi.com/genre/action/'.$page.''),true);
}

//pr($datamovie['movie list']);