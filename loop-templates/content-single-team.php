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
			<h1><?php the_title(); ?></h1>
			<p class="member-position"><strong><?php the_field('position'); ?></strong></p>
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="single-member-image"><?php echo wp_get_attachment_image($image, 'team-member'); ?></div>
					<?php if ($insta): ?><a href="<?php echo $insta; ?>" target="_blank" rel="noopener,noreferrer"><i class="fa fa-instagram"></i></a><?php endif; ?>
				</div>
				<div class="col-lg-6 col-md-12">
					<p><?php the_field('short_bio'); ?></p>
				</div>
			</div>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
