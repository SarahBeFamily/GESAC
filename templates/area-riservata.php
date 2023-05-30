<?php
/**
 * Negozi / Ristoranti template
 */
?>

<section id="pagetitle" class="dark-mode">

	<div class="col">
		<?php get_component('breadcrumbs', 'Area Riservata', 'dark', true); ?>

		<h1 class="page-title">Area Riservata</h1>
	</div>

</section>

<section id="area-riservata">
	<div class="tabs-v2">

		<ul class="tabs v2-c">
			<!-- DESKTOP TAB TITLES -->
			<div class="desk-tabs-title v2-c">
				<li class="active" data-menu-tab="#fidelity"><a>Fidelity Card</a></li>
				<li data-menu-tab="#vantaggi"><a>Vantaggi acquisiti</a></li>
				<li data-menu-tab="#attivita"><a>Riepilogo attività</a></li>
				<li data-menu-tab="#profilo"><a>Il mio profilo</a></li>
			</div>

			<!-- MOBILE TAB TITLE -->
			<div class="ul-mobile mobile-only">
				<div>
					<li class="active" data-menu-tab="#fidelity"><a>Fidelity Card</a></li>
					<li data-menu-tab="#vantaggi"><a>Vantaggi acquisiti</a></li>
					<li data-menu-tab="#attivita"><a>Riepilogo attività</a></li>
					<li data-menu-tab="#profilo"><a>Il mio profilo</a></li>
				</div>
			</div>

			<!-- FIDELITY CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v2-content v2-c starter" id="fidelity">

				<div class="row wrap between-content">
					<div class="col">
						<div class="title">Titolare Carta</div>
						<div class="data">
							Nome Cognome
						</div>
					</div>

					<div class="col">
						<div class="title">Codice ID</div>
						<div class="data">
							xxxxxxxxxxxxxxxxxx
						</div>
					</div>

					<div class="col">
						<div class="title">Scadenza programma</div>
						<div class="data">
							xx/xx/xxxx
						</div>
					</div>

				</div>
					
				<div class="col saldo-punti">
					<div class="info">
						<p class="saldo">Saldo Punti: <span class="points">400</span></p>
						<p>Mancano <span class="points-left">30 punti</span> per lo status Premium</p>
					</div>
					
					<div class="status">
						<p class="title">Acquista lo Status Gold</p>
						<p>Usufruisci dei suoi vantaggi</p>
					</div>
				</div>

				<div class="row wrap between-content">

					<div class="col">
						<div class="title">Status</div>
						<div class="data">
							Nome tipologia status
						</div>
					</div>

					<div class="col">
						<div class="title">Dal</div>
						<div class="data">
							xx/xx/xxxx
						</div>
					</div>

					<div class="col">
						<div class="title">Scadenza Status</div>
						<div class="data">
							xx/xx/xxxx
						</div>
					</div>

				</div>

				<div class="row wrap between-content">

					<div class="col">
						<div class="title">Nr. Voli effettuati</div>
						<div class="data">
							xx
						</div>
					</div>

					<div class="col">
						<div class="title">Nr. Voli per status executive</div>
						<div class="data">
							xx
						</div>
					</div>

					<div class="col">
						<div class="title">€ in parcheggi</div>
						<div class="data">
							xx
						</div>
					</div>

					<div class="col">
						<div class="title">€ in parcheggi per status executive</div>
						<div class="data">
							xx
						</div>
					</div>

				</div>

				<div class="footer">
					<div class="row wrap qr-code">
						<p>QR Code</p>
						<img src="<?php echo img_path('qr.png'); ?>" alt="">
					</div>

					<div class="row wrap">
						<a href="#" class="button secondary">Download</a>
						<a href="#" class="button secondary">Stampa Carta</a>
					</div>
				</div>

			</div>

			<!-- VANTAGGI CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v2-content v2-c hidden" id="vantaggi">

				<div class="row filter">
					<select name="voucher" id="voucher" class="double-chevron gray" required>
						<option value="">Tipologia di voucher</option>
						<option value="1">1</option>
					</select>
				</div>

				<div class="row wrap data-vantaggi">

					<div class="row wrap titles">
						<div class="col code">Codice</div>
						<div class="col service">Servizio</div>
						<div class="col status">
							<span>Stato</span>
							<span>Scadenza</span>
						</div>
					</div>

					<div class="info-data">
						<div class="row">
							<div class="col code">xxxxxx <br>lorem ipsum</div>

							<div class="col service">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque eget cum in sed morbi. Id mauris vulputate mattis convallis aliquam. Sed sed.
							</div>

							<div class="col status-expiry">
								<p class="status">
									<span><span class="active"></span> Attivo</span>
								</p>
								<p class="expiry-date">
									xx/xx/xxxx
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col code">xxxxxx <br>lorem ipsum</div>

							<div class="col service">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque eget cum in sed morbi. Id mauris vulputate mattis convallis aliquam. Sed sed.
							</div>

							<div class="col status-expiry">
								<p class="status">
									<span><span class="active"></span> Attivo</span>
								</p>
								<p class="expiry-date">
									xx/xx/xxxx
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col code">xxxxxx <br>lorem ipsum</div>

							<div class="col service">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque eget cum in sed morbi. Id mauris vulputate mattis convallis aliquam. Sed sed.
							</div>

							<div class="col status-expiry">
								<p class="status">
									<span><span class="expired"></span> Scaduto</span>
								</p>
								<p class="expiry-date">
									xx/xx/xxxx
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col code">xxxxxx <br>lorem ipsum</div>

							<div class="col service">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque eget cum in sed morbi. Id mauris vulputate mattis convallis aliquam. Sed sed.
							</div>

							<div class="col status-expiry">
								<p class="status">
									<span><span class="expired"></span> Scaduto</span>
								</p>
								<p class="expiry-date">
									xx/xx/xxxx
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col code">xxxxxx <br>lorem ipsum</div>

							<div class="col service">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque eget cum in sed morbi. Id mauris vulputate mattis convallis aliquam. Sed sed.
							</div>

							<div class="col status-expiry">
								<p class="status">
									<span><span class="expired"></span> Scaduto</span>
								</p>
								<p class="expiry-date">
									xx/xx/xxxx
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col code">xxxxxx <br>lorem ipsum</div>

							<div class="col service">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque eget cum in sed morbi. Id mauris vulputate mattis convallis aliquam. Sed sed.
							</div>

							<div class="col status-expiry">
								<p class="status">
									<span><span class="expired"></span> Scaduto</span>
								</p>
								<p class="expiry-date">
									xx/xx/xxxx
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col code">xxxxxx <br>lorem ipsum</div>

							<div class="col service">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque eget cum in sed morbi. Id mauris vulputate mattis convallis aliquam. Sed sed.
							</div>

							<div class="col status-expiry">
								<p class="status">
									<span><span class="expired"></span> Scaduto</span>
								</p>
								<p class="expiry-date">
									xx/xx/xxxx
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- RIEPILOGO ATTIVITA' CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v2-content v2-c hidden" id="attivita">

				<div class="row filter">
					<form action="">
						<div class="input-wrapper --calendar -right">
							<input class="calendar" type="text" name="from" placeholder="Dal">
						</div>

						<div class="input-wrapper --calendar -right">
							<input class="calendar" type="text" name="to" placeholder="Al">
						</div>

						<input type="text" name="esercente" placeholder="Esercente">

						<select name="punti" id="punti" class="double-chevron gray" required>
							<option value="">Tipologia punti</option>
							<option value="1">1</option>
						</select>

						<input type="submit" class="submit" value="FILTRA">
					</form>
				</div>

				<div class="row wrap data-attivita">
					<div class="row wrap titles">
						<div class="col">
							<span class="type">Tipologia</span>
							<span class="timetable">Data</span>
							<span class="brand">Esercente</span>
						</div>
						
						<div class="col points">Punti</div>

						<div class="col">
							<span class="total-points">Punti totali</span>
							<span class="category">Categoria</span>
						</div>
					</div>

					<div class="info-data">
						<div class="row">
							<div class="col">
								<div class="type">Lorem ipsum dolor sit</div>
								<div class="timetable">xx/xx/xxxx</div>
								<div class="brand">Lorem ipsum dolor sit</div>
							</div>
							
							<div class="col points">xx</div>

							<div class="col">
								<div class="total-points">xx</div>
								<div class="category">Lorem ipsum dolor sit</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="type">Lorem ipsum dolor sit</div>
								<div class="timetable">xx/xx/xxxx</div>
								<div class="brand">Lorem ipsum dolor sit</div>
							</div>
							
							<div class="col points">xx</div>

							<div class="col">
								<div class="total-points">xx</div>
								<div class="category">Lorem ipsum dolor sit</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="type">Lorem ipsum dolor sit</div>
								<div class="timetable">xx/xx/xxxx</div>
								<div class="brand">Lorem ipsum dolor sit</div>
							</div>
							
							<div class="col points">xx</div>

							<div class="col">
								<div class="total-points">xx</div>
								<div class="category">Lorem ipsum dolor sit</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="type">Lorem ipsum dolor sit</div>
								<div class="timetable">xx/xx/xxxx</div>
								<div class="brand">Lorem ipsum dolor sit</div>
							</div>
							
							<div class="col points">xx</div>

							<div class="col">
								<div class="total-points">xx</div>
								<div class="category">Lorem ipsum dolor sit</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="type">Lorem ipsum dolor sit</div>
								<div class="timetable">xx/xx/xxxx</div>
								<div class="brand">Lorem ipsum dolor sit</div>
							</div>
							
							<div class="col points">xx</div>

							<div class="col">
								<div class="total-points">xx</div>
								<div class="category">Lorem ipsum dolor sit</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="type">Lorem ipsum dolor sit</div>
								<div class="timetable">xx/xx/xxxx</div>
								<div class="brand">Lorem ipsum dolor sit</div>
							</div>
							
							<div class="col points">xx</div>

							<div class="col">
								<div class="total-points">xx</div>
								<div class="category">Lorem ipsum dolor sit</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="type">Lorem ipsum dolor sit</div>
								<div class="timetable">xx/xx/xxxx</div>
								<div class="brand">Lorem ipsum dolor sit</div>
							</div>
							
							<div class="col points">xx</div>

							<div class="col">
								<div class="total-points">xx</div>
								<div class="category">Lorem ipsum dolor sit</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="type">Lorem ipsum dolor sit</div>
								<div class="timetable">xx/xx/xxxx</div>
								<div class="brand">Lorem ipsum dolor sit</div>
							</div>
							
							<div class="col points">xx</div>

							<div class="col">
								<div class="total-points">xx</div>
								<div class="category">Lorem ipsum dolor sit</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- VANTAGGI CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v2-content v2-c hidden" id="profilo">
				<div class="info-data">
					<form action="" id="userdata">
						<h2>Dati account</h2>

						<div class="row wrap account">
							<label>
								Username*
								<input type="text" name="username" placeholder="Username*" value="mariorossi" required>
							</label>
							<label>
								Password*
								<input type="password" name="password" id="password" class="password" placeholder="Password*" value="passwordsalvata" required><i class="icon icon-hide-password toggle-password"></i>
							</label>
							<label>
								Conferma password*
								<input type="password" name="confirm-password" id="conf-password" class="password" placeholder="Conferma Password*" value="passwordsalvata" required><i class="icon icon-hide-password toggle-password"></i>
							</label>
						</div>

						<h2>Dati anagrafici</h2>

						<div class="row wrap anagrafica">
							<label for="nome">
								Nome*
								<input type="text" name="nome" placeholder="Nome*" value="Mario" required>
							</label>

							<label for="cognome">
								Cognome*
								<input type="text" name="cognome" id="cognome" placeholder="Cognome*" value="Rossi" required>
							</label>
							
							<label for="azienda">
								Azienda
								<input type="text" name="azienda" id="azienda" placeholder="Azienda" value="xxxxxxxxxxxxxxxxx">
							</label>

							<label for="sesso">
								Sesso
								<select name="sesso" id="sesso" class="double-chevron gray" required>
									<option value="">Sesso</option>
									<option value="maschile" selected="selected">Maschile</option>
									<option value="femminile">Femminile</option>
									<option value="non-binario">Non Binario</option>
									<option value="non-definito">Preferisco non dirlo</option>
								</select>
							</label>
							
							<label for="nascita">
								Data di nascita*
								<input type="date" class="calendar" name="nascita" id="nascita" value="1986-07-05" required>
							</label>
						</div>

						<h2>Recapiti</h2>

						<div class="row wrap recapiti">
							<label for="indirizzo">
								Indirizzo
								<input type="text" name="indirizzo" id="indirizzo" placeholder="Indirizzo" value="Via della Repubblica">
							</label>

							<label for="civico">
								Civico
								<input type="text" name="civico" id="civico" placeholder="Civico" value="45">
							</label>
							
							<label for="cap">
								CAP
								<input type="text" name="cap" id="cap" placeholder="CAP" value="10135">
							</label>
							
							<label for="citta">
								Città
								<input type="text" name="citta" id="citta" placeholder="Città" value="Firenze">
							</label>
							
							<label for="provicia">
								Provincia
								<select name="provincia" id="provincia" class="double-chevron gray" required>
									<option value="">Provincia</option>
									<option value="FI" selected="selected">FI</option>
									<option value="PD">PD</option>
									<option value="CA">CA</option>
								</select>
							</label>

							<label for="paese">
								Nazione
								<select name="paese" id="paese" class="double-chevron gray" required>
									<option value="">Nazione</option>
									<option value="italia" selected="selected">Italia</option>
								</select>
							</label>
							
							<label for="email">
								Email*
								<input type="email" name="email" id="email" placeholder="Email*" value="mariorossi@gmail.com" required>
							</label>
							
							<label for="cellulare">
								Cellulare
								<input type="text" name="cellulare" id="cellulare" placeholder="Cellulare" value="+39 3334578903">
							</label>
						</div>

						<div class="row wrap">
							<div class="section-form closed">
								<p class="title">Fatturazione</p>
								
								<div class="fields">
									<label for="ragione-sociale">
										Ragione Sociale
										<input type="text" name="ragione-sociale" id="ragione-sociale" placeholder="Ragione sociale" value="xxxxxxxxxxxxxxxxx">
									</label>

									<label for="iva-cf">
										P.IVA/Cod.Fiscale
										<input type="text" name="iva-cf" id="iva-cf" placeholder="P.IVA/Cod.Fiscale" value="xxxxxxxxxxxxxxxxx">
									</label>

									<label for="indirizzo-fatturazione">
										Indirizzo di fatturazione
										<input type="text" name="indirizzo-fatturazione" id="indirizzo-fatturazione" placeholder="Indirizzo di fatturazione" value="xxxxxxxxxxxxxxxxx">
									</label>

									<label for="numero-fatturazione">
										Civico
										<input type="text" name="numero-fatturazione" id="numero-fatturazione" placeholder="Civico*" value="xxx">
									</label>

									<label for="cap-fatturazione">
										CAP
										<input type="text" name="cap-fatturazione" id="cap-fatturazione" placeholder="CAP" value="xxxxx">
									</label>
									
									<label for="citta-fatturazione">
										Città
										<input type="text" name="citta-fatturazione" id="citta-fatturazione" placeholder="Città" value="Firenze">
									</label>
									
									<label for="provicia-fatturazione">
										Provincia
										<select name="provincia-fatturazione" id="provincia-fatturazione" class="double-chevron gray">
											<option value="">Provincia</option>
											<option value="FI" selected="selected">FI</option>
											<option value="PD">PD</option>
											<option value="CA">CA</option>
										</select>
									</label>

									<label for="paese-fatturazione">
										Nazione
										<select name="paese-fatturazione" id="paese-fatturazione" class="double-chevron gray">
											<option value="">Nazione</option>
											<option value="italia" selected="selected">Italia</option>
										</select>
									</label>
									
									<label for="email">
										Indirizzo email PEC
										<input type="email" name="email-pec" id="email-pec" placeholder="Indirizzo email PEC" value="mariorossi@pec.it">
									</label>

									<label for="cod-destinatario">
										Codice destinatario
										<input type="text" name="cod-destinatario" id="cod-destinatario" placeholder="Codice destinatario" value="xxxxxxx">
									</label>
								</div>
							</div>

							<div class="section-form closed">
								<p class="title">Telepass</p>
								
								<div class="fields">
									<label for="targa">
										Targa
										<input type="text" name="targa" id="targa" placeholder="Targa" value="xxxxxx">
									</label>

									<label for="telepass">
										Numero apparato Telepass
										<input type="text" name="targa" id="targa" placeholder="Numero apparato Telepass" value="xxxxxx">
									</label>
								</div>
							</div>			
						</div>

						<div class="privacy">
							<p class="priv">Leggi informativa <a href="#" class="link">Privacy</a></p>

							<label for="privacy-si">
								<input type="checkbox" name="privacy-si" id="privacy-si"> 
								Ho letto l'informativa resa ai sensi dell'art. 13 GDPR * e:
							</label>

							<div class="row privacy-marketing">
								<label><input type="radio" name="marketing" value="do"> Do</label>
								<label><input type="radio" name="marketing" value="nego"> Nego</label>
							</div>

							<p>
								il consenso al trattamento dei dati personali da parte di GESAC, per le finalità di marketing specificate al punto 11.3 della presente informativa, anche mediante modalità di
								contatto di tipo automatizzato (sms, email) o tradizionale (telefono con operatore), con avvertenza che in qualsiasi momento potrò ritirare il consenso anche in via parziale,
								ad esempio nei riguardi delle sole modalità di contatto automatizzate.
							</p>

							<div class="row privacy-profilazione">
								<label><input type="radio" name="profilazione" value="do"> Do</label>
								<label><input type="radio" name="profilazione" value="nego"> Nego</label>
							</div>

							<p>
								il consenso al trattamento dei dati personali da parte di GESAC, per le finalità di profilazione di cui al punto 11.4 della presente informativa (profilazione delle abitudini e
								propensioni di acquisto, con riferimento alle informazioni acquisite tramite Web e App, al fine di migliorare i servizi offerti dalla Società sulla base della definizione di profili
								individuali o di gruppo).
							</p>
							
						</div>

						<div class="fidelity">
							<p class="title">Programma Fedeltà <span>FlyYou</span></p>

							<p>Prima di procedere alla registrazione leggi <a href="#" class="link">come gestire i tuoi punti</a></p>

							<label for="fidelity">
								<input type="checkbox" name="fidelity" id="fidelity">
								Ho preso visione del <a href="#" class="link">regolamento programma fedeltà</a>
							</label>
						</div>

						<input type="submit" class="button secondary" value="Salva">
						<a href="#" class="link">Desidero cancellare la mia sottoscrizione al Programma Fedeltà FlyYou</a>
					</form>
				</div>
			</div>
		</ul>
	</div>
</section>

<?php
// Include the section "Acquista Servizi"
include_section('acquista-servizi');

// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>