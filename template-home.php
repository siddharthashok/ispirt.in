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
      <div class="grid-x" data-equalize-on="medium">
      <div class="left-content medium-8 cell" data-equalizer-watch>
        <div class="intro-text">
          <div class="wrap">
            <h2>Promoting Policies,<br>
              Growth Hacking & Mentoring<br>
              Product Entrepreneurs</h2>
          </div>
        </div>
        <div class="key-focus">
          <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
              <div class="illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/s1.svg" alt="">
              </div>
              <div class="details">
                <p>At iSprit we focus on building
                great releationships with innovative businesses. We mentor for growth.</p>
                <a href="#">Learn how we help businesses</a>
              </div>
            </div>

            <div class="large-6 cell">
              <div class="illustration">
                <img src="<?php echo get_template_directory_uri(); ?>/img/s2.svg" alt="">
              </div>
              <div class="details">
                <p>At iSprit we focus on building
                great releationships with innovative businesses. We mentor for growth.</p>
                <a href="#">Learn how we help businesses</a>
              </div>
            </div>

          </div>
        </div>
        <div class="header-feature">
          <div class="grid-x">
          <div class="large-3 cell">
            <a href="#">
              <div class="video-feature" style="background-image: url('https://img.youtube.com/vi/YRMUwALjqf8/hqdefault.jpg');">
              </div>
            </a>
          </div>
          <div class="large-9 cell">
            <div class="content-feature" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/letter.jpg');">
              <h3>Annual Letter 2017</h3>
              <p>Four years on, there has been good progress but there is much more to do. We believe that Silicon Valley does an admirable job of innovating for the first billion. India has the potential to innovate for the next six billion.</p>
              <a href="#">Read more</a>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="right-image medium-4 cell" data-equalizer-watch>

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
        <div class="grid-x grid-padding-x">


          <div class="large-12 cell">
            <h2>From the <span>Product Nation</span> blog</h2>
            <a href="http://pn.ispirt.in/" target="_blank" class="button">Go to the blog</a>
            <div class="clearfix"></div>
          </div>
          <div class="medium-4 cell">
            <div class="wrap">
            <div class="image-wrap" style="height:200px; background-image:url('<?php echo get_template_directory_uri(); ?>/img/t1.jpg'); background-size:cover;">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/t1.jpg" alt=""> -->
            </div>
            <div class="content-wrap" style="height:100%;">
              <div class="title">
                <h4>Understanding iSPIRT’s Entrepreneur Connect</h4>
              </div>
              <div class="meta">
                <span>May 04, 2018</span>
              </div>
              <p>There is confusion about how iSPIRT engages with entrepreneurs. This post explains to our engagement model so that the expectations are clear. iSPIRT’s mission is to make India into a Product Nation. iSPIRT believes that startups are a critical catalyst in this mission. In-line with the mission, we help entrepreneurs navigate market and mindset shifts …</p>
              <a href="http://pn.ispirt.in/understanding-ispirts-entrepreneur-connect/" target="_blank">Read more</a>
            </div>
          </div>

          </div>

          <div class="medium-4 cell">
            <div class="wrap">
            <div class="image-wrap" style="height:200px; background-image:url('<?php echo get_template_directory_uri(); ?>/img/t2.jpg'); background-size:cover;">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/t2.jpg" alt=""> -->
            </div>
            <div class="content-wrap" style="height:100%;">
              <div class="title">
                <h4>Data Privacy and Empowerment in Healthcare</h4>
              </div>
              <div class="meta">
                <span>June 12, 2018</span>
              </div>
              <p>Technology has been a boon to healthcare. Minimally-invasive procedures have significantly increased safety and recovery time of surgeries. Global collaboration between doctors has improved diagnosis and treatment. Rise in awareness of patients has increased the demand for good quality healthcare services. These improvements, coupled with the growing penetration of IT infrastructure, are generating huge volumes of …</p>
              <a href="http://pn.ispirt.in/depainhealthcare/" target="_blank">Read more</a>
            </div>
          </div>

          </div>

          <div class="medium-4 cell">
            <div class="wrap">
            <div class="image-wrap" style="height:200px; background-image:url('<?php echo get_template_directory_uri(); ?>/img/t3.jpeg'); background-size:cover;">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/t3.jpeg" alt=""> -->
            </div>
            <div class="content-wrap" style="height:100%;">
              <div class="title">
                <h4>Building for Bharat – A Bharat Inclusion Initiative</h4>
              </div>
              <div class="meta">
                <span>June 9, 2018</span>
              </div>
              <p>Bharat Inclusion Initiative seeks to equip entrepreneurs with the right knowledge, skills and tools they need to solve some of the toughest problems of India in a scalable manner using technology. While Bharat Inclusion Research Fellows are working on some of the most interesting studies, another important source of knowledge is thought leaders and domain experts …</p>
              <a href="http://pn.ispirt.in/building-for-bharat/" target="_blank">Read more</a>
            </div>
          </div>

          </div>

        </div>
      </div>
    </section>

    <section id="videos">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="large-12 cell">
            <h2>Latest Videos</h2>
            <a href="http://pn.ispirt.in/" target="_blank" class="button">Follow us on Youtube</a>
            <div class="clearfix"></div>
          </div>
          <div class="medium-3 cell">
            <a href="#">
            <div class="image-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/i1.jpg');">
              <div class="text-wrap">
                <h4>Cupcake ipsum dolor sit amet chocolate bar.</h4>
              </div>
            </div>
            </a>
          </div>
          <div class="medium-3 cell">
            <a href="#">
            <div class="image-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/i1.jpg');">
              <div class="text-wrap">
                <h4>Cupcake ipsum dolor sit amet chocolate bar.</h4>
              </div>
            </div>
            </a>
          </div>
          <div class="medium-3 cell">
            <a href="#">
            <div class="image-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/i1.jpg');">
              <div class="text-wrap">
                <h4>Cupcake ipsum dolor sit amet chocolate bar.</h4>
              </div>
            </div>
            </a>
          </div>
          <div class="medium-3 cell">
            <a href="#">
            <div class="image-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/i1.jpg');">
              <div class="text-wrap">
                <h4>Cupcake ipsum dolor sit amet chocolate bar.</h4>
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
