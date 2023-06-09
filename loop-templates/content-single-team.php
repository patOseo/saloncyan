<?php
/**
 * Single team member partial template
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$image = get_field('photo');
$insta = get_field('instagram');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content" uk-scrollspy="target: .single-member-image, p, .fa, .wp-block-column > *, figure; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 200;">

		<div class="single-member">
			<div class="row align-items-center mb-4">
				<div class="col-md-6">
					<div class="single-member-image"><?php echo wp_get_attachment_image($image, 'team-member'); ?></div>
				</div>
				<div class="col-md-6">
					<h1><?php the_title(); ?></h1>
					<p class="mb-0 pl-2 member-position"><strong><?php the_field('position'); ?></strong></p>
					<?php if ($insta): ?><div class="mt-3"><a href="<?php echo $insta; ?>" target="_blank" rel="noopener,noreferrer"><i class="fa fa-instagram"></i></a></div><?php endif; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
