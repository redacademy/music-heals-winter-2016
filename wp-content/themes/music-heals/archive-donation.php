<div class="container">
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

			<div class="common-header">
				<h1 class="common-title">Gifts that Heal</h1>
			</div>
			<section class="donation-banner box-padding">
			  <div class="donation-info">
					<h2>100% of your donation will support music therapy</h2>
					<p>Music therapists help their patients achieve a number of goals through music, including improvement of communication, academic strengths, attention span, and motor skills. they may also assist with behavioural therapy and pain management.</p>
					<p>Choose one of the music notes form the selection below and 100% o fyour donation will go towards a music therapy program. Keep sharing the good vibrations by sending music notes to anyone who appreciates the healing power of music.</p>
				</div>
			</section>
			<div class="donation-steps">
				<div class="donation-step-wrapper">
					<img src="<?php echo get_template_directory_uri() . '/assets\/donation-page\/Gifts_that_Heal_step1'?>.svg" alt="Step One" />
					<h2 class="donation-step-notes">Pick Your Music Note</h2>
				</div>
				<div class="donation-step-wrapper">
					<img src="<?php echo get_template_directory_uri() . '/assets\/donation-page\/Gifts_that_Heal_step2'?>.svg" alt="Step Two" />
					<h2 class="donation-step-notes">Personalize Your Message</h2>
				</div>
				<div class="donation-step-wrapper">
					<img src="<?php echo get_template_directory_uri() . '/assets\/donation-page\/Gifts_that_Heal_step3'?>.svg" alt="Step Three" />
					<h2 class="donation-step-notes">Share Gifts that Heal</h2>
				</div>
			</div>
			<div class="donation-grid">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="donation-wrapper">

						<div class="donation-image-wrapper">

							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?></a>
							<?php endif; ?>
						</div>

						<div class="donation-info-wrapper">
							<div class="price-wrapper">
								<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
							</div>
	        		<span class="donation-title"><?php the_title(); ?></span>
							<p><?php echo CFS()->get( 'donation_description' ); ?></p>

							<button class="donation-btn">Donate</button>
						</div>
					</div>

			    <?php endwhile; ?>

		    	<?php the_posts_navigation(); ?>

	    	<?php else : ?>

			 <?php get_template_part( 'template-parts/content', 'none' ); ?>
			 	<?php wp_reset_postdata(); ?>


	   	<?php endif; ?>

		  </div>

	 </main><!-- #main -->
 </div><!-- #primary -->

<?php get_footer(); ?>
</div>
