<?php
/**
 * Fidelity template
 */
?>

<section id="pagetitle" class="fidelity">
	<div class="col">
		<?php get_component('breadcrumbs', 'Fidelity Card', true); ?>

		<h1 class="page-title">Fidelity Card</h1>

		<div class="page-description">
			<p>Flyyou, il programma fedeltà per chi parte da Napoli
			è pensato per garantire a tutti i passeggeri sconti e vantaggi sul servizio Parking,
			Fast Track, Vip Lounge ed esperienze eno-gastronomiche.</p>
			
			<p>L'iscrizione al programma è gratuita e regala <strong>UN FAST TRACK OMAGGIO</strong> ai nuovi iscritti.</p>
		</div>

		<div class="row buttons">
			<a href="#" class="button secondary border-only">Registrati</a>

			<a href="#" class="button secondary">Accedi</a>
		</div>
	</div>
</section>

<section id="all-services">
	<h2 class="section-title">Un mondo di servizi</h2>

	<div class="row wrap around-content">

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('fidelity/Notifiche.svg'); ?>" alt="">
				</div>

				<p class="title">Notifiche push sul tuo volo</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('homepage/Wifi.svg'); ?>" alt="">
				</div>

				<p class="title">Banda Wifi dedicata</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('fidelity/FAST-Track.svg'); ?>" alt="">
				</div>

				<p class="title">FAST Track</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('fidelity/Parcheggi.svg'); ?>" alt="">
				</div>

				<p class="title">Parcheggio</p>
			</div>
		</div>

		<div class="item">
			<div class="item-icon">
				<div class="img-wrap">
					<img src="<?php echo img_path('fidelity/Gourmet.svg'); ?>" alt="">
				</div>

				<p class="title">Selezione gourmet</p>
			</div>
		</div>

	</div>

</section>

<section id="status">
	<h2>Accumula punti e cambia il tuo status</h2>

	<div class="row wrap">

		<div id="status-standard" class="item status">
			<img src="<?php echo img_path('fidelity/Status_standard.svg'); ?>" alt="">

			<div>
				<h3>Standard</h3>

				<div class="feature">
					<p><span class="numb">1</span></p>
					<p>FAST Track Gratuito</p>
				</div>
			</div>
		</div>

		<div id="status-executive" class="item status">
			<img src="<?php echo img_path('fidelity/Status_executive.svg'); ?>" alt="">

			<div>
				<h3>Executive</h3>

				<div class="feature">
					<p><span class="numb">1</span></p>
					<p>Colazione in aeroporto</p>
				</div>

				<div class="feature">
					<p><span class="numb">1</span></p>
					<p>Voucher di <strong>30€</strong> da spendere nei parcheggi</p>
				</div>
			</div>
		</div>

		<div id="status-privilege" class="item status">
			<img src="<?php echo img_path('fidelity/Status_privilege.svg'); ?>" alt="">

			<div>
				<h3>Privilege</h3>

				<div class="feature">
					<p><span class="numb">1</span></p>
					<p>Menù degustazione in aeroporto</p>
				</div>

				<div class="feature">
					<p><span class="numb">2</span></p>
					<p>Voucher di <strong>30€</strong> da spendere nei parcheggi</p>
				</div>
			</div>
		</div>

	</div>

</section>

<section id="howto">
	<div class="tabs-v2">

	<ul class="tabs">
		<!-- DESKTOP TAB TITLES -->
		<div class="desk-tabs-title">
			<li class="active" data-menu-tab="#come-iscriversi"><a>Come iscriversi</a></li>
			<li data-menu-tab="#come-funziona"><a>Come funziona</a></li>
			<li data-menu-tab="#sconti"><a>Sconti e Vantaggi</a></li>
			<li data-menu-tab="#status-gold"><a>Scopri lo status Gold</a></li>
		</div>

		<!-- MOBILE TAB TITLE -->
		<li data-menu-tab="#come-iscriversi"><a>Come iscriversi</a></li>

			<!-- PARTENZA CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v2-content" id="come-iscriversi">

				<div class="content row wrap --half">
					
					<div class="col">
						<h3><img src="<?php echo img_path('fidelity/smartphone.svg'); ?>" alt="">Smartphone</h3>

						<ol>
							<li>Accedi allo store del tuo dispositivo Installa l’App
								<div>
									<a href="#"><img src="<?php echo img_path('googleplay.png'); ?>" alt=""></a>
									<a href="#"><img src="<?php echo img_path('appstore.png'); ?>" alt=""></a>
								</div>
							</li>
							<li>Accedi al menu in alto a sinistra</li>
							<li>Seleziona “registrazione”</li>
							<li>Inserisci i dati richiesti</li>
							<li>Conferma l’iscrizione cliccando sul tasto “Registrati”</li>
							<li>Clicca sull’apposito link che riceverai all’indirizzo email che hai comunicato</li>
						</ol>

					</div>

					<div class="col">
						<h3><img src="<?php echo img_path('fidelity/desktop.svg'); ?>" alt="">Computer</h3>

						<p>
							Puoi iscriverti al programma fedeltà “FlyYou” anche dal <a href="#" class="link">sito dell’Aeroporto 
							di Napoli</a> e seguendo poche semplici istruzioni:
						</p>

						<ol>
							<li>Seleziona “registrazione”</li>
							<li>Inserisci i dati richiesti</li>
							<li>Seleziona “registrazione”</li>
							<li>Inserisci i dati richiesti</li>
							<li>Conferma l’iscrizione cliccando sul tasto “Registrati”</li>
							<li>Clicca sull’apposito link che riceverai all’indirizzo email che hai comunicato</li>
						</ol>

					</div>
				</div>

			</div>

		<!-- MOBILE TAB TITLE -->	
		<li data-menu-tab="#come-funziona"><a>Come funziona</a></li>

			<!-- ARRIVO CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v2-content hidden" id="come-funziona">
				<div class="content">
					<p>
						“FlyYou” prevede la possibilità di accumulare punti Parking effettuando <strong>soste ai parcheggi ufficiali</strong> dell’Aeroporto di Napoli oppure punti Volo <strong>acquistando biglietti aerei</strong> con partenza <strong>da Napoli</strong>.
					</p>

					<div class="line-divider"></div>
					
					<div class="row wrap --third between-content">

						<div class="col">
							<h3><img src="<?php echo img_path('fidelity/punti.svg'); ?>" alt="">Come utilizzo i punti</h3>

							<p>
								I punti saranno caricati sulla tua card virtuale disponibile sull’App del tuo smartphone.
								In caso di indisponibilità dello smartphone, potrai stampare la tua card virtuale da qualunque PC o presso gli infopoint presenti in aeroporto, accedendo al programma fedeltà dal tuo profilo personale. Utilizza i tuoi voucher
								presso: esercizi commerciali, casse automatiche dei parcheggi, sala vip “Caruso”, Fast track.
							</p>
						</div>

						<div class="col">
							<h3><img src="<?php echo img_path('fidelity/plane-stroke.svg'); ?>" alt="">Punti Volo</h3>

							<div>
								Per caricare i punti Volo dovrai utilizzare la funzione “MyFlight” dal menù dell’App Aeroporto di Napoli che ti consente di registrare il codice BARCODE delle tue carte d’imbarco.
								Potrai effettuare l’operazione in due differenti modalità sia prima del viaggio aereo che dopo:

								<ol>
									<li>Fotografa il barcode della tua carta d’imbarco dalla funzione “MyFlight” dell’App</li>
									<li>Scegli dalla galleria foto dello smartphone l’immagine del barcode della tua carta d’imbarco</li>
								</ol>
							</div>
						</div>

						<div class="col">
							<h3><img src="<?php echo img_path('fidelity/parking-2.svg'); ?>" alt="">Punti Parking</h3>

							<div>
								Recati presso le casse automatiche

								<ol>
									<li>Inserisci il ticket della sosta</li>
									<li>Effettua la scansione del QR code della tua card tramite l’apposito lettore</li>
									<li>Procedi al pagamento</li>
								</ol>

								In caso di pagamento con <strong>Telepass</strong>, il caricamento dei punti avverrà automaticamente se hai comunicato il codice dell’apparato all’atto della registrazione al programma fedeltà.
								In caso di acquisto Parcheggi dall'<strong>eshop</strong> dell'Aeroporto di Napoli: il caricamento dei punti avviene semplicemente loggandosi con le credenziali fidelity.  
							</div>
						</div>

					</div>
				</div>
			</div>

		<!-- MOBILE TAB TITLE -->
		<li data-menu-tab="#sconti"><a>Sconti e Vantaggi</a></li>

			<!-- PARTIRE CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v2-content hidden" id="sconti">
				<div class="content">

					<h3><img src="<?php echo img_path('fidelity/posate.svg'); ?>" alt="">Food e Beverage</h3>

					<div class="row wrap --third between-content">

						<div class="col">
							<div class="inner">
								<img class="logo" src="<?php echo img_path('fidelity/ristorante-1.png'); ?>" alt="">
								<div>
									<p class="cat">RISTORANTE (Prossima apertura)</p>

									<p class="title">San Gregorio</p>

									<p>Menù degustazione</p>
									<p class="punti"><span id="n-punti">500</span> Punti</p>
								</div>
							</div>

							<div class="type privilege">
								Omaggio per Privilege
							</div>
						</div>

						<div class="col">
							<div class="inner">
								<img class="logo" src="<?php echo img_path('fidelity/bar-1.png'); ?>" alt="">
								<div>
									<p class="cat">BAR</p>

									<p class="title">Tradizione italiana</p>

									<p>Una gustosa colazione</p>
								</div>
							</div>

							<div class="type executive">
								Omaggio per Executive
							</div>
						</div>

						<div class="col">
							<div class="inner">
								<img class="logo" src="<?php echo img_path('fidelity/bar-1.png'); ?>" alt="">
								<div>
									<p class="cat">BAR</p>

									<p class="title">Tradizione italiana</p>

									<p>Una gustosa colazione</p>
								</div>
							</div>

							<div class="type executive">
								Omaggio per Executive
							</div>
						</div>

						<div class="col">
							<div class="inner">
								<img class="logo" src="<?php echo img_path('fidelity/ristorante-1.png'); ?>" alt="">
								<div>
									<p class="cat">RISTORANTE (Prossima apertura)</p>

									<p class="title">San Gregorio</p>

									<p>Menù degustazione</p>
									<p class="punti"><span id="n-punti">500</span> Punti</p>
								</div>
							</div>

							<div class="type privilege">
								Omaggio per Privilege
							</div>
						</div>

						<div class="col">
							<div class="inner">
								<img class="logo" src="<?php echo img_path('fidelity/bar-1.png'); ?>" alt="">
								<div>
									<p class="cat">BAR</p>

									<p class="title">Tradizione italiana</p>

									<p>Una gustosa colazione</p>
								</div>
							</div>

							<div class="type executive">
								Omaggio per Executive
							</div>
						</div>

						<div class="col">
							<div class="inner">
								<img class="logo" src="<?php echo img_path('fidelity/bar-1.png'); ?>" alt="">
								<div>
									<p class="cat">BAR</p>

									<p class="title">Tradizione italiana</p>

									<p>Una gustosa colazione</p>
								</div>
							</div>

							<div class="type executive">
								Omaggio per Executive
							</div>
						</div>

					</div>
				</div>
			</div>

		<!-- MOBILE TAB TITLE -->
		<li data-menu-tab="#status-gold"><a>Scopri lo status Gold</a></li>

			<!-- PARTIRE CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v2-content hidden" id="status-gold">

				<div class="content">
					<div class="row wrap">

						<div class="col">
							<h3><img src="<?php echo img_path('fidelity/carta.svg'); ?>" alt="">Carta Gold</h3>

							<ol>
								<li>Accesso gratuito illimitato al Fast Track</li>
								<li>Sconto del <strong>30%</strong> al <strong>P1</strong> e del <strong>52%</strong> al <strong>PARCHEGGIO P3</strong> con pagamento alle casse automatiche ubicate in area arrivi in aeroporto e in aggiunta il <strong>30%</strong> su tutte le tariffe on line</li>
							</ol>

							<p>Acquistala a soli <strong>200€</strong> on line.</p>

							<p>Leggi il Regolamento e vai su eshop.aeroportodinapoli.it</p>
						</div>

						<div class="col">
							<img src="<?php echo img_path('fidelity/Card-Gold.png'); ?>" alt="">
						</div>

					</div>
				</div>
			</div>

	</ul>
	</div>

	<div class="row center-content">
		<a href="#" class="link">Leggi il regolamento</a>

		<a href="#" class="button secondary border-only">Registrati</a>

		<a href="#" class="button secondary">Accedi</a>
	</div>
</section>

<?php 
// Include the cta section "General"
include_section('cta-general', 'add-services', 'Scopri i Servizi aggiuntivi', 'eShop');

// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>