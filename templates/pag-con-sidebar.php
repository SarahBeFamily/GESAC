<?php
/**
 * Pagina con sidebar di navigazione template
 */
?>

<section id="pagetitle" class="dark-mode">

	<div class="col">
		<?php get_component('breadcrumbs', 'Pagina', 'dark', true); ?>

		<h1 class="page-title">Pagina con sidebar di navigazione</h1>
	</div>

</section>

<section id="page">

	<div class="container row between-content wrap">

		<div id="content" class="row between-content wrap">
			<h2>Lorem ipsum doloto is it</h2>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus pretium vitae ac arcu. Aliquet ac congue sit consectetur adipiscing egestas. Ornare sed tristique blandit morbi sit urna fringilla ut ipsum. Habitant fermentum ac amet, id cursus viverra odio faucibus condimentum. Mauris vestibulum, placerat ornare orci nunc quam leo. Nibh elit sagittis nulla nec in auctor. Adipiscing sodales pellentesque dolor lectus quam curabitur. Dictumst viverra fames varius a velit praesent neque phasellus. Dolor, diam dui habitant purus. Pretium mi nunc, aliquet nunc.<br>
				Massa gravida egestas lacus ornare blandit cursus facilisis nulla. Ornare cras velit, neque diam feugiat. Enim arcu sit feugiat sit rhoncus. Nisi tellus et ornare praesent pretium vulputate est in. Auctor tortor sem scelerisque lacus, ipsum. Fermentum aenean eget nascetur tempor quis nisl amet. Non volutpat urna.
			</p>
		</div>

		<div class="sidebar accordion mobile-hidden">
			<div>
				<h3>Titolo menu</h3>

				<ul class="archive">
					<li>
						<a>Voce menu</a>
						<ul class="submenu">
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
						</ul>
					</li>
					<li>
						<a>Voce menu</a>
						<ul class="submenu">
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
						</ul>
					</li>
					<li>
						<a>Voce menu</a>
						<ul class="submenu">
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
						</ul>
					</li>
					<li>
						<a>Voce menu</a>
						<ul class="submenu">
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
						</ul>
					</li>
					<li>
						<a>Voce menu</a>
						<ul class="submenu">
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
							<li>Voce sottolivello</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

	</div>

	<a href="#" id="more-news" class="link">Mostra di più</a>
</section>

<section class="link-correlati mobile-hidden">
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