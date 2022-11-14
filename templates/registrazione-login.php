<?php
/**
 * Negozi / Ristoranti template
 */
?>

<section id="pagetitle" class="dark-mode">

	<div class="col">
		<?php get_component('breadcrumbs', 'Registrazione', 'dark', true); ?>

		<h1 class="page-title">Registrazione</h1>
	</div>

</section>

<section id="form-register">
	<p>
		Se sei già registrato clicca <a href="#" id="login" class="link">qui</a> per accedere.
	</p>

	<p>
		Password dimenticata? Clicca <a href="#" id="remember-password" class="link">qui</a> per recuperarla.
	</p>

	<form action="" id="register">
		<h2>Dati account</h2>

		<div class="row wrap account">
			<input type="text" name="username" placeholder="Username*" required>
			<input type="password" name="password" id="password" class="password" placeholder="Password*" required><i class="icon icon-hide-password toggle-password"></i>
			<input type="password" name="confirm-password" id="conf-password" class="password" placeholder="Conferma Password*" required><i class="icon icon-hide-password toggle-password"></i>
		</div>

		<h2>Dati anagrafici</h2>

		<div class="row wrap anagrafica">
			<input type="text" name="nome" placeholder="Nome*" required>
			<input type="text" name="cognome" id="cognome" placeholder="Cognome*" required>
			<input type="text" name="azienda" id="azienda" placeholder="Azienda">
			<select name="sesso" id="sesso" class="double-chevron" required>
				<option value="">Sesso</option>
				<option value="maschile">Maschile</option>
				<option value="femminile">Femminile</option>
				<option value="non-binario">Non Binario</option>
				<option value="non-definito">Preferisco non dirlo</option>
			</select>
			<input type="text" class="calendar" name="nascita" id="nascita" placeholder="Data di nascita*" required>
		</div>

		<h2>Recapiti</h2>

		<div class="row between-content wrap recapiti">
			<input type="text" name="indirizzo" id="indirizzo" placeholder="Indirizzo">
			<input type="text" name="civico" id="civico" placeholder="Civico">
			<input type="text" name="cap" id="cap" placeholder="CAP">
			<input type="text" name="citta" id="citta" placeholder="Città">
			<select name="provincia" id="provincia" class="double-chevron" required>
				<option value="">Provincia</option>
				<option value="PD">Padova</option>
				<option value="CA">Cagliari</option>
			</select>
			<select name="paese" id="paese" class="double-chevron" required>
				<option value="">Nazione</option>
				<option value="italia">Italia</option>
			</select>
			<input type="email" name="email" id="email" placeholder="Email*" required>
			<input type="email" name="conferma-email" id="conferma-email" placeholder="Conferma Email" required>
			<input type="text" name="cellulare" id="cellulare" placeholder="Cellulare">
		</div>

		<div class="row wrap">
			<div class="section-form closed">
				<p class="title">Fatturazione</p>
				
				<div class="fields">
					<input type="text" name="ragione-sociale" id="ragione-sociale" placeholder="Ragione sociale">
					<input type="text" name="iva-cf" id="iva-cf" placeholder="P.IVA/Cod.Fiscale">
					<input type="text" name="indirizzo-fatturazione" id="indirizzo-fatturazione" placeholder="Indirizzo di fatturazione">
					<input type="text" name="numero-fatturazione" id="numero-fatturazione" placeholder="Civico*">
					<input type="text" name="cap-fatturazione" id="cap-fatturazione" placeholder="CAP">
					<input type="text" name="citta-fatturazione" id="citta-fatturazione" placeholder="Città">
					<select name="provincia-fatturazione" id="provincia-fatturazione" class="double-chevron gray">
						<option value="">Provincia</option>
						<option value="FI">FI</option>
						<option value="PD">PD</option>
						<option value="CA">CA</option>
					</select>
					<select name="paese-fatturazione" id="paese-fatturazione" class="double-chevron gray">
						<option value="">Nazione</option>
						<option value="italia">Italia</option>
					</select>
					<input type="email" name="email-pec" id="email-pec" placeholder="Indirizzo email PEC">
					<input type="text" name="cod-destinatario" id="cod-destinatario" placeholder="Codice destinatario">
				</div>
			</div>

			<div class="section-form closed">
				<p class="title">Telepass</p>
				
				<div class="fields">
					<input type="text" name="targa" id="targa" placeholder="Targa">
					<input type="text" name="targa" id="targa" placeholder="Numero apparato Telepass">
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

		<div class="codice">
			<img src="<?php echo img_path('codice.png'); ?>" alt="">
		</div>

		<input type="text" name="codice-sicurezza" id="codice" placeholder="INSERISCI IL CODICE">
		<input type="submit" class="button secondary border-only" value="Registrati">
	</form>
</section>

<section id="login" class="row hidden">
	<form action="" id="login">
		<div class="row wrap internal-login">
			<input type="text" placeholder="Username o Email" required>
			<input type="password" placeholder="Password" value="" class="password" required><i class="icon icon-hide-password toggle-password"></i>
			<input type="submit" class="submit" value="Accedi">
			<a href="#" id="go-register" class="button secondary border-only mobile-only">Registrati</a>
		</div>

		<div class="other-login">
			<a href="#" id="remember-password" class="link pass-recovery">Non ricordo la password</a>

			oppure

			<div class="social-login">
				<a href="#"><i class="google-icon"></i>Continua con Google</a>
				<a href="#"><i class="facebook-icon"></i>Continua con Facebook</a>
				<a href="#"><i class="instagram-icon"></i>Continua con Instagram</a>
			</div>
		</div>
	</form>
</section>

<section id="recupera-password" class="hidden">
	<form action="" id="pass-recovery">
		<input type="email" placeholder="Email" required>
		<input type="submit" class="submit" value="Invia">
	</form>
</section>

<section id="register-ok" class="popup hidden">
	<div>
		<h3>Registrazione effettuata</h3>
		<p>
			Registrazione effettuata con successo. Controlla la tua casella di posta elettronica per attivare l'account.
		</p>

		<a href="#" id="close-popup" class="button primary">Chiudi</a>
	</div>
</section>

<?php
// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>