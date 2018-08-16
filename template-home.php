<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays Home page
 *
 * @package iSPIRT
 */

 //   $url = 'http://pn.ispirt.in/wp-json/wp/v2/posts?per_page=3';
 //   $response = wp_remote_get( 'http://pn.ispirt.in/wp-json/wp/v2/posts?per_page=3&_embed' );
 //
 //   $posts = json_decode( wp_remote_retrieve_body( $response ) );
 //
 //   if( !empty( $posts ) ) {
 //   echo '<ul>';
 //   foreach( $posts as $post ) {
 //     echo '<li><a href="' . $post->link. '">' . $post->title->rendered . '</a></li>';
 //     echo '<li><a href="' . $post->link. '">' . $post->excerpt->rendered . '</a></li>';
 //     echo '<li><a href="' . $post->link. '">' . $post->excerpt->rendered . '</a></li>';
 //   }
 //   echo '</ul>';
 // }

   // var_dump($posts);


// die();
get_header();
?>

<header id="top-header">
      <div class="grid-x" data-equalizer data-equalize-on="medium">
      <div class="left-content medium-8 cell small-order-2 large-order-1" data-equalizer-watch>
        <div class="intro-text">
          <div class="wrap">
            <h2><?php the_field('intro'); ?></h2>
          </div>
        </div>
        <div class="key-focus">
          <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
              <div class="illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/s1.svg" alt="">
              </div>
              <div class="details">
                <p><?php the_field('special_block_one'); ?></p>
                <a href="<?php the_field('special_block_one_link'); ?>">Know more</a>
              </div>
            </div>

            <div class="large-6 cell">
              <div class="illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/s2.svg" alt="">
              </div>
              <div class="details">
                <p><?php the_field('special_block_two'); ?></p>
                <a href="<?php the_field('special_block_two_link'); ?>">Know more</a>
              </div>
            </div>

          </div>
        </div>
        <div class="header-feature">
          <div class="grid-x">
          <div class="large-3 cell">
            <a href="<?php the_field('special_block_two_link'); ?>">
              <div class="video-feature" style="background-image: url('https://img.youtube.com/vi/YRMUwALjqf8/hqdefault.jpg');">
              </div>
            </a>
          </div>
          <div class="large-9 cell">
            <div class="content-feature" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/letter.jpg');">
              <h3><?php the_field('featured_message_title'); ?></h3>
              <p><?php the_field('featured_message_content'); ?></p>
              <a href="<?php the_field('featured_message_link'); ?>">Read more</a>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="right-image medium-4 cell small-order-1 large-order-2" data-equalizer-watch>

      </div>
    </div>
    </header>

    <section id="pillers">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-12 cell">
            <h2>Our Four Pillars</h2>
          </div>
          <div class="large-3 cell">
            <div class="wrap">
              <div class="number">1.</div>
              <h3>Policy</h3>
              <p>Policy Hacks aimed demystifying policy for better understanding and use of policy by Software product industry, especially the young entrepreneurs or startups.</p>
              <a href="#">Read more</a>
            </div>
          </div>
          <div class="large-3 cell">
            <div class="wrap">
              <div class="number">2.</div>
              <h3>Playbook</h3>
              <p>Policy Hacks aimed demystifying policy for better understanding and use of policy by Software product industry, especially the young entrepreneurs or startups.</p>
              <a href="#">Read more</a>
            </div>
          </div>
          <div class="large-3 cell">
            <div class="wrap">
              <div class="number">3.</div>
              <h3>Market Catalysts</h3>
              <p>Policy Hacks aimed demystifying policy for better understanding and use of policy by Software product industry, especially the young entrepreneurs or startups.</p>
              <a href="#">Read more</a>
            </div>
          </div>
          <div class="large-3 cell">
            <div class="wrap">
              <div class="number">4.</div>
              <h3>Platform</h3>
              <p>Global Lean Sales, and by
              Selling your software we
              online to global markets, without field-force SaaS has changed the #PlaybookRT.
              Right sounds good?</p>
              <a href="#">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="blog">
      <div class="grid-container">
        <div class="grid-x grid-padding-x" id="feed-wrap">


          <div class="large-12 cell">
            <h2>From the <span>Product Nation</span> blog</h2>
            <a href="http://pn.ispirt.in/" target="_blank" class="button">Go to the blog</a>
            <div class="clearfix"></div>
          </div>

          <div class="medium-4 cell" v-for="post in posts" v-cloak>
            <div class="wrap">
              <a :href="post.link" target="_blank"><div class="image-wrap" :style="post.imgSrc"></div></a>
              <div class="content-wrap">
              <div class="title">
                <a :href="post.link" target="_blank"><h4 v-html="post.title"></h4></a>
              </div>

              <div class="meta">

                <span>{{post.date}}</span>

              </div>

              <div class="excerpt" v-html="post.excerpt"></div>

              <a :href="post.link" target="_blank">Read more</a>

            </div>

          </div>


        </div>
      </div>
    </section>

    <section id="videos">
      <div class="grid-container">
        <div class="grid-x grid-padding-x" id="youtube-wrap">
          <div class="large-12 cell">
            <h2>Latest Videos</h2>
            <a href="https://www.youtube.com/channel/UCsOXbdxeADMkQ22eWOIcylg" target="_blank" class="button">Follow us on Youtube</a>
            <div class="clearfix"></div>
          </div>

          <div class="medium-3 cell" v-for="yPost in yPosts">
           <a :href="yPost.youtubeVideoLink" target="_blank">
             <div class="image-wrap" :style="yPost.youtubeImgSrc">
               <div class="text-wrap">
                 <h4>{{yPost.youtubeTitle}}</h4>
               </div>
             </div>
           </a>
         </div>
      </div>
      </div>
    </div>
  </section>

<section id="news-key-initiatives">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-6 cell">
        <h2>In The News</h2>

        <div class="news-wrap">
          <ul>
            <li>
              <a href="#">Banking in the time of non-linear change</a>
              <div class="meta"><p>MARCH 23, 2018</p></div>
            </li>
            <li>
              <a href="#">Banking in the time of non-linear change</a>
              <div class="meta"><p>MARCH 23, 2018</p></div>
            </li>
            <li>
              <a href="#">Banking in the time of non-linear change</a>
              <div class="meta"><p>MARCH 23, 2018</p></div>
            </li>
            <li>
              <a href="#">Banking in the time of non-linear change</a>
              <div class="meta"><p>MARCH 23, 2018</p></div>
            </li>
          </ul>

          <a href="#" class="button">Show more</a>
        </div>

      </div>

      <div class="large-6 cell">
        <h2>Key Initiatives</h2>
        <div class="initiatives">
          <div class="initiative" data-equalizer data-equalize-on="medium">
            <div class="logo-wrap" data-equalizer-watch>
              <img src="<?php echo get_template_directory_uri(); ?>/img/indiastack.svg" alt="">
            </div>
            <div class="details-wrap" data-equalizer-watch>
              <div class="wrap">
                <p>Technology for 1.2 Billion Indians</p>
                <a href="#" class="button">Vsit Website</a>
              </div>
            </div>
          </div>

          <div class="initiative" data-equalizer data-equalize-on="medium">
            <div class="logo-wrap" data-equalizer-watch>
              <img src="<?php echo get_template_directory_uri(); ?>/img/intech50.svg" alt="">
            </div>
            <div class="details-wrap" data-equalizer-watch>
              <div class="wrap">
                <p>Showcasing the most promising software products created by entrepreneurs from India</p>
                <a href="#" class="button">Vsit Website</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="volunteer">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-6 cell">
        <div class="wrap">
          <h2>Volunteer With iSPIRT</h2>
        </div>
      </div>

      <div class="large-6 cell">
        <div class="details-wrap">
          <p>We need great talent, help us improve India. <br>Together we can achieve great things!</p>
          <a href="#" class="button">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
