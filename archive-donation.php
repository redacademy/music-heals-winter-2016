<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">

			<?php if ( have_posts() ) : ?>

			<section class="donation-header">
				<h1 class="page-title">Gifts that Heal</h1>
			</section>
			<section class="donation-banner box-padding">
					<div class="donation-info">
						<p>100% of your donation will support music therapy</p>
					</div>
					<div class="donation-steps">
					</div>
				</div>
			</section>


			<div class="donation-grid container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

        <div class="donation-wrapper">
        	<?php if ( has_post_thumbnail() ) : ?>
    				<a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'large' ); ?></a>
    			<?php endif; ?>

					<div class="donation-info">
        		<span class="product-title"><?php the_title(); ?></span>

          	<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
					</div>

				</div>
			    <?php endwhile; ?>

		    	<?php the_posts_navigation(); ?>

	    	<?php else : ?>

			 <?php get_template_part( 'template-parts/content', 'none' ); ?>
			 	<?php wp_reset_postdata(); ?>


	   	<?php endif; ?>

		  </div>
		</div>
	 </main><!-- #main -->
 </div><!-- #primary -->

<?php get_footer(); ?>
