
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="common-header">
				<h1 class="common-title">Merch</h1>
			</div>
			<div class="merch-banner"></div>
			<div class="merch-container">
				<div class="merch-tagline">
					<p>Merch the whole family will love.
					<p>All Merch profits go directly to the Music Heals Foundation.</p>
					<p>Feel good with every purchase.</p>
				</div>
				<nav class="navbar">
					<ul>
						<li>ALL</li>
						<li>Kids</li>
						<li>Womens</li>
						<li>Mens</li>
					</ul>
				</nav>

				<div class="product-wrapper">

	      <h1 class="merch-category">Kids</h1>

				      <?php
				        $kids= array(
	                'post_type'=> 'product',
	                'posts_per_page' => 4,
	                'tax_query'=> array (
	                  array (
	                    'taxonomy'=> 'product-type',
	                    'field'=> 'slug',
	                    'terms'=> 'kids',
	                ),
	              ),
	            );
	            $kidsection = get_posts($kids);

				      ?>
							<div class="products-list">
				        <?php foreach($kidsection as $post) : setup_postdata($post); ?>
				          <?php if (has_post_thumbnail()) : ?>
											<div class="single-product-category">
							          <div class="product-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></div>
							          <?php endif; ?>
												<div class="product-info">
								          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								          <span class="product-type"><?php echo CFS()->get('type'); ?></span>
	                        <span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
												</div>
											</div>
				        <?php endforeach; wp_reset_postdata(); ?>
							</div>

	          <h1 class="merch-category">Womens</h1>
	            <?php
				        $womens= array(
	                'post_type'=> 'product',
	                'posts_per_page' => 4,
	                'tax_query'=> array (
	                  array (
	                    'taxonomy'=> 'product-type',
	                    'field'=> 'slug',
	                    'terms'=> 'womens',
	                ),
	              ),
	            );
	            $womensection = get_posts($womens);

				      ?>
							<div class="products-list">
				        <?php foreach($womensection as $post) : setup_postdata($post); ?>
				          <?php if (has_post_thumbnail()) : ?>
											<div class="single-product-category">
							          <div class="product-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></div>
							          <?php endif; ?>
												<div class="product-info">
								          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								          <span class="product-type"><?php echo CFS()->get('type'); ?></span>
	                        <span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
												</div>
											</div>
				        <?php endforeach; wp_reset_postdata(); ?>
							</div>

	          <h1 class="merch-category">Mens</h1>
	            <?php
				        $men= array(
	                'post_type'=> 'product',
	                'posts_per_page' => 4,
	                'tax_query'=> array (
	                  array (
	                    'taxonomy'=> 'product-type',
	                    'field'=> 'slug',
	                    'terms'=> 'mens',
	                ),
	              ),
	            );
	            $mensection = get_posts($men);

				      ?>
							<div class="products-list">
				        <?php foreach($mensection as $post) : setup_postdata($post); ?>
				          <?php if (has_post_thumbnail()) : ?>
											<div class="single-product-category">
							          <div class="product-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a></div>
							          <?php endif; ?>
												<div class="product-info">
								          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								          <span class="product-type"><?php echo CFS()->get('type'); ?></span>
	                        <span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
												</div>
											</div>
				        <?php endforeach; wp_reset_postdata(); ?>
							</div>
					</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
