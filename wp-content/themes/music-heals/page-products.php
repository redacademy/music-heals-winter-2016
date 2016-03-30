<div class="container">
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="merch-header"><h1 class="merch-title">Merch</h1></div>
			<div class="merch-banner"></div>
			<div class="merch-tagline"><p>Merch the whole family will love. All Merch profits go directly to the Music Heals Foundation. Feel good with every purchase.</p></div>
			<nav class="navbar">
				<ul>
					<li>All</li>
					<li>Kids</li>
					<li>Mens</li>
					<li>Womens</li>
				</ul>
			</nav>

			<div class="product-wrapper">

      <h1 class="merch-category">Kids</h1>

			      <?php
			        $args= array(
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
            $query = get_posts($args);

			      ?>
						<div class="products-list">
			        <?php foreach($query as $post) : setup_postdata($post); ?>
			          <?php if (has_post_thumbnail()) : ?>
										<div class="single-product-category">
						          <div class="product-image"><?php the_post_thumbnail('large'); ?></div>
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
			        $args= array(
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
            $query = get_posts($args);

			      ?>
						<div class="products-list">
			        <?php foreach($query as $post) : setup_postdata($post); ?>
			          <?php if (has_post_thumbnail()) : ?>
										<div class="single-product-category">
						          <div class="product-image"><?php the_post_thumbnail('large'); ?></div>
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
			        $args= array(
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
            $query = get_posts($args);

			      ?>
						<div class="products-list">
			        <?php foreach($query as $post) : setup_postdata($post); ?>
			          <?php if (has_post_thumbnail()) : ?>
										<div class="single-product-category">
						          <div class="product-image"><?php the_post_thumbnail('large'); ?></div>
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

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
</div>
