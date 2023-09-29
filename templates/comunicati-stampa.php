<?php
/**
 * Comunicati stampa template
 */
?>

<section id="pagetitle" class="dark-mode news">

	<div class="col">
		<?php get_component('breadcrumbs', 'Comunicati Stampa', 'dark', true); ?>

		<h1 class="page-title">Comunicati Stampa</h1>
	</div>

</section>

<section id="comunicati">

	<div class="row between-content wrap">

		<div id="articles">
			<h2>Anno 2022</h2>

			<div class="single">
				<div class="content">
					<div class="date">02 Maggio 2022</div>

					<h3>Titolo Comunicato Stampa</h3>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec tellus amet, facilisis lectus molestie tellus. Vitae volutpat libero tristique amet, augue libero, nisi. Odio viverra amet purus sit faucibus id non. Pellentesque iaculis eget euismod vulputate. Dictum libero, aenean dolor pellentesque malesuada odio.
					</p>

					<a href="#" class="button secondary w-icon">Download <i class="icon icon-download"></i></a>
				</div>
			</div>

			<div class="single">
				<div class="content">
					<div class="date">02 Maggio 2022</div>

					<h3>Titolo Comunicato Stampa</h3>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec tellus amet, facilisis lectus molestie tellus. Vitae volutpat libero tristique amet, augue libero, nisi. Odio viverra amet purus sit faucibus id non. Pellentesque iaculis eget euismod vulputate. Dictum libero, aenean dolor pellentesque malesuada odio.
					</p>

					<a href="#" class="button secondary w-icon">Download <i class="icon icon-download"></i></a>
				</div>
			</div>

			<div class="single">
				<div class="content">
					<div class="date">02 Maggio 2022</div>

					<h3>Titolo Comunicato Stampa</h3>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec tellus amet, facilisis lectus molestie tellus. Vitae volutpat libero tristique amet, augue libero, nisi. Odio viverra amet purus sit faucibus id non. Pellentesque iaculis eget euismod vulputate. Dictum libero, aenean dolor pellentesque malesuada odio.
					</p>

					<a href="#" class="button secondary w-icon">Download <i class="icon icon-download"></i></a>
				</div>
			</div>
		</div>

		<div class="sidebar">
			<div>
				<p>
					Corporate Communications & Media Relations
				</p>

				<p>
					Flavia Scandone<br>
					Tel. +39.081.7896501/104<br>
					e-mail: <a href="mailto:press@gesac.it" class="link">press@gesac.it</a> 
				</p>

				<div class="bg">
					<h3>Archivio Comunicati</h3>

					<ul class="archive">
						<li class="current"><a href="#">Anno 2022</a></li>
						<li><a href="#">Anno 2021</a></li>
						<li><a href="#">Anno 2020</a></li>
						<li><a href="#">Anno 2019</a></li>
						<li><a href="#">Anno 2018</a></li>
						<li><a href="#">Anno 2017</a></li>
						<li><a href="#">Anno 2016</a></li>
						<li><a href="#">Anno 2015</a></li>
						<li><a href="#">Anno 2014</a></li>
						<li><a href="#">Anno 2013</a></li>
						<li><a href="#">Anno 2012</a></li>
					</ul>
				</div>
			</div>
		</div>

		<a href="#" id="more-news" class="link">Scopri di più</a>
	</div>
</section>

<?php
// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>