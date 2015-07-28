<?
	if(isset($detailmovie['GENRE'])){
		$gnx=explode("&#44; ",$detailmovie['GENRE']);
		$gn=str_replace(",","",$gnx[array_rand($gnx,1)]);
		
	}else{
		$gn=null;
	}
	$sidemov=$agc->getRandomByGenre($gn);
?>
			<aside class="col-sm-4 col-md-3 col-sm-pull-8 col-md-pull-9">
                <div class="sitebar sitebar--left">
				<? foreach($sidemov['movie list'] as $oc=> $dtmv){
					if($oc<=3){
				?>
                    <div class="banner-wrap first-banner--left">
                        <a href="lp/<?=$dtmv['ID IMDB']?>"><img alt='banner' src="<?=$dtmv['POSTER']?>"></a>
                    </div>
				<? } } ?>	
                </div>
            </aside>