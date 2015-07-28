<?  include('head.php');?>
<body>
<? include("header.php")?>
        
        <!-- Main content -->
        <section class="container">
            <h2 class="page-heading heading--outcontainer">Movies</h2>

            <div class="col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">
				<? include('movielist.php');?>
            </div>
                    
            <? include('sidebar.php');?>

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

        <!-- Form element -->
        <script src="js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="js/form.js"></script>

        <!-- Custom -->
        <script src="js/custom.js"></script>
		
		<script type="text/javascript">
            $(document).ready(function() {
                init_MovieList();
            });
		</script>

</body>

<!-- Mirrored from amovie.designzway.com/movie-list-right.html by HTTrack Website Copier/3.x [XR&CO'2004], Wed, 08 Jul 2015 06:13:42 GMT -->
</html>
