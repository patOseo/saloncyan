<?php 
$headerimg = get_field('header_image'); 
?>

<div class="d-block mobile-header-logo py-4 py-lg-0"><a href="/"><img class="header-image-logo" src="/wp-content/themes/saloncyan/images/saloncyan-logo.png" alt="Salon Cyan"></a></div>

<?php if($headerimg): ?>
	<div class="header-image uk-animation-slide-bottom-medium">
		<?php echo wp_get_attachment_image($headerimg, 'full'); ?>
	</div>
<?php endif; ?>