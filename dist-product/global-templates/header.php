<?php 
$headerimg = get_field('header_image'); 
?>

<a href="/"><img class="header-image-logo" src="/wp-content/themes/saloncyan/images/saloncyan-dark.png" alt="Salon Cyan"></a>

<?php if($headerimg): ?>
	<div class="header-image uk-animation-slide-bottom-medium">
		<?php echo wp_get_attachment_image($headerimg, 'full'); ?>
	</div>
<?php endif; ?>