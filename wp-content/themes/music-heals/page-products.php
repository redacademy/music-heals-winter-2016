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

			<div class="merch-header"><h1>Merch</h1></div>

      <h1>Kids</h1>

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
										<div class="single-latest-posts">
						          <div class="post-image"><?php the_post_thumbnail('large'); ?></div>
						          <?php endif; ?>
											<div class="post-info">
							          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							          <span class="product-type"><?php echo CFS()->get('product_type'); ?></span>
                        <span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
											</div>
										</div>
			        <?php endforeach; wp_reset_postdata(); ?>
						</div>

          <h1>Womens</h1>
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
										<div class="single-latest-posts">
						          <div class="post-image"><?php the_post_thumbnail('large'); ?></div>
						          <?php endif; ?>
											<div class="post-info">
							          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							          <span class="product-type"><?php echo CFS()->get('product_type'); ?></span>
                        <span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
											</div>
										</div>
			        <?php endforeach; wp_reset_postdata(); ?>
						</div>

          <h1>Mens</h1>
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
										<div class="single-latest-posts">
						          <div class="post-image"><?php the_post_thumbnail('large'); ?></div>
						          <?php endif; ?>
											<div class="post-info">
							          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							          <span class="product-type"><?php echo CFS()->get('product_type'); ?></span>
                        <span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
											</div>
										</div>
			        <?php endforeach; wp_reset_postdata(); ?>
						</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
</div>
