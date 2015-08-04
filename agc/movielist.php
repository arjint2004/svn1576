				<? 	$genre=$agc->genre;
					$datamovie=$agc->movielist();
					$page=$agc->pagelist;
					//pr($datamovie);
				?>
				<div class="select-area">
			        <!--<div class="datepicker">
                      <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                      <input type="text" id="datepicker" value='03/10/2014' class="datepicker__input">
                    </div>-->
				
                    <form class="select" name="years" method='get' action="">
                          <select onchange="return submit();" sb="submit" id="years1" name="years" class="select__sort" tabindex="0">
                            <? for($i=2005;$i<date('Y');$i++){?>
							<option value="<?=$i?>"><?=$i?></option>
                            <? } ?>
                          </select>
                    </form>

                    <form class="select select--film-category" method='get'>
                          <select name="genre" class="select__sort" tabindex="0">
							<? foreach($genre as $datagenre){?>
                            <option value="<?=$datagenre?>"><?=$datagenre?></option>
							<? } ?>
                          </select>
                    </form>

                </div>

                 <div class="tags-area">
                    <div class="tags tags--unmarked">
                        <span class="tags__label">Sorted by:</span>
                            <ul>
                                <li class="item-wrap"><a href="#" class="tags__item item-active" data-filter='all'>all</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='release'>release date</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='popularity'>popularity</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='comments'>comments</a></li>
                                <li class="item-wrap"><a href="#" class="tags__item" data-filter='ending'>ending soon</a></li>
                            </ul>
                    </div>
                </div>
				
                <? 
				
				foreach($datamovie['movie list'] as $x=> $datamovies){
				if($x<20){
				?>
                <!-- Movie preview item -->
                <div class="movie movie--preview movie--full release">
                     <div class="col-sm-3 col-md-2 col-lg-2">
                            <div class="movie__images">
                                <img alt='' src="<?=$datamovies['POSTER']?>">
								<!--<img alt='' src="compressimage.php?percent=0.25&img=<?=base64_encode($datamovies['POSTER'])?>">-->
                            </div>
                            <!--<div class="movie__feature">
                                <a href="#" class="movie__feature-item movie__feature--comment">123</a>
                                <a href="#" class="movie__feature-item movie__feature--video">7</a>
                                <a href="#" class="movie__feature-item movie__feature--photo">352</a>
                            </div>-->
                    </div>

                    <div class="col-sm-9 col-md-10 col-lg-10 movie__about">
                            <a href='movie-page-full.html' class="movie__title link--huge"><?=$datamovies['TITLE']?></a>

                            <p class="movie__time"><?=$datamovies['RUNTIME']?> min</p>

                            <p class="movie__option"><strong>Country: </strong><?=$datamovies['COUNTRY']?></p>
                            <p class="movie__option"><strong>Language: </strong><?=$datamovies['LANGUAGE']?></p>
                            <p class="movie__option"><strong>Category: </strong><?=$datamovies['GENRE']?></p>
                            <p class="movie__option"><strong>Release date: </strong>
							<?
							$exd=explode("-",$datamovies['RELEASE DATE']);
							 echo date("M-d-Y", mktime(0, 0, 0, $exd[1], $exd[2], $exd[0]));
							//echo $datamovies['RELEASE DATE'];
							?>
							</p>
                            <p class="movie__option"><strong>Director: </strong><a href="#"><?=$datamovies['DIRECTOR']?></p>
                            <p class="movie__option"><strong>Actors: </strong><?=$datamovies['STAR']?></p>
                            <p class="movie__option"><strong>ID IMDB: </strong><?=$datamovies['ID IMDB']?></p>
                            <p class="movie__option"><strong>ID TMDB: </strong><?=$datamovies['ID TMDB']?></p>
                            <!--<p class="movie__option"><strong>Description: </strong><?//=$datamovies['DESCRIPTION']?></p>-->

                            <div class="movie__btns">
                                <a href="movie-page-right.php?idmov=<?=$datamovies['ID IMDB']?>" class="btn btn-md btn--warning">Detail<span class="hidden-sm"></span></a>
                                <!--<a href="#" class="watchlist">Add to watchlist</a>-->
                            </div>

                            <div class="preview-footer">
                                <div class="movie__rate"><!--<div class="score"></div><span class="movie__rate-number">170 votes</span> <span class="movie__rating">5.0</span>--></div>
                                

                                <!--<a href="#" class="movie__show-btn">Showtime</a>-->
                            </div>
                    </div>

                    <div class="clearfix"></div>
                    
                    <!-- Time table (choose film start time)
                    <div class="time-select">
                        <div class="time-select__group group--first">
                            <div class="col-sm-4">
                                <p class="time-select__place">Cineworld</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='09:40'>09:40</li>
                                <li class="time-select__item" data-time='13:45'>13:45</li>
                                <li class="time-select__item active" data-time='15:45'>15:45</li>
                                <li class="time-select__item" data-time='19:50'>19:50</li>
                                <li class="time-select__item" data-time='21:50'>21:50</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Empire</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='10:45'>10:45</li>
                                <li class="time-select__item" data-time='16:00'>16:00</li>
                                <li class="time-select__item" data-time='19:00'>19:00</li>
                                <li class="time-select__item" data-time='21:15'>21:15</li>
                                <li class="time-select__item" data-time='23:00'>23:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Curzon</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='09:00'>09:00</li>
                                <li class="time-select__item" data-time='11:00'>11:00</li>
                                <li class="time-select__item" data-time='13:00'>13:00</li>
                                <li class="time-select__item" data-time='15:00'>15:00</li>
                                <li class="time-select__item" data-time='17:00'>17:00</li>
                                <li class="time-select__item" data-time='19:0'>19:00</li>
                                <li class="time-select__item" data-time='21:0'>21:00</li>
                                <li class="time-select__item" data-time='23:0'>23:00</li>
                                <li class="time-select__item" data-time='01:0'>01:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-4">
                                <p class="time-select__place">Odeon</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='10:45'>10:45</li>
                                <li class="time-select__item" data-time='16:00'>16:00</li>
                                <li class="time-select__item" data-time='19:00'>19:00</li>
                                <li class="time-select__item" data-time='21:15'>21:15</li>
                                <li class="time-select__item" data-time='23:00'>23:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group group--last">
                            <div class="col-sm-4">
                                <p class="time-select__place">Picturehouse</p>
                            </div>
                            <ul class="col-sm-8 items-wrap">
                                <li class="time-select__item" data-time='17:45'>17:45</li>
                                <li class="time-select__item" data-time='21:30'>21:30</li>
                                <li class="time-select__item" data-time='02:20'>02:20</li>
                            </ul>
                        </div>
                    </div>
                     end time table-->

                </div>
                <!-- end movie preview item -->
				<?
				} 

				} 
				
				?>
                
                <div class="coloum-wrapper">
                    <div class="pagination paginatioon--full">
							<? if($page-1>0){?>
                            <a href='<?=base_url();?>?page=<?=$page-1?>' class="pagination__prev">prev</a>
							<? } ?>
                            <a href='<?=base_url();?>?page=<?=$page+1?>' class="pagination__next">next</a>
                    </div>
                </div>