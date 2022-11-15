<?php
/**
 * In Partenza template
 */
?>

<section id="pagetitle" class="dark-mode in-partenza">

	<div class="col">
		<?php get_component('breadcrumbs', 'In Partenza', 'dark', true); ?>

		<h1 class="page-title">In Partenza</h1>
	</div>

</section>

<section id="in-partenza">
	<div class="tabs-v2">

		<ul class="tabs v2 fixed-titles">
			<!-- DESKTOP TAB TITLES -->
			<div class="desk-tabs-title v2 fixed-titles">
				<li class="active" data-menu-tab="#check-in"><a>Check In</a></li>
				<li data-menu-tab="#bagagli"><a>Bagagli</a></li>
				<li data-menu-tab="#controlli"><a>Controlli di sicurezza</a></li>
			</div>

			<!-- MOBILE TAB TITLE -->
			<li data-menu-tab="#check-in"><a>Check-in</a></li>

				<!-- PARTENZA CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content" id="check-in">
					<div class="content">
						<h2>Dove si effettua il Check-in?</h2>

						<p>
							L'area check-in è situata al piano terra del terminal ed ospita 55 banchi dedicati alle compagnie aeree presenti in aeroporto ed indicate sui monitor. Arrivati in aeroporto occorre verificare dai monitor il numero del banco check-in del tuo volo a cui rivolgerti per richiedere la carta d'imbarco e imbarcare bagagli. Il numero del banco compare almeno 2 ore prima della partenza. Se hai fatto il web check-in e porti solo bagaglio a mano, puoi recarti direttamente ai controlli di sicurezza al primo piano
						</p>

						<div class="row">
							<img src="<?php echo img_path('in-partenza/check-in.png'); ?>" alt="">

							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante pharetra massa diam. Tempus purus nisl, vel volutpat. Eu dapibus sed risus hac semper morbi. Malesuada felis convallis ac non. Cursus vel sapien pharetra facilisis. Justo morbi lacus quis eros amet arcu.
								Massa erat non placerat ut proin in. Adipiscing varius orci diam pharetra. Integer viverra ornare mattis neque, ultricies ut varius libero pulvinar. Lectus at habitasse auctor id neque. Sed facilisis.
							</p>
						</div>

						<h2>Cosa portare?</h2>

						<p>
							Al check-in occorre presentare il biglietto cartaceo o elettronico, un documento valido di identità, eventuali carte fedeltà e consegnare i bagagli da depositare nella stiva. Compiute queste operazioni, ti sarà consegnata la carta d'imbarco che indica il numero di posto assegnato a bordo, se prevista l'assegnazione del posto. E' necessario verificare il peso e le dimensioni dei bagagli consentiti dal sito ufficiale della compagnia aerea con la quale viaggi. Dimensioni e peso massimo variano secondo la compagnia aerea, la destinazione e la classe di prenotazione.
						</p>
					</div>
				</div>

			<!-- MOBILE TAB TITLE -->
			<li data-menu-tab="#bagagli"><a>Bagagli</a></li>

				<!-- PARTENZA CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content hidden" id="bagagli">
					<div class="content">
						<h2>Peso e misura del bagaglio</h2>

						<p>
							Peso e  dimensioni dei bagagli a mano e da stiva variano secondo la compagnia aerea, la destinazione e la classe di prenotazione. Ti suggeriamo di consultare la compagnia aerea con cui viaggerai o l'agenzia di viaggio per le necessarie indicazioni. Nel caso in cui il bagaglio superi i limiti stabiliti, ti potrebbe essere richiesto di pagare un costo aggiuntivo.
							Ti suggeriamo di apporre sempre sul tuo bagaglio una etichetta con i seguenti dati: nome, cognome, indirizzo, numero di telefono e, prima di assicurare il tuo bagaglio con lucchetti e cinghie di sicurezza informati se la compagnia prevede l'apertura del bagaglio nelle procedure di controllo.
						</p>

						<div class="row">
							<img src="<?php echo img_path('in-partenza/bagaglio.png'); ?>" alt="">

							<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante pharetra massa diam. Tempus purus nisl, vel volutpat. Eu dapibus sed risus hac semper morbi. Malesuada felis convallis ac non. Cursus vel sapien pharetra facilisis. Justo morbi lacus quis eros amet arcu.
							Massa erat non placerat ut proin in. Adipiscing varius orci diam pharetra. Integer viverra ornare mattis neque, ultricies ut varius libero pulvinar. Lectus at habitasse auctor id neque. Sed facilisis.
							</p>
						</div>

						<h2>Trasporto liquidi nel bagaglio a mano</h2>

						<p>
							Potrai trasportare nel bagaglio a mano esclusivamente contenitori, della capacità massima di 100 ml ciascuno, contenuti in un sacchetto trasparente chiuso, apribile al momento del controllo di sicurezza e richiudibile, di capacità non superiore ad un litro.
							I passeggeri dovranno tenere l'apposito sacchetto contenente i L.A.G. (Liquid, Aerosol and Gel) separato dal resto del bagaglio a mano e presentarlo al personale.
						</p>

						<p>
							Le limitazioni sui liquidi non si applicano a medicinali o alimenti per bambini per i quali si necessiti l'utilizzo durante il volo.
							È consentito inoltre, per i passeggeri in transito, il trasporto di articoli acquistati -entro le 24h- presso i Duty free di altri paesi, purché abbiano ben in vista la prova d'acquisto ed il sacchetto di plastica sia ancora sigillato.
						</p>
					</div>
				</div>

			<!-- MOBILE TAB TITLE -->
			<li data-menu-tab="#controlli"><a>Controlli di sicurezza</a></li>

				<!-- PARTENZA CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content hidden" id="controlli">
					<div class="content">
						<h2>Come avviene il controllo</h2>

						<p>
							I varchi di sicurezza sono situati al primo piano dell'aerostazione, raggiungibili con scale, scale mobili ed ascensore.<br>
							Dopo la lettura ottica della carta d'imbarco presso i tornelli, sarai indirizzato ai controlli di sicurezza dove riporrai negli appositi contenitori: soprabiti, cappelli, oggetti metallici dalle tasche, cinture, portafogli ed eventualmente le scarpe<br>
							Per agevolare i controlli presso i varchi di sicurezza, è necessario:
						</p>

						<ul>
							<li>Presentare la carta d'imbarco;</li>
							<li>Riporre giacca e soprabito nell'apposito contenitore della macchina radioscopica;</li>
							<li>Presentare agli addetti ai controlli di sicurezza il sacchetto contenente i liquidi trasportati nel bagaglio a mano (link ai liquidi);</li>
							<li>Estrarre dal bagaglio a mano i computer portatili e gli altri dispositivi elettronici di grande dimensione, al fine di consentire l'ispezione separatamente rispetto al bagaglio a mano.</li>
						</ul>

						<div class="row">
							<img src="<?php echo img_path('in-partenza/controlli.png'); ?>" alt="">

							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante pharetra massa diam. Tempus purus nisl, vel volutpat. Eu dapibus sed risus hac semper morbi. Malesuada felis convallis ac non. Cursus vel sapien pharetra facilisis. Justo morbi lacus quis eros amet arcu.
								Massa erat non placerat ut proin in. Adipiscing varius orci diam pharetra. Integer viverra ornare mattis neque, ultricies ut varius libero pulvinar. Lectus at habitasse auctor id neque. Sed facilisis.
							</p>
						</div>

						<h2>Novità dal 1° Settembre 2015</h2>

						<p>
							Dal 1° settembre in tutti gli aeroporti europei entra in vigore la nuova normativa sui controlli a campione.<br>
							Si tratta di controlli effettuati con apparecchiature che consentono di individuare particelle di esplosivo presenti sul passeggero e sul bagaglio a mano.<br>
							Pertanto, in alcune occasioni potrà essere richiesto ai passeggeri (scelti a campione) di essere sottoposti a tali controlli aggiuntivi.<br>
							L’Aeroporto Internazionale di Napoli ha previsto modifiche delle modalità di controllo al fine di limitare l'impatto in termini di tempi di attesa o ulteriori disagi ai passeggeri.
						</p>
					</div>
				</div>
		</ul>
	</div>
</section>

<section id="cards">
	<div class="cards-content">

		<div class="card-item">
			<div class="info">
				<h3>Viabilità in Aeroporto</h3>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suspendisse leo.
				</p>
			</div>

			<div class="icon-wrap icon-circle">
				<i class="icon icon-camera"></i>
			</div>
			
			<div class="icon-wrap icon-arrow">
				<i class="icon icon-arrow-right more"></i>
			</div>
		</div>

		<div class="card-item">
			<div class="info">
				<h3>Info Parcheggi</h3>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suspendisse leo.
				</p>
			</div>

			<div class="icon-wrap icon-circle">
				<i class="icon icon-parking-dark"></i>
			</div>

			<div class="icon-wrap icon-arrow">
				<i class="icon icon-arrow-right more"></i>
			</div>
		</div>

		<div class="card-item">
			<div class="info">
				<h3>Passeggeri a ridotta mobilità</h3>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum suspendisse leo.
				</p>
			</div>

			<div class="icon-wrap icon-circle">
				<i class="icon icon-wheelchair"></i>
			</div>

			<div class="icon-wrap icon-arrow">
				<i class="icon icon-arrow-right more"></i>
			</div>
		</div>
	</div>
</section>

<?php
// Include the section "Acquista Servizi"
include_section('acquista-servizi');

// Include the section "Blog" with latest news carousel
include_section('blog');

// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>