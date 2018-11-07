<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article class="short-blog" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/*
		if ( is_single() ) :
			the_title( '<h1 class="mb-1 text-center">', '</h1>' );
		else :
			the_title( sprintf( '<h1 class="mb-1 text-center">'), '</h1>' );
		endif;
		*/
	?>
		<figure>
			<?php
				// Post thumbnail.
				the_post_thumbnail( 'full' );
			?>
        </figure>

	<?php
		/* translators: %s: Name of current post */

		$categories = get_the_category();

		echo '<p class="bl-category">'.$categories[0]->name.'</p>';
		the_title( '<h1 class="bl-title">', '</h1>' );
		$post_date = get_the_date( 'F j, Y' );
		echo '<p class="bl-date"><i class="far fa-calendar-alt"></i>  '.$post_date.'</p>';

		the_excerpt( sprintf(
			__( 'Continue reading %s', 'twentyfifteen' ),
			the_title( '<p class="bl-excerpt">', '</p>', false )
		) );
	?>

		<a href="<?php echo the_permalink(); ?>" class="btn btn-contact bl-btn">Leer más</a>

</article><!-- #post-## -->
