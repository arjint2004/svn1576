<?php
function pr($data=array()){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
$genre=array('Action','Adventure','Animation','Biography','Comedy','Crime','Documentary','Drama','Family','Fantasy','Film-Noir','History','Horror','Music','Musical','Mystery','Romance','Sci-Fi','Sport','Thriller','War','Western');

$datamovie=json_decode(file_get_contents('http://idmovapi.com/genre/action/random'),true);

//pr($datamovie['movie list']);