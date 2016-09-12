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
	<div class="block block-image">
		<h2><span>Chứng nhận giải thưởng<br/> nấm lim xanh</span></h2>
		<div class="block-content">
			<img src="<?php echo get_template_directory_uri(); ?>/images/image-sidebar-right.png">
			<img class="img-2" src="<?php echo get_template_directory_uri(); ?>/images/image1-sidebar-right.png">
		</div>
	</div>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #content-sidebar -->
