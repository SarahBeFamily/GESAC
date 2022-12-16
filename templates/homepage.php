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
					<i class="icon icon-plane --active"></i>
					Voli in tempo reale
				</div>

				<div data-menu-tab="#parking">
					<i class="icon icon-parking"></i>
					Parcheggi
				</div>
			</div>

			<!-- COLUMN TWO EXTRA -->
			<div class="extra">
				<div class="hour">
					<i class="icon icon-clock"></i>
					<span id="hour">12:08</span>
				</div>

				<div class="meteo">
					<i class="icon icon-weather coperto"></i>
					<span class="temperature">22°C</span>
				</div>

				<div class="meteo-three-days">
					<div class="today">
						<span class="day">Today</span>
						<i class="icon icon-weather coperto"></i>
						<span class="temperature">22°C</span>
					</div>
					<div class="tomorrow">
						<span class="day">13 Mar.</span>
						<i class="icon icon-weather coperto"></i>
						<span class="temperature">22°C</span>
					</div>
					<div class="after-tomorrow">
						<span class="day">14 Mar.</span>
						<i class="icon icon-weather coperto"></i>
						<span class="temperature">22°C</span>
					</div>
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

		<a href="#" class="col link">
			<span class="icon-circle"><i class="icon icon-parking"></i></span>
			<p class="content">
				<span class="title">Info Parcheggio</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link">
			<span class="icon-circle"><i class="icon icon-location"></i></span>
			<p class="content">
				<span class="title">Come arrivare in Aeroporto</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link">
			<span class="icon-circle"><i class="icon icon-timer"></i></span>
			<p class="content">
				<span class="title">FAST Track</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>

		<a href="#" class="col link">
			<span class="icon-circle"><i class="icon icon-plane-2"></i></span>
			<p class="content">
				<span class="title">Acquista Volo</span>
				<br>
				<span class="description">Varius aenean viverra tempor.</span>
			</p>
		</a>
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

			<a href="#"><i class="icon icon-download"></i> Scarica il regolamento</a>
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

// Include the cta section "Blog" with latest news carousel
include_section('blog');

// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>
