<?php
/**
 * Template Name: Our Donors
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
           <!-- Search Box -->
           <section id="our-donors-search">
            <div class="grid-x">
                  <div class="cell large-12">
                    <h3>Search</h3>
                    <input type="text" name="search-box" id="donors-search" placeholder="Type search keyword">
                  </div>
              </div>
            </section>
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

                  if( have_rows('founders_circle') ):
                    ?>
                    <div class="large-12 cell">
                      <h3>FOUNDERS CIRCLE</h3>
                      <p><?php the_field('founders_circle_description')?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                      while ( have_rows('founders_circle') ) : the_row();

                        $name = get_sub_field('name');
                        $profile_link = get_sub_field('profile_link');
                        $image = get_sub_field('image');
                      ?>
                      <div class="medium-4 small-6 cell">
                        <a href="<?php echo $profile_link; ?>" target="_blank">
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>

                        </div>
                        </a>
                      </div>
                  <?php
                      endwhile;

                  else :

                      // no rows found

                  endif;




                  if( have_rows('product_circle') ):
                    ?>
                    <div class="large-12 cell padding-top">
                      <h3>PRODUCT CIRCLE DONORS</h3>
                      <p><?php the_field('product_circle_description')?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                      while ( have_rows('product_circle') ) : the_row();

                        $name = get_sub_field('name');
                        $profile_link = get_sub_field('profile_link');
                        $image = get_sub_field('image');
                      ?>
                      <div class="medium-4 small-6 cell">
                        <a href="<?php echo $profile_link; ?>" target="_blank">
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                        </div>
                        </a>
                      </div>
                  <?php
                      endwhile;

                  else :

                      // no rows found

                  endif;




                  if( have_rows('fellowship_donors') ):
                    ?>
                    <div class="large-12 cell padding-top">
                      <h3>Fellowship Donors</h3>
                      <p><?php the_field('fellowship_donors_description')?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                      while ( have_rows('fellowship_donors') ) : the_row();

                        $name = get_sub_field('name');
                        $profile_link = get_sub_field('profile_link');
                        $image = get_sub_field('image');
                      ?>
                      <div class="medium-4 small-6 cell">
                        <a href="<?php echo $profile_link; ?>" target="_blank">
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>

                        </div>
                        </a>
                      </div>
                  <?php
                      endwhile;

                  else :

                      // no rows found

                  endif;

                  if( have_rows('financial_inclusion') ):
                    ?>
                    <div class="large-12 cell padding-top">
                      <h3>Financial Inclusion Donors</h3>
                      <p><?php the_field('financial_inclusion_description')?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                      while ( have_rows('financial_inclusion') ) : the_row();

                        $profile_link = get_sub_field('profile_link');
                        $image = get_sub_field('image');
                      ?>
                      <div class="medium-4 small-6 cell">
                        <a href="<?php echo $profile_link; ?>" target="_blank">
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
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
