<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */
 get_header();
 ?>
​​
			<section class="error-404 not-found">
​
				<div class="page-content">

				<div class="404-wrapper">

					<img src="<?php echo get_template_directory_uri() . '/assets\/Error_404' ?>.svg" alt="Stage set-up with drums"/>

					<h1 class="page-title"><?php echo esc_html( 'Oops! your stage isn&rsquo;t set up yet.' ); ?></h1>

					<button class="home-button">
            <a href="<?php home_url()?>/">Go Back Home</a>
          </button>
				</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
​
<?php get_footer(); ?>
