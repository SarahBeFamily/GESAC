<?php
/**
 * Tabs V3 component
 * - Eshop
 */

if ($include != true)
	$var = 'quatity';
?>

<div class="tabs-v3">
	<ul class="tabs v3">

		<!-- DESKTOP TAB TITLES -->
		<div class="desk-tabs-title v3">
			<li class="active" data-menu-tab="#step1"><a><span class="step">1</span> <?php echo $var2; ?></a></li>
			<li data-menu-tab="#step2"><a><span class="step">2</span> Inserisci i tuoi dati</a></li>
			<li data-menu-tab="#step3"><a><span class="step">3</span> Acquista</a></li>
		</div>

		<!-- MOBILE TAB TITLE -->
		<li data-menu-tab="#step1"><a><span class="step">1</span> <?php echo $var2; ?></a></li>

			<!-- STEP 1 CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v3-content" id="step1">
				
				<?php // Retrieve component based on variable previously called
				get_component($var, '', '', true); ?>
			</div>

		<!-- MOBILE TAB TITLE -->
		<li data-menu-tab="#step2"><a><span class="step">2</span> Inserisci i tuoi dati</a></li>

			<!-- STEP 2 CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v3-content hidden" id="step2">
				
				<form id="insert-data" action="">
					<input type="text" name="nome" id="nome" placeholder="Nome*" required>
					<input type="text" name="cognome" id="cognome" placeholder="Cognome*" required>
					<input type="text" name="indirizzo" id="indirizzo" placeholder="Indirizzo">
					<select name="paese" id="paese">
						<option value="">Paese</option>
						<option value="italia">Italia</option>
					</select>
					<input type="text" name="cap" id="cap" placeholder="CAP*" required>
					<input type="text" name="citta" id="citta" placeholder="Città">
					<select name="provincia" id="provincia">
						<option value="">Provincia</option>
						<option value="PD">Padova</option>
						<option value="CA">Cagliari</option>
					</select>
					<input type="text" name="telefono" id="telefono" placeholder="Telefono">
					<input type="email" name="email" id="email" placeholder="Email*" required>
					<input type="email" name="conferma-email" id="conferma-email" placeholder="Conferma Email" required>
					
					<div class="invoice-wrap">
						<label id="request-invoice">
							<input type="checkbox" name="fattura" class="invoice"> Richiedi fattura
						</label>

						<div class="invoice-fields hidden">
							<input type="text" name="azienda" id="azienda" placeholder="Ragione sociale o Nome e Cognome*" required>
							<select name="paese" id="paese">
								<option value="">Paese</option>
								<option value="italia">Italia</option>
							</select>
							<input type="text" name="cap-fattura" id="cap-fattura" placeholder="CAP*" required>
							<input type="text" name="citta-fattura" id="citta-fattura" placeholder="Città">
							<input type="text" name="iva-cf" id="iva-cf" placeholder="P.IVA/Cod.Fiscale*" required>
							<input type="text" name="indirizzo-fatturazione" id="indirizzo-fatturazione" placeholder="Indirizzo di fatturazione*" required>
							<input type="text" name="numero-fatturazione" id="numero-fatturazione" placeholder="Numero*" required>
							<input type="email" name="email-pec" id="email-pec" placeholder="Indirizzo email PEC">
							<input type="text" name="destinatario" id="destinatario" placeholder="Codice destinatario">
							<label>
								<input type="checkbox" name="spedizione" class="shipping">
								Indirizzo per la spedizione della fattura (se diverso da quello della fatturazione) 
							</label>

							<div class="shipping-fields hidden">
								<select name="paese-spedizione" id="paese-spedizione">
									<option value="">Paese</option>
									<option value="italia">Italia</option>
								</select>
								<input type="text" name="cap-spedizione" id="cap-spedizione" placeholder="CAP*" required>
								<input type="text" name="citta-spedizione" id="citta-spedizione" placeholder="Città">
								<input type="text" name="indirizzo-spedizione" id="indirizzo-spedizione" placeholder="Indirizzo di fatturazione*" required>
								<input type="text" name="numero-spedizione" id="numero-spedizione" placeholder="Numero*" required>
							</div>
						</div>
					</div>

					<div class="data-footer row between-content">
						<div class="data-info">
							<p>Altre informazioni</p>
							<ul>
								<li>Scopri le modalià di accesso al parcheggio <a href="#" class="link">Acquista Parcheggio</a></li>
								<li>Il PIN è fornito in seuito al pagamento</li>
							</ul>
						</div>
					
						<div class="data-consent">
							<label>
								<input type="checkbox" name="termini-condizioni" class="terms">
								Accetto <a href="#" class="link">Termini e Condizioni del servizio*</a>
							</label>

							<label>
								<input type="checkbox" name="info-marketing" class="marketing">
								Acconsento ad essere contattato per scopi di marketing ai Sensi del paragrafo 2.3. dell’<a href="#" class="link">Informativa Privacy</a>
							</label>

							<label>
								<input type="checkbox" name="info-comunicazioni" class="communications">
								Acconsento a ricevere comunicazioni commerciali basate sulle mie propensioni di Acquisti ai Sensi del Paragrafo 2.4 dell’<a href="#" class="link">Informativa Privacy</a>
							</label>
						</div>
					</div>

					<div class="buttons">
						<a href="#" class="button secondary border-only">Torna indietro</a>
						<input type="submit" class="submit" value="Continua">
					</div>
				</form>
			</div>

		<!-- MOBILE TAB TITLE -->
		<li data-menu-tab="#step3"><a><span class="step">3</span> Acquista</a></li>

			<!-- STEP 3 CONTENT MOBILE & DESKTOP -->
			<div class="tabs-v3-content hidden" id="step3">
				
				<div class="dati">
					Riepilogo dati
					<ul id="userdata">
						<li>Codice Ordine <a class="value">Lorem ipsum dolor sit</a></li>
						<li>Nome <a class="value">Lorem ipsum dolor sit</a></li>
						<li>Cognome <a class="value">Lorem ipsum dolor sit</a></li>
						<li>Indirizzo <a class="value">Lorem ipsum dolor sit</a></li>
						<li>Paese <a class="value">Lorem ipsum dolor sit</a></li>
						<li>CAP <a class="value">Lorem ipsum dolor sit</a></li>
						<li>Città <a class="value">Lorem ipsum dolor sit</a></li>
						<li>Provincia <a class="value">Lorem ipsum dolor sit</a></li>
						<li>Telefono <a class="value">Lorem ipsum dolor sit</a></li>
						<li>Email <a class="value">Lorem ipsum dolor sit</a></li>
					</ul>

					<div class="row end-content">
						<a href="#" class="button secondary w-icon btn-icon-edit-white">Modifica Dati</a>
					</div>
				</div>
				
				<div class="riepilogo-ordine">
					Riepilogo Ordine

					<!-- ORDER ITEM -->
					<div class="item parking">

						<div class="logo">
							<img src="<?php echo img_path('eshop/image-8.png'); ?>" alt="">
						</div>

						<div class="description">
							<h4>Capodichino Parking (Ultra Low Cost)</h4>

							<p class="parking-start">dal 21 Set 2022 19:00</p>
							<p class="parking-end">al 21 Set 2022 21:00</p>
						</div>

						<div class="edit-btn">
							<a href="#" class="button secondary border-only w-icon btn-icon-edit">Modifica</a>
						</div>

						<div class="remove-item">
							<span class="icon icon-trash-can"></span>
						</div>
											
						<span class="item-price">6,00€</span>
					</div>
					<!-- / ORDER ITEM -->

					<!-- ORDER ITEM -->
					<div class="item service">

						<div class="logo">
							<img src="<?php echo img_path('eshop/image-8.png'); ?>" alt="">
						</div>

						<div class="description">
							<h4>Fast Track</h4>

							<p>Dignissim semper duis ullamcorper cras fames.</p>
						</div>

						<div class="quantity">
							<div class="minus">
								<img src="<?php echo img_path('icons/icon-minus.svg'); ?>" alt="">
							</div>

							<div class="qty">1</div>

							<div class="plus">
								<img src="<?php echo img_path('icons/icon-plus.svg'); ?>" alt="">
							</div>
						</div>

						<div class="remove-item">
							<span class="icon icon-trash-can"></span>
						</div>

						<span class="item-price">7,00€</span>						
					</div>
					<!-- / ORDER ITEM -->

					<div class="resume-total">
						Totale <span id="order-total">13,00</span>€
					</div>
				</div>

				<div class="checkout">
					<a href="#" class="button secondary border-only">Acquista altri prodotti</a>
					<a href="#" class="button secondary">Vai al pagamento</a>
				</div>
			</div>
		
	</ul>
</div>