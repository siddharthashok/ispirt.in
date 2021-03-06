<?php
/**
 * iSPIRT functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package iSPIRT
 */

if ( ! function_exists( 'ispirt_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ispirt_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on iSPIRT, use a find and replace
		 * to change 'ispirt' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ispirt', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ispirt' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ispirt_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ispirt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ispirt_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ispirt_content_width', 640 );
}
add_action( 'after_setup_theme', 'ispirt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ispirt_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ispirt' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ispirt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ispirt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ispirt_scripts() {
	wp_enqueue_style( 'ispirt-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ispirt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ispirt-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ispirt_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




// ------------------- Breadcrumbs

function qt_custom_breadcrumbs() {

  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '/'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb

  global $post;
  $homeLink = get_bloginfo('url');

  if (is_home() || is_front_page()) {

    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';

  } else {

    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search Results for "' . get_search_query() . '"' . $after;

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			if(get_post_type()){
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
			}
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged with "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles written by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __(' / ') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</div>';

  }
} // end qt_custom_breadcrumbs()








     add_action('admin_footer', function() {

       wp_enqueue_script( 'media-upload' );
       wp_enqueue_media();
     ?>

     <script>
     jQuery(document).ready( function(){
     function media_upload( button_class) {
     var _custom_media = true,
     _orig_send_attachment = wp.media.editor.send.attachment;
     jQuery('body').on('click',button_class, function(e) {
         var button_id ='#'+jQuery(this).attr('id');
         /* console.log(button_id); */
         var self = jQuery(button_id);
         var send_attachment_bkp = wp.media.editor.send.attachment;
         var button = jQuery(button_id);
         var id = button.attr('id').replace('_button', '');
         _custom_media = true;
         wp.media.editor.send.attachment = function(props, attachment){
          //  console.log(attachment);
             if ( _custom_media  ) {
                jQuery('.custom_media_id').val(attachment.id);
                jQuery('.custom_media_url').val(attachment.url);
                jQuery('.custom_media_image').attr('src',attachment.url).css('display','block');
             } else {
                 return _orig_send_attachment.apply( button_id, [props, attachment] );
             }
         }
         wp.media.editor.open(button);
         return false;
     });
     }
     media_upload( '.custom_media_upload');
     });

     </script>

     <?php
     });



 class banner_widget extends WP_Widget {
   /**
   * All four methods will be
   * nested inside this single instance of the WP_Widget class.
   **/

 	public function __construct() {
 	    $widget_options = array(
 	      'classname' => 'banner_widget',
 	      'description' => 'Add banner widget',
 	    );
 	    parent::__construct( 'banner_widget', 'Banner Widget', $widget_options );
 	  }

 		public function widget( $args, $instance ) {
 		  $title = apply_filters( 'widget_title', $instance[ 'title' ] );
 			$cta_text = apply_filters( 'widget_text', $instance['cta_text'], $instance );
 			$cta_link = apply_filters( 'widget_text', $instance['cta_link'], $instance );
 		  $cta_url = apply_filters( 'widget_text', $instance['image_uri'], $instance );

 			echo $args['before_widget'];
 			?>

            <div class="bannerwidget" style="background-image: url('<?php echo $cta_url; ?>');">
                <div class="banner-wrap-text">
                    <span class="banner-title"><?php echo $title; ?></span>
                    <?php if ($cta_text): ?>
                    <a href="<?php echo $cta_link; ?>" target="_blank" class="button full banner-cta"><?php echo $cta_text; ?></a>
                    <?php endif; ?>
                </div>
                <?php if ($title || $cta_text){ ?>
                  <div class="banner-overlay"></div>
                <?php } ?>
                <a href="<?php echo $cta_link; ?>" target="_blank" class="link-wrap"></a>
            </div>

 		  <?php echo $args['after_widget'];
 		}


 		public function form( $instance ) {
 	  $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
 		$cta_text = ! empty( $instance['cta_text'] ) ? $instance['cta_text'] : '';
 		$cta_link = ! empty( $instance['cta_link'] ) ? $instance['cta_link'] : '';
 		$cta_url = ! empty( $instance['image_uri'] ) ? $instance['image_uri'] : '';

 		?>
 	  <p>
 	    <label for="<?php echo $this->get_field_id( 'title' ); ?>" style="display:block;">Banner Title</label>
 	    <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
 	  </p>

 		<p>
 	    <label for="<?php echo $this->get_field_id( 'cta_text' ); ?>" style="display:block;">Banner Button Text</label>
 	    <input type="text" id="<?php echo $this->get_field_id( 'cta_text' ); ?>" name="<?php echo $this->get_field_name( 'cta_text' ); ?>" value="<?php echo esc_attr( $cta_text ); ?>" />
 	  </p>

 		<p>
 	    <label for="<?php echo $this->get_field_id( 'cta_link' ); ?>" style="display:block; font-weight:bold;">Banner Button Link</label>
 	    <input type="text" id="<?php echo $this->get_field_id( 'cta_link' ); ?>" name="<?php echo $this->get_field_name( 'cta_link' ); ?>" value="<?php echo esc_attr( $cta_link ); ?>" />
 	  </p>

 		<p>
 			<label for="<?php echo $this->get_field_id('image_uri'); ?>">BannerBackground</label><br />

       <?php
           if ( isset($instance['image_uri']) ) {
             $image_preview = $instance['image_uri'];
           } else {
             $image_preview = get_template_directory_uri()."/img/trans.png";
           }
           echo '<img class="custom_media_image" src="' . $image_preview . '" style="margin:0;padding:0;max-width:300px;float:left;display:inline-block" /><br />';
       ?>

       <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo esc_attr( $cta_url ); ?>" style="margin-top:5px;">

 			<input type="button" class="button button-primary custom_media_upload" id="custom_media_button" value="Upload Image" style="margin-top:5px;" />
 		</p>

 		<?php
 	}


 	public function update( $new_instance, $old_instance ) {
 	  $instance = $old_instance;
 		$instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
 		$instance[ 'cta_text' ] = strip_tags( $new_instance[ 'cta_text' ] );
 		$instance[ 'cta_link' ] = strip_tags( $new_instance[ 'cta_link' ] );
 	  $instance[ 'image_uri' ] = strip_tags( $new_instance[ 'image_uri' ] );
 	  return $instance;
 	}

 }

 function register_cta_widget() {
   register_widget( 'banner_widget' );
 }
 add_action( 'widgets_init', 'register_cta_widget' );



 // NEWS CPT

 function cptui_register_my_cpts_news() {

	/**
	 * Post Type: News.
	 */

	$labels = array(
		"name" => __( "News", "ispirt" ),
		"singular_name" => __( "News", "ispirt" ),
	);

	$args = array(
		"label" => __( "News", "ispirt" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "news", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-media-document",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "news", $args );
}

add_action( 'init', 'cptui_register_my_cpts_news' );


//////////////////////// Allow svg uploads

function custom_mtypes( $m ){
    $m['svg'] = 'image/svg+xml';
    $m['svgz'] = 'image/svg+xml';
    return $m;
}
add_filter( 'upload_mimes', 'custom_mtypes' );

//////////////////////// ADVANCED CUSTOM FEILDS

require get_template_directory() . '/inc/custom-fields.php';


///////////////Set Default date to today; of custom field in news
add_filter('acf/load_field/name=date', 'my_acf_default_date');
function my_acf_default_date($field) {
  $field['default_value'] = date('F d, Y');
  return $field;
}

//////////// Sort repeater

function my_acf_load_value( $value, $post_id, $field ) {
	$order = array();

	if( empty($value) ) {

		return $value;
	}

	// Get field Id
	$sub_field_id = "";
	foreach($field["sub_fields"] as $key => $field_array)
	{
		if($field_array["name"]=="name")
		{
			$sub_field_id = $field_array["key"];

		}
	}

	foreach( $value as $i => $row ) {


		$order[ $i ] = $row[$sub_field_id];

	}


	// multisort
	array_multisort( $order, SORT_ASC, $value );


	// return
	return $value;

}

add_filter('acf/load_value/name=core_volunteers', 'my_acf_load_value', 10, 3);
add_filter('acf/load_value/name=volunteers', 'my_acf_load_value', 10, 3);
add_filter('acf/load_value/name=alumni', 'my_acf_load_value', 10, 3);
