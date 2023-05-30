<?php
/**
 * Voli Diretti template
 */
?>

<section id="pagetitle" class="dark-mode voli-diretti">

	<div class="col">
		<?php get_component('breadcrumbs', 'Voli Diretti', 'dark', true); ?>

		<h1 class="page-title">Voli Diretti</h1>
	</div>

</section>

<section id="flights-filter">

	<div class="form-filter">
		<?php get_component('form-filter', '', false); ?>
	</div>

	<div class="flights-list">

		<!-- TITLES ROW STARTS - DESKTOP ONLY -->
		<div class="titles row">
			<div class="col">Volo</div>
			<div class="col airline">Compagnia Aerea</div>
			<div class="col periodo">Info Periodo</div>
			<div class="col">Orario</div>
			<div class="col">Frequenza</div>
		</div>
		<!-- / TITLES ROW ENDS - DESKTOP ONLY -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row closed">

			<div class="col volo">
				<span class="n_flight">TA18649</span>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/turkish.png'); ?>" alt=""></div>
				
				<div class="col info">
					<div class="name">
						<span class="airline-name">Turkish Airlines</span>
					</div>

					<div class="extra">
						Call Center: <span class="call-center">xxxxxxxxxxxxxx</span>
					</div>
					<div class="extra">
						Website: <span class="website">www.xxxxxxxxxxxxxx.com</span>
					</div>
				</div>
			</div>

			<div class="col periodo">
				<div class="label mobile-only">Info Periodo</div>
				<div class="value">
					Attivo dal <span class="active-data active-from">12-08-22</span> al <span class="active-data active-to">18-12-22</span>
				</div>
			</div>

			<div class="col orario">
				<div class="label mobile-only">Orario</div>
				12:30
			</div>

			<div class="col frequenza">
				<div class="label mobile-only">Frequenza</div>
				<span class="regularity">Lun-Mar-Ven</span>
			</div>

			<div class="col flight-info-mobile mobile-only">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/turkish.png'); ?>" alt=""></div>
				<div class="col volo"><span class="n_flight">TA18649</span></div>
				<div class="col airline"><span class="airline-name">Turkish Airlines</span></div>
			</div>

			<div class="button-open-flight mobile-only"><i class="icon icon-xmark"></i></div>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row closed">

			<div class="col volo">
				<span class="n_flight">TA18649</span>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/klm.png'); ?>" alt=""></div>
				
				<div class="col info">
					<div class="name">
						<span class="airline-name">KLM</span>
					</div>

					<div class="extra">
						Call Center: <span class="call-center">xxxxxxxxxxxxxx</span>
					</div>
					<div class="extra">
						Website: <span class="website">www.xxxxxxxxxxxxxx.com</span>
					</div>
				</div>
			</div>

			<div class="col periodo">
				<div class="label mobile-only">Info Periodo</div>
				<div class="value">
					Attivo dal <span class="active-data active-from">12-08-22</span> al <span class="active-data active-to">18-12-22</span>
				</div>
			</div>

			<div class="col orario">
				<div class="label mobile-only">Orario</div>
				12:30
			</div>

			<div class="col frequenza">
				<div class="label mobile-only">Frequenza</div>
				<span class="regularity">Gio-Sab</span>
			</div>

			<div class="col flight-info-mobile mobile-only">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/klm.png'); ?>" alt=""></div>
				<div class="col volo"><span class="n_flight">TA18649</span></div>
				<div class="col airline"><span class="airline-name">KLM</span></div>
			</div>

			<div class="button-open-flight mobile-only"><i class="icon icon-xmark"></i></div>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row closed">

			<div class="col volo">
				<span class="n_flight">TA18649</span>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/condor.png'); ?>" alt=""></div>
				
				<div class="col info">
					<div class="name">
						<span class="airline-name">Condor Airlines</span>
					</div>

					<div class="extra">
						Call Center: <span class="call-center">xxxxxxxxxxxxxx</span>
					</div>
					<div class="extra">
						Website: <span class="website">www.xxxxxxxxxxxxxx.com</span>
					</div>
				</div>
			</div>

			<div class="col periodo">
				<div class="label mobile-only">Info Periodo</div>
				<div class="value">
					Attivo dal <span class="active-data active-from">12-08-22</span> al <span class="active-data active-to">18-12-22</span>
				</div>
			</div>

			<div class="col orario">
				<div class="label mobile-only">Orario</div>
				12:30
			</div>

			<div class="col frequenza">
				<div class="label mobile-only">Frequenza</div>
				<span class="regularity">Lun-Mar-Ven</span>
			</div>

			<div class="col flight-info-mobile mobile-only">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/condor.png'); ?>" alt=""></div>
				<div class="col volo"><span class="n_flight">TA18649</span></div>
				<div class="col airline"><span class="airline-name">Condor Airlines</span></div>
			</div>

			<div class="button-open-flight mobile-only"><i class="icon icon-xmark"></i></div>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row closed">

			<div class="col volo">
				<span class="n_flight">TA18649</span>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/klm.png'); ?>" alt=""></div>
				
				<div class="col info">
					<div class="name">
						<span class="airline-name">KLM</span>
					</div>

					<div class="extra">
						Call Center: <span class="call-center">xxxxxxxxxxxxxx</span>
					</div>
					<div class="extra">
						Website: <span class="website">www.xxxxxxxxxxxxxx.com</span>
					</div>
				</div>
			</div>

			<div class="col periodo">
				<div class="label mobile-only">Info Periodo</div>
				<div class="value">
					Attivo dal <span class="active-data active-from">19-12-22</span> al <span class="active-data active-to">30-06-23</span>
				</div>
			</div>

			<div class="col orario">
				<div class="label mobile-only">Orario</div>
				9:30
			</div>

			<div class="col frequenza">
				<div class="label mobile-only">Frequenza</div>
				<span class="regularity">Lun-Ven</span>
			</div>

			<div class="col flight-info-mobile mobile-only">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/klm.png'); ?>" alt=""></div>
				<div class="col volo"><span class="n_flight">TA18649</span></div>
				<div class="col airline"><span class="airline-name">KLM</span></div>
			</div>

			<div class="button-open-flight mobile-only"><i class="icon icon-xmark"></i></div>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row closed">

			<div class="col volo">
				<span class="n_flight">TA18649</span>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/easyjet.png'); ?>" alt=""></div>
				
				<div class="col info">
					<div class="name">
						<span class="airline-name">EasyJet</span>
					</div>

					<div class="extra">
						Call Center: <span class="call-center">xxxxxxxxxxxxxx</span>
					</div>
					<div class="extra">
						Website: <span class="website">www.xxxxxxxxxxxxxx.com</span>
					</div>
				</div>
			</div>

			<div class="col periodo">
				<div class="label mobile-only">Info Periodo</div>
				<div class="value">
					Attivo dal <span class="active-data active-from">19-12-22</span> al <span class="active-data active-to">30-06-23</span>
				</div>
			</div>

			<div class="col orario">
				<div class="label mobile-only">Orario</div>
				12:30
			</div>

			<div class="col frequenza">
				<div class="label mobile-only">Frequenza</div>
				<span class="regularity">Mer-Ven</span>
			</div>

			<div class="col flight-info-mobile mobile-only">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/easyjet.png'); ?>" alt=""></div>
				<div class="col volo"><span class="n_flight">TA18649</span></div>
				<div class="col airline"><span class="airline-name">EasyJet</span></div>
			</div>

			<div class="button-open-flight mobile-only"><i class="icon icon-xmark"></i></div>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row closed">

			<div class="col volo">
				<span class="n_flight">TA18649</span>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/turkish.png'); ?>" alt=""></div>
				
				<div class="col info">
					<div class="name">
						<span class="airline-name">Turkish Airlines</span>
					</div>

					<div class="extra">
						Call Center: <span class="call-center">xxxxxxxxxxxxxx</span>
					</div>
					<div class="extra">
						Website: <span class="website">www.xxxxxxxxxxxxxx.com</span>
					</div>
				</div>
			</div>

			<div class="col periodo">
				<div class="label mobile-only">Info Periodo</div>
				<div class="value">
					Attivo dal <span class="active-data active-from">19-12-22</span> al <span class="active-data active-to">30-06-23</span>
				</div>
			</div>

			<div class="col orario">
				<div class="label mobile-only">Orario</div>
				13:30
			</div>

			<div class="col frequenza">
				<div class="label mobile-only">Frequenza</div>
				<span class="regularity">Mer-Ven</span>
			</div>

			<div class="col flight-info-mobile mobile-only">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/turkish.png'); ?>" alt=""></div>
				<div class="col volo"><span class="n_flight">TA18649</span></div>
				<div class="col airline"><span class="airline-name">Turkish Airlines</span></div>
			</div>

			<div class="button-open-flight mobile-only"><i class="icon icon-xmark"></i></div>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<!-- SINGLE FLIGHT ROW STARTS -->
		<div id="" class="single-flight row closed">

			<div class="col volo">
				<span class="n_flight">TA18649</span>
			</div>

			<div class="col flight-info row">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/britishairways.png'); ?>" alt=""></div>
				
				<div class="col info">
					<div class="name">
						<span class="airline-name">British Airways</span>
					</div>

					<div class="extra">
						Call Center: <span class="call-center">xxxxxxxxxxxxxx</span>
					</div>
					<div class="extra">
						Website: <span class="website">www.xxxxxxxxxxxxxx.com</span>
					</div>
				</div>
			</div>

			<div class="col periodo">
				<div class="label mobile-only">Info Periodo</div>
				<div class="value">
					Attivo dal <span class="active-data active-from">12-08-22</span> al <span class="active-data active-to">18-12-22</span>
				</div>
			</div>

			<div class="col orario">
				<div class="label mobile-only">Orario</div>
				12:30
			</div>

			<div class="col frequenza">
				<div class="label mobile-only">Frequenza</div>
				<span class="regularity">Lun-Mar-Ven</span>
			</div>

			<div class="col flight-info-mobile mobile-only">
				<div class="col airline-logo"><img src="<?php echo img_path('airlines/britishairways.png'); ?>" alt=""></div>
				<div class="col volo"><span class="n_flight">TA18649</span></div>
				<div class="col airline"><span class="airline-name">British Airways</span></div>
			</div>

			<div class="button-open-flight mobile-only"><i class="icon icon-xmark"></i></div>
		</div>
		<!-- / SINGLE FLIGHT ROW ENDS -->

		<a href="#" class="link">Mostra di più</a>
	</div>

</section>


<section class="link-correlati">
	<h4>Link correlati</h4>

	<ul class="related-links">
		<li><a href="#">Come arrivare in aeroporto</a></li>
		<li><a href="#">Bar e Ristoranti</a></li>
		<li><a href="#">Negozi</a></li>
	</ul>

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