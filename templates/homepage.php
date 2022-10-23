<?php
/**
 * Homepage Template
 */
?>

<section id="hero">

	<h1 class="hero-title">Benvenuti all’Aeroporto di Napoli</h1>

	<div id="tab-voli">

		<!-- TAB VOLI STARTS -->
		<div class="main-tabs">

			<div class="tabs">
				<div class="active" data-menu-tab="#flight">
					<span class="icon icon-plane --active"></span>
					Voli in tempo reale
				</div>

				<div data-menu-tab="#parking">
					<span class="icon icon-parking"></span>
					Parcheggi
				</div>
			</div>

			<!-- COLUMN TWO EXTRA -->
			<div class="extra">
				<div class="hour">
					<span class="icon icon-clock"></span>
					<span id="hour">12:08</span>
				</div>

				<div class="meteo">
					<span class="icon icon-weather --coperto"></span>
					<span id="temperature">22°C</span>
				</div>
			</div>
		</div>

		<div class="main-tabs-content">
			<div id="flight">
				<?php get_component('form-flight', '', false); ?>
			</div>

			<div id="parking" class="hidden">
				<?php get_component('form-parking', 'Trova Parcheggi', false); ?>
			</div>
		</div>
	</div>

	<div id="footer-items">

		<div class="col">
			<span class="icon-circle"><span class="icon icon-parking"></span></span>
			<p class="content">
				<span class="title">Info Parcheggio</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</div>

		<div class="col">
			<span class="icon-circle"><span class="icon icon-location"></span></span>
			<p class="content">
				<span class="title">Come arrivare in Aeroporto</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</div>

		<div class="col">
			<span class="icon-circle"><span class="icon icon-timer"></span></span>
			<p class="content">
				<span class="title">FAST Track</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</div>

		<div class="col">
			<span class="icon-circle"><span class="icon icon-plane-2"></span></span>
			<p class="content">
				<span class="title">Acquista Volo</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</div>
	</div>
</section>

<section id="travel">
	<h2 class="section-title">Info Travel</h2>

	<?php get_component('tabs-v2', '', true); ?>
</section>

<section id="services">

	<div class="quote">
		<p>
			Non c’è uomo più completo di colui che ha viaggiato, che ha cambiato venti volte la forma del suo pensiero e della sua vita.
		</p>
		<span class="author">Alphonse de Lamartine</span>
	</div>

	<div class="wrap">

		<a class="service" href="#">
			<div style="background-image: linear-gradient(180deg, rgba(255,255,255,0) 0%, #01112C 100%), url(<?php echo img_path('homepage/fast-track.jpg'); ?>);">
				<h3 class="title">Fast Track</h3>
				<span class="cat">Services</span>
			</div>
		</a>

		<a class="service" href="#">
			<div style="background-image: linear-gradient(180deg, rgba(255,255,255,0) 0%, #01112C 100%), url(<?php echo img_path('homepage/sala-vip.jpg'); ?>);">
				<span class="title">Sala VIP</span>
				<span class="cat">Experience</span>
			</div>
		</a>

		<a class="service" href="#">
			<div style="background-image: linear-gradient(180deg, rgba(255,255,255,0) 0%, #01112C 100%), url(<?php echo img_path('homepage/bar-ristoranti.jpg'); ?>);">
				<span class="title">Bar e Ristoranti</span>
				<span class="cat">Experience</span>
			</div>
		</a>

		<a class="service" href="#">
			<div style="background-image: linear-gradient(180deg, rgba(255,255,255,0) 0%, #01112C 100%), url(<?php echo img_path('homepage/negozi.jpg'); ?>);">
				<span class="title">Negozi</span>
				<span class="cat">Services</span>
			</div>
		</a>
	</div>

	<a href="#" class="cta-link">Acquista tutti i servizi</a>
</section>

<section class="cta vw-regular">
	<div class="col --text">
		<h3>Scopri tutti i Vantaggi Fidelity</h3>
		<p>
			FlyYou è il programma fedeltà gratuito per chi parte da Napoli e che offre diversi vantaggi e sconti per un’esperienza in aeroporto ancora più personale e piacevole. Scarica l’App e scopri un mondo d’occasioni.
		</p>
	</div>

	<div class="col --button">
		<a href="#" class="button secondary arrow">Fidelity Card</a>
	</div>
</section>

<section id="parking" class="vw-narrow">
	<div class="col">
		<h2>Sei alla ricerca di un parcheggio?</h2>

		<p>Assicurati un posto riservato ancor prima di arrivare aprofittando delle nostre offerte.</p>
	</div>

	<div class="col">
		<div>
			<p class="title">Prenota la tua sosta in aeroporto</p>
			<?php get_component('form-parking', 'Calcola Preventivo', true); ?>

			<a href="#"><span class="icon icon-download"></span> Scarica il regolamento</a>
		</div>
	</div>
</section>

<section id="icon-services">
	<h2>I nostri servizi</h2>
	<p>Tutto ciò che serve per soddisfare i bisogni di ogni viaggiatore.</p>

	<div class="slick-slider-icon-services">

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('icons/FidelityCard.svg'); ?>" alt="">
				</div>

				<p class="title">Fidelity card</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('icons/Bagagli.svg'); ?>" alt="">
				</div>

				<p class="title">Custodia Bagagli</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('icons/Wifi.svg'); ?>" alt="">
				</div>

				<p class="title">Internet e Wifi</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('icons/Assistenze-Speciali.svg'); ?>" alt="">
				</div>

				<p class="title">Assistenze speciali</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('icons/Info.svg'); ?>" alt="">
				</div>

				<p class="title">Guida ai servizi</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('icons/FidelityCard.svg'); ?>" alt="">
				</div>

				<p class="title">Fidelity card</p>
			</div>
		</div>

	</div>
</section>

<?php 
// Include the cta section "General"
include_section('cta-general', 'campania', 'Campania Divina', 'Scopri le attrazioni');
?>

<section id="blog">
	<div class="col">

		<div class="text">
			<h2>Blog</h2>
			<p>
				Rimani aggiornato e scopri le ultime News relative all’Aeroporto di Napoli. 
			</p>

			<!-- LINK FOR DESKTOP -->
			<a href="#" class="link arrow-secondary">Tutte le News</a>
		</div>

		<div class="arrows"></div>

	</div>

	<div class="col">
		<div class="slick-news">

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
					<div class="box-content">
						<h3>Nuova area Pick-up e riattivazione ZTC in aeroporto.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news2.jpg'); ?>);">
					<div class="box-content">
						<h3>Traffico passeggeri record all’Aeroporto Internazionale di Napoli.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
					<div class="box-content">
						<h3>Ryanair celebra 5 anni a Napoli e svela il più grande operativo di sempre.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news2.jpg'); ?>);">
					<div class="box-content">
						<h3>Nuova area Pick-up e riattivazione ZTC in aeroporto.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news1.jpg'); ?>);">
					<div class="box-content">
						<h3>Ryanair celebra 5 anni a Napoli e svela il più grande operativo di sempre.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

			<div class="slide">
				<div style="background-image: url(<?php echo img_path('homepage/news2.jpg'); ?>);">
					<div class="box-content">
						<h3>Nuova area Pick-up e riattivazione ZTC in aeroporto.</h3>

						<div class="meta">
							<span class="date">1 Ago</span>
							<a href="#" class="link arrow-primary">Leggi di più</a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- LINK FOR MOBILE (hidden up to 768px) -->
		<a href="#" class="link arrow-secondary">Tutte le News</a>
	</div>
</section>

<?php 
// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>
