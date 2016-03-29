<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="container">

				<?php /* Start the Loop */ ?>

				<div class="product-grid">
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="archive-product">
		        <?php if ( has_post_thumbnail() ) : ?>
		          <a href="<?php the_permalink();?>"> <?php the_post_thumbnail( 'medium' ); ?></a>
		        <?php endif; ?>
						<div class="product-info">
			        <span class="product-title"><?php the_title( '<span>', '</span>' ); ?></span>
			        <span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
						</div>
				 </div>

				<?php endwhile; ?>
			</div> <!---product-grid--->

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
