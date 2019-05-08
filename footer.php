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



						<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://ispirt.us7.list-manage.com/subscribe/post?u=d17f09799d54144294dd41b0a&amp;id=3e7c80137d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">


<!-- <div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div> -->
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>

	<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d17f09799d54144294dd41b0a_3e7c80137d" tabindex="-1" value=""></div>
    <div class="clear">
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			<div class="clearfix"></div>
		</div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->



						<!-- <form class="" action="index.html" method="post">
							<input type="text" name="" value="" placeholder="Email">
							<button type="submit" name="button" class="button">Subscribe</button>
							<div class="clearfix"></div>
						</form> -->
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
								<li> <a href="https://www.facebook.com/ProductNationIN/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt=""> </a> </li>
								<li> <a href="https://twitter.com/Product_Nation" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt=""> </a> </li>
								<li> <a href="https://www.linkedin.com/company/ispirt-foundation/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt=""> </a> </li>
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
