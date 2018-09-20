<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				<div class="large-9 cell">
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

				<div class="large-3 cell">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
get_footer();
