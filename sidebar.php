<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iSPIRT
 */


?>


<aside id="secondary" class="widget-area">
	<?php if ( is_page()) { ?>
    <div class="side-nav">
			<?php
      $depth_count = count($post->ancestors);

			if($post->post_parent) {
      $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=4");
      $titlenamer = get_the_title($post->post_parent);
      $page_id_title = $post->post_parent;
      ?>
			<a href="<?php echo get_permalink($page_id_title); ?>" class="title"><?php echo $titlenamer; ?></a>
			<?php
      }
      else {
      $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=4");
      $titlenamer = get_the_title($post->ID);
      $page_id_title = $post->ID;
      if ($children) {
      ?>
    	<a href="<?php echo get_permalink($post->ID); ?>" class="title one"><?php echo $titlenamer; ?></a>
    <?php
      }
      } // Else
      if ($children) { ?><ul><?php echo $children; ?></ul><?php } else { ?>
				<style media="screen">
					.side-nav {display: none;}
				</style>
			<?php } ?>
	</div>
    <?php } ?>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
