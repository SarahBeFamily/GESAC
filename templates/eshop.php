<?php
/**
 * Eshop template
 */
?>

<section id="pagetitle" class="dark-mode eshop">
	<div class="col">
		<?php get_component('breadcrumbs', 'Acquista servizi', 'dark', true); ?>

		<h1 class="page-title">Acquista servizi</h1>
	</div>
</section>

<section id="eshop-services">

	<a id="show-all-services" class="button-accordion hidden" role="button">Tutti i nostri servizi</a>

	<div class="tabs-v2">

		<ul class="tabs v2">
			<!-- DESKTOP TAB TITLES -->
			<div class="desk-tabs-title v2">
				<li class="item" data-menu-tab="#parcheggio">

					<div class="item-icon">
						<div class="img-wrap">
							<img src="<?php echo img_path('icons/Parcheggi.svg'); ?>" alt="">
						</div>

						<p class="title">Parcheggio</p>
					</div>

				</li>
				<li class="item" data-menu-tab="#fast-track">

					<div class="item-icon">
						<div class="img-wrap">
							<img src="<?php echo img_path('icons/FAST-Track.svg'); ?>" alt="">
						</div>

						<p class="title">FAST Track</p>
					</div>

				</li>
				<li class="item" data-menu-tab="#gold-card">

					<div class="item-icon">
						<div class="img-wrap">
							<img src="<?php echo img_path('icons/Gold-Card.svg'); ?>" alt="">
						</div>

						<p class="title">Gold Card</p>
					</div>

				</li>
				<li class="item" data-menu-tab="#bus-ticket">

					<div class="item-icon">
						<div class="img-wrap">
							<img src="<?php echo img_path('icons/Bus-Ticket.svg'); ?>" alt="">
						</div>

						<p class="title">Bus Ticket</p>
					</div>

				</li>
				<li class="item" data-menu-tab="#prodotti-tipici">

					<div class="item-icon">
						<div class="img-wrap">
							<img src="<?php echo img_path('icons/Prodotti-Tipici.svg'); ?>" alt="">
						</div>

						<p class="title">Prodotti tipici</p>
					</div>

				</li>
				<li class="item" data-menu-tab="#sala-vip">

					<div class="item-icon">
						<div class="img-wrap">
							<img src="<?php echo img_path('icons/Sala-Vip.svg'); ?>" alt="">
						</div>

						<p class="title">Sala VIP</p>
					</div>

				</li>
			</div>

			<!-- MOBILE TAB TITLE -->
			<li class="item mobile-only" data-menu-tab="#parcheggio">
				<div class="item-icon">
					<div class="img-wrap">
						<img src="<?php echo img_path('icons/Parcheggi.svg'); ?>" alt="">
					</div>

					<p class="title">Parcheggi</p>
				</div>
			</li>

				<!-- PARCHEGGIO CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content hidden" id="parcheggio">

					<div class="content">

						<h3><img src="<?php echo img_path('icons/Parcheggi.svg'); ?>" alt="">Parcheggi</h3>
						<!-- PARCHEGGIO CONTENT TAB V3 -->
						<?php
						/**
						 * Retrieve tabs-v3 component with form eshop parking component inside for step 1
						 */
						get_component('tabs-v3', 'form-eshop-parking', 'Scegli quando parcheggiare', true); ?>
					</div>

					<a href="#" class="link edit w-icon">Modifica/Cancella il tuo ordine  <i class="icon icon-edit"></i></a>

					<div id="choose-parking">

						<div class="center-content">
							<a data-fancybox href="<?php echo img_path('parking-map.png'); ?>" id="lightbox-map" role="button" class="button secondary border-only w-icon btn-icon-map">Visualizza immagine mappa in lightbox</a>
						</div>

						<div class="row between-content sticky-header-wrap">

							<div class="col">

								<div class="row between-content header">
									<h2>Scegli il tuo parcheggio</h2>

									<select name="orderby" id="orderby">
										<option value="lower-price">Prezzo crescente</option>
										<option value="higher-price">Prezzo decrescente</option>
									</select>
								</div>

								<!-- SINGLE PARKING FOUND STARTS -->
								<div class="parking">
									<div class="inner-info">
										<div class="header">
											<img src="<?php echo img_path('eshop/image-8.png'); ?>" alt="">
											<h4>Capodichino Parking (Ultra Low Cost)</h4>
											<span class="offer-type">TARIFFA SCONTATA NON CANCELLABILE E NON MODIFICABILE.</span>

											<p class="availability ok"><span class="val">49</span> Posti disponibili</p>
										</div>

										<!-- ADD TO CART SECTION MOBILE ONLY -->
										<div class="add-to-cart mobile-only">
											<span class="standard-price">9,00€</span>

											online

											<span class="actual-price">6,00€</span>

											<a href="#" class="button secondary">Aggiungi al carrello</a>
										</div>
										<!-- / ADD TO CART SECTION MOBILE ONLY -->

										<div class="content">
											<a class="button-accordion mobile-only">Dettagli contenuto</a>
											<div class="description mobile-hidden">
												<ul>
													<li>Navetta gratuita dedicata.</li>
													<li>Il parcheggio apre alle 4:30 del mattino.</li>
													<li>13 minuti dal terminal.</li>
												</ul>

												<a href="#" class="link">“Se ti registri al  nostro programma fidelity, guadagni xxpt”</a>
											</div>
										</div>
									</div>

									<div class="add-to-cart no-mobile">
										<span class="standard-price">9,00€</span>

										online

										<span class="actual-price">6,00€</span>

										<a href="#" class="button secondary">Aggiungi al carrello</a>
									</div>
								</div>
								<!-- / SINGLE PARKING FOUND ENDS -->

								<!-- OTHER SERVICES ROW -->
								<div class="altri-servizi">
									<a class="button btn-open-close close" role="button">Altri Servizi</a>

									<div class="service hidden">

										<div class="inner-info">
											<div class="header">
												<img src="<?php echo img_path('eshop/image-10.png'); ?>" alt="">
												<h4>Fast Track</h4>
											</div>

											<div class="content">
												<div class="description">
													<p>
														Fast Track è il servizio che ti permette di accedere più VELOCEMENTE AI CONTROLLI di sicurezza e all'area imbarchi. Risparmia il 20%!
													</p>

													<ul>
														<li>Il Ticket è valido fino a 6 mesi dalla data di prenotazione on line.</li>
														<li>Non rimborsabile</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="add-to-cart">
											<span class="actual-price">7,00€</span>

											<div class="quantity">
												<div class="minus"><i class="icon icon-minus"></i></div>
												<div class="qty">1</div>
												<div class="plus"><i class="icon icon-plus"></i></div>
											</div>

											<a href="#" class="button secondary">Aggiungi al carrello</a>
										</div>
									</div>
								</div>
								<!-- / OTHER SERVICES ROW -->

								<!-- SINGLE PARKING FOUND STARTS -->
								<div class="parking">
									<div class="inner-info">
										<div class="header">
											<img src="<?php echo img_path('eshop/image-8.png'); ?>" alt="">
											<h4>Capodichino Parking (Ultra Low Cost)</h4>
											<span class="offer-type">TARIFFA SCONTATA NON CANCELLABILE E NON MODIFICABILE.</span>

											<p class="availability ok"><span class="val">49</span> Posti disponibili</p>
										</div>

										<!-- ADD TO CART SECTION MOBILE ONLY -->
										<div class="add-to-cart mobile-only">
											<span class="standard-price">9,00€</span>

											online

											<span class="actual-price">6,00€</span>

											<a href="#" class="button secondary">Aggiungi al carrello</a>
										</div>
										<!-- / ADD TO CART SECTION MOBILE ONLY -->

										<div class="content">
											<a class="button-accordion mobile-only">Dettagli contenuto</a>
											<div class="description mobile-hidden">
												<ul>
													<li>Navetta gratuita dedicata.</li>
													<li>Il parcheggio apre alle 4:30 del mattino.</li>
													<li>13 minuti dal terminal.</li>
												</ul>

												<a href="#" class="link">“Se ti registri al  nostro programma fidelity, guadagni xxpt”</a>
											</div>
										</div>
									</div>

									<div class="add-to-cart no-mobile">
										<span class="standard-price">9,00€</span>
										online

										<span class="actual-price">6,00€</span>

										<a href="#" class="button secondary">Aggiungi al carrello</a>
									</div>
								</div>
								<!-- / SINGLE PARKING FOUND ENDS -->

								<!-- OTHER SERVICES ROW -->
								<div class="altri-servizi">
									<a class="button btn-open-close close" role="button">Altri Servizi</a>

									<div class="service hidden">

										<div class="inner-info">
											<div class="header">
												<img src="<?php echo img_path('eshop/image-10.png'); ?>" alt="">
												<h4>Fast Track</h4>
											</div>

											<div class="content">
												<div class="description">
													<p>
														Fast Track è il servizio che ti permette di accedere più VELOCEMENTE AI CONTROLLI di sicurezza e all'area imbarchi. Risparmia il 20%!
													</p>

													<ul>
														<li>Il Ticket è valido fino a 6 mesi dalla data di prenotazione on line.</li>
														<li>Non rimborsabile</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="add-to-cart">
											<span class="actual-price">7,00€</span>

											<div class="quantity">
												<div class="minus"><i class="icon icon-minus"></i></div>
												<div class="qty">1</div>
												<div class="plus"><i class="icon icon-plus"></i></div>
											</div>

											<a href="#" class="button secondary">Aggiungi al carrello</a>
										</div>
									</div>
								</div>
								<!-- / OTHER SERVICES ROW -->

								<!-- SINGLE PARKING FOUND STARTS -->
								<div class="parking">
									<div class="inner-info">
										<div class="header">
											<img src="<?php echo img_path('eshop/image-8.png'); ?>" alt="">
											<h4>Capodichino Parking (Ultra Low Cost)</h4>
											<span class="offer-type">TARIFFA SCONTATA NON CANCELLABILE E NON MODIFICABILE.</span>

											<p class="availability ok"><span class="val">49</span> Posti disponibili</p>
										</div>

										<!-- ADD TO CART SECTION MOBILE ONLY -->
										<div class="add-to-cart mobile-only">
											<span class="standard-price">9,00€</span>

											online

											<span class="actual-price">6,00€</span>

											<a href="#" class="button secondary">Aggiungi al carrello</a>
										</div>
										<!-- / ADD TO CART SECTION MOBILE ONLY -->

										<div class="content">
											<a class="button-accordion mobile-only">Dettagli contenuto</a>
											<div class="description mobile-hidden">
												<ul>
													<li>Navetta gratuita dedicata.</li>
													<li>Il parcheggio apre alle 4:30 del mattino.</li>
													<li>13 minuti dal terminal.</li>
												</ul>

												<a href="#" class="link">“Se ti registri al  nostro programma fidelity, guadagni xxpt”</a>
											</div>
										</div>
									</div>

									<div class="add-to-cart no-mobile">
										<span class="standard-price">9,00€</span>
										online

										<span class="actual-price">6,00€</span>

										<a href="#" class="button secondary">Aggiungi al carrello</a>
									</div>
								</div>
								<!-- / SINGLE PARKING FOUND ENDS -->

								<!-- OTHER SERVICES ROW -->
								<div class="altri-servizi">
									<a class="button btn-open-close close" role="button">Altri Servizi</a>

									<div class="service hidden">

										<div class="inner-info">
											<div class="header">
												<img src="<?php echo img_path('eshop/image-10.png'); ?>" alt="">
												<h4>Fast Track</h4>
											</div>

											<div class="content">
												<div class="description">
													<p>
														Fast Track è il servizio che ti permette di accedere più VELOCEMENTE AI CONTROLLI di sicurezza e all'area imbarchi. Risparmia il 20%!
													</p>

													<ul>
														<li>Il Ticket è valido fino a 6 mesi dalla data di prenotazione on line.</li>
														<li>Non rimborsabile</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="add-to-cart">
											<span class="actual-price">7,00€</span>

											<div class="quantity">
												<div class="minus"><i class="icon icon-minus"></i></div>
												<div class="qty">1</div>
												<div class="plus"><i class="icon icon-plus"></i></div>
											</div>

											<a href="#" class="button secondary">Aggiungi al carrello</a>
										</div>
									</div>
								</div>
								<!-- / OTHER SERVICES ROW -->

							</div>

							<!-- CART ROW -->
							<div class="col cart">
								<div class="cart-wrap">
									<h3>Riepilogo carrello</h3>

									<!-- CART WITH ITEMS -->
									<div class="cart">
										<div class="item">
											<div class="remove-item">
												<i class="icon icon-cancel"></i>
											</div>

											<h4>Capodichino Parking (Ultra Low Cost)</h4>

											<p class="parking-start">dal 21 Set 2022 19:00</p>
											<p class="parking-end">al 21 Set 2022 21:00</p>

											<span class="actual-price item-price">5,50€</span>
										</div>

										<div class="total">
											Totale
											<span id="total-price" class="actual-price">5,50€</span>

											<a href="#" class="button secondary">Vai all'acquisto</a>
										</div>
									</div>

									<!-- CART EMPTY -->
									<div class="cart-empty hidden">
										Il tuo carrello è vuoto
									</div>
								</div>
							</div>
							<!-- / CART ROW ENDS -->

						</div>
					</div>
					<!-- / CHOOSE PARKING ENDS -->
				</div>
				<!-- / PARCHEGGIO CONTENT MOBILE & DESKTOP ENDS -->

			<!-- MOBILE TAB TITLE -->
			<li class="item mobile-only" data-menu-tab="#fast-track">
				<div class="item-icon">
					<div class="img-wrap">
						<img src="<?php echo img_path('icons/FAST-Track.svg'); ?>" alt="">
					</div>

					<p class="title">FAST Track</p>
				</div>
			</li>

				<!-- FAST TRACK CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content hidden" id="fast-track">
					<div class="content">

						<h3><img src="<?php echo img_path('icons/FAST-Track.svg'); ?>" alt="">FAST Track</h3>

						<!-- FAST TRACK CONTENT TAB V3 -->
						<?php
						/**
						 * Retrieve tabs-v3 component with form eshop parking quantity component inside for step 1
						 */
						get_component('tabs-v3', 'form-eshop-quantity', 'Scegli la quantità', true); ?>
					</div>

					<a href="#" class="link edit w-icon">Modifica/Cancella il tuo ordine  <i class="icon icon-edit"></i></a>

					<div class="buy-service">

						<div class="row between-content">

							<div class="col">

								<!-- SINGLE SERVICE FOUND STARTS -->
								<div class="service">

									<div class="inner-info">
										<div class="header">
											<img src="<?php echo img_path('eshop/image-10.png'); ?>" alt="">
											<h4>Fast Track</h4>
										</div>

										<div class="content">
											<div class="description">
												FAST Track è il servizio che ti permette di accedere più VELOCEMENTE AI CONTROLLI di sicurezza e all'area imbarchi. Risparmia il 20%!

												<ul>
													<li>Il Ticket è valido fino a 6 mesi dalla data di prenotazione on line.</li>
													<li>Non rimborsabile</li>
													<li>Il servizio è attualmente erogato in modalità saltafila presso i varchi controlli security. Una volta ai controlli rivolgersi al personale per usufruire del servizio.</li>
												</ul>

												<a href="#" class="link">“Se ti registri al  nostro programma fidelity, guadagni xxpt”</a>
											</div>
										</div>
									</div>

									<div class="add-to-cart">
										<span class="actual-price">7,00€</span>

										<div class="quantity">
											<div class="minus"><i class="icon icon-minus"></i></div>
											<div class="qty">1</div>
											<div class="plus"><i class="icon icon-plus"></i></div>
										</div>

										<a href="#" class="button secondary">Aggiungi al carrello</a>
									</div>
								</div>
								<!-- / SINGLE TICKET FOUND ENDS -->
							</div>

							<!-- CART ROW -->
							<div class="col cart">
								<div class="cart-wrap">
									<h3>Riepilogo carrello</h3>

									<!-- CART WITH ITEMS -->
									<div class="cart">
										<div class="item">
											<div class="remove-item">
												<i class="icon icon-cancel"></i>
											</div>

											<h4>Capodichino Parking (Ultra Low Cost)</h4>

											<p class="parking-start">dal 21 Set 2022 19:00</p>
											<p class="parking-end">al 21 Set 2022 21:00</p>

											<span class="actual-price item-price">5,50€</span>
										</div>

										<div class="total">
											Totale
											<span id="total-price" class="actual-price">5,50€</span>

											<a href="#" class="button secondary">Vai all'acquisto</a>
										</div>
									</div>

									<!-- CART EMPTY -->
									<div class="cart-empty hidden">
										Il tuo carrello è vuoto
									</div>
								</div>
							</div>
							<!-- / CART ROW ENDS -->
						</div>
					</div>
				</div>

			<!-- MOBILE TAB TITLE -->
			<li class="item mobile-only" data-menu-tab="#gold-card">
				<div class="item-icon">
					<div class="img-wrap">
						<img src="<?php echo img_path('icons/Gold-Card.svg'); ?>" alt="">
					</div>

					<p class="title">Gold Card</p>
				</div>
			</li>

				<!-- GOLD CARD CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content hidden" id="gold-card">
					<div class="content">

						<h3><img src="<?php echo img_path('icons/Gold-Card.svg'); ?>" alt="">Gold Card</h3>

						<!-- GOLD CARD CONTENT TAB V3 -->
						<?php
						/**
						 * Retrieve tabs-v3 component with form eshop parking quantity component inside for step 1
						 */
						get_component('tabs-v3', 'form-eshop-quantity', 'Scegli la quantità', true); ?>
					</div>

					<a href="#" class="link edit w-icon">Modifica/Cancella il tuo ordine  <i class="icon icon-edit"></i></a>

					<div id="goldcard">
						<div class="row between-content">

							<div class="col">

								<div class="service-item">

									<div class="inner-info">
										<div class="header">
											<img src="<?php echo img_path('eshop/GoldCard-1.png'); ?>" alt="">
											<h4>Status GOLD</h4>
										</div>

										<div class="content">

											<div class="description">
												Grazie allo status gold avrai:

												<ul>
													<li>Passaggi illimitati al Fast Track</li>
													<li>30%% di sconto online al P1 e al P3 coperto e 52% di sconto al P3 sulle casse automatiche.</li>
												</ul>

												<p class="color-secondary">Per acquistare lo status gold effetua prima il <a href="#" class="link">login</a> inserendo Username e Passwod della tua Fidelity.</p>
											</div>
										</div>
									</div>

									<div class="add-to-cart">
										<span class="actual-price">200€</span>

										<a href="#" class="button secondary">Aggiungi al carrello</a>
									</div>
								</div>

							</div>

							<!-- CART ROW -->
							<div class="col cart">
								<div class="cart-wrap">
									<h3>Riepilogo carrello</h3>

									<!-- CART WITH ITEMS -->
									<div class="cart">
										<div class="item">
											<div class="remove-item">
												<i class="icon icon-cancel"></i>
											</div>

											<h4>Capodichino Parking (Ultra Low Cost)</h4>

											<p class="parking-start">dal 21 Set 2022 19:00</p>
											<p class="parking-end">al 21 Set 2022 21:00</p>

											<span class="actual-price item-price">5,50€</span>
										</div>

										<div class="total">
											Totale
											<span id="total-price" class="actual-price">5,50€</span>

											<a href="#" class="button secondary">Vai all'acquisto</a>
										</div>
									</div>

									<!-- CART EMPTY -->
									<div class="cart-empty hidden">
										Il tuo carrello è vuoto
									</div>
								</div>
							</div>
							<!-- / CART ROW ENDS -->
						</div>
					</div>
				</div>

			<!-- MOBILE TAB TITLE -->
			<li class="item mobile-only" data-menu-tab="#bus-ticket">
				<div class="item-icon">
					<div class="img-wrap">
						<img src="<?php echo img_path('icons/Bus-Ticket.svg'); ?>" alt="">
					</div>

					<p class="title">Bus Ticket</p>
				</div>
			</li>

				<!-- BUS TICKET CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content hidden" id="bus-ticket">

					<div class="content">

						<h3><img src="<?php echo img_path('icons/Bus-Ticket.svg'); ?>" alt="">Bus Ticket</h3>

						<!--BUS TICKET CONTENT TAB V3 -->
						<?php
						/**
						 * Retrieve tabs-v3 component with form eshop parking quantity component inside for step 1
						 */
						get_component('tabs-v3', 'form-eshop-quantity', 'Scegli la quantità', true); ?>
					</div>

					<a href="#" class="link edit w-icon">Modifica/Cancella il tuo ordine  <i class="icon icon-edit"></i></a>

					<div class="buy-service">

						<div class="row between-content">

							<div class="col">

								<!-- SINGLE SERVICE FOUND STARTS -->
								<div class="ticket">

									<div class="inner-info">
										<div class="header">
											<img src="<?php echo img_path('eshop/image-14.png'); ?>" alt="">
											<h4>Ticket Alibus</h4>

											<span class="offer-type">NON RIMBORSABILE</span>
										</div>

										<!-- ADD TO CART SECTION MOBILE ONLY -->
										<div class="add-to-cart mobile-only">
											<span class="actual-price">5,00€</span>

											<div class="quantity">
												<div class="minus"><i class="icon icon-minus"></i></div>
												<div class="qty">1</div>
												<div class="plus"><i class="icon icon-plus"></i></div>
											</div>

											<a href="#" class="button secondary">Aggiungi al carrello</a>
										</div>
										<!-- / ADD TO CART SECTION MOBILE ONLY -->

										<div class="content">
											<a class="button-accordion mobile-only">Dettagli contenuto</a>
											<div class="description mobile-hidden">
												<ul>
													<li>Da e Per Aeroporto - Stazione - Porto</li>
													<li>Ticket standard No priority</li>
												</ul>

												<a href="#" class="link">“Se ti registri al  nostro programma fidelity, guadagni xxpt”</a>
											</div>
										</div>
									</div>

									<div class="add-to-cart no-mobile">
										<span class="actual-price">5,00€</span>

										<div class="quantity">
											<div class="minus"><i class="icon icon-minus"></i></div>
											<div class="qty">1</div>
											<div class="plus"><i class="icon icon-plus"></i></div>
										</div>

										<a href="#" class="button secondary">Aggiungi al carrello</a>
									</div>
								</div>
								<!-- / SINGLE TICKET FOUND ENDS -->

								<!-- SINGLE TICKET FOUND STARTS -->
								<div class="ticket">

									<div class="inner-info">
										<div class="header">
											<img src="<?php echo img_path('eshop/image-14.png'); ?>" alt="">
											<h4>Ticket Alibus VIP</h4>

											<span class="offer-type">NON RIMBORSABILE</span>
										</div>

										<!-- ADD TO CART SECTION MOBILE ONLY -->
										<div class="add-to-cart mobile-only">
											<span class="actual-price">5,00€</span>

											<div class="quantity">
												<div class="minus"><i class="icon icon-minus"></i></div>
												<div class="qty">1</div>
												<div class="plus"><i class="icon icon-plus"></i></div>
											</div>

											<a href="#" class="button secondary">Aggiungi al carrello</a>
										</div>
										<!-- / ADD TO CART SECTION MOBILE ONLY -->

										<div class="content">
											<a class="button-accordion mobile-only">Dettagli contenuto</a>
											<div class="description mobile-hidden">
												<ul>
													<li>Da e Per Aeroporto - Stazione - Porto</li>
													<li>Con priorità di saliita per trovare con comodità il tuo posto e saltare la fila!</li>
												</ul>

												<a href="#" class="link">“Se ti registri al  nostro programma fidelity, guadagni xxpt”</a>
											</div>
										</div>
									</div>

									<div class="add-to-cart no-mobile">
										<span class="actual-price">5,00€</span>

										<div class="quantity">
											<div class="minus"><i class="icon icon-minus"></i></div>
											<div class="qty">1</div>
											<div class="plus"><i class="icon icon-plus"></i></div>
										</div>

										<a href="#" class="button secondary">Aggiungi al carrello</a>
									</div>
								</div>
								<!-- / SINGLE TICKET FOUND ENDS -->
							</div>

							<!-- CART ROW -->
							<div class="col cart">
								<div class="cart-wrap">
									<h3>Riepilogo carrello</h3>

									<!-- CART WITH ITEMS -->
									<div class="cart">
										<div class="item">
											<div class="remove-item">
												<i class="icon icon-cancel"></i>
											</div>

											<h4>Capodichino Parking (Ultra Low Cost)</h4>

											<p class="parking-start">dal 21 Set 2022 19:00</p>
											<p class="parking-end">al 21 Set 2022 21:00</p>

											<span class="actual-price item-price">5,50€</span>
										</div>

										<div class="total">
											Totale
											<span id="total-price" class="actual-price">5,50€</span>

											<a href="#" class="button secondary">Vai all'acquisto</a>
										</div>
									</div>

									<!-- CART EMPTY -->
									<div class="cart-empty hidden">
										Il tuo carrello è vuoto
									</div>
								</div>
							</div>
							<!-- / CART ROW ENDS -->
						</div>
					</div>
				</div>

			<!-- MOBILE TAB TITLE -->
			<li class="item mobile-only" data-menu-tab="#prodotti-tipici">

				<div class="item-icon">
					<div class="img-wrap">
						<img src="<?php echo img_path('icons/Prodotti-Tipici.svg'); ?>" alt="">
					</div>

					<p class="title">Prodotti tipici</p>
				</div>
			</li>

				<!-- PRODOTTI TIPICI CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content hidden" id="prodotti-tipici">

					<div class="content">

					<h3><img src="<?php echo img_path('icons/Prodotti-Tipici.svg'); ?>" alt="">Prodotti tipici</h3>

						<!--PRODOTTI TIPICI CONTENT TAB V3 -->
						<?php
						/**
						 * Retrieve tabs-v3 component with form eshop parking quantity component inside for step 1
						 */
						get_component('tabs-v3', 'form-eshop-quantity', 'Scegli la quantità', true); ?>
					</div>
				</div>

			<!-- MOBILE TAB TITLE -->
			<li class="item mobile-only" data-menu-tab="#sala-vip">

				<div class="item-icon">
					<div class="img-wrap">
						<img src="<?php echo img_path('icons/Sala-Vip.svg'); ?>" alt="">
					</div>

					<p class="title">Sala VIP</p>
				</div>
			</li>

				<!-- SALA VIP CONTENT MOBILE & DESKTOP -->
				<div class="tabs-v2-content hidden" id="sala-vip">

					<div class="content">

						<h3><img src="<?php echo img_path('icons/Sala-Vip.svg'); ?>" alt="">Sala VIP</h3>

						<!--SALA VIP CONTENT TAB V3 -->
						<?php
						/**
						 * Retrieve tabs-v3 component with form eshop parking quantity component inside for step 1
						 */
						get_component('tabs-v3', 'form-eshop-quantity', 'Scegli la quantità', true); ?>
					</div>
				</div>
		</ul>
	</div>

	<!-- PARKING ASSISTANCE SECTION -->
	<div id="parking-help" class="hidden">
		<div class="col">
			<h2><i class="icon icon-parking"></i> Richiedi assistenza parcheggi</h2>

			<div class="row">
				<div><i class="icon-circle-mail"></i> <p><a href="#" class="link white">Scrivici</a></p></div>

				<div><i class="icon-circle-phone"></i> <p>Telefonaci al <a href="#" class="link">081 789 68 88</a> <span class="orari">(Lun-Ven 9:00-18:00)</span></p></div>
			</div>
		</div>
	</div>

</section>

<?php
// Include the cta section "Vantaggi"
include_section('cta-vantaggi');
?>

<section id="benbo" class="cta vw-regular white">
	<div class="col --text">
		<img src="<?php echo img_path('eshop/Benbo-logo.png'); ?>" alt="">

		<h3>Il nuovo Capsule Hotel in Aeroporto per soggiorni a partire da 1 ora!</h3>
		<p>
			BenBo trova spazio all’interno dell’aeroporto e si compone di unità indipendenti accessibili 24/24 ore, 7/7 giorni, ciascuna dotata di letto, work-station e bagno privato con doccia.
		</p>
	</div>

	<div class="col --button">
		<a href="#" class="button secondary arrow">PRENOTA SUBITO</a>
	</div>
</section>

<?php
// Include the cta section "General"
// include_section('cta-general', 'benbo white', 'Il nuovo Capsule Hotel in Aeroporto per soggiorni a partire da 1 ora!', 'PRENOTA SUBITO');

// Include the cta section "Download App"
include_section('cta-download-app');

// Include the cta section "Newsletter"
include_section('cta-newsletter');
?>