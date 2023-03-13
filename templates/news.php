<?php
/**
 * News template
 */
?>

<section id="pagetitle" class="dark-mode news">

	<div class="col">
		<?php get_component('breadcrumbs', 'News', 'dark', true); ?>

		<h1 class="page-title">News</h1>
	</div>

</section>

<section id="news">
	<div class="row between-content wrap">
		<div id="articles" class="row between-content wrap">

			<div class="single-article" style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
				<div class="cont">
					<h2 class="title">Nuova area Pick-up e riattivazione ZTC in aeroporto. Nuova area Pick-up e riattivazione ZTC in aeroporto. Nuova area Pick-up e riattivazione ZTC in aeroporto.</h2>

					<div class="meta">
						<span class="date">1 Ago</span>
						<a href="#" class="link arrow-primary">Leggi di più</a>
					</div>
				</div>
			</div>

			<div class="single-article" style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
				<div class="cont">
					<h2 class="title">Nuova area Pick-up e riattivazione ZTC in aeroporto.</h2>

					<div class="meta">
						<span class="date">1 Ago</span>
						<a href="#" class="link arrow-primary">Leggi di più</a>
					</div>
				</div>
			</div>

			<div class="single-article" style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
				<div class="cont">
					<h2 class="title">Nuova area Pick-up e riattivazione ZTC in aeroporto.</h2>

					<div class="meta">
						<span class="date">1 Ago</span>
						<a href="#" class="link arrow-primary">Leggi di più</a>
					</div>
				</div>
			</div>

			<div class="single-article" style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
				<div class="cont">
					<h2 class="title">Nuova area Pick-up e riattivazione ZTC in aeroporto.</h2>

					<div class="meta">
						<span class="date">1 Ago</span>
						<a href="#" class="link arrow-primary">Leggi di più</a>
					</div>
				</div>
			</div>

			<div class="single-article" style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
				<div class="cont">
					<h2 class="title">Nuova area Pick-up e riattivazione ZTC in aeroporto.</h2>

					<div class="meta">
						<span class="date">1 Ago</span>
						<a href="#" class="link arrow-primary">Leggi di più</a>
					</div>
				</div>
			</div>

			<div class="single-article" style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
				<div class="cont">
					<h2 class="title">Nuova area Pick-up e riattivazione ZTC in aeroporto.</h2>

					<div class="meta">
						<span class="date">1 Ago</span>
						<a href="#" class="link arrow-primary">Leggi di più</a>
					</div>
				</div>
			</div>

		</div>

		<div id="single-article" class="article hidden">
			<div class="img-wrap">
				<img src="<?php echo img_path('news/news1.png'); ?>" alt="">
			</div>

			<div class="content">
				<div class="date">2 Maggio 2022</div>

				<h2>Titolo News</h2>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec tellus amet, facilisis lectus molestie tellus. Vitae volutpat libero tristique amet, augue libero, nisi. Odio viverra amet purus sit faucibus id non. Pellentesque iaculis eget euismod vulputate. Dictum libero, aenean dolor pellentesque malesuada odio.
				</p>

				<p>
					Tempor scelerisque sagittis in turpis risus tincidunt ipsum faucibus. Vulputate sapien etiam aliquet pellentesque. Sagittis ac vel pellentesque imperdiet scelerisque est nulla rhoncus. Nibh viverra vel a non nulla donec facilisis ut posuere. Sit ut sed nam dui, risus convallis vestibulum velit.
				</p>

				<p>
					Tempus enim feugiat eget porttitor nulla eu eget consequat. Viverra diam cursus ipsum id. Enim et tincidunt pretium felis pharetra, in at suspendisse enim. Erat urna, dolor augue malesuada in ut. Varius sit imperdiet id pulvinar nisl. Volutpat vestibulum, ut non id dignissim. Ridiculus dignissim lobortis elit integer aenean molestie fermentum in. Vulputate mattis elementum tellus sit. Risus lectus luctus facilisis nunc tristique vestibulum quis. In aenean elit nisi.
				</p>
			</div>

			<div class="share">
				<p class="title">Condividi</p>
				<p class="social">
					<a href="#"><img src="<?php echo img_path('icons/logos_facebook.svg'); ?>" alt="condividi su facebook"></a>
					<a href="#"><img src="<?php echo img_path('icons/logos_twitter.svg'); ?>" alt="condividi su twitter"></a>
					<a href="#"><img src="<?php echo img_path('icons/logos_linkedin-icon.svg'); ?>" alt="condividi su linkedin"></a>
				</p>
			</div>
		</div>

		<div class="news-sidebar">
			<div>
				<div class="news-search">
					<input type="text" id="search" placeholder="Ricerca News">
					<input type="submit" value="">
				</div>

				<h3>Archivio News</h3>

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

		<a href="#" id="more-news" class="link">Scopri di più</a>

		<section id="related-news" class="link-correlati hidden">
			<h4>Articoli correlati</h4>

			<ul class="related-links">
				<li><a href="#">Link1</a></li>
				<li><a href="#">Link2</a></li>
				<li><a href="#">Link3</a></li>
				<li><a href="#">Link4</a></li>
			</ul>
		</section>

	</div>

</section>

<?php
// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>