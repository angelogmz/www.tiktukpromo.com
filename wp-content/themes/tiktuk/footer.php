			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<div class="copyright col-10 offset-1">
					<span>&copy; <?php echo date('Y'); ?> Copyright <?php /*bloginfo('name');*/ ?></span>
					<span>Company Name</span>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->



		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script defer src="https://unpkg.com/jquery-aniview@1.0.1/dist/jquery.aniview.js"
		integrity="sha384-zDA6q/t525x7f6KD/OaOe24vCxSPU3eraILc2NU+ZA7ISsc3ExQbj8PB56FRMq6H"
		crossorigin="anonymous"></script>
		<script defer src='<?php echo get_template_directory_uri(); ?>/js/lib/conditionizr-4.3.0.min.js?ver=4.9.8'></script>
		<script defer src='<?php echo get_template_directory_uri(); ?>/js/lib/modernizr-2.7.1.min.js?ver=4.9.8'></script>
		
		


		<script defer src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js?ver=4.9.8'></script>
		<script defer src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js?ver=4.9.8'></script>

		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
		
		<script defer src='<?php echo get_template_directory_uri(); ?>/js/scripts.js'></script>

        <script>
        WebFont.load({
            google: {
            families: ['Open+Sans:300,400,600']
            }
        });
		</script>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
		assets: '<?php echo get_template_directory_uri(); ?>',
		tests: {}
		});
		</script>

		
		
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<script defer src='<?php echo get_template_directory_uri(); ?>/js/custom.js'></script>
		
	</body>
</html>
