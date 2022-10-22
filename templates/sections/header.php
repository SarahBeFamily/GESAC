<?php
/**
 * Header Template
 */
?>

<header>

	<!-- ROW NEWS STARTS -->
	<div class="row-news">
		<div class="title">
			Ultime Notizie: 
		</div>
		<div class="marquee news">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas facilisi eget dictum lectus enim. Sapien facilisi adipiscing ac aliquam maecenas.    -    Sapien facilisi adipiscing ac aliquam maecenas. 
		</div>
	</div>
	<!-- / ROW NEWS ENDS -->

	<!-- ROW MAIN HEADER STARTS -->
	<div class="row-main">

		<div class="logo-wrap">
			<img src="<?php echo img_path('gesac-logo-w.png'); ?>" alt="Logo">
		</div>

		<div id="primary-menu-tab">

			<!-- MENU WITH TABS DESKTOP ONLY -->
			<ul class="menu-tabs menu">
				<li class="active" data-menu-tab="#passeggero">Passeggero</li>
				<li data-menu-tab="#corporate">Corporate</li>
				<li data-menu-tab="#business">Per il Business</li>
				<li data-menu-tab="#aeroporto">Aeroporto di Salerno-Costa D'Amalfi</li>
			</ul>

			<ul class="menu-tab-content menu" id="passeggero">
				<li class="have-megamenu flights">
					<span class="ul-title">Voli</span>

					<!-- MEGAMENU STARTS -->
					<div class="megamenu-wrap">
						<div class="megamenu">
							<div class="inner">
								<ul class="menu">
									<li><a href="#">Partenze in tempo reale</a></li>
									<li><a href="#">Arrivi in tempo reale</a></li>
									<li><a href="#">Voli diretti</a></li>
									<li><a href="#">Acquista Volo</a></li>
								</ul>
							</div>

							<div class="megamenu-footer">
								<ul class="menu">
									<li><a href="#">Link</a></li>
									<li><a href="#">Link</a></li>
									<li><a href="#">Link</a></li>
									<li><a href="#">Link</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- / MEGAMENU ENDS -->
				</li>
				<li class="have-megamenu parking"><span>Parcheggio</span></li>
				<li class="have-megamenu transport"><span>Trasporti</span></li>
				<li class="have-megamenu shop"><span>Shop & Eat</span></li>
				<li class="have-megamenu info"><span>Info e Servizi</span></li>
				<li class="have-megamenu customercare"><span>Assistenza Clienti</span></li>
			</ul>

			<ul class="menu-tab-content menu hidden" id="corporate">
				<li class="have-megamenu societa">
					<span>Società di gestione</span>

					<!-- MEGAMENU STARTS -->
					<div class="megamenu-wrap">
						<div class="megamenu">
							<div class="inner">

								<div class="col">
									<p class="menu-title">Società di Gestione</p>

									<ul class="menu">
										<li><a href="#">Chi siamo</a></li>
										<li><a href="#">La storia</a></li>
										<li><a href="#">Struttura organizzativa</a></li>
									</ul>
								</div>

								<div class="col">
									<p class="menu-title">Governance</p>

									<ul class="menu">
										<li><a href="#">Organi societari</a></li>
										<li><a href="#">Modello di organizzazione</a></li>
										<li><a href="#">Certificazione e standard</a></li>
										<li><a href="#">Bilanci</a></li>
										<li><a href="#">Whistleblowing</a></li>
									</ul>
								</div>

								<div class="col">
									<p class="menu-title">L'aeroporto in cifre</p>

									<ul class="menu">
										<li><a href="#">Dati di traffico</a></li>
										<li><a href="#">Dati di pista</a></li>
										<li><a href="#">Dati di scalo</a></li>
										<li><a href="#">Date, fatti e curiosità</a></li>
									</ul>
								</div>
							</div>

							<div class="megamenu-footer">
								<ul class="menu">
									<li><a href="#">Link</a></li>
									<li><a href="#">Link</a></li>
									<li><a href="#">Link</a></li>
									<li><a href="#">Link</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- / MEGAMENU ENDS -->
				</li>
				<li class="have-megamenu sustainability"><span>Sostenibilità</span></li>
				<li class="have-megamenu hr"><span>Risorse umane</span></li>
				<li class="have-megamenu quality"><span>Qualità</span></li>
				<li class="have-megamenu press"><span>Area stampa</span></li>
			</ul>
		</div>

		<div class="menu-icons">
			<div class="row-lang">

				<a class="lang current">
					<img src="<?php echo img_path('header/ita-flag.svg'); ?>" alt="" class="flag">
					<span class="label">ITA</span>
				</a>

			</div>

			<div class="icons">

				<a href="#" class="disability">
					<img src="<?php echo img_path('header/disabilita.svg'); ?>" alt="">
				</a>
				<a href="#" class="user">
					<img src="<?php echo img_path('header/utente.svg'); ?>" alt="">
				</a>

					<!-- LOGIN MENU STARTS -->
					<div class="login-header-panel hidden">
						<p>Login area riservata fidelity</p>

						<form id="login" action="">
							<input type="text" placeholder="Username o Email" required>
							<input type="password" placeholder="Password" required>
							<input type="submit" class="submit" value="Accedi">
						</form>

						<a href="#" class="button register">Registrati</a>

						<a href="#" class="pass-recovery">Non ricordo la password</a>

						oppure

						<div class="social-login">
							<a href="#">
								<span class="google-icon"></span>
								Continua con Google
							</a>

							<a href="#">
								<span class="facebook-icon"></span>
								Continua con Facebook
							</a>

							<a href="#">
								<span class="instagram-icon"></span>
								Continua con Instagram
							</a>
						</div>
					</div>
					<!-- / LOGIN MENU ENDS -->

				<a href="#" class="shopping-bag">
					<img src="<?php echo img_path('header/shopping-bag.svg'); ?>" alt="">
				</a>
				<a href="#" class="search">
					<img src="<?php echo img_path('header/cerca.svg'); ?>" alt="">
				</a>
				<a href="#" class="hamburger">
					<img src="<?php echo img_path('header/ham.svg'); ?>" alt="">
				</a>

				<!-- MENU MOBILE ONLY STARTS -->
				<?php get_component('main-menu-mobile', '', true); ?>
				<!-- / MENU MOBILE ONLY ENDS -->
			</div>
		</div>
	</div>
	<!-- / ROW MAIN HEADER ENDS -->

</header>