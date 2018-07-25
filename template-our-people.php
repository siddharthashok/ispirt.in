<?php
/**
 * Template Name: Our People
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





              <div class="grid-x grid-padding-x" id="profile-grid">


              <?php

                  if( have_rows('core_volunteers') ):
                    ?>
                    <div class="large-12 cell">
                      <h3>CORE VOLUNTEERS</h3>
                      <p><?php the_field('core_volunteer_description')?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                      while ( have_rows('core_volunteers') ) : the_row();

                        $name = get_sub_field('name');
                        $profile_link = get_sub_field('profile_link');
                        $code_of_ethics_level = get_sub_field('code_of_ethics_level');
                        $image = get_sub_field('image');
                      ?>
                      <div class="medium-4 small-6 cell">
                        <a href="<?php echo $profile_link; ?>" target="_blank">
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                          <div class="coe-level">
                            <?php echo $code_of_ethics_level; ?>
                          </div>
                        </div>
                        </a>
                      </div>
                  <?php
                      endwhile;

                  else :

                      // no rows found

                  endif;




                  if( have_rows('volunteers') ):
                    ?>
                    <div class="large-12 cell padding-top">
                      <h3>VOLUNTEERS</h3>
                      <p><?php the_field('volunteers_description')?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                      while ( have_rows('volunteers') ) : the_row();

                        $name = get_sub_field('name');
                        $profile_link = get_sub_field('profile_link');
                        $code_of_ethics_level = get_sub_field('code_of_ethics_level');
                        $image = get_sub_field('image');
                      ?>
                      <div class="medium-4 small-6 cell">
                        <a href="<?php echo $profile_link; ?>" target="_blank">
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                          <div class="coe-level">
                            <?php echo $code_of_ethics_level; ?>
                          </div>
                        </div>
                        </a>
                      </div>
                  <?php
                      endwhile;

                  else :

                      // no rows found

                  endif;




                  if( have_rows('alumni') ):
                    ?>
                    <div class="large-12 cell padding-top">
                      <h3>Alumni</h3>
                      <p><?php the_field('alumni_description')?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                      while ( have_rows('alumni') ) : the_row();

                        $name = get_sub_field('name');
                        $profile_link = get_sub_field('profile_link');
                        $code_of_ethics_level = get_sub_field('code_of_ethics_level');
                        $image = get_sub_field('image');
                      ?>
                      <div class="medium-4 small-6 cell">
                        <a href="<?php echo $profile_link; ?>" target="_blank">
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                          <div class="coe-level">
                            <?php echo $code_of_ethics_level; ?>
                          </div>
                        </div>
                        </a>
                      </div>
                  <?php
                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>


                </div> <!--Grid-x-->








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
