<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->
			<div class="footer-wrapper">
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
							<li>
								<a href="https://www.facebook.com/MusicHealsCanada/">
									<img src="<?php echo get_template_directory_uri();?>/assets/social-icons/FB_Icon.png" alt="Facebook Icon" />
								</a>
							</li>
							<li>
								<a href="https://twitter.com/musicheals_ca">
									<img src="<?php echo get_template_directory_uri();?>/assets/social-icons/Icon_Twitter.svg" alt="Twitter Icon" />
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/musicheals_ca/">
									<img src="<?php echo get_template_directory_uri();?>/assets/social-icons/Icon_Instagram.svg" alt="Instagram Icon" />
								</a>
							</li>
							<li>
								<a href="https://vimeo.com/musicheals">
									<img src="<?php echo get_template_directory_uri();?>/assets/social-icons/Icon_Vimeo.svg" alt="Vimeo Icon" />
								</a>
							</li>
						</ul>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
		</div><!-- #page -->

		<?php wp_footer(); ?>

		<?php wp_enqueue_script('jquery'); ?>

		<script type="text/javascript">
		jQuery(document).ready(function($){
		  $('.bxslider').bxSlider({
		    mode: 'horizontal',
		    infiniteLoop: true,
		    speed: 2000,
		    pause: 8000,
		    auto: true,
		    pager: false,
		    controls: true
		  });

			$('.menu-button').click(function() {
				$('.main-navigation').toggle("slide");
			});
		});
		</script>

	</body>
</html>
