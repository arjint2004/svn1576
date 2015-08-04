<? include('head.php');//pr(base_url());die();
	$detailmovie=$agc->getMovieById($_GET['idmov']);
	$top=$agc->getTopMovie();
	//pr($detailmovie);
?>
<body>
    	<? include("header.php")?>
        
        <!-- Main content -->
        <section class="container">
            <h2 class="page-heading heading--outcontainer"><?=$detailmovie['TITLE']?></h2>
            <div class="col-sm-12">
                <div class="movie">
                    
                    <div class="movie__info">
                        <div class="col-sm-6 col-md-4 movie-mobile">
                            <div class="movie__images">
                                <span class="movie__rating">5.0</span>
                                <img alt='' src="<?=$detailmovie['POSTER']?>">
                            </div>
                            <!--<div class="movie__rate">Your vote: <div id='score' class="score"></div></div>-->
                        </div>

                        <div class="col-sm-6 col-md-8">
                            <p class="movie__time"><?=$detailmovie['RUNTIME']?> min</p>

                            <p class="movie__option"><strong>Country: </strong><?=$detailmovie['COUNTRY']?></p>
                            <p class="movie__option"><strong>Language: </strong><?=$detailmovie['LANGUAGE']?></p>
                            <p class="movie__option"><strong>Category: </strong><?=$detailmovie['GENRE']?></p>
                            <p class="movie__option"><strong>Release date: </strong>
							<?
							$exd=explode("-",$detailmovie['RELEASE DATE']);
							echo date("M-d-Y", mktime(0, 0, 0, $exd[2], $exd[1], $exd[0]));
							
							?>
							</p>
                            <p class="movie__option"><strong>Director: </strong><a href="#"><?=$detailmovie['DIRECTOR']?></p>
                            <p class="movie__option"><strong>Actors: </strong><?=$detailmovie['STAR']?></p>
                            <p class="movie__option"><strong>ID IMDB: </strong><?=$detailmovie['ID IMDB']?></p>
                            <p class="movie__option"><strong>ID TMDB: </strong><?=$detailmovie['ID TMDB']?></p>

                            <!--<a href="#" class="comment-link">Comments:  15</a>-->

                            <div class="movie__btns">
                                <a href="lp/<?=$detailmovie['ID IMDB']?>" class="btn btn-md btn--warning">Play Or Download</a>
                                <!--<a href="#" class="watchlist">Add to watchlist</a>-->
                            </div>
							<h2 style="margin-top:20px;margin-bottom:10px;" class="page-heading"><?=$detailmovie['TITLE']?></h2>

							<p class="movie__describe"><?=$detailmovie['DESCRIPTION']?></p>
                            <!--<div class="share">
                                <span class="share__marker">Share: </span>
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    

                    <h2 class="page-heading">Other Movie</h2>
                    
                    <div class="movie__media">
                        <div class="movie__media-switch">
                            <!--<a href="#" class="watchlist list--photo" data-filter='media-photo'>234 photos</a>-->
                            <a href="#" class="watchlist list--video" data-filter='media-video'>10 movie</a>
                        </div>

                        <div class="swiper-container">
                          <div class="swiper-wrapper">
                              <? foreach($top as $datatop){?>
							  <!--First Slide-->
                              <div class="swiper-slide">
                                <a href='movie-page-right.php?idmov=<?=$datatop['ID IMDB']?>' class="movie__media-item ">
                                     <img alt='' src="<?=$datatop['POSTER']?>">
                                </a>
                              </div>
                              <? } ?>                        
                          </div>
                        </div>

                    </div>

                </div>

                
            </div>

            <? //include('sidebar.php');?>

        </section>
        <? include('footer.php');?>

	<!-- JavaScript-->
        <!-- jQuery 1.9.1--> 
        <script src="../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-1.10.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- jQuery UI -->
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- Bootstrap 3--> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="js/external/jquery.selectbox-0.2.min.js"></script>

        <!-- Stars rate -->
        <script src="js/external/jquery.raty.js"></script>
        <!-- Swiper slider -->
        <script src="js/external/idangerous.swiper.min.js"></script>
        <!-- Magnific-popup -->
        <script src="js/external/jquery.magnific-popup.min.js"></script> 

        <!--*** Google map  ***-->
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script> 
        <!--*** Google map infobox  ***-->
        <script src="js/external/infobox.js"></script> 

        <!-- Share buttons -->
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-525fd5e9061e7ef0"></script>

        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>

        <!-- Custom -->
        <script src="js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_MoviePage();
            });
		</script>

</body>

<!-- Mirrored from amovie.designzway.com/movie-page-right.html by HTTrack Website Copier/3.x [XR&CO'2004], Wed, 08 Jul 2015 06:13:41 GMT -->
</html>
