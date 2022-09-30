<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<!-- <div class="container">
	<div class="home-header">
		<div class="home-headline">confidence is beautiful</div>
	</div>
</div>
 -->

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
					}
					?>

					<div class="entry-header" uk-scrollspy="target: span; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
						<h1 class="heading"><span class="large italic">Welcome</span><br><span class="break"><span class="small">to your</span> <span class="medium italic">salon</span></span></h1>
					</div>
					<div class="entry-content" uk-scrollspy="target: *; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
						<?php the_content(); ?>
					</div>

				</main><!-- #main -->

				<!-- Home Blocks -->
				<?php if(have_rows('home_blocks')): ?>
				<div class="row home-blocks" uk-scrollspy="target: .home-block; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
					<?php while(have_rows('home_blocks')): the_row(); $image = get_sub_field('image'); ?>
						<div class="col-md-4">
							<div class="home-block">
								<a href="<?php the_sub_field('link'); ?>">
									<?php if($image) { echo wp_get_attachment_image($image, 'home_square'); } ?>
									<span><?php the_sub_field('text'); ?></span>
								</a>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

				<div class="insta-feed">
					<?php echo do_shortcode('[instagram-feed]'); ?>
				</div>

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
