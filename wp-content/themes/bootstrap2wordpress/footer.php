<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bootstrap to WordPress
 */
?>

<?php wp_footer(); ?>

<!-- SIGN UP SECTION
================================================== -->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
				<p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
			</div><!-- end col -->
		</div><!-- row -->
	</div><!-- container -->
</section><!-- signup -->


<!-- FOOTER
================================================== -->
<footer>
	<div class="container">
		<div class="col-sm-3">
			<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
		</div><!-- end col -->
		<div class="col-sm-6">
			<?php
				wp_nav_menu( array(
					
					'theme_location'	=> 'footer',
					'container'			=> 'nav',
					'menu_class'		=> 'list-unstyled list-inline'
					
				) );
			?>
		</div><!-- end col -->
		<div class="col-sm-3">
			<p class="pull-right"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
		</div><!-- end col -->
	</div><!-- container -->
</footer>


<!-- MODAL
================================================== -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
			</div><!-- modal-header -->
			
			<div class="modal-body">
				<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
				
				<form class="form-inline" role="form">
					<div class="form-group">
						<label class="sr-only" for="subscribe-name">Your first name</label>
						<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
					</div><!-- form-group -->
					<div class="form-group">
						<label class="sr-only" for="subscribe-email">and your email</label>
						<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
					</div><!-- form-group -->
					
					<input type="submit" class="btn btn-danger" value="Subscribe!">
				</form>
				
				<hr>
				
				<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
			</div><!-- modal-body -->
			
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->

<!-- BOOTSTRAP CORE JAVASCRIPT
	 Placed at the end of the document so the pages
	 load faster!
================================================== -->
		<script
		  src="https://code.jquery.com/jquery-3.3.1.min.js"
		  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		  crossorigin="anonymous"></script>
		  
		  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
				
		<!--	<script src="assets/js/jquery-3.3.1.min.js"></script>-->
			<script src="js/main.js"></script>
		<!--	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
			</body>
		</html>