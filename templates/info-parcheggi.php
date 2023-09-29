<?php
/**
 * Info parcheggi template
 */
?>

<section id="pagetitle" class="dark-mode info-parcheggi">

	<div class="col">
		<?php get_component('breadcrumbs', 'Info Parcheggio', 'dark', true); ?>

		<h1 class="page-title">Info Parcheggio</h1>
	</div>

</section>

<section id="prenota-parcheggio" class="vw-narrow">
	<div class="col mobile-hidden">
		<h2>Stai cercando un Parcheggio?</h2>

		<p>Online booking with discount promotions and free rebooking. Roofed, secure and directly at the terminal.</p>
	</div>

	<div class="col">
		<div>
			<p class="title">Prenota la tua sosta in aeroporto</p>
			<?php get_component('form-parking', 'Calcola Preventivo', true); ?>

			<a href="#"><i class="icon icons-download-secondary"></i> Scarica il regolamento</a>
		</div>
	</div>
</section>

<section id="map">

	<div class="mobile-only">
		<a class="link secondary">Tutte le Info sul Parcheggio</a> <i class="icon icons-arrow-down-sec"></i>
	</div>

	<a data-fancybox href="<?php echo img_path('parking-map.png'); ?>" id="lightbox-map">
		<img src="<?php echo img_path('mappa-parcheggio.png'); ?>" alt="Vedi Parcheggio">
	</a>

</section>

<section id="parking-list" class="row between-content">

	<div class="col wide row between-content">

		<!-- SINGLE PARK TYPE -->
		<div class="park-type">

			<div class="intro">
				<h3>Auto - Sosta Breve</h3>

				<div class="positions">
					<!-- with class p1, p2, p3, p4, p-multi, p-bus and p-moto can recall its img -->
					<div class="park-pos p2"></div>
					<div class="park-pos p4"></div>
				</div>

				<p>I parcheggi sosta breve scoperti P2 e P4 sono situati in prossimità delle partenze</p>
			</div>

			<div class="info">

				<div class="prices">
					<div class="row">
						<div class="label">ORA o FRAZIONE P2</div>
						<div class="value"><span class="price">3,50</span>€</div>
					</div>

					<div class="row">
						<div class="label">ORA o FRAZIONE P4</div>
						<div class="value"><span class="price">4,00</span>€</div>
					</div>

					<div class="row">
						<div class="label">MAX GIORNO</div>
						<div class="value"><span class="price">36,00</span>€</div>
					</div>

					<div class="row">
						<div class="label">GIORNI SUCCESSIVI <br> ogni 12 ore o frazione</div>
						<div class="value"><span class="price">18,00</span>€</div>
					</div>
				</div>

				<a href="<?php echo img_path('parking-map.png'); ?>" class="link white arrow-white">Guarda la mappa</a>
			</div>
		</div>

		<!-- SINGLE PARK TYPE -->
		<div class="park-type">

			<div class="intro">
				<h3>Auto - Sosta Breve Car Valet</h3>

				<div class="positions">
					<!-- with class p1, p2, p3, p4, p-multi, p-bus and p-moto can recall its img -->
					<div class="park-pos p3"></div>
				</div>

				<p>Il Parcheggio P3 coperto è situato in prossimità delle partenze e offre il servizio di Car Valet</p>
			</div>
		
			<div class="info">

				<div class="prices">
					<div class="row">
						<div class="label">ORA o frazione</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">MAX GIORNO</div>
						<div class="value"><span class="price">20</span>€</div>
					</div>

					<div class="row">
						<div class="label">GIORNI SUCCESSIVI <br> ogni 12 ore o frazione</div>
						<div class="value"><span class="price">5</span>€</div>
					</div>

					<div class="row">
						<div class="label">Fino a 7 giorni</div>
						<div class="value"><span class="price">140</span>€</div>
					</div>

					<div class="row">
						<div class="label">Tariffa week end (dal venerdì al lunedì)</div>
						<div class="value"><span class="price">75</span>€</div>
					</div>
				</div>

				<a href="<?php echo img_path('parking-map.png'); ?>" class="link white arrow-white">Guarda la mappa</a>
			</div>
		</div>

	</div>

	<div class="col narrow">

		<div class="park-type-special">

			<div class="intro">
				<h3>Per passeggeri con disabilità</h3>

				<p>45 stalli gratuiti all'interno del Parcheggio Multipiano</p>
			</div>

			<a href="#" class="button secondary arrow">Passeggeri a ridotta mobilità</a>
		</div>

	</div>

	<div class="col wide row between-content">

		<!-- SINGLE PARK TYPE -->
		<div class="park-type">

			<div class="intro">
				<h3>Auto - Low cost</h3>

				<div class="positions">
					<!-- with class p1, p2, p3, p4, p-multi, p-bus and p-moto can recall its img -->
					<div class="park-pos p1"></div>
					<div class="park-pos-desc">Low cost</div>
				</div>

				<p>ll P1 è il parcheggio low cost con gratuità della sosta per i primi 45 minuti. Dista 300 metri dalle partenze ed è acquistabile online</p>
			</div>

			<div class="info">

				<div class="prices">
					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">Gratis</span></div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>
				</div>
				
				<a href="<?php echo img_path('parking-map.png'); ?>" class="link white arrow-white">Guarda la mappa</a>
			</div>
		</div>

		<!-- SINGLE PARK TYPE -->
		<div class="park-type">

			<div class="intro">
				<h3>Auto - Sosta Lunga</h3>

				<div class="positions">
					<!-- with class p1, p2, p3, p4, p-multi, p-bus and p-moto can recall its img -->
					<div class="park-pos p-multi"></div>
					<div class="park-pos-desc">Comfort</div>
				</div>

				<p>Il parcheggio Multipiano coperto è situato accanto all’area arrivi ed è acquistabile online</p>
			</div>

			<div class="info">

				<div class="prices">
					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Lorem ipsum</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>
				</div>

				<a href="<?php echo img_path('parking-map.png'); ?>" class="link white arrow-white">Guarda la mappa</a>
			</div>
		</div>

	</div>

	<div class="col narrow">

		<!-- SINGLE MOTO PARK TYPE -->
		<div class="park-type moto">

			<div class="intro">
				<h3>Motocicli - Area coperta</h3>

				<div class="positions">
					<!-- with class p1, p2, p3, p4, p-multi, p-bus and p-moto can recall its img -->
					<div class="park-pos p-moto"></div>
				</div>

				<p>Il Parcheggio Multipiano  dispone al piano terra di un'area al coperto riservata ai motocicli</p>
			</div>

			<div class="info">

				<div class="prices">
					<div class="row">
						<div class="label">ORA o frazione</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">MAX GIORNO</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label"><div>GIORNI SUCCESSIVI ogni 12 ore o frazione</div></div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">MAX Settimana</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>
				</div>

				<a href="<?php echo img_path('parking-map.png'); ?>" class="link white arrow-white">Guarda la mappa</a>
			</div>
		</div>

		<!-- SINGLE MOTO PARK TYPE -->
		<div class="park-type moto">

			<div class="intro">
				<h3>Motocicli</h3>

				<div class="positions">
					<!-- with class p1, p2, p3, p4, p-multi, p-bus and p-moto can recall its img -->
					<div class="park-pos p-moto"></div>
					<div class="park-pos-desc"></div>
				</div>

				<p>In prossimità del terminal, è presente un'area parcheggio all’aperto riservata ai motocicli</p>
			</div>

			<div class="info">

				<div class="prices">
					<div class="row">
						<div class="label">ORA o frazione</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">MAX GIORNO</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">MAX Settimana</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>

					<div class="row">
						<div class="label">Dall' 8° giorno per ogni giorno</div>
						<div class="value"><span class="price">10</span>€</div>
					</div>
				</div>

				<a href="<?php echo img_path('parking-map.png'); ?>" class="link white arrow-white">Guarda la mappa</a>
			</div>
		</div>
		
	</div>

	<div class="col row between-content wrap">

		<!-- BUS PARK TYPE -->
		<div class="row park-type-bus">

			<h3>Autobus</h3>

			<div class="positions">
				<!-- with class p1, p2, p3, p4, p-multi, p-bus and p-moto can recall its img -->
				<div class="park-pos p-bus"></div>
			</div>

			<p>
			Nei pressi del Parcheggio P1 è disponibile un’area parcheggio dedicata agli  autobus turistici. <br>
			Tariffa oraria 7 € <br>
			Tariffa giornaliera 35 €
			</p>
		</div>

		<div class="row convenzioni">
			<h3>Convenzioni NCC</h3>

			<p>
			Per informazioni sulle tariffe parcheggio in convenzione riservate agli operatori NCC contattare l'Info point Parcheggi ubicato al piano terra del Parcheggio Multipiano.
			</p>
		</div>

	</div>

</section>

<section id="prenota-parcheggio-2">
	<p class="title">Prenota la tua sosta in aeroporto</p>
	<?php get_component('form-parking', 'Calcola Preventivo', true); ?>

	<a href="#"><i class="icon icons-download-secondary"></i> Scarica il regolamento</a>
</section>

<section id="faq">
	<h2>FAQ Parcheggio</h2>

	<?php get_component('accordion', '', true); ?>
</section>

<?php
// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>