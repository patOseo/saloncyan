<?php 

$args = array(
	'post_type' => 'team',
	'posts_per_page' => -1,
	'order' => 'ASC',
);

$query = new WP_Query($args);

?>

<?php if($query->have_posts()): ?>
<div class="team-members row" uk-scrollspy="target: .team-member; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 200;">
	<?php while($query->have_posts()): $query->the_post(); ?>
		<?php
		$image = get_field('photo');
		$position = get_field('position');
		$name = get_field('name');
		$short_bio = get_field('short_bio');
		$insta = get_field('instagram');
		?>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="team-member">
				<a href="<?php the_permalink(); ?>">
					<?php if($image): ?>
						<?php echo wp_get_attachment_image($image, 'team-member'); ?>
					<?php endif; ?>
					<div class="member-overlay">
						<div class="overlay-info">
							<p><?php echo $short_bio; ?></p>
						</div>
					</div>
					<div class="member-info">
						<p class="member-name"><?php echo $name; ?></p>
						<p class="member-position"><?php echo $position; ?></p>
					</div>
				</a>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>