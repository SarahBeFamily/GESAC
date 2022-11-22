<?php
/**
 * Gallery template
 */
?>

<section id="pagetitle" class="dark-mode">

	<div class="col">
		<?php get_component('breadcrumbs', 'Gallery', 'dark', true); ?>

		<h1 class="page-title">Gallery</h1>
	</div>

</section>

<section id="gallery" class="row wrap">
	<a href="#" id="category-1" class="button secondary border-only">Categoria 1</a>
	<a href="#" id="category-2" class="button secondary">Categoria 2</a>

	<div class="photos">

		<div class="image-wrap">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image1.png'); ?>);"></div>
			<p>Link all'album di categoria 1</p>
		</div>

		<div class="image-wrap">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image2.png'); ?>);"></div>
			<p>Link all'album di categoria 1</p>
		</div>

		<div class="image-wrap">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image3.png'); ?>);"></div>
			<p>Link all'album di categoria 1</p>
		</div>

		<div class="image-wrap">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image4.png'); ?>);"></div>
			<p>Link all'album di categoria 1</p>
		</div>

		<div class="image-wrap">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image5.png'); ?>);"></div>
			<p>Link all'album di categoria 1</p>
		</div>

		<div class="image-wrap">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image6.png'); ?>);"></div>
			<p>Link all'album di categoria 1</p>
		</div>

		<div class="image-wrap">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image7.png'); ?>);"></div>
			<p>Link all'album di categoria 1</p>
		</div>

		<div class="image-wrap">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image8.png'); ?>);"></div>
			<p>Link all'album di categoria 1</p>
		</div>

	</div>

</section>

<?php
// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>