<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="image-wrapper">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
	</div>
	<section class="single-product-wrapper">
		<header class="product-header">
			<span><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
			<div class="product-details">
				<p>100% Cotton</p>
				<p>100% Rock & Roll</p>
			</div>
			<div class="product-price">
				<?php echo CFS()->get( 'price' ); ?></span>
			</div>
		</div>
			<div class="size-buttons">
				<button>SM</button>
				<button>MED</button>
				<button>LRG</button>
			</div>
			<div class="shopping-buttons">
				<button>Continue Shopping</button>
				<button>Add to Bag</button>
			</div>
		<!-- .entry-content -->
	</section>

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
