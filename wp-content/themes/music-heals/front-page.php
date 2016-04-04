<div class="container">
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme

 */
	get_header();
 ?>

 <div class="desktop-wrapper-1">
	 <div class="desktop-wrapper-2">
		<section class="video-box box-padding">
			<div class="menu-logo-wrapper">
				<div class="menu-button"><img src="<?php echo get_template_directory_uri();?>  /assets/Hamburger_menu_01.svg" alt="Hamburger Menu"/></div>

				<div class="logo"><img src="<?php echo get_template_directory_uri();?>  /assets/musicheals.png" alt="Music Heals Logo"/></div>
			</div>
			<div class="text-wrapper">
				<div class="header-text"><h1>Think about all the ways music helps you.</h1></div>
				<div class="tagline-text"><p>Music Heals wants to make sure that <span>everyone</span> has access to the healing power of music.</p></div>
			</div>
		</section>
		<div class="desktop-wrapper-3 box-padding">
			<section class="donations-box box-padding">
				<h1>The Gift of Music</h1>
				<a href="<?php home_url()?>/musicheals/donation/"><button class="common-btn give">Give</button></a>
			</section>

			<div class="bxdiv">
				<ul class="bxslider box-padding">
					<li>
					 <div class="slider-image-1">
					 </div>
				 </li>
				 <li>
					 <div class="slider-image-2">
					 </div>
				 </li>
				 <li>
					 <div class="slider-image-3">
					 </div>
				 </li>
				</ul>
			</div>
		</div>
		</div>

	 <div class="desktop-wrapper-4">
		 <section class="news-and-events-section box-padding">
				 <!--  NEWS AND EVENTS -->
				 <div class="news-and-events">

					 <div>
						 <h1> news and events</h1>
					 </div>

					 <div>
						 <h2 class="sub-heading">70 bars across canada
								 support music therapy
								 this saturday night
						 </h2>
					 </div>

					 <div>
						 <span>+ More</span>
					 </div>
				 </div>
		 </section>


		 <section class="about-us box-padding">

			 <h2>How We Help</h2>
			 <a href="<?php home_url()?>musicheals/about/"><button class="common-btn">About Us</button></a>
		 </section>
		 <section class="shop box-padding">
			 <h2>Merch</h2>
			 <a href="<?php bloginfo('url')?>/products/"><button class="common-btn">Shop</button></a>
		 </section>
	 </div>
 </div>



<?php get_footer(); ?>
</div>
