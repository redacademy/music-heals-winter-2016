<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="signup">
						<span>Sign up for Music Heals Newsletter</span>
						<form class="signup-form">
							<input type="email" id="your-email" value placeholder="Your Email">
							<input type="submit" name="subscribe" class="signup-form-btn" value="Sign Up">
						</form>
					</div>
					<div class="contact">
						<p>Contact Us</p>
						<span>2245 West Broadway</span>
						<span>Vancouver, BC</span>
						<span>V6K 2E4</span>
					</div>
					<div class="charity-info">
						<p>Registered Charity</p>
						<span>#846495489 RR 0001</span>
					</div>
					<ul class="social-icons">
						<li><img src="<?php echo get_template_directory_uri() . '/assets\/social-icons\/Icon_facebook' ?>.svg" alt="" /></li>
						<li><img src="<?php echo get_template_directory_uri() . '/assets\/social-icons\/Icon_Twitter' ?>.svg" alt="" /></li>
						<li><img src="<?php echo get_template_directory_uri() . '/assets\/social-icons\/Icon_Instagram' ?>.svg" alt="" /></li>
						<li><img src="<?php echo get_template_directory_uri() . '/assets\/social-icons\/Icon_Vimeo' ?>.svg" alt="" /></li>
					</ul>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
