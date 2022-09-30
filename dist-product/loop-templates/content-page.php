<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
	
		<?php 

		if(get_field('fancy_heading')): ?>
		 	
		<h1 class="heading"<?php if(get_field('center_text') == true): ?> style="text-align:center;"<?php endif; ?> uk-scrollspy="target: span; cls: uk-animation-slide-bottom-medium; repeat: false;"><?php if(get_field('large_text')): ?><span class="large italic"><?php the_field('large_text'); ?></span><br><?php endif; ?><span class="break" <?php if(get_field('float_right')): ?>style="float:right;"<?php endif; ?>><span class="small"><?php if(get_field('small_text')): the_field('small_text'); endif; ?></span> <span class="medium italic"><?php if(get_field('medium_text')): the_field('medium_text'); endif; ?></span></span></h1>

		<?php else:
			the_title( '<h1 class="entry-title">', '</h1>' );
		endif;
		?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content" uk-scrollspy="target: p, ul li, ol li, .wp-block-column > *, figure; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 200;">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
