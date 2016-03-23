<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme

 */
	get_header();
 ?>

		<?php get_template_part( 'template-parts/content-home.php' ); ?>

	<ul class="bxslider">
		<li>
			<img src="<?php bloginfo( 'template_url' ); ?>/assets/Home_Slider1.svg" alt="music heals images" class="slider-images"/>
		</li>
		<li>
			<img src="<?php bloginfo( 'template_url' ); ?>/assets/Home_Slider2.svg" alt="music heals images" class="slider-images"/>
		</li>
		<li>
			<img src="<?php bloginfo( 'template_url' ); ?>/assets/Home_Slider3.svg" alt="music heals images" class="slider-images"/>
		</li>
	</ul>

	<section class="news-and-events-section">
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

			</div>  <!-- ends wrapper div -->
	</section>

<?php get_footer(); ?>
