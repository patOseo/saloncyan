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
		 	
		<h1 class="heading" <?php if(get_field('center_text') == true): ?> style="text-align:center;"<?php endif; ?> uk-scrollspy="target: span; cls: uk-animation-slide-bottom-medium; repeat: false;"><?php if(get_field('large_text')): ?><span class="large italic"><?php the_field('large_text'); ?></span><br><?php endif; ?><span class="break" <?php if(get_field('float_right')): ?>style="float:right;"<?php endif; ?>><span class="small"><?php if(get_field('small_text')): the_field('small_text'); endif; ?></span> <span class="medium italic"><?php if(get_field('medium_text')): the_field('medium_text'); endif; ?></span></span></h1>

		<?php else:
			the_title( '<h1 class="entry-title">', '</h1>' );
		endif;
		?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content" uk-scrollspy="target: .service-block, .wp-block-column > *; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">

		<?php if(have_rows('service_blocks')): ?>
			<div class="service-blocks">
				<div class="row">
					<?php while(have_rows('service_blocks')): the_row(); ?>
						<div class="col-sm-6">
							<div class="service-block">
								<h2 class="service-block-title"><?php the_sub_field('title'); ?></h2>
								<div class="row">
									<div class="col-md-12 col-lg-9">
										<div class="row">
										<?php while(have_rows('services')): the_row(); ?>
											<div class="col-6">
												<strong class="service-title"><?php the_sub_field('name'); ?></strong>
												<p class="service-price"><?php the_sub_field('price'); ?></p>
											</div>
										<?php endwhile; ?>
										</div>
									</div>
									<div class="col-md-12 col-lg-3">
										<a href="/book/" class="btn btn-primary btn-book">Book</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>

					<?php if(have_rows('additional_products')): ?>
						<div class="col-sm-6">
							<div class="service-block">
								<h2 class="service-block-title">Additional Products</h2>
								<div class="row">
									<div class="col-12">
										<div class="row">
										<?php while(have_rows('additional_products')): the_row(); ?>
											<div class="col-auto">
												<strong class="service-title"><?php the_sub_field('name'); ?></strong>
												<p class="service-price"><?php the_sub_field('price'); ?></p>
											</div>
										<?php endwhile; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<div class='service-blocks'>
			
		</div>

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
