<?php
/**
 * Template Name: Volunteer page
 *
 * This is the template that displays Home page
 *
 * @package iSPIRT
 */

 get_header();

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	$featured_image_url = get_the_post_thumbnail_url();
} else {
	$featured_image_url = get_template_directory_uri().'/img/page-header.jpg';
}
?>

<style media="screen">
	.side-image {height: 400px;
    object-fit: cover;
    width: 100%;
    margin-bottom: 100px;}

  .full-video {margin-bottom: 100px;}
  .side-nav {margin-bottom: 45px;}
  .side-nav-challange {height: calc(100% - 45px);}
</style>
<header id="page-header">
	<div class="bg-wrap" style="background-image: url('<?php echo $featured_image_url; ?>');">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<div class="breadcrumbs">
						<?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

	<div id="primary" class="content-area">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-8 cell">
					<main id="main" class="site-main">
					<?php
					while ( have_posts() ) :
						the_post();
						?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php
								the_content();
								?>
							</div><!-- .entry-content -->

							<?php if ( get_edit_post_link() ) : ?>
								<footer class="entry-footer">
									<?php
									edit_post_link(
										sprintf(
											wp_kses(
												/* translators: %s: Name of current post. Only visible to screen readers */
												__( 'Edit <span class="screen-reader-text">%s</span>', 'ispirt' ),
												array(
													'span' => array(
														'class' => array(),
													),
												)
											),
											get_the_title()
										),
										'<span class="edit-link">',
										'</span>'
									);
									?>
								</footer><!-- .entry-footer -->
							<?php endif; ?>
						</article><!-- #post-<?php the_ID(); ?> -->

					<?php
					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div>

				<div class="large-4 cell">
					<img class="side-image" src="<?php echo get_template_directory_uri(); ?>/img/volunteer.jpeg" alt="">
        </div>
      </div>
				</div>

				<div class="full-video">
					<iframe width="100%" height="600" src="https://www.youtube.com/embed/Qgb9yx5-2Ss" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>

        <div class="grid-container">
          <div class="grid-x grid-padding-x">
				<div class="large-6 cell">
          <div class="side-nav side-nav-challange">

					<h3 style="margin-bottom: 25px;">Below are the problem statements under challenges</h3>
<ol>
	<li>Underwriting Models for Cash Flow Lending</li>
	<li>Open Credit Enablement Network (Performance)</li>
	<li>Real-Time Pledge Registry</li>
	<li>Capital Allocation for Cash Flow Loans</li>
	<li>Multi-Party Dispute Resolution</li>
	<li>Economic Framework for Digital Public Infrastructure</li>
	<li>Paperless & Presenceless Digital Public Infrastructure for Entities</li>
</ol>

<br>
<p>If you are interested in any of the above areas, we request you to <a href="https://bit.ly/iSPIRTForm" target="_blank">fill out the form</a>.</p>
</div>
				</div>

        <div class="large-6 cell">
          <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
              <div class="side-nav">
                <h3>VOLUNTEER HANDBOOK</h3>
                <p>The volunteer model that underpins iSPIRT has been around since 2009. Every three years we write about our volunteer model so that others can learn from it and build their own volunteer networks</p>
                <a href="https://pn.ispirt.in/presenting-the-ispirt-volunteer-handbook" target="_blank">Know More</a>
              </div>
            </div>

            <div class="large-12 cell">
              <div class="side-nav">
                <h3>ISPIRT PLAYGROUND CODA</h3>
                <p>We call ourselves 30-year architects for India’s hard problems. The critical insight to a 30-year journey of success is that it requires one to be able to work with and grow the ecosystem, rather than grow itself.</p>
                <a href="https://pn.ispirt.in/presenting-the-ispirt-volunteer-handbook" target="_blank">Know More</a>

              </div>
            </div>

          </div>
        </div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
