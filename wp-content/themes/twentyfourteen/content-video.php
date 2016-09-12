<?php
/**
 * The template for displaying posts in the Video post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		if ( has_post_thumbnail() ) {
			twentyfourteen_post_thumbnail();
		}
		else {?>
		<a class="post-thumbnail" href="<?php echo esc_url( get_permalink()) ?>"><img src="<?php echo  wp_upload_dir('2016/09')['url']; ?>/image-video.png"></a>
		
	<?php
			
		} 
	?>
	

	<header class="entry-header">
		<?php
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		?>
	</header><!-- .entry-header -->

	<?php // the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
