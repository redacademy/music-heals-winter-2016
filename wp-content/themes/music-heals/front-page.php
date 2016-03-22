<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
<<<<<<< HEAD
 */ ?>
=======
 */?>

>>>>>>> 7d728f195711fcfb36eb70e65e94e69e8def501c

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

				<p>hi</p>

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<<<<<<< HEAD
=======

>>>>>>> 7d728f195711fcfb36eb70e65e94e69e8def501c

<?php get_footer(); ?>
