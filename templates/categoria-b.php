<?php
/**
 * Categoria B template
 * *******************
 * 
 * same as "Categoria A"
 * differs from #articles div class:
 * .vertical -> Categoria A articles views
 * .horizontal -> Categoria B articles views
 */
?>

<section id="pagetitle" class="dark-mode">

	<div class="col">
		<?php get_component('breadcrumbs', 'Pagina di categoria B', 'dark', true); ?>

		<h1 class="page-title">Pagina di categoria B</h1>
	</div>

</section>

<section id="categories">
	<div id="articles" class="horizontal row between-content wrap">

		<div class="single">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image1.png'); ?>);"></div>
			<div class="cont">
				<h3>Nome Pagina</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non eget amet diam ultrices dignissim elit blandit.
				</p>
				<div class="meta"><a href="#" class="link arrow-primary" role="button">Call to action</a></div>
			</div>
		</div>

		<div class="single">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image2.png'); ?>);"></div>
			<div class="cont">
				<h3>Nome Pagina</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non eget amet diam ultrices dignissim elit blandit.
				</p>
				<div class="meta"><a href="#" class="link arrow-primary" role="button">Call to action</a></div>
			</div>
		</div>

		<div class="single">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image3.png'); ?>);"></div>
			<div class="cont">
				<h3>Nome Pagina</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non eget amet diam ultrices dignissim elit blandit.
				</p>
				<div class="meta"><a href="#" class="link arrow-primary" role="button">Call to action</a></div>
			</div>
		</div>

		<div class="single">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image4.png'); ?>);"></div>
			<div class="cont">
				<h3>Nome Pagina</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non eget amet diam ultrices dignissim elit blandit.
				</p>
				<div class="meta"><a href="#" class="link arrow-primary" role="button">Call to action</a></div>
			</div>
		</div>

		<div class="single">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image5.png'); ?>);"></div>
			<div class="cont">
				<h3>Nome Pagina</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non eget amet diam ultrices dignissim elit blandit.
				</p>
				<div class="meta"><a href="#" class="link arrow-primary" role="button">Call to action</a></div>
			</div>
		</div>

		<div class="single">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image6.png'); ?>);"></div>
			<div class="cont">
				<h3>Nome Pagina</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non eget amet diam ultrices dignissim elit blandit.
				</p>
				<div class="meta"><a href="#" class="link arrow-primary" role="button">Call to action</a></div>
			</div>
		</div>

		<div class="single">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image7.png'); ?>);"></div>
			<div class="cont">
				<h3>Nome Pagina</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non eget amet diam ultrices dignissim elit blandit.
				</p>
				<div class="meta"><a href="#" class="link arrow-primary" role="button">Call to action</a></div>
			</div>
		</div>

		<div class="single">
			<div class="img" style="background-image: url(<?php echo img_path('cats/image8.png'); ?>);"></div>
			<div class="cont">
				<h3>Nome Pagina</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non eget amet diam ultrices dignissim elit blandit.
				</p>
				<div class="meta"><a href="#" class="link arrow-primary" role="button">Call to action</a></div>
			</div>
		</div>

	</div>

	<a href="#" id="more-news" class="link">Mostra di più</a>
</section>

<section id="related-cats" class="link-correlati">
	<h4>Link correlati</h4>

	<ul class="related-links">
		<li><a href="#">Link1</a></li>
		<li><a href="#">Link2</a></li>
		<li><a href="#">Link3</a></li>
	</ul>
</section>

<?php
// Include the section "Acquista Servizi"
include_section('acquista-servizi', '', '', 'mobile-hidden');

// Include the section "Blog" with latest news carousel
include_section('blog', '', '', 'mobile-hidden');

// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>