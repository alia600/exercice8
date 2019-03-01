<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			the_title( sprintf( '<div class="entry-title"><p href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</p></div>' );
		?>
	</header><!-- .entry-header -->
</article><!-- #post-${ID} -->
