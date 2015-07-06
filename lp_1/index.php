<?php include ('data_ori.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Casava Responsive Design</title>

    <link href="asset/css/animations.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="asset/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
	<link href="asset/fontawesome/css/font-awesome.css" rel="stylesheet">
    <script src="asset/js/jquery-1.10.2.min.js"></script>
    <script src="asset/js/script.js"></script>

    <link rel="stylesheet" href="asset/css/owl.carousel.css">
    <link rel="stylesheet" href="asset/css/owl.theme.css">
    <link href="asset/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/slideshow.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/lightbox.css" />
	
    <script src="asset/js/owl.carousel.js"></script>
	<script src="asset/js/script.js"></script>
	<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>-->
	<script>
	/*var map;
	function initialize() {
		var mapOptions = {
		zoom:15,
		center: new google.maps.LatLng(-7.797224000000000000, 110.368796999999970000)
		};
		map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);
	}
	google.maps.event.addDomListener(window, 'load', initialize);*/
    </script>

  </head>

  <body>
	<header></header>
	
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
			<a class="navbar-brand" href="<?php echo $TopMovieID[$tm]; ?>"><?php echo $Title; ?></a>
            </div>
          </div>
        </div>
    </div>
	<!--nav bar-->
	<div class="row animated fadeInUp" style="opacity: 1;">

	</div>
	<div class="full-width">
		<div class="row ">
		<div class="tit_center">
			<h3><?php echo $GenreMovie; ?> Movie</h3>
		</div>
			<?php for($tm=0;$tm<$CountTopMovie;$tm++){?>
			<div class="col-sm-per6 no_padding no_margin">	
                <div class="no_margin view view-tenth">
                    <img  src="<?php echo $TopBackdrop[$tm]; ?>"  alt="<?php echo $TopMovieID[$tm]; ?>"/>
                    <div class="mask">
                        <a class="info" href="<?php echo $TopMovieID[$tm]; ?>"><?php echo $TopMovieTitle[$tm]; ?></a>
                        <p  href="<?php echo $TopBackdrop[$tm]; ?>"  data-toggle="lightbox" data-gallery="imagesizes"><?=$TopDesc[$tm]?></p>
                    </div>
                </div>
            </div>
			<? } ?>
			
		</div>
	</div><!--full_width-->

  
    </div><!-- /.container -->
	<footer>

	</footer>
	<script type="text/javascript" src="asset/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="asset/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					easing		: 'easeOutExpo',
					titleeasing	: 'easeOutExpo',
					titlespeed	: 1200
                });
            });
    </script>
    <script src="asset/js/bootstrap.min.js"></script>
	<script src="asset/js/lightbox.js"></script>

        <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                    event.preventDefault();
                    return $(this).Lightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        }
                    });
                });

                //Programatically call
                $('#open-image').click(function (e) {
                    e.preventDefault();
                    $(this).Lightbox();
                });
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).Lightbox();
                });
            });
        </script>
  </body>
</html>
