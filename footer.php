<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iSPIRT
 */

?>


	<footer class="site-footer">
		<div class="grid-x">
			<div class="medium-5 cell">
				<div class="newsletter">
					<div class="wrap">
						<h3>Subscribe to<br>our newsletter</h3>
						<form class="" action="index.html" method="post">
							<input type="text" name="" value="" placeholder="Email">
							<button type="submit" name="button" class="button">Subscribe</button>
							<div class="clearfix"></div>
						</form>
						<p>Get notified of new updates and events from us.<br>
						We respect <a href="<?php echo get_site_url()?>/privacy-policy">your privacy</a>.</p>
					</div>
				</div>
			</div>
			<div class="medium-7 cell">
				<div class="grid-x">
				<div class="medium-6 cell add add1">
					<div class="wrap">
						<h3>Address</h3>
						<p>iSPIRT Foundation,<br>
	No.231-236, 2nd Floor, Raheja Arcade,<br>
	Koramangala, Bangalore - 560 095</p>
					</div>
				</div>

				<div class="medium-6 cell add add2">
					<div class="wrap">
						<h3>iSPIRT</h3>
						<p>&copy; iSPIRT 2018 ESTABLISHED 2013<br>
						iSpirt: Indian Software Product Industry Round Table<br>
						Designed and developed by
						<a href="https://grandworks.co/" target="_blank">
							<span class="grandworks"><?php echo file_get_contents(get_template_directory_uri()."/img/grandworks.svg"); ?></span>
						</a>
						</p>
					</div>
				</div>

				<div class="medium-6 cell foot foot1">
					<div class="wrap">
						<h3>Follow</h3>
						<div class="social">
							<ul>
								<li> <a href="https://www.facebook.com/ProductNation.in/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt=""> </a> </li>
								<li> <a href="http://twitter.com/@product_nation" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt=""> </a> </li>
								<li> <a href="http://www.linkedin.com/company/3117368?trk=tyah&trkInfo=tas%3Aispirt%2Cidx%3A2-1-2" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt=""> </a> </li>
							</ul>
						</div>
						<div class="cleartrip"></div>
					</div>
				</div>
				<div class="medium-6 cell foot foot2">
					<div class="wrap">
						<a href="<?php echo get_site_url();?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/isprit_logo_white.svg" alt=""> </a>
					</div>
				</div>
			</div>
			</div>

	</footer>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/what-input.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vue.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

</body>
</html>
