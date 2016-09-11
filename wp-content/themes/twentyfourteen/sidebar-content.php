<?php
/**
 * The Content Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

//if ( ! is_active_sidebar( 'sidebar-2' ) ) {
//	return;
//}
$args_videos = array(
	'category__in' => array(8),
	'posts_per_page'=>3,
	'order'   => 'ASC'
);
$my_query_videos = new WP_Query( $args_videos );
?>
<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<div class="block-video block">
		<h2 class="title-block"><span>Videos</span></h2>
		<div class="content-block">
			<?php
				if ( $my_query_videos->have_posts() ) :
				
					while ( $my_query_videos->have_posts() ) : $my_query_videos->the_post();
						get_template_part( 'content', 'video');
					endwhile;
					
				endif;
				//wp_reset_postdata();
			?>
		</div>
	</div>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #content-sidebar -->
