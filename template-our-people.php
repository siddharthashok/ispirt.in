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
           $response = wp_remote_get("https://zastra.ispirt.in/api/wordpress");
           $response_array = json_decode($response['body']);

           $anchor_volunteer_title = "Anchor Volunteer";
           $core_volunteer_title = "Core Volunteer";
           $balloon_volunteer_title = "Balloon Volunteer";
           $volunteer_title = "Volunteer";
           $alumni_volunteer_title = "Volunteer Alumni";

           $anchor_volunteer = array();
           $core_volunteer = array();
           $balloon_volunteer = array();
           $volunteer = array(); 
           $alumni_volunteer = array();

           foreach ($response_array as $key => $value) {
              switch($value->VolunteerType)
              {
                case $anchor_volunteer_title : 
                    array_push($anchor_volunteer, $value);
                  break;
                case $core_volunteer_title :
                  array_push($core_volunteer, $value);
                  break;
                case $balloon_volunteer_title : 
                  array_push($balloon_volunteer, $value);
                  break;
                case $volunteer_title : 
                  array_push($volunteer, $value);
                  break;
                case $alumni_volunteer_title :
                  array_push($alumni_volunteer,$value);
                
                default :
                break;
              }
           }
           
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
                  
                  if( !empty($core_volunteer) ):
                ?>
                    <div class="large-12 cell">
                      <h3><?= $core_volunteer_title; ?></h3>
                      <p><?php /*the_field('core_volunteer_description')*/?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                      foreach($core_volunteer as $key => $value)
                      {

                        $name = $value->Name;
                        $profile_link = $value->LinkedIn;
                        $code_of_ethics_level = $value->EthicsLevel;
                        $image = $value->ProfileImage;
                      ?>
                      <div class="medium-3 small-6 cell">
                        <?php if(!empty($profile_link)) {?><a href="<?php echo $profile_link; ?>" target="_blank"><?php }?>
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                          <?php 
                            if(!empty($code_of_ethics_level))
                            {
                          ?>
                              <div class="coe-level">
                                <?php echo $code_of_ethics_level; ?>
                              </div>
                          <?php
                            }
                          ?>
                        </div>
                        <?php if(!empty($profile_link)) {?></a><?php }?>
                      </div>
                  <?php
                      }

                  else :

                      // no rows found

                  endif;




                  if( !empty($volunteer) ):
                    ?>
                    <div class="large-12 cell padding-top">
                      <h3><?= $volunteer_title; ?></h3>
                      <p><?php /*the_field('volunteers_description');*/?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                     foreach($volunteer as $key => $value)
                     {
                        $name = $value->Name;
                        $profile_link = $value->LinkedIn;
                        $code_of_ethics_level = $value->EthicsLevel;
                        $image = $value->ProfileImage;
                      ?>
                      <div class="medium-3 small-6 cell">
                        <?php if(!empty($profile_link)) {?><a href="<?php echo $profile_link; ?>" target="_blank"><?php }?>
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                          <?php 
                            if(!empty($code_of_ethics_level))
                            {
                          ?>
                              <div class="coe-level">
                                <?php echo $code_of_ethics_level; ?>
                              </div>
                          <?php
                            }
                          ?>
                        </div>
                        <?php if(!empty($profile_link)) {?></a><?php }?>
                      </div>
                  <?php
                      }

                  else :

                      // no rows found

                  endif;




                  if( !empty($anchor_volunteer) ):
                    ?>
                    <div class="large-12 cell padding-top">
                      <h3><?= $anchor_volunteer_title; ?></h3>
                      <p><?php /*the_field('alumni_description');*/?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                     foreach($anchor_volunteer as $key => $value)
                     {
                        $name = $value->Name;
                        $profile_link = $value->LinkedIn;
                        $code_of_ethics_level = $value->EthicsLevel;
                        $image = $value->ProfileImage;
                      ?>
                      <div class="medium-3 small-6 cell">
                        <?php if(!empty($profile_link)) {?><a href="<?php echo $profile_link; ?>" target="_blank"><?php }?>
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                          <?php 
                            if(!empty($code_of_ethics_level))
                            {
                          ?>
                              <div class="coe-level">
                                <?php echo $code_of_ethics_level; ?>
                              </div>
                          <?php
                            }
                          ?>
                        </div>
                        <?php if(!empty($profile_link)) {?></a><?php }?>
                      </div>
                  <?php
                      };

                  else :

                      // no rows found

                  endif;
                  if( !empty($alumni_volunteer) ):
                  ?>
                  <div class="large-12 cell padding-top">
                      <h3><?= $alumni_volunteer_title; ?></h3>
                      <p><?php /*the_field('alumni_description');*/?></p>
                    </div>
                    <?php
                   	// loop through the rows of data
                     foreach($alumni_volunteer as $key => $value)
                     {
                        $name = $value->Name;
                        $profile_link = $value->LinkedIn;
                        $code_of_ethics_level = $value->EthicsLevel;
                        $image = $value->ProfileImage;
                      ?>
                      <div class="medium-3 small-6 cell">
                        <?php if(!empty($profile_link)) {?><a href="<?php echo $profile_link; ?>" target="_blank"><?php }?>
                        <div class="profile-wrap" style="background-image: url('<?php echo $image; ?>')">
                          <div class="name">
                            <?php echo $name; ?>
                          </div>
                          <?php 
                            if(!empty($code_of_ethics_level))
                            {
                          ?>
                              <div class="coe-level">
                                <?php echo $code_of_ethics_level; ?>
                              </div>
                          <?php
                            }
                          ?>
                        </div>
                        <?php if(!empty($profile_link)) {?></a><?php }?>
                      </div>
                  <?php
                      };

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
