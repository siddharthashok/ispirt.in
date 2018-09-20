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
            <!-- Code Of Ethics -->
            <section id="code-of-ethics-level">
              
                <div class="grid-x">
                  <div class="cell large-12">
                    <div class="coel-wrap">
                      <div class="coel">
                        <div class="ribbon">
                          1
                        </div>
                        <div class="coe-text">
                          <p>
                          <strong>Level 1.</strong>  As an iSPIRT Volunteer, I am committed to making India a Product Nation. At no point in time, will I use my volunteer status with iSPIRT to put my personal or business interest, ahead of iSPIRT interests.  Hope to set a high ethical standard and be an example to others. 
                          </p> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Level 1 End -->
                  <div class="cell large-12">
                    <div class="coel-wrap">
                      <div class="coel">
                        <div class="ribbon">
                          2
                        </div>
                        <div class="coe-text">
                          <p>
                          <strong>Level 2.</strong>  To maintain the integrity of the iSPIRT curation process, I shall disclose to others any interest in participating companies. 
                          </p> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- level 2 end -->

                  <div class="cell large-12">
                    <div class="coel-wrap">
                      <div class="coel">
                        <div class="ribbon">
                          3
                        </div>
                        <div class="coe-text">
                          <p>
                          <strong>Level 3.</strong>  At no point in time, I expect any payback in any form, including advisory or sweat equity, from any startups benefiting from my pay-forward contributions through iSPIRT.
                          </p> 
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Level 3 end -->
                  <div class="cell large-12">
                    <div class="coel-wrap">
                      <div class="coel">
                        <div class="ribbon">
                          4
                        </div>
                        <div class="coe-text">
                          <p>
                          <strong>Level 4.</strong>  India's interest comes before my private interests. I will not become an angel investor in any startups that might benefit from my specific policy advocacy efforts.
                          </p> 
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
             
            </section>
          <!--  Code Of Ethics End-->
          
           <!--Search section-->
          <section id="search-section">
              <div class="grid-x">
                <div class="cell large-12">
                  <h3>Search</h3>
                  <input type="text" name="search-box" id="people-search" placeholder="Type search keyword">
                </div>
              </div>
          </section>
          <!-- End of Search section-->

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
                      <div class="medium-3 small-6 cell">
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
                      <div class="medium-3 small-6 cell">
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
                      <div class="medium-3 small-6 cell">
                        <a href="<?php echo $profile_link; ?>" target="_blank">
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                          <?php if($code_of_ethics_level){?>
                            <div class="coe-level">
                              <?php echo $code_of_ethics_level; ?>
                            </div>
                          <?php }?>
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
