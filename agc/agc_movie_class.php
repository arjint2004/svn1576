<?php
function base_url($data=''){
	return $_SERVER['PHP_SELF'];
}
function pr($data=array()){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
class agc {
	
	var $genre=array('Pilih Genre','Action','Adventure','Animation','Biography','Comedy','Crime','Documentary','Drama','Family','Fantasy','Film-Noir','History','Horror','Music','Musical','Mystery','Romance','Sci-Fi','Sport','Thriller','War','Western');
	
	function __construct(){
	
	}
	
	function getRandomByGenre($GenreMovie=null){

		if($GenreMovie==null){
			$GenreMovier=$this->genre[array_rand($this->genre,1)];
		}else{
			$GenreMovier[0]=$GenreMovie;
		}
		 //pr($GenreMovier);
		 //echo 'http://idmovapi.com/genre/'.$GenreMovie[0].'/random';
		//MOVIE
		return json_decode(file_get_contents('http://idmovapi.com/genre/'.$GenreMovier[0].'/random'), true);
	}
	function getMovieById($imdbID='0317705'){
		//MOVIE
		return json_decode(file_get_contents('http://idmovapi.com/'.$imdbID), true);
	}

	function movielist(){
		if(isset($_GET['page'])){
			$page=$_GET['page'];
		}else{
			$page=1;
		}
		if(isset($_GET['years'])){
			$datamovie=json_decode(file_get_contents('http://idmovapi.com/years/'.$_GET['years'].'/'.$page.'/random'),true);
			echo 'http://idmovapi.com/years/'.$_GET['years'].'/'.$page.'/random';
		}elseif(isset($_GET['genre'])){
			$datamovie=json_decode(file_get_contents('http://idmovapi.com/genre/'.$_GET['genre'].'/'.$page.'/random'),true);
		}else{
			$datamovie=json_decode(file_get_contents('http://idmovapi.com/genre/action/'.$page.''),true);
		}
		$this->pagelist=$page;
		return $datamovie;
	}
	function getTopMovie($genre='action'){
		$XGenre = explode("&#44; ", $genre);
		$GenreMovie = $XGenre[0];
		$GenreRandom = json_decode(file_get_contents('http://idmovapi.com/genre/'.$GenreMovie.'/random'), true);
		 // echo "<pre>";
		 // print_r($GenreRandom);
		 // echo "</pre>";
			if($GenreRandom['total movie'] < 10){
				$CountTopMovie = $GenreRandom['total movie'];
			}else{
				$CountTopMovie = 10;
			}
			for($tm=0;$tm<$CountTopMovie;$tm++){
				$mv[$tm]['ID IMDB'] = $GenreRandom['movie list'][$tm]['ID IMDB'];
				$mv[$tm]['TITLE'] = $GenreRandom['movie list'][$tm]['TITLE'];
				$mv[$tm]['POSTER'] = $GenreRandom['movie list'][$tm]['POSTER'];
				$mv[$tm]['DESCRIPTION'] = $GenreRandom['movie list'][$tm]['DESCRIPTION'];
			}
			
			return $mv;
	}
}
