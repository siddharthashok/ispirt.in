<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iSPIRT
 */

?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,600|Poppins:400,700" rel="stylesheet">
	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

    <div id="top-navigation">
      <div class="logo">
				<a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ispirt.svg" alt="">
				</a>
      </div>
      <div class="the-navigation">
        <nav>
          <!-- <ul>
            <li> <a href="#">Home</a> </li>
            <li> <a href="#">Who we are</a> </li>
            <li> <a href="#">What we do</a> </li>
            <li> <a href="#">Our Industry</a> </li>
            <li> <a href="#">Engage with us</a> </li>
            <li> <a href="#">Media</a> </li>
          </ul> -->

					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'		=>	'top_menu'
					) );
					?>

        </nav>
      </div>
    </div>
