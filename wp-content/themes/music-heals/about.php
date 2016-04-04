<div class="container">
	<?php
	/**
	 * Template Name: about
	 *
	 * @package RED_Starter_Theme

	 */
		get_header();
	 ?>

	 <div>
		 <?php echo CFS()->get( 'tagline' ); ?>
		 <!-- <span>About Us</span> -->
	 </div>

	 <!--  WHO WE ARE -->

	 <section>
		 <div class="who-we-are-banner">
			 <div class="who-we-are-content-box">
				 <h1>Who we are</h1>
					 <div class="text-overflow-control">
						 <?php echo CFS()->get( 'who_we_are_copy' ); ?>
					 </div>


					 <button type="button" class="donate-button"><a href="<?php home_url()?>/musicheals/donation/" class="donation-link">Give</a></button>

			 </div>
		 </div>
	 </section>

	 <!--  HOW WE HELP -->

	 <section>
		 <div class="how-we-help-banner">
			 <div class="how-we-help-content-box">
				 <h1>How we help</h1>
				 <div class="text-overflow-control">
				 <?php echo CFS()->get( 'how_we_help_copy' ); ?>
				 </div>
			 </div>
		 </div>
	 </section>

	 <!--  PROGRAMS  -->

	 <section>
		 <div class="programs-banner">
			 <div class="programs-content-box">
				 <h1>Programs</h1>
				 <div class="text-overflow-control">
					 <?php echo CFS()->get( 'programs_copy' ); ?>
				 </div>


					 <button type="button" class="donate-button"><a href="<?php home_url()?>/musicheals/donation/" class="donation-link">Give</a></button>


			 </div>
		 </div>
	 </section>

	 <!--  SUCCESS STORIES-->

	 <section>
		 <div class="success-stories-banner">

			 <div class="video-wrapper">
					 <iframe src="https://player.vimeo.com/video/108250365"
									 class="first-iframe"
									 width="350" height="281"
									 frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
					 </iframe>

					 <iframe src="https://player.vimeo.com/video/113413784"
									 width="350" height="281"
									 frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
					 </iframe>
			 </div>


			 <div class="success-stories-content-box">
				 <h1>Success Stories</h1>
				 <div class="text-overflow-control">
				 <?php echo CFS()->get( 'success_stories_copy' ); ?>
				 </div>
			 </div>
		 </div>
	 </section>

	<?php get_footer(); ?>
</div>
