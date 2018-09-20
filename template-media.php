<?php
/**
 * Template Name: Media Page
 *
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
					<?php $args = array('post_type' => 'news','posts_per_page' => -1);?>
            			<?php $loop = new WP_Query($args);?>
						<div class="news-wrap media" id="media-news">
							<ul>
								<?php if ( $loop->have_posts() ) {
									while ( $loop->have_posts() ) {
										$loop->the_post();    
								?>
								<li>
									<a href="<?php echo get_field('news_url')?>"><?php echo get_the_title();?></a>
									<?php 
										if(get_field('news_source'))
										{
											echo "<span class='news-source'> - ". get_field('news_source'). "</span>";
										}  
									?>
									<div class="news-meta">
										<p>
											<?php 
												echo "<div class='news-date'>". get_field('date') . "</div>";
											?>
										</p>
									</div>
								</li>
								<?
										}
									}
									wp_reset_postdata();
								?>
							</ul>	
						</div>	
					</main>
				</div>
				<div class="large-3 cell">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
</div>					
<?php
get_footer();
